<?php


class Core
{

    private $Controller = 'Books';
    private $method = 'index';
    private $param = [];

    public function __construct()
    {

        $url = explode('/',rtrim($_SERVER['REQUEST_URI'],'/'));

        if (isset($url[1])) {
            if (file_exists('../app/controllers/' . ucwords($url[1]) . '.class.php')) {
                $this->Controller = ucwords($url[1]);
                unset($url[1]);
            }
        }

        require_once '../app/controllers/' . $this->Controller . '.class.php';

        $this->Controller = new $this->Controller;

        if (isset($url[2])) {
            if (method_exists($this->Controller, $url[2])) {
                $this->method = $url[2];
                unset($url[2]);
            }
        }

        $this->param = $url ? array_values($url) : []; 

        call_user_func_array([$this->Controller, $this->method], $this->param);
    }

}