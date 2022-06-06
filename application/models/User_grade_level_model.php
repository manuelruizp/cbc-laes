<?php

class User_grade_level_model extends MY_Model
{
    protected $table = "user_grade_levels";
    protected $timestamps = TRUE;
    protected $searchables = ['title'];
    protected $fillables = ['term_id', 'grade_level_id', 'user_id'];
    protected $primary_key = 'id';

    public function __construct()
    {
        parent::__construct();
    }

    public function select_user_grade_levels_extended($id = NULL)
    {
        $this->db->select('user_grade_levels.id, 
        user_grade_levels.term_id, 
        terms.title AS term_title, 
        user_grade_levels.grade_level_id,
        grade_levels.title AS grade_level_title,
        user_grade_levels.user_id, 
        users.email, 
        users.first_name, 
        users.last_name');

        $this->db->from($this->table);

        if ($id) {
            $this->db->where('users.id', $id);
        }

        $this->db->join('terms', 'terms.id = user_grade_levels.term_id');
        $this->db->join('users', 'users.id = user_grade_levels.user_id');
        $this->db->join('grade_levels', 'grade_levels.id = user_grade_levels.grade_level_id');

        $query = $this->db->get()->result_array();
        return $query;
    }

    public function select_user_grade_levels_by_term($term_id, $user_id)
    {
        $this->db->select('user_grade_levels.term_id, user_grade_levels.grade_level_id, grade_levels.title AS grade_level_title, user_grade_levels.user_id');

        $this->db->from($this->table);

        $this->db->where('user_grade_levels.term_id', $term_id);
        $this->db->where('user_grade_levels.user_id', $user_id);
        $this->db->join('grade_levels', 'grade_levels.id = user_grade_levels.grade_level_id');

        return $this->db->get()->result_array();
    }

    public function select_user_rubrics_by_grade_level($term_id, $user_id, $grade_level_id)
    {
        $this->db->select('user_grade_levels.id,
        user_grade_levels.term_id, 
        user_grade_levels.grade_level_id,
        user_grade_levels.user_id,
        user_grade_level_details.user_grade_level_id,
        user_grade_level_details.rubric_id,
        rubrics.id,
        rubrics.title AS rubric_title,
        rubrics.non_compliance,
        rubrics.partial_compliance,
        rubrics.compliance,
        rubrics.exceeds_compliance,
        rubrics.type');

        $this->db->from('user_grade_level_details');

        $this->db->where('user_grade_levels.term_id', $term_id);
        $this->db->where('user_grade_levels.user_id', $user_id);
        $this->db->where('user_grade_levels.grade_level_id', $grade_level_id);
        $this->db->join('user_grade_levels', 'user_grade_levels.id = user_grade_level_details.user_grade_level_id');
        $this->db->join('rubrics', 'rubrics.id = user_grade_level_details.rubric_id');

        return $this->db->get()->result_array();
    }
}
