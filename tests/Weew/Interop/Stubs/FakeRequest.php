<?php

namespace Tests\Weew\Interop\Stubs;

use Weew\Http\IHttpRequest;
use Weew\Interop\Request;

class FakeRequest extends Request {
    public function readHttpRequest(IHttpRequest $httpRequest) {
        $httpRequest->setContent('read');
    }

    public function writeHttpRequest(IHttpRequest $httpRequest) {
        $httpRequest->setContent('write');
    }

    public function createHttpClient() {
        return new FakeClient();
    }

    public function createDefaultHttpClient() {
        return parent::createHttpClient();
    }
}
