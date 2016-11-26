<?php $pageTitle = "Standing Rock Mortgage | Application"; ?>
<?php include 'inc/header.php'; ?>
<?php $borrowerId =  $_SESSION["borrowerId"]; ?>
<?php $appId =  $_SESSION["appId"]; ?>
<?php $email =  $_SESSION["email"]; ?>

<?php    
    /***************************
     * Selects coborrower
     ***************************/
    try {
        $results = $db->query("SELECT coborrowerId FROM app_tbl WHERE appId=" . $appId . ";" );
    } catch (Exception $e) {
        echo "Could not connect to database!: " . $e->getMessage();
        exit;
    }
    $cobo = $results->fetchAll(PDO::FETCH_ASSOC);

    $coborrowerId = $cobo[0]['borrowerId'];

    try {
        $results = $db->query("SELECT * FROM borrower_tbl WHERE id=" . $coborrowerId . ";" );
    } catch (Exception $e) {
        echo "Could not connect to database!: " . $e->getMessage();
        exit;
    }
    $coborrower = $results->fetchAll(PDO::FETCH_ASSOC);

    /***************************
     * Selects loanPurpose
     ***************************/
    try {
        $results = $db->query("SELECT loanPurpose FROM app_tbl WHERE id='" . $appId . "';" );
    } catch (Exception $e) {
        echo "Could not connect to database!: " . $e->getMessage();
        exit;
    }
    $app = $results->fetchAll(PDO::FETCH_ASSOC);
?>


