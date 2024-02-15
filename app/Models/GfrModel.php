<?php

namespace App\Models;

use CodeIgniter\Model;

class GfrModel extends Model
{
    protected $table            = 'data_gfr';
    protected $primaryKey       = 'id_gfr';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_relay', 'gfr_arus_1', 'gfr_tms', 'gfr_curva_1', 'gfr_arus_2', 'gfr_td', 'gfr_curva_2', 'gfr_arus_3', 'gfr_delay', 'gfr_curva_3'];

    public function getGFR($id = null)
    {
        if ($id != null) {
            return $this->select('data_gfr.*, data_relay_proteksi.nama_keypoint')
                ->join('data_relay_proteksi', 'data_relay_proteksi.id_relay = data_gfr.id_relay')
                ->find($id);
        }

        return $this->select('data_gfr.*, data_relay_proteksi.nama_keypoint')
                ->join('data_relay_proteksi', 'data_relay_proteksi.id_relay = data_gfr.id_relay')
                ->findAll(); 
        }

    public function saveGFR($data){
        return $this->insert($data);
    }

    public function updateGFR($data, $id){
        return $this->update($id, $data); 
    }

    public function deleteGFR($id){
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
