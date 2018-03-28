<?php
use FooTab\Models\Tab;

class Shopware_Controllers_Frontend_TestFooPersist extends Enlight_Controller_Action
{
    public function indexAction ()
    {
        $em = $this->getModelManager();

        $tab = new Tab();
        $tab->setName("test");
        $filter = $em->find("Shopware\Models\Property\Option", 1046); // sorry, this if for our data. not demo data...
        $tab->addFilter($filter);

        $em->persist($tab);
        $em->flush();

        die("hmmmm");
    }
}
