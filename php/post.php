<?php
//   include 'conn.php';
//   //Get current date and time
//   date_default_timezone_set('Asia/Manila');
//   $d = date("Y-m-d");
//   $t = date("H:i:s");

//   if (!empty($_POST['watertemp'])) {
//     $waterTemp = $_POST["watertemp"];
//     $pdo = Database::connect();
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     $sql = "INSERT INTO waterreporttbl (watertemp, date, time) VALUES ('".$waterTemp."', '".$d."', '".$t."')";
    
//     $q = $pdo->prepare($sql);
//     $q->execute(array($waterTemp,$d,$t));
    
//     Database::disconnect();
//   }
?>

<?php
//Creates new record as per request
    //Connect to database
    $servername = "localhost";		//example = localhost or 192.168.0.0
    $username = "root";		//example = root
    $password = "";	
    $dbname = "aquaponic_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
  //Get current date and time
  date_default_timezone_set('Asia/Manila');
  $d = date("Y-m-d");
  $t = date("H:i:s");

  if (!empty($_POST['watertemp'])) {
    $waterTemp = $_POST["watertemp"];
    $sql = "INSERT INTO waterreporttbl (watertemp, date, time) VALUES ('".$waterTemp."', '".$d."', '".$t."')";
    
    if ($conn->query($sql) === TRUE) {
        echo "OK";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  
  if (!empty($_POST['phvalue'])) {
    $PHTemp = $_POST["phvalue"];
    $sql = "INSERT INTO phreport_tbl (phvalue, date, time) VALUES ('".$PHTemp."', '".$d."', '".$t."')";
    
    if ($conn->query($sql) === TRUE) {
        echo "OK";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
?>