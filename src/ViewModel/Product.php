<?php

namespace FalconMedia\PrismicIO\ViewModel;

use Magento\Catalog\Block\Product\ImageFactory;
use Magento\Catalog\Model\ProductRepository;
use Magento\Checkout\Helper\Cart;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Url\Helper\Data;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Product implements ArgumentInterface
{

    /**
     * @var ProductRepository
     */
    private $_productRepository;

    private $_cartHelper;

    private $urlHelper;
    /**
     * @var ImageFactory
     */
    private $imageFactory;

    public function __construct(
        ProductRepository $productRepository,
        Cart $cartHelper,
        Data $urlHelper,
        ImageFactory $imageFactory
    ) {
        $this->_productRepository = $productRepository;
        $this->_cartHelper        = $cartHelper;
        $this->urlHelper          = $urlHelper;
        $this->imageFactory       = $imageFactory;
    }//end __construct()

    public function getProductBySku($sku)
    {
        try {
            return $this->_productRepository->get($sku);
        } catch (NoSuchEntityException $e) {
            return null;
        }
    }//end getProductBySku()

    /**
     * Get post parameters
     *
     * @param  \Magento\Catalog\Model\Product $product
     * @return array
     */
    public function getAddToCartPostParams($product)
    {
        $url = $this->_cartHelper->getAddUrl($product, ['_escape' => false]);
        return [
            'action' => $url,
            'data'   => [
                'product'                               => (int) $product->getEntityId(),
                ActionInterface::PARAM_NAME_URL_ENCODED => $this->urlHelper->getEncodedUrl($url),
            ],
        ];
    }//end getAddToCartPostParams()

    /**
     * Get post parameters
     *
     * @param  \Magento\Catalog\Model\Product $product
     * @return array
     */
    public function getProductPrice($product)
    {
        $productPrice = $product->loadByAttribute('sku', $product)->getPrice();
        return $productPrice;
    }

    public function getImage($product, $imageId, $attributes = [])
    {
        return $this->imageFactory->create($product, $imageId, $attributes);
    }

    /**
     * Get post parameters
     *
     * @param  \Magento\Catalog\Model\Product $product
     * @return array
     */
    public function getStock($product)
    {
        return $product->getStockData();
    }
}//end class
