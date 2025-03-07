<?php
class AdminController extends Controller {
    public function dashboard() {
        $this->view('admin/dashboard');
    }

    public function editProfile() {
        $this->view('admin/edit_profile');
    }

    public function myReviews() {
        $this->view('admin/my_reviews');
    }
}
?>