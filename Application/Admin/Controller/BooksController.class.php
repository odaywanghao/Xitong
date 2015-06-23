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


	public function addBook() {
		$this.layout(true);
		$this->display();
	}

	public function addBookin() {

		// redirect(U('Books/allBooks'), 0, 'go to all books');
		$upload = new \Think\Upload();// 实例化上传类
    	$upload->maxSize   =     3145728 ;// 设置附件上传大小
    	$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    	$upload->rootPath  =     './Uploads/BookPhotoes/'; // 设置附件上传根目录
    	// $upload->rootPath  =     './Uploads/NotePhotoes/'; // 设置附件上传根目录
    	$upload->savePath  =     ''; // 设置附件上传（子）目录
    	$upload->callback  = 	  true;
    	$upload->autoSub 	 = 	false;
    // 上传文件 
    	$info   =   $upload->upload();
    	if(!$info) {// 上传错误提示错误信息
        	// $this->error($upload->getError());
        	$error = $upload->getError();
        	if ($error == "没有文件被上传！") {
        		$photo = NULL;
        	}	else {
        			$this->error($upload->getError);
        	}
    	}else{// 上传成功
	        // $this->success("add photo");
	        $photo = $info['photo']['savename'];
    	}


		$bookModel = M('books');
		$data['bookname'] = I('post.bookname');
		$data['press'] = I('post.press');
		$data['ISBN'] = I('post.ISBN');
		$data['picture'] = $photo;
		$data['author'] = I('post.author');
		$data['summary'] = I('post.summary');
		$data['create_time'] = NOW_TIME;

		$bookModel->add($data);
		// redirect(U('index'), 0, "add success, go to see my all books");
		redirect(U('Books/allBooks'), 0, 'go to all books');

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
		redirect(U('Comments/comments', array('bookId' => $id)), 0, 'go to look Notes');
	}


	public function lookNotes($id=1) {
		// $id = I('post.id');

		$id = I('post.id');		// echo $id;
		redirect(U('Notes/bookAllNotes', array('bookId' => $id)), 0, 'go to look Notes');
	}


	
}

