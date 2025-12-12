<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Position;
use App\Models\Name;
use App\Models\User;
use App\Models\PhoneNumber;

class Employees extends Model
{
    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function name()
    {
        return $this->belongsTo(Name::class);
    }

    public function UID()
    {
        return $this->belongsTo(User::class);
    }

    public function phone_number()
    {
        return $this->belongsTo(PhoneNumber::class);
    }
}