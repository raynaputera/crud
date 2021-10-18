<?php
class M_data estends CI_Model {

     function input_data ($data,$table) {
         $this->db->insert($tables,$data)

     }

     function tampil_data() {
         return $this->db->get('mahasiswa');
     }
}

?>