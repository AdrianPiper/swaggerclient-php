<?php
/**
 * Event
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * VonageIntegrationSuite
 *
 * __Vonage® Integration Suite__ powered by __gUnify&trade;__.  --------------------------------
 *
 * OpenAPI spec version: v1
 * Contact: gunifydevops@vonage.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace com.vonage.client.model.VonageIntegrationSuite;

use \ArrayAccess;

/**
 * Event Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Event implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Event';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'external_id' => 'string',
        'type' => 'string',
        'account_id' => 'int',
        'user_id' => 'int',
        'uci_id' => 'int',
        'direction' => 'string',
        'caller_id' => 'string',
        'phone_number' => 'string',
        'duration' => 'int',
        'sms_data' => 'string',
        'state' => 'string',
        'start_time' => '\DateTime',
        'answer_time' => '\DateTime',
        'end_time' => '\DateTime'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'id' => 'id',
        'external_id' => 'externalId',
        'type' => 'type',
        'account_id' => 'accountId',
        'user_id' => 'userId',
        'uci_id' => 'uciId',
        'direction' => 'direction',
        'caller_id' => 'callerId',
        'phone_number' => 'phoneNumber',
        'duration' => 'duration',
        'sms_data' => 'smsData',
        'state' => 'state',
        'start_time' => 'startTime',
        'answer_time' => 'answerTime',
        'end_time' => 'endTime'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'id' => 'setId',
        'external_id' => 'setExternalId',
        'type' => 'setType',
        'account_id' => 'setAccountId',
        'user_id' => 'setUserId',
        'uci_id' => 'setUciId',
        'direction' => 'setDirection',
        'caller_id' => 'setCallerId',
        'phone_number' => 'setPhoneNumber',
        'duration' => 'setDuration',
        'sms_data' => 'setSmsData',
        'state' => 'setState',
        'start_time' => 'setStartTime',
        'answer_time' => 'setAnswerTime',
        'end_time' => 'setEndTime'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'id' => 'getId',
        'external_id' => 'getExternalId',
        'type' => 'getType',
        'account_id' => 'getAccountId',
        'user_id' => 'getUserId',
        'uci_id' => 'getUciId',
        'direction' => 'getDirection',
        'caller_id' => 'getCallerId',
        'phone_number' => 'getPhoneNumber',
        'duration' => 'getDuration',
        'sms_data' => 'getSmsData',
        'state' => 'getState',
        'start_time' => 'getStartTime',
        'answer_time' => 'getAnswerTime',
        'end_time' => 'getEndTime'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_CALL = 'CALL';
    const DIRECTION_INBOUND = 'INBOUND';
    const DIRECTION_OUTBOUND = 'OUTBOUND';
    const STATE_SENT = 'SENT';
    const STATE_DELIVERED = 'DELIVERED';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CALL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_INBOUND,
            self::DIRECTION_OUTBOUND,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_SENT,
            self::STATE_DELIVERED,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['uci_id'] = isset($data['uci_id']) ? $data['uci_id'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['caller_id'] = isset($data['caller_id']) ? $data['caller_id'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['sms_data'] = isset($data['sms_data']) ? $data['sms_data'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['answer_time'] = isset($data['answer_time']) ? $data['answer_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        $allowed_values = array("CALL");
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
        }
        if ($this->container['account_id'] === null) {
            $invalid_properties[] = "'account_id' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalid_properties[] = "'user_id' can't be null";
        }
        if ($this->container['uci_id'] === null) {
            $invalid_properties[] = "'uci_id' can't be null";
        }
        if ($this->container['direction'] === null) {
            $invalid_properties[] = "'direction' can't be null";
        }
        $allowed_values = array("INBOUND", "OUTBOUND");
        if (!in_array($this->container['direction'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'direction', must be one of #{allowed_values}.";
        }
        if ($this->container['phone_number'] === null) {
            $invalid_properties[] = "'phone_number' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalid_properties[] = "'state' can't be null";
        }
        $allowed_values = array("SENT", "DELIVERED");
        if (!in_array($this->container['state'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'state', must be one of #{allowed_values}.";
        }
        if ($this->container['start_time'] === null) {
            $invalid_properties[] = "'start_time' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = array("CALL");
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        if ($this->container['account_id'] === null) {
            return false;
        }
        if ($this->container['user_id'] === null) {
            return false;
        }
        if ($this->container['uci_id'] === null) {
            return false;
        }
        if ($this->container['direction'] === null) {
            return false;
        }
        $allowed_values = array("INBOUND", "OUTBOUND");
        if (!in_array($this->container['direction'], $allowed_values)) {
            return false;
        }
        if ($this->container['phone_number'] === null) {
            return false;
        }
        if ($this->container['state'] === null) {
            return false;
        }
        $allowed_values = array("SENT", "DELIVERED");
        if (!in_array($this->container['state'], $allowed_values)) {
            return false;
        }
        if ($this->container['start_time'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets external_id
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     * @param string $external_id
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('CALL');
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'CALL'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets account_id
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     * @param int $account_id
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets user_id
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param int $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets uci_id
     * @return int
     */
    public function getUciId()
    {
        return $this->container['uci_id'];
    }

    /**
     * Sets uci_id
     * @param int $uci_id
     * @return $this
     */
    public function setUciId($uci_id)
    {
        $this->container['uci_id'] = $uci_id;

        return $this;
    }

    /**
     * Gets direction
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     * @param string $direction
     * @return $this
     */
    public function setDirection($direction)
    {
        $allowed_values = array('INBOUND', 'OUTBOUND');
        if (!in_array($direction, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'direction', must be one of 'INBOUND', 'OUTBOUND'");
        }
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets caller_id
     * @return string
     */
    public function getCallerId()
    {
        return $this->container['caller_id'];
    }

    /**
     * Sets caller_id
     * @param string $caller_id Remote caller ID (if present)
     * @return $this
     */
    public function setCallerId($caller_id)
    {
        $this->container['caller_id'] = $caller_id;

        return $this;
    }

    /**
     * Gets phone_number
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     * @param string $phone_number
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets duration
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param int $duration Duration in milliseconds
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets sms_data
     * @return string
     */
    public function getSmsData()
    {
        return $this->container['sms_data'];
    }

    /**
     * Sets sms_data
     * @param string $sms_data
     * @return $this
     */
    public function setSmsData($sms_data)
    {
        $this->container['sms_data'] = $sms_data;

        return $this;
    }

    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     * @param string $state
     * @return $this
     */
    public function setState($state)
    {
        $allowed_values = array('SENT', 'DELIVERED');
        if (!in_array($state, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'state', must be one of 'SENT', 'DELIVERED'");
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets start_time
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     * @param \DateTime $start_time
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets answer_time
     * @return \DateTime
     */
    public function getAnswerTime()
    {
        return $this->container['answer_time'];
    }

    /**
     * Sets answer_time
     * @param \DateTime $answer_time
     * @return $this
     */
    public function setAnswerTime($answer_time)
    {
        $this->container['answer_time'] = $answer_time;

        return $this;
    }

    /**
     * Gets end_time
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     * @param \DateTime $end_time
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


