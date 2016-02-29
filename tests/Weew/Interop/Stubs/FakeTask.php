<?php

namespace Tests\Weew\Interop\Stubs;

use Weew\Http\IHttpRequest;
use Weew\Interop\Task;
use Weew\Url\IUrl;

class FakeTask extends Task {
    private $content;

    public function fromHttpRequest(IHttpRequest $request) {
        $this->content = $request->getContent();
    }

    public function toHttpRequest(IUrl $url) {
    }

    public function getContent() {
        return $this->content;
    }
}
