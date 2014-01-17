<?php

$action2=$_POST['action2'];
if(!isset($action2)|| empty($action2)){

   $action2=$_GET['action2'];
}
$post_id= $_GET['post_id'];
$user_id=$current_user['user_id'];
$_SESSION['user_id']=$user_id;
$posts=getModel('Posts');
switch($action2){
    case 'post':
        $post = $posts->getPostByPostId($post_id);
        $posts->addViews($post_id);
        $comments = $posts->getCommentsByPostId($post_id);
        $likes= $posts->getLikesByPostId($post_id);
        $_SESSION['post-id']=$post_id;
        $a=count($comments);
        for ( $i=0;$i<$a;$i++ ) {
            $b=count($comments[$i]);
            foreach ( $comments[$i] as $key=>$final_value ) {
                  if($key=='post_id'){
                      $author=$posts->getAuthor($comments[$i]['user_id']);
                      $comments[$i]['author']=$author;
                  }
              }
        }
        $author=$posts->getAuthor($post['user_id']);
        $post['author']=$author;
        
        $post_details=loadView('post-details', $post, $comments, $likes);
        setViewItem('post-details', $post_details);

        break;
    case 'do-post':
        $post=array();
        $post['user_id']=$current_user['user_id'];
        $post['title']=$_POST['tittle'];
        $post['rating']=0;//$_POST['rating'];
        $post['text']=$_POST['text'];
        $post['date']=date("d-m-Y");
        $posts->newPost($post);
        //header("Location: http://localhost/my-blog/index.php");
        $confirm = "Successfully posted";
        $confirmation =  loadView('confirmation');
        setViewItem('confirmation', $confirmation);
        break;
    case 'post-like':
        $like=array();
        $like['post_id']=$_SESSION['post-id'];
        $like['user_id']=$current_user['user_id'];
        $posts->newLike($like);
        $posts->addLike($like['post_id']);
        break;
    case 'post-dlt':
        $posts->deletePostById($post_id);
        $confirm = "Post removed successfully";
        $confirmation =  loadView('confirmation');
        setViewItem('confirmation', $confirmation);
        break;
    case 'comment-dlt':
        $comment_id = $_GET['comment_id'];
        $posts->deleteCommentById($comment_id);
        $confirm = "Comment removed successfully";
        $confirmation =  loadView('confirmation');
        setViewItem('confirmation', $confirmation);
        break;
    case 'do-comment':
        $comment=array();
        $comment['post_id']=$_SESSION['post-id'];
        $comment['user_id']=$current_user['user_id'];
        $comment['text']=$_POST['text'];
        $comment['date']=date("d-m-Y");
        $posts->newComment($comment);
        echo "some comment";
        break;
    case 'help':
        $help =  loadView('help');
        setViewItem('help', $help);
        break;
    /*case 'recent-post':
        echo "noman";
        break;*/
    case 'post-form':
        if(isset($_SESSION['current-user'])){
            $post_form = loadview('post-form');
            setViewItem('post-form', $post_form);
        }
        break;
    default :
            $post=$posts->getPosts();
        foreach($post as $key=>$value){
            $author=$posts->getAuthor($value['user_id']);
            $value['author']=$author;
            $post[$key]=$value;
        }
            $post_list=loadView('post-list',$post);
            setViewItem('post-list', $post_list);
        

        

}

?>
