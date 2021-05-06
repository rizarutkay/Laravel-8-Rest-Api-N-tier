<?php 
namespace App\Services;

interface ServiceInterface
{
	
	public function getAll();

	public function getPost($id);

    public function deletePost($id);

    public function updatePost($id,$data);

    public function createPost($id);


}