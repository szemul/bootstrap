<?php
declare(strict_types=1);

namespace Szemul\Bootstrap;

use Psr\Container\ContainerInterface;

interface BootstrapInterface
{
    public function __invoke(ContainerInterface $container): void;
}
