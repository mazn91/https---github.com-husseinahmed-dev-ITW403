<?php
require_once 'core/init.php';

//echo Config::get('mysql/host');

DB::getInstance();
DB::getInstance();


// $user = DB::getInstance()->get('USERS', array('USER_NAME', '=', 'mazn'));

// if(!$user->count()){
// 	echo 'Not Okay';
// }else{
// 	echo 'ok';
// }
