<?php

namespace Weew\Interop;

use Exception;
use Weew\Contracts\IArrayable;
use Weew\Http\IHttpRequest;
use Weew\Url\IUrl;

abstract class Task implements ITask {
    /**
     * Task constructor.
     *
     * @param IHttpRequest|IArrayable|array|null $data
     */
    public function __construct($data = null) {
        if ($data instanceof IHttpRequest) {
            $this->fromHttpRequest($data);
        } else if ($data instanceof IArrayable) {
            $this->fromArray($data->toArray());
        } else if (is_array($data)) {
            $this->fromArray($data);
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
