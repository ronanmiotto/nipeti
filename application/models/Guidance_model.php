<?php

  class Guidance_model extends CI_Model {

      public $table = 'orientacao';

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
        $query = $this->db->get_where($this->table, array('idOrientacao' => $id));
        return $query->first_row();
      }

      public function update($data, $id){
        $this->db->update($this->table, $data, array('idOrientacao' => $id));
        return $this->find($id);
      }

      public function destroy($id){
        $this->db->delete($this->table, array('idOrientacao' => $id));
      }

      public function filter($type_guidance, $status, $datei, $datef){
        $this->db->select('*');
        $this->db->from('projeto as p');
        $this->db->join('participa as pa', 'p.idProjeto = pa.projeto_idProjeto');
        if ($type != null){
          $this->db->where('p.tipo', $type);
        };
        if ($status != null){
        $this->db->where('p.statuss', $status);
        };
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
