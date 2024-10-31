<?php
class Category extends Model
{
    public function countData()
    {
        $sql = "SELECT *,category.id as cid FROM Category join courses where category.id=courses.cat_id";
        return $this->runSql($sql);
    }
}
?>