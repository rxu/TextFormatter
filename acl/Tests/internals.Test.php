<?php

namespace s9e\toolkit\acl;

include_once __DIR__ . '/../builder.php';
include_once __DIR__ . '/../reader.php';

class testInternals extends \PHPUnit_Framework_TestCase
{
	public function testIdenticalPermsAreOptimizedAway()
	{
		$builder = new builder;
		$builder->allow('foo', array('scope' => 123));
		$builder->allow('bar', array('scope' => 123));

		$config = $builder->getReaderConfig();

		$this->assertSame(
			$config['foo']['perms']['foo'],
			$config['bar']['perms']['foo']
		);
	}

	public function testIdenticalScopesAreOptimizedAway()
	{
		$builder = new builder;
		$builder->allow('foo', array('scope' => 123));
		$builder->allow('foo', array('scope' => 456));

		$config = $builder->getReaderConfig();

		$this->assertSame(
			$config['foo']['scopes']['scope'][123],
			$config['foo']['scopes']['scope'][456]
		);
	}

	public function testUselessPermsAreOptimizedAway()
	{
		$builder = new builder;
		$builder->allow('foo');
		$builder->deny('bar');

		$config = $builder->getReaderConfig();

		$this->assertFalse(isset($config['bar']));
	}

	public function testUselessScopesAreOptimizedAway()
	{
		$builder = new builder;
		$builder->allow('foo');
		$builder->allow('foo', array('scope' => 123));
		$builder->allow('bar', array('scope' => 456));

		$config = $builder->getReaderConfig();

		$this->assertFalse(isset($config['foo']['scopes']['scope'][123]));
		$this->assertTrue(isset($config['foo']['scopes']['scope'][456]));
	}
}