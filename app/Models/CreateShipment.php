<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreateShipment extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'create_shipment';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'shipment_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_name',
        'email',
        'first_name',
        'last_name',
        'street',
        'house_number',
        'zip_code',
        'state',
        'country',
        'telephone',

    ];
}
