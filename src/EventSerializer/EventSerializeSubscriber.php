<?php

namespace App\EventSerializer;

/**
 * Class EventSerializeSubscriber
 *
 * @package App\EventSerializer
 */
class EventSerializeSubscriber implements JMS\Serializer\EventDispatcher\EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            array(
                'event' => 'serializer.pre_serialize',
                'method' => 'onPreSerialize',
                'class' => 'AppBundle\\Entity\\SpecificClass', // if no class, subscribe to every serialization
                'format' => 'json', // optional format
                'priority' => 0, // optional priority
            ),
        );
    }

    public function onPreSerialize(JMS\Serializer\EventDispatcher\PreSerializeEvent $event)
    {
        // do something
    }
}