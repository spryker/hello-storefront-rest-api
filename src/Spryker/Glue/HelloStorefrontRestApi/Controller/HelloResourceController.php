<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\HelloStorefrontRestApi\Controller;

use Generated\Shared\Transfer\HelloRestAttributesTransfer;
use Spryker\Glue\Kernel\Controller\AbstractController;

class HelloResourceController extends AbstractController
{
    /**
     * @return \Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface
     */
    public function getAction()
    {
        $response = $this->getFactory()->getResourceBuilder()->createRestResponse();
        $response->addResource(
            $this->getFactory()->getResourceBuilder()->createRestResource(
                'hello',
                'storefront',
                (new HelloRestAttributesTransfer())->setMessage('Welcome to the storefront API')
            )
        );

        return $response;
    }
}
