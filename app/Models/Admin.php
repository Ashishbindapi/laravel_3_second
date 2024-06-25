<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table ="admins";
    protected $fillable = [
        "first name",
        "last name",
        "email",
        "gender",
        "is_active",
        "created at",
        "updated_at"
    ];
}
