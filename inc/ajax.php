<?php

include 'config.php';  // connects to database
date_default_timezone_set('America/Chicago');
require_once("phpmailer/class.phpmailer.php");
$func = $_GET["func"]; //gets the name of the function that should run


/**************************************************************
* LOG IN FUNCTIONS
* 1. Create New Account
* 2. Log In
* 3. Forgot Password
* 4. Save New Password
* 5. End Session
**************************************************************/


	/******************************************************
	* CREATE NEW ACCOUNT
	******************************************************/
	if ($func == "createAccount") {
		
        $firstName = $_GET["firstName"];
		$lastName = $_GET["lastName"];
		$email = $_GET["email"];
		$password = password_hash($_GET["password"], PASSWORD_DEFAULT);
        
		try {
			$results = $db->query("SELECT email FROM app_tbl WHERE email='" . $email . "';" );
		} catch (Exception $e) {
			echo "Could not connect to database!: " . $e->getMessage();
			exit;
		}
		$results = $results->fetchAll(PDO::FETCH_ASSOC);
		
		//check if user already exists
		if (sizeof($results) > 0){ //email already in use
			$accountResults = "userExists";
		} else { //email not in use, create account
            // STEPS
            // 1. create borrower in app_tbl
            // 2. get id of borrower just created
            // 3. generate srmAppId
            // 4. store srmAppId
            
			
            // 1. creates entry in app_tbl
			try {
				$db->query("INSERT INTO app_tbl (firstName, lastName, email, password, created) VALUES ('" . $firstName . "', '" . $lastName . "', '" . $email . "', '" . $password . "', NOW());" );
			} catch (Exception $e) {
				echo "Query Issue: " . $e->getMessage();
				exit;
			}
            
            // 2. get id of borrower just created
			try {
                $results = $db->query("SELECT id FROM app_tbl ORDER BY id DESC;" );
            } catch (Exception $e) {
                echo "Query Issue: " . $e->getMessage();
                exit;
            }
            $borrower = $results->fetchAll(PDO::FETCH_ASSOC);
            
            // 3. create srmAppId (YYMMDD##)
            
            //selects previous application (to determine new srmAppId for this loan)
            try {
                $results = $db->query("SELECT srmAppId FROM app_tbl ORDER BY id DESC;");
            } catch (Exception $e) {
                echo "Could not connect to database: " . $e->getMessage();
                exit;
            }
            $app = $results->fetchAll(PDO::FETCH_ASSOC);
            
            //an app id is: YYMMDD##
            $today = date('ymd');
            
            //if today == most recent application in table add 1
            if (substr($app[0]['srmAppId'], 0, 6) == $today) {
                //if this is not the first application today, add 1 to the previous appId
                $appNum = substr($app[0]['srmAppId'], 7, 2);
                if ($appNum < 9) { 
                    $appNum = $appNum + 1;
                    $appNum = "0" . $appNum; 
                } else { 
                    $appNum = $appNum + 1;
                }
                
                $srmAppId = $today . $appNum;
            } else {
                //if this is the first application today
                $srmAppId = $today . '01';
            }
            
            //4. store srmAppId
            try {
				$db->query("INSERT INTO app_tbl (srmAppId) VALUES (" . $srmAppId . ";");
			} catch (Exception $e) {
				echo "Could not connect to database: " . $e->getMessage();
				exit;
			}
            
			$accountResults = "accountCreated";
		} // end else

		echo $accountResults;
    }



	/******************************************************
	* LOG IN
	******************************************************/
	if ($func == "authenticateUser") {
		$userEmail = $_GET["email"];
		$userPassword = $_GET["password"];
		
		try {
			$results = $db->query("SELECT password FROM app_tbl WHERE email='" . $userEmail . "';");
		} catch (Exception $e) {
			echo "Could not connect to database: " . $e->getMessage();
			exit;
		}
		$borrower = $results->fetchAll(PDO::FETCH_ASSOC);
		
		//checks if username was found && password matches
		//if authentication passes, set variable to "TRUE"
        if (password_verify($userPassword, $borrower[0]['password'])) {
            $validUser = "TRUE";
		} else { //if either fails
			$validUser = "FALSE";
		}
          
		echo $validUser;
	}

    /******************************************************
	* FORGOT PASSWORD
	******************************************************/
	if ($func == "forgotPassword") {
        
		$userEmail = $_GET["email"];
		
		try {
			$results = $db->query("SELECT email FROM app_tbl WHERE email='" . $userEmail . "';");
		} catch (Exception $e) {
			echo "Could not connect to database: " . $e->getMessage();
			exit;
		}
		$borrower = $results->fetchAll(PDO::FETCH_ASSOC);
		
		//checks if email was found
        //if no email found
        if (sizeof($borrower) == 0) {
            $resetStatus = "email not found";
        } else {
            
            $str = str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!');
            
            $resetCode = substr($str, 0, 6);
            
            //Save $randomPassword to database
            try {
				$db->query("UPDATE app_tbl SET passwordResetCode='" . $resetCode . "' WHERE email='" . $userEmail . "';");
			} catch (Exception $e) {
				echo "Query Issue: " . $e->getMessage();
				exit;
			}
            
            $resetStatus = $resetCode;
        }
          
		echo $resetStatus;
	}

    /******************************************************
	* SAVE NEW PASSWORD
	******************************************************/
	if ($func == "saveNewPassword") {
		
        $email = $_GET["email"];
		$password = password_hash($_GET["password"], PASSWORD_DEFAULT);
        
		try {
			$db->query("UPDATE app_tbl SET password='" . $password . "', passwordResetCode='' WHERE email = '" . $email . "';");
		} catch (Exception $e) {
			echo "Could not connect to database!: " . $e->getMessage();
			exit;
        }
    }

    /******************************************************
	* END SESSION (on Save & Exit)
	******************************************************/
	if ($func == "endSession") {
		//session_start();
        session_destroy();
    }

