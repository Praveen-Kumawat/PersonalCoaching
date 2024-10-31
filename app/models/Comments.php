<?php

class Comments extends Model{
    function commentInsert($data)
    {
       $this->save($data);
    }
}


?>