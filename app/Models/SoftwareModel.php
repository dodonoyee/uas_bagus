<?php

namespace App\Models;

use CodeIgniter\Model;

class SoftwareModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'software';
    protected $primaryKey       = 'software_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["software_id", "software_title", "software_description", "software_harga", "software_img"];
}
