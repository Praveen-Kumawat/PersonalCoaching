<?php
class Register extends Model
{
    public function hasMany($tab_arr,$pk,$fk)
    {
       $tbl =  explode(',',$tab_arr);
       $fk = explode(',',$fk);
       $sql = "select *from $tbl[0] join $tbl[1] on $tbl[0].$pk=$tbl[1].$fk[0] join $tbl[2] on $tbl[1].$pk=$tbl[2].$fk[1]";
       return $this->runSql($sql);
    }
    public function hasOne($table,$id="",$pk="")
    {
        if($pk)
            $this->pk = $pk;
        $this->table = $table;
        if($id)
            return $this->find($id);
        return $this->all();
    }
}
?>