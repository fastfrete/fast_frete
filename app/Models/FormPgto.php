<?php
namespace App\Models;

use App\Models\BaseModel;
use \Exception;

/**
 * Classe para as formas de pagamento
 */
class FormPgto extends BaseModel
{
	const TABLENAME = 'FormPgto';

    private $data = [];
    private $idFormPgto;
    private $tipo;

    protected function parseCommit()
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
        $result = $this->parseCommit();

        $resultInsert = $this->insert($result);
        if($resultInsert == true){
            return true;
        }

        throw new Exception("Falha ao registrar");
        
    }

    public function modify(array $dados)
    {
        
    }

}