<div id="app-wrapper">
    <div id="page-title">
        <h1>Loan Application</h1>
        <div class="circle-div-container">
            <div class="circle-div complete" title="Contact Information">1</div>
            <div class="circle-div" title="Loan Details">2</div>
            <div class="circle-div" title="Borrower Information">3</div>
            <div class="circle-div" title="Assets and Liabilities">4</div>
            <div class="circle-div" title="Declarations">5</div>
        </div>
    </div>

    <div class="table-container">
        <?php
        /***********************************
         * YOUR INFORMATION
         ***********************************/
        ?>
        <div class="label-div"><h1 class="section-header">Coborrower Information</h1></div>
        <br>
        <div class="question-container">
            <div class="label-div"><label for="firstName">First Name*</label></div>
            <div class="input-div"><input type="text" id="firstName" value="<?php echo $coborrower[0]['firstName']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="middleName">Middle Name</label></div>
            <div class="input-div"><input type="text" id="middleName" value="<?php echo $coborrower[0]['middleName']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="lastName">Last Name*</label></div>
            <div class="input-div"><input type="text" id="lastName" value="<?php echo $coborrower[0]['lastName']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="suffix">Suffix (Jr. or Sr.)</label></div>
            <div class="input-div"><input type="text" id="suffix" value="<?php echo $coborrower[0]['suffix']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="email">Email Address*</label></div>
            <div class="input-div"><input type="text" id="email" value="<?php echo $coborrower[0]['email']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="phone">Phone</label></div>
            <div class="input-div"><input type="text" id="phone" value="<?php echo $coborrower[0]['phone']; ?>"></div>
        </div>
        
        <?php
        /***********************************
         * CURRENT ADDRESS
         ***********************************/
        ?>
        <div class="label-div"><h1 class="section-header">Current Address</h1></div>
        <div class="question-container">
            <div class="label-div"><label for="currAddress">Address</label></div>
            <div class="input-div"><input type="text" id="currAddress" value="<?php echo $coborrower[0]['currAddress']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="currCity">City</label></div>
            <div class="input-div"><input type="text" id="currCity" value="<?php echo $coborrower[0]['currCity']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="currState">State</label></div>
            <div class="input-div"><input type="text" id="currState" value="<?php echo $coborrower[0]['currState']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="currZip">Zip</label></div>
            <div class="input-div"><input type="text" id="currZip" value="<?php echo $coborrower[0]['currZip']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label>Do you</label></div>
            <div class="input-div">
                <input type="radio" class="radio-button" name="currRentOwn" value="own" <?php if ($coborrower[0]['currRentOwn'] == "own") { echo 'checked'; } ?>><span>Own</span>
                <input type="radio" class="radio-button" name="currRentOwn" value="rent" <?php if ($coborrower[0]['currRentOwn'] == "rent") { echo 'checked'; } ?>><span>Rent</span> 
            </div>
    
        </div>
        <div class="question-container">
            <div class="label-div"><label>How long at current address?</label></div>
            <div class="input-div">
                <input type="text" class="half-input" id="currYears" name="currYears" value="<?php echo $coborrower[0]['currYears']; ?>"><span class="half-input-span">Years</span>
                <input type="text" class="half-input" id="currMonths" name="currMonths" value="<?php echo $coborrower[0]['currMonths']; ?>"><span class="half-input-span">Months</span>
            </div>
        </div>
         <?php
        /***********************************
         * PREVIOUS ADDRESS
         ***********************************/
        ?>
        
        <div id="prev-div-hide">
            <div class="label-div"><h1 class="section-header">Previous Address</h1></div>
            <div class="question-container">
                <div class="label-div"><label for="prevAddress">Address</label></div>
                <div class="input-div"><input type="text" id="prevAddress" value="<?php echo $coborrower[0]['prevAddress']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="prevCity">City</label></div>
                <div class="input-div"><input type="text" id="prevCity" value="<?php echo $coborrower[0]['prevCity']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="prevState">State</label></div>
                <div class="input-div"><input type="text" id="prevState" value="<?php echo $coborrower[0]['prevState']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="prevZip">Zip</label></div>
                <div class="input-div"><input type="text" id="prevZip" value="<?php echo $coborrower[0]['prevZip']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label>Did you</label></div>
                <div class="input-div">
                    <input type="radio" class="radio-button" name="prevRentOwn" value="own" <?php if ($coborrower[0]['prevRentOwn'] == "own") { echo 'checked'; } ?>><span>Own</span>
                    <input type="radio" class="radio-button" name="prevRentOwn" value="rent" <?php if ($coborrower[0]['prevRentOwn'] == "rent") { echo 'checked'; } ?>><span>Rent</span> 
                </div>

            </div>
            <div class="question-container">
                <div class="label-div"><label>How long at previous address?</label></div>
                <div class="input-div">
                    <input type="text" class="half-input" id="prevYears" name="prevYears" value="<?php echo $coborrower[0]['prevYears']; ?>"><span class="half-input-span">Years</span>
                    <input type="text" class="half-input" id="prevMonths" name="prevMonths" value="<?php echo $coborrower[0]['prevMonths']; ?>"><span class="half-input-span">Months</span>
                </div>
            </div>
        </div>
        
        
        <div class="question-container">
            <div class="label-div"><label>Do you have a different mailing address?</label></div>
            <div class="input-div">
                <input type="radio" class="radio-button" name="hasDiffMail" value="1" <?php if ($coborrower[0]['hasDiffMail'] == "1") { echo 'checked'; } ?>><span>Yes</span>
                <input type="radio" class="radio-button" name="hasDiffMail" value="0" <?php if ($coborrower[0]['hasDiffMail'] == "0") { echo 'checked'; } ?>><span>No</span> 
            </div>
        </div>
        
        <?php
        /***********************************
         * MAILING ADDRESS
         ***********************************/
        ?>
        
        <div id="mail-div-hide">
            <div class="label-div"><h1 class="section-header">Mailing Address</h1></div>
            <div class="question-container">
                <div class="label-div"><label for="mailAddress">Address</label></div>
                <div class="input-div"><input type="text" id="mailAddress" value="<?php echo $coborrower[0]['mailAddress']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="mailCity">City</label></div>
                <div class="input-div"><input type="text" id="mailCity" value="<?php echo $coborrower[0]['mailCity']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="mailState">State</label></div>
                <div class="input-div"><input type="text" id="mailState" value="<?php echo $coborrower[0]['mailState']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="mailZip">Zip</label></div>
                <div class="input-div"><input type="text" id="mailZip" value="<?php echo $coborrower[0]['mailZip']; ?>"></div>
            </div>
        </div>
        <?php /* not needed for coborrower
        <div class="question-container">
            <div class="label-div"><label for="loanPurpose">Purpose of Loan*</label></div>
            <div class="input-div">
                <input type="radio" class="radio-button" name="loanPurpose" value="purchase" <?php if ($app[0]['loanPurpose'] == "purchase") { echo 'checked'; } ?>><span>Purchase</span>
                <input type="radio" class="radio-button" name="loanPurpose" value="refi" <?php if ($app[0]['loanPurpose'] == "refi") { echo 'checked'; } ?>><span>Refinance</span>
            </div>
        </div>
        */ ?>
        
    </div> <?php /* end of table-container */ ?>
    
    <div id="big-button-container">
        <div id="button-container">
            <button id="save-exit" class="square-button secondary">Save & Exit</button>
            <button id="save-continue" class="square-button primary">Save & Continue</button>
        </div>
        <div id="submit-div">
            <div id="submit-div-text">Submit Application As-Is ></div>
        </div>
    </div> 
</div>
    
    
<?php include 'inc/footer.php'; ?>
    
    
<?php
/******************************************************
 * JAVASCRIPT
 ******************************************************/
?>

