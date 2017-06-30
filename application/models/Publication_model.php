<?php

  class Publication_model extends CI_Model {

      public $table = 'publicacao';

      public function __construct(){
        parent::__construct();
      }

      public function all($amount = false, $limit = false){
        $query = $this->db->get($this->table, $limit, $amount);
        return $query->result();
      }

      public function filter_by_publication($type_publication = null, $yeari = null, $yearf = null){
    		$this->db->select('*');
    		$this->db->from('publicacao as p');
    		if ($type_publication != null){
    			$this->db->where('p.tipo', $type_publication);
    		}
    		if ($yeari != null || $yearf != null){
    			$this->db->where('p.ano BETWEEN "'. $yeari . '" and "'. $yearf .'"');
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
        $query = $this->db->get_where($this->table, array('idPublicacao' => $id));
        return $query->first_row();
      }

      public function update($data, $id){
        $this->db->update($this->table, $data, array('idPublicacao' => $id));
        return $this->find($id);
      }

      public function destroy($id){
        $this->db->delete($this->table, array('idPublicacao' => $id));
      }

      public function check_login($array){
        $query = $this->db->get_where($this->table, array(
          'email' => $array['email'],
          'senha' => sha1($array['senha'])
        ));
        return $query->first_row();
      }
  }
