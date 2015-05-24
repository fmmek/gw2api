<?php

namespace GW2Treasures\GW2Api\V2\Localization;

use GuzzleHttp\Message\RequestInterface;
use GW2Treasures\GW2Api\V2\ApiHandler;

class LocalizationHandler extends ApiHandler {
    function __construct( ILocalizedEndpoint $endpoint ) {
        parent::__construct( $endpoint );
    }

    /**
     * @return ILocalizedEndpoint
     */
    protected function getEndpoint() {
        return parent::getEndpoint();
    }

    /**
     * @param RequestInterface $request
     */
    public function onRequest( RequestInterface $request ) {
        $request->getQuery()->add( 'lang', $this->getEndpoint()->getLang() );
    }
}
