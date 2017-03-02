<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['company',
                          'title',
                          'url',
                          'hash',
                          'will_contact',
                          'over_qualified',
                          'under_qualified',
                          'no_bacholers',
                          'resume_issues',
                          'cover_issues',
                          'additional_information'];


    public function getRouteKeyName()
    {
        return 'hash';
    }
}
