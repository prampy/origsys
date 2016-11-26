<?php $pageTitle = "Standing Rock Mortgage | Application"; ?>
<?php $complete = 1; // for the circle-steps ?>
<?php include 'inc/header.php'; ?>
<?php $borrowerId =  $_SESSION["borrowerId"]; ?>
<?php $appId =  $_SESSION["appId"]; ?>
<?php $email =  $_SESSION["email"]; ?>

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
        $results = $db->query("SELECT * FROM borrower_tbl WHERE id='" . $borrowerId . "';" );
    } catch (Exception $e) {
        echo "Could not connect to database: " . $e->getMessage();
        exit;
    }
    $borrower = $results->fetchAll(PDO::FETCH_ASSOC);

    try {
        $results = $db->query("SELECT loanPurpose FROM app_tbl WHERE id='" . $appId . "';" );
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
<div id="app-wrapper">
    <div id="page-title">
        <h1>Loan Application</h1>
        <div class="circle-div-container">
            
            <?php /*
            <div class="circle-div complete" title="Contact Information">1</div>
            <div class="circle-div" title="Loan Details">2</div>
            <div class="circle-div" title="Borrower Information">3</div>
            <div class="circle-div" title="Assets and Liabilities">4</div>
            <div class="circle-div" title="Declarations">5</div>
            */ ?>
        </div>
    </div>

    <div class="table-container">
        <?php
        /***********************************
         * YOUR INFORMATION
         ***********************************/
        ?>
        <div class="label-div"><h1 class="section-header">Co-Borrower Details</h1></div>
        <br>
        <div class="question-container">
            <div class="label-div"><label for="firstName">First Name*</label></div>
            <div class="input-div"><input type="text" id="firstName" value="<?php echo $borrower[0]['firstName']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="middleName">Middle Name</label></div>
            <div class="input-div"><input type="text" id="middleName" value="<?php echo $borrower[0]['middleName']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="lastName">Last Name*</label></div>
            <div class="input-div"><input type="text" id="lastName" value="<?php echo $borrower[0]['lastName']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="suffix">Suffix (Jr. or Sr.)</label></div>
            <div class="input-div"><input type="text" id="suffix" value="<?php echo $borrower[0]['suffix']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="email">Email Address*</label></div>
            <div class="input-div"><input type="text" id="email" value="<?php echo $borrower[0]['email']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="phone">Phone</label></div>
            <div class="input-div"><input type="text" id="phone" value="<?php echo $borrower[0]['phone']; ?>"></div>
        </div>
        
        <?php
        /***********************************
         * CURRENT ADDRESS
         ***********************************/
        ?>
        <div class="label-div"><h1 class="section-header">Current Address</h1></div>
        <div class="question-container">
            <div class="label-div"><label for="currAddress">Address</label></div>
            <div class="input-div"><input type="text" id="currAddress" value="<?php echo $borrower[0]['currAddress']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="currCity">City</label></div>
            <div class="input-div"><input type="text" id="currCity" value="<?php echo $borrower[0]['currCity']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="currState">State</label></div>
            <div class="input-div"><input type="text" id="currState" value="<?php echo $borrower[0]['currState']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="currZip">Zip</label></div>
            <div class="input-div"><input type="text" id="currZip" value="<?php echo $borrower[0]['currZip']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label>Do you</label></div>
            <div class="input-div">
                <input type="radio" class="radio-button" name="currRentOwn" value="own" <?php if ($borrower[0]['currRentOwn'] == "own") { echo 'checked'; } ?>><span>Own</span>
                <input type="radio" class="radio-button" name="currRentOwn" value="rent" <?php if ($borrower[0]['currRentOwn'] == "rent") { echo 'checked'; } ?>><span>Rent</span> 
            </div>
    
        </div>
        <div class="question-container">
            <div class="label-div"><label>How long at current address?</label></div>
            <div class="input-div">
                <input type="text" class="half-input" id="currYears" name="currYears" value="<?php echo $borrower[0]['currYears']; ?>"><span class="half-input-span">Years</span>
                <input type="text" class="half-input" id="currMonths" name="currMonths" value="<?php echo $borrower[0]['currMonths']; ?>"><span class="half-input-span">Months</span>
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
                <div class="input-div"><input type="text" id="prevAddress" value="<?php echo $borrower[0]['prevAddress']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="prevCity">City</label></div>
                <div class="input-div"><input type="text" id="prevCity" value="<?php echo $borrower[0]['prevCity']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="prevState">State</label></div>
                <div class="input-div"><input type="text" id="prevState" value="<?php echo $borrower[0]['prevState']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="prevZip">Zip</label></div>
                <div class="input-div"><input type="text" id="prevZip" value="<?php echo $borrower[0]['prevZip']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label>Did you</label></div>
                <div class="input-div">
                    <input type="radio" class="radio-button" name="prevRentOwn" value="own" <?php if ($borrower[0]['prevRentOwn'] == "own") { echo 'checked'; } ?>><span>Own</span>
                    <input type="radio" class="radio-button" name="prevRentOwn" value="rent" <?php if ($borrower[0]['prevRentOwn'] == "rent") { echo 'checked'; } ?>><span>Rent</span> 
                </div>
            </div>
            <div class="question-container">
                <div class="label-div"><label>How long at previous address?</label></div>
                <div class="input-div">
                    <input type="text" class="half-input" id="prevYears" name="prevYears" value="<?php echo $borrower[0]['prevYears']; ?>"><span class="half-input-span">Years</span>
                    <input type="text" class="half-input" id="prevMonths" name="prevMonths" value="<?php echo $borrower[0]['prevMonths']; ?>"><span class="half-input-span">Months</span>
                </div>
            </div>
        </div>
        <div class="question-container">
            <div class="label-div"><label>Do you have a different mailing address?</label></div>
            <div class="input-div">
                <input type="radio" class="radio-button" name="hasDiffMail" value="1" <?php if ($borrower[0]['hasDiffMail'] == "1") { echo 'checked'; } ?>><span>Yes</span>
                <input type="radio" class="radio-button" name="hasDiffMail" value="0" <?php if ($borrower[0]['hasDiffMail'] == "0") { echo 'checked'; } ?>><span>No</span> 
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
                <div class="input-div"><input type="text" id="mailAddress" value="<?php echo $borrower[0]['mailAddress']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="mailCity">City</label></div>
                <div class="input-div"><input type="text" id="mailCity" value="<?php echo $borrower[0]['mailCity']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="mailState">State</label></div>
                <div class="input-div"><input type="text" id="mailState" value="<?php echo $borrower[0]['mailState']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="mailZip">Zip</label></div>
                <div class="input-div"><input type="text" id="mailZip" value="<?php echo $borrower[0]['mailZip']; ?>"></div>
            </div>
        </div>
        
        <?php
        /***********************************
         * COBORROWER INFORMATION
         ***********************************/
        ?>
        <div class="label-div"><h1 class="section-header">Co-Borrower Information</h1></div>
        <br>
        <?php /*
        <div class="question-container">
            <div class="label-div"><label for="ssn">Social Security Number<span></span></label></div>
            <div class="input-div"><input type="text" id="ssn" value="<?php echo $borrower[0]['ssn']; ?>"></div>
        </div>
        */ ?>
        <div class="question-container">
            <div class="label-div"><label for="dob">Date of Birth (mm/dd/yyyy)</label></div>
            <div class="input-div"><input type="text" id="dob" value="<?php echo $borrower[0]['dob']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="yrsSchool" class="has-help-text">Years in School</label></div>
            <div class="input-div"><input type="text" id="yrsSchool" value="<?php echo $borrower[0]['yrsSchool']; ?>"></div>
            <div class="help-container">
                <div class="label-div"></div><div class="input-div"></div><?php /* spacer line */ ?>
                <div class="help-div">For example, if you graduated high school you would put "12".</div>
                <div class="label-div"></div><div class="input-div"></div><?php /* spacer line */ ?>
            </div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="maritalStatus">Marital Status</label></div>
            <div class="input-div">
                <select id="maritalStatus">
                    <option value="" <?php if ($borrower[0]['maritalStatus'] == "") { echo "selected"; } ?>>Please Select...</option>
                    <option value="married" <?php if ($borrower[0]['maritalStatus'] == "married") { echo "selected"; } ?>>Married</option>
                    <option value="separated" <?php if ($borrower[0]['maritalStatus'] == "separated") { echo "selected"; } ?>>Separated</option>
                    <option value="unmarried" <?php if ($borrower[0]['maritalStatus'] == "unmarried") { echo "selected"; } ?>>Unmarried (including single, divorced, widowed)</option>
                </select>
            </div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="dependents">Number of Dependents</label></div>
            <div class="input-div"><input type="text" id="dependents" value="<?php echo $borrower[0]['dependents']; ?>"></div>
        </div>
        <div id="ageDependents">
            <div class="question-container">
                <div class="label-div"><label for="ageDependents">Age of Dependents (separated by commas)</label></div>
                <div class="input-div"><input type="text" id="ageDependents" value="<?php echo $borrower[0]['ageDependents']; ?>"></div>
            </div>
        </div>
        
        <?php
        /***********************************
         * CURRENT EMPLOYER
         ***********************************/
        ?>
        <div class="label-div"><h1 class="section-header">Current Employer</h1></div>
        <br>
        <div class="question-container">
            <div class="label-div"><label for="currJobName">Company Name</label></div>
            <div class="input-div"><input type="text" id="currJobName" value="<?php echo $borrower[0]['currJobName']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="currJobAddress">Address</label></div>
            <div class="input-div"><input type="text" id="currJobAddress" value="<?php echo $borrower[0]['currJobAddress']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="currJobCity">City</label></div>
            <div class="input-div"><input type="text" id="currJobCity" value="<?php echo $borrower[0]['currJobCity']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="currJobState">State</label></div>
            <div class="input-div"><input type="text" id="currJobState" value="<?php echo $borrower[0]['currJobState']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="currJobZip">Zip</label></div>
            <div class="input-div"><input type="text" id="currJobZip" value="<?php echo $borrower[0]['currJobZip']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="currJobPhone">Business Phone</label></div>
            <div class="input-div"><input type="text" id="currJobPhone" value="<?php echo $borrower[0]['currJobPhone']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="currJobTitle">Position/Title</label></div>
            <div class="input-div"><input type="text" id="currJobTitle" value="<?php echo $borrower[0]['currJobTitle']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="currJobIncome">Monthly Income</label></div>
            <div class="input-div"><input type="text" id="currJobIncome" value="<?php echo $borrower[0]['currJobIncome']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label>Are you Self Employed?</label></div>
            <div class="input-div">
                <input type="radio" class="radio-button" name="currJobSelfEmployed" value="1" <?php if ($borrower[0]['currJobSelfEmployed'] == "1") { echo 'checked'; } ?>><span>Yes</span>
                <input type="radio" class="radio-button" name="currJobSelfEmployed" value="0" <?php if ($borrower[0]['currJobSelfEmployed'] == "0") { echo 'checked'; } ?>><span>No</span>
            </div>
        </div>
        <div class="question-container">
            <div class="label-div"><label>Employed at this Company for</label></div>
            <div class="input-div">
                <input type="text" class="half-input" id="currJobYears" value="<?php echo $borrower[0]['currJobYears']; ?>"><span class="half-input-span">Years</span>
                <input type="text" class="half-input" id="currJobMonths" value="<?php echo $borrower[0]['currJobMonths']; ?>"><span class="half-input-span">Months</span>
            </div>
        </div>
        
         <?php
        /***********************************
         * PREVIOUS EMPLOYER
         ***********************************/
        ?>
        <div id="prev-job-div">
            <div class="label-div"><h1 class="section-header">Previous Employer</h1></div>
            <br>
            <div class="question-container">
                <div class="label-div"><label for="prevJobName">Company Name</label></div>
                <div class="input-div"><input type="text" id="prevJobName" value="<?php echo $borrower[0]['prevJobName']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="prevJobAddress">Address</label></div>
                <div class="input-div"><input type="text" id="prevJobAddress" value="<?php echo $borrower[0]['prevJobAddress']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="prevJobCity">City</label></div>
                <div class="input-div"><input type="text" id="prevJobCity" value="<?php echo $borrower[0]['prevJobCity']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="prevJobState">State</label></div>
                <div class="input-div"><input type="text" id="prevJobState" value="<?php echo $borrower[0]['prevJobState']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="prevJobZip">Zip</label></div>
                <div class="input-div"><input type="text" id="prevJobZip" value="<?php echo $borrower[0]['prevJobZip']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="prevJobPhone">Business Phone</label></div>
                <div class="input-div"><input type="text" id="prevJobPhone" value="<?php echo $borrower[0]['prevJobPhone']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="prevJobTitle">Position/Title</label></div>
                <div class="input-div"><input type="text" id="prevJobTitle" value="<?php echo $borrower[0]['prevJobTitle']; ?>"></div>
            </div>
                <div class="question-container">
                <div class="label-div"><label for="prevJobIncome">Monthly Income</label></div>
                <div class="input-div"><input type="text" id="prevJobIncome" value="<?php echo $borrower[0]['prevJobIncome']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label>Are you Self Employed?</label></div>
                <div class="input-div">
                    <input type="radio" class="radio-button" name="prevJobSelfEmployed" value="1" <?php if ($borrower[0]['prevJobSelfEmployed'] == "1") { echo 'checked'; } ?>><span>Yes</span>
                    <input type="radio" class="radio-button" name="prevJobSelfEmployed" value="0" <?php if ($borrower[0]['prevJobSelfEmployed'] == "0") { echo 'checked'; } ?>><span>No</span>
                    <div class="help-container">
                        <div class="label-div"></div><div class="input-div"></div><?php /* spacer line */ ?>
                        <div class="help-div">In general, you are self employed if you have one of the following types of businesses: sole proprietorship, partnership, or a limited liability company (LLC).</div>
                        <div class="label-div"></div><div class="input-div"></div><?php /* spacer line */ ?>
                    </div>
                </div>
            </div>
            <div class="question-container">
                <div class="label-div"><label>Employed at this Company for</label></div>
                <div class="input-div">
                    <input type="text" class="half-input" id="prevJobYears" value="<?php echo $borrower[0]['prevJobYears']; ?>"><span class="half-input-span">Years</span>
                    <input type="text" class="half-input" id="prevJobMonths" value="<?php echo $borrower[0]['prevJobMonths']; ?>"><span class="half-input-span">Months</span>
                </div>
            </div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="hasMultiJobs">Do you currently hold multiple jobs?</label></div>
            <div class="input-div">
                <input type="radio" class="radio-button" name="hasMultiJobs" value="1" <?php if ($borrower[0]['hasMultiJobs'] == "1") { echo 'checked'; } ?>><span>Yes</span>
                <input type="radio" class="radio-button" name="hasMultiJobs" value="0" <?php if ($borrower[0]['hasMultiJobs'] == "0") { echo 'checked'; } ?>><span>No</span>
            </div>
        </div>
        <?php
        /***********************************
         * SECOND EMPLOYER
         ***********************************/
        ?>
        <div id="multi-job-div">
            <div class="label-div"><h1 class="section-header">Second Employer</h1></div>
            <br>
            <div class="question-container">
                <div class="label-div"><label for="secondJobName">Company Name</label></div>
                <div class="input-div"><input type="text" id="secondJobName" value="<?php echo $borrower[0]['secondJobName']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="secondJobAddress">Address</label></div>
                <div class="input-div"><input type="text" id="secondJobAddress" value="<?php echo $borrower[0]['secondJobAddress']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="secondJobCity">City</label></div>
                <div class="input-div"><input type="text" id="secondJobCity" value="<?php echo $borrower[0]['secondJobCity']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="secondJobState">State</label></div>
                <div class="input-div"><input type="text" id="secondJobState" value="<?php echo $borrower[0]['secondJobState']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="secondJobZip">Zip</label></div>
                <div class="input-div"><input type="text" id="secondJobZip" value="<?php echo $borrower[0]['secondJobZip']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="secondJobPhone">Business Phone</label></div>
                <div class="input-div"><input type="text" id="secondJobPhone" value="<?php echo $borrower[0]['secondJobPhone']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="secondJobTitle">Position/Title</label></div>
                <div class="input-div"><input type="text" id="secondJobTitle" value="<?php echo $borrower[0]['secondJobTitle']; ?>"></div>
            </div>
                <div class="question-container">
                <div class="label-div"><label for="secondJobIncome">Monthly Income</label></div>
                <div class="input-div"><input type="text" id="secondJobIncome" value="<?php echo $borrower[0]['secondJobIncome']; ?>"></div>
            </div>
            <div class="question-container">
                <div class="label-div"><label for="secondJobSelfEmployed">Are you Self Employed?</label></div>
                <div class="input-div">
                    <input type="radio" class="radio-button" name="secondJobSelfEmployed" value="1" <?php if ($borrower[0]['secondJobSelfEmployed'] == "1") { echo 'checked'; } ?>><span>Yes</span>
                    <input type="radio" class="radio-button" name="secondJobSelfEmployed" value="0" <?php if ($borrower[0]['secondJobSelfEmployed'] == "0") { echo 'checked'; } ?>><span>No</span>
                </div>
            </div>
            <div class="question-container">
                <div class="label-div"><label>Employed at this Company for</label></div>
                <div class="input-div">
                    <input type="text" class="half-input" id="secondJobYears" value="<?php echo $borrower[0]['secondJobYears']; ?>"><span class="half-input-span">Years</span>
                    <input type="text" class="half-input" id="secondJobMonths" value="<?php echo $borrower[0]['secondJobMonths']; ?>"><span class="half-input-span">Months</span>
                </div>
            </div>
        </div>
        <?php
        /***********************************
         * INCOME SOURCES
         ***********************************/
        ?>
        <div class="label-div"><h1 class="section-header">Monthly Income</h1></div>
        <br>
        <div class="question-container">
            <div class="label-div"><label for="baseIncome">Base Income</label></div>
            <div class="input-div"><input type="text" id="baseIncome" value="<?php echo $borrower[0]['baseIncome']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="overtime">Overtime</label></div>
            <div class="input-div"><input type="text" id="overtime" value="<?php echo $borrower[0]['overtime']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="bonuses">Bonuses</label></div>
            <div class="input-div"><input type="text" id="bonuses" value="<?php echo $borrower[0]['bonuses']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="commissions">Commissions</label></div>
            <div class="input-div"><input type="text" id="commissions" value="<?php echo $borrower[0]['commissions']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="dividends">Dividends/Interest</label></div>
            <div class="input-div"><input type="text" id="dividends" value="<?php echo $borrower[0]['dividends']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="netRentIncome">Net Rental Income</label></div>
            <div class="input-div"><input type="text" id="netRentIncome" value="<?php echo $borrower[0]['netRentIncome']; ?>"></div>
        </div>
        <?php
        /***********************************
         * CURRENT HOUSING EXPENSE
         ***********************************/
        ?>
        <div class="label-div"><h1 class="section-header">Housing Expense</h1></div>
        <br>
        <div class="question-container">
            <div class="label-div"><label for="rent">Rent</label></div>
            <div class="input-div"><input type="text" id="rent" value="<?php echo $borrower[0]['rent']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="firstMortgage" class="has-help-text">First Mortgage (P&I)</label></div>
            <div class="input-div"><input type="text" id="firstMortgage" value="<?php echo $borrower[0]['firstMortgage']; ?>"></div>
            <div class="help-container">
                <div class="label-div"></div><div class="input-div"></div><?php /* spacer line */ ?>
                <div class="help-div">P&I is Principal and Interest. It is a portion of your mortgage payment. The other part, that should not be inlcuded in this number, is Hazard Insurance and Real Estate Taxes (also known as "Escrow"). Your loan statements will break these out.</div>
                <div class="label-div"></div><div class="input-div"></div><?php /* spacer line */ ?>
            </div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="otherFinancing">Other Financing (P&I)</label></div>
            <div class="input-div"><input type="text" id="otherFinancing" value="<?php echo $borrower[0]['otherFinancing']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="hazardIns" class="has-help-text">Hazard Insurance</label></div>
            <div class="input-div"><input type="text" id="hazardIns" value="<?php echo $borrower[0]['hazardIns']; ?>"></div>
            <div class="help-container">
                <div class="label-div"></div><div class="input-div"></div><?php /* spacer line */ ?>
                <div class="help-div">Also known as, Homeowner's Insruance. This is a portion of your monthly mortgage payment. You can find this number on your loan statements.</div>
                <div class="label-div"></div><div class="input-div"></div><?php /* spacer line */ ?>
            </div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="taxes" class="has-help-text">Real Estate Taxes</label></div>
            <div class="input-div"><input type="text" id="taxes" value="<?php echo $borrower[0]['taxes']; ?>"></div>
            <div class="help-container">
                <div class="label-div"></div><div class="input-div"></div><?php /* spacer line */ ?>
                <div class="help-div">This is a portion of your monthly mortgage payment. You can find this number on your loan statements.</div>
                <div class="label-div"></div><div class="input-div"></div><?php /* spacer line */ ?>
            </div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="mortgageIns" class="has-help-text">Mortgage Insurance</label></div>
            <div class="input-div"><input type="text" id="mortgageIns" value="<?php echo $borrower[0]['mortgageIns']; ?>"></div>
            <div class="help-container">
                <div class="label-div"></div><div class="input-div"></div><?php /* spacer line */ ?>
                <div class="help-div">Not all loans have Mortgage Insurance, can be known as "PMI" or "MIP". You can find this on your loan statement, if it applies.</div>
                <div class="label-div"></div><div class="input-div"></div><?php /* spacer line */ ?>
            </div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="hoaDues">Homeowner's Association Dues</label></div>
            <div class="input-div"><input type="text" id="hoaDues" value="<?php echo $borrower[0]['hoaDues']; ?>"></div>
            <div class="help-container">
                <div class="label-div"></div><div class="input-div"></div><?php /* spacer line */ ?>
                <div class="help-div">Many HOAs require an annual payment. If that is the case, please divide that number by 12 to get the monthly number.</div>
                <div class="label-div"></div><div class="input-div"></div><?php /* spacer line */ ?>
            </div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="otherExpenses">Other Expenses</label></div>
            <div class="input-div"><input type="text" id="otherExpenses" value="<?php echo $borrower[0]['otherExpenses']; ?>"></div>
        </div>
        
    
        
        <?php
        /***********************************
         * CHECKING AND SAVINGS
         ***********************************/
        ?>
        <div class="label-div"><h1 class="section-header">Checking and Savings Accounts</h1></div>
        <br>
        <div class="multi-question-container">
            <?php /* Loop that places 6 Checking/Savings divs on screen */?>
            
            <?php for ($x=1; $x<=4; $x++) { ?>   
                <div id="chkSav<?php echo $x; ?>" class="chkSav-container">
                    <div class="question-container">
                        <div class="label-div"><label for="chkSavAcctType<?php echo $x; ?>">Account Type</label></div>
                        <div class="input-div">
                            <input type="radio" class="radio-button" name="chkSavAcctType<?php echo $x; ?>" value="checking" <?php if ($borrower[0]['chkSavAcctType' . $x] == "checking") { echo 'checked'; } ?>><span>Checking</span>
                            <input type="radio" class="radio-button" name="chkSavAcctType<?php echo $x; ?>" value="savings" <?php if ($borrower[0]['chkSavAcctType' . $x] == "savings") { echo 'checked'; } ?>><span>Savings</span>
                        </div>
                    </div>
                    <div class="question-container">
                        <div class="label-div"><label for="chkSavBankName<?php echo $x; ?>">Name of Bank or Credit Union</label></div>
                        <div class="input-div"><input type="text" id="chkSavBankName<?php echo $x; ?>" value="<?php echo $borrower[0]['chkSavBankName' . $x]; ?>"></div>
                    </div>
                    <div class="question-container">
                        <div class="label-div"><label for="chkSavAcctNum<?php echo $x; ?>">Account Number</label></div>
                        <div class="input-div"><input type="text" id="chkSavAcctNum<?php echo $x; ?>" value="<?php echo $borrower[0]['chkSavAcctNum' . $x]; ?>"></div>
                    </div>
                    <div class="question-container">
                        <div class="label-div"><label for="chkSavAcctBal<?php echo $x; ?>">Account Balance</label></div>
                        <div class="input-div"><input type="text" id="chkSavAcctBal<?php echo $x; ?>" value="<?php echo $borrower[0]['chkSavAcctBal' . $x]; ?>"></div>
                    </div>
                    <div class="label-div" id="addChkSav<?php echo $x; ?>"><button id="addChkSavBtn<?php echo $x; ?>" class="square-button secondary">Add Another</button></div>
                </div>    
            <?php } ?>
        </div>
        
        <?php
        /***********************************
         * STOCKS AND BONDS
         ***********************************/
        ?>
        <div class="label-div"><h1 class="section-header">Stocks and Bonds</h1></div>
        <br>
        <div class="multi-question-container">
            <?php /* Loop that places 6 Stocks and Bond divs on screen */?>
            
            <?php for ($x=1; $x<=4; $x++) { ?>
                <div id="stkBnd<?php echo $x; ?>" class="stkBnd-container">
                    <div class="question-container">
                        <div class="label-div"><label for="stkBndAcctType<?php echo $x; ?>">Asset Type</label></div>
                        <div class="input-div">
                            <select id="stkBndAcctType<?php echo $x; ?>">
                                <option value="" <?php if ($borrower[0]['stkBndAcctType' . $x] == "") { echo "selected"; } ?>>Please select...</option>
                                <option value="Stocks" <?php if ($borrower[0]['stkBndAcctType' . $x] == "Stocks") { echo "selected"; } ?>>Stocks</option>
                                <option value="Bonds" <?php if ($borrower[0]['stkBndAcctType' . $x] == "Bonds") { echo "selected"; } ?>>Bonds</option>
                                <option value="Mutual Funds" <?php if ($borrower[0]['stkBndAcctType' . $x] == "Mutual Funds") { echo "selected"; } ?>>Mutual Funds</option>
                            </select>
                        </div>
                    </div>
                    <div class="question-container">
                        <div class="label-div"><label for="stkBndName<?php echo $x; ?>">Name of Institution</label></div>
                        <div class="input-div"><input type="text" id="stkBndName<?php echo $x; ?>" value="<?php echo $borrower[0]['stkBndName' . $x]; ?>"></div>
                    </div>
                    <div class="question-container">
                        <div class="label-div"><label for="stkBndValue<?php echo $x; ?>">Asset Value ($)</label></div>
                        <div class="input-div"><input type="text" id="stkBndValue<?php echo $x; ?>" value="<?php echo $borrower[0]['stkBndValue' . $x]; ?>"></div>
                    </div>
                    <div class="label-div" id="addStkBnd<?php echo $x; ?>"><button id="addStkBnd<?php echo $x; ?>" class="square-button secondary">Add Another</button></div>
                </div>
            <?php } ?>
        </div>
        
        <?php
        /***********************************
         * OTHER ASSETS
         ***********************************/
        ?>
        <div class="label-div"><h1 class="section-header">Other Assets</h1></div>
        <br>
        <div class="multi-question-container">
         
        <?php for ($x=1; $x<=4; $x++) { ?>
            <div id="othAsst<?php echo $x; ?>" class="othAsst-container">   
                <div class="question-container">
                    <div class="label-div"><label for="othAsstType<?php echo $x; ?>">Asset Type</label></div>
                    <div class="input-div">
                        <select id="othAsstType<?php echo $x; ?>">
                            <option value="" <?php if ($borrower[0]['othAsstType' . $x] == "") { echo "selected"; } ?>>Please select...</option>
                            <option value="CD/Time Deposit" <?php if ($borrower[0]['othAsstType' . $x] == "CD/Time Deposit") { echo "selected"; } ?>>CD/Time Deposit</option>
                            <option value="Trust Fund" <?php if ($borrower[0]['othAsstType' . $x] == "Trust Fund") { echo "selected"; } ?>>Trust Fund</option>
                            <option value="Gift not deposited" <?php if ($borrower[0]['othAsstType' . $x] == "Gift not deposited") { echo "selected"; } ?>>Gift not deposited</option>
                            <option value="Cash Deposit on Sales Contract" <?php if ($borrower[0]['othAsstType' . $x] == "Cash Deposit on Sales Contract") { echo "selected"; } ?>>Cash Deposit on Sales Contract</option>
                            <option value="Secured Borrowed Funds Not Deposited" <?php if ($borrower[0]['othAsstType' . $x] == "Secured Borrowed Funds Not Deposited") { echo "selected"; } ?>>Secured Borrowed Funds Not Deposited</option>
                            <option value="Other Non Liquid Asset" <?php if ($borrower[0]['othAsstType' . $x] == "Other Non Liquid Asset") { echo "selected"; } ?>>Other Non Liquid Asset</option>
                        </select>
                    </div>
                </div>
                <div class="question-container">
                    <div class="label-div"><label for="othAsstName<?php echo $x; ?>">Name of Institution</label></div>
                    <div class="input-div"><input type="text" id="othAsstName<?php echo $x; ?>" value="<?php echo $borrower[0]['othAsstName' . $x]; ?>"></div>
                </div>
                <div class="question-container">
                    <div class="label-div"><label for="othAsstValue<?php echo $x; ?>">Asset Value ($)</label></div>
                    <div class="input-div"><input type="text" id="othAsstValue<?php echo $x; ?>" value="<?php echo $borrower[0]['othAsstValue' . $x]; ?>"></div>
                </div>
                <div class="label-div"><button id="addOthAsst<?php echo $x; ?>" class="square-button secondary">Add Another</button></div>
            </div>
        <?php } ?>
        </div>
        
        <div class="question-container">
            <div class="label-div"><label for="lifeInsCashVal">Life Insurance Net Cash Value</label></div>
            <div class="input-div"><input type="text" id="lifeInsCashVal" value="<?php echo $borrower[0]['lifeInsCashVal']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="lifeInsFaceVal">Life Insurance Face Amount</label></div>
            <div class="input-div"><input type="text" id="lifeInsFaceVal" value="<?php echo $borrower[0]['lifeInsFaceVal']; ?>"></div>
        </div>
        <div class="question-container">
            <div class="label-div"><label for="vestedRetirement">Vested interest in retirement fund (IRA, 401K, SEP)</label></div>
            <div class="input-div"><input type="text" id="vestedRetirement" value="<?php echo $borrower[0]['vestedRetirement']; ?>"></div>
        </div>
        <?php
        /***********************************
         * LIABILITIES
         ***********************************/
        ?>
        
        <div class="label-div"><h1 class="section-header">Liabilities</h1></div>
        <br>
        <div class="multi-question-container">
            
        <?php for ($x=1; $x<=6; $x++) { ?>   
            <div id="liab<?php echo $x; ?>" class="liab-container">
                <div class="question-container">
                    <div class="label-div"><label for="liabName<?php echo $x; ?>">Name of Company</label></div>
                    <div class="input-div"><input type="text" id="liabName<?php echo $x; ?>" value="<?php echo $borrower[0]['liabName' . $x]; ?>"></div>
                </div>
                <div class="question-container">
                    <div class="label-div"><label for="liabAcctNum<?php echo $x; ?>">Account Number</label></div>
                    <div class="input-div"><input type="text" id="liabAcctNum<?php echo $x; ?>" value="<?php echo $borrower[0]['liabAcctNum' . $x]; ?>"></div>
                </div>
                <div class="question-container">
                    <div class="label-div"><label for="liabPayment<?php echo $x; ?>">Monthly Payment</label></div>
                    <div class="input-div"><input type="text" id="liabPayment<?php echo $x; ?>" value="<?php echo $borrower[0]['liabPayment' . $x]; ?>"></div>
                </div>
                <div class="question-container">
                    <div class="label-div"><label for="liabBal<?php echo $x; ?>">Unpaid Balance</label></div>
                    <div class="input-div"><input type="text" id="liabBal<?php echo $x; ?>" value="<?php echo $borrower[0]['liabBal' . $x]; ?>"></div>
                </div>
                <div class="label-div" id="liab1"><button id="addLiab<?php echo $x; ?>" class="square-button secondary">Add Another</button></div>
            </div>
        <?php } ?>    
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
    </div> <?php /* end of table-container */ ?>
    
    
</div>
    
    
<?php include 'inc/footer.php'; ?>
    
    
<?php
/******************************************************
 * JAVASCRIPT
 ******************************************************/
?>

<script type="text/javascript">
	
    
    $(document).ready(function() {
        
        console.log("Javascript loaded successfully");
        $(".circle-div-container").load("insert-banner.php");
        
        
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
        
        //PREVIOUS EMPLOYER
        if ($("#currJobYears").val() >= 2 || $("#currJobYears").val() == "" ) {
            $("#prev-job-div").hide();
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
        
        //**********************************************
        //* CHECKING AND SAVINGS HIDE AND SHOW
        //* 
        //**********************************************
        
            //*************************
            //* AUTO HIDE ON LOAD
            //* hide if all values are empty in each container
            //*************************

            if ($("#chkSavBankName2").val() == '' && $("#chkSavAcctNum2").val() == '' && $("#chkSavAcctBal2").val() == '') {
                $("#chkSav2").hide();
            } else {//if not empty, hide previous button. show div by default
                $("#addChkSav1").hide(); //hide button
            }

            if ($("#chkSavBankName3").val() == '' && $("#chkSavAcctNum3").val() == '' && $("#chkSavAcctBal3").val() == '') {
                $("#chkSav3").hide();
            } else {//if not empty, hide previous button. show div by default
                $("#addChkSav2").hide(); //hide button
            }

            if ($("#chkSavBankName4").val() == '' && $("#chkSavAcctNum4").val() == '' && $("#chkSavAcctBal4").val() == '') {
                $("#chkSav4").hide();
            } else { //if not empty, hide previous button. show div by default
                 $("#addChkSav3").hide(); //hide button
            }

            $("#addChkSav4").hide(); //hide final button; never show it

            //*************************
            //* SHOW ON CLICK
            //* show if all values are empty in each container
            //*************************

            $("#addChkSavBtn1").click(function() {
                $("#addChkSav1").hide(); //hide previous button
                $("#chkSav2").show();//show next
            });

            $("#addChkSavBtn2").click(function() {
                $("#addChkSav2").hide();//hide previous button
                $("#chkSav3").show();//show next
            });

            $("#addChkSavBtn3").click(function() {
                $("#addChkSav3").hide();//hide previous button
                $("#chkSav4").show();//show next
            });
        
        //**********************************************
		//* STOCKS AND BONDS HIDE AND SHOW
        //*
		//**********************************************
        
            //*************************
            //* AUTO HIDE ON LOAD
            //* hide if all values are empty in each container
            //*************************

            if ($("#stkBndName2").val() == '' && $("#stkBndValue2").val() == '') {
                $("#stkBnd2").hide();
            } else { //if not empty, hide previous button. show div by default
                $("#addStkBnd1").hide();//hide previous button
            }

            if ($("#stkBndName3").val() == '' && $("#stkBndValue3").val() == '') {
                $("#stkBnd3").hide();
            } else {//if not empty, hide previous button. show div by default
                $("#addStkBnd2").hide();//hide previous button
            }

            if ($("#stkBndName4").val() == '' && $("#stkBndValue4").val() == '') {
                $("#stkBnd4").hide();
            } else {//if not empty, hide previous button. show div by default
                $("#addStkBnd3").hide();//hide previous button
            }

            $("#addStkBnd4").hide(); //hide final button; never show it


            //*************************
            //* HIDE ON CLICK
            //* show on lick
            //*************************
            $("#addStkBnd1").click(function() {
                $("#addStkBnd1").hide();//hide previous button
                $("#stkBnd2").show();//show next
            });

            $("#addStkBnd2").click(function() {
                $("#addStkBnd2").hide();//hide previous button
                $("#stkBnd3").show();//show next
            });

            $("#addStkBnd3").click(function() {
                $("#addStkBnd3").hide();//hide previous button
                $("#stkBnd4").show();//show next
            });
        
        //**********************************************
		//* OTHER ASSETS HIDE AND SHOW
        //*
		//**********************************************
        
            //*************************
            //* AUTO HIDE ON LOAD
            //* hide if all values are empty in each container
            //*************************
        
            if ($("#othAsstName2").val() == '' && $("#othAsstValue2").val() == '') {
                $("#othAsst2").hide();
            } else { //if not empty, hide previous button. show div by default
                $("#addOthAsst1").hide();//hide previous button
            }
        
            if ($("#othAsstName3").val() == '' && $("#othAsstValue3").val() == '') {
                $("#othAsst3").hide();
            } else { //if not empty, hide previous button. show div by default
                $("#addOthAsst2").hide();//hide previous button
            }
        
            if ($("#othAsstName4").val() == '' && $("#othAsstValue4").val() == '') {
                $("#othAsst4").hide();
            } else { //if not empty, hide previous button. show div by default
                $("#addOthAsst3").hide();//hide previous button
            }
        
            $("#addOthAsst4").hide(); //hide final button; never show it

            //*************************
            //* HIDE ON CLICK
            //* show on lick
            //*************************
        
            $("#addOthAsst1").click(function() {
                $("#addOthAsst1").hide();//hide previous button
                $("#othAsst2").show();//show next
            });

            $("#addOthAsst2").click(function() {
                $("#addOthAsst2").hide();//hide previous button
                $("#othAsst3").show();//show next
            });

            $("#addOthAsst3").click(function() {
                $("#addOthAsst3").hide(); //hide previous button
                $("#othAsst4").show(); //show next
            });
        
        //**********************************************
		//* LIABILITIES HIDE AND SHOW
        //*
		//**********************************************

            //*************************
            //* AUTO HIDE ON LOAD
            //* hide if all values are empty in each container
            //*************************
        
            if ($("#liabName2").val() == '' && $("#liabAcctNum2").val() == '' && $("#liabPayment2").val() == '' && $("#liabBal2").val() == '') {
                $("#liab2").hide();
            } else { //if not empty, hide previous button. show div by default
                $("#addLiab1").hide();//hide previous button
            }
        
            if ($("#liabName3").val() == '' && $("#liabAcctNum3").val() == '' && $("#liabPayment3").val() == '' && $("#liabBal3").val() == '') {
                $("#liab3").hide();
            } else { //if not empty, hide previous button. show div by default
                $("#addLiab2").hide();//hide previous button
            }
        
            if ($("#liabName4").val() == '' && $("#liabAcctNum4").val() == '' && $("#liabPayment4").val() == '' && $("#liabBal4").val() == '') {
                $("#liab4").hide();
            } else { //if not empty, hide previous button. show div by default
                $("#addLiab3").hide();//hide previous button
            }
        
            if ($("#liabName5").val() == '' && $("#liabAcctNum5").val() == '' && $("#liabPayment5").val() == '' && $("#liabBal5").val() == '') {
                $("#liab5").hide();
            } else { //if not empty, hide previous button. show div by default
                $("#addLiab4").hide();//hide previous button
            }
        
            if ($("#liabName6").val() == '' && $("#liabAcctNum6").val() == '' && $("#liabPayment6").val() == '' && $("#liabBal6").val() == '') {
                $("#liab6").hide();
            } else { //if not empty, hide previous button. show div by default
                $("#addLiab5").hide();//hide previous button
            }

            $("#addLiab6").hide(); //hide final button; never show it

            //*************************
            //* HIDE ON CLICK
            //* show on lick
            //*************************
        
            $("#addLiab1").click(function() {
                $("#addLiab1").hide();//hide previous button
                $("#liab2").show();//show next
            });

            $("#addLiab2").click(function() {
                $("#addLiab2").hide();//hide previous button
                $("#liab3").show();//show next
            });

            $("#addLiab3").click(function() {
                $("#addLiab3").hide();//hide previous button
                $("#liab4").show();//show next
            });

            $("#addLiab4").click(function() {
                $("#addLiab4").hide();//hide previous button
                $("#liab5").show();//show next
            });

            $("#addLiab5").click(function() {
                $("#addLiab5").hide();//hide previous button
                $("#liab6").show();//show next
            });
        
       
        
        
        
        
        
        
        
    //**********************************************
	//* SAVE BUTTONS
	//**********************************************
	
	   $("#save-continue").click(function() {
            //checkRequired();
            if ($("input[name=loanPurpose]:checked").val() == "purchase") {
                var $location = '<?php echo $loan_purchase_page; ?>';
            } else {
                var $location = '<?php echo $loan_refi_page; ?>';
            }
            saveInputFields();
            goTo($location);
	   }); //$("#save-continue").click(function()
        
        $("#save-exit").click(function() {
			//checkRequired();
            var $location = '<?php echo $homepage; ?>';
            saveInputFields();
            endSession(); // jsfunctions.php
            goTo($location);
		}); //$("#save-continue").click(function()
        
        $("#submit-div").click(function() {
			//checkRequired();
            var $location = '<?php echo $app_submitted_page; ?>';
            saveInputFields();
            submitApplication('<?php echo $email; ?>','<?php echo $borrowerId; ?>','<?php echo $appId; ?>'); //jsFunction.php
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
            var $uniqueId = '<?php echo $borrowerId; ?>';
            
            //alert($dataString); 
            
            updateDatabase($func, $tableName, $dataString, $columnName, $uniqueId); //jsFunction.php

        } //end saveInputFields()
        
	}); //$(document).ready(function()
    
</script>