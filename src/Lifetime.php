<?php

declare(strict_types=1);

namespace Celema\Container;

enum Lifetime
{
	case Shared;
	case Scoped;
	case Transient;
}
