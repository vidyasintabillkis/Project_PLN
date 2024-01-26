<?php

namespace App\Models;

use CodeIgniter\Model;

class GiModel extends Model
{
    protected $table            = 'data_gardu_induk';
    protected $primaryKey       = 'id_gardu_induk';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_gardu_induk'];

    public function getGI($id = null)
    {
        if ($id != null) {
            return $this->select('data_gardu_induk.*')->find($id);
        }

        return $this->select('data_gardu_induk.*')->findAll();
    }

    public function saveGI($data)
    {
        return $this->insert($data);
    }

    public function deleteGI($id)
    {
        return $this->delete($id);
    }

    public function updateGI($data, $id)
    {
        return $this->update($id, $data);
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
