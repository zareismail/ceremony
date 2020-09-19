<?php

namespace Zareismail\Ceremony\Helpers;

use Illuminate\Support\Str;

class Helper
{ 	
	/**
	 * Prefix table name by string.
	 * 
	 * @param  string $name 
	 * @return string       
	 */
	public static function table(string $name)
	{
		return Str::startsWith($name, 'sos') ? $name : "sos_{$name}";
	}
}
