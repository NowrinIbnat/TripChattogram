<?php 

require_once ('../model/model.php');

function fetchAllUsers(){
	//echo 'success';
	return showAllUsers();

}
function fetchUsers($username){
	return showUsers($username);

}

function fetchUsersByEmail($email){
	return showUsersByEmail($email);

}

function fetchEmployee($username){
	return showEmployee($username);

}


?>