<?php

class Term_model extends MY_Model
{
    protected $table = "terms";
    protected $timestamps = TRUE;
    protected $searchables = ['title'];
    protected $fillables = ['title'];
    protected $fillable_dates = ['start_date', 'end_date'];
    protected $primary_key = 'id';
    
    public function __construct()
    {
        parent::__construct();
    }
}
