<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\Rekap_gb;
use App\Models\Rekap_do;
use App\Models\Rekap_kme;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function gb()
    {
        return $this->belongsTo(Rekap_gb::class, 'user_id' , 'id' );
    }

    public function do()
    {
        return $this->belongsTo(Rekap_do::class, 'user_id', 'id');
    }

    public function kme()
    {
        return $this->belongsTo(Rekap_kme::class, 'user_id', 'id');
    }
}
