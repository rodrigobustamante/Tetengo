<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;
    protected $fillable = ['rut', 'name', 'birthdate', 'gender', 'address', 'phone', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function attentions()
    {
        return $this->hasMany(Attention::class);
    }
}
