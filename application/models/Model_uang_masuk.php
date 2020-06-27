<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_uang_masuk extends CI_Model
{
    private $_table = "pemasukan";

    public $id_pemasukan;
    public $no_transaksi;
    public $tanggal;
    public $nominal;
    public $keterangan;
   

    public function rules()
    {
        return [
            ['field' => 'no_transaksi',
            'label' => 'no_transaksi',
            'rules' => 'required'],

            ['field' => 'tanggal',
            'label' => 'tanggal',
            'rules' => 'required'],
            
            ['field' => 'nominal',
            'label' => 'nominal',
            'rules' => 'required'],

            ['field' => 'keterangan',
            'label' => 'keterangan',
            'rules' => 'required'],

            
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pemasukan" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_pemasukan ='';
        $this->no_transaksi = $post["no_transaksi"];
        $this->tanggal = $post["tanggal"];
        $this->nominal = $post["nominal"];
        $this->keterangan = $post["keterangan"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_pemasukan = $post["id"];
        $this->no_transaksi = $post["no_transaksi"];
        $this->tanggal = $post["tanggal"];
        $this->nominal = $post["nominal"];
        $this->keterangan = $post["keterangan"];
        $this->db->update($this->_table, $this, array('id_pemasukan' => $post["id"]));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_pemasukan" => $id));
    }

   
 }
