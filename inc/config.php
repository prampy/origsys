<?php
    /******************************************
     * DATABASE CONNECTION
     ******************************************/
    
    //connect to localhost
	try {
		$db = new PDO('mysql:host=localhost;port=8889;dbname=standingrock','root','root');
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$db->exec("SET NAMES 'utf8'");
	} catch (Exception $e) {
		echo "Could not connect to database: " . $e->getMessage();
		exit;
	}
    /*
    //connect to godaddy
	try {
		$db = new PDO('mysql:host=localhost;dbname=standingrock','ptrampy','Bcswood20!');
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$db->exec("SET NAMES 'utf8'");
	} catch (Exception $e) {
		echo "Could not connect to database: " . $e->getMessage();
		exit;
	}
    */

    /******************************************
     * PAGE REFERENCES
     ******************************************/
    
    $homepage = "http://www.standingrockmortgage.com/";
    $root_path = "localhost:8888/apply.standingrockmortgage.com/"; //localhost
    //$root_path = "http://apply.standingrockmortgage.com/"; //godaddy
    $contact_page = "1-contact.php";
    $loan_purchase_page = "2-loan-purchase.php";
    $loan_refi_page = "2-loan-refi.php";
    $borrower_page = "3-borrower.php";
    $financials_page = "4-financials.php";
    $declarations_page = "5-declarations.php";
    $app_submitted_page = "http://www.standingrockmortgage.com/submitted/";
    //Accounts
    $login_folder = "login/";
    $login_page = "login.php";
    $signup_page = "signup.php";
	
?>