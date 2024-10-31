<?php
class Model extends PDO{
    protected $table="",$pk="id";
    public function __construct($table,$pk="")
    {
        $this->table = $table;
        if($pk)
        {
            $this->pk = $pk;
        }
        parent:: __construct("mysql:hostname=".HOSTNAME.";dbname=".DB,USERNAME,PASSWORD);
    }
    public function all()
    {
        $sql = "select *from $this->table";
        $rs = $this->prepare($sql);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_ASSOC);
    }
    public function save($data){
        $keys = array_keys($data);
        $cols = implode(',',$keys);
        $lbls = implode(',',array_map(fn($v)=>":$v",$keys));
        $query = "INSERT INTO $this->table($cols) VALUES($lbls)";
        if($this->prepare($query)->execute($data))
        return  $this->lastInsertId();
        return null;
        
    }
    public function find($id){
        $sql = "SELECT *FROM $this->table WHERE $this->pk='$id'";
        $rs =  $this->prepare($sql);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_ASSOC);
    }
    public function update($data,$id)
    {
        $keys = array_keys($data);
        $cols = implode(',',$keys);
        $lbls = implode(',',array_map(fn($v)=>"$v=:$v",$keys));
        $sql = "UPDATE $this->table SET $lbls WHERE $this->pk=$id";
        return $this->prepare($sql)->execute($data);
    }

    public function delete($id){
        $query = "DELETE FROM $this->table WHERE $this->pk=$id";
        return $this->prepare($query)->execute();
    }

    public function runSql($sql)
    {
        
        $rs = $this->prepare($sql);
        $rs->execute();
        return $rs->fetchAll(PDO::FETCH_ASSOC);
        
    }
}
?>