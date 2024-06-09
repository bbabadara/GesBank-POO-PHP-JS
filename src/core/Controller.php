<?php
class Controller
{
    protected $layout = "base";
    public function rendorView(string $view, array $datas = [],string $layout="base")
    {
        extract($datas);
        ob_start();
        require_once "../views/$view.html.php";
        $contentForView=ob_get_clean();
        require_once "../views/layouts/$layout.layout.html.php";
        // $this->dd($contentForView);
    }

    public  function dd($xol){
        echo"<pre>";
        var_dump($xol);
        echo"</pre>";

    }
}
