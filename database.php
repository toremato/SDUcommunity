<?php
$database = new mysqli("localhost", "root", "", "sducommunity");
if(!$database){
	die($database->error);
}