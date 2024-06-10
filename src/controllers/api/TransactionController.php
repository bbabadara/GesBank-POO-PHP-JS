<?php
require_once "../src/models/TransactionModel.php";
require_once"../src/core/controller.php";
class TransactionController extends Controller
{
    private TransactionModel $transactionModel;

    public function __construct()
    {
        $this->transactionModel = new TransactionModel;
        $this->load();
    }
    public function load()
    {
        $this->listerTransaction();
    }
    private function listerTransaction()
    {
        parent::renderJson($this->transactionModel->findAllWithClient());
    }
}
