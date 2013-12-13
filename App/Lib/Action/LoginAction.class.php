<?php
/**
* 注册与登陆控制器
*/
Class LoginAction extends Action{

	/**
	 * 登陆页面
	 */
	  public function index(){
	     $this->display();
	 }

	 /**
	  * 注册页面
	  */
	 public function register(){
	 	$this->display();
	 }

	 /**
	  * 获取验证码
	  */
	 public function verify(){
	 	//导入扩展类库中的ORG.Util.Image类库和ORG.Util.String类库
	 	import('ORG.Util.Image');
	 	//Image类的buildImageVerify方法用于生成验证码
	 	Image::buildImageVerify(4,5);
	 }
} 
?>