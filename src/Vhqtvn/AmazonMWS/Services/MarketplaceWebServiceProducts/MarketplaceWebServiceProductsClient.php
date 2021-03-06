<?php

namespace Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts;

use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsInterface;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetCompetitivePricingForASINRequest;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetCompetitivePricingForASINResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetCompetitivePricingForSKURequest;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetCompetitivePricingForSKUResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestOfferListingsForASINRequest;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestOfferListingsForASINResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestOfferListingsForSKURequest;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestOfferListingsForSKUResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersForASINRequest;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersForASINResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersForSKURequest;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersForSKUResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMatchingProductRequest;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMatchingProductResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMatchingProductForIdRequest;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMatchingProductForIdResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyFeesEstimateRequest;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyFeesEstimateResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyPriceForASINRequest;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyPriceForASINResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyPriceForSKURequest;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyPriceForSKUResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetProductCategoriesForASINRequest;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetProductCategoriesForASINResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetProductCategoriesForSKURequest;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetProductCategoriesForSKUResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetServiceStatusRequest;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetServiceStatusResponse;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelListMatchingProductsRequest;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelListMatchingProductsResponse;
use InvalidArgumentException;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsException;
use Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelResponseHeaderMetadata;
/**
 * \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsClient is an implementation of MarketplaceWebServiceProducts
 *
 */
