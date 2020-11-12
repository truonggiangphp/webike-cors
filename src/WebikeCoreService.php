<?php

namespace Webikevn\Cors;

use Asm89\Stack\CorsService;

class WebikeCoreService extends CorsService
{
    /**
     * @param Request $request
     * @return bool
     */
    public function isCorsRequest(Request $request)
    {
        return config('webike_cors.enable_cors_check') && !$this->isSameHost($request);
    }
}
