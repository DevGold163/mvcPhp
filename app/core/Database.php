<?php

Trait Database{

    private function getConnection():PDO{

        $dsn = 'mysql:hostname='.DBHOST.';dbname='.DBNAME;
        return new PDO($dsn, DBUSER,DBPASS);
    }

    public function query($query,$data=[]) {

        $conn = $this->getConnection();
        $stmt = $conn->prepare($query);

        $check    = $stmt->execute($data);

        if($check){
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);

            if(is_array($result) && count($result)>0){
                return $result;
            }

        }

        return false;
    }


    public function get_row($query,$data=[]) {

        $conn = $this->getConnection();
        $stmt = $conn->prepare($query);

        $check    = $stmt->execute($data);

        if($check){
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);

            if(is_array($result) && count($result)>0){
                return $result[0];
            }

        }

        return false;
    }


}

