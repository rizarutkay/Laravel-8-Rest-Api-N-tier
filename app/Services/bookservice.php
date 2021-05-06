<?php
namespace App\Services;

use App\Repositories\RepositoryInterface;
use App\Services\ServiceInterface;

class BookService implements ServiceInterface
{

    private $repository;

	public function __construct(RepositoryInterface $repository)
	{
	   $this->repository = $repository;
	}

    public function getAll(){
    $data = $this->repository->getAll();
    return $data;
	}

    public function getPost($id){
		$data = $this->repository->getPost($id);
		return $data;
	}

    public function updatePost($id,$data){
		$data = $this->repository->updatePost($id,$data);
		return $data;
	}

    public function deletePost($id){
		$data = $this->repository->deletePost($id);
		return $data;
	}

    public function createPost($data){
		$data = $this->repository->createPost($data);
		return $data;
	}


}