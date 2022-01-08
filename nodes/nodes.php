<?php

include('nodes-lib.php');


// Nodes structure.
// - The Id is the primary key.
// - Work wth exact Solid field names and data by default. E.g. node node name ambiguityes. Use Solid exact.

$nodes = array(
	       "10404" => array(
			       "Node Name"             => "Caledon Node",
			       "Node Room GPS"         => "-34.228356,19.423488"
				),
	       "10400" => array(
			       "Node Name"             => "Swellendam Node",
			       "Node Room GPS"         => "-34.024324,20.444078"
				)
	       );
	       
	       
			
			 
//-------------------------------------------------------------------------------------------- 
 
  


echo "Start.\n";

print_r($nodes);





echo "End.\n";
?>