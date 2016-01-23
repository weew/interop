<?php

namespace Tests\Weew\Interop\Stubs;

use Weew\Http\IHttpRequest;
use Weew\HttpClient\HttpClient;

class FakeClient extends HttpClient {
    public function send(IHttpRequest $request) {
        $request->setContent($request->getContent() . ' send');
    }
}
