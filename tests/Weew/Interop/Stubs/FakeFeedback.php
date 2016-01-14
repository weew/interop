<?php

namespace Tests\Weew\Interop\Stubs;

use Weew\Http\IHttpResponse;
use Weew\Interop\Feedback;

class FakeFeedback extends Feedback {
    public $responseRead = false;

    public function readResponse(IHttpResponse $request) {
        $this->responseRead = true;
    }

    public function writeResponse(IHttpResponse $request) {}
}