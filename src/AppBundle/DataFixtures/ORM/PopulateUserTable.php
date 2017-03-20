<?php
/**
 * Created by PhpStorm.
 * User: ashleyholmes
 * Date: 20/03/2017
 * Time: 19:21
 */

namespace AppBundle\DataFixtures\ORM;

/**
 * These were manually added to the class
 */
use Faker;
use AppBundle\Entity\User;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;

class PopulateUserTable implements FixtureInterface/*, ContainerAwareInterface*/
{
    /**
     * @var ContainerInterface
     */
//    private $Container;

    public function load(ObjectManager $manager)
    {
        // TODO: Implement load() method.
        $faker = Faker\Factory::create();

        for ($x = 0; $x <= 1000; $x++) {

            $userAdmin = new User();
            $userAdmin->setUsername($faker->userName);
            $userAdmin->setFirstname($faker->name);
            $userAdmin->setLastname($faker->lastName);
            $userAdmin->setEmail($faker->email);
            $userAdmin->setPassword($faker->password);
            /*$userAdmin->setPassword($this->hashPassword($userAdmin, $faker->password));*/

            $manager->persist($userAdmin);
        }
        $manager->flush();
    }

    /**
     * @param ContainerInterface|null $container
     */
/*    public function setContainer(ContainerInterface $container = null)
    {
        // TODO: Implement setContainer() method.
        $this->container = $container;
    }*/

    /**
     * @param User $user
     * @param $thePassword
     * @return mixed]
     */
/*    public function hashPassword(User $user, $thePassword)
    {
        $encoder = $this->container->get('security.encoder_factory')
            ->getEncoder($user);

        return $encoder->encoderPassword($thePassword, $user->getSalt());
    }*/
}