<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employees extends Model
{

    use HasFactory;

    public function position()
    {
        return $this->belongsTo(Position::class)
    }

    public function name()
    {
        return $this->belongsTo(Name::class)
    }

    public function UID()
    {
        return $this->belongsTo(User::class)
    }

    public function phone_number()
    {
        return $this->belongsTo(PhoneNumber::class)
    }

    protected $table = 'employees'; 


}
