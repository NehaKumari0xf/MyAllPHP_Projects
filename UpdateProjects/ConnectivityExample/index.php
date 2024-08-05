<!doctype html>
<html>
    <head>
        <title>Students</title>
    </head>
    <body>
        <h1>Students</h1>
        <table style="width:100%">
            <thead>
                <tr><th>Student ID</th><th>student's Name</th><th>Class</th><th>Roll</th><th>Obtained Marks</th></tr>
            </thead>
            <tbody>
                <?php
                /*Create a PDO object*/
                $conn=new PDO("mysql:host=localhost;dbname=ricla","root","");
                /* fetch dat from table*/
                $stmt=$conn->prepare("Select * from students order by name");
                $stmt->execute();
                //set the resulting array to associative array
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $recs=$stmt->fetchAll();
                foreach($recs as $data)                
                {
                    echo "<tr><td>".$data['student_id']."</td><td>".strtoupper($data['name'])."</td><td>".$data['class']."</td><td>".$data['roll']."</td><td>".$data['totalMarks']."</td></tr>";
                }
               
                ?>
            </tbody>
        </table>
    </body>
</html>