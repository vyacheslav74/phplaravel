<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRequestPayment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'request_id',
        'payment_mode',
        'fixed',
        'distance',
        'commision',
        'discount',
        'tax',
        'tip',
        'total',
        'wallet',
        'surge'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'status', 'password', 'remember_token', 'created_at', 'updated_at'
    ];

    /**
     * The services that belong to the user.
     */
    public function request()
    {
        return $this->belongsTo('App\UserRequests');
    }

    
    
    public function userrequestpayments()
    {
        return $this->hasOne('App\UserRequests');
    }

    /**
     * The services that belong to the user.
     */
    public function provider()
    {
        return $this->belongsTo('App\Provider');
    }
    
     public function promocode()
    {
        return $this->belongsTo('App\Promocode','promocode_id');
    }
}
