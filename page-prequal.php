<?php $pageTitle = "Standing Rock Mortgage | PreQualifications"; ?>
<?php include 'inc/header.php'; ?>
<?php $appId =  $_SESSION["appId"]; ?>
<?php $email =  $_SESSION["email"]; ?>

<?php $appId = $_GET['id']; ?>
<?php /*
echo "Email: " . $email . "<br>";
echo "Borrower Id: " . $borrowerId . "<br>";
echo "App Id: " . $appId . "<br>";
*/ ?>
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
<div class="col-sm-12" id="app-wrapper">
    
    <?php
    /***********************************
     * BORROWER INFORMATION
     ***********************************/
    ?>
    <div class="col-sm-6 left-container">
        
        <div class="col-sm-12 section-header"><h1>Borrower Information</h1></div>

        <div class="form-group col-sm-4">
            <label for="firstName">First Name</label>
            <input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="middleName">Middle Name</label>
            <input type="text" id="middleName" value="<?php echo $app[0]['middleName']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="lastName">Last Name</label>
            <input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="suffix">Suffix (Jr. or Sr.)</label>
            <input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="email">Email Address</label>
            <input type="text" id="email" value="<?php echo $app[0]['email']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="phone">Cell Phone</label>
            <input type="text" id="phone" value="<?php echo $app[0]['cellPhone']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="phone">Home Phone</label>
            <input type="text" id="phone" value="<?php echo $app[0]['homePhone']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="phone">SSN</label>
            <input type="text" id="phone" value="<?php echo $app[0]['ssn']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="phone">Date of Birth</label>
            <input type="date" id="phone" value="<?php echo $app[0]['dob']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="maritalStatus">Marital Status</label>
            <select id="maritalStatus">
                <option value="" <?php if ($app[0]['maritalStatus'] == "") { echo "selected"; } ?>>Please Select...</option>
                <option value="married" <?php if ($app[0]['maritalStatus'] == "married") { echo "selected"; } ?>>Married</option>
                <option value="separated" <?php if ($app[0]['maritalStatus'] == "separated") { echo "selected"; } ?>>Separated</option>
                <option value="unmarried" <?php if ($app[0]['maritalStatus'] == "unmarried") { echo "selected"; } ?>>Unmarried (including single, divorced, widowed)</option>
            </select>
        </div>
        <div class="form-group col-sm-4">
            <label for="dependents"># of Dependents</label>
            <input type="text" id="dependents" value="<?php echo $app[0]['dependents']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="ageDependents">Age of Dependents</label>
            <input type="text" id="ageDependents" value="<?php echo $app[0]['ageDependents']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="yrsSchool">Years in School</label>
            <input type="text" id="yrsSchool" value="<?php echo $app[0]['yrsSchool']; ?>">
        </div>
        
        <?php
        /***********************************
         * CURRENT ADDRESS
         ***********************************/
        ?>
        <div class="col-sm-12 section-header"><h1>Current Address</h1></div>

        <div class="form-group col-sm-4">
            <label for="currAddress">Address</label>
            <input type="text" id="currAddress" value="<?php echo $app[0]['currAddress']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="currCity">City</label>
            <input type="text" id="currCity" value="<?php echo $app[0]['currCity']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="currState">State</label>
            <input type="text" id="currState" value="<?php echo $app[0]['currState']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="currZip">Zip</label>
            <input type="text" id="currZip" value="<?php echo $app[0]['currZip']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label>Years at Address</label>
            <input type="text" id="currYears" name="currYears" value="<?php echo $app[0]['currYears']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label>Do you</label>
            <input type="radio" class="radio-button" name="currRentOwn" value="own" <?php if ($app[0]['currRentOwn'] == "own") { echo 'checked'; } ?>><span class="span-radio">Own</span>
            <input type="radio" class="radio-button" name="currRentOwn" value="rent" <?php if ($app[0]['currRentOwn'] == "rent") { echo 'checked'; } ?>><span class="span-radio">Rent</span> 
        </div>
         <?php
        /***********************************
         * PREVIOUS ADDRESS
         ***********************************/
        ?>

        <div id="prev-div-hide">
            <div class="col-sm-12 section-header"><h1>Previous Address</h1></div>
            <div class="form-group col-sm-4">
                <label for="prevAddress">Address</label>
                <input type="text" id="prevAddress" value="<?php echo $app[0]['prevAddress']; ?>">
            </div>
            <div class="form-group col-sm-4">
                <label for="prevCity">City</label>
                <input type="text" id="prevCity" value="<?php echo $app[0]['prevCity']; ?>">
            </div>
            <div class="form-group col-sm-4">
                <label for="prevState">State</label>
                <input type="text" id="prevState" value="<?php echo $app[0]['prevState']; ?>">
            </div>
            <div class="form-group col-sm-4">
                <label for="prevZip">Zip</label>
                <input type="text" id="prevZip" value="<?php echo $app[0]['prevZip']; ?>">
            </div>
            <div class="form-group col-sm-4">
                <label>Years at Address</label>
                <input type="text" id="prevYears" name="prevYears" value="<?php echo $app[0]['prevYears']; ?>">
            </div>
        </div>
        <div class="col-xs-12" style="height:30px;"></div>
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
            <div class="form-group col-sm-4">
                <label for="mailAddress">Address</label>
                <input type="text" id="mailAddress" value="<?php echo $app[0]['mailAddress']; ?>">
            </div>
            <div class="form-group col-sm-4">
                <label for="mailCity">City</label>
                <input type="text" id="mailCity" value="<?php echo $app[0]['mailCity']; ?>">
            </div>
            <div class="form-group col-sm-4">
                <label for="mailState">State</label>
                <input type="text" id="mailState" value="<?php echo $app[0]['mailState']; ?>">
            </div>
            <div class="form-group col-sm-4">
                <label for="mailZip">Zip</label>
                <input type="text" id="mailZip" value="<?php echo $app[0]['mailZip']; ?>">
            </div>
        </div>
        <div class="form-group col-sm-4">
            <label>Purpose of Loan</label>
            <select id="refiPurpose">
                <option value="">Please Select...</option>
                <option value="Cash Out" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Purchase</option>
                <option value="Lower Payment" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Refinance</option>
            </select>    
        </div>
        
        
    </div>
    <?php
    /***********************************
     * COBORROWER INFORMATION
     ***********************************/
    ?>
    <div class="col-sm-6">
        
        <div class="col-sm-10 section-header"><h1>CoBorrower Information</h1></div>
        <div class="col-sm-2 section-header"><button class=" secondary">Copy</button></div>
    

        <div class="form-group col-sm-4">
            <label for="firstName">First Name</label>
            <input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="middleName">Middle Name</label>
            <input type="text" id="middleName" value="<?php echo $app[0]['middleName']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="lastName">Last Name</label>
            <input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="suffix">Suffix (Jr. or Sr.)</label>
            <input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="email">Email Address</label>
            <input type="text" id="email" value="<?php echo $app[0]['email']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="phone">Cell Phone</label>
            <input type="text" id="phone" value="<?php echo $app[0]['cellPhone']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="phone">Home Phone</label>
            <input type="text" id="phone" value="<?php echo $app[0]['homePhone']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="phone">SSN</label>
            <input type="text" id="phone" value="<?php echo $app[0]['ssn']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="phone">Date of Birth</label>
            <input type="date" id="phone" value="<?php echo $app[0]['dob']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="maritalStatus">Marital Status</label>
            <select id="maritalStatus">
                <option value="" <?php if ($app[0]['maritalStatus'] == "") { echo "selected"; } ?>>Please Select...</option>
                <option value="married" <?php if ($app[0]['maritalStatus'] == "married") { echo "selected"; } ?>>Married</option>
                <option value="separated" <?php if ($app[0]['maritalStatus'] == "separated") { echo "selected"; } ?>>Separated</option>
                <option value="unmarried" <?php if ($app[0]['maritalStatus'] == "unmarried") { echo "selected"; } ?>>Unmarried (including single, divorced, widowed)</option>
            </select>
        </div>
        <div class="form-group col-sm-4">
            <label for="dependents"># of Dependents</label>
            <input type="text" id="dependents" value="<?php echo $app[0]['dependents']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="ageDependents">Age of Dependents</label>
            <input type="text" id="ageDependents" value="<?php echo $app[0]['ageDependents']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="yrsSchool">Years in School</label>
            <input type="text" id="yrsSchool" value="<?php echo $app[0]['yrsSchool']; ?>">
        </div>
        <?php
        /***********************************
         * CURRENT ADDRESS
         ***********************************/
        ?>
        <div class="col-sm-12 section-header"><h1>Current Address</h1></div>

        <div class="form-group col-sm-4">
            <label for="currAddress">Address</label>
            <input type="text" id="currAddress" value="<?php echo $app[0]['currAddress']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="currCity">City</label>
            <input type="text" id="currCity" value="<?php echo $app[0]['currCity']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="currState">State</label>
            <input type="text" id="currState" value="<?php echo $app[0]['currState']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="currZip">Zip</label>
            <input type="text" id="currZip" value="<?php echo $app[0]['currZip']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label>Years at Address</label>
            <input type="text" id="currYears" name="currYears" value="<?php echo $app[0]['currYears']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label>Do you</label>
            <input type="radio" class="radio-button" name="currRentOwn" value="own" <?php if ($app[0]['currRentOwn'] == "own") { echo 'checked'; } ?>><span class="span-radio">Own</span>
            <input type="radio" class="radio-button" name="currRentOwn" value="rent" <?php if ($app[0]['currRentOwn'] == "rent") { echo 'checked'; } ?>><span class="span-radio">Rent</span> 
        </div>
         <?php
        /***********************************
         * PREVIOUS ADDRESS
         ***********************************/
        ?>

        <div id="prev-div-hide">
            <div class="col-sm-12 section-header"><h1>Previous Address</h1></div>
            <div class="form-group col-sm-4">
                <label for="prevAddress">Address</label>
                <input type="text" id="prevAddress" value="<?php echo $app[0]['prevAddress']; ?>">
            </div>
            <div class="form-group col-sm-4">
                <label for="prevCity">City</label>
                <input type="text" id="prevCity" value="<?php echo $app[0]['prevCity']; ?>">
            </div>
            <div class="form-group col-sm-4">
                <label for="prevState">State</label>
                <input type="text" id="prevState" value="<?php echo $app[0]['prevState']; ?>">
            </div>
            <div class="form-group col-sm-4">
                <label for="prevZip">Zip</label>
                <input type="text" id="prevZip" value="<?php echo $app[0]['prevZip']; ?>">
            </div>
            <div class="form-group col-sm-4">
                <label>Years at Address</label>
                <input type="text" id="prevYears" name="prevYears" value="<?php echo $app[0]['prevYears']; ?>">
            </div>
        </div>
        <div class="col-xs-12" style="height:30px;"></div>
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
            <div class="form-group col-sm-4">
                <label for="mailAddress">Address</label>
                <input type="text" id="mailAddress" value="<?php echo $app[0]['mailAddress']; ?>">
            </div>
            <div class="form-group col-sm-4">
                <label for="mailCity">City</label>
                <input type="text" id="mailCity" value="<?php echo $app[0]['mailCity']; ?>">
            </div>
            <div class="form-group col-sm-4">
                <label for="mailState">State</label>
                <input type="text" id="mailState" value="<?php echo $app[0]['mailState']; ?>">
            </div>
            <div class="form-group col-sm-4">
                <label for="mailZip">Zip</label>
                <input type="text" id="mailZip" value="<?php echo $app[0]['mailZip']; ?>">
            </div>
        </div>
        <div class="form-group col-sm-4">
            <label>Purpose of Loan</label>
            <select id="refiPurpose">
                <option value="">Please Select...</option>
                <option value="Cash Out" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Purchase</option>
                <option value="Lower Payment" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Refinance</option>
            </select>    
        </div>
    </div>
    
    
    
    
    <?php
    /***********************************
     * CURRENT ADDRESS
     ***********************************/
    ?>
    <div class="col-sm-12 section-header"><h1>Current Address</h1></div>
    
    <div class="form-group col-sm-4">
        <label for="currAddress">Address</label>
        <input type="text" id="currAddress" value="<?php echo $app[0]['currAddress']; ?>">
    </div>
    <div class="form-group col-sm-4">
        <label for="currCity">City</label>
        <input type="text" id="currCity" value="<?php echo $app[0]['currCity']; ?>">
    </div>
    <div class="form-group col-sm-4">
        <label for="currState">State</label>
        <input type="text" id="currState" value="<?php echo $app[0]['currState']; ?>">
    </div>
    <div class="form-group col-sm-4">
        <label for="currZip">Zip</label>
        <input type="text" id="currZip" value="<?php echo $app[0]['currZip']; ?>">
    </div>
    <div class="form-group col-sm-4">
        <label>Years at Address</label>
        <input type="text" id="currYears" name="currYears" value="<?php echo $app[0]['currYears']; ?>">
    </div>
    <div class="form-group col-sm-4">
        <label>Do you</label>
        <input type="radio" class="radio-button" name="currRentOwn" value="own" <?php if ($app[0]['currRentOwn'] == "own") { echo 'checked'; } ?>><span class="span-radio">Own</span>
        <input type="radio" class="radio-button" name="currRentOwn" value="rent" <?php if ($app[0]['currRentOwn'] == "rent") { echo 'checked'; } ?>><span class="span-radio">Rent</span> 
    </div>
     <?php
    /***********************************
     * PREVIOUS ADDRESS
     ***********************************/
    ?>

    <div id="prev-div-hide">
        <div class="col-sm-12 section-header"><h1>Previous Address</h1></div>
        <div class="form-group col-sm-4">
            <label for="prevAddress">Address</label>
            <input type="text" id="prevAddress" value="<?php echo $app[0]['prevAddress']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="prevCity">City</label>
            <input type="text" id="prevCity" value="<?php echo $app[0]['prevCity']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="prevState">State</label>
            <input type="text" id="prevState" value="<?php echo $app[0]['prevState']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="prevZip">Zip</label>
            <input type="text" id="prevZip" value="<?php echo $app[0]['prevZip']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label>Years at Address</label>
            <input type="text" id="prevYears" name="prevYears" value="<?php echo $app[0]['prevYears']; ?>">
        </div>
    </div>
    <div class="col-xs-12" style="height:30px;"></div>
    <div class="form-group col-sm-4">
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
        <div class="form-group col-sm-4">
            <label for="mailAddress">Address</label>
            <input type="text" id="mailAddress" value="<?php echo $app[0]['mailAddress']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="mailCity">City</label>
            <input type="text" id="mailCity" value="<?php echo $app[0]['mailCity']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="mailState">State</label>
            <input type="text" id="mailState" value="<?php echo $app[0]['mailState']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="mailZip">Zip</label>
            <input type="text" id="mailZip" value="<?php echo $app[0]['mailZip']; ?>">
        </div>
    </div>
    <div class="form-group col-sm-4">
        <label>Purpose of Loan</label>
        <select id="refiPurpose">
            <option value="">Please Select...</option>
            <option value="Cash Out" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Purchase</option>
            <option value="Lower Payment" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Refinance</option>
        </select>    
    </div>
   
    
        <?php
        /***********************************
         * INCOME
         ***********************************/
        ?>
        <div class="label-div"><h1 class="section-header">Income</h1></div>
        <br>
        <div class="question-container">
            <div class="label-div"><label for="baseIncome">Gross Monthly Income</label></div>
            <div class="input-div"><input type="text" id="baseIncome" value="<?php echo $app[0]['grossIncome']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="overtime">All other income</label></div>
            <div class="input-div"><input type="text" id="overtime" value="<?php echo $app[0]['otherIncome']; ?>"></div>
        </div>
        <br>
        <div class="question-container">
            <div class="label-div">Income Sources</div>
            <div class="dec-input-div">
                <input type="checkbox" class="check-box" id="salary" <?php if ($app[0]['salary'] == "1") { echo 'checked'; } ?>>Salary<br>
                <input type="checkbox" class="check-box" id="commBonus" <?php if ($app[0]['commBon'] == "1") { echo 'checked'; } ?>>Commission/Bonus<br>
                <input type="checkbox" class="check-box" id="hourly" <?php if ($app[0]['hourly'] == "1") { echo 'checked'; } ?>>Hourly<br>
                <input type="checkbox" class="check-box" id="selfEmployed" <?php if ($app[0]['selfEmployed'] == "1") { echo 'checked'; } ?>>Self-Employed<br>
            </div>
        </div>
        <br>
        <div class="question-container">
            <div class="label-div"><label>Employed at Current Job for</label></div>
            <div class="input-div">
                <input type="text" class="half-input" id="prevJobYears" value="<?php echo $app[0]['prevJobYears']; ?>"><span class="half-input-span">Years</span>
                <input type="text" class="half-input" id="prevJobMonths" value="<?php echo $app[0]['prevJobMonths']; ?>"><span class="half-input-span">Months</span>
            </div>
        </div>
        <?php
        /***********************************
         * EXPENSE
         ***********************************/
        ?>
        <div class="label-div"><h1 class="section-header">Liabilities</h1></div>
        <br>
        <div class="question-container">
            <div class="label-div"><label for="baseIncome">Mortgage Payment</label></div>
            <div class="input-div"><input type="text" id="baseIncome" value="<?php echo $app[0]['expenses']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="baseIncome">Car Payment(s)</label></div>
            <div class="input-div"><input type="text" id="baseIncome" value="<?php echo $app[0]['expenses']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="baseIncome">All other Debt Payments</label></div>
            <div class="input-div"><input type="text" id="baseIncome" value="<?php echo $app[0]['expenses']; ?>"></div>
        </div>
        <?php
        /***********************************
         * Assets
         ***********************************/
        ?>
        <div class="label-div"><h1 class="section-header">Assets</h1></div>
        <br>
        <div class="question-container">
            <div class="label-div"><label for="baseIncome">Checking and Savings Balance</label></div>
            <div class="input-div"><input type="text" id="baseIncome" value="<?php echo $app[0]['chkSav']; ?>"></div>
        </div>
        <div class="question-container">
                <div class="label-div"><label for="baseIncome">Stocks and Bonds</label></div>
                <div class="input-div"><input type="text" id="baseIncome" value="<?php echo $app[0]['stkBnd']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="baseIncome">All other Assets</label></div>
                <div class="input-div"><input type="text" id="baseIncome" value="<?php echo $app[0]['otherAssets']; ?>"></div>
            </div>
        <div class="label-div"><h1 class="section-header"></h1></div>
        <br>
        <div class="question-container">
            <div class="label-div"><label for="loanPurpose">Purpose of Loan*</label></div>
            <div class="input-div">
                <input type="radio" class="radio-button" name="loanPurpose" value="purchase" <?php if ($app[0]['loanPurpose'] == "purchase") { echo 'checked'; } ?>><span>Purchase</span>
                <input type="radio" class="radio-button" name="loanPurpose" value="refinance" <?php if ($app[0]['loanPurpose'] == "refinance") { echo 'checked'; } ?>><span>Refinance</span>
            </div>
        </div>
        <br>
        
        <?php
        /**********************************************
         *
         * COBORROWER
         *
         **********************************************/
        ?>
        <div id="cobo-container">
            <div class="multi-question-container">
                <?php
                /***********************************
                 * YOUR INFORMATION
                 ***********************************/
                ?>
                <div class="label-div"><h1 class="section-header">Co-Borrower Information</h1></div>
                <br>
                <div class="question-container">
                    <div class="label-div"><label for="firstName">First Name*</label></div>
                    <div class="input-div"><input type="text" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
                </div>
                <div class="question-container">
                    <div class="label-div"><label for="lastName">Last Name*</label></div>
                    <div class="input-div"><input type="text" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
                </div>
                <div class="question-container">
                    <div class="label-div"><label for="email">Email Address*</label></div>
                    <div class="input-div"><input type="text" id="email" value="<?php echo $app[0]['email']; ?>"></div>
                </div>
                <div class="question-container">
                    <div class="label-div"><label for="phone">Phone</label></div>
                    <div class="input-div"><input type="text" id="phone" value="<?php echo $app[0]['phone']; ?>"></div>
                </div>

                <?php
                /***********************************
                 * INCOME
                 ***********************************/
                ?>
                <div class="label-div"><h1 class="section-header">Co-Borrower Income</h1></div>
                <br>
                <div class="question-container">
                    <div class="label-div"><label for="baseIncome">Gross Monthly Income</label></div>
                    <div class="input-div"><input type="text" id="baseIncome" value="<?php echo $app[0]['grossIncome']; ?>"></div>
                </div>
                <div class="question-container">
                    <div class="label-div"><label for="overtime">All other income</label></div>
                    <div class="input-div"><input type="text" id="overtime" value="<?php echo $app[0]['otherIncome']; ?>"></div>
                </div>
                <br>
                <div class="question-container">
                    <div class="label-div">Income Sources</div>
                    <div class="dec-input-div">
                        <input type="checkbox" class="check-box" id="salary" <?php if ($app[0]['salary'] == "1") { echo 'checked'; } ?>>Salary<br>
                        <input type="checkbox" class="check-box" id="commBonus" <?php if ($app[0]['commBonus'] == "1") { echo 'checked'; } ?>>Commission/Bonus<br>
                        <input type="checkbox" class="check-box" id="hourly" <?php if ($app[0]['hourly'] == "1") { echo 'checked'; } ?>>Hourly<br>
                        <input type="checkbox" class="check-box" id="selfEmployed" <?php if ($app[0]['selfEmployed'] == "1") { echo 'checked'; } ?>>Self-Employed<br>
                    </div>
                </div>
                <br>
                <div class="question-container">
                    <div class="label-div"><label>Employed at Current Job for</label></div>
                    <div class="input-div">
                        <input type="text" class="half-input" id="prevJobYears" value="<?php echo $app[0]['prevJobYears']; ?>"><span class="half-input-span">Years</span>
                        <input type="text" class="half-input" id="prevJobMonths" value="<?php echo $app[0]['prevJobMonths']; ?>"><span class="half-input-span">Months</span>
                    </div>
                </div>
                <?php
                /***********************************
                 * EXPENSE
                 ***********************************/
                ?>
                <div class="label-div"><h1 class="section-header">Co-Borrower Liabilities</h1></div>
                <br>
                <div class="question-container">
                    <div class="label-div"><label for="baseIncome">Mortgage Payment</label></div>
                    <div class="input-div"><input type="text" id="baseIncome" value="<?php echo $app[0]['expenses']; ?>"></div>
                </div>
                <div class="question-container">
                    <div class="label-div"><label for="baseIncome">Car Payment(s)</label></div>
                    <div class="input-div"><input type="text" id="baseIncome" value="<?php echo $app[0]['expenses']; ?>"></div>
                </div>
                <div class="question-container">
                    <div class="label-div"><label for="baseIncome">All other Debt Payments</label></div>
                    <div class="input-div"><input type="text" id="baseIncome" value="<?php echo $app[0]['expenses']; ?>"></div>
                </div>
                <?php
                /***********************************
                 * Assets
                 ***********************************/
                ?>
                <div class="label-div"><h1 class="section-header">Co-Borrower Assets</h1></div>
                <br>
                <div class="question-container">
                    <div class="label-div"><label for="baseIncome">Checking and Savings Balance</label></div>
                    <div class="input-div"><input type="text" id="baseIncome" value="<?php echo $app[0]['chkSav']; ?>"></div>
                </div>
                <div class="question-container">
                    <div class="label-div"><label for="baseIncome">Stocks and Bonds</label></div>
                    <div class="input-div"><input type="text" id="baseIncome" value="<?php echo $app[0]['stkBnd']; ?>"></div>
                </div>
                <div class="question-container">
                    <div class="label-div"><label for="baseIncome">All other Assets</label></div>
                    <div class="input-div"><input type="text" id="baseIncome" value="<?php echo $app[0]['otherAssets']; ?>"></div>
                </div>
                <div class="label-div"><h1 class="section-header"></h1></div>
                <br>
                
            </div><?php /* end of coborrower */ ?>
        </div><?php /* end of coborrower container */ ?>
        
