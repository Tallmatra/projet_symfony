<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class InscriptionFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        /*  for ($i = 1; $i <=10; $i++) {
        $annee=rand(2019,2020);
        $data 
        ->setAnneeScolaire($this->getReference("AnneeScolaire".$annee));
        $data ->setClasse($this->getReference("Classe".$i));
        $data->setEtudiant($this->getReference("Etudiant".$i));

        $manager->persist($data);
        $this->addReference("Inscription".$i,$data);
        }
            $manager->flush();
        }
        public function getDependencies()
        {
        return array(
        EtudiantFixtures::class,
        ClasseFixtures::class,
        ); */
    }
}


