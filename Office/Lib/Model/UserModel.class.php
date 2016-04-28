<?php
class UserModel extends Model{
	protected $_validate=array(
		//array(验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间])
		array('username','require','用户名不能为空'),
		array('username','','用户名已存在','0','unique',3),
		array('password','require','密码不能为空',0,'',1),
	);

	protected $_auto=array(
		//array(填充字段,填充内容,[填充条件,附加规则])
		array('password','md5',1,'function'),
	);
}




?>