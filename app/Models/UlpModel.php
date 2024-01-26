<?php

namespace App\Models;

use CodeIgniter\Model;

class UlpModel extends Model
{
    protected $table            = 'data_ulp';
    protected $primaryKey       = 'id_ulp';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_up', 'nama_ulp'];

    public function saveULP($data){
        return $this->insert($data);
    }

    public function getULP($id = null)
    {
        if ($id != null) {
            return $this->select('data_ulp.*, data_up.nama_up')
                ->join('data_up', 'data_up.id_up = data_ulp.id_up')
                ->find($id);
        }
    
        return $this->select('data_ulp.*, data_up.nama_up')
            ->join('data_up', 'data_up.id_up = data_ulp.id_up')
            ->findAll();
    }

    public function updateULP($data, $id){
        return $this->update($id, $data); 
    }

    public function deleteULP($id){
        return $this->delete($id);
    }



    // // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks = true;
    // protected $beforeInsert   = [];
    // protected $afterInsert    = [];
    // protected $beforeUpdate   = [];
    // protected $afterUpdate    = [];
    // protected $beforeFind     = [];
    // protected $afterFind      = [];
    // protected $beforeDelete   = [];
    // protected $afterDelete    = [];
}
