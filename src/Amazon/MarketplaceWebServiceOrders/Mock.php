<?php
/*******************************************************************************
 * Copyright 2009-2015 Amazon Services. All Rights Reserved.
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
 * @package  Marketplace Web Service Orders
 * @version  2013-09-01
 * Library Version: 2015-09-24
 * Generated: Fri Sep 25 20:06:28 GMT 2015
 */

namespace Amazon\MarketplaceWebServiceOrders;

use Amazon\MarketplaceWebServiceOrders\Model\GetOrderResponse;
use Amazon\MarketplaceWebServiceOrders\Model\GetServiceStatusResponse;
use Amazon\MarketplaceWebServiceOrders\Model\ListOrderItemsByNextTokenResponse;
use Amazon\MarketplaceWebServiceOrders\Model\ListOrderItemsResponse;
use Amazon\MarketplaceWebServiceOrders\Model\ListOrdersByNextTokenResponse;
use Amazon\MarketplaceWebServiceOrders\Model\ListOrdersResponse;

class Mock implements MarketplaceWebServiceOrdersInterface
{
    // Public API ------------------------------------------------------------//

    /**
     * Get Order
     * This operation takes up to 50 order ids and returns the corresponding orders.
     *
     * @param mixed $request array of parameters for GetOrder request or GetOrder object itself
     * @see GetOrder
     * @return GetOrderResponse
     *
     * @throws Exception
     */
    public function getOrder($request)
    {
        return GetOrderResponse::fromXML($this->_invoke('GetOrder'));
    }

    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     * 		takes no input.
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
     * List Order Items
     * This operation can be used to list the items of the order indicated by the
     *         given order id (only a single Amazon order id is allowed).
     *
     * @param mixed $request array of parameters for ListOrderItems request or ListOrderItems object itself
     * @see ListOrderItems
     * @return ListOrderItemsResponse
     *
     * @throws Exception
     */
    public function listOrderItems($request)
    {
        return ListOrderItemsResponse::fromXML($this->_invoke('ListOrderItems'));
    }

    /**
     * List Order Items By Next Token
     * If ListOrderItems cannot return all the order items in one go, it will
     *         provide a nextToken. That nextToken can be used with this operation to
     *         retrive the next batch of items for that order.
     *
     * @param mixed $request array of parameters for ListOrderItemsByNextToken request or ListOrderItemsByNextToken object itself
     * @see ListOrderItemsByNextToken
     * @return ListOrderItemsByNextTokenResponse
     *
     * @throws Exception
     */
    public function listOrderItemsByNextToken($request)
    {
        return ListOrderItemsByNextTokenResponse::fromXML($this->_invoke('ListOrderItemsByNextToken'));
    }

    /**
     * List Orders
     * ListOrders can be used to find orders that meet the specified criteria.
     *
     * @param mixed $request array of parameters for ListOrders request or ListOrders object itself
     * @see ListOrders
     * @return ListOrdersResponse
     *
     * @throws Exception
     */
    public function listOrders($request)
    {
        return ListOrdersResponse::fromXML($this->_invoke('ListOrders'));
    }

    /**
     * List Orders By Next Token
     * If ListOrders returns a nextToken, thus indicating that there are more orders
     *         than returned that matched the given filter criteria, ListOrdersByNextToken
     *         can be used to retrieve those other orders using that nextToken.
     *
     * @param mixed $request array of parameters for ListOrdersByNextToken request or ListOrdersByNextToken object itself
     * @see ListOrdersByNextToken
     * @return ListOrdersByNextTokenResponse
     *
     * @throws Exception
     */
    public function listOrdersByNextToken($request)
    {
        return ListOrdersByNextTokenResponse::fromXML($this->_invoke('ListOrdersByNextToken'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents(dirname(__FILE__) . '/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }

}
