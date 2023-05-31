<?php

namespace App\Models\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'inventory_customers';
    protected $fillable = array('patient_id', 'service_id', 'date', 'schedule', 'unique_id', 'sp_id', 'issuer', 'issue_action', 'issue_detail', 'issue_at', 'radiologist_id', 'radiologist_at', 'doctor_id', 'doctor_at', 'front_office_id', 'lab_officer_id', 'lab_officer_remark', 'lab_at', 'status', 'arrived_at', 'payment_channel', 'front_office_remark', 'medical_officer_remark', 'radiologist_remark', 'xray_officer_id', 'xray_at', 'status_end', 'suggestive_summary', 'paid_by', 'created_at', 'updated_at', 'deleted_by', 'deleted_at');

    public function patient(){
        return $this->belongsTo('App\Models\EMR\Patient', 'patient_id', 'id');
    }

    public function consent(){
        return $this->belongsTo('App\Models\EMR\Consent', 'id', 'appointment_id');
    }
}
