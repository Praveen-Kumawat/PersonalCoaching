<?php
class Courses extends Model {
    public function findCourse($id)
    {
        if($_POST['id']??"")
            $sql = "select *,courses.id as cid from courses join category on courses.cat_id=category.id where cat_id=    $_POST[id]";
        else
            $sql = "select *,courses.id as cid from courses join category on courses.cat_id=category.id where cat_id=    $id";
            
        return $this->runSql($sql); 
    }

    public function find($id)
    {
        $sql = "select *,courses.id as cid from courses join category on courses.cat_id=category.id where courses.id= $id";
        return $this->runSql($sql);  
    }
    public function allCourses()
    {
        $sql ="select *, courses.id as cid from courses join category on courses.cat_id = category.id";
        return $this->runSql($sql);
    }

    public function comments()
    {
        // $sql = "select cmt_id,comments,course,users,course_id,user_id,comments.created_at from comments join courses on courses.id=comments.course_id join users on users.id=comments.user_id";

        $sql = "select *,courses_and_videos.id,courses_and_videos.cmt_id,courses_and_videos.course_id,courses_and_videos.user_id,comments from courses_and_videos join comments on courses_and_videos.cmt_id = comments.cmt_id join courses on courses_and_videos.course_id = courses.id join users on users.id=courses_and_videos.user_id  ";
        return $this->runSql($sql);
    }
}
?>