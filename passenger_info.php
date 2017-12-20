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
        <form  method="post">
            <table border="1" class="input-table" cellspacing="10" align="center">

                <tr>
                    <td>Name</td>
                    <td><input class="input" type="text" name="name"></td>
                    <td>Phone</td>
                    <td><input class="input" type="text" name="phone"></td>
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
                <td><input class="input" type="text" name="age"></td>
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

    </body>
</html>

