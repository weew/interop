<?php

namespace Weew\Interop;

use Weew\Http\IHttpResponse;

abstract class Report implements IReport {
    /**
     * Report constructor.
     *
     * @param IHttpResponse|null $response
     */
    public function __construct(IHttpResponse $response = null) {
        if ($response instanceof IHttpResponse) {
            $this->fromHttpResponse($response);
        }
    }

    /**
     * @param IHttpResponse $response
     */
    abstract public function fromHttpResponse(IHttpResponse $response);

    /**
     * @return IHttpResponse
     */
    abstract public function toHttpResponse();
}
