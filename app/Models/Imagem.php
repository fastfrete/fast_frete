 <?php

namespace App\Models;

use App\Models\BaseModel;
use App\Models\Produto;
use \Exception;
use \InvalidArgumentException;

class Imagem extends BaseModel
{
    private $data = [];
    
    const TABLENAME = 'Imagem';
    
	private $ProdutoIdProduto;
	private $url;
	private $dataUpload;
	private $idUsuario;
    private $idImagem;


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

        return false;
    }

    public function modify(array $dados)
    {
        
        
    }

}
