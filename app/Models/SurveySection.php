<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Video
 *
 * @package App\Model
 */
class SurveySection extends Model
{
    /** @var string $table */
    protected $table = 'survey_sections';

    /** @var array $guarded */
    protected $guarded = [''];

    /** @var array $casts */
    protected $casts = [
        'survey_id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'set_key' => 'string'
    ];
}
