<?php
namespace App\Repositories;

use App\Models\Book;
use App\Repositories\RepositoryInterface;

class BookRepository implements RepositoryInterface
{

	public function getAll(){
		return Book::all();
	}

	public function getPost($id){
		return $staff=Book::find($id);
	}

    public function deletePost($id){
		return Book::destroy($id);
	}    
	
	public function updatePost($id,$data){
		$staff=Book::find($id);
		if($staff){
        $staff->update($data);
        return $staff;
		}else{
		return ['message' => 'Book not found'];
		}
	}
	
    public function createPost($data){
        return Book::create($data);
	}






}

