<?php
/*******************************************************************************
 * Copyright 2009-2016 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License"); 
 *
 * You may not use this file except in compliance with the License. 
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR 
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the 
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  Marketplace Web Service Products
 * @version  2011-10-01
 * Library Version: 2015-09-01
 * Generated: Thu Mar 10 07:30:00 PST 2016
 */

namespace Amazon\MarketplaceWebServiceProducts;


use Amazon\MarketplaceWebServiceProducts\Model\GetCompetitivePricingForASINResponse;
use Amazon\MarketplaceWebServiceProducts\Model\GetCompetitivePricingForSKUResponse;
use Amazon\MarketplaceWebServiceProducts\Model\GetLowestOfferListingsForASINResponse;
use Amazon\MarketplaceWebServiceProducts\Model\GetLowestOfferListingsForSKUResponse;
use Amazon\MarketplaceWebServiceProducts\Model\GetLowestPricedOffersForASINResponse;
use Amazon\MarketplaceWebServiceProducts\Model\GetLowestPricedOffersForSKUResponse;
use Amazon\MarketplaceWebServiceProducts\Model\GetMatchingProductForIdResponse;
use Amazon\MarketplaceWebServiceProducts\Model\GetMatchingProductResponse;
use Amazon\MarketplaceWebServiceProducts\Model\GetMyPriceForASINResponse;
use Amazon\MarketplaceWebServiceProducts\Model\GetMyPriceForSKUResponse;
use Amazon\MarketplaceWebServiceProducts\Model\GetProductCategoriesForASINResponse;
use Amazon\MarketplaceWebServiceProducts\Model\GetProductCategoriesForSKUResponse;
use Amazon\MarketplaceWebServiceProducts\Model\GetServiceStatusResponse;
use Amazon\MarketplaceWebServiceProducts\Model\ListMatchingProductsResponse;

class Mock implements MarketplaceWebServiceProductsInterface
{
    // Public API ------------------------------------------------------------//

    /**
     * Get Competitive Pricing For ASIN
     * Gets competitive pricing and related information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for GetCompetitivePricingForASIN request or GetCompetitivePricingForASIN object itself
     * @see GetCompetitivePricingForASIN
     * @return GetCompetitivePricingForASINResponse
     *
     * @throws Exception
     */
    public function getCompetitivePricingForASIN($request)
    {
        return GetCompetitivePricingForASINResponse::fromXML($this->_invoke('GetCompetitivePricingForASIN'));
    }

    /**
     * Get Competitive Pricing For SKU
     * Gets competitive pricing and related information for a product identified by
     * the SellerId and SKU.
     *
     * @param mixed $request array of parameters for GetCompetitivePricingForSKU request or GetCompetitivePricingForSKU object itself
     * @see GetCompetitivePricingForSKU
     * @return GetCompetitivePricingForSKUResponse
     *
     * @throws Exception
     */
    public function getCompetitivePricingForSKU($request)
    {
        
        return GetCompetitivePricingForSKUResponse::fromXML($this->_invoke('GetCompetitivePricingForSKU'));
    }

    /**
     * Get Lowest Offer Listings For ASIN
     * Gets some of the lowest prices based on the product identified by the given
     * MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for GetLowestOfferListingsForASIN request or GetLowestOfferListingsForASIN object itself
     * @see GetLowestOfferListingsForASIN
     * @return GetLowestOfferListingsForASINResponse
     *
     * @throws Exception
     */
    public function getLowestOfferListingsForASIN($request)
    {
                return GetLowestOfferListingsForASINResponse::fromXML($this->_invoke('GetLowestOfferListingsForASIN'));
    }

    /**
     * Get Lowest Offer Listings For SKU
     * Gets some of the lowest prices based on the product identified by the given
     * SellerId and SKU.
     *
     * @param mixed $request array of parameters for GetLowestOfferListingsForSKU request or GetLowestOfferListingsForSKU object itself
     * @see GetLowestOfferListingsForSKU
     * @return GetLowestOfferListingsForSKUResponse
     *
     * @throws Exception
     */
    public function getLowestOfferListingsForSKU($request)
    {
                return GetLowestOfferListingsForSKUResponse::fromXML($this->_invoke('GetLowestOfferListingsForSKU'));
    }

    /**
     * Get Lowest Priced Offers For ASIN
     * Retrieves the lowest priced offers based on the product identified by the given
     *     ASIN.
     *
     * @param mixed $request array of parameters for GetLowestPricedOffersForASIN request or GetLowestPricedOffersForASIN object itself
     * @see GetLowestPricedOffersForASIN
     * @return GetLowestPricedOffersForASINResponse
     *
     * @throws Exception
     */
    public function getLowestPricedOffersForASIN($request)
    {
                return GetLowestPricedOffersForASINResponse::fromXML($this->_invoke('GetLowestPricedOffersForASIN'));
    }

