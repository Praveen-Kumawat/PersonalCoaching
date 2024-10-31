<?php
class Videolacture extends Model{
    public function comments()
    {
        $sql = "select *,courses_and_videos.id,courses_and_videos.cmt_id,courses_and_videos.course_id,courses_and_videos.user_id,comments from courses_and_videos join comments on courses_and_videos.cmt_id = comments.cmt_id join videolacture on courses_and_videos.video_id = videolacture.id join users on users.id=courses_and_videos.user_id";
        return $this->runSql($sql);
    }
}

?>