/**************************************************************
 * INSERT INTO DATABSE
 **************************************************************/
	
	if ($func == "insertInto") {
       
		$tableName = $_GET["tableName"];
		$columnNameString = $_GET["columnNameString"];
		$columnDataString = $_GET["columnDataString"];
         
        echo "INSERT INTO " . $tableName . " (" . $columnNameString . ") VALUES (". $columnDataString . ");";
        
		try {
			$db->query("INSERT INTO " . $tableName . " (" . $columnNameString . ") VALUES (". $columnDataString . ");" );
		} catch (Exception $e) {
			echo "SQL Error (func: insertInto): " . $e->getMessage();
			exit;
		}
	}


/**************************************************************
 * UPDATE DATABASE
 **************************************************************/
	
	if ($func == "update") {
		$tableName = $_GET["tableName"]; 
		$dataString = $_GET["dataString"];
        $columnName = $_GET["columnName"];
		$uniqueId = $_GET["uniqueId"];
                
		try {
			$db->query("UPDATE " . $tableName . " SET " . $dataString . " WHERE " . $columnName . " = " . $uniqueId . ";" );
		} catch (Exception $e) {
			echo "SQL Error (func: update):" . $e->getMessage();
			exit;
		}
	}

/************************************
 * SEND EMAIL
 ************************************/

    if ($func == "sendEmail") {
        $toEmail = $_GET["toEmail"];
        $subject = $_GET["subject"];
        $body = $_GET["body"];
        
        $mail= new PHPMailer();
        
        $mail->SetFrom('robot@standingrockmortgage.com', 'Standing Rock');
        $mail->AddAddress($toEmail);
        $mail->Subject = $subject;
        $mail->msgHTML($body);
        
        if(!$mail->Send()) {
            echo "There was an error sending the email: " . $mail->ErrorInfo;
            exit;
        }
        
    }

/**************************************************************
 * CHECK FOR COMPLETE APPLICATION
 **************************************************************/
	
	if ($func == "checkApplication") {
		$borrowerId = $_GET["borrowerId"]; 
                
		try {
			$results = $db->query("SELECT firstName, subjAddress, ssn, INCOME, LOANAMOUNT FROM app_tbl WHERE id = " . $borrowerId . ";");
		} catch (Exception $e) {
			echo "SQL Error (func: update):" . $e->getMessage();
			exit;
		}
        $results = $results->fetchAll(PDO::FETCH_ASSOC);
        
        //check for all pieces of informatoin
        if ($results[0]['firstName'] == "" OR $results[0]['subjAddress'] == "" OR $results[0]['ssn'] == "" OR $results[0]['income'] == "" OR $results[0]['loanAmount'] == "" OR $results[0]['firstName'] == "") {
            echo "incomplete";
        } else { //you have a complete application and disclosure clock starts ticking
            try { //store today's date in database under completedAppDate
                $db->query("INSERT INTO application_tbl (completedAppDate) VALUES (CURRDATE());");
            } catch (Exception $e) {
                echo "SQL Error (func: update):" . $e->getMessage();
                exit;
            }
            echo "complete";
        }
	}


/**************************************************************
 * CREATE COBORROWER
 **************************************************************/
/*	
	if ($func == "createCobo") {
		//****************
        // 1. Create entry in borrower table
        // 2. Get id of borrower
        // 3. Add coboId to app_tbl
        //****************
        
        $coboEmail = $_GET["email"];
        $appId = $_GET["appId"];
        
        // 1. Create entry in borrower table     
		try {
			$db->query("INSERT INTO app_tbl (email) VALUES ('" . $coboEmail . "');");
		} catch (Exception $e) {
			echo "SQL Error (func: update):" . $e->getMessage();
			exit;
		}
        
        // 2. Get id of borrower
        try {
			$results = $db->query("SELECT id FROM app_tbl WHERE email = '" . $coboEmail . "';");
		} catch (Exception $e) {
			echo "SQL Error (func: update):" . $e->getMessage();
			exit;
		}
        $coborrower = $results->fetchAll(PDO::FETCH_ASSOC);

        // 3. Add coboId to app_tbl
        try {
			$db->query("UPDATE app_tbl SET coborrowerId = " . $coborrower[0]['id'] . " WHERE id = " . $appId . ";");
		} catch (Exception $e) {
			echo "SQL Error (func: update):" . $e->getMessage();
			exit;
		}

	}
*/

/**************************************************************
 * SUBMIT APPLICATION
 **************************************************************/
	
	if ($func == "submitApp") {
		//****************
        // 1. Set isSubmitted
        // 2. Send email
        //****************
        
        $email = $_GET["email"];
        $borrowerId = $_GET["borrowerId"];
        $appId = $_GET["appId"];
        
        //Set isSubmitted = 1
        try {
			$db->query("UPDATE app_tbl SET isSubmitted = '1' WHERE id = " . $appId . ";");
		} catch (Exception $e) {
			echo "SQL Error (func: update):" . $e->getMessage();
			exit;
		}
    /*
        // 2. Send email
        var $subject = "Application Submitted";
        var $body = "Email: " + $email + "<br> Borrower Id: " + $borrowerId + "<br> App Id: " + $appId;
        
        $mail= new PHPMailer();
        
        $mail->SetFrom('robot@standingrockmortgage.com', 'Standing Rock');
        $mail->AddAddress('preston@standingrockmortgage.com', 'Preston Rampy');
        $mail->Subject = $subject;
        $mail->msgHTML($body);
        
        if(!$mail->Send()) {
            echo "There was an error sending the email: " . $mail->ErrorInfo;
            exit;
        }
    */    
	}
