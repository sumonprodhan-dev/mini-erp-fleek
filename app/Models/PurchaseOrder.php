<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PurchaseOrder extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['po_no', 'requisition_id', 'supplier_id', 'order_date'];

    public function requisition()
    {
        return $this->belongsTo(PurchaseRequisition::class, 'requisition_id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
