<?php 

namespace App\Models;
use CodeIgniter\Model;

class ModelPenyiraman extends Model
{
    protected $table = 'penyiraman';
    protected $primaryKey = 'id';
    protected $allowedFields = [
 
      'penyiraman',
      'created_date',

    ];
}