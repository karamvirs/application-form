
<?php
function get_all(){

$this->load->database();
$query = $this->db->get('detail_table');
return $query->result(); 

}

?>
