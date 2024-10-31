<?php
class Users extends Model{
    public function authUser($info)
    {
        $sql = "SELECT * from users Where email='$info[loginid]' || mobile='$info[loginid]'";
        return $this->runSql($sql);
    }
}
?>
