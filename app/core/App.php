<?php

class App
{
         private $controller = 'Home';
         private $action = 'index';
        /**
        * Spliting Url logic
        * @return array url into parts as array
        */
        private function splitUrl():array{

        $url = $_GET['url'] ?? 'home';
        $url =explode("/",$url);
        return $url;
        }

        /**
        * Loading The Specific Controller based on Url Input
        * @return void
        */
        public function loadController(): void
        {

            $url = $this->splitUrl();
            $filename = "../app/controllers/".ucfirst($url[0]).".php";

            if(file_exists($filename)){
                require_once $filename;
                $this->controller = ucfirst($url[0]);

            }
            else{
                $filename = "../app/controllers/_404.php";
                require_once $filename;
                $this->controller = "_404";
            }

            $controller = new $this->controller;
            call_user_func_array([$controller, $this->action],[]);


        }
}


