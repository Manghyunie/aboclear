<?php
function IsLogOk()
{
                session_start();
                if ($_SESSION['LogOk'] == 0) {
                               header("Location:Index.php");
                               exit;
                               return false;
                }
 
                return true;
}
 
function Logout()
{
                session_start();
                $_SESSION['LogOk'] = 0;
                $_SESSION['Log_name']="";
                header("Location:Index.php");
                exit;
}
?>
