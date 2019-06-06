<?php
/**
 * AnalyticsApi
 * PHP version 5
 *
 * @category Class
 * @package  Thas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Thieme Meulenhoff Analytics Data API
 *
 * First version of an API to exchange Learning Analytics. This API is based on events (inspired by Caliper Analytics® Specification, version 1.1) that are send to the api. We use a number of events.  The session event is used to register logins and logouts of the application  The view event is used to register page views for theory.  The grade event is used to register results of doing assignments. Such a result is modelled as a score.  The assessment event is used to register the completion of an assignment. This information is transfered as an attempt.  The item event is used to register the answer of a student to a question  The navigation event is used to register url navigations in the application  The media event is used to register media use like video and audio  The tooluseevent is used to register usage of external tools that are accessed from the application  Both theory and assignments are considered digital resources. An assignment is an assignable digital resource. Most events have an object and a target. The object needs to be used to set the stream (streamcode) and the target to set the content element within the stream.  A student is seen as an actor.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Thas\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Thas\ApiException;
use Thas\Configuration;
use Thas\HeaderSelector;
use Thas\ObjectSerializer;

/**
 * AnalyticsApi Class Doc Comment
 *
 * @category Class
 * @package  Thas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AnalyticsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation learningAnalytics
     *
     * @param  OneOfViewEventGradeEventAssignableEventSessionEventNavigationEventToolUseEventMediaEventAssessmentItemEvent[] $one_of_view_event_grade_event_assignable_event_session_event_navigation_event_tool_use_event_media_event_assessment_item_event one_of_view_event_grade_event_assignable_event_session_event_navigation_event_tool_use_event_media_event_assessment_item_event (optional)
     *
     * @throws \Thas\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function learningAnalytics($one_of_view_event_grade_event_assignable_event_session_event_navigation_event_tool_use_event_media_event_assessment_item_event = null)
    {
        $this->learningAnalyticsWithHttpInfo($one_of_view_event_grade_event_assignable_event_session_event_navigation_event_tool_use_event_media_event_assessment_item_event);
    }

    /**
     * Operation learningAnalyticsWithHttpInfo
     *
     * @param  OneOfViewEventGradeEventAssignableEventSessionEventNavigationEventToolUseEventMediaEventAssessmentItemEvent[] $one_of_view_event_grade_event_assignable_event_session_event_navigation_event_tool_use_event_media_event_assessment_item_event (optional)
     *
     * @throws \Thas\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function learningAnalyticsWithHttpInfo($one_of_view_event_grade_event_assignable_event_session_event_navigation_event_tool_use_event_media_event_assessment_item_event = null)
    {
        $request = $this->learningAnalyticsRequest($one_of_view_event_grade_event_assignable_event_session_event_navigation_event_tool_use_event_media_event_assessment_item_event);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation learningAnalyticsAsync
     *
     * 
     *
     * @param  OneOfViewEventGradeEventAssignableEventSessionEventNavigationEventToolUseEventMediaEventAssessmentItemEvent[] $one_of_view_event_grade_event_assignable_event_session_event_navigation_event_tool_use_event_media_event_assessment_item_event (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function learningAnalyticsAsync($one_of_view_event_grade_event_assignable_event_session_event_navigation_event_tool_use_event_media_event_assessment_item_event = null)
    {
        return $this->learningAnalyticsAsyncWithHttpInfo($one_of_view_event_grade_event_assignable_event_session_event_navigation_event_tool_use_event_media_event_assessment_item_event)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation learningAnalyticsAsyncWithHttpInfo
     *
     * 
     *
     * @param  OneOfViewEventGradeEventAssignableEventSessionEventNavigationEventToolUseEventMediaEventAssessmentItemEvent[] $one_of_view_event_grade_event_assignable_event_session_event_navigation_event_tool_use_event_media_event_assessment_item_event (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function learningAnalyticsAsyncWithHttpInfo($one_of_view_event_grade_event_assignable_event_session_event_navigation_event_tool_use_event_media_event_assessment_item_event = null)
    {
        $returnType = '';
        $request = $this->learningAnalyticsRequest($one_of_view_event_grade_event_assignable_event_session_event_navigation_event_tool_use_event_media_event_assessment_item_event);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'learningAnalytics'
     *
     * @param  OneOfViewEventGradeEventAssignableEventSessionEventNavigationEventToolUseEventMediaEventAssessmentItemEvent[] $one_of_view_event_grade_event_assignable_event_session_event_navigation_event_tool_use_event_media_event_assessment_item_event (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function learningAnalyticsRequest($one_of_view_event_grade_event_assignable_event_session_event_navigation_event_tool_use_event_media_event_assessment_item_event = null)
    {

        $resourcePath = '/learning_analytics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($one_of_view_event_grade_event_assignable_event_session_event_navigation_event_tool_use_event_media_event_assessment_item_event)) {
            $_tempBody = $one_of_view_event_grade_event_assignable_event_session_event_navigation_event_tool_use_event_media_event_assessment_item_event;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation learningAnalyticsGet
     *
     * @param  string $course The course you want to fetch data for (optional)
     * @param  \DateTime $start_date The start date for the range of events to collect. Defaults to today minus 30 days when left empty * Example start date: 201905272254 (optional)
     * @param  \DateTime $end_date The end date for the range of events to collect. Defaults to today when left empty * Example end date: 201905281621 (optional)
     *
     * @throws \Thas\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function learningAnalyticsGet($course = null, $start_date = null, $end_date = null)
    {
        $this->learningAnalyticsGetWithHttpInfo($course, $start_date, $end_date);
    }

    /**
     * Operation learningAnalyticsGetWithHttpInfo
     *
     * @param  string $course The course you want to fetch data for (optional)
     * @param  \DateTime $start_date The start date for the range of events to collect. Defaults to today minus 30 days when left empty * Example start date: 201905272254 (optional)
     * @param  \DateTime $end_date The end date for the range of events to collect. Defaults to today when left empty * Example end date: 201905281621 (optional)
     *
     * @throws \Thas\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function learningAnalyticsGetWithHttpInfo($course = null, $start_date = null, $end_date = null)
    {
        $request = $this->learningAnalyticsGetRequest($course, $start_date, $end_date);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation learningAnalyticsGetAsync
     *
     * 
     *
     * @param  string $course The course you want to fetch data for (optional)
     * @param  \DateTime $start_date The start date for the range of events to collect. Defaults to today minus 30 days when left empty * Example start date: 201905272254 (optional)
     * @param  \DateTime $end_date The end date for the range of events to collect. Defaults to today when left empty * Example end date: 201905281621 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function learningAnalyticsGetAsync($course = null, $start_date = null, $end_date = null)
    {
        return $this->learningAnalyticsGetAsyncWithHttpInfo($course, $start_date, $end_date)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation learningAnalyticsGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $course The course you want to fetch data for (optional)
     * @param  \DateTime $start_date The start date for the range of events to collect. Defaults to today minus 30 days when left empty * Example start date: 201905272254 (optional)
     * @param  \DateTime $end_date The end date for the range of events to collect. Defaults to today when left empty * Example end date: 201905281621 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function learningAnalyticsGetAsyncWithHttpInfo($course = null, $start_date = null, $end_date = null)
    {
        $returnType = '';
        $request = $this->learningAnalyticsGetRequest($course, $start_date, $end_date);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'learningAnalyticsGet'
     *
     * @param  string $course The course you want to fetch data for (optional)
     * @param  \DateTime $start_date The start date for the range of events to collect. Defaults to today minus 30 days when left empty * Example start date: 201905272254 (optional)
     * @param  \DateTime $end_date The end date for the range of events to collect. Defaults to today when left empty * Example end date: 201905281621 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function learningAnalyticsGetRequest($course = null, $start_date = null, $end_date = null)
    {

        $resourcePath = '/learning_analytics';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($course !== null) {
            $queryParams['course'] = ObjectSerializer::toQueryValue($course);
        }
        // query params
        if ($start_date !== null) {
            $queryParams['start_date'] = ObjectSerializer::toQueryValue($start_date);
        }
        // query params
        if ($end_date !== null) {
            $queryParams['end_date'] = ObjectSerializer::toQueryValue($end_date);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires Bearer (JWT) authentication (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
