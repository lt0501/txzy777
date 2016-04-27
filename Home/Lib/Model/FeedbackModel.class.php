<?php
class FeedbackModel extends Model{
	protected $_validate=array(
	  //array(验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间])
	  array('title','require','留言标题不能为空'),					   
	  array('name','require','姓名不能为空'),
	);
	
	
	protected $_auto=array(
		//array(填充字段,填充内容,[填充条件,附加规则])
		array('time','time',1,'function'),
	);



}
?>