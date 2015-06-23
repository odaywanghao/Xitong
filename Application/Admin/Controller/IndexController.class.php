<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index() {
		redirect(U('BackGround/index'), 0, "redirect to BackGround");
	}

}
