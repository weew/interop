<?php

namespace Tests\Weew\Interop\Stubs;

use Weew\Http\IHttpRequest;
use Weew\Interop\Task;
use Weew\Url\IUrl;

class FakeTask extends Task {
    private $content;

    public static function fromHttpRequest(IHttpRequest $request) {
        $task = new self();
        $task->content = $request->getContent();

        return $task;
    }

    public function toHttpRequest(IUrl $url) {
    }

    public static function fromArray(array $array) {
        $task = new self();
        $task->content = $array;

        return $task;
    }

    public function getContent() {
        return $this->content;
    }
}
