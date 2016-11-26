<html>
<head>
	<title>Standing Rock Mortgage | Forgot Password</title>
	<?php include '../inc/config.php' ?>
	
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/accounts.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
	
	<?php include '../inc/jsfunctions.php'; ?>
</head>

<body>
    <div id="main-wrapper">
        <?php /*<h1>Standing Rock Mortgage</h1> */ ?>
        <div id="account-wrapper">
            
            <div id="account-page-title">
                <h1>Reset Password</h1>
            </div>

            <div class="table-container">
                <div class="question-container">
                    <div class="label-div"><label for="email">Email Address</label></div>
                    <div class="input-div"><input type="email" id="email" autofocus></div>
                </div>
                

            </div> <?php /* end of table-container */ ?>

            
            <div class="question-container">
                    <div class="label-div"><button id="login-cancel" class="square-button secondary">Cancel</button></div>
                    <div class="input-div"><button id="reset-button" class="square-button">Reset Password</button></div>
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
    console.log("Javascript loaded.");
    //Login button
    
    //$("#login-button").click(login());
    //$('input[name=password]').trigger("click");
    
    $("#reset-button").click(function() {
        
        //check required fields
        if ($("#email").val() == "" ) {
            alert("Please input your email address.");
            return;
        }
        
        //Assigning user inputs to Javascript variables
        var $email = $("#email").val();

        //Ajax call
        $.ajax({
            url: '../inc/ajax.php',
            data: { func: "forgotPassword", email: $email },
            //datatype: 'text',
            type: 'GET',
            success: function ($resetStatus) {
                
                //if email is not found, alert user; end.
                if ($resetStatus == "email not found") {
                    alert("This email is not found. Please try again.");
                } else { //password is reset, email user.
                    console.log("password reset");
                    //send email notification to user
                    $toEmail = $email; //from input field (variable set above)
                    $subject = "Password Reset";
                    $body = "Your password has been reset. To log in and change your password, click the link below. <br><a href='<?php echo $root_path; ?>/login/password-reset.php?code=" + $resetStatus + "&email=" + $email + "'>Link</a>";
                    
                    $.ajax({
                        url: '../inc/ajax.php',
                        data: { func: "sendEmail", toEmail: $toEmail, subject: $subject, body: $body },
                        datatype: 'text',
                        type: 'GET',
                        success: function () {
                            console.log("email sent");
                            window.location.assign("<?php echo $homepage; ?>password-sent/");
                        },
                    });// end ajax
                }
            },
        });// end ajax
        
    }); // end $("#reset-button") 
    
    //Cancel button
    $("#login-cancel").click(function() {
        window.location.assign('<?php echo $homepage; ?>');
    }); // end $("#acct-cancel") 
    

}); // end $(document).ready
    
</script>	