<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = ['full_name', 'email', 'phone', 'cpf', 'cnpj', 'birth_date', 'status'];

    /** @use HasFactory<\Database\Factories\ClientFactory> */
    use HasFactory;

    public const STATUS = [
        'Active',
        'Inactive'
    ];
}
