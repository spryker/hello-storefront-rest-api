<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\HelloStorefrontRestApi\Plugin\GlueApplication;

use Spryker\Glue\GlueJsonApiExtension\Dependency\Plugin\ResourceRoutePluginInterface;
use Spryker\Glue\HelloStorefrontRestApi\Controller\HelloResourceController;
use Spryker\Glue\Kernel\AbstractPlugin;

class HelloStorefrontResourceRoutePlugin extends AbstractPlugin implements ResourceRoutePluginInterface
{
    /**
     * @return string
     */
    public function getControllerClass(): string
    {
        return HelloResourceController::class;
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return 'getAction';
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return 'GET';
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return '/hello';
    }

}
