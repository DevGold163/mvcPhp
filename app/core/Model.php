<?php

/**
 * Main Model Class
 */
class Model{

    /**
     * Include Trait into Database
     */
    use Database;
    protected $table = "users";
    protected $limit = 10;
    protected $offset = 0;


    public function where($data,$data_not=[])
    {
        $keys = array_keys($data);
        $keys_note = array_keys($data_not);
        $query = "select * from $this->table where ";

        foreach ($keys as $key) {
            $query .= $key. "=:".$key." && ";
        }

        foreach ($keys_note as $key_note) {
            $query .= $key_note. "!=:".$key_note." && ";
        }

        $query = trim($query," && ");
        $query .= " limit $this->limit offset $this->offset";

        echo $query;

        $data = array_merge($data,$data_not);
        return $this->query($query,$data);

    }

    public function first($data,$data_not){

        $keys = array_keys($data);
        $keys_note = array_keys($data_not);
        $query = "select * from $this->table where ";

        foreach ($keys as $key) {
            $query .= $key. "=:".$key." && ";
        }

        foreach ($keys_note as $key_note) {
            $query .= $key_note. "!=:".$key_note." && ";
        }

        $query = trim($query," && ");
        $query .= " limit $this->limit offset $this->offset";

        echo $query;

        $data = array_merge($data,$data_not);

        $result = $this->query($query,$data);

        if($result){
            return $result[0];
        }
        return false;

    }

    public function insert($id,$data,$id_column = 'id')
    {


    }

    public function update($id,$data,$id_column = 'id')
    {

    }

    public function delete($id,$id_column = 'id')
    {

    }




}