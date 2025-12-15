<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    // Scope helper untuk mengambil kategori global + kategori divisi user
    public function scopeForUser($query, User $user)
    {
        return $query->where('division_id', null)
            ->orWhere('division_id', $user->division_id);
    }
}
