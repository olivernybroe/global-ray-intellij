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
        public function trace(?\Closure $startingFromFrame = null): self {}
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

        public function measure($stopwatchName = 'default'): self {}
        public function notify(string $text): self {}

        public function toJson(...$values): self {}
        public function json(string ...$jsons): self {}
        public function file(string $filename): self {}
        public function image(string $location): self {}
        public function table(array $values, $label = 'Table'): self {}
        public function pause(): self {}
        public function separator(): self {}
        public function once(...$arguments): self {}
        public function pass($argument) {}
        
        public function html(string $html = ''): self {}
        public function xml(string $xml): self {}
        public function text(string $text): self {}

        public function showApp(): self {}
        public function hideApp(): self {}
        
        public function if($boolOrCallable, ?callable $callback = null): self {}

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

        // Let's have some fun
        public function ban(): self {}
        public function charles(): self {}
    }
}
