<?php

declare(strict_types=1);

namespace GoldenDragon\FortuneCookie\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;

class MessageRepository extends Repository
{
    protected $defaultOrderings = [
        'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
    ];
}
