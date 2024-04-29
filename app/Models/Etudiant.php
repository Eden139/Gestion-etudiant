<?php

namespace App\Models;

use CodeIgniter\Model;

class Etudiant extends Model
{
    protected $table      = 'etudiant';
    protected $primaryKey = 'id_etudiant';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['nom', 'prenoms', 'date_naissance', 'lieu_naissance', 'adresse', 'cin', 'telephone', 'email', 'genre', 'annee_bacc', 'num_bacc', 'nationalite'];
    //
    // protected bool $allowEmptyInserts = false;
    //
    // // Dates
    // protected $useTimestamps = false;
    // protected $dateFormat    = 'datetime';
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';
    //
    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;
    //
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
