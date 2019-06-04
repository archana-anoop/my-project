<?php
require_once('include/main1.php');
if( isset($_POST['sendRequest'])){
	$where=array('sender_id'=>$_POST['sid'],'receiver_id'=>$_POST['rid']);
	$update_array=array('receiver_status'=>'1');
	$result = $db->updateRow($table='friend_request',$update_array,$where); 
	if($result>0){	
	$where=array('id'=>$_POST['rid']);
	$result= $db->getRow($table='users',$where);
	foreach($result as $userdata){
	$sender_name=$userdata['name'];}
	$userdata=array('sender_id'=>$_POST['rid'],'receiver_id'=>$_POST['sid'],'receiver_status'=>'1','sender_name'=>$sender_name,'sender_status'=>'1');
	$result = $db->insertRow($table='friend_request',$insert_array=$userdata);
	echo "Accept friend";
	}
	else{
		echo "Not accepted";
	}	
}

?>