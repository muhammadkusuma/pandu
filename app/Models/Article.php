<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = ['id'];

    // Relasi
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(ArticleFeedback::class);
    }

    // Logic untuk filter artikel berdasarkan hak akses
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    // Scope untuk mencari artikel yang relevan buat user
    // Menampilkan: Artikel Public (semua divisi) + Artikel Internal (hanya divisi user tsb)
    public function scopeRelevantFor($query, User $user)
    {
        return $query->where(function ($q) use ($user) {
            $q->where('visibility', 'public')
                ->orWhere(function ($sub) use ($user) {
                    $sub->where('visibility', 'internal')
                        ->where('division_id', $user->division_id);
                });
        });
    }
}
