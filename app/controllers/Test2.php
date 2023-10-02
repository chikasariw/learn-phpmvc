<?php
 
class Test2 extends Controller {
    public function index()
    {
        $data['judul'] = 'Test2';
        $data['t2'] = $this->model('Test2_model')->getAllTest2();
        $this->view('templates/header', $data);
        $this->view('test2/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Test2';
        $data['t2'] = $this->model('Test2_model')->getTest2ById($id);
        $this->view('templates/header', $data);
        $this->view('test2/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ( $this->model('Test2_model')->tambahDataTest2($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/test2');
            exit;
        }else{
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/test2');
            exit;   
        }
        $this->index();
    }

    public function hapus($id)
    {
        if ( $this->model('Test2_model')->hapusDataTest2($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/test2');
            exit;
        }else{
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/test2');
            exit;   
        }
        $this->index();
    }

    public function getubah() {
       echo json_encode($this->model('Test2_model')->getTest2ById($_POST['id']));
    }

    public function ubah(){
        if ( $this->model('Test2_model')->ubahDataTest2($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/test2');
            exit;
        }else{
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/test2');
            exit;   
        }
        $this->index();
    }
}