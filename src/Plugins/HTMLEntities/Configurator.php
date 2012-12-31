<?php

/**
* @package   s9e\TextFormatter
* @copyright Copyright (c) 2010-2013 The s9e Authors
* @license   http://www.opensource.org/licenses/mit-license.php The MIT License
*/
namespace s9e\TextFormatter\Plugins\HTMLEntities;

use InvalidArgumentException;
use s9e\TextFormatter\Plugins\ConfiguratorBase;

class Configurator extends ConfiguratorBase
{
	/**
	* @var string Name of the attribute used by this plugin
	*/
	protected $attrName = 'char';

	/**
	* {@inheritdoc}
	*/
	protected $quickMatch = '&';

	/**
	* @var string Regexp that matches entities
	*/
	protected $regexp = '/&(?:[a-z]+|#[0-9]+|#x[0-9a-f]+);/i';

	/**
	* @var string Name of the tag used by this plugin
	*/
	protected $tagName = 'HE';

	/**
	* {@inheritdoc}
	*/
	public function setUp()
	{
		$tag = $this->configurator->tags->add($this->tagName);
		$tag->attributes->add($this->attrName);
		$tag->defaultTemplate
			= '<xsl:value-of select="@' . htmlspecialchars($this->attrName) . '"/>';
	}
}