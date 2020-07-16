<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use \Core\Database\Transaction;
use App\Models\Categoria;
use App\Models\Pessoa;
use Core\Utilitarios\Sessoes;

class HomeController extends BaseController
{
    public function index()
    {
        try {
            Transaction::startTransaction('connection');
            $this->setMenu();
            $this->setFooter();

            $this->render('home/index', true);
            Transaction::close();

        } catch (Exception $e) {
            
            Transaction::rollback();
        }
        
    }

    
}
