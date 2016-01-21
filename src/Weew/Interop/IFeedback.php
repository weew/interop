<?php

namespace Weew\Interop;

use Weew\Http\IHttpResponse;

interface IFeedback {
    /**
     * @param IHttpResponse $response
     */
    function readResponse(IHttpResponse $response);

    /**
     * @param IHttpResponse $response
     */
    function writeResponse(IHttpResponse $response);
}
