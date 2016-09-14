<?php

namespace Weew\Interop;

use Exception;
use Weew\Http\IHttpRequest;
use Weew\Url\IUrl;

abstract class Task implements ITask {
    /**
     * @param IHttpRequest $request
     *
     * @return mixed
     * @throws Exception
     */
    public static function fromHttpRequest(IHttpRequest $request) {
        throw new Exception(s(
            'Method "%s::fromHttpRequest" is not implemented yet.', get_called_class()
        ));
    }

    /**
     * @param IUrl $url
     *
     * @return IHttpRequest
     * @throws Exception
     */
    public function toHttpRequest(IUrl $url) {
        throw new Exception(s(
            'Method "%s::toHttpRequest" is not implemented yet.', get_called_class()
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
