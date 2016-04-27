<?php
class InsideModel extends Model{
	protected $_validate=array(
		array('keyword','require','内链关键词不能为空'),
		array('url','require','链接地址不能为空'),
		array('ekeyword','require','内链关键词不能为空'),
		array('eurl','require','链接地址不能为空'),
		array('number','number','内链频率只能填数字'),
	);


}
?>