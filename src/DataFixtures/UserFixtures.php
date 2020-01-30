<?php


namespace App\DataFixtures;


use App\Entity\User;
use Faker;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;
    protected $faker;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $subscriber = new User();
        $subscriber->setEmail('user@monsite.com');
        $subscriber->setRoles(['ROLE_SUBSCRIBER']);
        $subscriber->setFirstname('Eric');
        $subscriber->setLastname('Lafont');
        $subscriber->setPassword($this->passwordEncoder->encodePassword(
            $subscriber,
            '0000'
        ));
        $manager->persist($subscriber);

        $admin = new User();
        $admin->setEmail('admin@monsite.com');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setFirstname('Philippe');
        $admin->setLastname('Perrin');
        $admin->setPassword($this->passwordEncoder->encodePassword(
            $admin,
            'adminpassword'
        ));

        $manager->persist($admin);

        $faker = Faker\Factory::create('fr_FR');
        for($i = 0; $i <= 10; $i++) {
           $user = new User();
           $user->setFirstname($faker->firstName('male'|'female'));
           $user->setLastname($faker->lastName);
           $user->setEmail($faker->email);
           $user->setRoles(['ROLE_USER']);
           $user->setPassword($faker->password($maxNbChars = 10));

           $manager->persist($user);
        }
        $manager->flush();
    }
}