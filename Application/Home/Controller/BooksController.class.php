<?php
namespace Home\Controller;
use Think\Controller;
class BooksController extends Controller {
	
	public function index() {
		redirect(U('Books/allBooks'), 0, "redirect to allBooks");
	}


	public function allBooks() {
		$bookModel = M('books');
		$allBooks = $bookModel->order('id')->select();
		$countBooks = count($allBooks);
		$this->assign('allBooks', $allBooks);
		$this->assign('countBooks', $countBooks);
		$this->display();
	}

	public function lookComments($id=1) {
		$id = I('post.id');
		// echo $id;
		redirect(U('Comments/comments', array('id' => $id)), 0, 'go to look Notes');
	}


	public function lookNotes($id=1) {
		// $id = I('post.id');
		$_SESSION['bookid'] = $id;
		// echo $id;
		redirect(U('Notes/index'), 0, 'go to look Notes');
	}


	
}

