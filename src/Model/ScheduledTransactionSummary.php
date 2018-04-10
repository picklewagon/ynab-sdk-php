<?php
/**
 * ScheduledTransactionSummary
 *
 * PHP version 5
 *
 * @category Class
 * @package  YNAB\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * YNAB API Endpoints
 *
 * Our API uses a REST based design, leverages the JSON data format, and relies upon HTTPS for transport. We respond with meaningful HTTP response codes and if an error occurs, we include error details in the response body.  API Documentation is at https://api.youneedabudget.com
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace YNAB\Api\Model;

use \ArrayAccess;
use \YNAB\Api\ObjectSerializer;

/**
 * ScheduledTransactionSummary Class Doc Comment
 *
 * @category Class
 * @package  YNAB\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScheduledTransactionSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ScheduledTransactionSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'dateFirst' => '\DateTime',
        'dateNext' => '\DateTime',
        'frequency' => 'string',
        'amount' => 'float',
        'accountId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'dateFirst' => 'date',
        'dateNext' => 'date',
        'frequency' => null,
        'amount' => '1234000',
        'accountId' => 'uuid'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'dateFirst' => 'date_first',
        'dateNext' => 'date_next',
        'frequency' => 'frequency',
        'amount' => 'amount',
        'accountId' => 'account_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'dateFirst' => 'setDateFirst',
        'dateNext' => 'setDateNext',
        'frequency' => 'setFrequency',
        'amount' => 'setAmount',
        'accountId' => 'setAccountId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'dateFirst' => 'getDateFirst',
        'dateNext' => 'getDateNext',
        'frequency' => 'getFrequency',
        'amount' => 'getAmount',
        'accountId' => 'getAccountId'
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
        return self::$swaggerModelName;
    }

    const FREQUENCY_NEVER = 'never';
    const FREQUENCY_DAILY = 'daily';
    const FREQUENCY_WEEKLY = 'weekly';
    const FREQUENCY_EVERY_OTHER_WEEK = 'everyOtherWeek';
    const FREQUENCY_TWICE_A_MONTH = 'twiceAMonth';
    const FREQUENCY_EVERY4_WEEKS = 'every4Weeks';
    const FREQUENCY_MONTHLY = 'monthly';
    const FREQUENCY_EVERY_OTHER_MONTH = 'everyOtherMonth';
    const FREQUENCY_EVERY3_MONTHS = 'every3Months';
    const FREQUENCY_EVERY4_MONTHS = 'every4Months';
    const FREQUENCY_TWICE_A_YEAR = 'twiceAYear';
    const FREQUENCY_YEARLY = 'yearly';
    const FREQUENCY_EVERY_OTHER_YEAR = 'everyOtherYear';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFrequencyAllowableValues()
    {
        return [
            self::FREQUENCY_NEVER,
            self::FREQUENCY_DAILY,
            self::FREQUENCY_WEEKLY,
            self::FREQUENCY_EVERY_OTHER_WEEK,
            self::FREQUENCY_TWICE_A_MONTH,
            self::FREQUENCY_EVERY4_WEEKS,
            self::FREQUENCY_MONTHLY,
            self::FREQUENCY_EVERY_OTHER_MONTH,
            self::FREQUENCY_EVERY3_MONTHS,
            self::FREQUENCY_EVERY4_MONTHS,
            self::FREQUENCY_TWICE_A_YEAR,
            self::FREQUENCY_YEARLY,
            self::FREQUENCY_EVERY_OTHER_YEAR,
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
        $this->container['dateFirst'] = isset($data['dateFirst']) ? $data['dateFirst'] : null;
        $this->container['dateNext'] = isset($data['dateNext']) ? $data['dateNext'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
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
        if ($this->container['dateFirst'] === null) {
            $invalidProperties[] = "'dateFirst' can't be null";
        }
        if ($this->container['dateNext'] === null) {
            $invalidProperties[] = "'dateNext' can't be null";
        }
        if ($this->container['frequency'] === null) {
            $invalidProperties[] = "'frequency' can't be null";
        }
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!in_array($this->container['frequency'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'frequency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['dateFirst'] === null) {
            return false;
        }
        if ($this->container['dateNext'] === null) {
            return false;
        }
        if ($this->container['frequency'] === null) {
            return false;
        }
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!in_array($this->container['frequency'], $allowedValues)) {
            return false;
        }
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['accountId'] === null) {
            return false;
        }
        return true;
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
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets dateFirst
     *
     * @return \DateTime
     */
    public function getDateFirst()
    {
        return $this->container['dateFirst'];
    }

    /**
     * Sets dateFirst
     *
     * @param \DateTime $dateFirst The first date for which the Scheduled Transaction was scheduled.
     *
     * @return $this
     */
    public function setDateFirst($dateFirst)
    {
        $this->container['dateFirst'] = $dateFirst;

        return $this;
    }

    /**
     * Gets dateNext
     *
     * @return \DateTime
     */
    public function getDateNext()
    {
        return $this->container['dateNext'];
    }

    /**
     * Sets dateNext
     *
     * @param \DateTime $dateNext The next date for which the Scheduled Transaction is scheduled.
     *
     * @return $this
     */
    public function setDateNext($dateNext)
    {
        $this->container['dateNext'] = $dateNext;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param string $frequency frequency
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!in_array($frequency, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'frequency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount The scheduled transaction amount in milliunits format
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets accountId
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param string $accountId accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


