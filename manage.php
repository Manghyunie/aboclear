<?php
//------------------------------------------------------------
error_reporting(E_ALL);
ini_set("display_errors", 1);
//------------------------------------------------------------

require('cnx/cnx.php');


?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <br>
    <br>
    <div align="center">
        <p align="center">
            <font color="#c1392d" size="4"><b>Modify monitoring</b></font>
        </p>
    </div>
    <?php
    $modifServer = "SELECT a.marque as brand FROM abonnements a";
    ?>
    <form action="manage.php" method="post">
        <?php
        foreach ($bdd->query($modifServer) as $modifServerLine) {
        ?>
            <br>
            <tr>
                <div align="center">
                    <td>
                        <?php echo "Name : "; ?>
                        <?php echo $modifServerLine['brand']; ?>
                    </td>
                </div>
                &nbsp;&nbsp;
            </tr>
        <?php } ?>
    </form>
</body>
</html>