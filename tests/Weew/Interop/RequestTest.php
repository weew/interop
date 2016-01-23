<?php

namespace Tests\Weew\Interop;

use PHPUnit_Framework_TestCase;
use Tests\Weew\Interop\Stubs\FakeClient;
use Tests\Weew\Interop\Stubs\FakeRequest;
use Weew\Http\HttpRequest;
use Weew\Http\IHttpRequest;
use Weew\Url\Url;

class RequestTest extends PHPUnit_Framework_TestCase {
    public function test_get_and_set_http_request() {
        $httpRequest = new HttpRequest();
        $request = new FakeRequest($httpRequest);
        $this->assertEquals('read', $httpRequest->getContent());

        $this->assertTrue($httpRequest === $request->getHttpRequest());
        $request = new FakeRequest();
        $this->assertTrue($request->getHttpRequest() instanceof IHttpRequest);

        $request->setHttpRequest($httpRequest);
        $this->assertTrue($request->getHttpRequest() === $httpRequest);
    }

    public function test_build_http_request() {
        $httpRequest = new HttpRequest();
        $url = new Url();
        $request = new FakeRequest($httpRequest);
        $request->buildHttpRequest($url);
        $this->assertEquals('write', $httpRequest->getContent());
        $this->assertTrue($httpRequest->getUrl() === $url);
    }

    public function test_send() {
        $httpRequest = new HttpRequest();
        $url = new Url();
        $client = new FakeClient();
        $request = new FakeRequest($httpRequest);
        $request->send($url, $client);
        $this->assertEquals('write send', $httpRequest->getContent());
        $this->assertTrue($httpRequest->getUrl() === $url);
    }
}
