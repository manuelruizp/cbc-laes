<?php

class User_model extends MY_Model
{
    protected $table = "users";
    protected $searchables = ['first_name', 'last_name', 'username'];
    protected $fillables = ['first_name', 'middle_name', 'last_name', 'email', 'username', 'role'];
    protected $primary_key = 'id';

    public function __construct()
    {
        parent::__construct();
    }
}
