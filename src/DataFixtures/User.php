<?php

namespace App\DataFixtures;

use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Zenstruck\Foundry\Proxy;

class User extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $users = UserFactory::createMany(10);

        /** @var Proxy $user */
        foreach ($users as $user) {
            $manager->persist($user->object());
        }

        $manager->flush();
    }
}
