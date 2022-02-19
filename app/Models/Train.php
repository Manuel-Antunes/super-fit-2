<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;
    protected $fillable = [
        'personal_id',
        'client_id',
        'date',
        'start_date',
        'end_date'
    ];

    public function personal()
    {
        return $this->belongsTo(User::class, 'personal_id');
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class, 'trains_exercises', ['sequencies']);
    }
}
