<?php

namespace Tests\Weew\Interop\Stubs;

use Weew\Http\IHttpRequest;
use Weew\Interop\Request;

class FakeRequest extends Request {
    /**
     * @param IHttpRequest $httpRequest
     */
    public function readHttpRequest(IHttpRequest $httpRequest) {
        $httpRequest->setContent('read');
    }

    /**
     * @param IHttpRequest $httpRequest
     */
    public function writeHttpRequest(IHttpRequest $httpRequest) {
        $httpRequest->setContent('write');
    }
}
