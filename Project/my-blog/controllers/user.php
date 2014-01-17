<?php
$action2=$_POST['action2'];
if(!isset($action2)|| empty($action2)){

   $action2=$_GET['action2'];
}
if($_GET['user_id']){
    $user_id= $_GET['user_id'];
}
else{
    $user_id=$_SESSION['current-user']['user_id'];
}
require_once 'models/users.php';
$users = new Users();


switch($action2){
    case 'profile':  

        echo '<pre>';
        $user = $users->getUserById($user_id);
        $profile_view=loadView('profile',$user);
        setViewItem('profile-view', $profile_view);
        echo '</pre>';
        break;
    case 'post':
        $post = $users->getPostByUserId($user_id);
        foreach($post as $key=>$value){
            $author=$users->getAuthor($value['user_id']);
            $value['author']=$author;
            $post[$key]=$value;
        }
        $post_list=loadView('post-list',$post);
        setViewItem('post-list', $post_list);
        break;
    case 'post-by-name':
        $author=$_POST['author'];
        $user_id = $users->getUserByName($author);
        $posts = $users->getPostByUserId($user_id);
        $post_list=loadView('post-list',$posts);
        setViewItem('post-list', $post_list);
        break;
    case 'edit-profile':
                
        $user = $users->getUserById($user_id);
        echo '<pre>';
        $profile_view=loadView('profile-edit',$user);
        setViewItem('edit-profile', $profile_view);
        echo '</pre>';
        break;
    case 'save-profile':
        
        $user = array();
        $user['full_name']=$_POST['full_name'];
        $user['nick_name']=$_POST['nick_name'];
        $user['gender']=$_POST['gender'];
        $user['email']=$_POST['email'];
        $user['password']=$_POST['password'];
        $user['date_of_birth']=$_POST['date_of_birth'];
        $user['address']=$_POST['address'];
        $user['city']=$_POST['city'];
        $user['country']=$_POST['country'];
        $users->updateUser($user,$user_id);
        
        header("Location: http://localhost/my-blog/index.php?action=user&&action2=profile");
        break;
    /*case 'login':
        $login=loadView('login');
        setViewItem('login-view', $login);
        break;*/
    case 'do-login':
        
        $email=$_POST['email'];
        $password=$_POST['password'];
        $user=$users->authenticate($email,$password);
        if($_SESSION['current-user']['user_id'] == 7){
            $_SESSION['current-user']['user_type']='admin';
        }            
        if(!$user){
            $login=loadView('login');
            setViewItem('login-view', $login);
            break;
        }
        header("Location: http://localhost/my-blog/index.php");
        break;
     case 'register':
         $register=loadView('registration-form');
         setViewItem('registration-form', $register);
         break;
     case 'do-register':
        $registration=array();
        $registration['email']=$_POST['email'];
        $registration['password']=$_POST['pass'];
        $registration['full_name']=$_POST['fname'];
        $registration['nick_name']=$_POST['lname'];
        $registration['gender']=$_POST['sex'];
        $registration['date_of_birth']=$_POST['bdate'];
        $registration['address']=$_POST['add'];
        $registration['city']=$_POST['city'];
        $registration['country']=$_POST['countries'];
        $registration['reg_date']=date("d-m-Y");
        $users->newRegister($registration);
        $confirm = "Congratulation. You have registered successfully";
        $confirmation =  loadView('confirmation');
        setViewItem('confirmation', $confirmation);
        //header("Location: http://localhost/my-blog/index.php");
        //$user_set = true;
        break;
     case 'members':
         $members=$users->getUsers();
         $member_view =  loadView('members',$members);
         setViewItem('members', $member_view);
         break;
     case 'search':
         $name = $_POST['name'];
         $user_id =  $users->getUserByName($name);
         $posts = $users->getPostByUserId($user_id);
         $post_list=loadView('post-list',$posts);
         setViewItem('post-list', $post_list);
         break;
     case 'logout':
         unset($_SESSION['current-user']);
         //unset($current_user);    //commented for practice
         header("Location: http://localhost/my-blog/index.php");
         break;

}
/*if(isset ($user_set) && $user_set==true){
    $user_set=false;
    require_once '/index.php';
}*/

?>
