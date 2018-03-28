<?php
use FooTab\Models\Tab;

class Shopware_Controllers_Backend_FooTab extends Shopware_Controllers_Backend_Application
{
    protected $model = Tab::class;
    protected $alias = 'tab';

    protected function getAdditionalDetailData(array $data)
    {
        $data['filters'] = $this->getFilters($data['id']);
        return $data;
    }

    protected function getFilters($tabId)
    {
        $builder = $this->getManager()->createQueryBuilder();
        $builder->select(array('tabs', 'filters'))
                ->from(Tab::class, 'tabs')
                ->innerJoin('tabs.filters', 'filters')
                ->where('tabs.id = :id')
                ->setParameter('id', $tabId);

        $paginator = $this->getQueryPaginator($builder);

        $data = $paginator->getIterator()->current();

        return $data['filters'];
    }
}
