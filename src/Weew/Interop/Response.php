<?php

namespace Weew\Interop;

use Weew\Http\IHttpResponse;
use Weew\Http\Responses\JsonResponse;

abstract class Response implements IResponse {
    /**
     * @var IHttpResponse
     */
    protected $httpResponse;

    /**
     * Response constructor.
     *
     * @param IHttpResponse|null $httpResponse
     */
    public function __construct(IHttpResponse $httpResponse = null) {
        if ($httpResponse instanceof IHttpResponse) {
            $this->setHttpResponse($httpResponse);
            $this->readHttpResponse($httpResponse);
        } else {
            $this->setHttpResponse($this->createHttpResponse());
        }
    }

    /**
     * @return IHttpResponse
     */
    public function getHttpResponse() {
        return $this->httpResponse;
    }

    /**
     * @param IHttpResponse $httpResponse
     */
    public function setHttpResponse(IHttpResponse $httpResponse) {
        $this->httpResponse = $httpResponse;
    }

    /**
     * @return IHttpResponse
     */
    public function buildHttpResponse() {
        $response = $this->getHttpResponse();
        $this->writeHttpResponse($response);

        return $response;
    }

    /**
     * @return IHttpResponse
     */
    protected function createHttpResponse() {
        return new JsonResponse();
    }
}
