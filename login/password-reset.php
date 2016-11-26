<link rel="stylesheet" type="text/css" href="css/style.css">

<html>
<head>
	<title>Standing Rock Mortgage | Reset Password</title>
	<?php include 'inc/config.php' ?>
	
    <?php $email = $_GET['email']; ?>
    <?php $code = $_GET['code']; ?>

    <?php
        try {
            $results = $db->query("SELECT email, passwordResetCode FROM borrower_tbl WHERE email='" . $email . "';" );
        } catch (Exception $e) {
            echo "Could not connect to database!: " . $e->getMessage();
            exit;
        }
        $borrower = $results->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <?php
    if ($code != $borrower[0]['passwordResetCode'] || $email != $borrower[0]['email']) {
        echo "this link is invalid.";
    }
    ?>
    
    
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
	
	<?php include 'inc/jsfunctions.php'; ?>
</head>

<body>
    <div id="main-wrapper">
        <?php /*<h1>Standing Rock Mortgage</h1> */ ?>
        <div id="create-acct-wrapper">
            
            
            <div id="create-acct-page-title">
                <h1>New Password</h1>
            </div>

            <div class="table-container">
                <div class="question-container">
                    <div class="label-div"><label for="email">Email Address</label></div>
                    <div class="input-div"><input type="email" id="email" autofocus></div>
                </div>
                <div class="question-container">
                    <div class="label-div"><label for="password">New Password</label></div>
                    <div class="input-div"><input type="password" id="password"></div>
                </div>
                <div class="question-container">
                    <div class="label-div"><label for="retypePassword">Re-type Password</label></div>
                    <div class="input-div"><input type="password" id="retypePassword"></div>
                </div>
                

            </div> <?php /* end of table-container */ ?>

            <div id="button-container">
                <div id="button-container-contents">
                    <button id="login-cancel" class="square-button secondary">Cancel</button>
                    <button id="save-button" class="square-button">Save Password</button>
                </div>
            </div>
        </div>
    
    </div>
</body>
</html>


<?php
/******************************************************
 * JAVASCRIPT
 ******************************************************/
?>

<script type="text/javascript">
    
$(document).ready(function() {
    console.log("javascript loaded successfully");
    //Login button
    
    
    
    $("#save-button").click(function() {
        
        var $email = '<?php echo $email; ?>';
        var $password = $("#password").val();
        
        //check required fields
        if ($("#password").val() == "" || $("#retypePassword").val() == "" || $("#email").val() == "") {
            alert("Please complete all of the fields.");
            return;
        }
        
        if ($("#email").val() != $email) {
            alert("Your email address does not match our records.");
            return;
        }
        
        if ($("#password").val() != $("#retypePassword").val()) {
            alert("Your passwords do not match.");
            return;
        }
        
        
        alert($email);

        //Ajax call save new password to database
        $.ajax({
            url: 'inc/ajax.php',
            data: { func: "saveNewPassword", email: $email, password: $password },
            datatype: 'text',
            type: 'GET',
            success: function () {
                //do nothing
            },
        });// end ajax
        
    }); // end $("#acct-create") 
    
    //Cancel button
    $("#login-cancel").click(function() {
        window.location.assign("standingrockmortgage.com/");
    }); // end $("#acct-cancel") 

}); // end $(document).ready
    
</script>	