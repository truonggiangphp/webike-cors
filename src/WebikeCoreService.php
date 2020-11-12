<?php

namespace Webike\Cors;

use Asm89\Stack\CorsService;

class WebikeCoreService extends CorsService
{
    /**
     * @param Request $request
     * @return bool
     */
    public function isCorsRequest(Request $request)
    {
        return $request->headers->has('Origin') && !$this->isSameHost($request);
    }
}
