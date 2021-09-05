<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VacancyApplication extends Model
{
    protected $fillable = [
        "applicant_name",
        "post_applying_for",
        "applicant_present_address",
        "applicant_age",
        "applicant_gender",
        "applicant_phone",
        "status",
        "form_data"
    ];
}
