<?php
/**********************************************************
 * This page is $.loaded into page-loan.php
 **********************************************************/
?>

<?php include 'inc/config.php'; ?>
<?php $appId = $_POST['id']; ?>

<?php
/******************************************************
 * QUERIES
 ******************************************************/
?>
<?php
    try {
        $query = $db->query("SELECT * FROM app_tbl WHERE id='" . $appId . "';" );
    } catch (Exception $e) {
        echo "Query issues: " . $e->getMessage();
        exit;
    }
    $app = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
/******************************************************
 * WEBSITE
 ******************************************************/
?>
<div class="col-sm-12" id="app-wrapper">
    
    <div class="col-sm-12 section-header"><h1>Loan Details</h1></div>
    
    <div class="form-group col-sm-2">
        <label>Purpose</label>
        <input type="radio" class="radio-button" name="hasDiffMail" value="1" <?php if ($app[0]['hasDiffMail'] == "1") { echo 'checked'; } ?>><span class="span-radio">Purchase</span>
        <input type="radio" class="radio-button" name="hasDiffMail" value="0" <?php if ($app[0]['hasDiffMail'] == "0") { echo 'checked'; } ?>><span class="span-radio">Refi</span> 
    </div>
    <div class="form-group col-sm-2">
        <label>Amortization</label>
        <select id="refiPurpose">
            <option value="">Please Select...</option>
            <option value="Cash Out" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Fixed</option>
            <option value="Lower Payment" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Variable</option>
        </select>
    </div>
    <div class="form-group col-sm-2">
        <label for="refiPurpose">Loan Type</label>
        <select id="refiPurpose">
            <option value="">Please Select...</option>
            <option value="Cash Out" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Conventional</option>
            <option value="Lower Payment" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>FHA</option>
            <option value="Change Term" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>VA</option>
        </select>
    </div>
    
    <div class="col-sm-3">
        <div class="form-group col-sm-12">
            <label for="subjZip">Appraised Value</label>
            <input type="text" id="apprVal" value="<?php echo $app[0]['subjZip']; ?>">
        </div>
        <div class="form-group col-sm-12">
            <label for="subjZip">Purchase Price</label>
            <input type="text" id="purchasePrice" value="<?php echo $app[0]['subjZip']; ?>">
        </div>
        <div class="form-group col-sm-12">
            <label for="subjZip">Down Payment</label>
            <div class="row">
                <div class="col-sm-7"><input type="text" id="downPaymentDollar" value="<?php echo $app[0]['subjZip']; ?>" placeholder="$"></div>
                <div class="col-sm-5"><input type="text" id="downPaymentPercent" value="<?php echo $app[0]['subjZip']; ?>" placeholder="%"></div>
            </div>
            
        </div>
    </div>
    
    <div class="col-sm-3">
        <div class="form-group col-sm-12">
            <div class="checkbox"><input type="radio" class="radio-button" name="hasDiffMail" value="0" <?php if ($app[0]['hasDiffMail'] == "0") { echo 'checked'; } ?>><span class="span-radio">Conventional</span></div>
            <div class="checkbox"><input type="radio" class="radio-button" name="hasDiffMail" value="0" <?php if ($app[0]['hasDiffMail'] == "0") { echo 'checked'; } ?>><span class="span-radio">FHA</span></div>
            <div class="checkbox"><input type="radio" class="radio-button" name="hasDiffMail" value="0" <?php if ($app[0]['hasDiffMail'] == "0") { echo 'checked'; } ?>><span class="span-radio">VA</span></div>
            <div class="checkbox"><input type="radio" class="radio-button" name="hasDiffMail" value="0" <?php if ($app[0]['hasDiffMail'] == "0") { echo 'checked'; } ?>><span class="span-radio">USDA</span></div>
        </div>
    </div>
    
    <div class="col-sm-3">
        <div class="form-group col-sm-12">
            <div class="checkbox"><input type="radio" class="radio-button" name="hasDiffMail" value="0" <?php if ($app[0]['hasDiffMail'] == "0") { echo 'checked'; } ?>><span class="span-radio">Primary</span></div>
            <div class="checkbox"><input type="radio" class="radio-button" name="hasDiffMail" value="0" <?php if ($app[0]['hasDiffMail'] == "0") { echo 'checked'; } ?>><span class="span-radio">Secondary</span></div>
            <div class="checkbox"><input type="radio" class="radio-button" name="hasDiffMail" value="0" <?php if ($app[0]['hasDiffMail'] == "0") { echo 'checked'; } ?>><span class="span-radio">Investment</span></div>
        </div>
    </div>
    
    <div class="col-sm-3">
        <div class="form-group col-sm-12">
            <div class="checkbox"><input type="radio" class="radio-button" name="hasDiffMail" value="0" <?php if ($app[0]['hasDiffMail'] == "0") { echo 'checked'; } ?>><span class="span-radio">First</span></div>
            <div class="checkbox"><input type="radio" class="radio-button" name="hasDiffMail" value="0" <?php if ($app[0]['hasDiffMail'] == "0") { echo 'checked'; } ?>><span class="span-radio">Second</span></div>
            <div class="checkbox"><input type="radio" class="radio-button" name="hasDiffMail" value="0" <?php if ($app[0]['hasDiffMail'] == "0") { echo 'checked'; } ?>><span class="span-radio">Other</span></div>
        </div>
    </div>
    
    
    
    <div class="col-sm-12 section-header"><h1>Loan Details</h1></div>
    
    
    
    <div class="form-group col-sm-2">
        <label for="subjZip">Interest Rate</label>
        <input type="text" id="subjZip" value="<?php echo $app[0]['subjZip']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label for="subjZip">Loan Term (yrs)</label>
        <input type="text" id="subjZip" value="<?php echo $app[0]['subjZip']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label for="subjAddress">Close Date</label>
        <input type="date" id="subjAddress" value="<?php echo $app[0]['dob']; ?>">
    </div>
    <div class="refinance-container">
        <div class="form-group col-sm-2">
            <label for="refiPurpose">Purpose of Refinance</label>
            <select id="refiPurpose">
                <option value="">Please Select...</option>
                <option value="Cash Out" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Cash Out</option>
                <option value="Lower Payment" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lower Payment</option>
                <option value="Change Term" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Change Term</option>
            </select>
        </div>
    </div>
    
    
    
    <div class="col-sm-12 section-header"><h1>Subject Property</h1></div>

    <div class="form-group col-sm-4">
        <label for="subjAddress">Address</label>
        <input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label for="subjCity">City</label>
        <input type="text" id="subjCity" value="<?php echo $app[0]['subjCity']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label for="subjState">State</label>
        <input type="text" id="subjState" value="<?php echo $app[0]['subjState']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label for="subjZip">Zip</label>
        <input type="text" id="subjZip" value="<?php echo $app[0]['subjZip']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label for="subjZip">County</label>
        <input type="text" id="subjZip" value="<?php echo $app[0]['subjZip']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label for="subjZip">Year Built</label>
        <input type="text" id="subjZip" value="<?php echo $app[0]['subjZip']; ?>">
    </div>
    <div class="form-group col-sm-4">
        <label for="subjZip">Legal Description</label>
        <input type="text" id="subjZip" value="<?php echo $app[0]['legalDescription']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label for="subjZip">Number of Units</label>
        <input type="text" id="subjZip" value="<?php echo $app[0]['subjZip']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label for="maritalStatus">Property will be</label>
        <select id="subjPptyType">
            <option value="">Please Select...</option>
            <option value="Primary Residence" <?php if ($app[0]['subjPptyType'] == "Primary Residence") { echo "selected"; } ?>>Primary Residence</option>
            <option value="Secondary Residence" <?php if ($app[0]['subjPptyType'] == "Secondary Residence") { echo "selected"; } ?>>Secondary Residence</option>
            <option value="Investment" <?php if ($app[0]['subjPptyType'] == "Investment") { echo "selected"; } ?>>Investment</option>
        </select>
    </div>
    <div class="refinance-container">
        <div class="form-group col-sm-2">
            <label for="yearPurchased">Year Purchased</label>
            <input type="text" id="yearPurchased" value="<?php echo $app[0]['yearPurchased']; ?>">
        </div>
    </div>
    <div class="refinance-container">
        <div class="form-group col-sm-2">
            <label for="origPrice">Original Purchase Price</label>
            <input type="text" id="origPrice" value="<?php echo $app[0]['origPrice']; ?>">
        </div>
    </div>
    <div class="refinance-container">
        <div class="form-group col-sm-2">
            <label for="currMortgage">Current Mortgage Amt</label>
            <input type="text" id="currMortgage" value="<?php echo $app[0]['currMortgage']; ?>">
        </div>
    </div>
    <div class="refinance-container">
        <div class="form-group col-sm-2">
            <label for="estimatedValue">Estimated Value</label>
            <input type="text" id="estimatedValue" value="<?php echo $app[0]['estimatedValue']; ?>">
        </div> 
    </div>
    <div class="form-group col-sm-2">
        <label for="maritalStatus">Property Type</label>
        <select id="subjPptyType">
            <option value="">Please Select...</option>
            <option value="Primary Residence" <?php if ($app[0]['subjPptyType'] == "Primary Residence") { echo "selected"; } ?>>Attached</option>
            <option value="Secondary Residence" <?php if ($app[0]['subjPptyType'] == "Secondary Residence") { echo "selected"; } ?>>Detached</option>
            <option value="Investment" <?php if ($app[0]['subjPptyType'] == "Investment") { echo "selected"; } ?>>PUD Attached</option>
            <option value="Investment" <?php if ($app[0]['subjPptyType'] == "Investment") { echo "selected"; } ?>>PUD Detached</option>
            <option value="Investment" <?php if ($app[0]['subjPptyType'] == "Investment") { echo "selected"; } ?>>Condo</option>
        </select>
    </div>
    
    
    <div class="col-sm-12 section-header"><h1>Rate Lock</h1></div>

    <div class="form-group col-sm-2">
        <label for="subjAddress">Lock Date</label>
        <input type="date" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label for="subjState">Lock Expiration</label>
        <input type="date" id="subjState" value="<?php echo $app[0]['subjState']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label for="subjCity">Lock Duration (days)</label>
        <input type="text" id="subjCity" value="<?php echo $app[0]['subjCity']; ?>">
    </div>
