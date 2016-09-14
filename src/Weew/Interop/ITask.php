<?php

namespace Weew\Interop;

use Weew\Contracts\IArrayable;
use Weew\Contracts\IUnArrayable;
use Weew\Http\IHttpRequest;
use Weew\Http\IUnHttpRequestable;
use Weew\Url\IUrl;

interface ITask extends IArrayable, IUnArrayable, IUnHttpRequestable {
    /**
     * @param IUrl $url
     *
     * @return IHttpRequest
     */
    function toHttpRequest(IUrl $url);
}
