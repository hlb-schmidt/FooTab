<?php
use FooTab\Models\Tab;

class Shopware_Controllers_Frontend_TestFooPersist extends Enlight_Controller_Action
{
    public function indexAction ()
    {
        $em = $this->getModelManager();
        $filter = $em->find("Shopware\Models\Property\Option", 1138); // sorry, this if for our data. not demo data...

        // addFilter() WORKS
        $tab = new Tab();
        $tab->setName("test1");
        $tab->addFilter($filter);
        $em->persist($tab);
        $em->flush();

        // setFilters() with copy WORKS
        $tab = new Tab();
        $tab->setName("test2");
        $filters = $tab->getFilters();
        $filters->add($filter);
        $tab->setFilters($filters);
        $em->persist($tab);
        $em->flush();

        // TODO: setFilters() with new does NOT WORK
        $tab = new Tab();
        $tab->setName("test3");
        $filters = new \Doctrine\Common\Collections\ArrayCollection();
        $filters->add($filter);
        $tab->setFilters($filters);
        $em->persist($tab);
        $em->flush();

        die("hmmmm");
    }
}
