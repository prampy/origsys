<script type="text/javascript">
    
    /************************************************************************
     * GOTO
     ************************************************************************/
    function goTo($location) {
        window.location.assign($location);
    } // end goTo()
     
    /************************************************************************
     * UPDATE DATABASE
     ************************************************************************/
	
	function updateDatabase($func, $tableName, $dataString, $columnName, $uniqueId) {		
        $.ajax({
            url: 'inc/ajax.php',
            data: { func: $func, tableName: $tableName, dataString: $dataString, columnName: $columnName, uniqueId: $uniqueId },
            datatype: 'text',
            type: 'GET',
            success: function () {
                //return;
            },
        });//ajax 
    } // end updateDatabase()
    
    /************************************************************************
     * CREATE COBORROWER
     ************************************************************************/
    function createCobo($coboEmail, $appId) {
        // Makes an ajax call. Which is where all the action happens
        
        $.ajax({
            url: 'inc/ajax.php',
            data: { func: "createCobo", email: $coboEmail, appId: $appId },
            datatype: 'text',
            type: 'GET',
            success: function () {
                //return;
            },
        });//ajax 
    }
    
    /************************************************************************
     * SUBMIT APPLICATION
     ************************************************************************/
    function submitApplication($email, $borrowerId, $appId) {
        
        $.ajax({
            url: 'inc/ajax.php',
            data: { func: "submitApp", email: $email, borrowerId: $borrowerId, appId: $appId },
            datatype: 'text',
            type: 'GET',
            success: function () {
                //do nothing 
            },
        });// end ajax
    
        /*
        //send email
        console.log("Application Submitted. Sending Email.");
        var $subject = "Application Submitted";
        var $body = "Email: " + $email + "<br> Borrower Id: " + $borrowerId + "<br> App Id: " + $appId;
        
        alert($subject);
        alert($body);
        
        $.ajax({
            url: 'inc/ajax.php',
            data: { func: "sendEmail", subject: $subject, body: $body },
            datatype: 'text',
            type: 'GET',
            success: function () {
                // do nothing
            },
        });// end ajax
        */
    } // end submitApplication()
    
    /************************************************************************
     * HELP TEXT ACTIONS
     ************************************************************************/
    /*
    $(document).ready(function() {
        $(".help-container").hide();
        
        $(".has-help-text").click(function() {
            $(this).parent().siblings(".help-container").toggle();
        });
    });
    */
    /************************************************************************
     * END SESSION
     * calls function to run session_destroy()
     ************************************************************************/
    function endSession() {
       $.ajax({
            url: 'inc/ajax.php',
            data: { func: "endSession" },
            datatype: 'text',
            type: 'GET',
            success: function () {
                // do nothing
            },
        });// end ajax 
    }
    
    /************************************************************************
     * CALULATE DTI
     ************************************************************************/
    
    function calcDTI() {
        
    }
</script>