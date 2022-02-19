<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DominasiOtak extends Model
{
    use HasFactory;
    protected $table = "kuisoner_do";
    protected $guarded = ["updated_at", "deleted_at"];
}
