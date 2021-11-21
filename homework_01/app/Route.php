<?php

namespace main\app;


#[\Attribute(\Attribute::TARGET_METHOD)]
class Route {
    public string $method;
    public string $path;

    public function __construct(string $method, string $path) {
        $this->method = $method;
        $this->path = $path;
        echo $method . " - " . $path;
    }
}