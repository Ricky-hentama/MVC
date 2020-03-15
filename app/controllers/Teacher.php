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
    public function tambah($data)
    {
    }
}
