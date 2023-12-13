<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = "tb_pelanggan";

    protected $fillable = [ 
        'pel_id_gol', 
        'pel_no', 
        'pel_nama', 
        'pel_alamat', 
        'pel_hp',  
        'pel_seri', 
        'pel_meteran', 
        'pel_aktif', 
        'pel_id_user'
    ];


    public function golongan()
    {
        return $this->belongsTo(Golongan::class, 'pel_id_gol', 'id');
    }
    public static function generateKodePel()
    {
        $plg     = Pelanggan::latest()->first();
        $kodePlg = 'PEL';

        if ($plg == null) {
            $noUrut = '001';
        } else {
            $explode = explode('-', $plg->pel_no);
            $noUrut  = $explode[1] + 1;
            $noUrut  = str_pad($noUrut, 3, "0", STR_PAD_LEFT);
        }

        $plgKode = $kodePlg . '-' . $noUrut;

        return $plgKode;
    }
}