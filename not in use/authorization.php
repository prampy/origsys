<?php $pageTitle = "Standing Rock Mortgage | Application"; ?>
<?php include 'inc/header.php' ?>

<div id="main-wrapper">
    

    <div class="table-container">
        <h1 class="section-header">Authorization Agreement</h1>
        <br>
        <p>Authorization is hereby granted to Standing Rock Mortgage, to obtain a consumer credit report through a credit reporting agency chosen by Standing Rock Mortgage. I understand and agree that Standing Rock Mortgage intends to use the consumer credit report for the purposes of evaluating my financial readiness to obtain a loan. </p>
        <br>
        <p>I understand that this credit report will be retained on file at the Standing Rock Mortgage office for use only by Standing Rock Mortgage staff. This information will not be disclosed to anyone by Standing Rock Mortgage without my written consent.</p>
        <br>
        <p>Furthermore, I udnerstand that, should I choose to apply for financing through Standing Rock Mortgage, a reviesed credit report costing an additional fee may be required.</p>
        <br>
        <p>My signature below authroizes the release to the credit reporting agency of finacnial information which I have supplied to Standing Rock Mortgage, in connection with such an evaluation. Authorization is further granted to the credit reporting agency to use photostatic reproduction of theis form to obtain any information necessary to complete my consumer credit report.</p>
        <br>
        <p><strong>CHECKING THE BOX BELOWE GRANTS PERMISSION FOR THE RELEASE OF FINANCIAL INFORMATION TO THE CREDIT REPORTING AGENCY AND GRANTS PERMISSION FOR STANDING ROCK MORTGAGE TO OBTAIN A COPY OF YOUR CREDIT REPORT.</strong></p>
        <br>
        <input type="checkbox">I agree to the above Authorization Agreement
   </div>
    </div>
    
    
<?php include 'inc/footer.php' ?>
    
    
<?php
/******************************************************
 * JAVASCRIPT
 ******************************************************/
?>

<script type="text/javascript">
	$(document).ready(function() {
		
		//**********************************************
		//* SAVE & CONTINUE BUTTON
		//**********************************************
		
		$("#save-continue").click(function() {
			
            //Assign input values to javascript variables
			var $firstName = $("#firstName").val();
			var $middleName = $("#middleName").val();
			var $lastName = $("#lastName").val();
			var $phone = $("#phone").val();
			var $address = $("#address").val();
			var $city = $("#city").val();
			var $state = $("#state").val();
			var $zip = $("#zip").val();
			var $moveIn = $("#moveIn").val();
			var $ownership = $("#ownership").val();
			var $monthlyPmt = $("#monthlyPmt").val();

            //Data Validation
            if ($firstName == "") {
                
            }
			// Ajax 
			$.ajax({
				url: 'inc/ajax.php',
				//async: false,
	        	data: { func: "authenticateUser", email: $userEmail, password: $userPassword },
	        	datatype: 'text',
				type: 'GET',
                success: function () {
                    window.location.assign("http://localhost:8888/app.standingrockmortgage.com/employment.php");
                },
			});//ajax 
            
		}); //$("#save-continue").click(function()
		
	}); //$(document).ready(function()
</script>