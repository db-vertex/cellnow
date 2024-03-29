<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function insert($table, $data)
    {
        $status = $this->db->insert($table, $data);
        return $status;
    }

    function insert_and_return_id($table, $data)
    {
        $this->db->insert($table, $data);
        $insert_id = $this->db->insert_id();

        return  $insert_id;
    }

    function fetch_single_record($table, $id)
    {
        $this->db->where("id", $id);
        $this->db->limit(1);
        $query = $this->db->get($table);
        return $query;
    }

    function get_data_user($table,$id)
    {
        $this->db->select('*');
        $this->db->where("user_id", $id);
        $this->db->from($table);
        return $this->db->get();
    }


    function get_data($table)
    {
        $this->db->select('*');
        $this->db->from($table);
        return $this->db->get();
    }

   

    public function update_record($table = FALSE, $id = FALSE, $additional_data = [])
    {
        if (empty($id)) {
            return FALSE;
        }

        $data = [];

        // filter out any data passed that doesnt have a matching column in the groups table
        // and merge the set group data and the additional data
        if (!empty($additional_data)) {
            $data = array_merge($this->_filter_data($table, $additional_data), $data);
        }

        $this->db->update($table, $data, ['id' => $id]);

        return TRUE;
    }

    public function delete_record($table = FALSE, $id = FALSE)
    {
        // bail if mandatory param not set
        if (!$id || empty($id)) {
            return FALSE;
        }

        // remove the record itself
        $this->db->where('id', $id);
        return ($this->db->delete($table)) ? TRUE : FALSE;
    }

        /**
     * @param string $table
     * @param array  $data
     *
     * @return array
     */
    protected function _filter_data($table, $data)
    {
        $filtered_data = [];
        $columns = $this->db->list_fields($table);

        if (is_array($data)) {
            foreach ($columns as $column) {
                if (array_key_exists($column, $data))
                    $filtered_data[$column] = $data[$column];
            }
        }

        return $filtered_data;
    }

    public function update_token($id,$data)
  {

        return $this->db->where('user_id',$id)->update('subscribers',$data);

  }
}