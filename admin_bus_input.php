<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   	$n=$_POST["name"];
//   	$r=$_POST["reg_no"];
//	$e=$_POST["coach"];
//   	$ad=$_POST["departing_date"];
//	$g=$_POST["time"];
//	$a=$_POST["from"];
//	$a=$_POST["to"];
//	$a=$_POST["from"];

    $con = new mysqli('localhost', 'root', '', 'busticketreservation');
    //host       ^username ^database name
//   $sql="insert into passenger(name,gender,phone_no,email,address,age) values('$n','$g',
//          '$p','$e','$ad','$a')";
//     $result=$con->query($sql);
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Admin Bus Input </title>
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body >
        <form  method="post">
            <table class="input-table" align="center">

                <tr>
                    <td>Bus Name:</td>
                    <td><input class="input" type="text" name="name"></td>
                </tr>

                <tr>
                    <td>Registration no:</td>
                    <td><input class="input" type="text" name="reg_no"></td>
                </tr>

                <tr>
                    <td>Coach</td>
                    <td><input class="input" type="text" name="coach"></td>
                </tr>

                <tr>
                    <td>Departing date</td>
                    <td><input class="input" type="date" name="departing_date"></td>
                </tr>

                <tr>
                    <td>Time</td>
                    <td><input class="input" type="time" name="time"></td>
                </tr>

                <tr>
                    <td>Starting from</td>
                    <td><input class="input" type="text" name="from"></td>
                </tr>

                <tr>
                    <td>Destinaton</td>
                    <td><input class="input" type="text" name="to"></td>
                </tr>

                <tr>
                    <td>Counter</td>
                    <td><input class="input" type="text" name="counter"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input class="input-button" type="submit" value="Submit"></td>
                </tr>

            </table>
        </form>
    </body>
</html>
