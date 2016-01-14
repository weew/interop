<?php

namespace Weew\Interop;

use Weew\Http\IHttpResponse;

interface IFeedback {
    /**
     * @param IHttpResponse $request
     */
    function readResponse(IHttpResponse $request);

    /**
     * @param IHttpResponse $request
     */
    function writeResponse(IHttpResponse $request);
}
