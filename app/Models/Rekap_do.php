<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap_do extends Model
{
    use HasFactory;
    protected $table = "do";
    protected $guarded = ["updated_at", "deleted_at"];

    public function User(){
        return $this->hasOne(User::class, 'id' , 'user_id');
    }
}
