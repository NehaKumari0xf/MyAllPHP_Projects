<?php
$errmsg="";
if(!isset($_COOKIE['attempt']))
    {
            //set cookie with attempt 1
            setcookie("attempt","1",time()+120,"/");

    }
    else
    {
        if($_COOKIE['attempt']>=5)
        {
                header("location:signinlocked.html");
        }    }
if(isset($_POST['uid']))
{
    if(!isset($_COOKIE['attempt']))
    {
            //set cookie with attempt 1
            setcookie("attempt","1",time()+120,"/");

    }
    else
    {
        
        //increase cookie attempt by 1
        $counter=$_COOKIE['attempt']+1;
        setcookie("attempt",$counter,time()+120,"/");

    }
    try
    {
        $con=new PDO("mysql:host=localhost;dbname=ricla;","root","");
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        //validate user id
        $stmt=$con->prepare("select * from users where userid=:uid and pwd=:pwd");
        $stmt->bindValue(":uid",$_POST['uid']);
        $stmt->bindValue(":pwd",$_POST['pwd']);
        $stmt->execute();
        $users=$stmt->fetchAll();
        if(count($users)==1)
        {
            session_start();
            $_SESSION['uid']=$users[0]['userid'];
            $_SESSION['uname']=$users[0]['uname'];
            $_SESSION['gender']=$users[0]['gender'];
            header("location:index.php");
        }
        else
        {
            $errmsg="Invalid user id or password. Attempt:".($_COOKIE['attempt']+1)."/5";
            

        }

    }catch(Exception $ex)
    {
        $errmsg=$ex->getMessage();
    }
}
?>

<!doctype html>
<html>
    <head>
        <title>Sign in</title>
    </head>
    <body>
        <?php
        if($errmsg!="")
        {
            echo '<p style="color:red">'.$errmsg.'</p>';
        }

        if(isset($_GET['signup']))
        {
            echo '<p style="color:green"> User created successfully with id <b>'.$_GET['uid'].'</b></p>';

        }

        if(isset($_GET['pwd'])&& $_GET['pwd']=="1")
        {
            echo '<p style="color:green"> Password changed successfully. Re-login with new password.</p>';
        }

        ?>
        <h1>Sign in</h1>
        <form action="signin.php" method="post">
            <table>
                <tr><td><label>User Id:</label></td><td><input type="text" name="uid" value="<?php 
                if(isset($_GET['uid']))
                {
                    echo $_GET['uid'];
                }
                ?>" required/></td></tr>
                <tr><td><label>Password:</label></td><td><input type="password" name="pwd" required/></td></tr>
                <tr><td><a href="signup.php">Sign up</a></td><td><input type="submit" value="sign in"/></td></tr>
            </table>
        </form>
    </body>
</html>