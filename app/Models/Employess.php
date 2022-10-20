<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employess extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $filiable = [
        "employeeNumber",
        "lastName",
        "firstName",
        "extension",
        "email",
        "officeCode",
        "reportsTo",
        "jobTitle"
    ]
}
