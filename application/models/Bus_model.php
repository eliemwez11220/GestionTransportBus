<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Bus_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get bus by bus_id
     */
    function get_bus($bus_id)
    {
        return $this->db->get_where('tb_bm_bus',array('bus_id'=>$bus_id))->row_array();
    }
    
    /*
     * Get all bus count
     */
    function get_all_bus_count()
    {
        $this->db->from('tb_bm_bus');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all bus
     */
    function get_all_bus($params = array())
    {
        $this->db->order_by('bus_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('tb_bm_bus')->result_array();
    }
        
    /*
     * function to add new bus
     */
    function add_bus($params)
    {
        $this->db->insert('tb_bm_bus',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update bus
     */
    function update_bus($bus_id,$params)
    {
        $this->db->where('bus_id',$bus_id);
        return $this->db->update('tb_bm_bus',$params);
    }
    
    /*
     * function to delete bus
     */
    function delete_bus($bus_id)
    {
        return $this->db->delete('tb_bm_bus',array('bus_id'=>$bus_id));
    }
}