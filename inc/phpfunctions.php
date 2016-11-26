<?php

    include 'inc/config.php';
    
    /***********************************
     * CHECK SESSION VARIABLES
     ***********************************/
    function checkSession() {
        $SESSION["email"] = "preston@rampy.co";
        if ($_SESSION["email"] == "") { //no user set, send to login page
            echo '<script type="text/javascript"> window.location.assign("' . $root_path . $login_folder . $login_page . '");</script>';
        } else {
            //do nothing; valid user
        } 
    }

    /***********************************
     * CALCULATE DEBT TO INCOME
     ***********************************/
    function calcDTI() {
        try {
            $results = $db->query("SELECT * FROM borrower_tbl WHERE id='" . $borrowerId . "';" );
        } catch (Exception $e) {
            echo "Could not connect to database!: " . $e->getMessage();
            exit;
        }
        $borrower = $results->fetchAll(PDO::FETCH_ASSOC);
        
    } //end calcDTI()

    /***********************************
     * CALCULATE LOAN TO VALUE
     ***********************************/
    function calcLTV() {
        try {
            $results = $db->query("SELECT * FROM borrower_tbl WHERE id='" . $borrowerId . "';" );
        } catch (Exception $e) {
            echo "Could not connect to database!: " . $e->getMessage();
            exit;
        }
        $borrower = $results->fetchAll(PDO::FETCH_ASSOC);
        
    } //end calcDTI()

    /***********************************
     * CALCULATE COMBINED LOAN TO VALUE
     ***********************************/
    function calcCLTV() {
        try {
            $results = $db->query("SELECT * FROM borrower_tbl WHERE id='" . $borrowerId . "';" );
        } catch (Exception $e) {
            echo "Could not connect to database!: " . $e->getMessage();
            exit;
        }
        $borrower = $results->fetchAll(PDO::FETCH_ASSOC);
        
    } //end calcDTI()

    /***********************************
     * CHECK FOR QUALIFIED MORTGAGE
     ***********************************/
    // PRODUCT FEATURE REQUIREMENTS
    // 1. If Loan Amount > 100,000; points and fees must be <= 3% of loan amount
    // 2. If Loan Amount >= 60,000 && 
    //If DTI < 43%; QM
    // Else IF, 

    function checkQM() {
        try {
            $results = $db->query("SELECT * FROM borrower_tbl WHERE id='" . $borrowerId . "';" );
        } catch (Exception $e) {
            echo "Could not connect to database!: " . $e->getMessage();
            exit;
        }
        $borrower = $results->fetchAll(PDO::FETCH_ASSOC);
        
        
        
        
    } //end calcDTI()

?>