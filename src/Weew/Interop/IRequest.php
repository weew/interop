<?php

namespace Weew\Interop;

use Weew\Http\IHttpRequest;
use Weew\Url\IUrl;

interface IRequest {
    /**
     * @return IHttpRequest
     */
    function getHttpRequest();

    /**
     * @param IHttpRequest $httpRequest
     */
    function setHttpRequest(IHttpRequest $httpRequest);

    /**
     * @param IHttpRequest $httpRequest
     */
    function readHttpRequest(IHttpRequest $httpRequest);

    /**
     * @param IHttpRequest $httpRequest
     */
    function writeHttpRequest(IHttpRequest $httpRequest);

    /**
     * @param IUrl $url
     *
     * @return IHttpRequest
     */
    function buildHttpRequest(IUrl $url);
}
