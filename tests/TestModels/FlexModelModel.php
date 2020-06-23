<?php

namespace Tests\TestModels;

use Helium\LaravelHelpers\Traits\FlexModel;
use Tests\TestModels\Base\TestModel;

class FlexModelModel extends TestModel
{
	use FlexModel;

	public $flexColumn = null;

	protected $casts = [
		'flex_array' => 'array'
	];
}