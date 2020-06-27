<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Uang_masuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_uang_masuk");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["uang_masuk"] = $this->Model_uang_masuk->getAll();
        $this->load->view("admin/uang_masuk/list", $data);
    }

    public function add()
    {
        $uang_masuk = $this->Model_uang_masuk;
        $validation = $this->form_validation;
        $validation->set_rules($uang_masuk->rules());

        if ($validation->run()) {
            $uang_masuk->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/uang_masuk/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/uang_masuk');
       
        $uang_masuk = $this->Model_uang_masuk;
        $validation = $this->form_validation;
        $validation->set_rules($uang_masuk->rules());

        if ($validation->run()) {
            $uang_masuk->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["uang_masuk"] = $uang_masuk->getById($id);
        if (!$data["uang_masuk"]) show_404();
        
        $this->load->view("admin/uang_masuk/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Model_uang_masuk->delete($id)) {
            redirect(site_url('admin/Uang_masuk'));
        }
    }
}