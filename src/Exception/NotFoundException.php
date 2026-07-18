<?php

declare(strict_types=1);

namespace Celema\Container\Exception;

use Psr\Container\NotFoundExceptionInterface;

final class NotFoundException extends ContainerException implements NotFoundExceptionInterface {}
