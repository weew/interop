<?php

namespace Weew\Interop;

use Exception;
use Weew\Http\IHttpResponse;

abstract class Report implements IReport {
    /**
     * Report constructor.
     *
     * @param IHttpResponse|null $response
     */
    public function __construct(IHttpResponse $response = null) {
        if ($response instanceof IHttpResponse) {
            $this->fromHttpResponse($response);
        }
    }

    /**
     * @param IHttpResponse $response
     *
     * @throws Exception
     */
    public function fromHttpResponse(IHttpResponse $response) {
        throw new Exception(s(
            'Method "%s::fromHttpResponse" is not implemented yet.', get_called_class()
        ));
    }

    /**
     * @return IHttpResponse
     * @throws Exception
     */
    public function toHttpResponse() {
        throw new Exception(s(
            'Method "%s::toHttpResponse" is not implemented yet.', get_called_class()
        ));
    }

    /**
     * @param array $array
     *
     * @throws Exception
     */
    public function fromArray(array $array) {
        throw new Exception(s(
            'Method "%s::fromArray" is not implemented yet.', get_called_class()
        ));
    }

    /**
     * @return array
     * @throws Exception
     */
    public function toArray() {
        throw new Exception(s(
            'Method "%s::toArray" is not implemented yet.', get_called_class()
        ));
    }
}
