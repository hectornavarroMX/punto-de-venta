<?php
namespace App\Models;

use CodeIgniter\Model;

class UnidadesModel extends Model
{
    protected $table = 'unidades';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';

    // protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'nombre',
        'nombre_corto',
        'activo'
    ];

    // Dates
    protected $useTimestamps = true;
    // protected $dateFormat    = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
// protected $cleanValidationRules = true;
}