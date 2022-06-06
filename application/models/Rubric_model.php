<?php

class Rubric_model extends MY_Model
{
    protected $table = "rubrics";
    protected $timestamps = TRUE;
    protected $fillables = ['title', 'non_compliance', 'partial_compliance', 'compliance', 'exceeds_compliance', 'type'];
    protected $searchables = ['title', 'type'];


    public function __construct()
    {
        parent::__construct();
    }

    public function get_rubrics_by_grade_level($term_id, $user_id, $grade_level_id) {

    }
}
