<?php
class PhotoModel extends Model{
	protected $_validate=array(
		//array(验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间])
		array('name','require','图片名称不能为空'),
		array('title','require','SEO标题不能为空'),
		array('sort','number','排序号必须为数字'),
		array('url','','URL不能有重复值','0','unique',3),
		array('url','/^[\w-\s]{0,200}$/','URL只能是字母,数字,下划线或-','0','',3),				
	);	
	
}
?>