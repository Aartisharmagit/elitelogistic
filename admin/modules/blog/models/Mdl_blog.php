<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mdl_blog extends CI_Model
{
    private $table;
    function __construct()
    {
        parent::__construct();
        $this->table = "blog";
    }
    function view_data($where=null,$select="*")
    {
        $this->db->select($select);
        if($where) 
            $this->db->where($where);
        $this->db->order_by('b_id',"desc");
        return $this->db->get($this->table);
    }

    function add_data($data)
    {
        return $this->db->insert($this->table, $data);
    }
    function update_data($where, $data)
    {
        $this->db->where($where);
        return $this->db->update($this->table, $data);
    }
    function delete_data($where)
    {
        $this->db->where($where);
        return $this->db->delete($this->table);
    }
}
