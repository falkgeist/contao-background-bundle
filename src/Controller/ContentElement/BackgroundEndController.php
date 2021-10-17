<?php

declare(strict_types=1);

/*
 * This file is part of Contao Background Bundle.
 *
 * (c) Falk von Freigeist 2021
 * @license LGPL-3.0+
 * @link https://github.com/falkgeist/contao-background-bundle
 */

namespace Falkgeist\ContaoBackgroundBundle\Controller\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BackgroundEndController extends AbstractContentElementController
{
    public function __construct(ContaoFramework $framework)
    {
        $this->framework = $framework;
    }
    protected function getResponse(Template $template, ContentModel $model, Request $request): ?Response
    {
        return $template->getResponse();
    }
}