<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Model extends CI_Model
{
    protected $table = null;
    protected $primary_key = null;
    protected $timestamps = null;
    protected $timestamps_format = 'Y-m-d H:i:s';
    protected $fillables = null;

    public function __construct()
    {
        $this->load->database();
        parent::__construct();
    }

    /**
     * Método general para seleccionar todos los registors de una tabla específica
     * @param array $data
     * @return array
     */
    public function select_all()
    {
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    /**
     * Método general para seleccionar una fila por su ID de una tabla específica
     * @param array $data
     * @return array
     */
    public function select_one_by_primary_key($id)
    {
        return  $this->db->get_where($this->table, ['id' => $id])->row_array();
    }

    /**
     * Método general para insertar una fila a una tabla especificada
     * @param array $data
     * @return mixed
     */
    public function insert_one($data)
    {
        if ($this->timestamps) {
            $data['created_at'] = date($this->timestamps_format);
            $data['updated_at'] = date($this->timestamps_format);
        }

        $this->db->insert($this->table, $data);

        return $this->db->insert_id();
    }

    /**
     * Método general para insertar muchas filas en una tabla especificada
     * @param array $batch
     * @return mixed
     */
    public function insert_many(array $batch, bool $truncate = NULL)
    {
        if ($truncate) {
            $this->db->truncate($this->table);
        }

        if ($this->timestamps) {
            for ($i = 0; $i < count($batch); $i++) {
                $batch[$i]['created_at'] = date($this->timestamps_format);
                $batch[$i]['updated_at'] = date($this->timestamps_format);
            }
        }

        return $this->db->insert_batch($this->table, $batch);
    }

    /**
     * Método general para actualizar una fila de una tabla específica por su ID
     * @param array $batch
     * @return mixed
     */
    public function update_one_primary_key($primary_key, $data)
    {

        if ($this->timestamps) {
            $data['updated_at'] = date($this->timestamps_format);
        }

        $this->db->where($this->primary_key, $primary_key);

        return $this->db->update($this->table, $data);
    }

    /**
     * Método general para eliminar una fila de una tabla por su ID
     * @param array $batch
     * @return bool
     */
    public function delete_one_by_primary_key($primary_key)
    {
        $this->db->where($this->primary_key, $primary_key);
        return $this->db->delete($this->table);
    }

    /**
     * Método general para contar las filas de una tabla sin ningún filtro
     * @param array $batch
     * @return int
     */
    public function count_table()
    {
        return $this->db->count_all_results($this->table);
    }

    /**
     * Método general para contar las filas de una tabla con filtros
     * @param array $batch
     * @return int
     */
    public function count_all(array $where = NULL)
    {
        if (!is_null($where)) {
            $where_keys = array_keys($where);
            for ($i = 0; $i < count($where); $i++) {
                $this->db->where($where_keys[$i], $where[$where_keys[$i]]);
            }
        }

        $this->db->from($this->table);
        return $this->db->count_all_results();
    }


    public function select_field_for_dropdown($field)
    {
        $query = $this->db->get($this->table)->result_array();

        $field_options = array('' => 'Elija una opción...');
        foreach ($query as $row) {
            $field_options[$row[$this->primary_key]] = $row[$field];
        }

        return $field_options;
    }
}
