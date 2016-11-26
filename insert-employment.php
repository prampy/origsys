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

<div class="col-sm-12" id="app-wrapper">
        
    <?php
    /***********************************
     * CURRENT EMPLOYER
     ***********************************/
    ?>
    
    <div class="col-sm-12">
        <table class="table">
            <tr>
                <th>Company Name</th>
                <th>Address</th>
                <th>Position</th>
                <th>Phone</th>
                <th>Years</th>
            </tr>
            <tr>
                <td>Imagine Solutions</td>
                <td>1550 LBJ Freeway, Suite 750, Dallas, Texas 75035</td>
                <td>Business Analyst</td>
                <td>214-906-3611</td>
                <td>3yrs 1mos</td>
            </tr>
        </table>
    
    </div>
    
    
    <div class="col-sm-12 section-header"><h1>Current Employer</h1></div>

    <div class="form-group col-sm-2">
        <label for="currJobName">Company Name</label>
        <input type="text" id="currJobName" value="<?php echo $app[0]['currJobName']; ?>">
    </div>
    <div class="form-group col-sm-4">
        <label for="currJobAddress">Address</label>
        <input type="text" id="currJobAddress" value="<?php echo $app[0]['currJobAddress']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label for="currJobCity">City</label>
        <input type="text" id="currJobCity" value="<?php echo $app[0]['currJobCity']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label for="currJobState">State</label>
        <input type="text" id="currJobState" value="<?php echo $app[0]['currJobState']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label for="currJobZip">Zip</label>
        <input type="text" id="currJobZip" value="<?php echo $app[0]['currJobZip']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label for="currJobPhone">Business Phone</label>
        <input type="text" id="currJobPhone" value="<?php echo $app[0]['currJobPhone']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label for="currJobTitle">Position/Title</label>
        <input type="text" id="currJobTitle" value="<?php echo $app[0]['currJobTitle']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label for="currJobIncome">Monthly Income</label>
        <input type="text" id="currJobIncome" value="<?php echo $app[0]['currJobIncome']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label>Employed for</label>
        <input type="text" class="col-sm-6" id="currJobYears" placeholder="Yrs" value="<?php echo $app[0]['currJobYears']; ?>">
        <input type="text" class="col-sm-6" id="currJobMonths" placeholder="Mos" value="<?php echo $app[0]['currJobMonths']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label for="currJobIncome">Years in Work</label>
        <input type="text" id="currJobIncome" value="<?php echo $app[0]['currJobIncome']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label>Self Employed?</label>
        <input type="radio" class="radio-button" name="currJobSelfEmployed" value="1" <?php if ($app[0]['currJobSelfEmployed'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
        <input type="radio" class="radio-button" name="currJobSelfEmployed" value="0" <?php if ($app[0]['currJobSelfEmployed'] == "0") { echo 'checked'; } ?>><span class="span-radio">No</span>
    </div>
    

     <?php
    /***********************************
     * PREVIOUS EMPLOYER
     ***********************************/
    ?>
    <div id="prev-job-div">
        <div class="col-sm-12 section-header"><h1>Previous Employer</h1></div>
        
        <div class="form-group col-sm-2">
            <label for="prevJobName">Company Name</label>
            <input type="text" id="prevJobName" value="<?php echo $app[0]['prevJobName']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="prevJobAddress">Address</label>
            <input type="text" id="prevJobAddress" value="<?php echo $app[0]['prevJobAddress']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="prevJobCity">City</label>
            <input type="text" id="prevJobCity" value="<?php echo $app[0]['prevJobCity']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="prevJobState">State</label>
            <input type="text" id="prevJobState" value="<?php echo $app[0]['prevJobState']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="prevJobZip">Zip</label>
            <input type="text" id="prevJobZip" value="<?php echo $app[0]['prevJobZip']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="prevJobPhone">Business Phone</label>
            <input type="text" id="prevJobPhone" value="<?php echo $app[0]['prevJobPhone']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="prevJobTitle">Position/Title</label>
            <input type="text" id="prevJobTitle" value="<?php echo $app[0]['prevJobTitle']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="currJobIncome">Monthly Income</label>
            <input type="text" id="currJobIncome" value="<?php echo $app[0]['currJobIncome']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label>Employed for</label>
            <input type="text" class="col-sm-6" id="currJobYears" placeholder="Yrs" value="<?php echo $app[0]['currJobYears']; ?>">
            <input type="text" class="col-sm-6" id="currJobMonths" placeholder="Mos" value="<?php echo $app[0]['currJobMonths']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="currJobIncome">Years in Work</label>
            <input type="text" id="currJobIncome" value="<?php echo $app[0]['currJobIncome']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label>Are you Self Employed?</label>
            <input type="radio" class="radio-button" name="prevJobSelfEmployed" value="1" <?php if ($app[0]['prevJobSelfEmployed'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="prevJobSelfEmployed" value="0" <?php if ($app[0]['prevJobSelfEmployed'] == "0") { echo 'checked'; } ?>><span class="span-radio">No</span>
        </div>  
    </div>
    <div class="col-xs-12" style="height:30px;"></div>
    <div class="form-group col-sm-2">
        <label for="hasMultiJobs">Hold multiple jobs?</label>
        <input type="radio" class="radio-button" name="hasMultiJobs" value="1" <?php if ($app[0]['hasMultiJobs'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
        <input type="radio" class="radio-button" name="hasMultiJobs" value="0" <?php if ($app[0]['hasMultiJobs'] == "0") { echo 'checked'; } ?>><span class="span-radio">No</span>
    </div>
    <?php
    /***********************************
     * SECOND EMPLOYER
     ***********************************/
    ?>
    <div id="multi-job-div">
        <div class="col-sm-12 section-header"><h1>Second Employer</h1></div>
        
        <div class="form-group col-sm-2">
            <label for="secondJobName">Company Name</label>
            <input type="text" id="secondJobName" value="<?php echo $app[0]['secondJobName']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="secondJobAddress">Address</label>
            <input type="text" id="secondJobAddress" value="<?php echo $app[0]['secondJobAddress']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="secondJobCity">City</label>
            <input type="text" id="secondJobCity" value="<?php echo $app[0]['secondJobCity']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="secondJobState">State</label>
            <input type="text" id="secondJobState" value="<?php echo $app[0]['secondJobState']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="secondJobZip">Zip</label>
            <input type="text" id="secondJobZip" value="<?php echo $app[0]['secondJobZip']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="secondJobPhone">Business Phone</label>
            <input type="text" id="secondJobPhone" value="<?php echo $app[0]['secondJobPhone']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="secondJobTitle">Position/Title</label>
            <input type="text" id="secondJobTitle" value="<?php echo $app[0]['secondJobTitle']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="currJobIncome">Monthly Income</label>
            <input type="text" id="currJobIncome" value="<?php echo $app[0]['currJobIncome']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label>Employed for</label>
            <input type="text" class="col-sm-6" id="currJobYears" placeholder="Yrs" value="<?php echo $app[0]['currJobYears']; ?>">
            <input type="text" class="col-sm-6" id="currJobMonths" placeholder="Mos" value="<?php echo $app[0]['currJobMonths']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="currJobIncome">Years in Work</label>
            <input type="text" id="currJobIncome" value="<?php echo $app[0]['currJobIncome']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label>Employed for</label>
            <input type="text" class="col-sm-6" id="currJobYears" placeholder="Yrs" value="<?php echo $app[0]['secondJobYears']; ?>">
            <input type="text" class="col-sm-6" id="currJobYears" placeholder="Mos" value="<?php echo $app[0]['secondJobMonths']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="secondJobSelfEmployed">Are you Self Employed?</label>
            <input type="radio" class="radio-button" name="secondJobSelfEmployed" value="1" <?php if ($app[0]['secondJobSelfEmployed'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="secondJobSelfEmployed" value="0" <?php if ($app[0]['secondJobSelfEmployed'] == "0") { echo 'checked'; } ?>><span class="span-radio">No</span>
        </div>
    </div>

</div>
    
    
    
<?php
/******************************************************
 * JAVASCRIPT
 ******************************************************/
?>

<script type="text/javascript">
	$(document).ready(function() {
        
        console.log("javascript loaded (src: insert-employment.php)");
            
        //**********************************************
        // HIDE HELP ON FOCUSOUT
        //**********************************************
        
        $(".input-div").focusout(function() {
            $(".help-container").hide(); 
        });
        
        //$("#banner").load("banner.php");
        
        //**********************************************
		// SHOW/HIDE DIVS ON LOAD
		//**********************************************
        
        //COBO
        var $hasCobo = $("input[name=hasCobo]:checked").val();
        if ($hasCobo == 1) {
            //do nothing, shows by default
        } else {
            $("#cobo-div").hide();
            $("#cobo-container").hide();
        }
        
        //PREVIOUS EMPLOYER
        if ($("#currJobYears").val() >= 2 || $("#currJobYears").val() == "" ) {
            $("#prev-job-div").hide();
        } else {
            //do nothing, show by default
        }
        
        //PREVIOUS EMPLOYER
        if ($("#cobo_currJobYears").val() >= 2 || $("#cobo_currJobYears").val() == "" ) {
            $("#cobo_prev-job-div").hide();
        } else {
            //do nothing, show by default
        }
        
        //SECOND EMPLOYER
        var $hasMultiJobs = $("input[name=hasMultiJobs]:checked").val();
        if ($hasMultiJobs == 1) {
            //do nothing, shows by default
        } else {
            $("#multi-job-div").hide();
        }
        
        var $hasMultiJobs = $("input[name=cobo_hasMultiJobs]:checked").val();
        if ($hasMultiJobs == 1) {
            //do nothing, shows by default
        } else {
            $("#cobo_multi-job-div").hide();
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
        
        //PREVIOUS EMPLOYER
        $("#currJobYears").focusout(function() {
            if ($("#currJobYears").val() < 2) {
                $("#prev-job-div").slideDown("slow");
            } else {
                $("#prev-job-div").slideUp("slow");
                //clear values
                $("#prevJobAddress").val('');
                $("#prevJobCity").val('');
                $("#prevJobState").val('');
                $("#prevJobZip").val('');
            }
        });
        
        $("#cobo_currJobYears").focusout(function() {
            if ($("#cobo_currJobYears").val() < 2) {
                $("#cobo_prev-job-div").slideDown("slow");
            } else {
                $("#cobo_prev-job-div").slideUp("slow");
                //clear values
                $("#cobo_prevJobAddress").val('');
                $("#cobo_prevJobCity").val('');
                $("#cobo_prevJobState").val('');
                $("#cobo_prevJobZip").val('');
            }
        });
        
        // SECOND EMPLOYER
        $("input[name=hasMultiJobs]").click(function() {
            if ($("input[name=hasMultiJobs]:checked").val() == 1) {
                $("#multi-job-div").slideDown( "slow");
            } else { //if no
                //hid dive
                $("#multi-job-div").slideUp("slow");
                //clears values
                $("#secondJobName").val("");
                $("#secondJobAddress").val("");
                $("#secondJobCity").val("");
                $("#secondJobState").val("");
                $("#secondJobZip").val("");
                $("#secondJobPhone").val("");
                $("#secondJobTitle").val("");
            }
        });
        
        $("input[name=cobo_hasMultiJobs]").click(function() {
            if ($("input[name=cobo_hasMultiJobs]:checked").val() == 1) {
                $("#cobo_multi-job-div").slideDown( "slow");
            } else { //if no
                //hid dive
                $("#cobo_multi-job-div").slideUp("slow");
                //clears values
                $("#cobo_secondJobName").val("");
                $("#cobo_secondJobAddress").val("");
                $("#cobo_secondJobCity").val("");
                $("#cobo_secondJobState").val("");
                $("#cobo_secondJobZip").val("");
                $("#cobo_secondJobPhone").val("");
                $("#cobo_secondJobTitle").val("");
            }
        });
        
        //**********************************************
		//* SAVE & CONTINUE BUTTON
		//**********************************************
		
		$("#save-continue").click(function() {
            var $location = '<?php echo $financials_page; ?>';
            saveInputFields();
            goTo($location);
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
            //* Save to app_tbl
            //************************
            
            //Assign input values to javascript variables
            var $hasCobo = $("input[name=hasCobo]:checked").val();
            var $marriedCobo;
                if ($hasCobo == 0) { $marriedCobo = 0 } else { $marriedCobo = $("input[name=marriedCobo]:checked").val() };
            
            //var $ssn = $("#ssn").val();
            var $dob = $("#dob").val();
            var $yrsSchool = $("#yrsSchool").val();
            var $maritalStatus = $("#maritalStatus").val();
            var $dependents = $("#dependents").val();
            var $ageDependents = $("#ageDependents").val();
            //Current Employer
            var $currJobName = $("#currJobName").val();
            var $currJobAddress = $("#currJobAddress").val();
            var $currJobCity = $("#currJobCity").val();
            var $currJobState = $("#currJobState").val();
            var $currJobZip = $("#currJobZip").val();
            var $currJobPhone = $("#currJobPhone").val();
            var $currJobTitle = $("#currJobTitle").val();
            var $currJobIncome = $("#currJobIncome").val();
            var $currJobSelfEmployed = $("input[name=currJobSelfEmployed]:checked").val();
            var $currJobYears = $("#currJobYears").val();
            var $currJobMonths = $("#currJobMonths").val();
            //Previous Employer
            var $prevJobName = $("#prevJobName").val();
            var $prevJobAddress = $("#prevJobAddress").val();
            var $prevJobCity = $("#prevJobCity").val();
            var $prevJobState = $("#prevJobState").val();
            var $prevJobZip = $("#prevJobZip").val();
            var $prevJobPhone = $("#prevJobPhone").val();
            var $prevJobTitle = $("#prevJobTitle").val();
            var $prevJobIncome = $("#prevJobIncome").val();
            var $prevJobSelfEmployed = $("input[name=prevJobSelfEmployed]:checked").val();
            var $prevJobYears = $("#prevJobYears").val();
            var $prevJobMonths = $("#prevJobMonths").val();
            //Mutliple Jobs
            var $hasMultiJobs = $("input[name=hasMultiJobs]:checked").val();
            //Second Employer
            var $secondJobName = $("#secondJobName").val();
            var $secondJobAddress = $("#secondJobAddress").val();
            var $secondJobCity = $("#secondJobCity").val();
            var $secondJobState = $("#secondJobState").val();
            var $secondJobZip = $("#secondJobZip").val();
            var $secondJobPhone = $("#secondJobPhone").val();
            var $secondJobTitle = $("#secondJobTitle").val();
            var $secondJobIncome = $("#secondJobIncome").val();
            var $secondJobSelfEmployed = $("input[name=secondJobSelfEmployed]:checked").val();
            var $secondJobYears = $("#secondJobYears").val();
            var $secondJobMonths = $("#secondJobMonths").val();
            
            var $cobo_firstName = $("#cobo_firstName").val();
            var $cobo_lastName = $("#cobo_lastName").val();
            var $cobo_email = $("#cobo_email").val();
            /*
            //Income
            var $baseIncome = $("#baseIncome").val();
            var $overtime = $("#overtime").val();
            var $bonuses = $("#bonuses").val();
            var $commissions = $("#commissions").val();
            var $dividends = $("#dividends").val();
            var $netRentIncome = $("#netRentIncome").val();
            //Housing Expense
            var $rent = $("#rent").val();
            var $firstMortgage = $("#firstMortgage").val();
            var $otherFinancing = $("#otherFinancing").val();
            var $hazardIns = $("#hazardIns").val();
            var $taxes = $("#taxes").val();
            var $mortgageIns = $("#mortgageIns").val();
            var $hoaDues = $("#hoaDues").val();
            var $otherExpenses = $("#otherExpenses").val();
            
            //var $ssn = $("#ssn").val();
            TEST
            var $cobo_dob = $("#dob").val();
            var $cobo_yrsSchool = $("#yrsSchool").val();
            var $cobo_maritalStatus = $("#maritalStatus").val();
            var $cobo_dependents = $("#dependents").val();
            var $cobo_ageDependents = $("#ageDependents").val();
            //Current Employer
            var $cobo_currJobName = $("#currJobName").val();
            var $cobo_currJobAddress = $("#currJobAddress").val();
            var $cobo_currJobCity = $("#currJobCity").val();
            var $cobo_currJobState = $("#currJobState").val();
            var $cobo_currJobZip = $("#currJobZip").val();
            var $cobo_currJobPhone = $("#currJobPhone").val();
            var $cobo_currJobTitle = $("#currJobTitle").val();
            var $cobo_currJobIncome = $("#currJobIncome").val();
            var $cobo_currJobSelfEmployed = $("input[name=currJobSelfEmployed]:checked").val();
            var $cobo_currJobYears = $("#currJobYears").val();
            var $cobo_currJobMonths = $("#currJobMonths").val();
            //Previous Employer
            var $cobo_prevJobName = $("#prevJobName").val();
            var $cobo_prevJobAddress = $("#prevJobAddress").val();
            var $cobo_prevJobCity = $("#prevJobCity").val();
            var $cobo_prevJobState = $("#prevJobState").val();
            var $cobo_prevJobZip = $("#prevJobZip").val();
            var $cobo_prevJobPhone = $("#prevJobPhone").val();
            var $cobo_prevJobTitle = $("#prevJobTitle").val();
            var $cobo_prevJobIncome = $("#prevJobIncome").val();
            var $cobo_prevJobSelfEmployed = $("input[name=prevJobSelfEmployed]:checked").val();
            var $cobo_prevJobYears = $("#prevJobYears").val();
            var $cobo_prevJobMonths = $("#prevJobMonths").val();
            //Mutliple Jobs
            var $cobo_hasMultiJobs = $("input[name=hasMultiJobs]:checked").val();
            //Second Employer
            var $cobo_secondJobName = $("#secondJobName").val();
            var $cobo_secondJobAddress = $("#secondJobAddress").val();
            var $cobo_secondJobCity = $("#secondJobCity").val();
            var $cobo_secondJobState = $("#secondJobState").val();
            var $cobo_secondJobZip = $("#secondJobZip").val();
            var $cobo_secondJobPhone = $("#secondJobPhone").val();
            var $cobo_secondJobTitle = $("#secondJobTitle").val();
            var $cobo_secondJobIncome = $("#secondJobIncome").val();
            var $cobo_secondJobSelfEmployed = $("input[name=secondJobSelfEmployed]:checked").val();
            var $cobo_secondJobYears = $("#secondJobYears").val();
            var $cobo_secondJobMonths = $("#secondJobMonths").val();
            */
            
            // set ajax inputs
            var $func = "update";
            var $tableName = "app_tbl";
            //var $dataString = "hasCobo = '" + $hasCobo + "',isMarriedCobo = '" + $marriedCobo + "',dob = '" + $dob + "',yrsSchool = '" + $yrsSchool + "',maritalStatus = '" + $maritalStatus + "',dependents = '" + $dependents + "',ageDependents = '" + $ageDependents + "',currJobName = '" + $currJobName + "',currJobAddress = '" + $currJobAddress + "',currJobCity = '" + $currJobCity + "',currJobState = '" + $currJobState + "',currJobZip = '" + $currJobZip + "',currJobPhone = '" + $currJobPhone + "',currJobTitle = '" + $currJobTitle + "',currJobIncome = '" + $currJobIncome + "',currJobSelfEmployed = '" + $currJobSelfEmployed + "',currJobYears = '" + $currJobYears + "',currJobMonths = '" + $currJobMonths + "',prevJobName = '" + $prevJobName + "',prevJobAddress = '" + $prevJobAddress + "',prevJobCity = '" + $prevJobCity + "',prevJobState = '" + $prevJobState + "',prevJobZip = '"+ $prevJobZip + "',prevJobPhone = '" + $prevJobPhone + "',prevJobTitle = '" + $prevJobTitle + "',prevJobSelfEmployed = '" + $prevJobSelfEmployed + "',prevJobIncome = '" + $prevJobIncome + "',prevJobYears = '" + $prevJobYears + "',prevJobMonths = '" + $prevJobMonths + "',hasMultiJobs = '" + $hasMultiJobs + "',secondJobName = '" + $secondJobName + "',secondJobAddress = '" + $secondJobAddress + "',secondJobCity = '" + $secondJobCity + "',secondJobState = '" + $secondJobState + "',secondJobZip = '" + $secondJobZip + "',secondJobPhone = '" + $secondJobPhone + "',secondJobTitle = '" + $secondJobTitle + "',secondJobIncome = '" + $secondJobIncome + "',secondJobSelfEmployed = '" + $secondJobSelfEmployed + "',secondJobYears = '" + $secondJobYears + "',secondJobMonths = '" + $secondJobMonths + "',cobo_dob = '" + $cobo_dob + "',cobo_yrsSchool = '" + $cobo_yrsSchool + "',cobo_maritalStatus = '" + $cobo_maritalStatus + "',cobo_dependents = '" + $cobo_dependents + "',cobo_ageDependents = '" + $cobo_ageDependents + "',cobo_currJobName = '" + $cobo_currJobName + "',cobo_currJobAddress = '" + $cobo_currJobAddress + "',cobo_currJobCity = '" + $cobo_currJobCity + "',cobo_currJobState = '" + $cobo_currJobState + "',cobo_currJobZip = '" + $cobo_currJobZip + "',cobo_currJobPhone = '" + $cobo_currJobPhone + "',cobo_currJobTitle = '" + $cobo_currJobTitle + "',cobo_currJobIncome = '" + $cobo_currJobIncome + "',cobo_currJobSelfEmployed = '" + $cobo_currJobSelfEmployed + "',cobo_currJobYears = '" + $cobo_currJobYears + "',cobo_currJobMonths = '" + $cobo_currJobMonths + "',cobo_prevJobName = '" + $cobo_prevJobName + "',cobo_prevJobAddress = '" + $cobo_prevJobAddress + "',cobo_prevJobCity = '" + $cobo_prevJobCity + "',cobo_prevJobState = '" + $cobo_prevJobState + "',cobo_prevJobZip = '"+ $cobo_prevJobZip + "',cobo_prevJobPhone = '" + $cobo_prevJobPhone + "',cobo_prevJobTitle = '" + $cobo_prevJobTitle + "',cobo_prevJobSelfEmployed = '" + $cobo_prevJobSelfEmployed + "',cobo_prevJobIncome = '" + $cobo_prevJobIncome + "',cobo_prevJobYears = '" + $cobo_prevJobYears + "',cobo_prevJobMonths = '" + $cobo_prevJobMonths + "',cobo_hasMultiJobs = '" + $cobo_hasMultiJobs + "',cobo_secondJobName = '" + $cobo_secondJobName + "',cobo_secondJobAddress = '" + $cobo_secondJobAddress + "',cobo_secondJobCity = '" + $cobo_secondJobCity + "',cobo_secondJobState = '" + $cobo_secondJobState + "',cobo_secondJobZip = '" + $cobo_secondJobZip + "',cobo_secondJobPhone = '" + $cobo_secondJobPhone + "',cobo_secondJobTitle = '" + $cobo_secondJobTitle + "',cobo_secondJobIncome = '" + $cobo_secondJobIncome + "',cobo_secondJobSelfEmployed = '" + $cobo_secondJobSelfEmployed + "',cobo_secondJobYears = '" + $cobo_secondJobYears + "',cobo_secondJobMonths = '" + $cobo_secondJobMonths + "'";
            var $dataString = "hasCobo = '" + $hasCobo + "',isMarriedCobo = '" + $marriedCobo + "',dob = '" + $dob + "',yrsSchool = '" + $yrsSchool + "',maritalStatus = '" + $maritalStatus + "',dependents = '" + $dependents + "',ageDependents = '" + $ageDependents + "',currJobName = '" + $currJobName + "',currJobAddress = '" + $currJobAddress + "',currJobCity = '" + $currJobCity + "',currJobState = '" + $currJobState + "',currJobZip = '" + $currJobZip + "',currJobPhone = '" + $currJobPhone + "',currJobTitle = '" + $currJobTitle + "',currJobIncome = '" + $currJobIncome + "',currJobSelfEmployed = '" + $currJobSelfEmployed + "',currJobYears = '" + $currJobYears + "',currJobMonths = '" + $currJobMonths + "',prevJobName = '" + $prevJobName + "',prevJobAddress = '" + $prevJobAddress + "',prevJobCity = '" + $prevJobCity + "',prevJobState = '" + $prevJobState + "',prevJobZip = '"+ $prevJobZip + "',prevJobPhone = '" + $prevJobPhone + "',prevJobTitle = '" + $prevJobTitle + "',prevJobSelfEmployed = '" + $prevJobSelfEmployed + "',prevJobIncome = '" + $prevJobIncome + "',prevJobYears = '" + $prevJobYears + "',prevJobMonths = '" + $prevJobMonths + "',hasMultiJobs = '" + $hasMultiJobs + "',secondJobName = '" + $secondJobName + "',secondJobAddress = '" + $secondJobAddress + "',secondJobCity = '" + $secondJobCity + "',secondJobState = '" + $secondJobState + "',secondJobZip = '" + $secondJobZip + "',secondJobPhone = '" + $secondJobPhone + "',secondJobTitle = '" + $secondJobTitle + "',secondJobIncome = '" + $secondJobIncome + "',secondJobSelfEmployed = '" + $secondJobSelfEmployed + "',secondJobYears = '" + $secondJobYears + "',secondJobMonths = '" + $secondJobMonths + "',cobo_firstName = '" + $cobo_firstName + "',cobo_lastName = '" + $cobo_lastName + "',cobo_email = '" + $cobo_email + "'";
            var $columnName = "id";
            var $uniqueId = '<?php echo $borrowerId; ?>';
            
            alert($dataString);
            
            updateDatabase($func, $tableName, $dataString, $columnName, $uniqueId); //jsFunction.php
            
        } // end SaveInputFields()
		
	}); //$(document).ready(function()
</script>