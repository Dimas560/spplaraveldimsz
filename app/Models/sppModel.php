<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SppModel extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $guarded = [];
        
    public static function getAllspp()
    {
        $result = DB::table('pembayaran')
        ->select('id','nama','tgl_bayar','jumlah')
        ->get()->toArray();
        return $result;
    }
}

