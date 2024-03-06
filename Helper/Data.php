<?php

namespace Test\Task\Helper;


class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    // task requirements.
    // added extra cc_block_enable option
    const CC_BLOCK_ENABLE = 'task/custom_block/cc_enable_custom_block';
    const BLOCK_TITLE = 'task/custom_block/block_title';
    const REDIRECTED_TO_ENABLE = 'task/custom_block/redirect_to_checkout';   
    /**
     * Addtocart button form id
     */
    const ADDTOCART_FORM_ID = 'product_addtocart_form';


    /**
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

    // block enable disable
    public function isCustomBlockEnabled()
    {
        return $this->scopeConfig->getValue(
            self::CC_BLOCK_ENABLE,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    // block/title

    public function BlockTitle()
    {
        return $this->scopeConfig->getValue(
            self::BLOCK_TITLE,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    // redirect to check enable/disable

    public function RedirectoEnable()
    {
        return $this->scopeConfig->getValue(
            self::REDIRECTED_TO_ENABLE,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    
    
    
    
}