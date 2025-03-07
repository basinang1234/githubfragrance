<?php
class BrandController extends Controller {
    public function details($id) {
        $brand = $this->model('Brand')->getById($id);
        $this->view('brand/details', ['brand' => $brand]);
    }

    public function list() {
        $brands = $this->model('Brand')->getAll();
        $this->view('brand/list', ['brands' => $brands]);
    }
}
?>