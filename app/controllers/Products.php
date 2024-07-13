<?php

class Products extends Controller {

    public function index($a='',$b='',$c=''){

        echo $this->view("products/products");
    }

}

