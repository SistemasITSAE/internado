<?php
class Model
{
    public $string;

    public function __construct(){
        $this->string = "MVC + PHP = Awesome!";
    }
}
<?php
class View
{
    private $model;
    private $controller;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }
	
    public function output(){
        return "<p>" . $this->model->string . "</p>";
    }
}
<?php
class Controller
{
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }
}
/*