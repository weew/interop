<?php

namespace Weew\Interop;

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
     */
    abstract public function fromHttpRequest(IHttpRequest $request);

    /**
     * @param IUrl $url
     *
     * @return IHttpRequest
     */
    abstract public function toHttpRequest(IUrl $url);
}
