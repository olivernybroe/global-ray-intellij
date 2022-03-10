<?php
/** @noinspection PhpInconsistentReturnPointsInspection */
/** @noinspection PhpIllegalPsrClassPathInspection */

namespace {

    function ray(...$args): \Spatie\Ray\Ray {}

    /**
     * @return never
     */
    function rd(...$args) {}

    function dump(...$vars) {}

    /**
     * @return never
     */
    function dd(...$vars) {}
}




namespace Spatie\Ray {
    class Ray {
        public function backtrace(?\Closure $startingFromFrame = null): self {}
        public function caller(): self {}
        public function carbon(?\Carbon\CarbonInterface $carbon): self {}
        /**
         * @param callable|string|null $callback
         */
        public function catch($callback = null): self {}
        public function className(object $object): self {}
        public function clearScreen(): self {}
        public function clearAll(): self {}
        public function count(?string $name = null): self {}
        public function counterValue(string $name): int {}
        public function disable(): self {}
        public function disabled(): bool {}
        public function enable(): self {}
        public function enabled(): bool {}
        public function exception(\Throwable $exception, array $meta = []) {}

        /**
         * @return never
         */
        public function die($status = ''): void {}

        // Color methods
        public function color(string $color): self {}
        public function green(): self {}
        public function orange(): self {}
        public function red(): self {}
        public function purple(): self {}
        public function blue(): self {}
        public function gray(): self {}
    }
}