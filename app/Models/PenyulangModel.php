<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyulangModel extends Model
{
    protected $table            = 'data_penyulang';
    protected $primaryKey       = 'id_penyulang';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_gardu_induk', 'nama_penyulang_baru', 'nama_penyulang_lama', 'kapasitas_trafo'];

    public function savePenyulang($data){
        return $this->insert($data);
    }

    public function getPenyulang($id = null)
    {
        if ($id != null) {
            return $this->select('data_penyulang.*, data_gardu_induk.nama_gardu_induk')
                ->join('data_gardu_induk', 'data_gardu_induk.id_gardu_induk = data_penyulang.id_gardu_induk')
                ->find($id);
        }

        return $this->select('data_penyulang.*, data_gardu_induk.nama_gardu_induk')
            ->join('data_gardu_induk', 'data_gardu_induk.id_gardu_induk = data_penyulang.id_gardu_induk')
            ->findAll();
    }

    public function updatePenyulang($data, $id){
        return $this->update($id, $data); 
    }

    public function deletePenyulang($id){
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
