<?php
class Controller
{
    public function __construct(){
        Session::open();
    }
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
            header("location:" . WEBROOT . "/?$url");
            exit();
        }
        header("location:" . WEBROOT);
        exit();
    }

    public function path(string $ressource,string $controller, string $action, array $additional = []): string
    {
        $link = WEBROOT . "/?ressource=$ressource&controller=$controller&action=$action";
        if (!empty($additional)) {
            foreach ($additional as $key => $value) {
                $link = $link . "&" . "$key=$value";
            }
        }
        return $link;
    }

}
