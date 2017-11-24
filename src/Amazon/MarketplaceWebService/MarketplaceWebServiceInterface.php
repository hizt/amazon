<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     MarketplaceWebService
 *  @copyright   Copyright 2009 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-01-01
 */
/******************************************************************************* 

 *  Marketplace Web Service PHP5 Library
 *  Generated: Thu May 07 13:07:36 PDT 2009
 * 
 */
/**
 * The Amazon Marketplace Web Service contain APIs for inventory and order management.
 * 
 */
namespace Amazon\MarketplaceWebService;

use Amazon\MarketplaceWebService\Model\CancelFeedSubmissionsResponse;
use Amazon\MarketplaceWebService\Model\CancelReportRequestsResponse;
use Amazon\MarketplaceWebService\Model\GetFeedSubmissionCountResponse;
use Amazon\MarketplaceWebService\Model\GetFeedSubmissionListByNextTokenResponse;
use Amazon\MarketplaceWebService\Model\GetFeedSubmissionListResponse;
use Amazon\MarketplaceWebService\Model\GetFeedSubmissionResultResponse;
use Amazon\MarketplaceWebService\Model\GetReportCountResponse;
use Amazon\MarketplaceWebService\Model\GetReportListByNextTokenResponse;
use Amazon\MarketplaceWebService\Model\GetReportListResponse;
use Amazon\MarketplaceWebService\Model\GetReportRequestCountResponse;
use Amazon\MarketplaceWebService\Model\GetReportRequestListByNextTokenResponse;
use Amazon\MarketplaceWebService\Model\GetReportRequestListResponse;
use Amazon\MarketplaceWebService\Model\GetReportScheduleCountResponse;
use Amazon\MarketplaceWebService\Model\GetReportScheduleListByNextTokenResponse;
use Amazon\MarketplaceWebService\Model\GetReportScheduleListResponse;
use Amazon\MarketplaceWebService\Model\ManageReportScheduleResponse;
use Amazon\MarketplaceWebService\Model\RequestReportResponse;
use Amazon\MarketplaceWebService\Model\SubmitFeedResponse;
use Amazon\MarketplaceWebService\Model\UpdateReportAcknowledgementsResponse;

