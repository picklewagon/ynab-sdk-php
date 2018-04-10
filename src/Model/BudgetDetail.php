<?php
/**
 * BudgetDetail
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
 * BudgetDetail Class Doc Comment
 *
 * @category Class
 * @package  YNAB\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BudgetDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BudgetDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'dateFormat' => '\YNAB\Api\Model\DateFormat',
        'currencyFormat' => '\YNAB\Api\Model\CurrencyFormat',
        'accounts' => '\YNAB\Api\Model\Account[]',
        'payees' => '\YNAB\Api\Model\Payee[]',
        'payeeLocations' => '\YNAB\Api\Model\PayeeLocation[]',
        'categoryGroups' => '\YNAB\Api\Model\CategoryGroup[]',
        'categories' => '\YNAB\Api\Model\Category[]',
        'months' => '\YNAB\Api\Model\MonthDetail[]',
        'transactions' => '\YNAB\Api\Model\TransactionSummary[]',
        'subtransactions' => '\YNAB\Api\Model\SubTransaction[]',
        'scheduledTransactions' => '\YNAB\Api\Model\ScheduledTransactionSummary[]',
        'scheduledSubtransactions' => '\YNAB\Api\Model\ScheduledSubTransaction[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'name' => null,
        'dateFormat' => null,
        'currencyFormat' => null,
        'accounts' => null,
        'payees' => null,
        'payeeLocations' => null,
        'categoryGroups' => null,
        'categories' => null,
        'months' => null,
        'transactions' => null,
        'subtransactions' => null,
        'scheduledTransactions' => null,
        'scheduledSubtransactions' => null
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
        'name' => 'name',
        'dateFormat' => 'date_format',
        'currencyFormat' => 'currency_format',
        'accounts' => 'accounts',
        'payees' => 'payees',
        'payeeLocations' => 'payee_locations',
        'categoryGroups' => 'category_groups',
        'categories' => 'categories',
        'months' => 'months',
        'transactions' => 'transactions',
        'subtransactions' => 'subtransactions',
        'scheduledTransactions' => 'scheduled_transactions',
        'scheduledSubtransactions' => 'scheduled_subtransactions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'dateFormat' => 'setDateFormat',
        'currencyFormat' => 'setCurrencyFormat',
        'accounts' => 'setAccounts',
        'payees' => 'setPayees',
        'payeeLocations' => 'setPayeeLocations',
        'categoryGroups' => 'setCategoryGroups',
        'categories' => 'setCategories',
        'months' => 'setMonths',
        'transactions' => 'setTransactions',
        'subtransactions' => 'setSubtransactions',
        'scheduledTransactions' => 'setScheduledTransactions',
        'scheduledSubtransactions' => 'setScheduledSubtransactions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'dateFormat' => 'getDateFormat',
        'currencyFormat' => 'getCurrencyFormat',
        'accounts' => 'getAccounts',
        'payees' => 'getPayees',
        'payeeLocations' => 'getPayeeLocations',
        'categoryGroups' => 'getCategoryGroups',
        'categories' => 'getCategories',
        'months' => 'getMonths',
        'transactions' => 'getTransactions',
        'subtransactions' => 'getSubtransactions',
        'scheduledTransactions' => 'getScheduledTransactions',
        'scheduledSubtransactions' => 'getScheduledSubtransactions'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['dateFormat'] = isset($data['dateFormat']) ? $data['dateFormat'] : null;
        $this->container['currencyFormat'] = isset($data['currencyFormat']) ? $data['currencyFormat'] : null;
        $this->container['accounts'] = isset($data['accounts']) ? $data['accounts'] : null;
        $this->container['payees'] = isset($data['payees']) ? $data['payees'] : null;
        $this->container['payeeLocations'] = isset($data['payeeLocations']) ? $data['payeeLocations'] : null;
        $this->container['categoryGroups'] = isset($data['categoryGroups']) ? $data['categoryGroups'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['months'] = isset($data['months']) ? $data['months'] : null;
        $this->container['transactions'] = isset($data['transactions']) ? $data['transactions'] : null;
        $this->container['subtransactions'] = isset($data['subtransactions']) ? $data['subtransactions'] : null;
        $this->container['scheduledTransactions'] = isset($data['scheduledTransactions']) ? $data['scheduledTransactions'] : null;
        $this->container['scheduledSubtransactions'] = isset($data['scheduledSubtransactions']) ? $data['scheduledSubtransactions'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
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
        if ($this->container['name'] === null) {
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets dateFormat
     *
     * @return \YNAB\Api\Model\DateFormat
     */
    public function getDateFormat()
    {
        return $this->container['dateFormat'];
    }

    /**
     * Sets dateFormat
     *
     * @param \YNAB\Api\Model\DateFormat $dateFormat dateFormat
     *
     * @return $this
     */
    public function setDateFormat($dateFormat)
    {
        $this->container['dateFormat'] = $dateFormat;

        return $this;
    }

    /**
     * Gets currencyFormat
     *
     * @return \YNAB\Api\Model\CurrencyFormat
     */
    public function getCurrencyFormat()
    {
        return $this->container['currencyFormat'];
    }

    /**
     * Sets currencyFormat
     *
     * @param \YNAB\Api\Model\CurrencyFormat $currencyFormat currencyFormat
     *
     * @return $this
     */
    public function setCurrencyFormat($currencyFormat)
    {
        $this->container['currencyFormat'] = $currencyFormat;

        return $this;
    }

    /**
     * Gets accounts
     *
     * @return \YNAB\Api\Model\Account[]
     */
    public function getAccounts()
    {
        return $this->container['accounts'];
    }

    /**
     * Sets accounts
     *
     * @param \YNAB\Api\Model\Account[] $accounts accounts
     *
     * @return $this
     */
    public function setAccounts($accounts)
    {
        $this->container['accounts'] = $accounts;

        return $this;
    }

    /**
     * Gets payees
     *
     * @return \YNAB\Api\Model\Payee[]
     */
    public function getPayees()
    {
        return $this->container['payees'];
    }

    /**
     * Sets payees
     *
     * @param \YNAB\Api\Model\Payee[] $payees payees
     *
     * @return $this
     */
    public function setPayees($payees)
    {
        $this->container['payees'] = $payees;

        return $this;
    }

    /**
     * Gets payeeLocations
     *
     * @return \YNAB\Api\Model\PayeeLocation[]
     */
    public function getPayeeLocations()
    {
        return $this->container['payeeLocations'];
    }

    /**
     * Sets payeeLocations
     *
     * @param \YNAB\Api\Model\PayeeLocation[] $payeeLocations payeeLocations
     *
     * @return $this
     */
    public function setPayeeLocations($payeeLocations)
    {
        $this->container['payeeLocations'] = $payeeLocations;

        return $this;
    }

    /**
     * Gets categoryGroups
     *
     * @return \YNAB\Api\Model\CategoryGroup[]
     */
    public function getCategoryGroups()
    {
        return $this->container['categoryGroups'];
    }

    /**
     * Sets categoryGroups
     *
     * @param \YNAB\Api\Model\CategoryGroup[] $categoryGroups categoryGroups
     *
     * @return $this
     */
    public function setCategoryGroups($categoryGroups)
    {
        $this->container['categoryGroups'] = $categoryGroups;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \YNAB\Api\Model\Category[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \YNAB\Api\Model\Category[] $categories categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets months
     *
     * @return \YNAB\Api\Model\MonthDetail[]
     */
    public function getMonths()
    {
        return $this->container['months'];
    }

    /**
     * Sets months
     *
     * @param \YNAB\Api\Model\MonthDetail[] $months months
     *
     * @return $this
     */
    public function setMonths($months)
    {
        $this->container['months'] = $months;

        return $this;
    }

    /**
     * Gets transactions
     *
     * @return \YNAB\Api\Model\TransactionSummary[]
     */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     *
     * @param \YNAB\Api\Model\TransactionSummary[] $transactions transactions
     *
     * @return $this
     */
    public function setTransactions($transactions)
    {
        $this->container['transactions'] = $transactions;

        return $this;
    }

    /**
     * Gets subtransactions
     *
     * @return \YNAB\Api\Model\SubTransaction[]
     */
    public function getSubtransactions()
    {
        return $this->container['subtransactions'];
    }

    /**
     * Sets subtransactions
     *
     * @param \YNAB\Api\Model\SubTransaction[] $subtransactions subtransactions
     *
     * @return $this
     */
    public function setSubtransactions($subtransactions)
    {
        $this->container['subtransactions'] = $subtransactions;

        return $this;
    }

    /**
     * Gets scheduledTransactions
     *
     * @return \YNAB\Api\Model\ScheduledTransactionSummary[]
     */
    public function getScheduledTransactions()
    {
        return $this->container['scheduledTransactions'];
    }

    /**
     * Sets scheduledTransactions
     *
     * @param \YNAB\Api\Model\ScheduledTransactionSummary[] $scheduledTransactions scheduledTransactions
     *
     * @return $this
     */
    public function setScheduledTransactions($scheduledTransactions)
    {
        $this->container['scheduledTransactions'] = $scheduledTransactions;

        return $this;
    }

    /**
     * Gets scheduledSubtransactions
     *
     * @return \YNAB\Api\Model\ScheduledSubTransaction[]
     */
    public function getScheduledSubtransactions()
    {
        return $this->container['scheduledSubtransactions'];
    }

    /**
     * Sets scheduledSubtransactions
     *
     * @param \YNAB\Api\Model\ScheduledSubTransaction[] $scheduledSubtransactions scheduledSubtransactions
     *
     * @return $this
     */
    public function setScheduledSubtransactions($scheduledSubtransactions)
    {
        $this->container['scheduledSubtransactions'] = $scheduledSubtransactions;

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


