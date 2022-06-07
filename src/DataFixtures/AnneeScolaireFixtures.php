<?php

namespace App\DataFixtures;
use App\Entity\AnneeScolaire;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnneeScolaireFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        for ($i=2010; $i <2022 ; $i++) {
            $data=new AnneeScolaire();
            $annee= $i."-".($i+1);
            $data->setAnnee($annee)
            ->setEtat(false);
            $manager->persist($data);
            $this->addReference("AnneeScolaire".$i, $data);

        }
        $manager->flush();
    }
}
