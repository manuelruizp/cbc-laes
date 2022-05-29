<?php

class Student_model extends MY_Model
{
    protected $table = "students";
    protected $timestamps = TRUE;
    protected $fillables = ['first_name', 'middle_name', 'paternal_last_name', 'maternal_last_name', 'sex', 'student_id'];
    protected $fillable_dates = ['birthdate'];

    public function __construct()
    {
        parent::__construct();
    }

    public function insert_student(array $data = NULL)
    {
        // Si los datos no vienen de la fuente, buscarlos en el POST
        if ($data === NULL) {
            $data = array();
            foreach ($this->fillables as $fillable) {
                $data[$fillable] = $this->input->post($fillable);
            }
            foreach ($this->fillable_dates as $fillable_date) {
                $dateArr = explode("/", $this->input->post($fillable_date));
                $data[$fillable_date] = $dateArr[2] . "-" . $dateArr[1] . "-" . $dateArr[0];
            }
        }

        // Si los timestamps están configurados, agregarlos al arreglo de datos
        if ($this->timestamps) {
            $data['created_at'] = date($this->timestamps_format);
            $data['updated_at'] = date($this->timestamps_format);
        }

        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
}
