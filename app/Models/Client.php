<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Client extends Model
{
     use HasApiTokens, HasFactory, Notifiable;
    use Billable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'clients';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['account_type','account_plan','invoice_receipt','shipping_quantity','company_name','first_name','last_name','street','house_number','plz',
                            'state','telephone','mobile_number','email','vat_id','registration_number','website','company_size','company_description','hear_about_us'];
}
