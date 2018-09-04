<?php

namespace EInvoice;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['paymenttype','amount','received','remaining','remarks'];
}
