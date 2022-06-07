<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

abstract class EtudiantFixtures extends Fixture
{
    /* private $encoder;
    public function __construct(UserPasswordEncoderInterface $encoder){
        $this->encoder=$encoder;
    }
    public function load(ObjectManager $manager)
    {
        $plainPassword = 'passer@123';
        for ($i = 1; $i <=10; $i++) {
            $user = new Etudiant();
            $user->setNomComplet('Nom et Prenom
            '.$i);
            $user->setLogin('login_etu'.$i);
            $encoded = $this->encoder->encodePassword($user,
            $plainPassword);
            $user->setPassword($encoded);
            $user->setRoles(["ROLE_ETUDIANT"]);
            $user->setTuteur("Tuteur ".$i);
            $user->setMatricule("0000"+$i);
            $manager->persist($user);
            $this->addReference("Etudiant".$i, $user);
        }
       $manager->flush();
    } */
}
