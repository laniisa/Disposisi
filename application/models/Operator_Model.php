<?php
class Operator_Model extends CI_Model {

    public function get_all_surat() {
        $query = $this->db->get('surat');
        return $query->result_array();
    }

    public function insert_surat($data) {
        $this->db->insert('surat', $data);
        return $this->db->insert_id();
    }

    public function get_surat_by_id($id)
    {
    $query = $this->db->get_where('surat', array('id' => $id));
    return $query->row_array();
    }

    public function update_surat($id, $data)
    {
    $this->db->where('id', $id);
    $this->db->update('surat', $data);
    }

    public function get_jumlah_surat() {
        $this->db->from('surat');
        return $this->db->count_all_results();
    }
}
?>
