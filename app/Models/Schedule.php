<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Schedule extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'start_at',
        'due_at',
        'body',
        'title',
        'sub_title',
        'user_id'
        ];
    
    public function getBylimit(int $limit_count = 30)
    {
        return $this->orderby('updated_at','DESC')->limit($limit_count)->get();
    }
    
    public function category()
    {
    return $this->belongsTo(User::class);
    }
    
}
