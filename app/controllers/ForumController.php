<?php
class ForumController extends Controller {
    public function index() {
        $forums = $this->model('Forum')->getAll();
        $this->view('forum/index', ['forums' => $forums]);
    }
}
?>