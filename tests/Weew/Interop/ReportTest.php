<?php

namespace Tests\Weew\Interop;

use Exception;
use PHPUnit_Framework_TestCase;
use Tests\Weew\Interop\Stubs\EmptyReport;
use Tests\Weew\Interop\Stubs\FakeReport;
use Weew\Http\HttpResponse;

class ReportTest extends PHPUnit_Framework_TestCase {
    public function test_create() {
        $report = new FakeReport();
        $this->assertNull($report->getContent());
    }

    public function test_create_from_response() {
        $response = new HttpResponse();
        $response->setContent('foo');
        $report = FakeReport::fromHttpResponse($response);
        $this->assertEquals('foo', $report->getContent());
    }

    public function test_create_from_array() {
        $report = FakeReport::fromArray(['data']);
        $this->assertEquals(['data'], $report->getContent());
    }

    public function test_throws_to_http_response_is_not_implemented_exception() {
        $task = new EmptyReport();
        $this->setExpectedException(Exception::class);
        $task->toHttpResponse();
    }

    public function test_throws_from_http_response_is_not_implemented_exception() {
        $this->setExpectedException(Exception::class);
        EmptyReport::fromHttpResponse(new HttpResponse());
    }

    public function test_throws_to_array_is_not_implemented_exception() {
        $task = new EmptyReport();
        $this->setExpectedException(Exception::class);
        $task->toArray();
    }

    public function test_throws_from_array_is_not_implemented_exception() {
        $this->setExpectedException(Exception::class);
        EmptyReport::fromArray([]);
    }
}
