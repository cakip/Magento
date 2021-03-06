<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Hepsipay\Hepsipay\Model;

class History extends \Magento\Framework\Model\AbstractModel
{
	/**
     * Initialize dependencies.
     *
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry     
     * @param \Magento\Framework\Model\ResourceModel\AbstractResource $resource
     * @param \Magento\Framework\Data\Collection\AbstractDb $resourceCollection
     * @param array $data
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
	public function __construct(
	        \Magento\Framework\Model\Context $context,
	        \Magento\Framework\Registry $registry,
	        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,			
	        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
	        array $data = []
	) 
	{
	    parent::__construct($context, $registry, $resource, $resourceCollection, $data);
	}

	public function _construct()
	{
	    $this->_init('Hepsipay\Hepsipay\Model\ResourceModel\History');
	}
}