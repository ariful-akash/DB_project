<?php
session_start();

$start = $_POST['start'];
$end = $_POST['dest'];
$date = $_POST['date'];
$type = $_POST['type'];

$con = new mysqli('localhost', 'root', '', 'busticketreservation');
//                     host     ^username ^database name
$sql = "SELECT * FROM `bus` INNER JOIN route WHERE bus.r_id=route.r_id AND route.starting_place='$start' AND route.destination='$end' AND bus.coach_type='$type' AND bus.dep_date='$date';";
$res = $con->query($sql);
?>
<html>
    <head>
        <title>SeatSearch</title>
        <link rel="stylesheet" href="style/style.css">
    </head>

    <body>
        <table class="input-table" cellspacing="10">
            <tr style="background-color: brown">
                <th>COMPANY NAME</th>
                <th>DEPARTING TIME</th>
                <th>STARTING COUNTER</th>
                <th>END COUNTER</th>
                <th>COACH TYPE</th>
                <th>ARRIVAL TIME</th>
                <th>VIEW</th>

            </tr>

            <tr>
                <?php
                while ($row = $res->fetch_assoc()) {
                    $coach = $row['coach_type'];
                    $name = $row['b_name'];
                    $d_time = $row['departing_time'];
                    $start_p = $row['starting_place'];
                    $end = $row['destination'];
                    $time = $d_time + 11;
                    ?>
                    <td><?php
                        if ($name == "deshtravels")
                            echo 'DESH TRAVELS';
                        elseif ($name == "nationaltravels") {
                            echo 'NATIONAL TRAVELS';
                        } elseif ($name == "shyamoli") {
                            echo 'SHYAMOLI PARIBAHAN';
                        }
                        ?></td>
                    <td><?php echo $d_time; ?></td>
                    <td><?php echo $start_p; ?></td>
                    <td><?php echo $end; ?></td>
                    <td><?php
                        if ($coach == "ac") {
                            echo 'AC';
                        } elseif ($coach == "nonac") {
                            echo 'Non-Ac';
                        }
                        ?></td>
                    <td><?php echo "$time:00:00 "; ?></td>
                    <td><a href="#">View Seats</a></td>
                </tr>
            <?php } ?>  
        </table>
        <div>
            <a href="index.php"><-Back</a>
        </div>
    </body>
</html>

