<?php

namespace Tests\Weew\Interop;

use PHPUnit_Framework_TestCase;
use Tests\Weew\Interop\Stubs\FakeFeedback;
use Weew\Http\HttpResponse;

class FeedbackTest extends PHPUnit_Framework_TestCase {
    public function test_create_without_response() {
        $feedback = new FakeFeedback();
        $this->assertFalse($feedback->responseRead);
    }

    public function test_create_with_response() {
        $response = new HttpResponse();
        $feedback = new FakeFeedback($response);
        $this->assertTrue($feedback->responseRead);
    }
}
