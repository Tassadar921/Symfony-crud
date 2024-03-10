<?php

namespace App\DataFixtures\ORM;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    public function __construct(private readonly UserPasswordHasherInterface $passwordEncoder)
    {
    }

    public function load(ObjectManager $manager): void
    {
        $admin = (new User())
            ->setEmail('admin@crud.com')
            ->setRoles(['ROLE_ADMIN']);

        $admin->setPassword($this->passwordEncoder->hashPassword($admin, 'xxx'));

        $manager->persist($admin);

        $user = (new User())
            ->setEmail('user@crud.com')
            ->setRoles(['ROLE_USER']);

        $manager->persist($user);

        $user->setPassword($this->passwordEncoder->hashPassword($user, 'xxx'));

        $manager->flush();
    }
}
