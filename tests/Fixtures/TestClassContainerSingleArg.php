<?php

declare(strict_types=1);

namespace Duon\Container\Tests\Fixtures;

class TestClassContainerSingleArg
{
	public function __construct(
		public readonly string $test,
	) {}
}
