<?php
  include 'conn.php';
  
  if (!empty($_GET)) {
    $id = $_GET["sensor"];
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'SELECT date, dbstatus FROM phreport_tbl WHERE sensor = ? AND DATE LIKE CURRENT_DATE ORDER BY time desc LIMIT 1';
    
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    
    Database::disconnect();
    while($data = $q->fetch(PDO::FETCH_ASSOC)) {
        echo $data['dbstatus'];
    }
  }
?>