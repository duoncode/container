<?php

declare(strict_types=1);

namespace Celema\Container\Tests\Fixtures;

class TestClassContainerSingleArg
{
	public function __construct(
		public readonly string $test,
	) {}
}
