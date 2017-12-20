<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["name"];
    $r = $_POST["reg_no"];
    $ct = $_POST["coach"];
    $dd = $_POST["dep_date"];
    $t = $_POST["time"];
    $f = $_POST["from"];
    $to = $_POST["to"];

    $con = new mysqli('localhost', 'root', '', 'busticketreservation');
    //                     host       ^username ^database name
    //                     
    $sql = "SELECT r_id FROM route WHERE starting_place = '$f' AND destination = '$to'";
    $result = $con->query($sql);
    if ($result->num_rows == 0) {

        $r_ins = "insert into route(starting_place,destination) values ('$f','$to')";
        $result2 = $con->query($r_ins);
    }


    $sql = "SELECT r_id FROM route WHERE starting_place = '$f' AND destination = '$to'";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    $a = $row['r_id'];
    $sql1 = "insert into bus(b_name,reg_no,coach_type,departing_time,dep_date,r_id) values('$n','$r',
          '$ct','$t','$dd',$a)";
    $result1 = $con->query($sql1);
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
                    <td><input id="name" class="input" type="text" name="name"></td>
                </tr>

                <tr>
                    <td>Registration no:</td>
                    <td><input id="reg_no" class="input" type="text" name="reg_no"></td>
                </tr>

                <tr>
                    <td>Coach:</td>
                    <td><input id="coach" class="input" type="text" name="coach"></td>
                </tr>

                <tr>
                    <td>Departing date:</td>
                    <td><input id="dep_date" class="input" type="date" name="dep_date"></td>
                </tr>

                <tr>
                    <td>Time:</td>
                    <td><input id="time" class="input" type="time" name="time"></td>
                </tr>

                <tr>
                    <td>Starting from:</td>
                    <td><input id="starting" class="input" type="text" name="from"></td>
                </tr>

                <tr>
                    <td>Destinaton:</td>
                    <td><input id="dest" class="input" type="text" name="to"></td>
                </tr>


                <tr>
                    <td></td>
                    <td><input class="input-button" type="submit" value="Submit"></td>
                </tr>

            </table>
        </form>
    </body>
</html>