</div>
    
    
    
<?php
/******************************************************
 * JAVASCRIPT
 ******************************************************/
?>

<script type="text/javascript">
	$(document).ready(function() {
        
        console.log("Javascript loaded successfully");
            
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
        var $hasCobo = $("input[name=hasCobo]:checked").val();
        if ($hasCobo == 1) {
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
            submitApplication('<?php echo $email; ?>','<?php echo $appId; ?>','<?php echo $appId; ?>'); //jsFunction.php
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
            //* Save to borrower_tbl
            //************************
            
            //Assign input values to javascript variables
            var $firstName = $("#firstName").val();
			var $middleName = $("#middleName").val();
			var $lastName = $("#lastName").val();
            var $email = $("#email").val();
            var $phone = $("#phone").val();
            
            
            var $grossIncome = $("#grossIncome").val();
            var $otherIncome = $("#otherIncome").val();
            var $srcSalary = $("#srcSalary").val();
            var $srcCommBon = $("#srcCommBon").val();
            var $srcHourly = $("#srcHourly").val();
            var $srcSelfEmp = $("#srcSelfEmp").val();
            var $mtgPmt = $("#mtgPmt").val();
            var $carPmt = $("#carPmt").val();
            var $dbtPmt = $("#dbtPmt").val();
            var $chkSav = $("#chkSav").val();
            var $stkBnd = $("#stkBnd").val();
            var $othAsst = $("#othAsst").val();
            
            // set ajax inputs
            var $func = "update";
            var $tableName = "borrower_tbl";
            var $dataString = "dob = '" + $dob + "',yrsSchool = '" + $yrsSchool + "',maritalStatus = '" + $maritalStatus + "',dependents = '" + $dependents + "',ageDependents = '" + $ageDependents + "',currJobName = '" + $currJobName + "',currJobAddress = '" + $currJobAddress + "',currJobCity = '" + $currJobCity + "',currJobState = '" + $currJobState + "',currJobZip = '" + $currJobZip + "',currJobPhone = '" + $currJobPhone + "',currJobTitle = '" + $currJobTitle + "',currJobIncome = '" + $currJobIncome + "',currJobSelfEmployed = '" + $currJobSelfEmployed + "',currJobYears = '" + $currJobYears + "',currJobMonths = '" + $currJobMonths + "',prevJobName = '" + $prevJobName + "',prevJobAddress = '" + $prevJobAddress + "',prevJobCity = '" + $prevJobCity + "',prevJobState = '" + $prevJobState + "',prevJobZip = '"+ $prevJobZip + "',prevJobPhone = '" + $prevJobPhone + "',prevJobTitle = '" + $prevJobTitle + "',prevJobSelfEmployed = '" + $prevJobSelfEmployed + "',prevJobIncome = '" + $prevJobIncome + "',prevJobYears = '" + $prevJobYears + "',prevJobMonths = '" + $prevJobMonths + "',hasMultiJobs = '" + $hasMultiJobs + "',secondJobName = '" + $secondJobName + "',secondJobAddress = '" + $secondJobAddress + "',secondJobCity = '" + $secondJobCity + "',secondJobState = '" + $secondJobState + "',secondJobZip = '" + $secondJobZip + "',secondJobPhone = '" + $secondJobPhone + "',secondJobTitle = '" + $secondJobTitle + "',secondJobIncome = '" + $secondJobIncome + "',secondJobSelfEmployed = '" + $secondJobSelfEmployed + "',secondJobYears = '" + $secondJobYears + "',secondJobMonths = '" + $secondJobMonths + "',baseIncome = '" + $baseIncome + "',overtime = '" + $overtime + "',bonuses = '" + $bonuses + "',commissions = '" + $commissions + "',dividends = '" + $dividends + "',netRentIncome = '" + $netRentIncome + "',rent = '" + $rent + "',firstMortgage = '" +$firstMortgage + "',otherFinancing = '" + $otherFinancing + "',hazardIns = '" + $hazardIns + "',taxes = '" + $taxes + "',mortgageIns = '" + $mortgageIns + "',hoaDues = '" + $hoaDues + "',otherExpenses = '" + $otherExpenses + "'";
            var $columnName = "id";
            var $uniqueId = '<?php echo $borrowerId; ?>';
            
            //alert($dataString);
            
            updateDatabase($func, $tableName, $dataString, $columnName, $uniqueId); //jsFunction.php
            
        } // end SaveInputFields()
		
	}); //$(document).ready(function()
</script>