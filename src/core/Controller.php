<?php
class Controller
{
    protected $layout = "base";
    public function rendorView(string $view, array $datas = [])
    {
        extract($datas);
        require_once "../views/$view.html.php";
    }
}
