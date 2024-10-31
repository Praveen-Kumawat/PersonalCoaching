<?php
class Folders extends Model{
    public function hasMany($id = "")
    {
        if($id)
        {
            $sql = "select *,folders.id as fid,videolacture.id as vid from folders join videolacture on folders.id=videolacture.folder_id where videolacture.folder_id = $id";
        }
        else
        {
            $sql = "select *,folders.id as fid,videoslacture.id as vid from folders join videolacture on folders.id=videolacture.folder_id";
        }
        return $this->runSql($sql);
    }
}
?>