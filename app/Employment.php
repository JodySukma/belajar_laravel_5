<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    protected $table = 'user_employment';

    protected $fillable = [
        'fk_users',
        'fk_users_staff_info',
        'fk_lkp_president',
        'fk_lkp_department',
        'fk_lkp_division',
        'fk_lkp_section',
        'fk_lkp_unit',
        'fk_lkp_sub_unit',
        'fk_lkp_grade',
        'fk_lkp_emp_group',
        'fk_lkp_emp_subgroup',
        'position',
        'position_title',
        'date_join',
        'appoint_date',
        'tel_ext',
        'image',
        'cost_center',
        'title',
        'status',
    ];

    public $timestamps = true;
}
