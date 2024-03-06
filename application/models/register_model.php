<?php
class login_model extends ci_model{

	public function cek_register($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

}