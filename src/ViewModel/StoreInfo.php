<?php

/**
 * Copyright © Falcon Media. All rights reserved.
 * https://www.falconmedia.nl
 */

declare(strict_types=1);

namespace FalconMedia\Core\ViewModel;

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


    /**
     * @return mixed
     */
    public function getBaseUrl()
    {
        return $this->storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_WEB);

    }//end getBaseUrl()

    /**
     * @return mixed
     */
    public function getGetTheAppUrlAndroid()
    {
        return $this->getVariableValueByCode('get_the_app_url_android');

    }//end getGetTheAppUrlAndroid()


    /**
     * @return mixed
     */
    public function getGetTheAppImgAndroid()
    {
        return $this->getVariableValueByCode('get_the_app_img_android');

    }//end getGetTheAppImgAndroid()


    /**
     * @return mixed
     */
    public function getGetTheAppImgApple()
    {
        return $this->getVariableValueByCode('get_the_app_img_apple');

    }//end getGetTheAppImgApple()


    /**
     * @return mixed
     */
    public function getGetTheAppUrlApple()
    {
        return $this->getVariableValueByCode('get_the_app_url_apple');

    }//end getGetTheAppUrlApple()


    /**
     * @return mixed
     */
    public function getGetTheAppImage()
    {
        return $this->getVariableValueByCode('get_the_app_img');

    }//end getGetTheAppImage()


    /**
     * @return mixed
     */
    public function getGetTheAppTitle()
    {
        return $this->getVariableValueByCode('get_the_app_title');

    }//end getGetTheAppTitle()


    /**
     * @return mixed
     */
    public function getGetTheAppDescription()
    {
        return $this->getVariableValueByCode('get_the_app_description');

    }//end getGetTheAppDescription()


    /**
     * @return mixed
     */
    public function getGetTheAppButtonLabel()
    {
        return $this->getVariableValueByCode('get_the_app_button_label');

    }//end getGetTheAppButtonLabel()


    /**
     * @return mixed
     */
    public function getStoreOpenMonday()
    {
        return $this->getVariableValueByCode('store_open_monday');

    }//end getStoreOpenMonday()


    /**
     * @return mixed
     */
    public function getStoreOpenTuesday()
    {
        return $this->getVariableValueByCode('store_open_tuesday');

    }//end getStoreOpenTuesday()


    /**
     * @return mixed
     */
    public function getStoreOpenWednesday()
    {
        return $this->getVariableValueByCode('store_open_wednesday');

    }//end getStoreOpenWednesday()


    /**
     * @return mixed
     */
    public function getStoreOpenThursday()
    {
        return $this->getVariableValueByCode('store_open_thursday');

    }//end getStoreOpenThursday()


    /**
     * @return mixed
     */
    public function getStoreOpenFriday()
    {
        return $this->getVariableValueByCode('store_open_friday');

    }//end getStoreOpenFriday()


    /**
     * @return mixed
     */
    public function getStoreOpenSaturday()
    {
        return $this->getVariableValueByCode('store_open_saturday');

    }//end getStoreOpenSaturday()


    /**
     * @return mixed
     */
    public function getStoreOpenSunday()
    {
        return $this->getVariableValueByCode('store_open_sunday');

    }//end getStoreOpenSunday()


    /**
     * @return mixed
     */
    public function getStoreCloseMonday()
    {
        return $this->getVariableValueByCode('store_close_monday');

    }//end getStoreCloseMonday()


    /**
     * @return mixed
     */
    public function getStoreCloseTuesday()
    {
        return $this->getVariableValueByCode('store_close_tuesday');

    }//end getStoreCloseTuesday()


    /**
     * @return mixed
     */
    public function getStoreCloseWednesday()
    {
        return $this->getVariableValueByCode('store_close_wednesday');

    }//end getStoreCloseWednesday()


    /**
     * @return mixed
     */
    public function getStoreCloseThursday()
    {
        return $this->getVariableValueByCode('store_close_thursday');

    }//end getStoreCloseThursday()


    /**
     * @return mixed
     */
    public function getStoreCloseFriday()
    {
        return $this->getVariableValueByCode('store_close_friday');

    }//end getStoreCloseFriday()


    /**
     * @return mixed
     */
    public function getStoreCloseSaturday()
    {
        return $this->getVariableValueByCode('store_close_saturday');

    }//end getStoreCloseSaturday()


    /**
     * @return mixed
     */
    public function getStoreCloseSunday()
    {
        return $this->getVariableValueByCode('store_close_sunday');

    }//end getStoreCloseSunday()


    /**
     * @return mixed
     */
    public function getServiceOpenMonday()
    {
        return $this->getVariableValueByCode('custs_open_monday');

    }//end getServiceOpenMonday()


    /**
     * @return mixed
     */
    public function getServiceOpenTuesday()
    {
        return $this->getVariableValueByCode('custs_open_tuesday');

    }//end getServiceOpenTuesday()


    /**
     * @return mixed
     */
    public function getServiceOpenWednesday()
    {
        return $this->getVariableValueByCode('custs_open_wednesday');

    }//end getServiceOpenWednesday()


    /**
     * @return mixed
     */
    public function getServiceOpenThursday()
    {
        return $this->getVariableValueByCode('custs_open_thursday');

    }//end getServiceOpenThursday()


    /**
     * @return mixed
     */
    public function getServiceOpenFriday()
    {
        return $this->getVariableValueByCode('custs_open_friday');

    }//end getServiceOpenFriday()


    /**
     * @return mixed
     */
    public function getServiceOpenSaterday()
    {
        return $this->getVariableValueByCode('custs_open_saturday');

    }//end getServiceOpenSaterday()


    /**
     * @return mixed
     */
    public function getServiceOpenSunday()
    {
        return $this->getVariableValueByCode('custs_open_sunday');

    }//end getServiceOpenSunday()


    /**
     * @return mixed
     */
    public function getServiceCloseMonday()
    {
        return $this->getVariableValueByCode('custs_close_monday');

    }//end getServiceCloseMonday()


    /**
     * @return mixed
     */
    public function getServiceCloseTuesday()
    {
        return $this->getVariableValueByCode('custs_close_tuesday');

    }//end getServiceCloseTuesday()


    /**
     * @return mixed
     */
    public function getServiceCloseWednesday()
    {
            return $this->getVariableValueByCode('custs_close_wednesday');

    }//end getServiceCloseWednesday()


    /**
     * @return mixed
     */
    public function getServiceClosecusts_close_thursday()
    {
        return $this->getVariableValueByCode('custs_close_thursday');

    }//end getServiceClosecusts_close_thursday()


    /**
     * @return mixed
     */
    public function getServiceCloseFriday()
    {
        return $this->getVariableValueByCode('custs_close_friday');

    }//end getServiceCloseFriday()


    /**
     * @return mixed
     */
    public function getServiceCloseSaturday()
    {
        return $this->getVariableValueByCode('custs_close_saturday');

    }//end getServiceCloseSaturday()


    /**
     * @return mixed
     */
    public function getServiceCloseSunday()
    {
        return $this->getVariableValueByCode('custs_close_sunday');

    }//end getServiceCloseSunday()


    /**
     * @return mixed
     */
    public function getPaymentLogoIdeal()
    {
        return $this->getVariableValueByCode(
            'payment_logo_ideal'
        );

    }//end getPaymentLogoIdeal()

    /**
     * @return mixed
     */
    public function getPaymentLogoAfterpay()
    {
        return $this->getVariableValueByCode(
            'payment_logo_afterpay'
        );

    }//end getPaymentLogoAfterpay()


    /**
     * @return mixed
     */
    public function getPaymentLogoAmex()
    {
        return $this->getVariableValueByCode(
            'payment_logo_amex'
        );

    }//end getPaymentLogoAmex()


    /**
     * @return mixed
     */
    public function getPaymentLogoMastercard()
    {
        return $this->getVariableValueByCode(
            'payment_logo_mastercard'
        );

    }//end getPaymentLogoMastercard()


    /**
     * @return mixed
     */
    public function getPaymentLogoMaestro()
    {
        return $this->getVariableValueByCode(
            'payment_logo_maestro'
        );

    }//end getPaymentLogoMaestro()


    /**
     * @return mixed
     */
    public function getPaymentLogoVisa()
    {
        return $this->getVariableValueByCode(
            'payment_logo_visa'
        );

    }//end getPaymentLogoVisa()


    /**
     * @return mixed
     */
    public function getPaymentLogoBancontant()
    {
        return $this->getVariableValueByCode(
            'payment_logo_bancontant'
        );

    }//end getPaymentLogoBancontant()

    /**
     * @return mixed
     */
    public function getPaymentLogoMollie()
    {
        return $this->getVariableValueByCode(
            'payment_logo_mollie'
        );

    }//end getPaymentLogoMollie()


    /**
     * @return mixed
     */
    public function getPaymentLogoPaypal()
    {
        return $this->getVariableValueByCode(
            'payment_logo_paypal'
        );

    }//end getPaymentLogoPaypal()


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
     * @return mixed
     */
    public function getStoreKvk()
    {
        return $this->getVariableValueByCode('store_kvk');

    }//end getStoreKvk()

    /**
     * @return mixed
     */
    public function getStoreIban()
    {
        return $this->getVariableValueByCode('store_iban');

    }//end getStoreIban()

    /**
     * @return mixed
     */
    public function getStoreRouteButton()
    {
        return $this->getVariableValueByCode('store_route_button_label');

    }//end getStoreRouteButton()


    /**
     * @return mixed
     */
    public function getStoreRouteUrl()
    {
        return $this->getVariableValueByCode('store_route_url');

    }//end getStoreRouteUrl()


    /**
     * @return mixed
     */
    public function getLogoUrl()
    {
        return $this->urlBuilder->getUrl('media/LOGO-NAME.jpg');

    }//end getLogoUrl()


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
