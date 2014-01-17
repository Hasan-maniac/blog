<?php

class Users{
    private $db;
    function  __construct() {
        $this->db=&getDBObject();
    }
    function getUserById($user_id){
        $query ="SELECT * FROM users WHERE user_id='$user_id'";
        
        return $this->db->getRow($query);
    }
    function getPostByUserId($user_id){
        $query ="SELECT * FROM posts WHERE user_id='$user_id'";

        return $this->db->getRows($query);
    }
    function getUserByName($author){
        $query ="SELECT user_id FROM users WHERE full_name='$author'";

        return $this->db->getItem($query);
    }
    function getUserByEmail($email){
        $query="SELECT * FROM users WHERE email='$email'";
        return $this->db->getRow($query);
    }
    function authenticate($email,$password){
        
        $user=$this->getUserByEmail($email);
        /*if($user&&$user[password]==md5($password)){
            $_SESSION['current-user']=$user;
            echo 'something';//practice
            return $user;
        }*///main
        if($user&&$user[password]==$password){
            $_SESSION['current-user']=$user;           
            return $user;
        }//practice
        return false;
    }
    function updateUser($user,$user_id){
        $query = "";
        foreach($user as $key=>$value){
            $query=$query."$key = '$value', ";
        }
        $query=substr($query,0 ,strlen($query)-2);   
        $query= 'update users set '.$query.' WHERE user_id='.$user_id;
        //echo $query;
        $this->db->update($query);
    }
    function newRegister($registration){
        $cols=  array_keys($registration);
        $cols=  implode('`,`', $cols);
        $cols='`'.$cols.'`';
        //$cols.=',`post_date`';
        $vals=implode("','",$registration);
        $vals="'".$vals."'";
        $query_string="INSERT INTO users ($cols)VALUES($vals)";
        $this->db->insert($query_string);
        //echo "Registered";

    }
    function getUsers(){
        $query="SELECT * FROM users";
        return $this->db->getRows($query);
    }
    function getAuthor($user_id) {
        $query="SELECT * FROM users WHERE user_id='$user_id'";
        return $this->db->getName($query);
    }

}


?>
