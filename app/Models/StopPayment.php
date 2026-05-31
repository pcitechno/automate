<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StopPayment extends Model
{
    use HasFactory;

    protected $table = 'stop_payments';
    protected $primaryKey = 's_no';
    public $incrementing = false;

    protected $fillable = ['s_no', 'broker_id', 'pef_code', 'name', 'remark', 'ref_no'];
}
