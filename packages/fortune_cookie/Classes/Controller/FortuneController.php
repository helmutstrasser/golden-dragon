<?php

declare(strict_types=1);

namespace GoldenDragon\FortuneCookie\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Core\Context\Context;
use GoldenDragon\FortuneCookie\Domain\Repository\MessageRepository;

class FortuneController extends ActionController
{
    public function __construct(
        private readonly MessageRepository $messageRepository,
        private readonly Context $context,
    ) {
    }

    public function showAction(): ResponseInterface
    {
        $messages = $this->messageRepository->findAll()->toArray();

        $day = intdiv((int) $this->context->getPropertyFromAspect('date', 'timestamp'), 60 * 60 * 24);
        $message = $messages === [] ? null : $messages[$day % count($messages)];

        $data = $this->request->getAttribute('currentContentObject')->data;

        $this->view->assignMultiple([
            'message' => $message?->getMessage(),
            'data' => $data,
        ]);

        return $this->htmlResponse();
    }
}
