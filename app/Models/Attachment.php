<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $guarded = ['id'];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
