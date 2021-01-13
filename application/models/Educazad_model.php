<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Educazad_model extends CI_Model
{

    public function insert_data($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        return $this->db->update($table, $data, $where);
    }

    public function get_count($table, $where = array())
    {
        return $this->db->where($where)->count_all_results($table);
    }

    public function get_unique($table, $where = array())
    {
        return $query = $this->db->get_where($table, $where)->row();
    }

    public function get_multiple($table, $where = array(), $order_by = '', $order = '', $limit_page = array(), $position = array())
    {
        if(!empty($limit_page)){
            $this->db->limit($limit_page, $position);
        }
        $this->db->order_by($order_by, $order);
        $query = $this->db->get_where($table, $where);
        return $query->result();
    }
    public function get_one_row($table, $where = array())
    {
        return $this->db->get_where($table, $where)->row_array();
    }
    public function get_distinct($table, $where = array(), $select, $order_by = '')
    {
        $this->db->order_by($order_by, 'DESC');
        $this->db->distinct();
        $this->db->select($select);
        $query = $this->db->get_where($table, $where);
        return $query->result_array();
    }

    public function import_data($table, $data)
    {
        if ($this->db->insert_batch($table, $data)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

public function shop_produit($shop_id = null, $produit_id = null, $limit = null)
    {
        if (!empty($limit)) {
            $this->db->limit($limit);
        }
        
        $this->db->order_by('tb_im_stockshops.stock_id', 'DESC');
        $this->db->join('tb_im_shops', 'tb_im_shops.shop_id = tb_im_stockshops.shop_sid');
        $this->db->join('tb_im_produits', 'tb_im_produits.intrant_id = tb_im_stockshops.produit_sid');
        if ($shop_id && $produit_id) {
            $query = $this->db->get_where('tb_im_stockshops',
             array('shop_sid' => $shop_id, 'produit_sid' => $produit_id))->result();
            return $query->result();
        } else {
            $query = $this->db->get('tb_im_stockshops')->result();
            return $query;
        }
    }
}
