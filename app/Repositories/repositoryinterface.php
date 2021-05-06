<?php 
namespace App\Repositories;

interface RepositoryInterface
{
	
	public function getAll();

	public function getPost($id);

    public function deletePost($id);

    public function updatePost($id,$data);

    public function createPost($id);


}