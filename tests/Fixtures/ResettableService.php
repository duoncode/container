<?php

declare(strict_types=1);

namespace Duon\Container\Tests\Fixtures;

use Duon\Container\Resettable;

final class ResettableService implements Resettable
{
	public int $resetCalls = 0;

	public function reset(): void
	{
		++$this->resetCalls;
	}
}
