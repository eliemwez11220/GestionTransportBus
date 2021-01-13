<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secure_model extends CI_Model
{

    public function login_data($username, $password)
    {
        $this->db->where('asset_email', $username);
        $query = $this->db->get('tb_im_users')->result();
        if ($query) {
            if (password_verify($password, $query[0]->asset_password)) {
                return $query[0];
            } else {
                return false;
            }
        } else {
            $this->db->where('asset_username', $username);
            $query = $this->db->get('tb_im_users')->result();
            if ($query) {
                if (password_verify($password, $query[0]->asset_password)) {
                    return $query[0];
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }

    public function getAllAdmins()
    {
        $this->db->select('*');
        $this->db->from('tb_im_users');
        $this->db->where('asset_type', 'admin');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }   public function getAllUsers()
    {
        $this->db->select('*');
        $this->db->from('tb_im_users');
        $this->db->where('asset_type', 'user');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function check_email_user($email)
    {
        $this->db->where('asset_email', $email);
        $query = $this->db->get('tb_im_users')->result();
        if ($query) {
            if ($query[0] != null) {
                return $query[0];
            } else return false;

        } else {
            return false;
        }
    }

    
    public function user_existant($username, $email)
    {
        $this->db->where('asset_username', $username);
        $this->db->where('asset_email', $email);
        $query = $this->db->get('tb_im_users')->result();
        if ($query) {
            return $query[0];
        } else {
            return false;
        }
    }

    public function user_session($id)
    {
        $this->db->where('id_asset', $id);
        $query = $this->db->get('tb_im_users')->result();
        if ($query) {
            return $query[0];
        } else {
            return false;
        }
    }
}
