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
        $results = $db->query("SELECT * FROM declarations_tbl WHERE borrowerId='" . $appId . "';" );
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
       
    <div class="col-sm-6 section-header"><h1>Declarations</h1></div>
    <div class="col-sm-2 section-header"><h2>Borrower</h2></div>
    <div class="col-sm-1"></div>
    <div class="col-sm-2 section-header cobo"><h2>CoBorrower</h2></div>

    
    
    <div class="form-group col-sm-12">
        <label class="col-sm-6 declaration-question">Are there any outstanding judgements against you?</label>
        <div class="col-sm-2">
            <input type="radio" class="radio-button" name="judgements" value="1" <?php if ($app[0]['judgements'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="judgements" value="0" <?php if ($app[0]['judgements'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-2 cobo">
            <input type="radio" class="radio-button" name="judgements" value="1" <?php if ($app[0]['cobo_judgements'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="judgements" value="0" <?php if ($app[0]['cobo_judgements'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
    </div>
    
    <div class="form-group col-sm-12">
        <label class="col-sm-6 declaration-question">Have you declared bankruptcy within the last seven years?</label>
        <div class="col-sm-2">
            <input type="radio" class="radio-button" name="bankruptcy" value="1" <?php if ($app[0]['bankruptcy'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="bankruptcy" value="0" <?php if ($app[0]['bankruptcy'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-2 cobo">
            <input type="radio" class="radio-button" name="bankruptcy" value="1" <?php if ($app[0]['cobo_bankruptcy'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="bankruptcy" value="0" <?php if ($app[0]['cobo_bankruptcy'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
    </div>
    
    <div class="form-group col-sm-12">
        <label class="col-sm-6 declaration-question">Have you had a property foreclosed upon or given title or deed in lieu thereof in the last seven years?</label>
        <div class="col-sm-2">
            <input type="radio" class="radio-button" name="foreclosure" value="1" <?php if ($app[0]['foreclosure'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="foreclosure" value="0" <?php if ($app[0]['foreclosure'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-2 cobo">
            <input type="radio" class="radio-button" name="foreclosure" value="1" <?php if ($app[0]['cobo_foreclosure'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="foreclosure" value="0" <?php if ($app[0]['cobo_foreclosure'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
    </div>
    
    <div class="form-group col-sm-12">
        <label class="col-sm-6 declaration-question">Are you a party to a law suit?</label>
        <div class="col-sm-2">
            <input type="radio" class="radio-button" name="lawSuit" value="1" <?php if ($app[0]['lawSuit'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="lawSuit" value="0" <?php if ($app[0]['lawSuit'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-2 cobo">
            <input type="radio" class="radio-button" name="lawSuit" value="1" <?php if ($app[0]['cobo_lawSuit'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="lawSuit" value="0" <?php if ($app[0]['cobo_lawSuit'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
    </div>
    
    <div class="form-group col-sm-12">
        <label class="col-sm-6 declaration-question">Have you been obligated on any loan that resulted in foreclosure, transfer of title in lieu of foreclosure, or judgement?</label>
        <div class="col-sm-2">
            <input type="radio" class="radio-button" name="loanObligation" value="1" <?php if ($app[0]['alien'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="loanObligation" value="0" <?php if ($app[0]['alien'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-2 cobo">
            <input type="radio" class="radio-button" name="loanObligation" value="1" <?php if ($app[0]['cobo_alien'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="loanObligation" value="0" <?php if ($app[0]['cobo_alien'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
    </div>
    
    <div class="form-group col-sm-12">
        <label class="col-sm-6 declaration-question">Are you presently delinquent or in default on any federal debt or any other loan, mortgage, financial obligation, bond, or loan guarantee?</label>
        <div class="col-sm-2">
            <input type="radio" class="radio-button" name="delinquent" value="1" <?php if ($app[0]['delinquent'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="delinquent" value="0" <?php if ($app[0]['delinquent'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-2 cobo">
            <input type="radio" class="radio-button" name="delinquent" value="1" <?php if ($app[0]['cobo_delinquent'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="delinquent" value="0" <?php if ($app[0]['cobo_delinquent'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
    </div>
    
    <div class="form-group col-sm-12">
        <label class="col-sm-6 declaration-question">Are you obligated to pay alimony, child support, or separate maintenance?</label>
        <div class="col-sm-2">
            <input type="radio" class="radio-button" name="alimony" value="1" <?php if ($app[0]['alimony'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="alimony" value="0" <?php if ($app[0]['alimony'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-2 cobo">
            <input type="radio" class="radio-button" name="alimony" value="1" <?php if ($app[0]['cobo_alimony'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="alimony" value="0" <?php if ($app[0]['cobo_alimony'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
    </div>
    
    <div class="form-group col-sm-12">
        <label class="col-sm-6 declaration-question">Is any part of the downpayment borrowed?</label>
        <div class="col-sm-2">
            <input type="radio" class="radio-button" name="downPayment" value="1" <?php if ($app[0]['downPayment'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="downPayment" value="0" <?php if ($app[0]['downPayment'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-2 cobo">
            <input type="radio" class="radio-button" name="downPayment" value="1" <?php if ($app[0]['cobo_downPayment'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="downPayment" value="0" <?php if ($app[0]['cobo_downPayment'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
    </div>
    
    <div class="form-group col-sm-12">
        <label class="col-sm-6 declaration-question" for="endorser">Are you a co-maker or endorser on a note?</label>
        <div class="col-sm-2">
            <input type="radio" class="radio-button" name="endorser" value="1" <?php if ($app[0]['endorser'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="endorser" value="0" <?php if ($app[0]['endorser'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-2 cobo">
            <input type="radio" class="radio-button" name="endorser" value="1" <?php if ($app[0]['cobo_endorser'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="endorser" value="0" <?php if ($app[0]['cobo_endorser'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
    </div>
    
    <div class="form-group col-sm-12">
        <label class="col-sm-6 declaration-question">Are you a U.S. citizen?</label>
        <div class="col-sm-2">
            <input type="radio" class="radio-button" name="citizen" value="1" <?php if ($app[0]['citizen'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="citizen" value="0" <?php if ($app[0]['citizen'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-2 cobo">
            <input type="radio" class="radio-button" name="alien" value="1" <?php if ($app[0]['cobo_citizen'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="alien" value="0" <?php if ($app[0]['cobo_citizen'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
    </div>
    
    <div class="form-group col-sm-12">
        <label class="col-sm-6 declaration-question">Are you a permanent resident alien?</label>
        <div class="col-sm-2">
            <input type="radio" class="radio-button" name="alien" value="1" <?php if ($app[0]['alien'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="alien" value="0" <?php if ($app[0]['alien'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-2 cobo">
            <input type="radio" class="radio-button" name="alien" value="1" <?php if ($app[0]['cobo_alien'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="alien" value="0" <?php if ($app[0]['cobo_alien'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
    </div>
    
    <div class="form-group col-sm-12">
        <label class="col-sm-6 declaration-question" for="residence">Do you intend to occupy the property as your primary residence?</label>
        <div class="col-sm-2">
            <input type="radio" class="radio-button" name="residence" value="1" <?php if ($app[0]['residence'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="residence" value="0" <?php if ($app[0]['residence'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-2 cobo">
            <input type="radio" class="radio-button" name="residence" value="1" <?php if ($app[0]['cobo_residence'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="residence" value="0" <?php if ($app[0]['cobo_residence'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
        </div>
    </div>
        
    <div id="ownershipInterest-div">
        <div class="form-group col-sm-12">
            <label class="col-sm-6 declaration-question">Have you had an ownership interest in a property in the last three years?</label>
            <div class="col-sm-2 cobo">
                <input type="radio" class="radio-button" name="ownershipInterest" value="1" <?php if ($app[0]['ownershipInterest'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
                <input type="radio" class="radio-button" name="ownershipInterest" value="0" <?php if ($app[0]['ownershipInterest'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-2 cobo">
                <input type="radio" class="radio-button" name="ownershipInterest" value="1" <?php if ($app[0]['cobo_ownershipInterest'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
                <input type="radio" class="radio-button" name="ownershipInterest" value="0" <?php if ($app[0]['cobo_ownershipInterest'] == "0") { echo 'checked'; } ?>><span  class="span-radio">No</span>
            </div>
        </div>
        
        <div class="form-group col-sm-12">
            <label class="col-sm-6 declaration-question">What type of property did you own?</label>
            <div class="col-sm-3">
                <select id="propertyType">
                    <option value="" <?php if ($delcarations[0]['propertyType'] == "") { echo "selected"; } ?>>Please select...</option>
                    <option value="Primary Residence" <?php if ($app[0]['propertyType'] == "Primary Residence") { echo "selected"; } ?>>Primary Residence</option>
                    <option value="Second or Vacation Home" <?php if ($app[0]['propertyType'] == "Second or Vacation Home") { echo "selected"; } ?>>Second or Vacation Home</option>
                    <option value="Investment or Rental" <?php if ($app[0]['propertyType'] == "Investment or Rental") { echo "selected"; } ?>>Investment or Rental</option>
                </select>
            </div>
            <div class="col-sm-3">
                <select id="propertyType">
                    <option value="" <?php if ($delcarations[0]['propertyType'] == "") { echo "selected"; } ?>>Please select...</option>
                    <option value="Primary Residence" <?php if ($app[0]['propertyType'] == "Primary Residence") { echo "selected"; } ?>>Primary Residence</option>
                    <option value="Second or Vacation Home" <?php if ($app[0]['propertyType'] == "Second or Vacation Home") { echo "selected"; } ?>>Second or Vacation Home</option>
                    <option value="Investment or Rental" <?php if ($app[0]['propertyType'] == "Investment or Rental") { echo "selected"; } ?>>Investment or Rental</option>
                </select>
            </div>
        </div>
        
        <div class="form-group col-sm-12">
            <label class="col-sm-6 declaration-question">How did you hold title?</label>
            <div class="col-sm-3">
                <select id="propertyTitle">
                    <option value="" <?php if ($app[0]['propertyTitle'] == "") { echo "selected"; } ?>>Please select...</option>
                    <option value="Sole (Individual)" <?php if ($app[0]['propertyTitle'] == "Sole (Individual)") { echo "selected"; } ?>>Sole (Individual)</option>
                    <option value="Joint with Spouse" <?php if ($app[0]['propertyTitle'] == "Joint with Spouse") { echo "selected"; } ?>>Joint with Spouse</option>
                    <option value="Joint with other than Spouse" <?php if ($app[0]['propertyTitle'] == "Joint with other than Spouse") { echo "selected"; } ?>>Joint with other than Spouse</option>
                </select>
            </div>
            <div class="col-sm-3">
                <select id="propertyTitle">
                    <option value="" <?php if ($app[0]['propertyTitle'] == "") { echo "selected"; } ?>>Please select...</option>
                    <option value="Sole (Individual)" <?php if ($app[0]['propertyTitle'] == "Sole (Individual)") { echo "selected"; } ?>>Sole (Individual)</option>
                    <option value="Joint with Spouse" <?php if ($app[0]['propertyTitle'] == "Joint with Spouse") { echo "selected"; } ?>>Joint with Spouse</option>
                    <option value="Joint with other than Spouse" <?php if ($app[0]['propertyTitle'] == "Joint with other than Spouse") { echo "selected"; } ?>>Joint with other than Spouse</option>
                </select>
            </div>
        </div>
    </div>

    <?php
    /***********************************
     * GOVERNMENT MONITORING
     ***********************************/
    ?>
    <div class="col-sm-12 section-header"><h1>Information for Government Monitoring</h1></div>

    <div class="form-group col-sm-12">
        <div class="label-div" for="ethnicity">Ethnicity</div>
        <div class="dec-input-div">
            <input type="radio" class="radio-button" name="ethnicity" value="notHispanic" <?php if ($app[0]['ethnicity'] == "notHispanic") { echo 'checked'; } ?>>Not Hispanic or Latino<br>
            <input type="radio" class="radio-button" name="ethnicity" value="hispanic" <?php if ($app[0]['ethnicity'] == "hispanic") { echo 'checked'; } ?>>Hispanic or Latino<br>
            <input type="radio" class="radio-button" name="ethnicity" value="noComment" <?php if ($app[0]['ethnicity'] == "noComment") { echo 'checked'; } ?>>I do not wish to funrish my Ethnicity<br>
        </div>
    </div>
    <br>
    <div class="form-group col-sm-12">
        <div class="label-div">Race</div>
        <div class="dec-input-div">
            <input type="checkbox" class="check-box" id="indian" <?php if ($app[0]['indian'] == "1") { echo 'checked'; } ?>>American Indian or Alaska Native<br>
            <input type="checkbox" class="check-box" id="asian" <?php if ($app[0]['asian'] == "1") { echo 'checked'; } ?>>Asian<br>
            <input type="checkbox" class="check-box" id="black" <?php if ($app[0]['black'] == "1") { echo 'checked'; } ?>>Black or African American<br>
            <input type="checkbox" class="check-box" id="hawaiin" <?php if ($app[0]['hawaiin'] == "1") { echo 'checked'; } ?>>Native Hawaiian or Other Pacific Islander<br>
            <input type="checkbox" class="check-box" id="white" <?php if ($app[0]['white'] == "1") { echo 'checked'; } ?>>White<br>
        </div>
    </div>
    <br>
    <div class="form-group col-sm-12">
        <div class="label-div">Sex</div>
        <div class="dec-input-div">
            <input type="radio" class="radio-button" name="sex" value="female" <?php if ($app[0]['sex'] == "female") { echo 'checked'; } ?>><span>Female</span>
            <input type="radio" class="radio-button" name="sex" value="male" <?php if ($app[0]['sex'] == "male") { echo 'checked'; } ?>><span>Male</span>
        </div>
    </div>
</div> <!-- end app-wrapper -->
    


<?php
/******************************************************
 * JAVASCRIPT
 ******************************************************/
?>

<script type="text/javascript">
	$(document).ready(function() {
        
        console.log("javascript loaded (src: insert-declarations.php)");
        
        //**********************************************
		// SHOW/HIDE DIVS ON LOAD
		//**********************************************
        
        //RESIDENCE
        var $residence = $("input[name=residence]:checked").val();
        if ($residence != "1") {
            $("#ownershipInterest-div").hide();
        }
        
        //**********************************************
		// SHOW/HIDE DIVS ON ACTION
        // if certain fields are clicked, hide or show
		//**********************************************
        
		// MAILING ADDRESS
        $("input[name=residence]").click(function() {
            if ($("input[name=residence]:checked").val() == "1") {
                $("#ownershipInterest-div").slideDown( "slow");
            } else { //if no
                //hide div
                $("#ownershipInterest-div").slideUp("slow");
                //clear values 
            }
        });
    
        //**********************************************
		//* SAVE & CONTINUE BUTTON
		//**********************************************
		
		$("#save-continue").click(function() {
            var $location = "<?php echo $homepage; ?>/submitted";
            saveInputFields();
            submitApplication('<?php echo $email; ?>','<?php echo $borrowerId; ?>','<?php echo $appId; ?>'); //jsFunction.php
            goTo($location); //jsFunction.php
		}); //$("#save-continue").click(function()
        
        $("#save-exit").click(function() {
			$location = '<?php echo $homepage; ?>';
            saveInputFields();
            goTo($location); //jsFunction.php
		}); //$("#save-continue").click(function()
        
        //**********************************************
		//* saveInputFields() FUNCTION
        //* saveFields is called when either Save & Close or Save & Continue is called
        //* this will assign all input fields on the screen to variables and make the ajax call
		//**********************************************
        
        function saveInputFields() {
            //Assign input values to javascript variables
			var $citizen = $("input[name=citizen]:checked").val();
            var $alien = $("input[name=alien]:checked").val();
            var $judgements = $("input[name=judgements]:checked").val();
            var $bankruptcy = $("input[name=bankruptcy]:checked").val();
            var $foreclosure = $("input[name=foreclosure]:checked").val();
            var $lawSuit = $("input[name=lawSuit]:checked").val();
            var $loanObligation = $("input[name=loanObligation]:checked").val();
            var $delinquent = $("input[name=delinquent]:checked").val();
            var $alimony = $("input[name=alimony]:checked").val();
            var $downPayment = $("input[name=downPayment]:checked").val();
            var $endorser = $("input[name=endorser]:checked").val();
            var $residence = $("input[name=residence]:checked").val();
                if ($residence == "1") {
                    var $ownershipInterest = $("input[name=ownershipInterest]:checked").val();
                    var $propertyType = $("#propertyType").val();
                    var $propertyTitle = $("#propertyTitle").val();
                } else { // following variables are not ever shown, set their values to ''
                    var $ownershipInterest = "";
                    var $propertyType = "";
                    var $propertyTitle = "";
                }
            var $ethnicity = $("input[name=ethnicity]:checked").val();
            var $indian;
                if ($("#indian").is(':checked')) { $indian = "1" } else { $indian = "0" }
            var $asian; 
                if ($("#asian").is(':checked')) { $asian = "1" } else { $asian = "0" }
            var $black;
                if ($("#black").is(':checked')) { $black = "1" } else { $black = "0" }
            var $hawaiin;
                if ($("#hawaiin").is(':checked')) { $hawaiin = "1" } else { $hawaiin = "0" }
            var $white;
                if ($("#white").is(':checked')) { $white = "1" } else { $white = "0" }
            var $sex = $("input[name=sex]:checked").val();
            
            // set ajax inputs
            var $func = "update";
            var $tableName = "app_tbl";
            var $dataString = "citizen = '" + $citizen + "',alien = '" + $alien + "',judgements = '" + $judgements + "',bankruptcy = '" + $bankruptcy + "',foreclosure = '" + $foreclosure + "',lawSuit = '" + $lawSuit + "',loanObligation = '" + $loanObligation + "',delinquent = '" + $delinquent + "',alimony = '" + $alimony + "',downPayment = '" + $downPayment + "',endorser = '" + $endorser + "',residence = '" + $residence + "',ownershipInterest = '" + $ownershipInterest + "',propertyType = '" + $propertyType + "',propertyTitle = '" + $propertyTitle + "',ethnicity = '" + $ethnicity + "',indian = '" + $indian + "',asian = '" + $asian + "',black = '" + $black + "',hawaiin = '" +$hawaiin + "',white = '" + $white + "',sex = '" + $sex + "'";
            var $columnName = "id";
            var $uniqueId = '<?php echo $appId; ?>';
            
            //alert($dataString); 
            
            updateDatabase($func, $tableName, $dataString, $columnName, $uniqueId); //jsFunction.php
    
        } // end saveInputFields()
		
	}); //$(document).ready(function()
</script>