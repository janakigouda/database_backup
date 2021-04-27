<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $dbname="indian_location";

   $backup_file = $dbname . date("Y-m-d-H-i-s") . '.gz';
   echo $command = "mysqldump --opt -h $dbhost -u $dbuser -p $dbpass ". "test_db | gzip > $backup_file";
   
   exec($command);
?>