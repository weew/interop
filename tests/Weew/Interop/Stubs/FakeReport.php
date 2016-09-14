<?php

namespace Tests\Weew\Interop\Stubs;

use Weew\Http\IHttpResponse;
use Weew\Interop\Report;

class FakeReport extends Report {
    private $content;

    public function getContent() {
        return $this->content;
    }

    public static function fromHttpResponse(IHttpResponse $response) {
        $report = new self();
        $report->content = $response->getContent();

        return $report;
    }

    public static function fromArray(array $array) {
        $report = new self();
        $report->content = $array;

        return $report;
    }

    public function toHttpResponse() {
    }
}
