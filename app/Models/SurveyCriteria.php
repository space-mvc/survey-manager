<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Video
 *
 * @package App\Model
 */
class SurveyCriteria extends Model
{
    /** @var string $table */
    protected $table = 'survey_criteria';

    /** @var array $guarded */
    protected $guarded = [''];

    /** @var array $casts */
    protected $casts = [
        'survey_section_id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'criteria' => 'string',
        'required' => 'boolean'
    ];
}
