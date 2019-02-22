<?php
/**
 * Created by PhpStorm.
 * User: WEBENOO
 * Date: 20/02/2019
 * Time: 15:10
 */

namespace App\EventListener;


use Lexik\Bundle\JWTAuthenticationBundle\Event\JWTCreatedEvent;

class JWTEventListener
{
    static function onJwtCreated(JWTCreatedEvent $event):void{
        $user = $event->getUser();

        $payload = $event->getData();
        $payload['firstname'] = $user->getFirstname();
        $payload['name'] = $user->getName();
        $payload['id'] = $user->getId();
        $payload['weight'] = $user->getWeight();
        $payload['size'] = $user->getSize();
        $event->setData($payload);
    }

}