</div>




<?php
/******************************************************
 * JAVASCRIPT
 ******************************************************/
?>

<script type="text/javascript">
	$(document).ready(function() {
		
        console.log("javascript loaded (src: insert-loan.php)");
        
        
        
        //Format $ Values if this works, move it to jsfunctions.php to be accessed globally
        $("#downPaymentDollar").focusout(function() {
            $purchasePrice = $("#purchasePrice").val();
            $downPayment = $("#downPaymentDollar").val();
            $downPaymentPercent = $downPayment/$purchasePrice;
            $("#downPaymentPercent").val(($downPaymentPercent*100) + '%');
        });
        
        $("#downPaymentPercent").focusout(function() {
            $purchasePrice = $("#purchasePrice").val();
            $downPayment = $("#downPaymentPercent").val();
            $("#downPaymentDollar").val(($downPayment/100)*$purchasePrice);
        });
        
        
        
        
        //$(".help-container").hide();
        
        //$(".has-help-text").click(function() {
        //    $(this).parent().siblings().show();
        //});
        
        
        //State Check
        $("#subjState").focusout(function() {
            if ($("#subjState").val().toLowerCase() != "texas" && $("#subjState").val().toLowerCase() != "tx") {
                alert("Standing Rock only does loans in Texas.");
            }
        });
        
        //NUMBER OF UNITS CHECK
        $("#subjUnits").focusout(function() {
            if ($("#subjUnits").val() >= 5) {
                alert("Property cannot have more than 4 units. 5 or more is a commercial loan - please call us for assistance.");
            }
        });
        
        //**********************************************
		// SHOW/HIDE DIVS ON LOAD
		//**********************************************
        
        if ($("input[name=hasContract]:checked").val() != "1") {
            $("#subj-prop-div").hide();
        }
        
        //**********************************************
		// SHOW/HIDE DIVS ON ACTION
        // if certain fields are clicked, hide or show
		//**********************************************
        
        $("input[name=hasContract]").click(function(){
            if ($("input[name=hasContract]:checked").val() == 1) {
                $("#subj-prop-div").slideDown("slow");
            } else { //if no
                $("#subj-prop-div").slideUp("slow");
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
            
            //var $subjPptyType = $("input[name=subjPptyType]:selected").val();
            var $subjPptyType = $("#subjPptyType").val();
			var $hasContract = $("input[name=hasContract]:checked").val();
			var $subjAddress = $("#subjAddress").val();
            var $subjCity = $("#subjCity").val();
            var $subjState = $("#subjState").val();
            var $subjZip = $("#subjZip").val();
			var $subjBuilt = $("#subjBuilt").val();
			var $subjUnits = $("#subjUnits").val();
			var $purchasePrice = $("#purchasePrice").val();
			var $downPmt = $("#downPmt").val();
			var $srcDownPmt = $("#srcDownPmt").val()
            
            //Set ajax inputs
            var $func = "update";
            var $tableName = "app_tbl";
            var $dataString = "subjPptyType = '" + $subjPptyType + "',hasContract = " + $hasContract + ",subjAddress = '" + $subjAddress + "',subjCity = '" + $subjCity + "',subjState = '" + $subjState + "',subjZip = '" + $subjZip + "',subjBuilt = '" + $subjBuilt + "',subjUnits = '" + $subjUnits + "',purchasePrice = " + $purchasePrice + ",downPmt = " + $downPmt + ",srcDownPmt = '" + $srcDownPmt + "'";
            var $columnName = "id";
            var $uniqueId = '<?php echo $appId; ?>';
            
            alert($dataString);
            
            updateDatabase($func, $tableName, $dataString, $columnName, $uniqueId); //jsfunctions.php
            
        } // end saveInputFields()
		
	}); //$(document).ready(function()
</script>