<?php
class ListModel extends Model{
	protected $_validate=array(
		//array(验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间])
		array('name','require','栏目名称不能为空'),
		array('sort','number','排序号必须为数字'),
		array('url','','已存在重复的URL','0','unique',3),
		array('url','/^[a-zA-Z0-9-\s]{0,200}$/','URL只能是字母,数字或-','0','',3), 
	);


}
?>