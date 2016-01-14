<?php

namespace Weew\Interop;

use Weew\Http\IHttpRequest;

abstract class Payload implements IPayload {
    /**
     * Payload constructor.
     *
     * @param IHttpRequest|null $request
     */
    public function __construct(IHttpRequest $request = null) {
        if ($request instanceof IHttpRequest) {
            $this->readRequest($request);
        }
    }
}
