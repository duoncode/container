<?php

declare(strict_types=1);

namespace Duon\Container;

interface Resettable
{
	public function reset(): void;
}