interface  MarketplaceWebServiceInterface
{
    

            
    /**
     * Get Report 
     * The GetReport operation returns the contents of a report. Reports can potentially be
     * very large (>100MB) which is why we only return one report at a time, and in a
     * streaming fashion.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReport.html      
     * @param mixed $request array of parameters for GetReportRequest request
     * or GetReportRequest object itself
     * @see GetReportRequest
     * @return GetReportResponse GetReportResponse
     *
     * @throws Exception
     */
    public function getReport($request);


            
    /**
     * Get Report Schedule Count 
     * returns the number of report schedules
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleCount.html      
     * @param mixed $request array of parameters for GetReportScheduleCountRequest request
     * or GetReportScheduleCountRequest object itself
     * @see GetReportScheduleCountRequest
     * @return GetReportScheduleCountResponse GetReportScheduleCountResponse
     *
     * @throws Exception
     */
    public function getReportScheduleCount($request);


            
    /**
     * Get Report Request List By Next Token 
     * retrieve the next batch of list items and if there are more items to retrieve
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestListByNextToken.html      
     * @param mixed $request array of parameters for GetReportRequestListByNextTokenRequest request
     * or GetReportRequestListByNextTokenRequest object itself
     * @see GetReportRequestListByNextTokenRequest
     * @return GetReportRequestListByNextTokenResponse GetReportRequestListByNextTokenResponse
     *
     * @throws Exception
     */
    public function getReportRequestListByNextToken($request);


            
    /**
     * Update Report Acknowledgements 
     * The UpdateReportAcknowledgements operation updates the acknowledged status of one or more reports.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}UpdateReportAcknowledgements.html      
     * @param mixed $request array of parameters for UpdateReportAcknowledgementsRequest request
     * or UpdateReportAcknowledgementsRequest object itself
     * @see UpdateReportAcknowledgementsRequest
     * @return UpdateReportAcknowledgementsResponse UpdateReportAcknowledgementsResponse
     *
     * @throws Exception
     */
    public function updateReportAcknowledgements($request);


            
    /**
     * Submit Feed 
     * Uploads a file for processing together with the necessary
     * metadata to process the file, such as which type of feed it is.
     * PurgeAndReplace if true means that your existing e.g. inventory is
     * wiped out and replace with the contents of this feed - use with
     * caution (the default is false).
     *   
     * @see http://docs.amazonwebservices.com/${docPath}SubmitFeed.html      
     * @param mixed $request array of parameters for SubmitFeedRequest request
     * or SubmitFeedRequest object itself
     * @see SubmitFeedRequest
     * @return SubmitFeedResponse SubmitFeedResponse
     *
     * @throws Exception
     */
    public function submitFeed($request);


            
    /**
     * Get Report Count 
     * returns a count of reports matching your criteria;
     * by default, the number of reports generated in the last 90 days,
     * regardless of acknowledgement status
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportCount.html      
     * @param mixed $request array of parameters for GetReportCountRequest request
     * or GetReportCountRequest object itself
     * @see GetReportCountRequest
     * @return GetReportCountResponse GetReportCountResponse
     *
     * @throws Exception
     */
    public function getReportCount($request);


            
    /**
     * Get Feed Submission List By Next Token 
     * retrieve the next batch of list items and if there are more items to retrieve
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionListByNextToken.html      
     * @param mixed $request array of parameters for GetFeedSubmissionListByNextTokenRequest request
     * or GetFeedSubmissionListByNextTokenRequest object itself
     * @see GetFeedSubmissionListByNextTokenRequest
     * @return GetFeedSubmissionListByNextTokenResponse GetFeedSubmissionListByNextTokenResponse
     *
     * @throws Exception
     */
    public function getFeedSubmissionListByNextToken($request);


            
    /**
     * Cancel Feed Submissions 
     * cancels feed submissions - by default all of the submissions of the
     * last 30 days that have not started processing
     *   
     * @see http://docs.amazonwebservices.com/${docPath}CancelFeedSubmissions.html      
     * @param mixed $request array of parameters for CancelFeedSubmissionsRequest request
     * or CancelFeedSubmissionsRequest object itself
     * @see CancelFeedSubmissionsRequest
     * @return CancelFeedSubmissionsResponse CancelFeedSubmissionsResponse
     *
     * @throws Exception
     */
    public function cancelFeedSubmissions($request);


            
    /**
     * Request Report 
     * requests the generation of a report
     *   
     * @see http://docs.amazonwebservices.com/${docPath}RequestReport.html      
     * @param mixed $request array of parameters for RequestReportRequest request
     * or RequestReportRequest object itself
     * @see RequestReportRequest
     * @return RequestReportResponse RequestReportResponse
     *
     * @throws Exception
     */
    public function requestReport($request);


            
    /**
     * Get Feed Submission Count 
     * returns the number of feeds matching all of the specified criteria
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionCount.html      
     * @param mixed $request array of parameters for GetFeedSubmissionCountRequest request
     * or GetFeedSubmissionCountRequest object itself
     * @see GetFeedSubmissionCountRequest
     * @return GetFeedSubmissionCountResponse GetFeedSubmissionCountResponse
     *
     * @throws Exception
     */
    public function getFeedSubmissionCount($request);


            
    /**
     * Cancel Report Requests 
     * cancels report requests that have not yet started processing,
     * by default all those within the last 90 days
     *   
     * @see http://docs.amazonwebservices.com/${docPath}CancelReportRequests.html      
     * @param mixed $request array of parameters for CancelReportRequestsRequest request
     * or CancelReportRequestsRequest object itself
     * @see CancelReportRequestsRequest
     * @return CancelReportRequestsResponse CancelReportRequestsResponse
     *
     * @throws Exception
     */
    public function cancelReportRequests($request);


            
    /**
     * Get Report List 
     * returns a list of reports; by default the most recent ten reports,
     * regardless of their acknowledgement status
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportList.html      
     * @param mixed $request array of parameters for GetReportListRequest request
     * or GetReportListRequest object itself
     * @see GetReportListRequest
     * @return GetReportListResponse GetReportListResponse
     *
     * @throws Exception
     */
    public function getReportList($request);


            
    /**
     * Get Feed Submission Result 
     * retrieves the feed processing report
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionResult.html      
     * @param mixed $request array of parameters for GetFeedSubmissionResultRequest request
     * or GetFeedSubmissionResultRequest object itself
     * @see GetFeedSubmissionResultRequest
     * @return GetFeedSubmissionResultResponse GetFeedSubmissionResultResponse
     *
     * @throws Exception
     */
    public function getFeedSubmissionResult($request);


            
    /**
     * Get Feed Submission List 
     * returns a list of feed submission identifiers and their associated metadata
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetFeedSubmissionList.html      
     * @param mixed $request array of parameters for GetFeedSubmissionListRequest request
     * or GetFeedSubmissionListRequest object itself
     * @see GetFeedSubmissionListRequest
     * @return GetFeedSubmissionListResponse GetFeedSubmissionListResponse
     *
     * @throws Exception
     */
    public function getFeedSubmissionList($request);


            
    /**
     * Get Report Request List 
     * returns a list of report requests ids and their associated metadata
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestList.html      
     * @param mixed $request array of parameters for GetReportRequestListRequest request
     * or GetReportRequestListRequest object itself
     * @see GetReportRequestListRequest
     * @return GetReportRequestListResponse GetReportRequestListResponse
     *
     * @throws Exception
     */
    public function getReportRequestList($request);


            
    /**
     * Get Report Schedule List By Next Token 
     * retrieve the next batch of list items and if there are more items to retrieve
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleListByNextToken.html      
     * @param mixed $request array of parameters for GetReportScheduleListByNextTokenRequest request
     * or GetReportScheduleListByNextTokenRequest object itself
     * @see GetReportScheduleListByNextTokenRequest
     * @return GetReportScheduleListByNextTokenResponse GetReportScheduleListByNextTokenResponse
     *
     * @throws Exception
     */
    public function getReportScheduleListByNextToken($request);


            
    /**
     * Get Report List By Next Token 
     * retrieve the next batch of list items and if there are more items to retrieve
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportListByNextToken.html      
     * @param mixed $request array of parameters for GetReportListByNextTokenRequest request
     * or GetReportListByNextTokenRequest object itself
     * @see GetReportListByNextTokenRequest
     * @return GetReportListByNextTokenResponse GetReportListByNextTokenResponse
     *
     * @throws Exception
     */
    public function getReportListByNextToken($request);


            
    /**
     * Manage Report Schedule 
     * Creates, updates, or deletes a report schedule
     * for a given report type, such as order reports in particular.
     *   
     * @see http://docs.amazonwebservices.com/${docPath}ManageReportSchedule.html      
     * @param mixed $request array of parameters for ManageReportScheduleRequest request
     * or ManageReportScheduleRequest object itself
     * @see ManageReportScheduleRequest
     * @return ManageReportScheduleResponse ManageReportScheduleResponse
     *
     * @throws Exception
     */
    public function manageReportSchedule($request);


            
    /**
     * Get Report Request Count 
     * returns a count of report requests; by default all the report
     * requests in the last 90 days
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportRequestCount.html      
     * @param mixed $request array of parameters for GetReportRequestCountRequest request
     * or GetReportRequestCountRequest object itself
     * @see GetReportRequestCountRequest
     * @return GetReportRequestCountResponse GetReportRequestCountResponse
     *
     * @throws Exception
     */
    public function getReportRequestCount($request);


            
    /**
     * Get Report Schedule List 
     * returns the list of report schedules
     *   
     * @see http://docs.amazonwebservices.com/${docPath}GetReportScheduleList.html      
     * @param mixed $request array of parameters for GetReportScheduleListRequest request
     * or GetReportScheduleListRequest object itself
     * @see GetReportScheduleListRequest
     * @return GetReportScheduleListResponse GetReportScheduleListResponse
     *
     * @throws Exception
     */
    public function getReportScheduleList($request);

}