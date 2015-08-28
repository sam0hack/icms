<?php

class sessionchk{

protected $usertype;

public function __construct($usertype){

$this->usertype = $usertype;

}

function is_counselor()
{

$ut=$this->usertype;
if ($ut=='con') {
	return true;


}else{

		return false;

  }
}
function is_client()
{

$ut=$this->usertype;
if ($ut=='cli') {
	return true;


}else{

		return false;

  }


}




function is_admin()
{

$ut=$this->usertype;
if ($ut=='admin') {
	return true;


}else{

    return false;

  }


}








 












}
?>