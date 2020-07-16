<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Usuario;
use App\Models\Pessoa;
use \Core\Database\Transaction;
use Core\Utilitarios\Sessoes;
use \Exception;

/**
 * 
 */
class UserController extends BaseController
{
	public function index()
	{
		try {
			Transaction::startTransaction('connection');

        	Transaction::close();

		} catch (Exception $e) {
			
			Transaction::rollback();
		}
		
	}
	
    
}