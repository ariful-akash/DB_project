<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET['bus_id'];
    //    $n = $_POST["name"];
//    $p = $_POST["phone"];
//    $e = $_POST["email"];
//    $ad = $_POST["address"];
//    $g = $_POST["gender"];
//    $a = $_POST["age"];
//
    $con = new mysqli('localhost', 'root', '', 'busticketreservation');
    //                  host       ^username ^database name
    $sql = "SELECT * FROM seat where seat.b_id = $id";
    $result = $con->query($sql);
}
?>


<html>
    <head>
        <meta charset="utf-8">
        <title> Passenger Information</title>
        <link rel="stylesheet" href="style/style.css">
        <script src="script/seatScript.js" type="text/javascript"></script>
    </head>
    <body>

        <div style="display: inline;">
            <table border="0" cellspacing="10" cellpadding="5" style="display: inline;">
                <?php
                while ($raw = $result->fetch_assoc()) {
                    $sno = $raw['seat_no'];
                    $b = $raw['book'];
                    $f = $raw['fare'];
                    ?>
                    <tr>
                        <td><input <?php if ($b == 0) { ?>onclick="calculateCost(this.value,<?= $b ?>,<?= $f ?>)<?php } ?>" style="font-size: 20px; width: 70px; height: 40px; border-radius: 5px; <?php if ($b == 0) { ?>background-color: #fff;<?php } else { ?>background-color: #ccc;<?php } ?>" type="button" id="<?= $sno ?>" value="<?= $sno ?>"/></td>
                        <?php
                        $raw = $result->fetch_assoc();
                        $sno = $raw['seat_no'];
                        $b = $raw['book'];
                        $f = $raw['fare'];
                        ?>
                        <td><input <?php if ($b == 0) { ?>onclick="calculateCost(this.value,<?= $b ?>,<?= $f ?>)<?php } ?>" style="font-size: 20px; width: 70px; height: 40px; border-radius: 5px; <?php if ($b == 0) { ?>background-color: #fff;<?php } else { ?>background-color: #ccc;<?php } ?>" type="button" id="<?= $sno ?>" value="<?= $sno ?>"/></td>
                        <td></td>
                        <?php
                        $raw = $result->fetch_assoc();
                        $sno = $raw['seat_no'];
                        $b = $raw['book'];
                        $f = $raw['fare'];
                        ?>
                        <td><input <?php if ($b == 0) { ?>onclick="calculateCost(this.value,<?= $b ?>,<?= $f ?>)<?php } ?>" style="font-size: 20px; width: 70px; height: 40px; border-radius: 5px; <?php if ($b == 0) { ?>background-color: #fff;<?php } else { ?>background-color: #ccc;<?php } ?>" type="button" id="<?= $sno ?>" value="<?= $sno ?>"/></td>
                        <?php
                        $raw = $result->fetch_assoc();
                        $sno = $raw['seat_no'];
                        $b = $raw['book'];
                        $f = $raw['fare'];
                        ?>
                        <td><input <?php if ($b == 0) { ?>onclick="calculateCost(this.value,<?= $b ?>,<?= $f ?>)<?php } ?>" style="font-size: 20px; width: 70px; height: 40px; border-radius: 5px; <?php if ($b == 0) { ?>background-color: #fff;<?php } else { ?>background-color: #ccc;<?php } ?>" type="button" id="<?= $sno ?>" value="<?= $sno ?>"/></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>


        <div style="display: inline">
            <form  method="GET" style="display: inline">
                <table id="costtable" cellspacing="0" border="1" style="display: inline; margin-top: 5%" class="input-table-passenger" align="right">
                    <thead>
                        <tr class="input-table-passenger" style="background-color: beige">
                            <th>Serial</th>
                            <th style="width: 60%">Seat#</th>
                            <th style="width: 40%">Cost</th>
                        </tr>
                    </thead>
                    <tbody id="costlist">
<!--                        <tr class="input-table-passenger">
                            <td align="right">1</td>
                            <td align="right">A3</td>
                            <td align="right">450</td>
                        </tr>-->

                        <tr id="totalcostRow" class="input-table-passenger" style="background-color: beige">
                            <td align="right">Total</td>
                            <td align="right"></td>
                            <td id="totalcost">0</td>
                        </tr>
                    </tbody>
                </table>
                <br>

                <table border="1" class="input-table-passenger" cellspacing="10" align="right" style="display: inline">
                    <tr>

                    </tr>
                    <tr>
                        <td>Name</td>
                        <td><input class="input" type="text" name="name"></td>
                        <td>Phone</td>
                        <td><input class="input" type="number" name="phone"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td ><input class="input" type="email" name="email" ></td>
                    </tr>

                    <tr>
                        <td>Gender</td>
                        <td><input class="input" type="text" name="gender" list="gender"></td>
                    <datalist id="gender">
                        <option value="Male">
                        <option value="Female">
                        <option value="Others">
                    </datalist>

                    <td>Age</td>
                    <td><input class="input" type="number" name="age"></td>
                    </tr>

                    <tr>
                        <td>Address</td>
                        <td ><input class="input" type="text" name="address"></td>
                    </tr>


                    <tr>
                        <td align="center" colspan="4"><input class="input-button" type="submit" value="submit"></td>
                    </tr>

                </table>
            </form>
        </div>

    </body>
</html>

