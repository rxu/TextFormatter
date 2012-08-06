<?php

/**
* @package   s9e\TextFormatter
* @copyright Copyright (c) 2010-2012 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace s9e\TextFormatter\ConfigBuilder\Validators;

use InvalidArgumentException;

abstract class AttributeName
{
	/**
	* Return whether a string is a valid attribute name
	*
	* @param  string $name
	* @return bool
	*/
	public static function isValid($name)
	{
		return (bool) preg_match('#^[a-z_][a-z_0-9\\-]*$#Di', $name);
	}

	/**
	* Normalize a tag name
	*
	* @throws InvalidArgumentException if the original name is not valid
	*
	* @param  string $name Original name
	* @return string       Normalized name
	*/
	public static function normalize($name)
	{
		if (!static::isValid($name))
		{
			throw new InvalidArgumentException("Invalid attribute name '" . $name . "'");
		}

		return strtolower($name);
	}
}