<?php

namespace App\Models;

use CodeIgniter\Model;

class UpModel extends Model
{
    protected $table            = 'data_up';
    protected $primaryKey       = 'id_up';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_up'];

    // Dates
    // protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $skipValidation = true;

    public function saveUP($data)
    {
        return $this->insert($data);
    }

    public function getUP($id = null)
    {
        if ($id != null) {
            return $this->select('data_up.*')->find($id);
        }

        return $this->select('data_up.*')->findAll();
    }

    public function updateUP($data, $id)
    {
        return $this->update($id, $data);
    }

    public function deleteUP($id)
    {
        return $this->delete($id);
    }

    public function isUniqueName($name, $id)
    {
        return $this->db->table('data_up')
            ->where('nama_up', $name)
            ->where('id_up !=', $id)
            ->countAllResults() === 0;
    }

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
