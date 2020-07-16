<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use \Core\Database\Transaction;
use App\Models\Pessoa;
use App\Models\LogradouroPessoa;
use \App\Models\Usuario;
use \App\Models\FormPgto;
use \App\Models\ContaPagarReceber;
use \Core\Utilitarios\Utils;
use Core\Utilitarios\Sessoes;
use \Exception;

class PessoaController extends BaseController
{
    
	public function index($request)
    {
    	
    }

}