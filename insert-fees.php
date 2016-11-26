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
$appId = 37;

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
     * A. ORGINATION CHARGES
     ***********************************/
    ?>

    <div class="col-sm-12 section-header"><h1>A. Origination Charges</h1></div>

    <div class="form-group col-sm-3">Description</div>
    <div class="form-group col-sm-2">Paid to</div>
    <div class="form-group col-sm-3">Company Name</div>
    <div class="form-group col-sm-2">Amount</div>
    <div class="form-group col-sm-2">PFC/F/POC/FIN</div>
    
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="col-sm-12" id="addChkSav<?php echo $x; ?>"><button id="addChkSavBtn<?php echo $x; ?>" class="square-button secondary">Add Another</button></div>
    
    <?php
    /***********************************
     * B. SERVICES YOU CANNOT SHOP FOR
     ***********************************/
    ?>
    <div class="col-sm-12 section-header"><h1>B. Services You Cannot Shop For</h1></div>
    
    <div class="form-group col-sm-3">Description</div>
    <div class="form-group col-sm-2">Paid to</div>
    <div class="form-group col-sm-3">Company Name</div>
    <div class="form-group col-sm-2">Amount</div>
    <div class="form-group col-sm-2">PFC/F/POC/FIN</div>
    
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="col-sm-12" id="addChkSav<?php echo $x; ?>"><button id="addChkSavBtn<?php echo $x; ?>" class="square-button secondary">Add Another</button></div>
     <?php
    /***********************************
     * C. SERVICES YOU CAN SHOP FOR
     ***********************************/
    ?>

    <div class="col-sm-12 section-header"><h1>C. Services You Can Shop For</h1></div>
    
    <div class="form-group col-sm-3">Description</div>
    <div class="form-group col-sm-2">Paid to</div>
    <div class="form-group col-sm-3">Company Name</div>
    <div class="form-group col-sm-2">Amount</div>
    <div class="form-group col-sm-2">PFC/F/POC/FIN</div>
    
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="col-sm-12" id="addChkSav<?php echo $x; ?>"><button id="addChkSavBtn<?php echo $x; ?>" class="square-button secondary">Add Another</button></div>
    
    <?php
    /***********************************
     * E. TAXES AND OTHER GOVERNMENT FEES
     ***********************************/
    ?>

    <div class="col-sm-12 section-header"><h1>E. Taxes and Government Fees</h1></div>
    
    <div class="form-group col-sm-3">Description</div>
    <div class="form-group col-sm-2">Paid to</div>
    <div class="form-group col-sm-3">Company Name</div>
    <div class="form-group col-sm-2">Amount</div>
    <div class="form-group col-sm-2">PFC/F/POC/FIN</div>
    
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="col-sm-12" id="addChkSav<?php echo $x; ?>"><button id="addChkSavBtn<?php echo $x; ?>" class="square-button secondary">Add Another</button></div>
    
    <?php
    /***********************************
     * F. PREPAIDS
     ***********************************/
    ?>

    <div class="col-sm-12 section-header"><h1>F. Prepaids</h1></div>
    
    <div class="form-group col-sm-3">Description</div>
    <div class="form-group col-sm-2">Paid to</div>
    <div class="form-group col-sm-3">Company Name</div>
    <div class="form-group col-sm-2">Amount</div>
    <div class="form-group col-sm-2">PFC/F/POC/FIN</div>
    
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="col-sm-12" id="addChkSav<?php echo $x; ?>"><button id="addChkSavBtn<?php echo $x; ?>" class="square-button secondary">Add Another</button></div>
    
    
    <?php
    /***********************************
     * G. INITIAL ESCROW PAYMENT AT CLOSING
     ***********************************/
    ?>

    <div class="col-sm-12 section-header"><h1>G. Intitial Escrow Payment at Closing</h1></div>
    
    <div class="form-group col-sm-3">Description</div>
    <div class="form-group col-sm-2">Per Month</div>
    <div class="form-group col-sm-3">For</div>
    <div class="form-group col-sm-2">Total</div>
    <div class="form-group col-sm-2">PFC/F/POC/FIN</div>
    
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="col-sm-12" id="addChkSav<?php echo $x; ?>"><button id="addChkSavBtn<?php echo $x; ?>" class="square-button secondary">Add Another</button></div>
    
    <?php
    /***********************************
     * H. OTHER
     ***********************************/
    ?>

    <div class="col-sm-12 section-header"><h1>H. Other</h1></div>
    
    <div class="form-group col-sm-3">Description</div>
    <div class="form-group col-sm-2">Paid to</div>
    <div class="form-group col-sm-3">Company Name</div>
    <div class="form-group col-sm-2">Amount</div>
    <div class="form-group col-sm-2">PFC/F/POC/FIN</div>
    
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="firstName" value="<?php echo $app[0]['firstName']; ?>"></div>
    <div class="form-group col-sm-2">
        <select id="refiPurpose">
            <option value=""></option>
            <option value="Broker" <?php if ($app[0]['refiPurpose'] == "Cash Out") { echo "selected"; } ?>>Broker</option>
            <option value="Lender" <?php if ($app[0]['refiPurpose'] == "Lower Payment") { echo "selected"; } ?>>Lender</option>
            <option value="Investor" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Investor</option>
            <option value="Affiliate" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Affiliate</option>
            <option value="Other" <?php if ($app[0]['refiPurpose'] == "Change Term") { echo "selected"; } ?>>Other</option>
        </select>
    </div>
    <div class="form-group col-sm-3"><input type="text" class="inputs" id="lastName" value="<?php echo $app[0]['lastName']; ?>"></div>
    <div class="form-group col-sm-2"><input type="text" id="suffix" value="<?php echo $app[0]['suffix']; ?>"></div>
    <div class="form-group col-sm-2">
        <input type="checkbox" class="check-box" id="pfc" data-tip="pfc" <?php if ($$app[0]['pfc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="f" data-tip="f" <?php if ($$app[0]['f'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="poc" data-tip="Paid outside of Closing" <?php if ($$app[0]['poc'] == "1") { echo 'checked'; } ?>>
        <input type="checkbox" class="check-box" id="fin" data-tip="Financed" <?php if ($$app[0]['fin'] == "1") { echo 'checked'; } ?>>
    </div>
    
    <div class="col-sm-12" id="addChkSav<?php echo $x; ?>"><button id="addChkSavBtn<?php echo $x; ?>" class="square-button secondary">Add Another</button></div>
    
    
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
        
        
        console.log("javascript loaded (src: insert-fees.php)");
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
        
        
        
	}); //$(document).ready(function()
    
</script>