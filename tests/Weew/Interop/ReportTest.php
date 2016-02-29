<?php

namespace Tests\Weew\Interop;

use PHPUnit_Framework_TestCase;
use Tests\Weew\Interop\Stubs\FakeReport;
use Weew\Http\HttpResponse;

class ReportTest extends PHPUnit_Framework_TestCase {
    public function test_create() {
        $report = new FakeReport();
        $this->assertNull($report->getContent());
    }

    public function test_create_with_response() {
        $response = new HttpResponse();
        $response->setContent('foo');
        $report = new FakeReport($response);
        $this->assertEquals('foo', $report->getContent());
    }
}
