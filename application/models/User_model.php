<?php
class User_model extends MY_Model
{
    protected $table = 'users';
    protected $primary_key = 'id';
    protected $fillables = ['first_name', 'last_name', 'email', 'username', 'password_hash', 'role'];
    protected $searchable = [];
    protected $timestamps = TRUE;

    public function __construct()
    {
        parent::__construct();
    }

    public function get_user_by_username($username)
    {
        $this->db->select('id, CONCAT(first_name, " ", last_name) AS full_name, email, username, password_hash');
        $this->db->from($this->table);
        $this->db->where('username', $username);

        return $this->db->get()->row_array();
    }
}
