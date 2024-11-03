<?php

declare(strict_types=1);

namespace Potter\Logger;

use PHPAbles\Resettable\ResettableInterface,
    Psr\Log\LoggerInterface as PsrLoggerInterface,
    Stringable;

interface LoggerInterface extends PsrLoggerInterface, ResettableInterface
{
    public function emergency(Stringable|string $message, array $context = []): void;
    public function alert(Stringable|string $message, array $context = []): void;
    public function critical(Stringable|string $message, array $context = []): void;
    public function error(Stringable|string $message, array $context = []): void;
    public function warning(Stringable|string $message, array $context = []): void;
    public function notice(Stringable|string $message, array $context = []): void;
    public function info(Stringable|string $message, array $context = []): void;
    public function debug(Stringable|string $message, array $context = []): void;
    public function log(mixed $level, Stringable|string $message, array $context = []): void;
}
