<?php

namespace Tests\Weew\Interop;

use Exception;
use PHPUnit_Framework_TestCase;
use Tests\Weew\Interop\Stubs\EmptyTask;
use Tests\Weew\Interop\Stubs\FakeTask;
use Weew\Http\HttpRequest;
use Weew\Url\Url;

class TaskTest extends PHPUnit_Framework_TestCase {
    public function test_create() {
        $task = new FakeTask();
        $this->assertNull($task->getContent());
    }

    public function test_create_with_request() {
        $request = new HttpRequest();
        $request->setContent('foo');

        $task = new FakeTask($request);
        $this->assertEquals('foo', $task->getContent());
    }

    public function test_throws_to_http_request_is_not_implemented_exception() {
        $task = new EmptyTask();
        $this->setExpectedException(Exception::class);
        $task->toHttpRequest(new Url());
    }

    public function test_throws_from_http_request_is_not_implemented_exception() {
        $task = new EmptyTask();
        $this->setExpectedException(Exception::class);
        $task->fromHttpRequest(new HttpRequest());
    }

    public function test_throws_to_array_is_not_implemented_exception() {
        $task = new EmptyTask();
        $this->setExpectedException(Exception::class);
        $task->toArray();
    }

    public function test_throws_from_array_is_not_implemented_exception() {
        $task = new EmptyTask();
        $this->setExpectedException(Exception::class);
        $task->fromArray([]);
    }
}
