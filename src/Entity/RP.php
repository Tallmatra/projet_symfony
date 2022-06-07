<?php

namespace App\Entity;

use App\Repository\RPRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RPRepository::class)]
class RP extends User
{
    #[ORM\OneToMany(mappedBy: 'rP', targetEntity: Classe::class)]
    private $classes;

    #[ORM\OneToMany(mappedBy: 'rP', targetEntity: Module::class)]
    private $modules;

    public function __construct()
    {
        $this->classes = new ArrayCollection();
        $this->modules = new ArrayCollection();
    }

    /**
     * @return Collection<int, Classe>
     */
    public function getClasses(): Collection
    {
        return $this->classes;
    }

    public function addClass(Classe $class): self
    {
        if (!$this->classes->contains($class)) {
            $this->classes[] = $class;
            $class->setRP($this);
        }

        return $this;
    }

    public function removeClass(Classe $class): self
    {
        if ($this->classes->removeElement($class)) {
            // set the owning side to null (unless already changed)
            if ($class->getRP() === $this) {
                $class->setRP(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Module>
     */
    public function getModules(): Collection
    {
        return $this->modules;
    }

    public function addModule(Module $module): self
    {
        if (!$this->modules->contains($module)) {
            $this->modules[] = $module;
            $module->setRP($this);
        }

        return $this;
    }

    public function removeModule(Module $module): self
    {
        if ($this->modules->removeElement($module)) {
            // set the owning side to null (unless already changed)
            if ($module->getRP() === $this) {
                $module->setRP(null);
            }
        }

        return $this;
    }
}
