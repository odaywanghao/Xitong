<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index() {
		redirect(U('Comments/comments'), 0, "redirect to comments");
	}

}
