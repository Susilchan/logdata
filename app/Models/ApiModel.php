<?php 

namespace App\Models;
use CodeIgniter\Model;

class ApiModel extends Model
{
    protected $table = 'logdata';
    protected $primaryKey = 'id';
    protected $allowedFields = [
 
      'suhu',
      'kelembapan',
      'created_date',
      'blok',
    //   'updated_date'
    ];
}