<?php

class User_model extends MY_Model
{
    protected $table = "users";
    protected $searchables = ['first_name', 'last_name'];

    public function __construct()
    {
        parent::__construct();
    }
}
