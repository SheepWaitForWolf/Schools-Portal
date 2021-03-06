<?php

namespace App\Models;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use Searchable;

    protected $table = 'portal_schools_mst';

    protected $primaryKey = 'school_id';

	public $timestamps = true;

    protected $fillable = [
        'school_name',
        'address_lines',
        'post_town',
        'post_code',
        'uprn',
        'x_coord',
        'y_coord',
        'lat_val',
        'long_val',
        'telephone',
        'local_authority_id',
        'email_address',
        'website',
        'non_denom',
        'opening_hours',
        'head_teacher',
        'local_authority_id'
    ];

    protected $guarded = [];
}
