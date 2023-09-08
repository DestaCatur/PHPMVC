<?php 
Class User extends Controller {
    public function index(){
        $data['judul'] = "user";
        $data['nama'] = "Desta";
        $data['pekerjaan'] = "Siswa";
        $this->view("templates/header", $data);
        $this->view("user/index", $data);
        $this->view("templates/footer", $data);
    }

    public function profile(){
        $data['judul'] = 'User';
        $data['nama'] = "Desta";
        $data['pekerjaan'] = "Pelajar";
        $this->view("templates/header", $data);
        $this->view("user/profile", $data);
        $this->view("templates/footer", $data);

    }
}
?>