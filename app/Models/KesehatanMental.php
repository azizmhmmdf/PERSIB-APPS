<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KesehatanMental extends Model
{
    use HasFactory;
    protected $table = "kuisoner_kme";
    protected $guarded = ["updated_at", "deleted_at"];
}
