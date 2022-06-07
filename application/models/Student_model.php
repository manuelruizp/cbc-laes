<?php

class Student_model extends MY_Model
{
    protected $table = "students";
    protected $timestamps = TRUE;
    protected $fillables = ['first_name', 'middle_name', 'paternal_last_name', 'maternal_last_name', 'sex', 'student_id'];
    protected $fillable_dates = ['birthdate'];
    protected $searchables = ['first_name', 'middle_name', 'paternal_last_name', 'maternal_last_name'];

    public function __construct()
    {
        parent::__construct();
    }

    public function get_student_term_information($student_id)
    {
        $this->db->select('students.id, 
        students.first_name,
          students.middle_name, 
          students.paternal_last_name, 
          students.maternal_last_name,
          student_grade_levels.grade_level_id,
          grade_levels.title AS grade_level_title');

        $this->db->from($this->table);
        $this->db->where('students.id', $student_id);

        $this->db->join('student_grade_levels', 'student_grade_levels.student_id = students.id');
        $this->db->join('grade_levels', 'grade_levels.id = student_grade_levels.grade_level_id');

        return $this->db->get()->row_array();
    }
}
