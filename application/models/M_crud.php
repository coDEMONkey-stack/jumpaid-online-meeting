<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_crud extends CI_Model
{
    public function getResult($table)
    {
        $query = $this->db->get($table)->result();
        return $query;
    }

    public function getArrayWhere($table, $where, $id)
    {
        $this->db->where($where, $id);
        $query = $this->db->get($table)->row_array();
        return $query;
    }

    public function getBarang()
    {
        $this->db->join('jenis_barang', 'jenis_barang.id = barang.jenis_barang');
        $this->db->join('satuan_divisi', 'satuan_divisi.id = barang.satuan_divisi');
        $this->db->join('satuan_vendor', 'satuan_vendor.id = barang.satuan_vendor');
        $this->db->select('*, barang.id as id_barang, jenis_barang.nama as j_barang, satuan_divisi.nama as s_divisi, satuan_vendor.nama as s_vendor');
        $query = $this->db->get('barang')->result();
        return $query;
    }

    public function get_berita_list($limit, $start)
    {
        $query = $this->db->get('berita', $limit, $start);
        return $query;
    }

    public function getInvoice()
    {
        $this->db->select('RIGHT(data_transaksi.nomor_faktur,4) as kode,', FALSE);
        $this->db->order_by('nomor_faktur', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('data_transaksi');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }

        $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $invoice = "MKI20" . date('m') . $kodemax;
        return $invoice;
    }

    public function getKodeProduk($id)
    {
        $this->db->select('data_order.kode_produk as kode,', FALSE);
        $this->db->where('nomor_faktur',$id);
        $this->db->order_by('kode_produk', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('data_order');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }

        $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);
        $kodeproduk = $kodemax;
        return $kodeproduk;
    }
    public function getHarga($table,$id)
    {
        $this->db->where('id',$id);
        $result = $this->db->get($table);

        return $result->row_array();
    }

    public function viewByDetailBahan($id){
        $this->db->where('id_jenis_produk', $id);
        $result = $this->db->get('detail_bahan')->result(); // Tampilkan semua data kota berdasarkan id provinsi
        
        return $result; 
      }
}