<script type="text/javascript">
	
    
    $(document).ready(function() {
        
        
        $(".help-container").hide();
        
        $(".has-help-text").click(function() {
            $(this).parent().siblings().show();
        });
        
        console.log("Javascript loaded successfully");
        //$("#banner").load("banner.php");
        
        //**********************************************
		// SHOW/HIDE DIVS ON LOAD
		//**********************************************
        
        //PREVIOUS ADDRESS
        if ($("#currYears").val() >= 2 || $("#currYears").val() == "" ) {
            $("#prev-div-hide").hide();
        } else {
            //do nothing, show by default
        }
        
        //MAILING ADDRESS
        var $hasDiffMail = $("input[name=hasDiffMail]:checked").val();
        if ($hasDiffMail == 1) {
            //do nothing, shows by default
        } else {
            $("#mail-div-hide").hide();
        }
        
        
        //**********************************************
		// SHOW/HIDE DIVS ON ACTION
        // if certain fields are clicked, hide or show
		//**********************************************
        
		// MAILING ADDRESS
        $("input[name=hasDiffMail]").click(function() {
            // if user has different mailing address; show
            if ($("input[name=hasDiffMail]:checked").val() == 1) {
                $("#mail-div-hide").slideDown("slow");
            } else { //if not
                //hide dive
                $("#mail-div-hide").slideUp("slow");
                //clear values
                $("#mailAddress").val('');
                $("#mailCity").val('');
                $("#mailState").val('');
                $("#mailZip").val('');
            }
        });
    
        //PREVIOUS ADDRESS
        $("#currYears").focusout(function() {
            if ($("#currYears").val() < 2) {
                $("#prev-div-hide").slideDown("slow");
            } else {
                $("#prev-div-hide").slideUp("slow");
                //clear values
                $("#prevAddress").val('');
                $("#prevCity").val('');
                $("#prevState").val('');
                $("#prevZip").val('');
            }
        });
        
    //**********************************************
	//* SAVE BUTTONS
	//**********************************************
	
	   $("#save-continue").click(function() {
            checkRequired();
            if ($("input[name=loanPurpose]:checked").val() == "purchase") {
                var $location = "loan-purchase.php";
            } else {
                var $location = "loan-refi.php";
            }
            saveFields($location);
	   }); //$("#save-continue").click(function()
        
        $("#save-exit").click(function() {
			checkRequired();
            var $location = "/";
            saveFields($location);
		}); //$("#save-continue").click(function()
        
        $("#submit-div").click(function() {
			checkRequired();
            var $location = "/";
            saveFields($location);
            submitApplication();
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
                return;
            }
            
        }
        
    //**********************************************
	//* SAVEFIELDS() FUNCTION
    //* Called when either Save & Exit or Save & Continue is clicked
    //* this will assign all input fields on the screen to variables and make the ajax call
    //* on success it will direct the user to the $location that was passed to it in the arguments
	//**********************************************
        
        function saveFields($location) {
            //************************
            //* Save loanPurpose to app_tbl
            //* if refi, save current address to subject property address
            //************************
            var $loanPurpose = $("input[name=loanPurpose]:checked").val();
            var $currAddress = $("#currAddress").val();
            var $currCity = $("#currCity").val();
            var $currState = $("#currState").val();
            var $currZip = $("#currZip").val(); 
            
            //set ajax inputs
            var $func = "update";
            var $tableName = "app_tbl";
            var $dataString = "loanPurpose = '" + $loanPurpose + "'";
            var $columnName = "id";
            var $uniqueId = '<?php echo $appId; ?>';
            
            // make ajax call
			$.ajax({
				url: 'inc/ajax.php',
				//async: false,
	        	data: { func: $func, tableName: $tableName, dataString: $dataString, columnName: $columnName, uniqueId: $uniqueId },
	        	datatype: 'text',
				type: 'GET',
                success: function () {
                    //do nothing
                },
			});// end ajax 
            
            //************************
            //* Save to borrower_tbl
            //************************
            
            // Assign input values to javascript variables
			var $borrowerId = '<?php echo $borrowerId; ?>';
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
            
            // set ajax inputs
            var $func = "update";
            var $tableName = "borrower_tbl";
            var $dataString = "firstName = '" + $firstName + "',middleName = '" + $middleName + "',lastName = '" + $lastName + "',suffix = '" + $suffix + "',email = '" + $email + "',phone = '" + $phone + "',currAddress = '" + $currAddress + "',currCity = '" + $currCity + "',currState = '" + $currState + "',currZip = '" + $currZip + "',currRentOwn = '" + $currRentOwn + "',currYears = '" + $currYears + "',currMonths = '" + $currMonths + "',prevAddress = '" + $prevAddress + "',prevCity = '" + $prevCity + "',prevState = '" + $prevState + "',prevZip = '" + $prevZip + "', prevRentOwn = '" + $prevRentOwn + "',prevYears = '" + $prevYears + "',prevMonths = '" + $prevMonths + "',hasDiffMail = '" + $hasDiffMail + "',mailAddress = '" + $mailAddress + "',mailCity = '" + $mailCity + "',mailState = '" + $mailState + "',mailZip = '" + $mailZip + "'";
            var $columnName = "id";
            var $uniqueId = '<?php echo $coborrowerId; ?>';
            
            //alert($dataString); 
            
            updateDatabase($func, $tableName, $dataString, $columnName, $uniqueId, $location); //jsFunction.php

        } //end saveFields()
        
	}); //$(document).ready(function()
    
</script>