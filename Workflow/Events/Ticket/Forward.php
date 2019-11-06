<?php

namespace Webkul\UVDesk\CoreFrameworkBundle\Workflow\Events\Ticket;

use Webkul\UVDesk\AutomationBundle\Workflow\FunctionalGroup;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Webkul\UVDesk\AutomationBundle\Workflow\Event as WorkflowEvent;

class Forward extends WorkflowEvent
{
    public static function getId()
    {
        return 'uvdesk.ticket.forward_added';
    }

    public static function getDescription()
    {
        return 'Forward Added';
    }

    public static function getFunctionalGroup()
    {
        return FunctionalGroup::TICKET;
    }
}
