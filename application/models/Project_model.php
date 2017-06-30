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

        public function get_by_student($id_project, $id_student){
          $this->db->select('*');
          $this->db->from('usuario as u');
          $this->db->join('orientacao as o', 'u.idUsuario = o.usuario_idEstudante');
          $this->db->join('projeto as p', 'p.idProjeto = o.projeto_idProjeto');
          $this->db->where('p.idProjeto', $id_project);
          $this->db->where('p.usuario_idUsuario', $id_student);
          $query = $this->db->get();
          return $query->first_row();
        }

        public function filter_by_project($type_project = null, $status = null, $datei = null, $datef = null){
          $this->db->select('*, p.tipo as p_tipo, pa.tipo as pa_tipo');
          $this->db->from('projeto as p');
          $this->db->join('participa as pa', 'p.idProjeto = pa.projeto_idProjeto');
          if ($type_project != null){
            $this->db->where('p.tipo', $type_project);
          };
          if ($status != null){
          $this->db->where('p.statuss', $status);
          };
          if ($datei != null && $datef != null){
            $this->db->where('p.dataInicio >=', $datei);
            $this->db->where('p.dataFim <=', $datef);
          }
          $query = $this->db->get();
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

        public function participates($id){
          $query = $this->db->get_where('participa', array('projeto_idProjeto' => $id));
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
