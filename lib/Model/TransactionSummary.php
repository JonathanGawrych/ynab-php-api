<?php
/**
 * TransactionSummary
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
 * TransactionSummary Class Doc Comment
 *
 * @category Class
 * @package  YNAB
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransactionSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'date' => '\DateTime',
        'amount' => 'int',
        'memo' => 'string',
        'cleared' => '\YNAB\Model\TransactionClearedStatus',
        'approved' => 'bool',
        'flag_color' => '\YNAB\Model\TransactionFlagColor',
        'flag_name' => '\YNAB\Model\TransactionFlagName',
        'account_id' => 'string',
        'payee_id' => 'string',
        'category_id' => 'string',
        'transfer_account_id' => 'string',
        'transfer_transaction_id' => 'string',
        'matched_transaction_id' => 'string',
        'import_id' => 'string',
        'import_payee_name' => 'string',
        'import_payee_name_original' => 'string',
        'debt_transaction_type' => 'string',
        'deleted' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'date' => 'date',
        'amount' => 'int64',
        'memo' => null,
        'cleared' => null,
        'approved' => null,
        'flag_color' => null,
        'flag_name' => null,
        'account_id' => 'uuid',
        'payee_id' => 'uuid',
        'category_id' => 'uuid',
        'transfer_account_id' => 'uuid',
        'transfer_transaction_id' => null,
        'matched_transaction_id' => null,
        'import_id' => null,
        'import_payee_name' => null,
        'import_payee_name_original' => null,
        'debt_transaction_type' => null,
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
        'id' => 'id',
        'date' => 'date',
        'amount' => 'amount',
        'memo' => 'memo',
        'cleared' => 'cleared',
        'approved' => 'approved',
        'flag_color' => 'flag_color',
        'flag_name' => 'flag_name',
        'account_id' => 'account_id',
        'payee_id' => 'payee_id',
        'category_id' => 'category_id',
        'transfer_account_id' => 'transfer_account_id',
        'transfer_transaction_id' => 'transfer_transaction_id',
        'matched_transaction_id' => 'matched_transaction_id',
        'import_id' => 'import_id',
        'import_payee_name' => 'import_payee_name',
        'import_payee_name_original' => 'import_payee_name_original',
        'debt_transaction_type' => 'debt_transaction_type',
        'deleted' => 'deleted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'date' => 'setDate',
        'amount' => 'setAmount',
        'memo' => 'setMemo',
        'cleared' => 'setCleared',
        'approved' => 'setApproved',
        'flag_color' => 'setFlagColor',
        'flag_name' => 'setFlagName',
        'account_id' => 'setAccountId',
        'payee_id' => 'setPayeeId',
        'category_id' => 'setCategoryId',
        'transfer_account_id' => 'setTransferAccountId',
        'transfer_transaction_id' => 'setTransferTransactionId',
        'matched_transaction_id' => 'setMatchedTransactionId',
        'import_id' => 'setImportId',
        'import_payee_name' => 'setImportPayeeName',
        'import_payee_name_original' => 'setImportPayeeNameOriginal',
        'debt_transaction_type' => 'setDebtTransactionType',
        'deleted' => 'setDeleted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'date' => 'getDate',
        'amount' => 'getAmount',
        'memo' => 'getMemo',
        'cleared' => 'getCleared',
        'approved' => 'getApproved',
        'flag_color' => 'getFlagColor',
        'flag_name' => 'getFlagName',
        'account_id' => 'getAccountId',
        'payee_id' => 'getPayeeId',
        'category_id' => 'getCategoryId',
        'transfer_account_id' => 'getTransferAccountId',
        'transfer_transaction_id' => 'getTransferTransactionId',
        'matched_transaction_id' => 'getMatchedTransactionId',
        'import_id' => 'getImportId',
        'import_payee_name' => 'getImportPayeeName',
        'import_payee_name_original' => 'getImportPayeeNameOriginal',
        'debt_transaction_type' => 'getDebtTransactionType',
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

    const DEBT_TRANSACTION_TYPE_PAYMENT = 'payment';
    const DEBT_TRANSACTION_TYPE_REFUND = 'refund';
    const DEBT_TRANSACTION_TYPE_FEE = 'fee';
    const DEBT_TRANSACTION_TYPE_INTEREST = 'interest';
    const DEBT_TRANSACTION_TYPE_ESCROW = 'escrow';
    const DEBT_TRANSACTION_TYPE_BALANCE_ADJUSTMENT = 'balanceAdjustment';
    const DEBT_TRANSACTION_TYPE_CREDIT = 'credit';
    const DEBT_TRANSACTION_TYPE_CHARGE = 'charge';
    const DEBT_TRANSACTION_TYPE_NULL = 'null';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDebtTransactionTypeAllowableValues()
    {
        return [
            self::DEBT_TRANSACTION_TYPE_PAYMENT,
            self::DEBT_TRANSACTION_TYPE_REFUND,
            self::DEBT_TRANSACTION_TYPE_FEE,
            self::DEBT_TRANSACTION_TYPE_INTEREST,
            self::DEBT_TRANSACTION_TYPE_ESCROW,
            self::DEBT_TRANSACTION_TYPE_BALANCE_ADJUSTMENT,
            self::DEBT_TRANSACTION_TYPE_CREDIT,
            self::DEBT_TRANSACTION_TYPE_CHARGE,
            self::DEBT_TRANSACTION_TYPE_NULL,
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['cleared'] = isset($data['cleared']) ? $data['cleared'] : null;
        $this->container['approved'] = isset($data['approved']) ? $data['approved'] : null;
        $this->container['flag_color'] = isset($data['flag_color']) ? $data['flag_color'] : null;
        $this->container['flag_name'] = isset($data['flag_name']) ? $data['flag_name'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['payee_id'] = isset($data['payee_id']) ? $data['payee_id'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['transfer_account_id'] = isset($data['transfer_account_id']) ? $data['transfer_account_id'] : null;
        $this->container['transfer_transaction_id'] = isset($data['transfer_transaction_id']) ? $data['transfer_transaction_id'] : null;
        $this->container['matched_transaction_id'] = isset($data['matched_transaction_id']) ? $data['matched_transaction_id'] : null;
        $this->container['import_id'] = isset($data['import_id']) ? $data['import_id'] : null;
        $this->container['import_payee_name'] = isset($data['import_payee_name']) ? $data['import_payee_name'] : null;
        $this->container['import_payee_name_original'] = isset($data['import_payee_name_original']) ? $data['import_payee_name_original'] : null;
        $this->container['debt_transaction_type'] = isset($data['debt_transaction_type']) ? $data['debt_transaction_type'] : null;
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['cleared'] === null) {
            $invalidProperties[] = "'cleared' can't be null";
        }
        if ($this->container['approved'] === null) {
            $invalidProperties[] = "'approved' can't be null";
        }
        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
        }
        $allowedValues = $this->getDebtTransactionTypeAllowableValues();
        if (!is_null($this->container['debt_transaction_type']) && !in_array($this->container['debt_transaction_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'debt_transaction_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date The transaction date in ISO format (e.g. 2016-12-01)
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount The transaction amount in milliunits format
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string $memo memo
     *
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets cleared
     *
     * @return \YNAB\Model\TransactionClearedStatus
     */
    public function getCleared()
    {
        return $this->container['cleared'];
    }

    /**
     * Sets cleared
     *
     * @param \YNAB\Model\TransactionClearedStatus $cleared cleared
     *
     * @return $this
     */
    public function setCleared($cleared)
    {
        $this->container['cleared'] = $cleared;

        return $this;
    }

    /**
     * Gets approved
     *
     * @return bool
     */
    public function getApproved()
    {
        return $this->container['approved'];
    }

    /**
     * Sets approved
     *
     * @param bool $approved Whether or not the transaction is approved
     *
     * @return $this
     */
    public function setApproved($approved)
    {
        $this->container['approved'] = $approved;

        return $this;
    }

    /**
     * Gets flag_color
     *
     * @return \YNAB\Model\TransactionFlagColor
     */
    public function getFlagColor()
    {
        return $this->container['flag_color'];
    }

    /**
     * Sets flag_color
     *
     * @param \YNAB\Model\TransactionFlagColor $flag_color flag_color
     *
     * @return $this
     */
    public function setFlagColor($flag_color)
    {
        $this->container['flag_color'] = $flag_color;

        return $this;
    }

    /**
     * Gets flag_name
     *
     * @return \YNAB\Model\TransactionFlagName
     */
    public function getFlagName()
    {
        return $this->container['flag_name'];
    }

    /**
     * Sets flag_name
     *
     * @param \YNAB\Model\TransactionFlagName $flag_name flag_name
     *
     * @return $this
     */
    public function setFlagName($flag_name)
    {
        $this->container['flag_name'] = $flag_name;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string $account_id account_id
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets payee_id
     *
     * @return string
     */
    public function getPayeeId()
    {
        return $this->container['payee_id'];
    }

    /**
     * Sets payee_id
     *
     * @param string $payee_id payee_id
     *
     * @return $this
     */
    public function setPayeeId($payee_id)
    {
        $this->container['payee_id'] = $payee_id;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string $category_id category_id
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets transfer_account_id
     *
     * @return string
     */
    public function getTransferAccountId()
    {
        return $this->container['transfer_account_id'];
    }

    /**
     * Sets transfer_account_id
     *
     * @param string $transfer_account_id If a transfer transaction, the account to which it transfers
     *
     * @return $this
     */
    public function setTransferAccountId($transfer_account_id)
    {
        $this->container['transfer_account_id'] = $transfer_account_id;

        return $this;
    }

    /**
     * Gets transfer_transaction_id
     *
     * @return string
     */
    public function getTransferTransactionId()
    {
        return $this->container['transfer_transaction_id'];
    }

    /**
     * Sets transfer_transaction_id
     *
     * @param string $transfer_transaction_id If a transfer transaction, the id of transaction on the other side of the transfer
     *
     * @return $this
     */
    public function setTransferTransactionId($transfer_transaction_id)
    {
        $this->container['transfer_transaction_id'] = $transfer_transaction_id;

        return $this;
    }

    /**
     * Gets matched_transaction_id
     *
     * @return string
     */
    public function getMatchedTransactionId()
    {
        return $this->container['matched_transaction_id'];
    }

    /**
     * Sets matched_transaction_id
     *
     * @param string $matched_transaction_id If transaction is matched, the id of the matched transaction
     *
     * @return $this
     */
    public function setMatchedTransactionId($matched_transaction_id)
    {
        $this->container['matched_transaction_id'] = $matched_transaction_id;

        return $this;
    }

    /**
     * Gets import_id
     *
     * @return string
     */
    public function getImportId()
    {
        return $this->container['import_id'];
    }

    /**
     * Sets import_id
     *
     * @param string $import_id If the transaction was imported, this field is a unique (by account) import identifier.  If this transaction was imported through File Based Import or Direct Import and not through the API, the import_id will have the format: 'YNAB:[milliunit_amount]:[iso_date]:[occurrence]'.  For example, a transaction dated 2015-12-30 in the amount of -$294.23 USD would have an import_id of 'YNAB:-294230:2015-12-30:1'.  If a second transaction on the same account was imported and had the same date and same amount, its import_id would be 'YNAB:-294230:2015-12-30:2'.
     *
     * @return $this
     */
    public function setImportId($import_id)
    {
        $this->container['import_id'] = $import_id;

        return $this;
    }

    /**
     * Gets import_payee_name
     *
     * @return string
     */
    public function getImportPayeeName()
    {
        return $this->container['import_payee_name'];
    }

    /**
     * Sets import_payee_name
     *
     * @param string $import_payee_name If the transaction was imported, the payee name that was used when importing and before applying any payee rename rules
     *
     * @return $this
     */
    public function setImportPayeeName($import_payee_name)
    {
        $this->container['import_payee_name'] = $import_payee_name;

        return $this;
    }

    /**
     * Gets import_payee_name_original
     *
     * @return string
     */
    public function getImportPayeeNameOriginal()
    {
        return $this->container['import_payee_name_original'];
    }

    /**
     * Sets import_payee_name_original
     *
     * @param string $import_payee_name_original If the transaction was imported, the original payee name as it appeared on the statement
     *
     * @return $this
     */
    public function setImportPayeeNameOriginal($import_payee_name_original)
    {
        $this->container['import_payee_name_original'] = $import_payee_name_original;

        return $this;
    }

    /**
     * Gets debt_transaction_type
     *
     * @return string
     */
    public function getDebtTransactionType()
    {
        return $this->container['debt_transaction_type'];
    }

    /**
     * Sets debt_transaction_type
     *
     * @param string $debt_transaction_type If the transaction is a debt/loan account transaction, the type of transaction
     *
     * @return $this
     */
    public function setDebtTransactionType($debt_transaction_type)
    {
        $allowedValues = $this->getDebtTransactionTypeAllowableValues();
        if (!is_null($debt_transaction_type) && !in_array($debt_transaction_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'debt_transaction_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['debt_transaction_type'] = $debt_transaction_type;

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
     * @param bool $deleted Whether or not the transaction has been deleted.  Deleted transactions will only be included in delta requests.
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
