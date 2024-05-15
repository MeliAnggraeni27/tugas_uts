<?php

namespace App\Models;

use CodeIgniter\Model;

class StaffModel extends Model
{
    protected $table = 'staff'; // Nama tabel Anda
    protected $primaryKey = 'id_staff'; // Primary key
    protected $allowedFields = ['nama_staff', 'bagian_staff', 'notlp_staff'];
}