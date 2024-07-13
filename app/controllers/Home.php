<?php

class Home extends Controller {

    public function index($a='',$b='',$c=''){

        $model = new Model;
        $result = $model->where(['id'=>1],[]);

        show($result);
        echo $this->view("home");
    }

}

