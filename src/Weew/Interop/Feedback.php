<?php

namespace Weew\Interop;

use Weew\Http\IHttpResponse;

abstract class Feedback implements IFeedback {
    /**
     * Feedback constructor.
     *
     * @param IHttpResponse|null $response
     */
    public function __construct(IHttpResponse $response = null) {
        if ($response instanceof IHttpResponse) {
            $this->readResponse($response);
        }
    }
}
