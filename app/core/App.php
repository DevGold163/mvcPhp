<?php

class App
{
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
        public function loadController(){

            $url = $this->splitUrl();
            $filename = "../app/controllers/".ucfirst($url[0]).".php";

            if(file_exists($filename)){
            require_once $filename;
            }
            else{
            $filename = "../app/controllers/_404.php";
            require_once $filename;
            }

        }
}


