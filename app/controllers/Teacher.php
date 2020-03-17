<?php

class Teacher extends Controller
{
    public function index()
    {
        $data['judul'] = 'Teacher';
        $data['guru'] = $this->model('teacher_model')->getAllGuru();
        $this->view('templates/header', $data);
        $this->view('teacher/index', $data);
        $this->view('templates/footer');
    }
    public function detail($id)
    {
        $data['judul'] = 'Detail Teacher';
        $data['guru'] = $this->model('teacher_model')->getGuruById($id);
        $this->view('templates/header', $data);
        $this->view('teacher/detail', $data);
        $this->view('templates/footer');
    }
    public function tambah()
    {
        if ($this->model('teacher_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . 'teacher');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . 'teacher');
            exit;
        }
    }
}
