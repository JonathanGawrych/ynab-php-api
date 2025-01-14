<?php
/**
 * MonthSummary
 *
 * PHP version 5
 *
 * @category Class
 * @package  YNAB
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * YNAB API Endpoints
 *
 * Our API uses a REST based design, leverages the JSON data format, and relies upon HTTPS for transport. We respond with meaningful HTTP response codes and if an error occurs, we include error details in the response body.  API Documentation is at https://api.ynab.com
 *
 * OpenAPI spec version: 1.72.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.62
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace YNAB\Model;

use \ArrayAccess;
use \YNAB\ObjectSerializer;

/**
 * MonthSummary Class Doc Comment
 *
 * @category Class
 * @package  YNAB
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MonthSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MonthSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'month' => '\DateTime',
        'note' => 'string',
        'income' => 'int',
        'budgeted' => 'int',
        'activity' => 'int',
        'to_be_budgeted' => 'int',
        'age_of_money' => 'int',
        'deleted' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'month' => 'date',
        'note' => null,
        'income' => 'int64',
        'budgeted' => 'int64',
        'activity' => 'int64',
        'to_be_budgeted' => 'int64',
        'age_of_money' => 'int32',
        'deleted' => null
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
        'month' => 'month',
        'note' => 'note',
        'income' => 'income',
        'budgeted' => 'budgeted',
        'activity' => 'activity',
        'to_be_budgeted' => 'to_be_budgeted',
        'age_of_money' => 'age_of_money',
        'deleted' => 'deleted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'month' => 'setMonth',
        'note' => 'setNote',
        'income' => 'setIncome',
        'budgeted' => 'setBudgeted',
        'activity' => 'setActivity',
        'to_be_budgeted' => 'setToBeBudgeted',
        'age_of_money' => 'setAgeOfMoney',
        'deleted' => 'setDeleted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'month' => 'getMonth',
        'note' => 'getNote',
        'income' => 'getIncome',
        'budgeted' => 'getBudgeted',
        'activity' => 'getActivity',
        'to_be_budgeted' => 'getToBeBudgeted',
        'age_of_money' => 'getAgeOfMoney',
        'deleted' => 'getDeleted'
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
        $this->container['month'] = isset($data['month']) ? $data['month'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['income'] = isset($data['income']) ? $data['income'] : null;
        $this->container['budgeted'] = isset($data['budgeted']) ? $data['budgeted'] : null;
        $this->container['activity'] = isset($data['activity']) ? $data['activity'] : null;
        $this->container['to_be_budgeted'] = isset($data['to_be_budgeted']) ? $data['to_be_budgeted'] : null;
        $this->container['age_of_money'] = isset($data['age_of_money']) ? $data['age_of_money'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['month'] === null) {
            $invalidProperties[] = "'month' can't be null";
        }
        if ($this->container['income'] === null) {
            $invalidProperties[] = "'income' can't be null";
        }
        if ($this->container['budgeted'] === null) {
            $invalidProperties[] = "'budgeted' can't be null";
        }
        if ($this->container['activity'] === null) {
            $invalidProperties[] = "'activity' can't be null";
        }
        if ($this->container['to_be_budgeted'] === null) {
            $invalidProperties[] = "'to_be_budgeted' can't be null";
        }
        if ($this->container['deleted'] === null) {
            $invalidProperties[] = "'deleted' can't be null";
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
     * Gets month
     *
     * @return \DateTime
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param \DateTime $month month
     *
     * @return $this
     */
    public function setMonth($month)
    {
        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets income
     *
     * @return int
     */
    public function getIncome()
    {
        return $this->container['income'];
    }

    /**
     * Sets income
     *
     * @param int $income The total amount of transactions categorized to 'Inflow: Ready to Assign' in the month
     *
     * @return $this
     */
    public function setIncome($income)
    {
        $this->container['income'] = $income;

        return $this;
    }

    /**
     * Gets budgeted
     *
     * @return int
     */
    public function getBudgeted()
    {
        return $this->container['budgeted'];
    }

    /**
     * Sets budgeted
     *
     * @param int $budgeted The total amount budgeted in the month
     *
     * @return $this
     */
    public function setBudgeted($budgeted)
    {
        $this->container['budgeted'] = $budgeted;

        return $this;
    }

    /**
     * Gets activity
     *
     * @return int
     */
    public function getActivity()
    {
        return $this->container['activity'];
    }

    /**
     * Sets activity
     *
     * @param int $activity The total amount of transactions in the month, excluding those categorized to 'Inflow: Ready to Assign'
     *
     * @return $this
     */
    public function setActivity($activity)
    {
        $this->container['activity'] = $activity;

        return $this;
    }

    /**
     * Gets to_be_budgeted
     *
     * @return int
     */
    public function getToBeBudgeted()
    {
        return $this->container['to_be_budgeted'];
    }

    /**
     * Sets to_be_budgeted
     *
     * @param int $to_be_budgeted The available amount for 'Ready to Assign'
     *
     * @return $this
     */
    public function setToBeBudgeted($to_be_budgeted)
    {
        $this->container['to_be_budgeted'] = $to_be_budgeted;

        return $this;
    }

    /**
     * Gets age_of_money
     *
     * @return int
     */
    public function getAgeOfMoney()
    {
        return $this->container['age_of_money'];
    }

    /**
     * Sets age_of_money
     *
     * @param int $age_of_money The Age of Money as of the month
     *
     * @return $this
     */
    public function setAgeOfMoney($age_of_money)
    {
        $this->container['age_of_money'] = $age_of_money;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted Whether or not the month has been deleted.  Deleted months will only be included in delta requests.
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
