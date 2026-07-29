<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RequisitionItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['requisition_id', 'product_id', 'quantity', 'remarks'];

    public function requisition()
    {
        return $this->belongsTo(PurchaseRequisition::class, 'requisition_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
