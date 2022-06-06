<?php

class User_grade_level_detail_model extends MY_Model
{
    protected $table = "user_grade_level_details";
    protected $timestamps = TRUE;
    protected $searchables = ['title'];
    protected $fillables = ['term_id', 'grade_level_id', 'user_id'];
    protected $primary_key = 'id';
    
    public function __construct()
    {
        parent::__construct();
    }
}
