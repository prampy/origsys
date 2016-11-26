


<div id="app-wrapper">
    <div class="table-container">
        <?php
        /***********************************
         * YOUR INFORMATION
         ***********************************/
        ?>
        
        <div class="col-sm-12 section-header"><h1>Borrower Information</h1></div>
        
        <div class="form-group col-sm-4">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" value="<?php echo $app[0]['firstName']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="middleName">Middle Name</label>
            <input type="text" id="middleName" value="<?php echo $app[0]['middleName']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" value="<?php echo $app[0]['lastName']; ?>">
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
            <input type="text" id="phone" value="<?php echo $app[0]['phone']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="phone">Home Phone</label>
            <input type="text" id="phone" value="<?php echo $app[0]['phone']; ?>">
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
            <label for="dependents">Number of Dependents</label>
            <input type="text" id="dependents" value="<?php echo $app[0]['dependents']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="ageDependents">Age of Dependents</label>
            <input type="text" id="ageDependents" value="<?php echo $app[0]['ageDependents']; ?>">
        </div>
        <div class="form-group col-sm-4">
            <label for="yrsSchool" class="has-help-text">Years in School</label>
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
        <br>
        <div class="form-group col-sm-4">
            <label>Do you</label>
            <input type="radio" class="radio-button" name="currRentOwn" value="own" <?php if ($app[0]['currRentOwn'] == "own") { echo 'checked'; } ?>><span>Own</span>
            <input type="radio" class="radio-button" name="currRentOwn" value="rent" <?php if ($app[0]['currRentOwn'] == "rent") { echo 'checked'; } ?>><span>Rent</span> 
        </div>
        <div class="form-group col-sm-4">
            <label>How long at current address?</label>
            <input type="text" class="half-input" id="currYears" name="currYears" value="<?php echo $app[0]['currYears']; ?>"><span class="half-input-span">Years</span>
            <input type="text" class="half-input" id="currMonths" name="currMonths" value="<?php echo $app[0]['currMonths']; ?>"><span class="half-input-span">Months</span>
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
            <br>
            <div class="form-group col-sm-4">
                <label>Ownership</label>
                <input type="radio" class="radio-button" name="prevRentOwn" value="own" <?php if ($app[0]['prevRentOwn'] == "own") { echo 'checked'; } ?>><span>Own</span>
                <input type="radio" class="radio-button" name="prevRentOwn" value="rent" <?php if ($app[0]['prevRentOwn'] == "rent") { echo 'checked'; } ?>><span>Rent</span> 
            </div>
            <div class="form-group col-sm-4">
                <label>How long at previous address?</label>
                <input type="text" class="half-input" id="prevYears" name="prevYears" value="<?php echo $app[0]['prevYears']; ?>"><span class="half-input-span">Years</span>
                <input type="text" class="half-input" id="prevMonths" name="prevMonths" value="<?php echo $app[0]['prevMonths']; ?>"><span class="half-input-span">Months</span>
            </div>
        </div>
        <br>
        <div class="form-group col-sm-4">
            <label>Different mailing address?</label>
            <input type="radio" class="radio-button" name="hasDiffMail" value="1" <?php if ($app[0]['hasDiffMail'] == "1") { echo 'checked'; } ?>><span>Yes</span>
            <input type="radio" class="radio-button" name="hasDiffMail" value="0" <?php if ($app[0]['hasDiffMail'] == "0") { echo 'checked'; } ?>><span>No</span> 
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
        
        
    </div> <?php /* end of table-container */ ?>
    
    <div class="col-sm-12" id="big-button-container">
        <div id="button-container">
            <button id="save-exit" class="square-button secondary">Save & Exit</button>
            <button id="save-continue" class="square-button primary">Save & Continue</button>
        </div>
        <?php /*
        <div id="submit-div">
            <div id="submit-div-text">Submit Application As-Is ></div>
        </div>
        */ ?>
    </div> 
</div>
    
    
