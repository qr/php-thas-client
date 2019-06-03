<?php
/**
 * TextHighlightAnswerTest
 *
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
 * First version of an API to exchange Learning Analytics. This API is based on events (inspired by Caliper Analytics® Specification, version 1.1) that are send to the api. We use a number of events.  The session event is used to register logins and logouts of the application  The view event is used to register page views for theory.  The grade event is used to register results of doing assignments. Such a result is modelled as a score.  The assesment event is used to register the completion of an assignment. This information is transfered as an attempt.  The item event is used to register the answer of a student to a question  The navigation event is used to register url navigations in the application  The media event is used to register media use like video and audio  The tooluseevent is used to register usage of external tools that are accessed from the application  Both theory and assignments are considered digital resources. An assignment is an assignable digital resource. Most events have an object and a target. The object needs to be used to set the stream (streamcode) and the target to set the content element within the stream.  A student is seen as an actor.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the model.
 */

namespace Thas;

use PHPUnit\Framework\TestCase;

/**
 * TextHighlightAnswerTest Class Doc Comment
 *
 * @category    Class
 * @description Text highlight answer type
 * @package     Thas
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class TextHighlightAnswerTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "TextHighlightAnswer"
     */
    public function testTextHighlightAnswer()
    {
    }

    /**
     * Test attribute "option_highlights"
     */
    public function testPropertyOptionHighlights()
    {
    }
}
