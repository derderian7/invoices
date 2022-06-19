<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class invoices extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id_Invoice',
        'invoice_number',
        'invoice_Date',
        'Due_date',
        'product',
        'Amount_collection',
        'Amount_Commission',
        'Discount',
        'Value_VAT',
        'Rate_VAT',
        'Total',
        'Status',
        'Value_Status',
        'note',
        'Payment_Date',
    ];

    protected $dates = ['deleted_at'];

    public function section()
    {
        return $this->belongsTo(products::class, 'product', 'Product_name');
    }
}
