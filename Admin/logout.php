<?php 
include('config.php');
session_start();
session_unset();

if($_SESSION["x"]=="")
{
	header('location:index.php');
}