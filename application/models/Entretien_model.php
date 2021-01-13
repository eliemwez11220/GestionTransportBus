<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Entretien_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get entretien by ent_id
     */
    function get_entretien($ent_id)
    {
        return $this->db->get_where('tb_bm_entretiens',array('ent_id'=>$ent_id))->row_array();
    }
    
    /*
     * Get all entretiens count
     */
    function get_all_entretiens_count()
    {
        $this->db->from('tb_bm_entretiens');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all entretiens
     */
    function get_all_entretiens($params = array())
    {
        $this->db->order_by('ent_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('tb_bm_entretiens')->result_array();
    }
        
    /*
     * function to add new entretien
     */
    function add_entretien($params)
    {
        $this->db->insert('tb_bm_entretiens',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update entretien
     */
    function update_entretien($ent_id,$params)
    {
        $this->db->where('ent_id',$ent_id);
        return $this->db->update('tb_bm_entretiens',$params);
    }
    
    /*
     * function to delete entretien
     */
    function delete_entretien($ent_id)
    {
        return $this->db->delete('tb_bm_entretiens',array('ent_id'=>$ent_id));
    }
}