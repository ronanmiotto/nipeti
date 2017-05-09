  <?php

    class Project_model extends CI_Model {

        public $table = 'projeto';

        public function __construct(){
          parent::__construct();
        }

        public function all($amount = false, $limit = false){
          $query = $this->db->get($this->table, $limit, $amount);
          return $query->result();
        }

        public function count(){
          return $this->db->count_all($this->table);
        }

        public function create($data){
          $this->db->insert($this->table, $data);
        }

        public function find($id){
          $query = $this->db->get_where($this->table, array('idProjeto' => $id));
          return $query->first_row();
        }

        public function update($data, $id){
          $this->db->update($this->table, $data, array('idProjeto' => $id));
          return $this->find($id);
        }

        public function destroy($id){
          $this->db->delete($this->table, array('idProjeto' => $id));
        }

        public function check_login($array){
          $query = $this->db->get_where($this->table, array(
            'email' => $array['email'],
            'senha' => sha1($array['senha'])
          ));
          return $query->first_row();
        }
    }
