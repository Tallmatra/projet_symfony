<?php

namespace App\DataFixtures;
/* use App\DataFixtures\ModuleFixtures;  */
 use App\Entity\Classe; 
  use App\Entity\Professeur; 
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Module extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
