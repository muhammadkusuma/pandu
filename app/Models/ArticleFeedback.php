<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleFeedback extends Model
{
    protected $table   = 'article_feedback'; // Define table name explicitly just in case
    protected $guarded = ['id'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
