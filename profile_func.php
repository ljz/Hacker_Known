<?
header("Content_Type:text/html;charset=utf8");
include "sql_function.php";

$mysql_function = new sql_function;
if(){$mysql_function->profile_basic()}
else()
{$mysql_function->profle_lianifangshi()}
else()
{$mysql_function->profile_IT()}


?>
