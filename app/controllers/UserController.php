<?php
class UserController extends Controller {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = $this->model('User')->login($_POST['username'], $_POST['password']);
            if ($user) {
                $_SESSION['user_id'] = $user->id;
                header('Location: /');
            } else {
                $this->view('user/login', ['error' => 'Invalid username or password']);
            }
        } else {
            $this->view('user/login');
        }
    }

    public function signup() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = $this->model('User');
            $user->username = $_POST['username'];
            $user->email = $_POST['email'];
            $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $user->save();
            header('Location: /login');
        } else {
            $this->view('user/signup');
        }
    }
}
?>