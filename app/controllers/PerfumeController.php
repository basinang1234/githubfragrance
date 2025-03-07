<?php
class PerfumeController extends Controller {
    public function details($id) {
        $perfume = $this->model('Perfume')->getById($id);
        $this->view('perfume/details', ['perfume' => $perfume]);
    }

    public function list() {
        $perfumes = $this->model('Perfume')->getAll();
        $this->view('perfume/list', ['perfumes' => $perfumes]);
    }
}
?>