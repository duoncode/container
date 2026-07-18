<?php

declare(strict_types=1);

namespace Celema\Container;

interface Resettable
{
	public function reset(): void;
}
