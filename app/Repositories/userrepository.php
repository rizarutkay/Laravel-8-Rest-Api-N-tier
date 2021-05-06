<?php
namespace App\Repositories;

use App\Models\User;
use App\Repositories\RepositoryInterface;

class UserRepository implements RepositoryInterface
{

	public function getAll(){
		return User::all();
	}

	public function getPost($id){
		return $staff=User::find($id);
	}

    public function deletePost($id){
		return User::destroy($id);
	}    
	
	public function updatePost($id,$data){
		$staff=User::find($id);
        $staff->update($data);
        return $staff;
	}
	
    public function createPost($data){
        return User::create($data);
	}






}

