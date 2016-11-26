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
        echo "Could not connect to database: " . $e->getMessage();
        exit;
    }
    $app = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-sm-12" id="app-wrapper">
    <?php
    /***********************************
     * BORROWER INFORMATION
     ***********************************/
    ?>
    <div class="form-group col-sm-12"></div>
    <div class="col-sm-12 section-header"><h1>Borrower Information</h1></div>

    <div class="form-group col-sm-6">
        <div class="col-sm-12"><p><?php echo $app[0]['firstName'] . " " . $app[0]['middleName'] . " " . $app[0]['lastName'] . " " . $app[0]['suffix']; ?></p></div>
        <div class="col-sm-4"><p><?php echo "c " . $app[0]['cellPhone']; ?></p></div>
        <div class="col-sm-4"><p><?php echo "h " . $app[0]['homePhone']; ?></p></div>
        <div class="col-sm-12"><p><?php echo $app[0]['email']; ?></p></div>
        <div class="col-sm-4"><p><?php echo $app[0]['ssn']; ?>464-85-8362</p></div>
        <div class="col-sm-4"><p><?php echo $app[0]['dob']; ?></p></div>
    </div>
    <div class="form-group col-sm-2">
        <label for="maritalStatus">Marital Status</label>
        <select id="maritalStatus">
            <option value="" <?php if ($app[0]['maritalStatus'] == "") { echo "selected"; } ?>>Please Select...</option>
            <option value="married" <?php if ($app[0]['maritalStatus'] == "married") { echo "selected"; } ?>>Married</option>
            <option value="separated" <?php if ($app[0]['maritalStatus'] == "separated") { echo "selected"; } ?>>Separated</option>
            <option value="unmarried" <?php if ($app[0]['maritalStatus'] == "unmarried") { echo "selected"; } ?>>Unmarried (including single, divorced, widowed)</option>
        </select>
    </div>
    <div class="form-group col-sm-2">
        <label for="dependents">Number of Dependents</label>
        <input type="text" id="dependents" value="<?php echo $app[0]['dependents']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label for="ageDependents">Age of Dependents</label>
        <input type="text" id="ageDependents" value="<?php echo $app[0]['ageDependents']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label for="yrsSchool">Years in School</label>
        <input type="text" id="yrsSchool" value="<?php echo $app[0]['yrsSchool']; ?>">
    </div>
    <div class="form-group col-sm-2">
        <label>CoBorrower</label>
        <input type="radio" class="radio-button" name="hasCobo" value="yes" <?php if ($app[0]['hasCobo'] == "yes") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
        <input type="radio" class="radio-button" name="hasCobo" value="no" <?php if ($app[0]['hasCobo'] == "no") { echo 'checked'; } ?>><span class="span-radio">No</span> 
    </div>
    <div class="form-group col-sm-12"></div>
    
    <?php
    /***********************************
     * COBORROWER INFORMATION
     ***********************************/
    ?>
    <div class="cobo">
    
        <div class="col-sm-12 section-header"><h1>CoBorrower Information</h1></div>

        <div class="form-group col-sm-2">
            <label for="firstName">First Name</label>
            <input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['cobo_firstName']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="middleName">Middle Name</label>
            <input type="text" id="middleName" value="<?php echo $app[0]['cobo_middleName']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="lastName">Last Name</label>
            <input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['cobo_lastName']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="suffix">Suffix (Jr. or Sr.)</label>
            <input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="email">Email Address</label>
            <input type="text" id="email" value="<?php echo $app[0]['email']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="phone">Cell Phone</label>
            <input type="text" id="phone" value="<?php echo $app[0]['cellPhone']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="phone">Home Phone</label>
            <input type="text" id="phone" value="<?php echo $app[0]['homePhone']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="phone">Social Security Number</label>
            <input type="text" id="phone" value="<?php echo $app[0]['ssn']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="phone">Date of Birth</label>
            <input type="date" id="phone" value="<?php echo $app[0]['dob']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="maritalStatus">Marital Status</label>
            <select id="maritalStatus">
                <option value="" <?php if ($app[0]['maritalStatus'] == "") { echo "selected"; } ?>>Please Select...</option>
                <option value="married" <?php if ($app[0]['maritalStatus'] == "married") { echo "selected"; } ?>>Married</option>
                <option value="separated" <?php if ($app[0]['maritalStatus'] == "separated") { echo "selected"; } ?>>Separated</option>
                <option value="unmarried" <?php if ($app[0]['maritalStatus'] == "unmarried") { echo "selected"; } ?>>Unmarried (including single, divorced, widowed)</option>
            </select>
        </div>
        <div class="form-group col-sm-2">
            <label for="dependents">Number of Dependents</label>
            <input type="text" id="dependents" value="<?php echo $app[0]['dependents']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="ageDependents">Age of Dependents</label>
            <input type="text" id="ageDependents" value="<?php echo $app[0]['ageDependents']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="yrsSchool">Years in School</label>
            <input type="text" id="yrsSchool" value="<?php echo $app[0]['yrsSchool']; ?>">
        </div>
    </div>
    
    <?php
    /***********************************
     * CURRENT ADDRESS
     ***********************************/
    ?>
    
    <div class="currAdd">
        <div class="col-sm-12 section-header"><h1>Current Address</h1></div>

        <div class="form-group col-sm-2">
            <label for="currAddress">Address</label>
            <input type="text" id="currAddress" value="<?php echo $app[0]['currAddress']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="currCity">City</label>
            <input type="text" id="currCity" value="<?php echo $app[0]['currCity']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="currState">State</label>
            <input type="text" id="currState" value="<?php echo $app[0]['currState']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="currZip">Zip</label>
            <input type="text" id="currZip" value="<?php echo $app[0]['currZip']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label>Years at address</label>
            <input type="text" id="currYears" name="currYears" value="<?php echo $app[0]['currYears']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label>Do you</label>
            <input type="radio" class="radio-button" name="currRentOwn" value="own" <?php if ($app[0]['currRentOwn'] == "own") { echo 'checked'; } ?>><span class="span-radio">Own</span>
            <input type="radio" class="radio-button" name="currRentOwn" value="rent" <?php if ($app[0]['currRentOwn'] == "rent") { echo 'checked'; } ?>><span class="span-radio">Rent</span> 
        </div>
        <div class="form-group col-sm-12">
            <label>Different for CoBorrower</label>
            <input type="radio" class="radio-button" name="cobo_diffCurr" value="yes" <?php if ($app[0]['hasCobo'] == "yes") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
            <input type="radio" class="radio-button" name="cobo_diffCurr" value="no" <?php if ($app[0]['hasCobo'] == "no") { echo 'checked'; } ?>><span class="span-radio">No</span> 
        </div>
    </div>
    
    
    <?php
    /***********************************
     * COBORROWER CURRENT ADDRESS
     ***********************************/
    ?>
    
    <div class="cobo-currAdd">
        <div class="col-sm-12 section-header"><h1>CoBorrower Current Address</h1></div>

        <div class="form-group col-sm-2">
            <label for="currAddress">Address</label>
            <input type="text" id="currAddress" value="<?php echo $app[0]['cobo_currAddress']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="currCity">City</label>
            <input type="text" id="currCity" value="<?php echo $app[0]['cobo_currCity']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="currState">State</label>
            <input type="text" id="currState" value="<?php echo $app[0]['cobo_currState']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="currZip">Zip</label>
            <input type="text" id="currZip" value="<?php echo $app[0]['cobo_currZip']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label>Years at address</label>
            <input type="text" id="currYears" name="currYears" value="<?php echo $app[0]['cobo_currYears']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label>Do you</label>
            <input type="radio" class="radio-button" name="currRentOwn" value="own" <?php if ($app[0]['currRentOwn'] == "own") { echo 'checked'; } ?>><span class="span-radio">Own</span>
            <input type="radio" class="radio-button" name="currRentOwn" value="rent" <?php if ($app[0]['currRentOwn'] == "rent") { echo 'checked'; } ?>><span class="span-radio">Rent</span> 
        </div>
    </div>
    
     <?php
    /***********************************
     * PREVIOUS ADDRESS
     ***********************************/
    ?>

    <div id="prev-div-hide">
        <div class="col-sm-12 section-header"><h1>Previous Address</h1></div>
        <div class="form-group col-sm-2">
            <label for="prevAddress">Address</label>
            <input type="text" id="prevAddress" value="<?php echo $app[0]['prevAddress']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="prevCity">City</label>
            <input type="text" id="prevCity" value="<?php echo $app[0]['prevCity']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="prevState">State</label>
            <input type="text" id="prevState" value="<?php echo $app[0]['prevState']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="prevZip">Zip</label>
            <input type="text" id="prevZip" value="<?php echo $app[0]['prevZip']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label>Years at address</label>
            <input type="text" id="prevYears" name="prevYears" value="<?php echo $app[0]['prevYears']; ?>">
        </div>
    </div>
    <div class="form-group col-sm-12">
        <label>Different mailing address?</label>
        <input type="radio" class="radio-button" name="hasDiffMail" value="1" <?php if ($app[0]['hasDiffMail'] == "1") { echo 'checked'; } ?>><span class="span-radio">Yes</span>
        <input type="radio" class="radio-button" name="hasDiffMail" value="0" <?php if ($app[0]['hasDiffMail'] == "0") { echo 'checked'; } ?>><span class="span-radio">No</span> 
    </div>

    <?php
    /***********************************
     * MAILING ADDRESS
     ***********************************/
    ?>

    <div id="mail-div-hide">
        <div class="col-sm-12 section-header"><h1>Mailing Address</h1></div>
        <div class="form-group col-sm-2">
            <label for="mailAddress">Address</label>
            <input type="text" id="mailAddress" value="<?php echo $app[0]['mailAddress']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="mailCity">City</label>
            <input type="text" id="mailCity" value="<?php echo $app[0]['mailCity']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="mailState">State</label>
            <input type="text" id="mailState" value="<?php echo $app[0]['mailState']; ?>">
        </div>
        <div class="form-group col-sm-2">
            <label for="mailZip">Zip</label>
            <input type="text" id="mailZip" value="<?php echo $app[0]['mailZip']; ?>">
        </div>
    </div>
    
