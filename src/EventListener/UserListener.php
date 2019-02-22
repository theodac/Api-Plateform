<?php
/**
 * Created by PhpStorm.
 * User: WEBENOO
 * Date: 18/02/2019
 * Time: 16:39
 */

namespace App\EventListener;


use App\Entity\User;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserListener
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    /**
     * UserListener constructor.
     * @param UserPasswordEncoderInterface $encoder
     */
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    /**
     * @ORM\PrePersist()
     * @param User $user
     * @param LifecycleEventArgs $eventArgs
     */
    public function prePersistHandler(User $user, LifecycleEventArgs $eventArgs)
    {
        $this->encodePassword($user);
    }

    /**
     * @ORM\PreUpdate()
     * @param User $user
     * @param PreUpdateEventArgs $eventArgs
     */
    public function preUpdateHandler(User $user, PreUpdateEventArgs $eventArgs)
    {
        if ($eventArgs->hasChangedField('password') && $eventArgs->getNewValue('password') !== null) {
            $this->encodePassword($user);
        }
    }

    private function encodePassword(User $user): void
    {
        $user->setPassword($this->encoder->encodePassword($user, $user->getPassword()));
    }
}