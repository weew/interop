<?php

namespace Weew\Interop;

use Weew\Http\IHttpRequest;
use Weew\Http\IHttpResponse;
use Weew\Http\Requests\JsonRequest;
use Weew\HttpClient\HttpClient;
use Weew\HttpClient\IHttpClient;
use Weew\Url\IUrl;

abstract class Request implements IRequest {
    /**
     * @var IHttpRequest
     */
    protected $httpRequest;

    /**
     * Request constructor.
     *
     * @param IHttpRequest|null $httpRequest
     */
    public function __construct(IHttpRequest $httpRequest = null) {
        if ($httpRequest instanceof IHttpRequest) {
            $this->setHttpRequest($httpRequest);
            $this->readHttpRequest($httpRequest);
        } else {
            $this->setHttpRequest($this->createHttpRequest());
        }
    }

    /**
     * @return IHttpRequest
     */
    public function getHttpRequest() {
        return $this->httpRequest;
    }

    /**
     * @param IHttpRequest $httpRequest
     */
    public function setHttpRequest(IHttpRequest $httpRequest) {
        $this->httpRequest = $httpRequest;
    }

    /**
     * @param IUrl $endpoint
     *
     * @return IHttpRequest
     */
    public function buildHttpRequest(IUrl $endpoint) {
        $request = $this->getHttpRequest();
        $request->setUrl($endpoint);
        $this->writeHttpRequest($request);

        return $request;
    }

    /**
     * @param IUrl $endpoint
     * @param IHttpClient|null $client
     *
     * @return IHttpResponse
     */
    public function send(IUrl $endpoint, IHttpClient $client = null) {
        if ( ! $client instanceof IHttpClient) {
            $client = $this->createHttpClient();
        }

        $request = $this->buildHttpRequest($endpoint);
        $response = $client->send($request);

        return $response;
    }

    /**
     * @return IHttpRequest
     */
    protected function createHttpRequest() {
        return new JsonRequest();
    }

    /**
     * @return IHttpClient
     */
    protected function createHttpClient() {
        return new HttpClient();
    }
}
