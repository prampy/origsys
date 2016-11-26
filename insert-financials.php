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
        $results = $db->query("SELECT * FROM borrower_tbl WHERE id='" . $borrowerId . "';" );
    } catch (Exception $e) {
        echo "Could not connect to database!: " . $e->getMessage();
        exit;
    }
    $borrower = $results->fetchAll(PDO::FETCH_ASSOC);
?>

<?php
/******************************************************
 * WEBSITE
 ******************************************************/
?>
<div class="col-sm-12" id="app-wrapper">

    <?php
    /***********************************
     * INCOME
     ***********************************/
    ?>
    <div class="col-sm-12 section-header"><h1>Income</h1></div>
    <div class="col-sm-2 section-header"><!-- spacer --></div>
    <div class="col-sm-2 section-header" style="text-align: center;"><h3>Borrower</h3></div>
    <div class="col-sm-2 section-header cobo" style="text-align: center;"><h3>CoBorrower</h3></div>
    <div class="col-sm-2 section-header cobo" style="text-align: center;"><h3>Total</h3></div>
    
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label for="subjAddress">Base Income</label></div>
        <div class="col-sm-1"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
        <div class="col-sm-1"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
        <div class="col-sm-1"><input type="text" id="subjAddress" placeholder="$0.00" value="<?php echo $app[0]['subjAddress']; ?>"></div>
    </div>
    
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label for="subjAddress">Overtime</label></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" placeholder="$0.00" value="<?php echo $app[0]['subjAddress']; ?>"></div>
    </div>
    
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label for="subjAddress">Bonus</label></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" placeholder="$0.00" value="<?php echo $app[0]['subjAddress']; ?>"></div>
    </div>
    
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label for="subjAddress">Commission</label></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" placeholder="$0.00" value="<?php echo $app[0]['subjAddress']; ?>"></div>
    </div>
    
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label for="subjAddress">Interest/Dividends</label></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" placeholder="$0.00" value="<?php echo $app[0]['subjAddress']; ?>"></div>
    </div>
    
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label for="subjAddress">Net Rent</label></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" placeholder="$0.00" value="<?php echo $app[0]['subjAddress']; ?>"></div>
    </div>
    
    <?php
    /***********************************
     * EXPENSES
     ***********************************/
    ?>
    <div class="col-sm-12 section-header"><h1>Expenses</h1></div>
    
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label for="subjAddress">Base Income</label></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" placeholder="$0.00" value="<?php echo $app[0]['subjAddress']; ?>"></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" placeholder="$0.00" value="<?php echo $app[0]['subjAddress']; ?>"></div>
    </div>
    
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label for="subjAddress">Overtime</label></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
    </div>
    
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label for="subjAddress">Bonus</label></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
    </div>
    
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label for="subjAddress">Commission</label></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
    </div>
    
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label for="subjAddress">Interest/Dividends</label></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
    </div>
    
    <div class="form-group col-sm-12">
        <div class="col-sm-2"><label for="subjAddress">Net Rent</label></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
        <div class="col-sm-2"><input type="text" id="subjAddress" value="<?php echo $app[0]['subjAddress']; ?>"></div>
    </div>
    
    <?php
    /***********************************
     * CHECKING AND SAVINGS
     ***********************************/
    ?>
    <div class="col-sm-12 section-header"><h1>Assets</h1></div>
    <div class="col-sm-12 section-header"><h2>Checking and Savings Accounts</h2></div>
    
    
    <div class="col-sm-12">
        <div class="col-sm-1"></div>
        <div class="col-sm-2">Name</div>
        <div class="col-sm-2">Type</div>
        <div class="col-sm-2">Account</div>
        <div class="col-sm-2">Number</div>
        <div class="col-sm-1"></div>
    </div>
    <div class="col-sm-12">
        <div class="col-sm-1"></div>
        <div class="col-sm-2">Bank of America</div>
        <div class="col-sm-2">Checking</div>
        <div class="col-sm-2">123459876</div>
        <div class="col-sm-2">$ 100,000.00</div>
        <div class="col-sm-1"></div>
    </div>
    
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <table class="table table-hover">
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Account Number</th>
                <th>Amount</th>
            </tr>
            <tr>
                <td>Bank of America</td>
                <td>Checking</td>
                <td>1235432</td>
                <td>$1,000.00</td>
            </tr>
            <tr>
                <td>Bank of America</td>
                <td>Checking</td>
                <td>1235432</td>
                <td>$1,000.00</td>
            </tr>
        </table>
    </div>
    <div class="col-sm-1"></div>
        
    
    

    <?php /*
    <div class="multi-question-container">

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
    */ ?>
    <?php
    /***********************************
     * STOCKS AND BONDS
     ***********************************/
    ?>
    <div class="col-sm-12 section-header"><h2>Stocks and Bonds</h2></div>
    
   
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
    

    <?php
    /***********************************
     * OTHER ASSETS
     ***********************************/
    ?>
    <div class="col-sm-12 section-header"><h2>Other Assets</h2></div>
    
   

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

    <div class="col-sm-12 section-header"><h1>Liabilities</h1></div>
    
    

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
    
 
    
