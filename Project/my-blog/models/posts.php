<?php

class Posts{
    private $db;
    function  __construct() {
        $this->db=&getDBObject();
    }
    function getId($user_id){
        $query ="SELECT * FROM posts WHERE user_id='$user_id'";

        return $this->db->getRow($query);
    }
    function getPostByPostId($post_id){
        $query ="SELECT * FROM posts WHERE post_id='$post_id'";

        return $this->db->getRow($query);
    }
    function getAuthor($user_id) {
        $query="SELECT * FROM users WHERE user_id='$user_id'";
        return $this->db->getName($query);
    }
    function getCommentsByPostId($post_id)
    {
        $query="SELECT * FROM comments WHERE post_id='$post_id'";
        return $this->db->getRows($query);
    }
    function getLikesByPostId($post_id)
    {
        $query="SELECT * FROM likes WHERE post_id='$post_id'";
        return $this->db->getRows($query);
    }
    function getPosts(){
        $query="SELECT * FROM posts WHERE 1";
        return $this->db->getRows($query);
    }
    function newPost($post_info){
        $cols=  array_keys($post_info);
        $cols=  implode('`,`', $cols);
        $cols='`'.$cols.'`';
        $vals=implode("','",$post_info);
        $vals="'".$vals."'";
        $query_string="INSERT INTO posts ($cols)VALUES($vals)";
        $this->db->insert($query_string);
        //echo "Posted";
        
    }
    function newComment($comment){
        $cols=  array_keys($comment);
        $cols=  implode('`,`', $cols);
        $cols='`'.$cols.'`';
        $vals=implode("','",$comment);
        $vals="'".$vals."'";
        $query_string="INSERT INTO comments ($cols)VALUES($vals)";
        $this->db->insert($query_string);
    }
    function newLike($like){
        $cols=  array_keys($like);
        $cols=  implode('`,`', $cols);
        $cols='`'.$cols.'`';
        $vals=implode("','",$like);
        $vals="'".$vals."'";
        $query_string="INSERT INTO likes ($cols)VALUES($vals)";
        $this->db->insert($query_string);
    }
    function addLike($like){
        $query="SELECT likes FROM posts WHERE post_id='$like'";
        $data=array();
        $data=$this->db->getRow($query);
        $c=$data['likes'];
        $c=$c+1;
        $query_string="UPDATE posts SET likes='$c' WHERE post_id='$like'";
        return $this->db->update($query_string);
    }
    function addViews($views){
        $query="SELECT views FROM posts WHERE post_id='$views'";
        $data=array();
        $data=$this->db->getRow($query);
        $c=$data['views'];
        $c=$c+1;
        $query_string="UPDATE posts SET views='$c' WHERE post_id='$views'";
        return $this->db->update($query_string);
    }
    function deletePostById($post_id){
        $query = "DELETE FROM posts WHERE post_id='$post_id'";
        $data = $this->db->delete($query);
    }
    function deleteCommentById($comment_id){
        $query = "DELETE FROM comments WHERE comment_id='$comment_id'";
        $data = $this->db->delete($query);
    }
}

?>