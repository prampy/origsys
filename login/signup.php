<html>
<head>
	<title>Standing Rock Mortgage | Signup</title>
	<?php include '../inc/config.php' ?>
	
	<link rel="stylesheet" type="text/css" href="../css/normalize.css">
	<link rel="stylesheet" type="text/css" href="../css/accounts.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
	
	<?php include 'inc/jsfunctions.php'; ?>
</head>

<body>
    <div id="main-wrapper">
        <div id="account-wrapper">
            <div id="account-page-title">
                <h1>Create Account</h1>
            </div>
            
            <div class="table-container">
                <div class="question-container">
                    <div class="label-div"><label for="firstName">First Name</label></div>
                    <div class="input-div"><input type="text" id="firstName"></div>
                </div>
                <div class="question-container">
                    <div class="label-div"><label for="lastName">Last Name</label></div>
                    <div class="input-div"><input type="text" id="lastName"></div>
                </div>
                <div class="question-container">
                    <div class="label-div"><label for="userEmail">Email Address</label></div>
                    <div class="input-div"><input type="text" id="userEmail"></div>
                </div>
                <div class="question-container">
                    <div class="label-div"><label for="userPassword">Password</label></div>
                    <div class="input-div"><input type="password" id="userPassword"></div>
                </div>
                <div class="question-container">
                    <div class="label-div"><button id="acct-cancel" class="square-button secondary">Cancel</button></div>
                    <div class="input-div"><button id="acct-create" class="square-button">Create</button></div>
                </div>
                

            </div> <?php /* end of table-container */ ?>

            <?php /*
            <div id="button-container">
                <button id="acct-cancel" class="square-button secondary">Cancel</button>
                <button id="acct-create" class="square-button inactive-btn">Create</button>
            </div> 
            */ ?>
            <div class="button-container">
                <div class="button-container-contents">
                    Already started an application?<br>
                    <button id="login-button" class="square-button primary">Login</button>
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
    
    console.log("Javascript loaded successfully.");
    
    //Create button
    $("#acct-create").click(function() {
        
        console.log("Create Account started.");
        
        //Assigning user inputs to Javascript variables
        var $firstName = $("#firstName").val();
        var $lastName = $("#lastName").val();
        var $email = $("#userEmail").val();
        var $password = $("#userPassword").val();
        
        //Ajax call
        $.ajax({
            url: '../inc/ajax.php',
            data: { func: "createAccount", firstName: $firstName, lastName: $lastName, email: $email, password: $password },
            datatype: 'text',
            type: 'GET',
            success: function ($accountResults) {
                //$accountResults will either be "accountCreated" or "userExists"
                //accountCreated will forward user to contact.php to begin an application
                //userExists means that the email address submitted was found in the database
                
                if ($accountResults == 'accountCreated') { //success
                    console.log("Account Created. Sending Email.");
                    //send email
                    var $toEmail = 'preston@standingrockmortgage.com';
                    var $subject = "Account created";
                    var $body = "An account was just created:<br>" + $firstName + " " + $lastName + "<br>" + $email;
                    $.ajax({
                        url: '../inc/ajax.php',
                        data: { func: "sendEmail", toEmail: $toEmail, subject: $subject, body: $body },
                        datatype: 'text',
                        type: 'GET',
                        success: function () {
                            //do nothing
                        },
                    });// end ajax
                    
                    //call to setSession.php to set the email address for this session
                    //then directs user to contact.php to begin application on success
                    $.ajax({
                        url: '../setsession.php',
                        data: { email: $email },
                        datatype: 'text',
                        type: 'GET',
                        success: function () {
                            console.log("Account Created");
                            window.location.assign('<?php echo $root_path . $contact_page; ?>');//.delay(8000);
                        },
                    });// end ajax
                } else if ($accountResults == 'userExists') { //email already in use
                    alert($accountResults);
                }
            },
        });// end ajax
    }); // end $("#acct-create") 
    
    //Cancel button
    $("#acct-cancel").click(function() {
        window.location.assign('<?php echo $homepage; ?>');
    }); // end $("#acct-cancel") 
    
    //Login button
    $("#login-button").click(function() {
        window.location.assign('<?php echo $login_page; ?>');
    }); // end $("#acct-cancel")

}); // end $(document).ready
    
</script>	