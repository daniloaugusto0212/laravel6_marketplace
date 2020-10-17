<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime'
    ];

    public function store()
    {
        return $this->hasOne(Store::class);
    }
}

// 1:1 - Um pra um (Usuario e Loja) hasOne e belongsTo
// 1:N - um pra muitos (Lojas e Produtos) hasMany e belongsTo
// N:N - Um ora muitos (PRodutos e Categorias) belongsToMany
