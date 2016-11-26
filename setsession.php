<?php

    include 'inc/config.php'; //connect to database

    $email = $_GET["email"];
    //echo $email;
    //Get Borrower Id
    try {
        $results = $db->query("SELECT id FROM app_tbl WHERE email = '" . $email . "';");
    } catch (Exception $e) {
        echo "Query Issue: " . $e->getMessage();
        exit;
    }
    $app = $results->fetchAll(PDO::FETCH_ASSOC);

	session_start();
    $email = 'preston@rampy.co';
	$_SESSION["email"] = $email;
    $_SESSION["appId"] = $app[0]['id'];
	
?>