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
        $results = $db->query("SELECT * FROM app_tbl WHERE id='" . $appId . "';" );
    } catch (Exception $e) {
        echo "Could not connect to database!: " . $e->getMessage();
        exit;
    }
    $app = $results->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
/******************************************************
 * WEBSITE
 ******************************************************/
?>
<div class="col-sm-12" id="app-wrapper">
    <?php
    /***********************************
     * SUBJECT PROPERTY
     ***********************************/
    ?>
    <div class="col-sm-12 section-header"><h1>Subject Property</h1></div>
    
    <div class="form-group col-sm-2">
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
        <label for="subjZip">Legal Description</label>
        <input type="text" id="subjZip" value="<?php echo $app[0]['legalDescription']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label for="subjZip">Year Built</label>
        <input type="text" id="subjZip" value="<?php echo $app[0]['subjZip']; ?>">
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
    <div class="col-xs-12" style="height:30px;"></div>
    <div class="form-group col-sm-2">
        <label for="hasContract">Do you have a sales contract?</label></div>
        <input type="radio" class="radio-button" name="hasContract" value="1" <?php if ($app[0]['hasContract'] == "1") { echo 'checked'; } ?>><span>Yes</span>
        <input type="radio" class="radio-button" name="hasContract" value="0" <?php if ($app[0]['hasContract'] == "0") { echo 'checked'; } ?>><span>No</span>
    </div>
    

</div> <!-- end app-wrapper -->

    
    
<?php
/******************************************************
 * JAVASCRIPT
 ******************************************************/
?>

