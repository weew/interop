<?php

namespace Weew\Interop;

use Weew\Http\IHttpRequest;
use Weew\Http\IHttpResponse;
use Weew\HttpClient\IHttpClient;
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
     * @param IUrl $endpoint
     * @param IHttpClient|null $client
     *
     * @return IHttpResponse
     */
    function send(IUrl $endpoint, IHttpClient $client = null);

    /**
     * @param IUrl $url
     *
     * @return IHttpRequest
     */
    function buildHttpRequest(IUrl $url);
}
