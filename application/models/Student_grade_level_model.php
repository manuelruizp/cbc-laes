<?php

class Student_grade_level_model extends MY_Model
{
    protected $table = "student_grade_levels";

    public function __construct()
    {
        parent::__construct();
    }

    public function select_students_by_term_and_grade_level($term_id, $grade_level_id)
    {
        $this->db->select('students.id AS student_id, students.first_name, students.middle_name, students.paternal_last_name, students.maternal_last_name, student_grade_levels.term_id,student_grade_levels.grade_level_id, grade_levels.title');

        $this->db->from('students');

        $this->db->where('student_grade_levels.term_id', $term_id);
        $this->db->where('student_grade_levels.grade_level_id', $grade_level_id);
        
        $this->db->join('student_grade_levels', 'student_grade_levels.student_id = students.id');
        $this->db->join('grade_levels', 'grade_levels.id = student_grade_levels.grade_level_id');

        return $this->db->get()->result_array();
    }
}