</div> <!-- app-wrapper --> 

<?php
/******************************************************
 * 
 * JAVASCRIPT
 *
 ******************************************************/
?>

<script type="text/javascript">
    $(document).ready(function() {
        
        console.log("javascript loaded (src: insert-borrower.php)");
        
        
        //$(".cobo").hide();
        
        
        $x = 0;
       var $inputsBaseline = new Array();
       $("input[type=text]").each(function() {
            $inputsBaseline[$x] = $(this).attr('id');
            $x++;
            $inputsBaseline[$x] = $(this).val();
            //console.log($inputsBaseline[$x-1] + " " + $inputsBaseline[$x]);
            $x++;
        });
        
        //**********************************************
		// SHOW/HIDE DIVS ON LOAD
        // automatically based on conditions
		//**********************************************
        
        //COBO
        if ($("#hasCobo") == 'yes' || $("#hasCobo") == "") {
            $(".cobo").hide();
        }
        
        
        var $hasCobo = $("input[name=hasCobo]:checked").val();
        if ($hasCobo == 'yes') {
            //do nothing, shows by default
        } else {
            $(".cobo").hide();
        }
        
        var $cobo_diffCurr = $("input[name=cobo_diffCurr]:checked").val();
        if ($cobo_diffCurr == 'yes') {
            alert("test");
            $(".currAdd").addClass("col-sm-6");
        } else {
            $(".cobo").hide();
        }
        
        
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
        
        //COBO
        $("input[name=cobo_diffCurr]").click(function() {
            if ($("input[name=cobo_diffCurr]:checked").val() == 'yes') {
                //alert("test");
                //$(".currAdd").addClass("col-sm-6");
                //$(".cobo-currAdd").addClass("col-sm-6");
            } else {
                $(".cobo").hide();
            }
        });
        
        
        //PREVIOUS ADDRESS
        $("input[name=hasCobo]").click(function() {
            if ($("input[name=hasCobo]:checked").val() == 'yes') {
                $(".cobo").slideDown("slow");
            } else { //if not
                //hide dive
                $(".cobo").slideUp("slow");
            }
        });
        
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
        
        
        
	}); //$(document).ready(function()
    
</script>