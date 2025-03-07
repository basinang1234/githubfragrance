<?php
class CollectionController extends Controller {
    public function list() {
        $collections = $this->model('Collection')->getAll();
        $this->view('collection/list', ['collections' => $collections]);
    }
}
?>