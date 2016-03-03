<?php

namespace Weew\Interop;

use Weew\Http\IHttpRequest;
use Weew\Url\IUrl;

interface ITask {
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

    /**
     * @param array $array
     */
    function fromArray(array $array);

    /**
     * @return array
     */
    function toArray();
}
