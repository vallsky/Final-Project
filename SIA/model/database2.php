<?php
class database {
private $dbHost="Localhost";
private $dbUser="root";
private $dbPassword="";
private $dbName="sia";

function con(){
mysql_connect($this->dbHost,$this->dbUser,$this->dbPassword);
mysql_select_db($this->dbName) or die ("Database Not Found");
}



}



?>