<?php
class CommentController extends Controller {
    public function add($postId) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $comment = $this->model('Comment');
            $comment->post_id = $postId;
            $comment->user_id = $_SESSION['user_id'];
            $comment->content = $_POST['content'];
            $comment->save();
            header('Location: /post/' . $postId);
        }
    }
}
?>