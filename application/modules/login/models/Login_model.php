<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    // Cek user
    public function Auth_user($where,$table)
    {
        $hasil = $this->db->where($where)->limit(1)->get($table);
        if ($hasil->num_rows() > 0) {
            return $hasil->row();
        } else {
            return array();
        }
    }

    // Global View dengan $tbl sebagai nama tabel nya
    public function viewAll($tbl)
    {
        $this->db->select('*');
        $this->db->from($tbl);
        $query  = $this->db->get();

        return $query;
    }

    // Global View Where
    public function viewWhere($tbl, $where, $id)
    {
        $this->db->select('*');
        $this->db->from($tbl);
        $this->db->where($where, $id);
        $query  = $this->db->get();

        return $query;
    }

    // Global View With Condition And Variable Select
    public function viewWhereSelect($select, $tbl, $where, $sekarang)
    {
        $this->db->select($select);
        $this->db->from($tbl);
        $this->db->where($where, $sekarang);
        $query  = $this->db->get();

        return $query;
    }
    
    // Global Insert dengan $tbl sebagai nama tabel dan $input sebagai data nya
    public function insert($tbl, $input)
    {
        return $this->db->insert($tbl, $input);
    }

    // Global Update dengan $tbl sebagai nama tabel dan $input sebagai inputan datanya
    public function update($tbl, $where, $id, $update)
    {
        return $this->db->where($where, $id)->update($tbl, $update);
    }

    // Global Update dengan assosiative Where
    public function updateAss($tbl, $where, $update)
    {
        return $this->db->where($where)->update($tbl, $update);
    }

    // Global Delete dengan $where sebagai kondisi data yang ingin di eksekusi $tbl sebagai nama tabel dan $id sebagai acuan yang ingin di eksekusi
    public function delete($where, $tbl, $id)
    {
        $this->db->where($where, $id);
        $this->db->delete($tbl);
        return true;
    }

    // Global Cari
    public function cari($tbl, $where, $like)
    {
        $this->db->select('*');
        $this->db->from($tbl);
        $this->db->like($where, $like);
        $query  = $this->db->get();

        return $query;
    }

    // Datatables Admin View
    public function json($select, $table)
    {
        $this->datatables->select($select);
        $this->datatables->from($table);

        return $this->datatables->generate();
    }

    // Global Json Where
    public function jsonWhere($select, $table, $where, $id)
    {
        $this->datatables->select($select);
        $this->datatables->from($table);
        $this->datatables->where($where, $id);

        return $this->datatables->generate();
    }

    // Cek Maks Data
    public function cekmaks($table, $where, $id)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where, $id);
        $query = $this->db->get()->num_rows();

        return $query;
    }

    //Gobal Ceks Num Rows
    public function ceksNumRows($select, $table, $where)
    {
        $this->db->select($select);
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get()->num_rows();

        return $query;
    }

    // Cek Data
    public function cekData($where, $table)
    {
        $this->db->where($where);
        $query = $this->db->get($table);
        if (!empty($query->result_array())) {
            return 1;
        } else {
            return 0;
        }
    }

    //Gobal Ceks Array
    public function ceksArray($select, $table, $where)
    {
        $this->db->select($select);
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();

        return $query;
    }

    // Get Last Data On Table
    public function lastData($select, $table, $where)
    {
        $this->db->select($select);
        $this->db->from($table);
        $this->db->order_by($where, 'DESC');
        $this->db->limit(1);
        $query      = $this->db->get();

        return $query;
    }

    // View Datatable Module Item With Join
    public function jsonItemJoin($select)
    {
        $this->datatables->select($select);
        $this->datatables->from('tbl_item');
        $this->datatables->where('tbl_item.status_item', '1');
        $this->datatables->join('tbl_jenis', 'tbl_item.jenis_item=tbl_jenis.id_jenis', 'LEFT');
        $this->datatables->join('tbl_satuan', 'tbl_item.satuan_item=tbl_satuan.id_satuan', 'LEFT');

        return $this->datatables->generate();
    }

    // View Datatable Module Order With Join
    public function jsonOrderJoin($select)
    {
        $this->datatables->select($select);
        $this->datatables->from('tbl_order');
        // $this->datatables->where('tbl_item.status_item', '1');
        $this->datatables->join('tbl_cara_bayar', 'tbl_order.cara_bayar=tbl_cara_bayar.id_carabayar', 'LEFT');
        $this->datatables->join('tbl_status_order', 'tbl_order.status_order=tbl_status_order.id_statusorder', 'LEFT');
        $this->datatables->join('tbl_supplier', 'tbl_order.supplier=tbl_supplier.id_supplier', 'LEFT');

        return $this->datatables->generate();
    }

    // Global JSON Join
    public function jsonJoin($select, $table, $where, $id)
    {
        $this->db->select($select);
        $this->db->from($table);
        $this->db->where($where, $id);
        $this->db->join('tbl_supplier', 'tbl_order.supplier=tbl_supplier.id_supplier', 'LEFT');
        $query = $this->db->get();

        return $query;
    }

    // Global Delete Images
    public function deleteImage($table, $where, $id)
    {
        $cek = $this->viewWhere($table, $where, $id)->result_array();
        if ($cek[0]['photo'] != "default.jpg") {
            $filename = explode(".", $cek[0]['photo']);
            // Delete Field On Database If Success
            if ($this->db->where($where, $id)->delete($table)) {
                // Delete Image
                return array_map('unlink', glob(FCPATH."frontend/assets/images/product/$filename[0].*"));
            }
        }
    }

    // Query To Get Response Ajax Supplier
    public function getSupplier($searchTerm="")
    {

        // Fetch users
        $this->db->select('*');
        $this->db->where("nama_supplier like '%".$searchTerm."%' ");
        $fetched_records = $this->db->get('tbl_supplier');
        $users = $fetched_records->result_array();

        // Initialize Array with fetched data
        $data = array();
        foreach ($users as $user) {
            $data[] = array("id"=>$user['id_supplier'], "text"=>$user['nama_supplier']);
        }
        return $data;
    }

    // Query To Get Response Ajax Users
    public function getValidationUser($searchTerm="")
    {

        // Fetch users
        $this->db->select('*');
        $this->db->where("nama like '%".$searchTerm."%' ");
        $fetched_records = $this->db->get('tbl_users');
        $users = $fetched_records->result_array();

        // Initialize Array with fetched data
        $data = array();
        foreach ($users as $user) {
            $data[] = array("id"=>$user['id'], "text"=>$user['nama']);
        }
        return $data;
    }

    // Global Query To Get Response Select2 Ajax
    public function getStatusSelect($select, $table, $like, $array1, $array2, $searchTerm="")
    {

        // Fetch users
        $this->db->select($select);
        $this->db->like($array2, $searchTerm);
        $fetched_records = $this->db->get($table);
        $users = $fetched_records->result_array();

        // Initialize Array with fetched data
        $data = array();
        foreach ($users as $user) {
            $data[] = array("id"=>$user[$array1], "text"=>$user[$array2]);
        }
        return $data;
    }

    // Global Query To Get Response Select2 Ajax
    public function getStatusKodeTrans($select, $table, $like, $array1, $array2, $searchTerm="")
    {
        // Fetch users
        $this->db->select($select);
        $this->db->like($array2, $searchTerm);
        $this->db->where('kekurangan_pembelian >', 0);
        $fetched_records = $this->db->get($table);
        $users = $fetched_records->result_array();

        // Initialize Array with fetched data
        $data = array();
        foreach ($users as $user) {
            $data[] = array("id"=>$user[$array1], "text"=>$user[$array2]);
        }
        return $data;
    }

    // Global Query To Get Response Select2 Ajax
    public function getTrans_beli($searchTerm="")
    {

        // Fetch users
        $this->db->select('*');
        $this->db->where("no_order like '%".$searchTerm."%' ");
        $fetched_records = $this->db->get('tbl_order');
        $users = $fetched_records->result_array();

        // Initialize Array with fetched data
        $data = array();
        foreach ($users as $user) {
            $data[] = array("id"=>$user['id_order'], "text"=>$user['no_order']);
        }
        return $data;
    }

    // Global View Datatable Module Order With Join
    public function jsonOrderJoinGlobal($id)
    {
        $this->datatables->select('
        tbl_detail_order.id_detail_order AS id_detail_order,
        tbl_detail_order.id_item AS dettim,
        tbl_detail_order.no_order AS no_order,
        sum(tbl_detail_order.qty) AS qty,
        tbl_detail_order.harga AS harga,
        tbl_detail_order.diskon AS diskon,
        sum(tbl_detail_order.total) AS total,
        tbl_item.kode_item AS kode_item,
        tbl_item.nama_item AS nama_item
        ');
        $this->datatables->from('tbl_detail_order');
        $this->datatables->join('tbl_item', 'tbl_detail_order.id_item=tbl_item.id_item', 'LEFT');
        // $this->datatables->where('tbl_detail_order.no_order', $id);
        $this->datatables->where(['tbl_detail_order.no_order'=>$id,'tbl_detail_order.status_transaksi'=>0,'tbl_detail_order.id_user'=>$this->session->userdata('id')]);
        $this->datatables->group_by(['tbl_detail_order.no_order','tbl_detail_order.id_item']);

        return $this->datatables->generate();
    }

    public function jsonOrderJoinGlobalEdit($id)
    {
        $this->datatables->select('
        tbl_detail_order.id_detail_order AS id_detail_order,
        tbl_detail_order.id_item AS dettim,
        tbl_detail_order.no_order AS no_order,
        sum(tbl_detail_order.qty) AS qty,
        tbl_detail_order.harga AS harga,
        tbl_detail_order.diskon AS diskon,
        sum(tbl_detail_order.total) AS total,
        tbl_item.kode_item AS kode_item,
        tbl_item.nama_item AS nama_item
        ');
        $this->datatables->from('tbl_detail_order');
        $this->datatables->join('tbl_item', 'tbl_detail_order.id_item=tbl_item.id_item', 'LEFT');
        // $this->datatables->where('tbl_detail_order.no_order', $id);
        $this->datatables->where(['tbl_detail_order.no_order'=>$id,'tbl_detail_order.id_user'=>$this->session->userdata('id')]);
        $this->datatables->group_by(['tbl_detail_order.no_order','tbl_detail_order.id_item']);

        return $this->datatables->generate();
    }

    public function jsonGroupTrans()
    {
        $this->datatables->select('id_item,kode_item,nama_item,harga_jual,count(stok) AS stok');
        $this->datatables->from('tbl_item');
        $this->datatables->group_by('tbl_item');

        return $this->datatables->generate();
    }

    public function jsonOrderPembelianDetail($id)
    {
        $this->datatables->select('*,
        tbl_detail_order.diskon AS diskon,
        tbl_item.diskon AS disItem
        ');
        $this->datatables->from('tbl_detail_order');
        // $this->datatables->join('tbl_order', 'tbl_detail_order.no_order=tbl_order.no_order', 'LEFT');
        $this->datatables->join('tbl_item', 'tbl_detail_order.id_item=tbl_item.id_item', 'LEFT');
        $this->datatables->where('tbl_detail_order.no_order', $id);
        // $this->datatables->select('id_detail_order,no_order,id_item');
        // $this->datatables->from('tbl_detail_order');
        // $this->datatables->where('no_order', $id);

        return $this->datatables->generate();
    }

    // Global View Datatable Global Join
    public function jsonGlobalJoin($select, $tbl, $join)
    {
        $this->datatables->select($select);
        $this->datatables->from($tbl);
        foreach ($join as $row) {
            $this->datatables->join($row[0], $row[1], $row[2]);
        }

        return $this->datatables->generate();
    }

    // Global View Datatable Global Join
    public function jsonGlobalJoinWhere($select, $tbl, $where, $join)
    {
        $this->datatables->select($select);
        $this->datatables->from($tbl);
        $this->datatables->where($where);
        foreach ($join as $row) {
            $this->datatables->join($row[0], $row[1], $row[2]);
        }

        return $this->datatables->generate();
    }

    // Global View Datatable Global
    public function jsonGlobal($select, $tbl)
    {
        $this->datatables->select($select);
        $this->datatables->from($tbl);

        return $this->datatables->generate();
    }

    // Global View Datatable Global Where
    public function jsonGlobalJsonWhere($select, $tbl, $where)
    {
        $this->datatables->select($select);
        $this->datatables->from($tbl);
        $this->datatables->where($where);

        return $this->datatables->generate();
    }

    // Global Query To Get Data Response Select2 Ajax
    public function getData($searchTerm="", $order, $table, $data1)
    {

        // Fetch users
        $this->db->select('*');
        $this->db->where($order." like '%".$searchTerm."%' ");
        $fetched_records = $this->db->get($table);
        $users = $fetched_records->result_array();

        // Initialize Array with fetched data
        $data = array();
        foreach ($users as $user) {
            $data[] = array("id"=>$user[$data1], "text"=>$user[$order]);
        }
        return $data;
    }

    // Global View Join
    public function viewGlobalJoinWhere($select, $tbl, $where, $join)
    {
        $this->db->select($select);
        $this->db->from($tbl);
        $this->db->where($where);
        foreach ($join as $row) {
            $this->db->join($row[0], $row[1], $row[2]);
        }
        $query      = $this->db->get();

        return $query;
    }
}
