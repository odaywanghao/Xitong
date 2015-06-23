<?php
namespace Admin\Controller;
use Think\Controller;
class BooksController extends Controller {
	
	public function index() {
		redirect(U('Books/allBooks'), 0, "redirect to allBooks");
	}

	public function myAllNotes() {
		redirect(U('Notes/myAllNotes'), 0, 'redirect to myAllNotes');
	}

	public function allNotes()  {
		redirect(U('Notes/allNotes'), 0, 'redirect to allNotes');
	}

	public function deleteBook($id) {
		$bookModel = M('books');
		$noteModel = M('notes');
		$commentModel = M('comments');
		$zanModel = M('bookzan');
		$bookid_sql = "bookid = '$id'";
		
		$bookModel->delete($id);
		$noteModel->where("$bookid_sql")->delete();
		$commentModel->where("$bookid_sql")->delete();
		$zanModel->where("$bookid_sql")->delete();
		redirect(U('Books/allBooks'), 0, 'delete success');
	}


	public function allBooks() {
		$bookModel = M('books');
		$allBooks = $bookModel->order('id')->select();
		$countBooks = count($allBooks);
		$this->assign('allBooks', $allBooks);
		$this->assign('countBooks', $countBooks);
		$this.layout(true);
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
		redirect(U('Notes/bookAllNotes', array('id' => $id)), 0, 'go to look Notes');
	}


	
}

