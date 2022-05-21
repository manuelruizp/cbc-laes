<?php

class Term_model extends MY_Model
{
    protected $table = "terms";
    
    public function __construct()
    {
        parent::__construct();
    }

    public function select_terms_for_dropdown()
    {
        $query = $this->db->order_by('id', 'DESC')
            ->get($this->table)
            ->result_array();

        $field_options = array('' => 'Elija una término...');
        foreach ($query as $row) {
            $field_options[$row['id']] = $row['title'];
        }

        return $field_options;
    }
}
