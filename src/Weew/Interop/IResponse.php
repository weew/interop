<?php

namespace Weew\Interop;

use Weew\Http\IHttpResponse;

interface IResponse {
    /**
     * @return IHttpResponse
     */
    function getHttpResponse();

    /**
     * @param IHttpResponse $httpResponse
     */
    function setHttpResponse(IHttpResponse $httpResponse);

    /**
     * @param IHttpResponse $httpResponse
     */
    function readHttpResponse(IHttpResponse $httpResponse);

    /**
     * @param IHttpResponse $httpResponse
     */
    function writeHttpResponse(IHttpResponse $httpResponse);

    /**
     * @return IHttpResponse
     */
    function buildHttpResponse();
}
