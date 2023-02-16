<?php
                        //Creates new record as per request
                        //Connect to database
                        $hostname = "localhost";		//example = localhost or 192.168.0.0
                        $username = "root";		//example = root
                        $password = "";	
                        $dbname = "aquaponic_db";
                        // Create connection
                        $conn = mysqli_connect($hostname, $username, $password, $dbname);
                        // Check connection
                        if (!$conn) {
                            die("Connection failed !!!");
                        } 

                    ?>



<?php
       $sql = "SELECT * FROM `phreport_tbl`";
       $result = $conn->query($sql);

       while($row = $result-> fetch_assoc()){         
        if ($sql >= 0){                                      
            $conn->query("UPDATE `phreport_tbl` set phstatus = 'Not Safe (Acidic)' , dbstatus = 'ACIDIC' WHERE `phvalue` BETWEEN 0 and 5.9 ");
        }
       }


       $sql2 = "SELECT * FROM `phreport_tbl`";
       $result2 = $conn->query($sql2);

       while($row2 = $result2-> fetch_assoc()){  
        if ($sql2 >= 0){
            $conn->query("UPDATE `phreport_tbl` set `phstatus` = 'Not Safe (Alkaline)' , dbstatus = 'ALKALINE' WHERE `phvalue` BETWEEN 9.0 and 14 ");

        } 
       } 


       $sql3 = "SELECT * FROM `phreport_tbl`";
       $result3 = $conn->query($sql3);

       while($row3 = $result3-> fetch_assoc()){  
        if ($sql3 >= 0){
            $conn->query("UPDATE `phreport_tbl` set `phstatus` = 'Fish Safe (Neutral)', dbstatus = 'NEUTRAL' WHERE `phvalue` BETWEEN 6.0 and 8.8 ");

        } 
       } 
?>


