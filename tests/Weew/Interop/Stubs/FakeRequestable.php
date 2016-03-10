<?php

namespace Tests\Weew\Interop\Stubs;

use Weew\Http\HttpRequest;
use Weew\Http\IHttpRequestable;

class FakeRequestable implements IHttpRequestable {
    function toHttpRequest() {
        $request = new HttpRequest();
        $request->setContent('requestable');

        return $request;
    }
}
