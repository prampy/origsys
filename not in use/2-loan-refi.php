<?php $pageTitle = "Standing Rock Mortgage | Application"; ?>
<?php $complete = 2; // for the circle-steps ?>
<?php include 'inc/header.php'; ?>
<?php $appId =  $_SESSION["appId"]; ?>
<?php $email =  $_SESSION["email"]; ?>

<?php
/******************************************************
 * QUERIES
 ******************************************************/
?>
<?php
    try {
        $results = $db->query("SELECT * FROM app_tbl WHERE id='" . $appId . "';" );
    } catch (Exception $e) {
        echo "Query issues: " . $e->getMessage();
        exit;
    }
    $app = $results->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
/******************************************************
 * WEBSITE
 ******************************************************/
?>
<div id="app-wrapper">
    <div id="page-title">
        <h1>Loan Application</h1>
        <div class="circle-div-container">
            <div class="circle-div complete" title="Contact Information">1</div>
            <div class="circle-div complete" title="Loan Details">2</div> 
            <div class="circle-div" title="Borrower Information">3</div>
            <div class="circle-div" title="Assets and Liabilities">4</div>
            <div class="circle-div" title="Declarations">5</div>
        </div>
    </div>

    <div class="table-container">
        <?php
        /***********************************
         * LOAN DETAILS
         ***********************************/
        ?>
        <div class="label-div"><h1 class="section-header">Loan Details</h1></div>
        <br>
        
        <?php
        /**********************
         * PROPERTY DEFINITION
         *********************/
        ?>
        
        <div class="question-container">
            <div class="label-div"><label for="refiPurpose">Purpose of Refinance</label></div>
            <div class="input-div">
                <select id="refiPurpose">
                    <option value="">Please Select...</option>
                    <option value="Cash Out" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Cash Out</option>
                    <option value="Lower Payment" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lower Payment</option>
                    <option value="Change Term" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Change Term</option>
                </select>
            </div>
        </div>

        <div class="label-div"><h1 class="section-header">Refinance Property Details</h1></div>
        <br>
        <?php /*
        <div class="question-container">
            <div class="label-div">Use my Current Address</div>
            <div class="dec-input-div">
                <input type="checkbox" class="check-box" id="same-as-current" <?php if ($declarations[0]['indian'] == "1") { echo 'checked'; } ?>><br>
            </div>
        </div>
        */ ?>
        <div class="question-container">
            <div class="label-div"><label for="subjAddress">Property Address</label></div>
            <div class="input-div"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="subjCity">City</label></div>
            <div class="input-div"><input type="text" id="subjCity" value="<?php echo $app[0]['subjCity']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="subjState">State</label></div>
            <div class="input-div"><input type="text" id="subjState" value="<?php echo $app[0]['subjState']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="subjZip">Zip</label></div>
            <div class="input-div"><input type="text" id="subjZip" value="<?php echo $app[0]['subjZip']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="subjBuilt">Year Built</label></div>
            <div class="input-div"><input type="text" id="subjBuilt" value="<?php echo $app[0]['subjBuilt']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="subjUnits">Number of Units</label></div>
            <div class="input-div"><input type="text" id="subjUnits" value="<?php echo $app[0]['subjUnits']; ?>"></div>
            <div class="help-container">
                <div class="label-div"></div><div class="input-div"></div><?php /* spacer line */ ?>
                <div class="help-div">If the house is a single family residence, put 1. If duplex, 2. And so on, up to 4 units.</div>
                <div class="label-div"></div><div class="input-div"></div><?php /* spacer line */ ?>
            </div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="yearPurchased">Year Purchased</label></div>
            <div class="input-div"><input type="text" id="yearPurchased" value="<?php echo $app[0]['yearPurchased']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="origPrice">Original Purchase Price</label></div>
            <div class="input-div"><input type="text" id="origPrice" value="<?php echo $app[0]['origPrice']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="currMortgage">Current Mortgage Amount</label></div>
            <div class="input-div"><input type="text" id="currMortgage" value="<?php echo $app[0]['currMortgage']; ?>"></div>
        </div>
        <div class="question-container">
        <div class="label-div"><label for="estimatedValue">Estimated Value</label></div>
            <div class="input-div"><input type="text" id="estimatedValue" value="<?php echo $app[0]['estimatedValue']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="pptyPurpose">Property is</label></div>
            <div class="input-div">
                <select id="pptyPurpose">
                    <option value="">Please Select...</option>
                    <option value="Primary Residence" <?php if ($app[0]['pptyPurpose'] == "Primary Residence") { echo "selected"; } ?>>Primary Residence</option>
                    <option value="Secondary Residence" <?php if ($app[0]['pptyPurpose'] == "Secondary Residence") { echo "selected"; } ?>>Secondary Residence</option>
                    <option value="Investment" <?php if ($app[0]['pptyPurpose'] == "Investment") { echo "selected"; } ?>>Investment</option>
                </select>
            </div>
        </div>
        
    </div>
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
    
    
<?php include 'inc/footer.php' ?>
    
    
<?php
/******************************************************
 * JAVASCRIPT
 ******************************************************/
