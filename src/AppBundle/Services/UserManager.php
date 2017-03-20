<?php
/**
 * Created by PhpStorm.
 * User: ashleyholmes
 * Date: 20/03/2017
 * Time: 22:55
 */

namespace AppBundle\Services;


use Symfony\Component\Security\Core\Encoder\EncoderFactory;
use Symfony\Component\Security\Core\User\UserInterface;

class UserManager
{
    /**
     * @var \Symfony\Component\Security\Core\Encoder\EncoderFactory;
     */
    private $encoderFactory;

    /**
     * @param EncoderFactory $encoderFactory
     */
    public function __construct(EncoderFactory $encoderFactory)
    {
        $this->encoderFactory = $encoderFactory;
    }

    /**
     * @param UserInterface $user
     * @param string $sPasswordToEncode
     */
    public function setUserPassword(UserInterface $user, $sPasswordToEncode)
    {
        /**
         * encode the given password
         */
        $hashedPassword = $this->encoderFactory->getEncoder($user)
            ->encodePassword($sPasswordToEncode, $user->getSalt());

        /**
         * set it in the entity
         */
        $user->setPassword($hashedPassword);
    }
}