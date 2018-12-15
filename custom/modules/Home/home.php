<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$sugar_smarty=new Sugar_Smarty();
function fetch_Accounts(){
	global $db;
	$sql = "SELECT * FROM accounts";  
	$result = $db->query($sql);
	while ( $account = $GLOBALS["db"]->fetchByAssoc($result) ) {
	     $accounts[] = $account;
	}
	return $accounts;
}
function fetch_Expense(){
	global $db;
	$sql = "SELECT * FROM tc_expense";  
	$result = $db->query($sql);
	while ( $expense = $GLOBALS["db"]->fetchByAssoc($result) ) {
	     $expenses[] = $expense;
	}
	return $expenses;
}
// $products = array(['name'=>'Moin', 'contact'=>'03321773514', 'email'=>'moinabbas514@hotmail.com']);
// echo "<pre>";
// print_r($products);
// exit();
$sugar_smarty->assign(['name'=>'Moin','fetch_Accounts'=>fetch_Accounts(), 'fetch_Expense'=>fetch_Expense()]);
echo $sugar_smarty->fetch('custom/modules/Home/tpls/dashboard.tpl');