<?php
/**
 * Created by PhpStorm.
 * User: ashleyholmes
 * Date: 20/03/2017
 * Time: 19:21
 */

namespace AppBundle\DataFixtures\ORM;

use Faker;
use AppBundle\Entity\User;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class PopulateUserTable implements FixtureInterface, ContainerAwareInterface
{
    /**
     * @var
     */
    private $container;

    public function load(ObjectManager $manager)
    {
        // TODO: Implement load() method.
        $faker = Faker\Factory::create();

        for ($x = 0; $x <= 74; $x++) {

            $userAdmin = new User();
            $userAdmin->setUsername($faker->userName);
            $userAdmin->setFirstname($faker->name);
            $userAdmin->setLastname($faker->lastName);
            $userAdmin->setEmail($faker->email);
            $userAdmin->setPassword($faker->password);
            $userAdmin->setPassword($this->hashPassword($userAdmin, $faker->password));

            $manager->persist($userAdmin);
        }
        $manager->flush();
    }

    /**
     * @param ContainerInterface|null $container
     */
    public function setContainer(ContainerInterface $container = null)
    {
        // TODO: Implement setContainer() method.
        $this->container = $container;
    }

    /**
     * @param User $user
     * @param $thePassword
     * @return mixed
     */
    public function hashPassword(User $user, $thePassword)
    {
        $encoder = $this->container->get('security.encoder_factory')
            ->getEncoder($user);

        /**
         * bcrypt comes with its own salt. PHP has a built in mechanism that it uses to create salt and it puts salt
         * in the String that it returns so we do not need salt but Symfony requires salt, we have to go ahead and use
         * all the methods that are required
         */
        return $encoder->encodePassword($thePassword, $user->getSalt());
    }
}