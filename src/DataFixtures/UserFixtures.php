<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('admin@admin.com');
        $user->setRoles(['ROLE_ADMIN']);
        // $user->setPassword('$2y$13$p85RfnPn/6dA5ZDHVNES.eO3Euhw/kvU8ZLieLhcpa1xy8fbG/2RK');
        $user->setPlainPassword("poiu");
        $manager->persist($user);

        $manager->flush();
    }
}
