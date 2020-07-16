<?php

namespace App\Models;

use App\Models\BaseModel;
use \Exception;
use \InvalidArgumentException;

class Usuario extends BaseModel
{
    const TABLENAME = 'Usuario';

	private  $login;
	private  $senha;
	private  $idUsuario;
    private  $img;

    private $data = [];

    protected function parseCommit():array
    {
        return $this->data;
    }


    public function save(array $dados)
    {
        $this->clear($dados);

        $result = $this->parseCommit();

        $this->insert($result);
    }

    public function modify(array $dados)
    {
        
    }

}
