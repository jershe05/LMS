<?php
namespace App\Domains\Class\Models;

use App\Domains\Auth\Models\User;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $table = 'grade';
    protected $fillable = [
        'class_id',
        'user_id',
        'period',
        'first',
        'second',
        'third',
        'fourth',
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function class()
    {
        return $this->hasOne(ModelClass::class, 'id', 'class_id');
    }
}
