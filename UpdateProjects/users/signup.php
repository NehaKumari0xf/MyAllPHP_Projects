<?php
$errmsg="";
if(isset($_POST['uname']))
{
    try{
        $con=new PDO("mysql:host=localhost;dbname=ricla;","root","");
        $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        //validate user id
        $stmt=$con->prepare("select * from users where userid=:uid");
        $stmt->bindValue(":uid",$_POST['uid']);
        $stmt->execute();
        $users=$stmt->fetchAll();
        if(count($users)>0)
        {
            $errmsg="User id is already in use. Please select a different user id";
        }
        else
        {
            //add user to users table
            $stmt=$con->prepare("insert into users(uname,gender,email,userid,pwd) values(:uname,:gender,:email,:uid,:pwd)");
            $stmt->bindValue(":uname",$_POST['uname']);
            $stmt->bindValue(":gender",$_POST['gen']);
            $stmt->bindValue(":email",$_POST['email']);
            $stmt->bindValue(":uid",$_POST['uid']);
            $stmt->bindValue(":pwd",$_POST['pwd']);
            $stmt->execute();
            header("location:signin.php?signup=1&uid=".$_POST['uid']);
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
        <title>Signup</title>
        <script>
            function validate()
            {
                var pwd=document.getElementById("pwd").value;
                var cpwd=document.getElementById("cpwd").value;

                if(pwd!=cpwd)
                {
                    alert ("Password and Confirm Password must be same");
                    return false;
                }
                return true;
            }
        </script>
    </head>
    <body>

        <h1>Sign up</h1>
        <form action="signup.php" method="post" onsubmit="return validate()">
            <table>
                <?php
                if($errmsg!="")
                {
                    echo '<tr><td colspan="2" style="color:red;">'.$errmsg.'</td></tr>';
                }
                ?>
                <tr><td><label>Name:</label></td>
                <td><input type="text" name="uname" required value="<?php
                if($errmsg!="")
                {
                    echo $_POST['uname'];
                }
                ?>"
                /></td></tr>
                <tr><td><label>Gender:</label></td><td>
                    <input type="radio" name="gen" value="m" <?php
                    if($errmsg!="")
                    {
                        if($_POST['gen']=='m')
                        echo "checked";
                    }
                    else
                    echo "checked";
                    ?>/>Male 
                    <input type="radio" name="gen" value="f"
                    <?php
                    if($errmsg!=""&&$_POST['gen']=='f')
                    {
        
                        echo "checked";
                    }
                    ?>/>Female</td></tr>
                <tr><td><label>Email:</label></td>
                <td><input type="email" name="email" required
                value="<?php
                if($errmsg!="")
                {
                    echo $_POST['email'];
                }
                ?>"
                /></td></tr>
                <tr><td><label>User ID:</label></td>
                <td><input type="text" name="uid" required/><?php
                if($errmsg!="")
                {
                    echo '<del style="color:red;">'.$_POST['uid'].'</del>';
                }
                ?></td></tr>
                <tr><td><label>Password:</label></td><td><input type="password" name="pwd" id="pwd" required/></td></tr>
                <tr><td><label>Confirm Password:</label></td><td><input type="password" required id="cpwd"/></td></tr>
                <tr><td><input type="reset"/></td><td><input type="submit" value="sign up"/></td></tr>
                
            </table>
        </form>

    </body>
</html>