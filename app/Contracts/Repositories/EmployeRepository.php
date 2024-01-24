<?php
namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\EmployeInterface;
use App\Contracts\Repositories\BaseRepository;
use App\Models\Employe;

class EmployeRepository extends BaseRepository implements EmployeInterface
{
    public function __construct(Employe $employe)
    {
        $this->model = $employe;
    }
    public function get(): mixed
    {
        return $this->model->query()->get();
    }
    public function store(array $data): mixed
    {
        
    }
    public function update(mixed $id, array $data): mixed
    {
        
    }
    public function delete(mixed $id): mixed
    {
        
    }

}