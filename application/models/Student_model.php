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
}

