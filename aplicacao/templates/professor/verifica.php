<?php
session_start();
if(!isset($_SESSION['matricula--p'])){
	header("Location: ../login.php");
};