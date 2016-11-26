<?php session_start(); ?>
<?php date_default_timezone_set('America/Chicago'); ?>

<html>
<head>
	<?php echo "<title>" . $pageTitle . "</title>"; ?>
	<?php include 'inc/config.php'; ?>

	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<?php /*<link rel="stylesheet" type="text/css" href="css/style.css"> */ ?>
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">    

	<?php require_once("inc/phpmailer/class.phpmailer.php"); ?>
	<?php include 'inc/jsfunctions.php'; ?>
    <?php include 'inc/phpfunctions.php'; ?>
    
    <?php
    //checks for valid user login, if not redirects to login page
    //checkSession(); //phpfunctions.php
    ?>

</head>	
<body>
	<header>
        <nav class="navbar">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo $homepage; ?>"><h1>Standing Rock Mortgage</h1></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo $root_path; ?>">Pipeline</a></li>
                        <li><a href="<?php echo $tenants_page; ?>">Docs</a></li>
                        <?php /*<li><a href="<?php echo $payments_page; ?>">Payments</a></li> */ ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo "preston@rampy.co"/*$_SESSION["email"]*/; ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Account</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        
    </header>
    
    <div id="main-wrapper">