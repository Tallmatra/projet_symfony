<?php

namespace App\Entity;

use App\Repository\InscriptionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InscriptionRepository::class)]
class Inscription
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\ManyToOne(targetEntity: Classe::class, inversedBy: 'classe')]
    private $classe;

    #[ORM\ManyToOne(targetEntity: AnneeScolaire::class, inversedBy: 'inscriptions')]
    private $anneeScolaire;

    #[ORM\ManyToOne(targetEntity: Etudiant::class, inversedBy: 'inscriptions')]
    private $etudiant;

    #[ORM\ManyToOne(targetEntity: AC::class, inversedBy: 'inscriptions')]
    private $ac;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClasse(): ?Classe
    {
        return $this->classe;
    }

    public function setClasse(?Classe $classe): self
    {
        $this->classe = $classe;

        return $this;
    }

    public function getAnneeScolaire(): ?AnneeScolaire
    {
        return $this->anneeScolaire;
    }

    public function setAnneeScolaire(?AnneeScolaire $anneeScolaire): self
    {
        $this->anneeScolaire = $anneeScolaire;

        return $this;
    }

    public function getEtudiant(): ?Etudiant
    {
        return $this->etudiant;
    }

    public function setEtudiant(?Etudiant $etudiant): self
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    public function getAc(): ?AC
    {
        return $this->ac;
    }

    public function setAc(?AC $ac): self
    {
        $this->ac = $ac;
        return $this;
    }

    
}
