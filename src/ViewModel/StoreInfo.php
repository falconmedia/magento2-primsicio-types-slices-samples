<?php

/**
 * Copyright © Falcon Media. All rights reserved.
 * https://www.falconmedia.nl
 */

declare(strict_types=1);

namespace FalconMedia\PrismicIOTypesSlices\ViewModel;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Variable\Model\Variable;
use Magento\Variable\Model\VariableFactory;

class StoreInfo implements ArgumentInterface
{

    /**
     * @var VariableFactory
     */
    private $variableFactory;

    /**
     * @var UrlInterface
     */
    private $urlBuilder;

    /**
     * @var StoreManagerInterface
     */
    private $storeManager;


    public function __construct(
        VariableFactory $variableFactory,
        StoreManagerInterface $storeManager,
        UrlInterface $urlInterface
    ) {
        $this->variableFactory = $variableFactory;
        $this->storeManager    = $storeManager;
        $this->urlBuilder      = $urlInterface;

    }//end __construct()

    /** START CUSTOM VARIABLES */

    /**
     * @return mixed
     */
    public function getCustomVariableData()
    {
        return $this->getVariableValueByCode('custom_variable_name');

    }//end getCustomVariableData()

    /** END CUSTOM VARIABLES */


    /**
     * @return mixed
     */
    public function getBaseUrl()
    {
        return $this->storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_WEB);

    }//end getBaseUrl()

    /**
     * @return mixed
     * @throws NoSuchEntityException
     */
    public function getStoreName()
    {
        return $this->storeManager->getStore()->getConfig(
            'general/store_information/name'
        );

    }//end getStoreName()



    /**
     * @return mixed
     * @throws NoSuchEntityException
     */
    public function getStoreLogo()
    {
        return $this->storeManager->getStore()->getConfig(
            'general/store_information/logo'
        );

    }//end getStoreLogo()


    /**
     * @return mixed
     * @throws NoSuchEntityException
     */
    public function getStoreAddress()
    {
        return $this->storeManager->getStore()->getConfig(
            'general/store_information/street_line1'
        );

    }//end getStoreAddress()


    /**
     * @return mixed
     * @throws NoSuchEntityException
     */
    public function getStorePostcode()
    {
        return $this->storeManager->getStore()->getConfig(
            'general/store_information/postcode'
        );

    }//end getStorePostcode()


    /**
     * @return mixed
     * @throws NoSuchEntityException
     */
    public function getStoreCity()
    {
        return $this->storeManager->getStore()->getConfig(
            'general/store_information/city'
        );

    }//end getStoreCity()


    /**
     * @return mixed
     * @throws NoSuchEntityException
     */
    public function getStoreCountry()
    {
        return $this->storeManager->getStore()->getConfig(
            'general/store_information/country'
        );

    }//end getStoreCountry()


    /**
     * @return mixed
     * @throws NoSuchEntityException
     */
    public function getStorePhone()
    {
        return $this->storeManager->getStore()->getConfig(
            'general/store_information/phone'
        );

    }//end getStorePhone()


    /**
     * @return mixed
     * @throws NoSuchEntityException
     */
    public function getStoreMail()
    {
        return $this->storeManager->getStore()->getConfig(
            'trans_email/ident_general/email'
        );

    }//end getStoreMail()

    /**
     * @return mixed
     * @throws NoSuchEntityException
     */
    public function getStoreVat()
    {
        return $this->storeManager->getStore()->getConfig(
            'general/store_information/merchant_vat_number'
        );

    }//end getStoreVat()

    /**
     * @param  $code
     * @return Variable
     */
    public function getVariableValueByCode($code)
    {
        $customVariable = $this->variableFactory->create()->setStoreId(
            $this->storeManager->getStore()->getId()
        )->loadByCode(
            $code
        );

        if ($customVariable) {
            return $customVariable->getValue();
        }

        return '';

    }//end getVariableValueByCode()




}//end class
