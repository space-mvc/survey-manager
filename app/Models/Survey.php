<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Video
 *
 * @package App\Model
 */
class Survey extends Model
{
    /** @var string $table */
    protected $table = 'surveys';

    /** @var array $guarded */
    protected $guarded = [''];

    /** @var array $casts */
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
    ];
}
