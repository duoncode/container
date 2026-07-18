<?php

declare(strict_types=1);

namespace Celema\Container\Tests\Fixtures;

use Celema\Container\Resettable;

final class ResettableService implements Resettable
{
	public int $resetCalls = 0;

	public function reset(): void
	{
		++$this->resetCalls;
	}
}
