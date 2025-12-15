<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $guarded = ['id'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    // Artikel yang ditulis user ini
    public function articles()
    {
        return $this->hasMany(Article::class, 'author_id');
    }
}
