<?php
include_once "includes.inc.php";
include_once "session.inc.php";

$page="withdrawal_history";


$withdrawal_rslt = $objCore->DBConn->GetArray("SELECT * FROM withdrawal WHERE user_id='".$user_id."' ");
//print_r($withdrawal_rslt);


$objCore->smarty->assign(array('withdrawal_rslt'=>$withdrawal_rslt, 'showMsg'=>$showMsg,'empty_msg'=>$empty_msg));
include "footer.php";
?>