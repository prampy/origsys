<?php $pageTitle = "Standing Rock Mortgage | Application"; ?>
<?php include 'inc/header.php'; ?>
<?php $appId =  $_SESSION["appId"]; ?>
<?php $email =  $_SESSION["email"]; ?>

<?php $appId = $_GET['id']; ?>

<?php
/******************************************************
 * QUERIES
 ******************************************************/
?>
<?php
    try {
        $results = $db->query("SELECT * FROM app_tbl WHERE id='" . $appId . "';" );
    } catch (Exception $e) {
        echo "Could not connect to database: " . $e->getMessage();
        exit;
    }
    $app = $results->fetchAll(PDO::FETCH_ASSOC);
?>



<?php
/******************************************************
 * WEBSITE
 ******************************************************/
?>
<?php /*
<div class="col-sm-12" id="pill-container">
    <ul class="nav nav-pills">
        <li role="presentation" class="active"><a href="#">PreQual</a></li>
        <li role="presentation"><a href="#">Application</a></li>
        <li role="presentation"><a href="#">Forms</a></li>
    </ul>
</div>
<br>
*/ ?>

<div class="col-sm-12" id="big-button-container">
    <div class="col-sm-7">
        <a href="index.php"><h3>Pipeline</h3></a>
    </div>
    <div class="col-sm-5" id="button-container">
        <?php /* <button id="save-exit" class="square-button secondary">Save & Exit</button>*/ ?>
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action<span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Credit</a></li>
            <li><a href="#">VOE</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
        <button id="save-continue" class="square-button primary">Save</button>
    </div>
</div>
<div class="col-sm-12">

    <ul class="nav nav-tabs nav-justified">
        <li role="presentation" class="active"><a href="#borrower-tab" role="tab" data-toggle="tab">Borrower</a></li>
        <li role="presentation"><a href="#employment-tab" role="tab" data-toggle="tab">Employment</a></li>
        <?php /* <li role="presentation"><a href="#property-tab" role="tab" data-toggle="tab">Property</a></li> */ ?>
        <li role="presentation"><a href="#financials-tab" role="tab" data-toggle="tab">Financials</a></li>
        <li role="presentation"><a href="#loan-tab" role="tab" data-toggle="tab">Loan</a></li>
        <li role="presentation"><a href="#declarations-tab" role="tab" data-toggle="tab">Declarations</a></li>
        <li role="presentation"><a href="#fees-tab" role="tab" data-toggle="tab">Fees</a></li>
    </ul>
    
    <div class="col=sm-12 tab-content" id="content-container">
        <div class="tab-pane fade in active" id="borrower-tab"><!-- load insert-loan.php here --></div>
        <div class="tab-pane fade" id="employment-tab"><!-- load insert-loan.php here --></div>
        <?php /* <div class="tab-pane fade" id="property-tab"><!-- load insert-loan.php here --></div> */ ?>
        <div class="tab-pane fade" id="financials-tab"><!-- load insert-loan.php here --></div>
        <div class="tab-pane fade" id="loan-tab"><!-- load insert-loan.php here --></div>
        <div class="tab-pane fade" id="declarations-tab"><!-- load insert-loan.php here --></div>
        <div class="tab-pane fade" id="fees-tab"><!-- load insert-loan.php here --></div>
    </div>
    
</div>   
    
<?php include 'inc/footer.php'; ?>



    
<?php
/******************************************************
 * 
 * JAVASCRIPT
 *
 ******************************************************/
?>

