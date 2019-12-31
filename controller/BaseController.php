<?php 
    //single quoate bhitra variable use garna mildaina====string interpolation
    //use double quotation for using variable
    class BaseController
    {
        protected $view;
        public function loadModel($model)
        {
            $modelClass=ucfirst($model)."Model";
            // var_dump($modelClass);
            require_once "../model/{$modelClass}.php";
            $modelObject=new $modelClass();
            var_dump($modelObject);
            return $modelObject;
        }

        protected function display($data){
            extract($data);
            require_once 'view/{$this->view}.php';
        }
    }
    $obj=new BaseController;
    $obj->loadModel("base");
?>