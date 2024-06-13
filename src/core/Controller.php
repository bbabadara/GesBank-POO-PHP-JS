<?php
class Controller
{
    protected $layout = "base";
    public function renderView(string $view, array $datas = [])
    {
        extract($datas);
        ob_start();
        require_once "../views/$view.html.php";
        $contentForView = ob_get_clean();
        require_once "../views/layouts/$this->layout.layout.html.php";
    }
    public function renderJson(array $datas)
    {
        echo json_encode($datas);
    }

    public  function dd($xol)
    {
        echo "<pre>";
        var_dump($xol);
        echo "</pre>";
        die;
    }

    public function redirectToRoot($url = "")
    {
        if ($url != "") {
            header("location:".WEBROOT."/?$url");
            exit();
        }
        header("location:".WEBROOT);
        exit();
    }
}
