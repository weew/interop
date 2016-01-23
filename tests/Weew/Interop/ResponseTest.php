<?php

namespace Tests\Weew\Interop;

use PHPUnit_Framework_TestCase;
use Tests\Weew\Interop\Stubs\FakeResponse;
use Weew\Http\HttpResponse;
use Weew\Http\IHttpResponse;

class ResponseTest extends PHPUnit_Framework_TestCase {
    public function test_get_and_set_http_response() {
        $httpResponse = new HttpResponse();
        $response = new FakeResponse($httpResponse);
        $this->assertEquals('read', $httpResponse->getContent());

        $this->assertTrue($httpResponse === $response->getHttpResponse());
        $response = new FakeResponse();
        $this->assertTrue($response->getHttpResponse() instanceof IHttpResponse);

        $response->setHttpResponse($httpResponse);
        $this->assertTrue($response->getHttpResponse() === $httpResponse);
    }

    public function test_build_http_response() {
        $httpResponse = new HttpResponse();
        $response = new FakeResponse($httpResponse);
        $anotherResponse = $response->buildHttpResponse();

        $this->assertTrue($httpResponse === $anotherResponse);
        $this->assertEquals('write', $anotherResponse->getContent());
    }
}
