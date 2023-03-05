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
// PH TABLE===============

       $sql = "SELECT * FROM `phreport_tbl`";
       $result = $conn->query($sql);

       while($row = $result-> fetch_assoc()){         
        if ($sql >= 0){                                      
            $conn->query("UPDATE `phreport_tbl` set dbstatus = 'ACIDIC',`diagnosis` = 'Change Water!' WHERE `phvalue` BETWEEN 0.1 and 5.9 ");

           
        }
       }


       $sql2 = "SELECT * FROM `phreport_tbl`";
       $result2 = $conn->query($sql2);

       while($row2 = $result2-> fetch_assoc()){  
        if ($sql2 >= 0){
            $conn->query("UPDATE `phreport_tbl` set  dbstatus = 'ALKALINE',`diagnosis` = 'Change Water!' WHERE `phvalue` BETWEEN 9.0 and 14 ");

            
           

        } 
       } 


       $sql3 = "SELECT * FROM `phreport_tbl`";
       $result3 = $conn->query($sql3);

       while($row3 = $result3-> fetch_assoc()){  
        if ($sql3 >= 0){
            $conn->query("UPDATE `phreport_tbl` set  dbstatus = 'NEUTRAL',`diagnosis` = 'Nothing' WHERE `phvalue` BETWEEN 6.0 and 8.8 ");

           

        } 
       } 



       
       $sql34 = "SELECT * FROM `phreport_tbl`";
       $result34 = $conn->query($sql34);

       while($row34 = $result34-> fetch_assoc()){  
        if ($sql34 >= 0){
          
            $conn->query("UPDATE `phreport_tbl` set `phstatus` = 'Acid Death Point' WHERE `phvalue` BETWEEN 0.1 and 3.9 ");

            $conn->query("UPDATE `phreport_tbl` set `phstatus` = 'No Reproduction & Slow Growth' WHERE `phvalue` BETWEEN 4.0 and 6.4 ");

            $conn->query("UPDATE `phreport_tbl` set `phstatus` = 'Desirable Range of pH' WHERE `phvalue` BETWEEN 6.5  and 8.9 ");

            $conn->query("UPDATE `phreport_tbl` set `phstatus` = 'No Reproduction & Slow Growth' WHERE `phvalue` BETWEEN 9.0 and 10.0");

            $conn->query("UPDATE `phreport_tbl` set `phstatus` = 'Alkaline Death Point' WHERE `phvalue` BETWEEN 11.0 and 14.0");

           


        } 
       } 


       // TEMP TABLE===============

?>


