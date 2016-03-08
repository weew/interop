<?php

namespace Weew\Interop;

use Weew\Contracts\IArrayable;
use Weew\Contracts\IUnArrayable;
use Weew\Http\IHttpRequest;
use Weew\Url\IUrl;

interface ITask extends IArrayable, IUnArrayable {
    /**
     * @param IHttpRequest $request
     */
    function fromHttpRequest(IHttpRequest $request);

    /**
     * @param IUrl $url
     *
     * @return IHttpRequest
     */
    function toHttpRequest(IUrl $url);
}
