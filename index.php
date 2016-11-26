<?php $pageTitle = "Standing Rock Mortgage | Pipeline"; ?>
<?php include 'inc/header.php'; ?>
<?php //$appId =  $_SESSION["appId"]; ?>
<?php //$email =  $_SESSION["email"]; ?>

<?php
/******************************************************
 * QUERIES
 ******************************************************/
?>
<?php
    try {
        $results = $db->query("SELECT * FROM app_tbl;" );
    } catch (Exception $e) {
        echo "Could not connect to database: " . $e->getMessage();
        exit;
    }
    $app = $results->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="col-sm-12">
    <table class="table">
        <tr>
            <th>Borrower</th>
            <th>Type</th>
            <th>Address</th>
            <th>Email</th>
            <th>Close Date</th>
        </tr>
        
        <?php for($x=0; $x<sizeof($app); $x++) { ?>
        <tr id="<?php echo $app[$x]['id']; ?>">
            <td ><?php echo $app[$x]['firstName'] . " " . $app[$x]['lastName']; ?></td>
            <td><?php echo $app[$x]['loanPurpose']; ?></td>
            <td><?php echo $app[$x]['subjAddress'] . " " . $app[$x]['subjCity'] . ", " . $app[$x]['subjState'] . " " . $app[$x]['subjZip']; ?></td>
            <td></td>
        </tr>
        <?php } ?>
    
    </table>

</div>

<?php include 'inc/footer.php'; ?>


<?php
/******************************************************
 * JAVASCRIPT
 ******************************************************/
?>

<script type="text/javascript">
	$(document).ready(function() {
        
        console.log("javascript loaded (src: index.php)");
            

		// COBO
        $("tr").click(function() {
            $id = $(this).attr('id');
            //alert($id);
            window.location.assign('page-loan.php?id=' + $id
)
        });
        
		
	}); //$(document).ready(function()
</script>