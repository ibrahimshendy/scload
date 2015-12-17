<?php 

namespace Sc\Scload\Facades;
use Illuminate\Support\Facades\Facade;

class Scload extends Facade {
	protected static function getFacadeAccessor()
	{
		return 'scload';
	}
}
