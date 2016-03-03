<?php

namespace Weew\Interop;

use Exception;
use Weew\Http\IHttpRequest;
use Weew\Url\IUrl;

abstract class Task implements ITask {
    /**
     * Task constructor.
     *
     * @param IHttpRequest|null $request
     */
    public function __construct(IHttpRequest $request = null) {
        if ($request instanceof IHttpRequest) {
            $this->fromHttpRequest($request);
        }
    }

    /**
     * @param IHttpRequest $request
     *
     * @throws Exception
     */
    public function fromHttpRequest(IHttpRequest $request) {
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
