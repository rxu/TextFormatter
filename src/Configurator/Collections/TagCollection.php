<?php

/**
* @package   s9e\TextFormatter
* @copyright Copyright (c) 2010-2014 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace s9e\TextFormatter\Configurator\Collections;

use s9e\TextFormatter\Configurator\Items\Tag;
use s9e\TextFormatter\Configurator\Validators\TagName;

class TagCollection extends NormalizedCollection
{
	/**
	* {@inheritdoc}
	*/
	public function normalizeKey($key)
	{
		return TagName::normalize($key);
	}

	/**
	* Normalize a value to an instance of Tag
	*
	* @param  array|null|Tag $value
	* @return Tag
	*/
	public function normalizeValue($value)
	{
		return ($value instanceof Tag)
		     ? $value
		     : new Tag($value);
	}
}