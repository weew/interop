<?php

namespace Tests\Weew\Interop\Stubs;

use Weew\Http\IHttpResponse;
use Weew\Interop\Report;

class FakeReport extends Report {
    private $content;

    public function getContent() {
        return $this->content;
    }

    public function fromHttpResponse(IHttpResponse $response) {
        $this->content = $response->getContent();
    }

    public function toHttpResponse() {
    }
}
