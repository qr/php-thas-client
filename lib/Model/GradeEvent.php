<?php
/**
 * GradeEvent
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

namespace Thas\Model;

use \ArrayAccess;
use \Thas\ObjectSerializer;

/**
 * GradeEvent Class Doc Comment
 *
 * @category Class
 * @description A grade event registers the score that has been deermined when making an assignment. This may have been done by automated or by manual grading
 * @package  Thas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GradeEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GradeEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'type' => 'string',
        'actor' => 'string',
        'role' => 'string',
        'object' => 'string',
        'event_time' => '\DateTime',
        'session_id' => 'string',
        'action' => 'string',
        'target' => 'string',
        'attempt' => 'int',
        'max_result_score' => 'float',
        'result_score' => 'float',
        'actor_score' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'type' => null,
        'actor' => null,
        'role' => null,
        'object' => null,
        'event_time' => 'date-time',
        'session_id' => null,
        'action' => null,
        'target' => null,
        'attempt' => null,
        'max_result_score' => null,
        'result_score' => null,
        'actor_score' => null
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
        'id' => 'id',
        'type' => 'type',
        'actor' => 'actor',
        'role' => 'role',
        'object' => 'object',
        'event_time' => 'eventTime',
        'session_id' => 'sessionId',
        'action' => 'action',
        'target' => 'target',
        'attempt' => 'attempt',
        'max_result_score' => 'maxResultScore',
        'result_score' => 'resultScore',
        'actor_score' => 'actorScore'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'actor' => 'setActor',
        'role' => 'setRole',
        'object' => 'setObject',
        'event_time' => 'setEventTime',
        'session_id' => 'setSessionId',
        'action' => 'setAction',
        'target' => 'setTarget',
        'attempt' => 'setAttempt',
        'max_result_score' => 'setMaxResultScore',
        'result_score' => 'setResultScore',
        'actor_score' => 'setActorScore'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'actor' => 'getActor',
        'role' => 'getRole',
        'object' => 'getObject',
        'event_time' => 'getEventTime',
        'session_id' => 'getSessionId',
        'action' => 'getAction',
        'target' => 'getTarget',
        'attempt' => 'getAttempt',
        'max_result_score' => 'getMaxResultScore',
        'result_score' => 'getResultScore',
        'actor_score' => 'getActorScore'
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

    const TYPE_VIEW = 'view';
    const TYPE_GRADE = 'grade';
    const TYPE_ASSESSMENT = 'assessment';
    const TYPE_ADAPTIVE = 'adaptive';
    const TYPE_SESSION = 'session';
    const TYPE_NAVIGATION = 'navigation';
    const TYPE_TOOLUSE = 'tooluse';
    const TYPE_MEDIA = 'media';
    const TYPE_ITEM = 'item';
    const ROLE_TEACHER = 'teacher';
    const ROLE_STUDENT = 'student';
    const ROLE_ADMIN = 'admin';
    const ACTION_GRADED_AUTOMATICALLY = 'GradedAutomatically';
    const ACTION_GRADED_MANUALLY = 'GradedManually';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_VIEW,
            self::TYPE_GRADE,
            self::TYPE_ASSESSMENT,
            self::TYPE_ADAPTIVE,
            self::TYPE_SESSION,
            self::TYPE_NAVIGATION,
            self::TYPE_TOOLUSE,
            self::TYPE_MEDIA,
            self::TYPE_ITEM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoleAllowableValues()
    {
        return [
            self::ROLE_TEACHER,
            self::ROLE_STUDENT,
            self::ROLE_ADMIN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_GRADED_AUTOMATICALLY,
            self::ACTION_GRADED_MANUALLY,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['actor'] = isset($data['actor']) ? $data['actor'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['object'] = isset($data['object']) ? $data['object'] : null;
        $this->container['event_time'] = isset($data['event_time']) ? $data['event_time'] : null;
        $this->container['session_id'] = isset($data['session_id']) ? $data['session_id'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
        $this->container['attempt'] = isset($data['attempt']) ? $data['attempt'] : null;
        $this->container['max_result_score'] = isset($data['max_result_score']) ? $data['max_result_score'] : null;
        $this->container['result_score'] = isset($data['result_score']) ? $data['result_score'] : null;
        $this->container['actor_score'] = isset($data['actor_score']) ? $data['actor_score'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['actor'] === null) {
            $invalidProperties[] = "'actor' can't be null";
        }
        $allowedValues = $this->getRoleAllowableValues();
        if (!is_null($this->container['role']) && !in_array($this->container['role'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'role', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['object'] === null) {
            $invalidProperties[] = "'object' can't be null";
        }
        if ($this->container['event_time'] === null) {
            $invalidProperties[] = "'event_time' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        $allowedValues = $this->getActionAllowableValues();
        if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['target'] === null) {
            $invalidProperties[] = "'target' can't be null";
        }
        if ($this->container['attempt'] === null) {
            $invalidProperties[] = "'attempt' can't be null";
        }
        if ($this->container['max_result_score'] === null) {
            $invalidProperties[] = "'max_result_score' can't be null";
        }
        if ($this->container['result_score'] === null) {
            $invalidProperties[] = "'result_score' can't be null";
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id a unique id for this event
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type the type of the event
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets actor
     *
     * @return string
     */
    public function getActor()
    {
        return $this->container['actor'];
    }

    /**
     * Sets actor
     *
     * @param string $actor string containing the userid of the actor
     *
     * @return $this
     */
    public function setActor($actor)
    {
        $this->container['actor'] = $actor;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string|null
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string|null $role string containing the role of the actor
     *
     * @return $this
     */
    public function setRole($role)
    {
        $allowedValues = $this->getRoleAllowableValues();
        if (!is_null($role) && !in_array($role, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'role', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets object
     *
     * @return string
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param string $object the content identifier of the digital resource this event relates to. This is the stream identifier.
     *
     * @return $this
     */
    public function setObject($object)
    {
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets event_time
     *
     * @return \DateTime
     */
    public function getEventTime()
    {
        return $this->container['event_time'];
    }

    /**
     * Sets event_time
     *
     * @param \DateTime $event_time timestamp on which the event occured
     *
     * @return $this
     */
    public function setEventTime($event_time)
    {
        $this->container['event_time'] = $event_time;

        return $this;
    }

    /**
     * Gets session_id
     *
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->container['session_id'];
    }

    /**
     * Sets session_id
     *
     * @param string|null $session_id id of the session
     *
     * @return $this
     */
    public function setSessionId($session_id)
    {
        $this->container['session_id'] = $session_id;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action the specific action that is recorded
     *
     * @return $this
     */
    public function setAction($action)
    {
        $allowedValues = $this->getActionAllowableValues();
        if (!in_array($action, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'action', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
     * Sets target
     *
     * @param string $target Content element within the object that is graded. This must be the contentidentifier that matches the standard.
     *
     * @return $this
     */
    public function setTarget($target)
    {
        $this->container['target'] = $target;

        return $this;
    }

    /**
     * Gets attempt
     *
     * @return int
     */
    public function getAttempt()
    {
        return $this->container['attempt'];
    }

    /**
     * Sets attempt
     *
     * @param int $attempt Id of the attempt, you can use the attempt count for this 1, 2, 3 ...
     *
     * @return $this
     */
    public function setAttempt($attempt)
    {
        $this->container['attempt'] = $attempt;

        return $this;
    }

    /**
     * Gets max_result_score
     *
     * @return float
     */
    public function getMaxResultScore()
    {
        return $this->container['max_result_score'];
    }

    /**
     * Sets max_result_score
     *
     * @param float $max_result_score Maximum possible score
     *
     * @return $this
     */
    public function setMaxResultScore($max_result_score)
    {
        $this->container['max_result_score'] = $max_result_score;

        return $this;
    }

    /**
     * Gets result_score
     *
     * @return float
     */
    public function getResultScore()
    {
        return $this->container['result_score'];
    }

    /**
     * Sets result_score
     *
     * @param float $result_score Acheived score
     *
     * @return $this
     */
    public function setResultScore($result_score)
    {
        $this->container['result_score'] = $result_score;

        return $this;
    }

    /**
     * Gets actor_score
     *
     * @return string|null
     */
    public function getActorScore()
    {
        return $this->container['actor_score'];
    }

    /**
     * Sets actor_score
     *
     * @param string|null $actor_score Scored by the teacher or student
     *
     * @return $this
     */
    public function setActorScore($actor_score)
    {
        $this->container['actor_score'] = $actor_score;

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


