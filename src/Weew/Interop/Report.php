<?php

namespace Weew\Interop;

use Exception;
use Weew\Http\IHttpResponse;

abstract class Report implements IReport {
    /**
     * @param IHttpResponse $response
     *
     * @return mixed
     * @throws Exception
     */
    public static function fromHttpResponse(IHttpResponse $response) {
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
     * @return mixed
     * @throws Exception
     */
    public static function fromArray(array $array) {
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
