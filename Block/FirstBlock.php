<?php
/*
* creating the block for homepage
*/

namespace Test\Task\Block;

class FirstBlock extends \Magento\Framework\View\Element\Template
{
    protected $myModuleHelper;
    //include helpers to construct
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        // helpers
        \Test\Task\Helper\Data $myModuleHelper,
        \Test\Task\Helper\RandomProduct $helper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_mymoduleHelper = $myModuleHelper;
        $this->_helper = $helper;
    }
 
    // gets config from admin page as 0 or 1. It was not mentioned by the Task document
    // but added in case it may be needed

    public function isCustomBlockEnabled()

    {
        return $this->_mymoduleHelper->isCustomBlockEnabled();
    }
    
    public function BlockTitle()
    {
        return $this->_mymoduleHelper->BlockTitle();
    }

    public function RedirectoEnable()
    {
        return $this->_mymoduleHelper->RedirectoEnable();
    }

    public function getRandomProduct()
    {
        return $this->_helper->getRandomProduct();
    }
}

?>