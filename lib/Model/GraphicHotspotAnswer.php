<?php
/**
 * GraphicHotspotAnswer
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
 * Do not edit the class manually.
 */

namespace Thas\Model;

use \ArrayAccess;
use \Thas\ObjectSerializer;

/**
 * GraphicHotspotAnswer Class Doc Comment
 *
 * @category Class
 * @description Graphic hotspot answer type
 * @package  Thas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GraphicHotspotAnswer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GraphicHotspotAnswer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user_answer' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'user_answer' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'user_answer' => 'userAnswer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user_answer' => 'setUserAnswer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user_answer' => 'getUserAnswer'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['user_answer'] = isset($data['user_answer']) ? $data['user_answer'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets user_answer
     *
     * @return int|null
     */
    public function getUserAnswer()
    {
        return $this->container['user_answer'];
    }

    /**
     * Sets user_answer
     *
     * @param int|null $user_answer The number of correct selected hotspots
     *
     * @return $this
     */
    public function setUserAnswer($user_answer)
    {
        $this->container['user_answer'] = $user_answer;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


