<?php namespace Nirjankhadka\Work\Models;

use Model;

/**
 * Model
 */
class Work extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nirjankhadka_work_';

    public $attachOne = [
        'image' => 'System\Models\File',
        'fullscreen' => 'System\Models\File'
    ];
}
