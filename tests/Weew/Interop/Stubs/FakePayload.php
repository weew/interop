<?php

namespace Tests\Weew\Interop\Stubs;

use Weew\Http\IHttpRequest;
use Weew\Interop\Payload;

class FakePayload extends Payload {
    public $requestRead = false;

    public function readRequest(IHttpRequest $request) {
        $this->requestRead = true;
    }

    public function writeRequest(IHttpRequest $request) {}
}