<script type="text/javascript">
    $(document).ready(function() {
        
        console.log("javascript loaded (src: page-loan.php)");
        $id = <?php echo $appId; ?>;
        console.log($id);
        //Load tabs
        //$("#borrower-tab").load('insert-borrower.php',{ "id": $id });
        $("#borrower-tab").load('insert-borrowerTEST.php',{ "id": $id });
        $("#employment-tab").load('insert-employment.php',{ "id": $id });
        //$("#property-tab").load('insert-property.php',{ "id": $id });
        $("#financials-tab").load('insert-financials.php',{ "id": $id });
        $("#loan-tab").load('insert-loan.php',{ "id": $id });
        $("#declarations-tab").load('insert-declarations.php',{ "id": $id });
        $("#fees-tab").load('insert-fees.php',{ "id": $id });
        
        $('#myTabs a').click(function (e) {
          e.preventDefault();
          $(this).tab('show');
        });
    
    //**********************************************
	//* TABS
	//**********************************************   
    /*
    //Remove active class from all tabs
    $(".nav li").click(function() {
        $("#borrower-btn").removeClass('active');
        $("#employment-btn").removeClass('active');
        $("#property-btn").removeClass('active');
        $("#financials-btn").removeClass('active');
        $("#loan-btn").removeClass('active');
        $("#declarations-btn").removeClass('active');
        $("#fees-btn").removeClass('active');
    });   
        
    $("#borrower-btn").click(function() {
        $("#borrower-btn").addClass('active');
        $("#content-container").load('insert-borrower.php',{ "id": 37 });
    });
    $("#employment-btn").click(function() {
        $("#employment-btn").addClass('active');
        $("#content-container").load('insert-employment.php',{ "id": 37 });
    });
    $("#property-btn").click(function() {
        $("#property-btn").addClass('active');
        $("#content-container").load('insert-property.php',{ "id": 37 });
    });
    $("#financials-btn").click(function() {
        $("#financials-btn").addClass('active');
        $("#content-container").load('insert-financials.php',{ "id": 37 });
    });
    $("#loan-btn").click(function() {
        $("#loan-btn").addClass('active');
        $("#content-container").load('insert-loan.php',{ "id": 37 });
    });
    $("#declarations-btn").click(function() {
        console.log("declarations");
        $("#declarations-btn").addClass('active');
        $("#content-container").load('insert-declarations.php',{ "id": 37 });
    });
    $("#fees-btn").click(function() {
        console.log("Fees button clicked.");
        $("#fees-btn").addClass('active');
        $("#content-container").load('insert-fees.php',{ "id": 37 });
    });
    */    
        
    //**********************************************
	//* SAVE BUTTONS
	//**********************************************
	
   $("#save-continue").click(function() {
        //checkRequired();
       $x = 0;
       var $inputs = new Array();
       $("input[type=text]").each(function() {
            $inputs[$x] = $(this).attr('id');
            $x++;
            $inputs[$x] = $(this).val();
            console.log($inputs[$x-1] + " " + $inputs[$x]);
            $x++;
        });
      /* 
       if ($("input[name=loanPurpose]:checked").val() == "purchase") {
            var $location = '<?php echo $loan_purchase_page; ?>';
        } else {
            var $location = '<?php echo $loan_refi_page; ?>';
        }
        saveInputFields();
        goTo($location);*/
   }); //$("#save-continue").click(function()

    $("#save-exit").click(function() {
        //checkRequired();
        var $location = '<?php echo $homepage; ?>';
        saveInputFields();
        endSession(); // jsfunctions.php
        goTo($location);
    }); //$("#save-continue").click(function()
        
       
        
        
        
    //**********************************************
	//* CHECKREQUIRED() FUNCTION
    //* Called when either Save & Exit or Save & Continue is clicked
    //* this will check that all required fields are completed
    //* if not, user is prompted; if so, program continues on
	//**********************************************
        function checkRequired() {
            if ($("#firstName").val() == "" || $("#lastName").val() == "" || $("#email").val() == "" || $("input[name=loanPurpose]:checked").val() == undefined) {
                alert("please complete all the required fields.");
            }
            
        }
        
    //**********************************************
	//* saveInputFields() FUNCTION
    //* Called when either Save & Exit or Save & Continue is clicked
    //* this will assign all input fields on the screen to variables and make the ajax call
    //* on success it will direct the user to the $location that was passed to it in the arguments
	//**********************************************
        
        function saveInputFields() {
                
            //************************
            //* Save to borrower_tbl
            //************************
            
            // Assign input values to javascript variables
            var $firstName = $("#firstName").val();
			var $middleName = $("#middleName").val();
			var $lastName = $("#lastName").val();
            var $suffix = $("#suffix").val();
            var $email = $("#email").val();
            var $phone = $("#phone").val();
            var $currAddress = $("#currAddress").val();
            var $currCity = $("#currCity").val();
            var $currState = $("#currState").val();
            var $currZip = $("#currZip").val();
            var $currRentOwn = $("input[name=currRentOwn]:checked").val();
            var $currYears = $("#currYears").val();
            var $currMonths = $("#currMonths").val();
            var $prevAddress = $("#prevAddress").val();
			var $prevCity = $("#prevCity").val();
			var $prevState = $("#prevState").val();
			var $prevZip = $("#prevZip").val();
            var $prevRentOwn = $("input[name=prevRentOwn]:checked").val();
			var $prevYears = $("#prevYears").val();
			var $prevMonths = $("#prevMonths").val();
            var $hasDiffMail = $("input[name=hasDiffMail]:checked").val();
            var $mailAddress = $("#mailAddress").val();
			var $mailCity = $("#mailCity").val();
			var $mailState = $("#mailState").val();
			var $mailZip = $("#mailZip").val();
            var $loanPurpose = $("input[name=loanPurpose]:checked").val();
            
            // set ajax inputs
            var $func = "update";
            var $tableName = "app_tbl";
            var $dataString = "firstName = '" + $firstName + "',middleName = '" + $middleName + "',lastName = '" + $lastName + "',suffix = '" + $suffix + "',email = '" + $email + "',phone = '" + $phone + "',currAddress = '" + $currAddress + "',currCity = '" + $currCity + "',currState = '" + $currState + "',currZip = '" + $currZip + "',currRentOwn = '" + $currRentOwn + "',currYears = '" + $currYears + "',currMonths = '" + $currMonths + "',prevAddress = '" + $prevAddress + "',prevCity = '" + $prevCity + "',prevState = '" + $prevState + "',prevZip = '" + $prevZip + "', prevRentOwn = '" + $prevRentOwn + "',prevYears = '" + $prevYears + "',prevMonths = '" + $prevMonths + "',hasDiffMail = '" + $hasDiffMail + "',mailAddress = '" + $mailAddress + "',mailCity = '" + $mailCity + "',mailState = '" + $mailState + "',mailZip = '" + $mailZip + "',loanPurpose = '" + $loanPurpose + "'";
            var $columnName = "id";
            var $uniqueId = '<?php echo $appId; ?>';
            
            updateDatabase($func, $tableName, $dataString, $columnName, $uniqueId); //jsfunctions.php

        } //end saveInputFields()
        
	}); //$(document).ready(function()
    
</script>