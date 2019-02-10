<?php include('config.php');

if(isset($_GET['action']) && $_GET['action']=="MT_delete")
{
	$var=$_GET['id'];
	$query="delete from manage_team where id='$var'";
    $query_exe=mysql_query($query);
    header('location:ManageTeam.php');
}
if(isset($_GET['action']) && $_GET['action']=="AU_delete")
{
	$var=$_GET['x'];
$query="delete from about_us where id='$var'";
$data=mysql_query($query);
header('location:ManageAboutUs.php');
}
if(isset($_GET['action']) && $_GET['action']=="AP_delete")
{
	$var=$_GET['x'];
$query="delete from admin where id='$var'";
$data=mysql_query($query);
header('location:AdminProfile.php');
}
if(isset($_GET['action']) && $_GET['action']=="Client_delete")
{
	$var=$_GET['x'];
$query="delete from manage_client where id='$var'";
$query_exe=mysql_query($query);
header('location:ManageClient.php');
	
}
if(isset($_GET['action']) && $_GET['action']=="ET_delete")
{
	$var=$_GET['x'];
$query="delete from enquirytype where id='$var'";
$data=mysql_query($query);
header('location:EnquiryType.php');
}



?>