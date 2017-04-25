  <?php

    class User_model extends CI_Model {

        public $table = 'usuario';

        public function __construct(){
          parent::__construct();
        }

        public function all(){
          $query = $this->db->get($this->table);
          return $query->result();
        }

        public function create($data){
          $this->db->insert($this->table, $data);
        }

        public function find($id){
          $query = $this->db->get_where($this->table, array('idUsuario' => $id));
          return $query->first_row();
        }

        public function destroy($id){
          $this->db->delete($this->table, array('idUsuario' => $id));
        }
    }
