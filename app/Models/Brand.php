<?php

namespace App\Models;

use App\Models\Base\Brand as BaseBrand;

class Brand extends BaseBrand
{
	protected $fillable = [
		'system_user_id',
		'name',
		'status'
	];
}