</div> <!-- ebd app-wrapper -->
    
    

    
    
<?php
/******************************************************
 * JAVASCRIPT
 ******************************************************/
?>

<script type="text/javascript">
	$(document).ready(function() {
		
        console.log("javascript loaded (src: insert-financials.php)");
        
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
		//* SAVE & CONTINUE BUTTON
		//**********************************************
		
        $("#save-continue").click(function() {
            var $location = '<?php echo $declarations_page; ?>';
            saveInputFields();
            goTo($location);
		}); //$("#save-continue").click(function()
        
        $("#save-exit").click(function() {
			$location = '<?php echo $homepage; ?>';
            saveInputFields();
            goTo($location);
		}); //$("#save-continue").click(function()
        
        $("#submit-div").click(function() {
            var $location = '<?php echo $app_submitted_page; ?>';
            saveInputFields();
            submitApplication('<?php echo $email; ?>','<?php echo $borrowerId; ?>','<?php echo $appId; ?>'); //jsFunction.php
            goTo($location); //jsFunction.php
		}); //$("#save-continue").click(function()
        
        //**********************************************
		//* saveInputFields() FUNCTION
        //* saveFields is called when either Save & Close or Save & Continue is called
        //* this will assign all input fields on the screen to variables and make the ajax call
        //* on success it will direct the user to the $location that was passed to it in the arguments
		//**********************************************
        
		function saveInputFields() {
            
            //Assign input values to javascript variables
			var $chkSavAcctType1 = $("input[name=chkSavAcctType1]:checked").val();
            var $chkSavBankName1 = $("#chkSavBankName1").val();
            var $chkSavAcctNum1 = $("#chkSavAcctNum1").val();
            var $chkSavAcctBal1 = $("#chkSavAcctBal1").val();
            var $chkSavAcctType2 = $("input[name=chkSavAcctType2]:checked").val();
            var $chkSavBankName2 = $("#chkSavBankName2").val();
            var $chkSavAcctNum2 = $("#chkSavAcctNum2").val();
            var $chkSavAcctBal2 = $("#chkSavAcctBal2").val();
            var $chkSavAcctType3 = $("input[name=chkSavAcctType3]:checked").val();
            var $chkSavBankName3 = $("#chkSavBankName3").val();
            var $chkSavAcctNum3 = $("#chkSavAcctNum3").val();
            var $chkSavAcctBal3 = $("#chkSavAcctBal3").val();
            var $chkSavAcctType4 = $("input[name=chkSavAcctType4]:checked").val();
            var $chkSavBankName4 = $("#chkSavBankName4").val();
            var $chkSavAcctNum4 = $("#chkSavAcctNum4").val();
            var $chkSavAcctBal4 = $("#chkSavAcctBal4").val();
            
            var $stkBndAcctType1 = $("#stkBndAcctType1").val();
            var $stkBndName1 = $("#stkBndName1").val();
            var $stkBndValue1 = $("#stkBndValue1").val();
            var $stkBndAcctType2 = $("#stkBndAcctType2").val();
            var $stkBndName2 = $("#stkBndName2").val();
            var $stkBndValue2 = $("#stkBndValue2").val();
            var $stkBndAcctType3 = $("#stkBndAcctType3").val();
            var $stkBndName3 = $("#stkBndName3").val();
            var $stkBndValue3 = $("#stkBndValue3").val();
            var $stkBndAcctType4 = $("#stkBndAcctType4").val();
            var $stkBndName4 = $("#stkBndName4").val();
            var $stkBndValue4 = $("#stkBndValue4").val();
            
            var $othAsstType1 = $("#othAsstType1").val();
            var $othAsstName1 = $("#othAsstName1").val();
            var $othAsstValue1 = $("#othAsstValue1").val();
            var $othAsstType2 = $("#othAsstType2").val();
            var $othAsstName2 = $("#othAsstName2").val();
            var $othAsstValue2 = $("#othAsstValue2").val();
            var $othAsstType3 = $("#othAsstType3").val();
            var $othAsstName3 = $("#othAsstName3").val();
            var $othAsstValue3 = $("#othAsstValue3").val();
            var $othAsstType4 = $("#othAsstType4").val();
            var $othAsstName4 = $("#othAsstName4").val();
            var $othAsstValue4 = $("#othAsstValue4").val();
            
            var $lifeInsCashVal = $("#lifeInsCashVal").val();
            var $lifeInsFaceVal = $("#lifeInsFaceVal").val();
            var $vestedRetirement = $("#vestedRetirement").val();
            
            var $liabName1 = $("#liabName1").val();
            var $liabAcctNum1 = $("#liabAcctNum1").val();
            var $liabPayment1 = $("#liabPayment1").val();
            var $liabBal1 = $("#liabBal1").val();
            var $liabName2 = $("#liabName2").val();
            var $liabAcctNum2 = $("#liabAcctNum2").val();
            var $liabPayment2 = $("#liabPayment2").val();
            var $liabBal2 = $("#liabBal2").val();
            var $liabName3 = $("#liabName3").val();
            var $liabAcctNum3 = $("#liabAcctNum3").val();
            var $liabPayment3 = $("#liabPayment3").val();
            var $liabBal3 = $("#liabBal3").val();
            var $liabName4 = $("#liabName4").val();
            var $liabAcctNum4 = $("#liabAcctNum4").val();
            var $liabPayment4 = $("#liabPayment4").val();
            var $liabBal4 = $("#liabBal4").val();
            var $liabName5 = $("#liabName5").val();
            var $liabAcctNum5 = $("#liabAcctNum5").val();
            var $liabPayment5 = $("#liabPayment5").val();
            var $liabBal5 = $("#liabBal5").val();
            var $liabName6 = $("#liabName6").val();
            var $liabAcctNum6 = $("#liabAcctNum6").val();
            var $liabPayment6 = $("#liabPayment6").val();
            var $liabBal6 = $("#liabBal6").val();
            
            // set ajax inputs
            var $func = "update";
            var $tableName = "borrower_tbl";
            var $dataString = "chkSavAcctType1 = '" + $chkSavAcctType1 + "',chkSavBankName1 = '" + $chkSavBankName1 + "',chkSavAcctNum1 = '" + $chkSavAcctNum1 + "',chkSavAcctBal1 = '" + $chkSavAcctBal1 + "',chkSavAcctType2 = '" + $chkSavAcctType2 + "',chkSavBankName2 = '" + $chkSavBankName2 + "',chkSavAcctNum2 = '" + $chkSavAcctNum2 + "',chkSavAcctBal2 = '" + $chkSavAcctBal2 + "',chkSavAcctType3 = '" + $chkSavAcctType3 + "',chkSavBankName3 = '" + $chkSavBankName3 + "',chkSavAcctNum3 = '" + $chkSavAcctNum3 + "',chkSavAcctBal3 = '" + $chkSavAcctBal3 + "',chkSavAcctType4 = '" + $chkSavAcctType4 + "',chkSavBankName4 = '" + $chkSavBankName4 + "',chkSavAcctNum4 = '" + $chkSavAcctNum4 + "',chkSavAcctBal4 = '" + $chkSavAcctBal4 + "',stkBndAcctType1 = '" + $stkBndAcctType1 + "',stkBndName1 = '" + $stkBndName1 + "',stkBndValue1 = '" + $stkBndValue1 + "',stkBndAcctType2 = '" + $stkBndAcctType2 + "',stkBndName2 = '" + $stkBndName2 + "',stkBndValue2 = '" + $stkBndValue2 + "',stkBndAcctType3 = '" + $stkBndAcctType3 + "',stkBndName3 = '" + $stkBndName3 + "',stkBndValue3 = '" + $stkBndValue3 + "',stkBndAcctType4 = '" + $stkBndAcctType4 + "',stkBndName4 = '" + $stkBndName4 + "',stkBndValue4 = '" + $stkBndValue4 + "',othAsstType1 = '" + $othAsstType1 + "', othAsstName1 = '" + $othAsstName1 + "',othAsstValue1 = '" + $othAsstValue1 + "',othAsstType2 = '" + $othAsstType2 + "', othAsstName2 = '" + $othAsstName2 + "',othAsstValue2 = '" + $othAsstValue2 + "',othAsstType3 = '" + $othAsstType3 + "', othAsstName3 = '" + $othAsstName3 + "',othAsstValue3 = '" + $othAsstValue3 + "',othAsstType4 = '" + $othAsstType4 + "', othAsstName4 = '" + $othAsstName4 + "',othAsstValue4 = '" + $othAsstValue4 + "',lifeInsCashVal = '" + $lifeInsCashVal + "',lifeInsFaceVal = '" + $lifeInsFaceVal + "',vestedRetirement = '" + $vestedRetirement + "',liabName1 = '" + $liabName1 + "',liabAcctNum1 = '" + $liabAcctNum1 + "',liabPayment1 = '" + $liabPayment1 + "',liabBal1 = '" + $liabBal1 + "',liabName2 = '" + $liabName2 + "',liabAcctNum2 = '" + $liabAcctNum2 + "',liabPayment2 = '" + $liabPayment2 + "',liabBal2 = '" + $liabBal2 + "',liabName3 = '" + $liabName3 + "',liabAcctNum3 = '" + $liabAcctNum3 + "',liabPayment3 = '" + $liabPayment3 + "',liabBal3 = '" + $liabBal3 + "',liabName4 = '" + $liabName4 + "',liabAcctNum4 = '" + $liabAcctNum4 + "',liabPayment4 = '" + $liabPayment4 + "',liabBal4 = '" + $liabBal4 + "',liabName5 = '" + $liabName5 + "',liabAcctNum5 = '" + $liabAcctNum5 + "',liabPayment5 = '" + $liabPayment5 + "',liabBal5 = '" + $liabBal5 + "',liabName6 = '" + $liabName6 + "',liabAcctNum6 = '" + $liabAcctNum6 + "',liabPayment6 = '" + $liabPayment6 + "',liabBal6 = '" + $liabBal6 + "'";
            var $columnName = "id";
            var $uniqueId = '<?php echo $borrowerId; ?>';
            
            //alert($dataString); 
            
            updateDatabase($func, $tableName, $dataString, $columnName, $uniqueId); //jsFunction.php
            
		} //end saveInputFields()
		
	}); //$(document).ready(function()
</script>