class MarketplaceWebServiceProductsClient implements MarketplaceWebServiceProductsInterface
{
    const SERVICE_VERSION = '2011-10-01';
    const MWS_CLIENT_VERSION = '2017-03-22';
    /** @var string */
    private $_awsAccessKeyId = null;
    /** @var string */
    private $_awsSecretAccessKey = null;
    /** @var array */
    private $_config = array('ServiceURL' => null, 'UserAgent' => 'MarketplaceWebServiceProducts PHP5 Library', 'SignatureVersion' => 2, 'SignatureMethod' => 'HmacSHA256', 'ProxyHost' => null, 'ProxyPort' => -1, 'ProxyUsername' => null, 'ProxyPassword' => null, 'MaxErrorRetry' => 3, 'Headers' => array());
    /**
     * Get Competitive Pricing For ASIN
     * Gets competitive pricing and related information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetCompetitivePricingForASIN request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetCompetitivePricingForASIN object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetCompetitivePricingForASINRequest
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetCompetitivePricingForASINResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsException
     */
    public function getCompetitivePricingForASIN($request)
    {
        if (!$request instanceof MarketplaceWebServiceProductsModelGetCompetitivePricingForASINRequest) {
            $request = new MarketplaceWebServiceProductsModelGetCompetitivePricingForASINRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetCompetitivePricingForASIN';
        $httpResponse = $this->_invoke($parameters);
        $response = MarketplaceWebServiceProductsModelGetCompetitivePricingForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }
    /**
     * Convert GetCompetitivePricingForASINRequest to name value pairs
     */
    private function _convertGetCompetitivePricingForASIN($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetCompetitivePricingForASIN';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] = $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] = $request->getMarketplaceId();
        }
        if ($request->isSetASINList()) {
            $ASINListGetCompetitivePricingForASINRequest = $request->getASINList();
            foreach ($ASINListGetCompetitivePricingForASINRequest->getASIN() as $ASINASINListIndex => $ASINASINList) {
                $parameters['ASINList' . '.' . 'ASIN' . '.' . ($ASINASINListIndex + 1)] = $ASINASINList;
            }
        }
        return $parameters;
    }
    /**
     * Get Competitive Pricing For SKU
     * Gets competitive pricing and related information for a product identified by
     * the SellerId and SKU.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetCompetitivePricingForSKU request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetCompetitivePricingForSKU object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetCompetitivePricingForSKURequest
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetCompetitivePricingForSKUResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsException
     */
    public function getCompetitivePricingForSKU($request)
    {
        if (!$request instanceof MarketplaceWebServiceProductsModelGetCompetitivePricingForSKURequest) {
            $request = new MarketplaceWebServiceProductsModelGetCompetitivePricingForSKURequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetCompetitivePricingForSKU';
        $httpResponse = $this->_invoke($parameters);
        $response = MarketplaceWebServiceProductsModelGetCompetitivePricingForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }
    /**
     * Convert GetCompetitivePricingForSKURequest to name value pairs
     */
    private function _convertGetCompetitivePricingForSKU($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetCompetitivePricingForSKU';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] = $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] = $request->getMarketplaceId();
        }
        if ($request->isSetSellerSKUList()) {
            $SellerSKUListGetCompetitivePricingForSKURequest = $request->getSellerSKUList();
            foreach ($SellerSKUListGetCompetitivePricingForSKURequest->getSellerSKU() as $SellerSKUSellerSKUListIndex => $SellerSKUSellerSKUList) {
                $parameters['SellerSKUList' . '.' . 'SellerSKU' . '.' . ($SellerSKUSellerSKUListIndex + 1)] = $SellerSKUSellerSKUList;
            }
        }
        return $parameters;
    }
    /**
     * Get Lowest Offer Listings For ASIN
     * Gets some of the lowest prices based on the product identified by the given
     * MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestOfferListingsForASIN request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestOfferListingsForASIN object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestOfferListingsForASINRequest
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestOfferListingsForASINResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsException
     */
    public function getLowestOfferListingsForASIN($request)
    {
        if (!$request instanceof MarketplaceWebServiceProductsModelGetLowestOfferListingsForASINRequest) {
            $request = new MarketplaceWebServiceProductsModelGetLowestOfferListingsForASINRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetLowestOfferListingsForASIN';
        $httpResponse = $this->_invoke($parameters);
        $response = MarketplaceWebServiceProductsModelGetLowestOfferListingsForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }
    /**
     * Convert GetLowestOfferListingsForASINRequest to name value pairs
     */
    private function _convertGetLowestOfferListingsForASIN($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetLowestOfferListingsForASIN';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] = $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] = $request->getMarketplaceId();
        }
        if ($request->isSetASINList()) {
            $ASINListGetLowestOfferListingsForASINRequest = $request->getASINList();
            foreach ($ASINListGetLowestOfferListingsForASINRequest->getASIN() as $ASINASINListIndex => $ASINASINList) {
                $parameters['ASINList' . '.' . 'ASIN' . '.' . ($ASINASINListIndex + 1)] = $ASINASINList;
            }
        }
        if ($request->isSetItemCondition()) {
            $parameters['ItemCondition'] = $request->getItemCondition();
        }
        if ($request->isSetExcludeMe()) {
            $parameters['ExcludeMe'] = $request->getExcludeMe() ? "true" : "false";
        }
        return $parameters;
    }
    /**
     * Get Lowest Offer Listings For SKU
     * Gets some of the lowest prices based on the product identified by the given
     * SellerId and SKU.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestOfferListingsForSKU request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestOfferListingsForSKU object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestOfferListingsForSKURequest
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestOfferListingsForSKUResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsException
     */
    public function getLowestOfferListingsForSKU($request)
    {
        if (!$request instanceof MarketplaceWebServiceProductsModelGetLowestOfferListingsForSKURequest) {
            $request = new MarketplaceWebServiceProductsModelGetLowestOfferListingsForSKURequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetLowestOfferListingsForSKU';
        $httpResponse = $this->_invoke($parameters);
        $response = MarketplaceWebServiceProductsModelGetLowestOfferListingsForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }
    /**
     * Convert GetLowestOfferListingsForSKURequest to name value pairs
     */
    private function _convertGetLowestOfferListingsForSKU($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetLowestOfferListingsForSKU';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] = $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] = $request->getMarketplaceId();
        }
        if ($request->isSetSellerSKUList()) {
            $SellerSKUListGetLowestOfferListingsForSKURequest = $request->getSellerSKUList();
            foreach ($SellerSKUListGetLowestOfferListingsForSKURequest->getSellerSKU() as $SellerSKUSellerSKUListIndex => $SellerSKUSellerSKUList) {
                $parameters['SellerSKUList' . '.' . 'SellerSKU' . '.' . ($SellerSKUSellerSKUListIndex + 1)] = $SellerSKUSellerSKUList;
            }
        }
        if ($request->isSetItemCondition()) {
            $parameters['ItemCondition'] = $request->getItemCondition();
        }
        if ($request->isSetExcludeMe()) {
            $parameters['ExcludeMe'] = $request->getExcludeMe() ? "true" : "false";
        }
        return $parameters;
    }
    /**
     * Get Lowest Priced Offers For ASIN
     * Retrieves the lowest priced offers based on the product identified by the given
     *     ASIN.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersForASIN request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersForASIN object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersForASINRequest
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersForASINResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsException
     */
    public function getLowestPricedOffersForASIN($request)
    {
        if (!$request instanceof MarketplaceWebServiceProductsModelGetLowestPricedOffersForASINRequest) {
            $request = new MarketplaceWebServiceProductsModelGetLowestPricedOffersForASINRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetLowestPricedOffersForASIN';
        $httpResponse = $this->_invoke($parameters);
        $response = MarketplaceWebServiceProductsModelGetLowestPricedOffersForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }
    /**
     * Convert GetLowestPricedOffersForASINRequest to name value pairs
     */
    private function _convertGetLowestPricedOffersForASIN($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetLowestPricedOffersForASIN';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] = $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] = $request->getMarketplaceId();
        }
        if ($request->isSetASIN()) {
            $parameters['ASIN'] = $request->getASIN();
        }
        if ($request->isSetItemCondition()) {
            $parameters['ItemCondition'] = $request->getItemCondition();
        }
        return $parameters;
    }
    /**
     * Get Lowest Priced Offers For SKU
     * Retrieves the lowest priced offers based on the product identified by the given
     *     SellerId and SKU.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersForSKU request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersForSKU object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersForSKURequest
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetLowestPricedOffersForSKUResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsException
     */
    public function getLowestPricedOffersForSKU($request)
    {
        if (!$request instanceof MarketplaceWebServiceProductsModelGetLowestPricedOffersForSKURequest) {
            $request = new MarketplaceWebServiceProductsModelGetLowestPricedOffersForSKURequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetLowestPricedOffersForSKU';
        $httpResponse = $this->_invoke($parameters);
        $response = MarketplaceWebServiceProductsModelGetLowestPricedOffersForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }
    /**
     * Convert GetLowestPricedOffersForSKURequest to name value pairs
     */
    private function _convertGetLowestPricedOffersForSKU($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetLowestPricedOffersForSKU';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] = $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] = $request->getMarketplaceId();
        }
        if ($request->isSetSellerSKU()) {
            $parameters['SellerSKU'] = $request->getSellerSKU();
        }
        if ($request->isSetItemCondition()) {
            $parameters['ItemCondition'] = $request->getItemCondition();
        }
        return $parameters;
    }
    /**
     * Get Matching Product
     * GetMatchingProduct will return the details (attributes) for the
     * given ASIN.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMatchingProduct request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMatchingProduct object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMatchingProductRequest
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMatchingProductResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsException
     */
    public function getMatchingProduct($request)
    {
        if (!$request instanceof MarketplaceWebServiceProductsModelGetMatchingProductRequest) {
            $request = new MarketplaceWebServiceProductsModelGetMatchingProductRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetMatchingProduct';
        $httpResponse = $this->_invoke($parameters);
        $response = MarketplaceWebServiceProductsModelGetMatchingProductResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }
    /**
     * Convert GetMatchingProductRequest to name value pairs
     */
    private function _convertGetMatchingProduct($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetMatchingProduct';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] = $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] = $request->getMarketplaceId();
        }
        if ($request->isSetASINList()) {
            $ASINListGetMatchingProductRequest = $request->getASINList();
            foreach ($ASINListGetMatchingProductRequest->getASIN() as $ASINASINListIndex => $ASINASINList) {
                $parameters['ASINList' . '.' . 'ASIN' . '.' . ($ASINASINListIndex + 1)] = $ASINASINList;
            }
        }
        return $parameters;
    }
    /**
     * Get Matching Product For Id
     * GetMatchingProduct will return the details (attributes) for the
     * given Identifier list. Identifer type can be one of [SKU|ASIN|UPC|EAN|ISBN|GTIN|JAN]
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMatchingProductForId request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMatchingProductForId object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMatchingProductForIdRequest
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMatchingProductForIdResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsException
     */
    public function getMatchingProductForId($request)
    {
        if (!$request instanceof MarketplaceWebServiceProductsModelGetMatchingProductForIdRequest) {
            $request = new MarketplaceWebServiceProductsModelGetMatchingProductForIdRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetMatchingProductForId';
        $httpResponse = $this->_invoke($parameters);
        $response = MarketplaceWebServiceProductsModelGetMatchingProductForIdResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }
    /**
     * Convert GetMatchingProductForIdRequest to name value pairs
     */
    private function _convertGetMatchingProductForId($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetMatchingProductForId';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] = $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] = $request->getMarketplaceId();
        }
        if ($request->isSetIdType()) {
            $parameters['IdType'] = $request->getIdType();
        }
        if ($request->isSetIdList()) {
            $IdListGetMatchingProductForIdRequest = $request->getIdList();
            foreach ($IdListGetMatchingProductForIdRequest->getId() as $IdIdListIndex => $IdIdList) {
                $parameters['IdList' . '.' . 'Id' . '.' . ($IdIdListIndex + 1)] = $IdIdList;
            }
        }
        return $parameters;
    }
    /**
     * Get My Fees Estimate
     * Retrieves the fees estimate for the
     *         products identified by the given
     *         ASIN/SKU list.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyFeesEstimate request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyFeesEstimate object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyFeesEstimateRequest
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyFeesEstimateResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsException
     */
    public function getMyFeesEstimate($request)
    {
        if (!$request instanceof MarketplaceWebServiceProductsModelGetMyFeesEstimateRequest) {
            $request = new MarketplaceWebServiceProductsModelGetMyFeesEstimateRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetMyFeesEstimate';
        $httpResponse = $this->_invoke($parameters);
        $response = MarketplaceWebServiceProductsModelGetMyFeesEstimateResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }
    /**
     * Convert GetMyFeesEstimateRequest to name value pairs
     */
    private function _convertGetMyFeesEstimate($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetMyFeesEstimate';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] = $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }
        if ($request->isSetFeesEstimateRequestList()) {
            $FeesEstimateRequestListGetMyFeesEstimateRequest = $request->getFeesEstimateRequestList();
            foreach ($FeesEstimateRequestListGetMyFeesEstimateRequest->getFeesEstimateRequest() as $FeesEstimateRequestFeesEstimateRequestListIndex => $FeesEstimateRequestFeesEstimateRequestList) {
                $parameters['FeesEstimateRequestList' . '.' . 'FeesEstimateRequest' . '.' . ($FeesEstimateRequestFeesEstimateRequestListIndex + 1)] = $FeesEstimateRequestFeesEstimateRequestList;
            }
        }
        return $parameters;
    }
    /**
     * Get My Price For ASIN
     * <!-- Wrong doc in current code -->
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyPriceForASIN request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyPriceForASIN object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyPriceForASINRequest
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyPriceForASINResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsException
     */
    public function getMyPriceForASIN($request)
    {
        if (!$request instanceof MarketplaceWebServiceProductsModelGetMyPriceForASINRequest) {
            $request = new MarketplaceWebServiceProductsModelGetMyPriceForASINRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetMyPriceForASIN';
        $httpResponse = $this->_invoke($parameters);
        $response = MarketplaceWebServiceProductsModelGetMyPriceForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }
    /**
     * Convert GetMyPriceForASINRequest to name value pairs
     */
    private function _convertGetMyPriceForASIN($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetMyPriceForASIN';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] = $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] = $request->getMarketplaceId();
        }
        if ($request->isSetASINList()) {
            $ASINListGetMyPriceForASINRequest = $request->getASINList();
            foreach ($ASINListGetMyPriceForASINRequest->getASIN() as $ASINASINListIndex => $ASINASINList) {
                $parameters['ASINList' . '.' . 'ASIN' . '.' . ($ASINASINListIndex + 1)] = $ASINASINList;
            }
        }
        return $parameters;
    }
    /**
     * Get My Price For SKU
     * <!-- Wrong doc in current code -->
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyPriceForSKU request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyPriceForSKU object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyPriceForSKURequest
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetMyPriceForSKUResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsException
     */
    public function getMyPriceForSKU($request)
    {
        if (!$request instanceof MarketplaceWebServiceProductsModelGetMyPriceForSKURequest) {
            $request = new MarketplaceWebServiceProductsModelGetMyPriceForSKURequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetMyPriceForSKU';
        $httpResponse = $this->_invoke($parameters);
        $response = MarketplaceWebServiceProductsModelGetMyPriceForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }
    /**
     * Convert GetMyPriceForSKURequest to name value pairs
     */
    private function _convertGetMyPriceForSKU($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetMyPriceForSKU';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] = $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] = $request->getMarketplaceId();
        }
        if ($request->isSetSellerSKUList()) {
            $SellerSKUListGetMyPriceForSKURequest = $request->getSellerSKUList();
            foreach ($SellerSKUListGetMyPriceForSKURequest->getSellerSKU() as $SellerSKUSellerSKUListIndex => $SellerSKUSellerSKUList) {
                $parameters['SellerSKUList' . '.' . 'SellerSKU' . '.' . ($SellerSKUSellerSKUListIndex + 1)] = $SellerSKUSellerSKUList;
            }
        }
        return $parameters;
    }
    /**
     * Get Product Categories For ASIN
     * Gets categories information for a product identified by
     * the MarketplaceId and ASIN.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetProductCategoriesForASIN request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetProductCategoriesForASIN object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetProductCategoriesForASINRequest
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetProductCategoriesForASINResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsException
     */
    public function getProductCategoriesForASIN($request)
    {
        if (!$request instanceof MarketplaceWebServiceProductsModelGetProductCategoriesForASINRequest) {
            $request = new MarketplaceWebServiceProductsModelGetProductCategoriesForASINRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetProductCategoriesForASIN';
        $httpResponse = $this->_invoke($parameters);
        $response = MarketplaceWebServiceProductsModelGetProductCategoriesForASINResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }
    /**
     * Convert GetProductCategoriesForASINRequest to name value pairs
     */
    private function _convertGetProductCategoriesForASIN($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetProductCategoriesForASIN';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] = $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] = $request->getMarketplaceId();
        }
        if ($request->isSetASIN()) {
            $parameters['ASIN'] = $request->getASIN();
        }
        return $parameters;
    }
    /**
     * Get Product Categories For SKU
     * Gets categories information for a product identified by
     * the SellerId and SKU.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetProductCategoriesForSKU request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetProductCategoriesForSKU object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetProductCategoriesForSKURequest
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetProductCategoriesForSKUResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsException
     */
    public function getProductCategoriesForSKU($request)
    {
        if (!$request instanceof MarketplaceWebServiceProductsModelGetProductCategoriesForSKURequest) {
            $request = new MarketplaceWebServiceProductsModelGetProductCategoriesForSKURequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetProductCategoriesForSKU';
        $httpResponse = $this->_invoke($parameters);
        $response = MarketplaceWebServiceProductsModelGetProductCategoriesForSKUResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }
    /**
     * Convert GetProductCategoriesForSKURequest to name value pairs
     */
    private function _convertGetProductCategoriesForSKU($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetProductCategoriesForSKU';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] = $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] = $request->getMarketplaceId();
        }
        if ($request->isSetSellerSKU()) {
            $parameters['SellerSKU'] = $request->getSellerSKU();
        }
        return $parameters;
    }
    /**
     * Get Service Status
     * Returns the service status of a particular MWS API section. The operation
     * takes no input.
     * All API sections within the API are required to implement this operation.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetServiceStatus request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetServiceStatus object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetServiceStatusRequest
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelGetServiceStatusResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsException
     */
    public function getServiceStatus($request)
    {
        if (!$request instanceof MarketplaceWebServiceProductsModelGetServiceStatusRequest) {
            $request = new MarketplaceWebServiceProductsModelGetServiceStatusRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'GetServiceStatus';
        $httpResponse = $this->_invoke($parameters);
        $response = MarketplaceWebServiceProductsModelGetServiceStatusResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }
    /**
     * Convert GetServiceStatusRequest to name value pairs
     */
    private function _convertGetServiceStatus($request)
    {
        $parameters = array();
        $parameters['Action'] = 'GetServiceStatus';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] = $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }
        return $parameters;
    }
    /**
     * List Matching Products
     * ListMatchingProducts can be used to
     * find products that match the given criteria.
     *
     * @param mixed $request array of parameters for \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelListMatchingProducts request or \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelListMatchingProducts object itself
     * @see \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelListMatchingProductsRequest
     * @return \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\Model\MarketplaceWebServiceProductsModelListMatchingProductsResponse
     *
     * @throws \Vhqtvn\AmazonMWS\Services\MarketplaceWebServiceProducts\MarketplaceWebServiceProductsException
     */
    public function listMatchingProducts($request)
    {
        if (!$request instanceof MarketplaceWebServiceProductsModelListMatchingProductsRequest) {
            $request = new MarketplaceWebServiceProductsModelListMatchingProductsRequest($request);
        }
        $parameters = $request->toQueryParameterArray();
        $parameters['Action'] = 'ListMatchingProducts';
        $httpResponse = $this->_invoke($parameters);
        $response = MarketplaceWebServiceProductsModelListMatchingProductsResponse::fromXML($httpResponse['ResponseBody']);
        $response->setResponseHeaderMetadata($httpResponse['ResponseHeaderMetadata']);
        return $response;
    }
    /**
     * Convert ListMatchingProductsRequest to name value pairs
     */
    private function _convertListMatchingProducts($request)
    {
        $parameters = array();
        $parameters['Action'] = 'ListMatchingProducts';
        if ($request->isSetSellerId()) {
            $parameters['SellerId'] = $request->getSellerId();
        }
        if ($request->isSetMWSAuthToken()) {
            $parameters['MWSAuthToken'] = $request->getMWSAuthToken();
        }
        if ($request->isSetMarketplaceId()) {
            $parameters['MarketplaceId'] = $request->getMarketplaceId();
        }
        if ($request->isSetQuery()) {
            $parameters['Query'] = $request->getQuery();
        }
        if ($request->isSetQueryContextId()) {
            $parameters['QueryContextId'] = $request->getQueryContextId();
        }
        return $parameters;
    }
    /**
     * Construct new Client
     *
     * @param string $awsAccessKeyId AWS Access Key ID
     * @param string $awsSecretAccessKey AWS Secret Access Key
     * @param array $config configuration options.
     * Valid configuration options are:
     * <ul>
     * <li>ServiceURL</li>
     * <li>UserAgent</li>
     * <li>SignatureVersion</li>
     * <li>TimesRetryOnError</li>
     * <li>ProxyHost</li>
     * <li>ProxyPort</li>
     * <li>ProxyUsername<li>
     * <li>ProxyPassword<li>
     * <li>MaxErrorRetry</li>
     * </ul>
     */
    public function __construct($awsAccessKeyId, $awsSecretAccessKey, $applicationName, $applicationVersion, $config = null)
    {
        $this->_awsAccessKeyId = $awsAccessKeyId;
        $this->_awsSecretAccessKey = $awsSecretAccessKey;
        if (!is_null($config)) {
            $this->_config = array_merge($this->_config, $config);
        }
        $this->setUserAgentHeader($applicationName, $applicationVersion);
    }
    private function setUserAgentHeader($applicationName, $applicationVersion, $attributes = null)
    {
        if (is_null($attributes)) {
            $attributes = array();
        }
        $this->_config['UserAgent'] = $this->constructUserAgentHeader($applicationName, $applicationVersion, $attributes);
    }
    private function constructUserAgentHeader($applicationName, $applicationVersion, $attributes = null)
    {
        if (is_null($applicationName) || $applicationName === "") {
            throw new \InvalidArgumentException('$applicationName cannot be null');
        }
        if (is_null($applicationVersion) || $applicationVersion === "") {
            throw new \InvalidArgumentException('$applicationVersion cannot be null');
        }
        $userAgent = $this->quoteApplicationName($applicationName) . '/' . $this->quoteApplicationVersion($applicationVersion);
        $userAgent .= ' (';
        $userAgent .= 'Language=PHP/' . phpversion();
        $userAgent .= '; ';
        $userAgent .= 'Platform=' . php_uname('s') . '/' . php_uname('m') . '/' . php_uname('r');
        $userAgent .= '; ';
        $userAgent .= 'MWSClientVersion=' . self::MWS_CLIENT_VERSION;
        foreach ($attributes as $key => $value) {
            if (empty($value)) {
                throw new \InvalidArgumentException("Value for {$key} cannot be null or empty.");
            }
            $userAgent .= '; ' . $this->quoteAttributeName($key) . '=' . $this->quoteAttributeValue($value);
        }
        $userAgent .= ')';
        return $userAgent;
    }
    /**
     * Collapse multiple whitespace characters into a single ' ' character.
     * @param $s
     * @return string
     */
    private function collapseWhitespace($s)
    {
        return preg_replace('/ {2,}|\\s/', ' ', $s);
    }
    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '/' characters from a string.
     * @param $s
     * @return string
     */
    private function quoteApplicationName($s)
    {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\\//', '\\/', $quotedString);
        return $quotedString;
    }
    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '(' characters from a string.
     *
     * @param $s
     * @return string
     */
    private function quoteApplicationVersion($s)
    {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\\(/', '\\(', $quotedString);
        return $quotedString;
    }
    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape '\',
     * and '=' characters from a string.
     *
     * @param $s
     * @return unknown_type
     */
    private function quoteAttributeName($s)
    {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\\=/', '\\=', $quotedString);
        return $quotedString;
    }
    /**
     * Collapse multiple whitespace characters into a single ' ' and backslash escape ';', '\',
     * and ')' characters from a string.
     *
     * @param $s
     * @return unknown_type
     */
    private function quoteAttributeValue($s)
    {
        $quotedString = $this->collapseWhitespace($s);
        $quotedString = preg_replace('/\\\\/', '\\\\\\\\', $quotedString);
        $quotedString = preg_replace('/\\;/', '\\;', $quotedString);
        $quotedString = preg_replace('/\\)/', '\\)', $quotedString);
        return $quotedString;
    }
    // Private API ------------------------------------------------------------//
    /**
     * Invoke request and return response
     */
    private function _invoke(array $parameters)
    {
        try {
            if (empty($this->_config['ServiceURL'])) {
                throw new MarketplaceWebServiceProductsException(array('ErrorCode' => 'InvalidServiceURL', 'Message' => "Missing serviceUrl configuration value. You may obtain a list of valid MWS URLs by consulting the MWS Developer's Guide, or reviewing the sample code published along side this library."));
            }
            $parameters = $this->_addRequiredParameters($parameters);
            $retries = 0;
            for (;;) {
                $response = $this->_httpPost($parameters);
                $status = $response['Status'];
                if ($status == 200) {
                    return array('ResponseBody' => $response['ResponseBody'], 'ResponseHeaderMetadata' => $response['ResponseHeaderMetadata']);
                }
                if ($status == 500 && $this->_pauseOnRetry(++$retries)) {
                    continue;
                }
                throw $this->_reportAnyErrors($response['ResponseBody'], $status, $response['ResponseHeaderMetadata']);
            }
        } catch (MarketplaceWebServiceProductsException $se) {
            throw $se;
        } catch (\Exception $t) {
            throw new MarketplaceWebServiceProductsException(array('Exception' => $t, 'Message' => $t->getMessage()));
        }
    }
    /**
     * Look for additional error strings in the response and return formatted exception
     */
    private function _reportAnyErrors($responseBody, $status, $responseHeaderMetadata, \Exception $e = null)
    {
        $exProps = array();
        $exProps["StatusCode"] = $status;
        $exProps["ResponseHeaderMetadata"] = $responseHeaderMetadata;
        libxml_use_internal_errors(true);
        // Silence XML parsing errors
        $xmlBody = simplexml_load_string($responseBody);
        if ($xmlBody !== false) {
            // Check XML loaded without errors
            $exProps["XML"] = $responseBody;
            $exProps["ErrorCode"] = $xmlBody->Error->Code;
            $exProps["Message"] = $xmlBody->Error->Message;
            $exProps["ErrorType"] = !empty($xmlBody->Error->Type) ? $xmlBody->Error->Type : "Unknown";
            $exProps["RequestId"] = !empty($xmlBody->RequestID) ? $xmlBody->RequestID : $xmlBody->RequestId;
            // 'd' in RequestId is sometimes capitalized
        } else {
            // We got bad XML in response, just throw a generic exception
            $exProps["Message"] = "Internal Error";
        }
        return new MarketplaceWebServiceProductsException($exProps);
    }
    /**
     * Perform HTTP post with exponential retries on error 500 and 503
     *
     */
    private function _httpPost(array $parameters)
    {
        $config = $this->_config;
        $query = $this->_getParametersAsString($parameters);
        $url = parse_url($config['ServiceURL']);
        $uri = array_key_exists('path', $url) ? $url['path'] : null;
        if (!isset($uri)) {
            $uri = "/";
        }
        switch ($url['scheme']) {
            case 'https':
                $scheme = 'https://';
                $port = isset($url['port']) ? $url['port'] : 443;
                break;
            default:
                $scheme = 'http://';
                $port = isset($url['port']) ? $url['port'] : 80;
        }
        $allHeaders = $config['Headers'];
        $allHeaders['Content-Type'] = "application/x-www-form-urlencoded; charset=utf-8";
        // We need to make sure to set utf-8 encoding here
        $allHeaders['Expect'] = null;
        // Don't expect 100 Continue
        $allHeadersStr = array();
        foreach ($allHeaders as $name => $val) {
            $str = $name . ": ";
            if (isset($val)) {
                $str = $str . $val;
            }
            $allHeadersStr[] = $str;
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $scheme . $url['host'] . $uri);
        curl_setopt($ch, CURLOPT_PORT, $port);
        $this->setSSLCurlOptions($ch);
        curl_setopt($ch, CURLOPT_USERAGENT, $this->_config['UserAgent']);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $allHeadersStr);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if ($config['ProxyHost'] != null && $config['ProxyPort'] != -1) {
            curl_setopt($ch, CURLOPT_PROXY, $config['ProxyHost'] . ':' . $config['ProxyPort']);
        }
        if ($config['ProxyUsername'] != null && $config['ProxyPassword'] != null) {
            curl_setopt($ch, CURLOPT_PROXYUSERPWD, $config['ProxyUsername'] . ':' . $config['ProxyPassword']);
        }
        $response = "";
        $response = curl_exec($ch);
        if ($response === false) {
            $exProps["Message"] = curl_error($ch);
            $exProps["ErrorType"] = "HTTP";
            curl_close($ch);
            throw new MarketplaceWebServiceProductsException($exProps);
        }
        curl_close($ch);
        return $this->_extractHeadersAndBody($response);
    }
    /**
     * This method will attempt to extract the headers and body of our response.
     * We need to split the raw response string by 2 'CRLF's.  2 'CRLF's should indicate the separation of the response header
     * from the response body.  However in our case we have some circumstances (certain client proxies) that result in 
     * multiple responses concatenated.  We could encounter a response like
     *
     * HTTP/1.1 100 Continue
     *
     * HTTP/1.1 200 OK
     * Date: Tue, 01 Apr 2014 13:02:51 GMT
     * Content-Type: text/html; charset=iso-8859-1
     * Content-Length: 12605
     *
     * ... body ..
     *
     * This method will throw away extra response status lines and attempt to find the first full response headers and body
     *
     * return [status, body, ResponseHeaderMetadata]
     */
    private function _extractHeadersAndBody($response)
    {
        //First split by 2 'CRLF'
        $responseComponents = preg_split("/(?:\r?\n){2}/", $response, 2);
        $body = null;
        for ($count = 0; $count < count($responseComponents) && $body == null; $count++) {
            $headers = $responseComponents[$count];
            $responseStatus = $this->_extractHttpStatusCode($headers);
            if ($responseStatus != null && $this->_httpHeadersHaveContent($headers)) {
                $responseHeaderMetadata = $this->_extractResponseHeaderMetadata($headers);
                //The body will be the next item in the responseComponents array
                $body = $responseComponents[++$count];
            }
        }
        //If the body is null here then we were unable to parse the response and will throw an exception
        if ($body == null) {
            $exProps["Message"] = "Failed to parse valid HTTP response (" . $response . ")";
            $exProps["ErrorType"] = "HTTP";
            throw new MarketplaceWebServiceProductsException($exProps);
        }
        return array('Status' => $responseStatus, 'ResponseBody' => $body, 'ResponseHeaderMetadata' => $responseHeaderMetadata);
    }
    /**
     * parse the status line of a header string for the proper format and
     * return the status code
     *
     * Example: HTTP/1.1 200 OK
     * ...
     * returns String statusCode or null if the status line can't be parsed
     */
    private function _extractHttpStatusCode($headers)
    {
        $statusCode = null;
        if (1 === preg_match("/(\\S+) +(\\d+) +([^\n\r]+)(?:\r?\n|\r)/", $headers, $matches)) {
            //The matches array [entireMatchString, protocol, statusCode, the rest]
            $statusCode = $matches[2];
        }
        return $statusCode;
    }
    /**
     * Tries to determine some valid headers indicating this response
     * has content.  In this case
     * return true if there is a valid "Content-Length" or "Transfer-Encoding" header
     */
    private function _httpHeadersHaveContent($headers)
    {
        return 1 === preg_match("/[cC]ontent-[lL]ength: +(?:\\d+)(?:\\r?\\n|\\r|\$)/", $headers) || 1 === preg_match("/Transfer-Encoding: +(?!identity[\r\n;= ])(?:[^\r\n]+)(?:\r?\n|\r|\$)/i", $headers);
    }
    /**
     *  extract a ResponseHeaderMetadata object from the raw headers
     */
    private function _extractResponseHeaderMetadata($rawHeaders)
    {
        $inputHeaders = preg_split("/\r\n|\n|\r/", $rawHeaders);
        $headers = array();
        $headers['x-mws-request-id'] = null;
        $headers['x-mws-response-context'] = null;
        $headers['x-mws-timestamp'] = null;
        $headers['x-mws-quota-max'] = null;
        $headers['x-mws-quota-remaining'] = null;
        $headers['x-mws-quota-resetsOn'] = null;
        foreach ($inputHeaders as $currentHeader) {
            $keyValue = explode(': ', $currentHeader);
            if (isset($keyValue[1])) {
                list($key, $value) = $keyValue;
                if (isset($headers[$key]) && $headers[$key] !== null) {
                    $headers[$key] = $headers[$key] . "," . $value;
                } else {
                    $headers[$key] = $value;
                }
            }
        }
        return new MarketplaceWebServiceProductsModelResponseHeaderMetadata($headers['x-mws-request-id'], $headers['x-mws-response-context'], $headers['x-mws-timestamp'], $headers['x-mws-quota-max'], $headers['x-mws-quota-remaining'], $headers['x-mws-quota-resetsOn']);
    }
    /**
     * Set curl options relating to SSL. Protected to allow overriding.
     * @param resource $ch handle
     */
    protected function setSSLCurlOptions($ch)
    {
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
    }
    /**
     * Exponential sleep on failed request
     *
     * @param int retries current retry
     */
    private function _pauseOnRetry($retries)
    {
        if ($retries <= $this->_config['MaxErrorRetry']) {
            $delay = (int) (pow(4, $retries) * 100000);
            usleep($delay);
            return true;
        }
        return false;
    }
    /**
     * Add authentication related and version parameters
     */
    private function _addRequiredParameters(array $parameters)
    {
        $parameters['AWSAccessKeyId'] = $this->_awsAccessKeyId;
        $parameters['Timestamp'] = $this->_getFormattedTimestamp();
        $parameters['Version'] = self::SERVICE_VERSION;
        $parameters['SignatureVersion'] = $this->_config['SignatureVersion'];
        if ($parameters['SignatureVersion'] > 1) {
            $parameters['SignatureMethod'] = $this->_config['SignatureMethod'];
        }
        $parameters['Signature'] = $this->_signParameters($parameters, $this->_awsSecretAccessKey);
        return $parameters;
    }
    /**
     * Convert paremeters to Url encoded query string
     */
    private function _getParametersAsString(array $parameters)
    {
        $queryParameters = array();
        foreach ($parameters as $key => $value) {
            $queryParameters[] = $key . '=' . $this->_urlencode($value);
        }
        return implode('&', $queryParameters);
    }
    /**
     * Computes RFC 2104-compliant HMAC signature for request parameters
     * Implements AWS Signature, as per following spec:
     *
     * If Signature Version is 0, it signs concatenated Action and Timestamp
     *
     * If Signature Version is 1, it performs the following:
     *
     * Sorts all  parameters (including SignatureVersion and excluding Signature,
     * the value of which is being created), ignoring case.
     *
     * Iterate over the sorted list and append the parameter name (in original case)
     * and then its value. It will not URL-encode the parameter values before
     * constructing this string. There are no separators.
     *
     * If Signature Version is 2, string to sign is based on following:
     *
     *    1. The HTTP Request Method followed by an ASCII newline (%0A)
     *    2. The HTTP Host header in the form of lowercase host, followed by an ASCII newline.
     *    3. The URL encoded HTTP absolute path component of the URI
     *       (up to but not including the query string parameters);
     *       if this is empty use a forward '/'. This parameter is followed by an ASCII newline.
     *    4. The concatenation of all query string components (names and values)
     *       as UTF-8 characters which are URL encoded as per RFC 3986
     *       (hex characters MUST be uppercase), sorted using lexicographic byte ordering.
     *       Parameter names are separated from their values by the '=' character
     *       (ASCII character 61), even if the value is empty.
     *       Pairs of parameter and values are separated by the '&' character (ASCII code 38).
     *
     */
    private function _signParameters(array $parameters, $key)
    {
        $signatureVersion = $parameters['SignatureVersion'];
        $algorithm = "HmacSHA1";
        $stringToSign = null;
        if (2 == $signatureVersion) {
            $algorithm = $this->_config['SignatureMethod'];
            $parameters['SignatureMethod'] = $algorithm;
            $stringToSign = $this->_calculateStringToSignV2($parameters);
        } else {
            throw new \Exception("Invalid Signature Version specified");
        }
        return $this->_sign($stringToSign, $key, $algorithm);
    }
    /**
     * Calculate String to Sign for SignatureVersion 2
     * @param array $parameters request parameters
     * @return \string to Sign
     */
    private function _calculateStringToSignV2(array $parameters)
    {
        $data = 'POST';
        $data .= "\n";
        $endpoint = parse_url($this->_config['ServiceURL']);
        $data .= $endpoint['host'];
        $data .= "\n";
        $uri = array_key_exists('path', $endpoint) ? $endpoint['path'] : null;
        if (!isset($uri)) {
            $uri = "/";
        }
        $uriencoded = implode("/", array_map(array($this, "_urlencode"), explode("/", $uri)));
        $data .= $uriencoded;
        $data .= "\n";
        uksort($parameters, 'strcmp');
        $data .= $this->_getParametersAsString($parameters);
        return $data;
    }
    private function _urlencode($value)
    {
        return str_replace('%7E', '~', rawurlencode($value));
    }
    /**
     * Computes RFC 2104-compliant HMAC signature.
     */
    private function _sign($data, $key, $algorithm)
    {
        if ($algorithm === 'HmacSHA1') {
            $hash = 'sha1';
        } else {
            if ($algorithm === 'HmacSHA256') {
                $hash = 'sha256';
            } else {
                throw new \Exception("Non-supported signing method specified");
            }
        }
        return base64_encode(hash_hmac($hash, $data, $key, true));
    }
    /**
     * Formats date as ISO 8601 timestamp
     */
    private function _getFormattedTimestamp()
    {
        return gmdate("Y-m-d\\TH:i:s.\\0\\0\\0\\Z", time());
    }
    /**
     * Formats date as ISO 8601 timestamp
     */
    private function getFormattedTimestamp($dateTime)
    {
        return $dateTime->format(DATE_ISO8601);
    }
}