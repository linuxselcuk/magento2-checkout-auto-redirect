<?php

namespace Test\Task\Helper;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory as ProductCollectionFactory;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;

class RandomProduct extends AbstractHelper
{
    protected $productCollectionFactory;
    protected $productRepository;
    protected $searchCriteriaBuilder;

    public function __construct(
        Context $context,
        ProductCollectionFactory $productCollectionFactory,
        ProductRepositoryInterface $productRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder
    ) {
        $this->productCollectionFactory = $productCollectionFactory;
        $this->productRepository = $productRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        parent::__construct($context);
    }

    public function getRandomProduct()
    {
        $collection = $this->productCollectionFactory->create();
        $collection->addAttributeToSelect('*');
        $collection->getSelect()->order('RAND()')->limit(1);

        $product = $collection->getFirstItem();

        return $this->productRepository->getById($product->getId());
    }    
}
