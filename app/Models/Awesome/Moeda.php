<?php

namespace App\Models\Awesome;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Moeda extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'moedas';

    protected $fillable = [
        'code',
        'codein',
        'name',
        'high',
        'low',
        'varBid',
        'pctChange',
        'bid',
        'ask',
        'timestamp',
        'create_date',
    ];
}
