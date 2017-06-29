'  <?php

    class User_model extends CI_Model {

        public $table = 'usuario';

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
          $query = $this->db->get_where($this->table, array('idUsuario' => $id));
          return $query->first_row();
        }

        public function update($data, $id){
          $this->db->update($this->table, $data, array('idUsuario' => $id));
          return $this->find($id);
        }

        public function destroy($id){
          $this->db->delete($this->table, array('idUsuario' => $id));
        }

        public function get_by($type){
          $query = $this->db->get_where($this->table, array(
            'tipo' => $type
          ));
          return $query->result();
        }

        public function projects($id){
          $this->db->select('*, p.tipo as ptipo');
          $this->db->from('usuario as u');
          $this->db->join('participa as p', 'p.usuario_idUsuario = u.idUsuario');
          $this->db->join('projeto as pro', 'p.projeto_idProjeto = pro.idProjeto');
          $this->db->where('pro.idProjeto', $id);
          $query = $this->db->get();
          return $query->result();
        }

        public function guidances_by_user(){
          $this->db->select('*');
          $this->db->from('usuario as u');
          $this->db->join('orientacao as o', 'u.idUsuario = o.usuario_idServidor');
          $this->db->join('projeto as p', 'p.idProjeto = o.projeto_idProjeto');
          $this->db->where('u.tipo = 1');
          $this->db->or_where('u.tipo = 3');
          $query = $this->db->get();
          return $query->result();
        }

        public function check_login($array){
          $query = $this->db->get_where($this->table, array(
            'email' => $array['email'],
            'senha' => sha1($array['senha'])
          ));
          return $query->first_row();
        }
    }
