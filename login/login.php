<html>
<head>
	<title>Standing Rock Mortgage | Login</title>
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
                <h1>Login</h1>
            </div>

            <div class="table-container">
                <div class="question-container">
                    <div class="label-div"><label for="email">Email Address</label></div>
                    <div class="input-div"><input type="email" id="email" autofocus></div>
                </div>
                <div class="question-container">
                    <div class="label-div"><label for="password">Password</label></div>
                    <div class="input-div"><input type="password" id="password"></div>
                </div>
                <div class="question-container">
                    <div class="label-div"><button id="acct-cancel" class="square-button secondary">Cancel</button></div>
                    <div class="input-div"><button id="login-button" class="square-button">Login</button></div>
                    <div class="label-div"></button></div>
                    <div class="input-div"><div id="forgot-password"><p><a href="password-forgot.php">forgot password?</a></p></div></div>
                </div>

            </div> <?php /* end of table-container */ ?>
            
            <?php /*
            <div class="button-container">
                <div class="button-container-contents">
                    <button id="acct-cancel" class="square-button secondary">Cancel</button>
                    <button id="login-button" class="square-button">Login</button>
                    <div id="forgot-password"><p><a href="password-forgot.php">Forgot Passsword?</a></p></div>
                </div>
            </div>
            */ ?>
            <div class="button-container" id="create-account-container">
                <div class="button-container-contents">
                    Don't have an account?<br>
                    <button id="create-button" class="square-button">Create</button>
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
    console.log("Javascript loaded");
    //Login button
    
    //$("#login-button").click(login());
    //$('input[name=password]').trigger("click");
    
    $("#login-button").click(function() {
        
        console.log("Login started.")
        
        //check required fields
        if ($("#email").val() == "" || $("#password").val() == "" ) {
            alert("please complete all required fields.");
            return;
        }
        
        //Assigning user inputs to Javascript variables
        var $email = $("#email").val();
        var $password = $("#password").val();

        //Ajax call
        $.ajax({
            url: '../inc/ajax.php',
            data: { func: "authenticateUser", email: $email, password: $password },
            datatype: 'text',
            type: 'GET',
            success: function ($validUser) {
                //$validUser will either be "TRUE" or "FALSE"
                //authenticateUser will forward user to contact.php to begin an application
                //userExists means that the email address submitted was found in the database

                if ($validUser == 'TRUE') { //success
                    //call to setSession.php to set the email address for this session
                    //then directs user to apply/contact.php to begin application on success
                    
                    $.ajax({
                        url: '../setsession.php',
                        data: { email: $email },
                        datatype: 'text',
                        type: 'GET',
                        success: function () {
                            console.log('<?php echo $root_path . $contact_page; ?>');
                            window.location.assign('<?php echo $root_path . $contact_page; ?>');//.delay(8000);
                        },
                    });// end ajax
                } else if ($validUser == 'FALSE') { //email already in use
                    alert("Email or Password did not match.");
                }
            },
        });// end ajax
        
    }); // end $("#acct-create") 
    
    //Cancel button
    $("#acct-cancel").click(function() {
        window.location.assign('<?php echo $homepage; ?>');
    }); // end $("#acct-cancel") 
    
    //Login button
    $("#create-button").click(function() {
        console.log('<?php echo $signup_page; ?>');
        window.location.assign('<?php echo $signup_page; ?>');
    }); // end $("#acct-cancel")

}); // end $(document).ready
    
</script>	