<?php
function recursive ($array, $pid=0, $level=0) {
	$arr = array();
	foreach ($array as $v) {
		if ($v['pid'] == $pid) {
			$v['level'] = $level;
			$v['html'] = str_repeat('-', $level);
			$arr[] = $v;
			$arr = array_merge($arr, recursive($array, $v['id'], $level + 1));	
		}
	}
	return $arr;
}

function redWord($str,$len,$name){
	$redstr=mb_substr($str,0,$len,'utf-8');
	$search=$name;
	$search = urldecode($search);
	$redstr=preg_replace("/($search)/i","<font color=red>\\1</font>",$redstr);
	return $redstr;
}
?>