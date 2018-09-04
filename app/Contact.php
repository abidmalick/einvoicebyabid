<?php

namespace EInvoice;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['owner_name','b_name','email','contact','address'];
}
