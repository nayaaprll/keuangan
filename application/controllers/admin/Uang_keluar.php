<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Uang_keluar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_uang_keluar");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["uang_keluar"] = $this->model_uang_keluar->getAll();
        $this->load->view("admin/uang_keluar/list", $data);
    }

    public function add()
    {
        $uang_keluar = $this->model_uang_keluar;
        $validation = $this->form_validation;
        $validation->set_rules($uang_keluar->rules());

        if ($validation->run()) {
            $uang_keluar->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/uang_keluar/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/uang_keluar');
       
        $uang_keluar = $this->model_uang_keluar;
        $validation = $this->form_validation;
        $validation->set_rules($uang_keluar->rules());

        if ($validation->run()) {
            $uang_keluar->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["uang_keluar"] = $uang_keluar->getById($id);
        if (!$data["uang_keluar"]) show_404();
        
        $this->load->view("admin/uang_keluar/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->model_uang_keluar->delete($id)) {
            redirect(site_url('admin/Uang_keluar'));
        }
    }
}