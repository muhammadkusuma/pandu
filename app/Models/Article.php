<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Article extends Model
{
    // Field yang boleh diisi (Mass Assignment)
    protected $fillable = [
        'author_id',
        'category_id',
        'division_id',
        'title',
        'slug',
        'content',
        'visibility', // 'public' atau 'internal'
        'status',
        'view_count',
    ];

    /**
     * Relasi: Penulis Artikel (User)
     */
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Relasi: Kategori Artikel
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relasi: Divisi Pemilik Artikel
     */
    public function division(): BelongsTo
    {
        return $this->belongsTo(Division::class);
    }

    /**
     * Relasi BARU: User Tambahan yang Diizinkan Mengakses (Many-to-Many)
     */
    public function allowedUsers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'article_allowed_users', 'article_id', 'user_id')
            ->withTimestamps();
    }

    /**
     * Relasi BARU: Divisi Tambahan yang Diizinkan Mengakses (Many-to-Many)
     */
    public function allowedDivisions(): BelongsToMany
    {
        return $this->belongsToMany(Division::class, 'article_allowed_divisions', 'article_id', 'division_id')
            ->withTimestamps();
    }

    /**
     * Relasi: Feedback / Komentar (Dari file migrasi Anda sebelumnya)
     */
    public function feedbacks(): HasMany
    {
        return $this->hasMany(ArticleFeedback::class);
    }

    /**
     * Relasi: Attachment / Lampiran (Dari file migrasi Anda sebelumnya)
     */
    public function attachments(): HasMany
    {
        return $this->hasMany(Attachment::class);
    }

    /**
     * Helper Function UTAMA: Cek Hak Akses
     * Fungsi ini menentukan apakah $user boleh melihat artikel ini atau tidak.
     */
    public function canBeAccessedBy(User $user): bool
    {
        // 1. Superadmin (role 'admin') selalu boleh akses semua
        if ($user->role === 'admin') {
            return true;
        }

        // 2. Pembuat artikel (author) selalu boleh akses miliknya sendiri
        if ($this->author_id === $user->id) {
            return true;
        }

        // 3. Jika artikel statusnya PUBLIC, semua user (bahkan viewer) boleh akses
        if ($this->visibility === 'public') {
            return true;
        }

        // --- MULAI PENGECEKAN DOKUMEN INTERNAL/RAHASIA ---

        // 4. Cek apakah User berasal dari Divisi Pemilik Artikel?
        // (Biasanya orang satu divisi boleh lihat dokumen internal divisinya sendiri)
        if ($this->division_id === $user->division_id) {
            return true;
        }

        // 5. Cek apakah Divisi User tersebut secara spesifik diizinkan (Shared Division)
        // Kita ambil semua ID divisi yang diizinkan, lalu cek apakah user ada di sana.
        $allowedDivisionIds = $this->allowedDivisions()->pluck('divisions.id')->toArray();
        if (in_array($user->division_id, $allowedDivisionIds)) {
            return true;
        }

        // 6. Cek apakah User tersebut secara spesifik diizinkan (Shared User/Individual)
        $allowedUserIds = $this->allowedUsers()->pluck('users.id')->toArray();
        if (in_array($user->id, $allowedUserIds)) {
            return true;
        }

        // Jika tidak lolos semua pengecekan di atas, tolak akses.
        return false;
    }
}
