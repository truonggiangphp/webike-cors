<?php

namespace Webikevn\Cors;

use Asm89\Stack\CorsService;
use Symfony\Component\HttpFoundation\Request;

class WebikeCoreService extends CorsService
{
    /**
     * @param Request $request
     * @return bool
     */
    public function isCorsRequest(Request $request)
    {
        return config('webike_cors.enable_cors_check') &&
            $request->headers->has('Origin') &&
            !$this->isSameHost($request);
    }

    /**
     * @param Request $request
     * @return bool
     */
    private function isSameHost(Request $request)
    {
        return $request->headers->get('Origin') === $request->getSchemeAndHttpHost();
    }
}
