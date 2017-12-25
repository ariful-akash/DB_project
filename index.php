<!DOCTYPE html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $_SESSION['start'] = $start;
    $_SESSION['dest'] = $dest;
    $_SESSION['date'] = $date;
    $_SESSION['type'] = $type;
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Index</title>
        <link href="style/style2.css" rel="stylesheet" type="text/css"/>
        <script src="script/script.js" type="text/javascript"></script>
    </head>
    <body>
        <form  method="post" action="seatsearch.php">
            <table class="input-table" cellspacing="10" align="center">

                <tr>
                    <td>From:</td>
                    <td>
                        <select id="start" name="start" class="input">
                            <option value="">-------------------------</option>
                            <option value="dhaka">Dhaka</option>
                            <option value="rajshahi">Rajshahi</option>
                            <option value="natore">Natore</option>
                            <option value="chittagong">Chittagong</option>
                            <option value="chandpur">Chandpur</option>
                        </select>
                    </td>


                    <td>To:</td>
                    <td>
                        <select id="dest" name="dest" class="input">
                            <option value="">-------------------------</option>
                            <option value="dhaka">Dhaka</option>
                            <option value="rajshahi">Rajshahi</option>
                            <option value="natore">Natore</option>
                            <option value="chittagong">Chittagong</option>
                            <option value="chandpur">Chandpur</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Date:</td>
                    <td><input id="date" class="input"  type="date" name="date"></td>
                    <td>Bus type:</td>
                    <td>
                        <select id="bus_type" name="type" class="input">
                            <option value="">-------------------------</option>
                            <option value="ac">Ac</option>
                            <option value="nonac">Non-Ac</option>
                        </select>
                    </td>

                </tr>

                <tr>
                    <td></td>
                    <td colspan="4"><input class="input-button"  type="submit" value="Search" onclick="return searchValidator()"></td>
                </tr>

            </table>
        </form>
    </body>
</html>
