<?php
class TagsModel extends Model{
	protected $_validate=array(
		array('name','require','标签名称不能为空'),
		array('name','/^[^_\'\"]+$/','标签名称不能用下划线或单双引号','0','',3),
		array('ename','require','标签名称不能为空'),
		array('ename','/^[^_\'\"]+$/','标签名称不能用下划线或单双引号','0','',3),
		array('sort','number','排序号只能为数字'),
	);

}
?>