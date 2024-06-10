<?php
require_once"../src/models/TransactionModel.php";
require_once"../src/core/Controller.php";

class TransactionController extends Controller{
private TransactionModel $transactionModel;

public function __construct()
{
    $this->transactionModel = new TransactionModel;
    $this->load();
}
public function load(){
    $this->listerTransaction();
}
    private function listerTransaction(){
        parent::renderView("transactions/liste",["datas" =>$this->transactionModel->findAllWithClient()]);

    //   $datas=$this->transactionModel->findAllWithClient();
    //   require_once"../views/transactions/liste.html.php";
    }
}