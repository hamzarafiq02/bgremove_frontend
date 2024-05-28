<?php 


// Stripe API configuration  
define('API_USERNAME', 'sb-nzhxe9035183_api1.business.example.com');
define('API_PASSWORD', 'B3KKSS4KCQ57QJEC');
define('API_SIGNATURE', 'A6L.Ma.G4eq2sl5jkSwAzcDKTgPlA0L2Sq9.TKMCqITU2qD6DLolO6Cq');
define('PP_RETURN', 'http://saltofhealth.test/ppreturn.php');
define('PP_CANCEL', 'http://saltofhealth.test/ppcancel.php');

$servername = "localhost";
$username = "u885246104_photodit";
$password = "Photodit@123";
$database = 'u885246104_photodit';

// Connect with the database  
$conn = mysqli_connect($servername, $username, $password, $database); 
