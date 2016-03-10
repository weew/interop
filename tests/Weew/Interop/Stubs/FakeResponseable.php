<?php

namespace Tests\Weew\Interop\Stubs;

use Weew\Http\HttpResponse;
use Weew\Http\IHttpResponseable;

class FakeResponseable implements IHttpResponseable {
    function toHttpResponse() {
        $response = new HttpResponse();
        $response->setContent('responsable');

        return $response;
    }
}
