<?php

namespace App\DataFixtures;

use App\Entity\Professeur;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ProfesseurFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        for ($i=0; $i < 10; $i++) { 
            # code...
            $prof= new Professeur();
            $prof->setNomComplet('prof'.$i);
            $prof->setGrade('prof'.$i);
            for ($j=0; $j < 2; $j++) 
            { 
                # code...
                $ref=rand(0,9);
                $prof->addClass($this->getReference('classe'.$ref));
            }
            $manager->persist($prof);

            
        }
        $manager->flush();
    }
}