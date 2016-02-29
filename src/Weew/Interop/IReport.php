<?php

namespace Weew\Interop;

use Weew\Http\IHttpResponse;
use Weew\Http\IHttpResponseable;

interface IReport extends IHttpResponseable {
    /**
     * @param IHttpResponse $response
     */
    function fromHttpResponse(IHttpResponse $response);

    /**
     * @return IHttpResponse
     */
    function toHttpResponse();
}
