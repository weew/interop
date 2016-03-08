<?php

namespace Weew\Interop;

use Weew\Contracts\IArrayable;
use Weew\Contracts\IUnArrayable;
use Weew\Http\IHttpResponse;
use Weew\Http\IHttpResponseable;

interface IReport extends IHttpResponseable, IArrayable, IUnArrayable {
    /**
     * @param IHttpResponse $response
     */
    function fromHttpResponse(IHttpResponse $response);

    /**
     * @return IHttpResponse
     */
    function toHttpResponse();
}
