<?php

class Grade_level_model extends MY_Model
{
    protected $table = "grade_levels";
    protected $timestamps = TRUE;
    protected $searchables = ['title'];
    protected $fillables = ['title', 'title_abbr'];
    protected $primary_key = 'id';
    
    public function __construct()
    {
        parent::__construct();
    }
}
