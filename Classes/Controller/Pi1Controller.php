<?php

namespace Derhansen\ValidationTest\Controller;

use Derhansen\ValidationTest\Domain\Model\Dto\Form;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class Pi1Controller extends ActionController
{
    public function formAction(Form $form = null): ResponseInterface
    {
        if (!$form) {
            $form = new Form();
        }

        $this->view->assign('form', $form);

        return $this->htmlResponse();
    }
}