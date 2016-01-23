<?php

namespace Tests\Weew\Interop\Stubs;

use Weew\Http\IHttpResponse;
use Weew\Interop\Response;

class FakeResponse extends Response {
    /**
     * @param IHttpResponse $httpResponse
     */
    public function readHttpResponse(IHttpResponse $httpResponse) {
        $httpResponse->setContent('read');
    }

    /**
     * @param IHttpResponse $httpResponse
     */
    public function writeHttpResponse(IHttpResponse $httpResponse) {
        $httpResponse->setContent('write');
    }
}
