<?php

namespace Weew\Interop;

use Weew\Http\IHttpRequest;

interface IPayload {
    /**
     * @param IHttpRequest $request
     */
    function readRequest(IHttpRequest $request);

    /**
     * @param IHttpRequest $request
     */
    function writeRequest(IHttpRequest $request);
}
