<?php
/**
 * MultipleSelectAnswer
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
 * MultipleSelectAnswer Class Doc Comment
 *
 * @category Class
 * @description Multiple select answer type
 * @package  Thas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class MultipleSelectAnswer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MultipleSelectAnswer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'interaction_type' => 'string',
        'target' => 'string',
        'selected_option_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'interaction_type' => null,
        'target' => null,
        'selected_option_ids' => null
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
        'interaction_type' => 'interactionType',
        'target' => 'target',
        'selected_option_ids' => 'selectedOptionIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'interaction_type' => 'setInteractionType',
        'target' => 'setTarget',
        'selected_option_ids' => 'setSelectedOptionIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'interaction_type' => 'getInteractionType',
        'target' => 'getTarget',
        'selected_option_ids' => 'getSelectedOptionIds'
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

    const INTERACTION_TYPE_QI_SINGLE_SELECT = 'QiSingleSelect';
    const INTERACTION_TYPE_QI_MULTIPLE_SELECT = 'QiMultipleSelect';
    const INTERACTION_TYPE_QI_DRAWING = 'QiDrawing';
    const INTERACTION_TYPE_QI_TEXT_ENTRY = 'QiTextEntry';
    const INTERACTION_TYPE_QI_TEXT_ENTRY_SELF_SCORE = 'QiTextEntrySelfScore';
    const INTERACTION_TYPE_QI_GAP_MATCH = 'QiGapMatch';
    const INTERACTION_TYPE_QI_GRAPHIC_GAP_MATCH = 'QiGraphicGapMatch';
    const INTERACTION_TYPE_QI_COUPLE_ASSOCIATE = 'QiCoupleAssociate';
    const INTERACTION_TYPE_QI_ACROSTIC_PUZZLE = 'QiAcrosticPuzzle';
    const INTERACTION_TYPE_QI_OPEN_QUESTION = 'QiOpenQuestion';
    const INTERACTION_TYPE_GRAPHIC_HOTSPOT = 'GraphicHotspot';
    const INTERACTION_TYPE_GRAPHIC_ASSOCIATE = 'GraphicAssociate';
    const INTERACTION_TYPE_QI_SEQUENCING = 'QiSequencing';
    const INTERACTION_TYPE_QI_INLINE_CHOICE = 'QiInlineChoice';
    const INTERACTION_TYPE_QI_SINGLE_CHOICE_MATRIX = 'QiSingleChoiceMatrix';
    const INTERACTION_TYPE_QI_MULTIPLE_CHOICE_MATRIX = 'QiMultipleChoiceMatrix';
    const INTERACTION_TYPE_QI_TEXT_HIGHLIGHT = 'QiTextHighlight';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInteractionTypeAllowableValues()
    {
        return [
            self::INTERACTION_TYPE_QI_SINGLE_SELECT,
            self::INTERACTION_TYPE_QI_MULTIPLE_SELECT,
            self::INTERACTION_TYPE_QI_DRAWING,
            self::INTERACTION_TYPE_QI_TEXT_ENTRY,
            self::INTERACTION_TYPE_QI_TEXT_ENTRY_SELF_SCORE,
            self::INTERACTION_TYPE_QI_GAP_MATCH,
            self::INTERACTION_TYPE_QI_GRAPHIC_GAP_MATCH,
            self::INTERACTION_TYPE_QI_COUPLE_ASSOCIATE,
            self::INTERACTION_TYPE_QI_ACROSTIC_PUZZLE,
            self::INTERACTION_TYPE_QI_OPEN_QUESTION,
            self::INTERACTION_TYPE_GRAPHIC_HOTSPOT,
            self::INTERACTION_TYPE_GRAPHIC_ASSOCIATE,
            self::INTERACTION_TYPE_QI_SEQUENCING,
            self::INTERACTION_TYPE_QI_INLINE_CHOICE,
            self::INTERACTION_TYPE_QI_SINGLE_CHOICE_MATRIX,
            self::INTERACTION_TYPE_QI_MULTIPLE_CHOICE_MATRIX,
            self::INTERACTION_TYPE_QI_TEXT_HIGHLIGHT,
        ];
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
        $this->container['interaction_type'] = isset($data['interaction_type']) ? $data['interaction_type'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['selected_option_ids'] = isset($data['selected_option_ids']) ? $data['selected_option_ids'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getInteractionTypeAllowableValues();
        if (!is_null($this->container['interaction_type']) && !in_array($this->container['interaction_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'interaction_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets interaction_type
     *
     * @return string|null
     */
    public function getInteractionType()
    {
        return $this->container['interaction_type'];
    }

    /**
     * Sets interaction_type
     *
     * @param string|null $interaction_type Type of interaction
     *
     * @return $this
     */
    public function setInteractionType($interaction_type)
    {
        $allowedValues = $this->getInteractionTypeAllowableValues();
        if (!is_null($interaction_type) && !in_array($interaction_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'interaction_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['interaction_type'] = $interaction_type;

        return $this;
    }

    /**
     * Gets target
     *
     * @return string|null
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param string|null $target Interaction within the assignment the answer belongs to. This must be the contentidentifier that matches the standard.
     *
     * @return $this
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets selected_option_ids
     *
     * @return string[]|null
     */
    public function getSelectedOptionIds()
    {
        return $this->container['selected_option_ids'];
    }

    /**
     * Sets selected_option_ids
     *
     * @param string[]|null $selected_option_ids contentIds of the selected options
     *
     * @return $this
     */
    public function setSelectedOptionIds($selected_option_ids)
    {
        $this->container['selected_option_ids'] = $selected_option_ids;

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


