<?php

class Term_model extends MY_Model
{
    protected $table = "terms";
    protected $timestamps = TRUE;
    
    public function __construct()
    {
        parent::__construct();
    }
}
