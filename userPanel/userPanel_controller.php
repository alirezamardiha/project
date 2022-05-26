<?php


include '../phps/settings.php';
include '../phps/db.php';
include '../phps/security.php';
include '../phps/functions.php';


session_start();
if( ! Authentication :: check() ) { 
    redirect('../Login/login_controller.php');
    exit;	
    }
	if(Authorization :: Rolls() == 'admin'){
		redirect('../templates/relogin.html');
		exit;
	}	

	
	include 'userPanel_view.php';
	

		


?>