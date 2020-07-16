<?php

namespace App\Models;

use App\Models\BaseModel;
use \Exception;
use \InvalidArgumentException;

class LogradouroPessoa extends BaseModel
{
	private $complemento;
	private $endereco;
	private $idLogradouro;
    private $idLogradouroPessoa;

    const TABLENAME = 'LogradouroPessoa';

    private $data = [];

    protected function parseCommit():array
    {   
        $arrayPase = [];
        for ($i=0; !($i == count($this->columns())) ; $i++) { 
            $chave = $this->columns()[$i]->Field;
            if(array_key_exists($chave, $this->data)){
                $arrayPase[$chave] = $this->data[$chave];
            }
        }
        return $arrayPase;
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
