<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GayaBelajar extends Model
{
    use HasFactory;
    protected $table = "kuisoner_gb";
    protected $guarded = ["updated_at", "deleted_at"];
}
