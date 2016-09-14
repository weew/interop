<?php

namespace Weew\Interop;

use Weew\Contracts\IArrayable;
use Weew\Contracts\IUnArrayable;
use Weew\Http\IHttpResponseable;
use Weew\Http\IUnHttpResponseable;

interface IReport extends IArrayable, IUnArrayable, IHttpResponseable, IUnHttpResponseable {}
