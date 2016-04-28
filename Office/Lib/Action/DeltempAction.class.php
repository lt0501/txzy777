<?php
class DeltempAction extends CommonAction{
	public function index(){
		echo '<div style="font-size:13px; line-height:22px; color:#535353; padding:6px; background-color:#effaff; border:solid 1px #dbe2ef">';
		delDirAndFile('../Home/Runtime/Temp');
		unlink('../Home/Runtime/~runtime.php');
		//delDirAndFile('../Home/Runtime/~runtime.php');
		echo '</div>';
	}	
}
?>