<script type="text/javascript">
	$(document).ready(function() {
        
        console.log("javascript loaded (src: insert-property.php)");
            
        //**********************************************
        // HIDE HELP ON FOCUSOUT
        //**********************************************
        
        $(".input-div").focusout(function() {
            $(".help-container").hide(); 
        });
        
        //**********************************************
		// SHOW/HIDE DIVS ON LOAD
		//**********************************************
        
        //COBO
        if ('<?php echo $app[0]['hasCobo']; ?>' == '1') {
            //do nothing, shows by default
        } else {
            $("#cobo-div").hide();
            $("#cobo-container").hide();
        }
            
        //**********************************************
		// SHOW/HIDE DIVS ON ACTION
        // if certain fields are clicked, hide or show
		//**********************************************

		// COBO
        $("input[name=hasCobo]").click(function() {
            if ($("input[name=hasCobo]:checked").val() == 1) {
                $("#cobo-div").slideDown( "slow");
                $("#cobo-container").slideDown( "slow");
            } else { //if no
                //hide dive
                $("#cobo-div").slideUp("slow");
                $("#cobo-container").slideUp("slow");
            }
        });
        
        //**********************************************
		//* SAVE & CONTINUE BUTTON
		//**********************************************
		
		$("#save-continue").click(function() {
            var $location = '<?php echo $declarations_page; ?>';
            saveInputFields();
            //goTo($location);
		}); //$("#save-continue").click(function()
        
        $("#save-exit").click(function() {
			$location = '<?php echo $homepage; ?>';
            saveInputFields();
            goTo($location);
		}); //$("#save-continue").click(function()
        
        $("#submit-div-text").click(function() {
            var $location = '<?php echo $app_submitted_page; ?>';
            saveInputFields();
            console.log('<?php echo $email . "," . $borrowerId . "," . $appId; ?>');
            submitApplication('<?php echo $email; ?>','<?php echo $borrowerId; ?>','<?php echo $appId; ?>'); //jsFunction.php
            //goTo($location); //jsFunction.php
		}); //$("#save-continue").click(function()
        
        //**********************************************
		//* SaveInputFields() FUNCTION
        //* saveFields is called when either Save & Close or Save & Continue is called
        //* this will assign all input fields on the screen to variables and make the ajax call
        //* on success it will direct the user to the $location that was passed to it in the arguments
		//**********************************************
        
        function saveInputFields() {
            //************************
            //* Save hasCobo and isMarriedCobo to app_tbl
            //************************
            var $hasCobo = $("input[name=hasCobo]:checked").val();
            var $marriedCobo;
                if ($hasCobo == 0) { $marriedCobo = 0 } else { $marriedCobo = $("input[name=marriedCobo]:checked").val() };
            
            // set ajax inputs
            var $func = "update";
            var $tableName = "app_tbl";
            var $dataString = "hasCobo = '" + $hasCobo + "',isMarriedCobo = '" + $marriedCobo + "'";
            var $columnName = "id";
            var $uniqueId = '<?php echo $appId; ?>';
            
            //alert($dataString);
            
            updateDatabase($func, $tableName, $dataString, $columnName, $uniqueId); //jsFunction.php    
            
            //************************
            //* If hasCobo == 1 create placeholder for cobo
            //************************
            if ($hasCobo == "1") {
                var $coboEmail = $("#coboEmail").val();
                var $appId = '<?php echo $appId; ?>';
                
                createCobo($coboEmail, $appId); //jsfunctions.php
            
            }
            
            //************************
            //* Save to app_tbl
            //************************
            
            //Assign input values to javascript variables
            var $grossIncome = $("#grossIncome").val();
            var $otherIncome = $("#otherIncome").val();
            var $srcSalary;
                if ($("#srcSalary").is(':checked')) { $srcSalary = "1" } else { $srcSalary = "0" }
            var $srcCommBon;
                if ($("#srcCommBon").is(':checked')) { $srcCommBon = "1" } else { $srcCommBon = "0" }
            var $srcHourly;
                if ($("#srcHourly").is(':checked')) { $srcHourly = "1" } else { $srcHourly = "0" }
            var $srcSelfEmp;
                if ($("#srcSelfEmp").is(':checked')) { $srcSelfEmp = "1" } else { $srcSelfEmp = "0" }
            var $mtgPmt = $("#mtgPmt").val();
            var $carPmt = $("#carPmt").val();
            var $otherDebtPmt = $("#otherDebtPmt").val();
            var $chkSav = $("#chkSav").val();
            var $stkBnd = $("#stkBnd").val();
            var $otherAssets = $("#otherAssets").val();
            
            var $cobo_grossIncome = $("#cobo_grossIncome").val();
            var $cobo_otherIncome = $("#cobo_otherIncome").val();
            var $cobo_srcSalary;
                if ($("#cobo_srcSalary").is(':checked')) { $cobo_srcSalary = "1" } else { $cobo_srcSalary = "0" }
            var $cobo_srcCommBon;
                if ($("#cobo_srcCommBon").is(':checked')) { $cobo_srcCommBon = "1" } else { $cobo_srcCommBon = "0" }
            var $cobo_srcHourly;
                if ($("#cobo_srcHourly").is(':checked')) { $cobo_srcHourly = "1" } else { $cobo_srcHourly = "0" }
            var $cobo_srcSelfEmp;
                if ($("#cobo_srcSelfEmp").is(':checked')) { $cobo_srcSelfEmp = "1" } else { $cobo_srcSelfEmp = "0" }
            var $cobo_mtgPmt = $("#cobo_mtgPmt").val();
            var $cobo_carPmt = $("#cobo_carPmt").val();
            var $cobo_otherDebtPmt = $("#cobo_otherDebtPmt").val();
            var $cobo_chkSav = $("#cobo_chkSav").val();
            var $cobo_stkBnd = $("#cobo_stkBnd").val();
            var $cobo_otherAssets = $("#cobo_otherAssets").val();
            
            // set ajax inputs
            var $func = "update";
            var $tableName = "app_tbl";
            var $dataString = "grossIncome = " + $grossIncome + ",otherIncome = " + $otherIncome + ",srcSalary = '" + $srcSalary + "',srcCommBon = '" + $srcCommBon + "',srcHourly = '" + $srcHourly + "',srcSelfEmp = '" + $srcSelfEmp + "',mtgPmt = " + $mtgPmt + ",carPmt = " + $carPmt + ",otherDebtPmt = " + $otherDebtPmt + ",chkSav = " + $chkSav + ",stkBnd = " + $stkBnd + ",otherAssets = " + $otherAssets + ",cobo_grossIncome = " + $cobo_grossIncome + ",cobo_otherIncome = " + $cobo_otherIncome + ",cobo_srcSalary = '" + $cobo_srcSalary + "',cobo_srcCommBon = '" + $cobo_srcCommBon + "',cobo_srcHourly = '" + $cobo_srcHourly + "',cobo_srcSelfEmp = '" + $cobo_srcSelfEmp + "',cobo_mtgPmt = " + $cobo_mtgPmt + ",cobo_carPmt = " + $cobo_carPmt + ",cobo_otherDebtPmt = " + $cobo_otherDebtPmt + ",cobo_chkSav = " + $cobo_chkSav + ",cobo_stkBnd = " + $cobo_stkBnd + ",cobo_otherAssets = " + $cobo_otherAssets;
            var $columnName = "id";
            var $uniqueId = '<?php echo $borrowerId; ?>';
            
            alert($dataString);
            
            updateDatabase($func, $tableName, $dataString, $columnName, $uniqueId); //jsFunction.php
            
        } // end SaveInputFields()
		
	}); //$(document).ready(function()
</script>