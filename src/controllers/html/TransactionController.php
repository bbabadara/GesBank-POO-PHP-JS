<?php
require_once"../src/models/TransactionModel.php";
class TransactionController{
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
      $datas=$this->transactionModel->findAllWithClient();
      require_once"../views/transactions/liste.html.php";
    }
}