<?php

namespace Tests\Weew\Interop;

use PHPUnit_Framework_TestCase;
use Tests\Weew\Interop\Stubs\FakeTask;
use Weew\Http\HttpRequest;

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
}
