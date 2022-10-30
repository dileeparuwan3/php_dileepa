<?php

namespace App\Models;

use Database\Factories\SalesRepresentativeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesRepresentative extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory(): SalesRepresentativeFactory
    {
        return SalesRepresentativeFactory::new();
    }
}
