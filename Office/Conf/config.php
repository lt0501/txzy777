<?php
$arr1=include'../config.php';
$arr2=include'../mysql.php';
$arr3=array(
	//'URL_MODEL' => '0',
	'TMPL_L_DELIM'=>'<{',
	'TMPL_R_DELIM'=>'}>',
	'URL_CASE_INSENSITIVE'=>true,  //url不区分大小写
	//'SHOW_PAGE_TRACE'=>true,
    'TMPL_ACTION_ERROR'=>'Public:jump',
    'TMPL_ACTION_SUCCESS'=>'Public:jump',
);
return array_merge($arr1,$arr2,$arr3);
?>