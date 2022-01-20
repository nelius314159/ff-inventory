<?php

$GLOB = array( 'repos' =>
	       array ( 'DATA_DIR'               => '/var/ff_inventory_nodes',
		       'NODE_ID_FN'             => 'node_id.csv',
		       'NODE_DATA_FN'           => 'node__data.json'
		       )
	       );
		       
  

//--- Error_codes

//---



//-------------------------------------------------------------------------------------------- 
function init() {
    global $GLOB;
 
    // repos existance checking
    if (file_exists( $GLOB ['repos'] ['DATA_DIR'])) {
	echo "repos, DATA_DIR exists\n";
    } esle {
	
	
	
    
    echo "hello";
    

    

    return 0;
}
//-------------------------------------------------------------------------------------------- 

	      
	      




function db () {
    

//user: bunpeest651a64r
//pass: 33vj543rlcr978
$vhserver_IP = "41.85.15.61:3306"; // replication db (reporting)


define ('DBUSERSLD','bunpeest651a64r');
define ('DBPASSSLD','33vj543rlcr978');
define ('DBNAMESLD','frogfootdb');



//    $vhserver_IP = "41.85.15.50:3306";  // jhb-solid-db01

    $vhserver_db_unsername = DBUSERSLD ; 
    $vhserver_db_password  = DBPASSSLD ; 
    $vhserver_db_name = DBNAMESLD ; 
    //$mastertable      = "test1";
    

    // Connect to DB-server
    $link = mysqli_connect($vhserver_IP, $vhserver_db_unsername, $vhserver_db_password, $vhserver_db_name);

    if (!$link) {

	echo "Could not connect to db: SQL Error: " . mysql_error();
	return 1;
    }
    else {
	echo "Opened\n";
    }

// mysqli_connect($host, $username, $pass, "your_database");

    return 0;
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