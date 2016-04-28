<?php
class NewModel extends Model{
	protected $_validate=array(
		//array(验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间])
		array('title','require','中文标题不能为空'),
		array('etitle','require','英文标题不能为空'),
		array('sort','number','排序号必须为数字'),
		array('url','','URL不能有重复值','0','unique',3),
		array('url','/^[\w-\s]{0,200}$/','URL只能是字母,数字,下划线或-','0','',3),
	);
	
	protected $_auto=array(
		//array(填充字段,填充内容,[填充条件,附加规则])
		array('time','time',1,'function'),
	);
	
}
?>