?>

<script type="text/javascript">
	$(document).ready(function() {
		console.log("Javascript loaded");
       
        $(".help-container").hide();
        
        $(".has-help-text").click(function() {
            $(this).parent().siblings().show();
        });
        
        //NUMBER OF UNITS CHECK
        $("#subjUnits").focusout(function() {
            if ($("#subjUnits").val() >= 5) {
                alert("Property cannot have more than 4 units. 5 or more is a commercial loan. Please call.");
            }
        });
        
        //**********************************************
		//* ACTIONS ON CLICK
		//**********************************************
        
        //auto-populates the refi address with the current address
        $("#same-as-current").click(function() {
            if ($("#same-as-current").is(':checked')) {
                $("#subjAddress").val('<?php echo $app[0]['currAddress']; ?>');
                $("#subjCity").val('<?php echo $app[0]['currCity']; ?>');
                $("#subjState").val('<?php echo $app[0]['currState']; ?>');
                $("#subjZip").val('<?php echo $app[0]['currZip']; ?>');
            } else {
                $("#subjAddress").val("");
                $("#subjCity").val("");
                $("#subjState").val("");
                $("#subjZip").val("");
            }
        });
        
        //**********************************************
		//* SAVE & CONTINUE BUTTON
		//**********************************************
		
		$("#save-continue").click(function() {
            var $location = '<?php echo $borrower_page; ?>';
            saveInputFields();
            goTo($location);
		}); //$("#save-continue").click(function()
        
        $("#save-exit").click(function() {
			$location = '<?php echo $homepage; ?>';
            saveInputFields();
            goTo($location);
		}); //$("#save-continue").click(function()
        
        $("#submit-div").click(function() {
			checkRequired();
            var $location = '<?php echo $app_submitted_page; ?>';
            saveInputFields();
            submitApplication('<?php echo $email; ?>','<?php echo $borrowerId; ?>','<?php echo $appId; ?>'); //jsFunction.php
            goTo($location);
		}); //$("#save-continue").click(function()
        
        //**********************************************
		//* saveInputFields() FUNCTION
        //* saveFields is called when either Save & Close or Save & Continue is called
        //* this will assign all input fields on the screen to variables and make the ajax call
        //* on success it will direct the user to the $location that was passed to it in the arguments
		//**********************************************
        
        function saveInputFields() {
            //Assign input values to javascript variables
			var $appId = '<?php echo $appId; ?>';
            
            //var $subjPropType = $("input[name=subjPropType]:selected").val();
			var $subjAddress = $("#subjAddress").val();
            var $subjCity = $("#subjCity").val();
            var $subjState = $("#subjState").val();
            var $subjZip = $("#subjZip").val();
			var $subjBuilt = $("#subjBuilt").val();
			var $subjUnits = $("#subjUnits").val();
            var $refiPurpose = $("#refiPurpose").val();
            var $yearPurchased = $("#yearPurchased").val();
            var $origPrice = $("#origPrice").val();
			var $currMortgage = $("#currMortgage").val();
            var $estimatedValue = $("#estimatedValue").val();
            var $pptyPurpose = $("#pptyPurpose").val();
            
            //Set ajax inputs
            var $func = "update";
            var $tableName = "app_tbl";
            var $dataString = "subjAddress = '" + $subjAddress + "',subjCity = '" + $subjCity + "',subjState = '" + $subjState + "',subjZip = '" + $subjZip + "',subjBuilt = '" + $subjBuilt + "',subjUnits = '" + $subjUnits + "',origPrice = " +$origPrice + ",yearPurchased = '" + $yearPurchased + "',currMortgage = " + $currMortgage + ",estimatedValue = " + $estimatedValue + ",refiPurpose = '" + $refiPurpose + "',pptyPurpose = '" + $pptyPurpose + "'";
            var $columnName = "id";
            var $uniqueId = '<?php echo $appId; ?>';
            
            //alert($dataString);
            
            updateDatabase($func, $tableName, $dataString, $columnName, $uniqueId); //jsfunctions.php
            
        } // end saveInputFields()
		
	}); //$(document).ready(function()
</script>