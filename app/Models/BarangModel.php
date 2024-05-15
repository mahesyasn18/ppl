<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    function ambilData() {
        $db = db_connect();
        $query = $db->query("SELECT * FROM barang");
        return $query->getResult('array');
    }
}
