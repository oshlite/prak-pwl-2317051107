<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasSeeder extends Model
{
    public function run():void{
        $data=['A','B','C','D','E'];
        foreach($data as $kelas){
            Kelas::create([
                'nama_kelas'=>$kelas,]);
         }
    }
}
