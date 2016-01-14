<?php

namespace Tests\Weew\Interop;

use PHPUnit_Framework_TestCase;
use Tests\Weew\Interop\Stubs\FakePayload;
use Weew\Http\HttpRequest;

class PayloadTest extends PHPUnit_Framework_TestCase {
    public function test_create_without_request() {
        $payload = new FakePayload();
        $this->assertFalse($payload->requestRead);
    }

    public function test_create_with_request() {
        $request = new HttpRequest();
        $payload = new FakePayload($request);

        $this->assertTrue($payload->requestRead);
    }
}
