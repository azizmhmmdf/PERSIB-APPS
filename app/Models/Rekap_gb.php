<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Rekap_gb extends Model
{
    use HasFactory;
    protected $table = "gb";
    protected $guarded = ["updated_at", "deleted_at"];

    // public function User(){
    //     return $this->hasOne(User::class, 'id' , 'user_id');
    // }
}
