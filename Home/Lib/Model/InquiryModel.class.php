<?php
class InquiryModel extends Model{
	protected $_validate=array(
	  //array(验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间])
	  array('product','require','产品名称不能为空'),					   
	  array('name','require','联系人不能为空'),	
	  //array('add','require','联系地址不能为空'),
	);
	
	protected $_auto=array(
		//array(填充字段,填充内容,[填充条件,附加规则])
		array('time','time',1,'function'),
	);


}
?>