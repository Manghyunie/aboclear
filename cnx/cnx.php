<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
 
$host = 'localhost';
$port = 3306;
$database = 'aboclear';
$log = 'root';
$pwd = '';
Try
                //test de la conn
{
                $bdd = new PDO("mysql:host=$host;port=$port;dbname=$database", $log, $pwd);
} catch (Exception $e)
                // si erreur récupère l'alerte dans $e
{
                die('Erreur : ' . $e->getMessage()); // Détruit le script et affiche dans $e le message errer en clair
}
?>