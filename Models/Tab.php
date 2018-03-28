<?php
namespace FooTab\Models;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Shopware\Components\Model\ModelEntity;
use Doctrine\ORM\Mapping AS ORM;

/**
* @ORM\Table(name="foo_tab_tab")
* @ORM\Entity
*/
class Tab extends ModelEntity
{
    /**
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=false, unique=true)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="Shopware\Models\Property\Option", cascade={"persist", "remove"})
     * @ORM\JoinTable(name="foo_tab_tab_filters")
     */
    private $filters;

    public function __construct ()
    {
        $this->filters = new ArrayCollection();
    }

    public function getId ()
    {
        return $this->id;
    }

    public function getName ()
    {
        return $this->name;
    }

    public function setName ($name)
    {
        $this->name = $name;
    }

    public function getFilters ()
    {
        return $this->filters;
    }

    public function setFilters ($filters)
    {
        $this->$filters = $filters;
    }

    public function addFilter ($filter)
    {
        if (!$this->filters->contains($filter)) {
            $this->filters->add($filter);
        }
    }

    public function removeFilter ($filter)
    {
        $this->filters->removeElement($filter);
    }
}