    /**
     * Get Lowest Priced Offers For SKU
     * Retrieves the lowest priced offers based on the product identified by the given
     *     SellerId and SKU.
     *
     * @param mixed $request array of parameters for GetLowestPricedOffersForSKU request or GetLowestPricedOffersForSKU object itself
     * @see GetLowestPricedOffersForSKU
     * @return GetLowestPricedOffersForSKUResponse
     *
     * @throws Exception
     */
    public function getLowestPricedOffersForSKU($request)
    {
                return GetLowestPricedOffersForSKUResponse::fromXML($this->_invoke('GetLowestPricedOffersForSKU'));
    }

    /**
     * Get Matching Product
     * GetMatchingProduct will return the details (attributes) for the
     * given ASIN.
     *
     * @param mixed $request array of parameters for GetMatchingProduct request or GetMatchingProduct object itself
     * @see GetMatchingProduct
     * @return GetMatchingProductResponse
     *
     * @throws Exception
     */
    public function getMatchingProduct($request)
    {
                return GetMatchingProductResponse::fromXML($this->_invoke('GetMatchingProduct'));
    }

    /**
     * Get Matching Product For Id
     * GetMatchingProduct will return the details (attributes) for the
     * given Identifier list. Identifer type can be one of [SKU|ASIN|UPC|EAN|ISBN|GTIN|JAN]
     *
     * @param mixed $request array of parameters for GetMatchingProductForId request or GetMatchingProductForId object itself
     * @see GetMatchingProductForId
     * @return GetMatchingProductForIdResponse
     *
     * @throws Exception
     */
    public function getMatchingProductForId($request)
    {
                return GetMatchingProductForIdResponse::fromXML($this->_invoke('GetMatchingProductForId'));
    }

    /**
     * Get My Price For ASIN
     * <!-- Wrong doc in current code -->
     *
     * @param mixed $request array of parameters for GetMyPriceForASIN request or GetMyPriceForASIN object itself
     * @see GetMyPriceForASIN
     * @return GetMyPriceForASINResponse
     *
     * @throws Exception
     */
    public function getMyPriceForASIN($request)
    {
                return GetMyPriceForASINResponse::fromXML($this->_invoke('GetMyPriceForASIN'));
    }

    /**
     * Get My Price For SKU
     * <!-- Wrong doc in current code -->
     *
     * @param mixed $request array of parameters for GetMyPriceForSKU request or GetMyPriceForSKU object itself
     * @see GetMyPriceForSKU
     * @return GetMyPriceForSKUResponse
     *
     * @throws Exception
     */
    public function getMyPriceForSKU($request)
    {
                return GetMyPriceForSKUResponse::fromXML($this->_invoke('GetMyPriceForSKU'));
    }

    /**
     * Get Product Categories For ASIN
     * Gets categories information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for GetProductCategoriesForASIN request or GetProductCategoriesForASIN object itself
     * @see GetProductCategoriesForASIN
     * @return GetProductCategoriesForASINResponse
     *
     * @throws Exception
     */
    public function getProductCategoriesForASIN($request)
    {
                return GetProductCategoriesForASINResponse::fromXML($this->_invoke('GetProductCategoriesForASIN'));
    }

    /**
     * Get Product Categories For SKU
     * Gets categories information for a product identified by
     * the SellerId and SKU.
     *
     * @param mixed $request array of parameters for GetProductCategoriesForSKU request or GetProductCategoriesForSKU object itself
     * @see GetProductCategoriesForSKU
     * @return GetProductCategoriesForSKUResponse
     *
     * @throws Exception
     */
    public function getProductCategoriesForSKU($request)
    {
                return GetProductCategoriesForSKUResponse::fromXML($this->_invoke('GetProductCategoriesForSKU'));
    }

    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     * takes no input.
     * All API sections within the API are required to implement this operation.
     *
     * @param mixed $request array of parameters for GetServiceStatus request or GetServiceStatus object itself
     * @see GetServiceStatus
     * @return GetServiceStatusResponse
     *
     * @throws Exception
     */
    public function getServiceStatus($request)
    {
                return GetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }

    /**
     * List Matching Products
     * ListMatchingProducts can be used to
     * find products that match the given criteria.
     *
     * @param mixed $request array of parameters for ListMatchingProducts request or ListMatchingProducts object itself
     * @see ListMatchingProducts
     * @return ListMatchingProductsResponse
     *
     * @throws Exception
     */
    public function listMatchingProducts($request)
    {
                return ListMatchingProductsResponse::fromXML($this->_invoke('ListMatchingProducts'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents(dirname(__FILE__) . '/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }

}
