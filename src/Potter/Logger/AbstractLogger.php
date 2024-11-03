<?php

declare(strict_types=1);

namespace Potter\Logger;

use Monolog\Logger as BaseLogger;

abstract class AbstractLogger extends BaseLogger implements LoggerInterface
{ }
