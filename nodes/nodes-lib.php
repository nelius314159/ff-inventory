<?php

//$DATA_DIR = '/var/ff-inventory';


define ('DBUSERSLD','bunpeest651a64r');
define ('DBPASSSLD','33vj543rlcr978');
define ('DBNAMESLD','frogfootdb');



    $vhserver_IP = "41.85.15.50:3306";  // jhb-solid-db01

    $vhserver_db_unsername = DBUSERSLD ; 
    $vhserver_db_password  = DBPASSSLD ; 
    $vhserver_db_name = DBNAMESLD ; 
    //$mastertable      = "test1";
    

    // Connect to DB-server
    $link = mysql_connect($vhserver_IP, $vhserver_db_unsername, $vhserver_db_password);

    if (!$link) {

	echo "Could not connect to db: SQL Error: " . mysql_error();
	return 1;
    }
    else {
	echo "Opened\n";
    }





//-------------------------------------------------------------------------------------------- 


//-------------------------------------------------------------------------------------------- 
// temps

// $arr1 = array ('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
// file_put_contents("array.json",json_encode($arr1));
# array.json => {"a":1,"b":2,"c":3,"d":4,"e":5}
//$arr2 = json_decode(file_get_contents('array.json'), true);
#$arr1 === $arr2 # => true
//print_r($arr2);






//-------------------------------------------------------------------------------------------- 
  

  
  
?>