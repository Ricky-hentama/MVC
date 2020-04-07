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
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL . 'teacher');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
            header('Location: ' . BASEURL . 'teacher');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('teacher_model')->hapusData($id) > 0) {
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header('Location: ' . BASEURL . 'teacher');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . 'teacher');
            exit;
        }
    }
    public function ubah()
    {
        echo  json_encode($this->model('teacher_model')->getGuruById($_POST['id']));
    }
}
