<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST["name"];
    $p = $_POST["phone"];
    $e = $_POST["email"];
    $ad = $_POST["address"];
    $g = $_POST["gender"];
    $a = $_POST["age"];

    $con = new mysqli('localhost', 'root', '', 'busticketreservation');
    //host       ^username ^database name
    $sql = "insert into passenger(name,gender,phone_no,email,address,age) values('$n','$g',
          '$p','$e','$ad','$a')";
    $result = $con->query($sql);
}
?>


<html>
    <head>
        <meta charset="utf-8">
        <title> Passenger Information</title>
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        <div style="display: inline">

        </div>
        <div style="display: inline">
            <form  method="post" style="display: inline">
                <table cellspacing="0" border="1" style="display: inline; margin-top: 5%" class="input-table-passenger" align="right">
                    <thead>
                        <tr class="input-table-passenger" style="background-color: beige">
                            <th>Serial</th>
                            <th style="width: 60%">Seat#</th>
                            <th style="width: 40%">Cost</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="input-table-passenger">
                            <td align="right">1</td>
                            <td align="right">A3</td>
                            <td align="right">450</td>
                        </tr>

                        <tr class="input-table-passenger" style="background-color: beige">
                            <th align="right">Total</th>
                            <th align="right"></th>
                            <th align="right">450</th>
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

