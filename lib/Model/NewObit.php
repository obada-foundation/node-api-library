<?php
/**
 * NewObit
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Obada\Client
 * @author   Obada Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OBADA API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the Obada document: 0.0.1
 * Contact: techops@obada.io
 * Generated by: https://openapi-generator.tech
 * Obada Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by Obada Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Obada\Client\Model;

use \ArrayAccess;
use \Obada\Client\ObjectSerializer;

/**
 * NewObit Class Doc Comment
 *
 * @category Class
 * @description New Obit request payload.
 * @package  Obada\Client
 * @author   Obada Generator team
 * @link     https://openapi-generator.tech
 */
class NewObit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewObit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'obit_did' => 'string',
        'usn' => 'string',
        'owner_did' => 'string',
        'obd_did' => 'string',
        'obit_status' => 'string',
        'manufacturer' => 'string',
        'part_number' => 'string',
        'serial_number_hash' => 'string',
        'metadata' => 'object[]',
        'doc_links' => 'object[]',
        'structured_data' => 'object[]',
        'modified_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'obit_did' => null,
        'usn' => null,
        'owner_did' => null,
        'obd_did' => null,
        'obit_status' => null,
        'manufacturer' => null,
        'part_number' => null,
        'serial_number_hash' => null,
        'metadata' => null,
        'doc_links' => null,
        'structured_data' => null,
        'modified_at' => 'date-time'
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
        'obit_did' => 'obit_did',
        'usn' => 'usn',
        'owner_did' => 'owner_did',
        'obd_did' => 'obd_did',
        'obit_status' => 'obit_status',
        'manufacturer' => 'manufacturer',
        'part_number' => 'part_number',
        'serial_number_hash' => 'serial_number_hash',
        'metadata' => 'metadata',
        'doc_links' => 'doc_links',
        'structured_data' => 'structured_data',
        'modified_at' => 'modified_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'obit_did' => 'setObitDid',
        'usn' => 'setUsn',
        'owner_did' => 'setOwnerDid',
        'obd_did' => 'setObdDid',
        'obit_status' => 'setObitStatus',
        'manufacturer' => 'setManufacturer',
        'part_number' => 'setPartNumber',
        'serial_number_hash' => 'setSerialNumberHash',
        'metadata' => 'setMetadata',
        'doc_links' => 'setDocLinks',
        'structured_data' => 'setStructuredData',
        'modified_at' => 'setModifiedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'obit_did' => 'getObitDid',
        'usn' => 'getUsn',
        'owner_did' => 'getOwnerDid',
        'obd_did' => 'getObdDid',
        'obit_status' => 'getObitStatus',
        'manufacturer' => 'getManufacturer',
        'part_number' => 'getPartNumber',
        'serial_number_hash' => 'getSerialNumberHash',
        'metadata' => 'getMetadata',
        'doc_links' => 'getDocLinks',
        'structured_data' => 'getStructuredData',
        'modified_at' => 'getModifiedAt'
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

    const OBIT_STATUS_FUNCTIONAL = 'FUNCTIONAL';
    const OBIT_STATUS_NON_FUNCTIONAL = 'NON_FUNCTIONAL';
    const OBIT_STATUS_DISPOSED = 'DISPOSED';
    const OBIT_STATUS_STOLEN = 'STOLEN';
    const OBIT_STATUS_DISABLED_BY_OWNER = 'DISABLED_BY_OWNER';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getObitStatusAllowableValues()
    {
        return [
            self::OBIT_STATUS_FUNCTIONAL,
            self::OBIT_STATUS_NON_FUNCTIONAL,
            self::OBIT_STATUS_DISPOSED,
            self::OBIT_STATUS_STOLEN,
            self::OBIT_STATUS_DISABLED_BY_OWNER,
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
        $this->container['obit_did'] = isset($data['obit_did']) ? $data['obit_did'] : null;
        $this->container['usn'] = isset($data['usn']) ? $data['usn'] : null;
        $this->container['owner_did'] = isset($data['owner_did']) ? $data['owner_did'] : null;
        $this->container['obd_did'] = isset($data['obd_did']) ? $data['obd_did'] : null;
        $this->container['obit_status'] = isset($data['obit_status']) ? $data['obit_status'] : null;
        $this->container['manufacturer'] = isset($data['manufacturer']) ? $data['manufacturer'] : null;
        $this->container['part_number'] = isset($data['part_number']) ? $data['part_number'] : null;
        $this->container['serial_number_hash'] = isset($data['serial_number_hash']) ? $data['serial_number_hash'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['doc_links'] = isset($data['doc_links']) ? $data['doc_links'] : null;
        $this->container['structured_data'] = isset($data['structured_data']) ? $data['structured_data'] : null;
        $this->container['modified_at'] = isset($data['modified_at']) ? $data['modified_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['obit_did'] === null) {
            $invalidProperties[] = "'obit_did' can't be null";
        }
        if ((mb_strlen($this->container['obit_did']) > 256)) {
            $invalidProperties[] = "invalid value for 'obit_did', the character length must be smaller than or equal to 256.";
        }

        if ($this->container['usn'] === null) {
            $invalidProperties[] = "'usn' can't be null";
        }
        if ($this->container['owner_did'] === null) {
            $invalidProperties[] = "'owner_did' can't be null";
        }
        $allowedValues = $this->getObitStatusAllowableValues();
        if (!is_null($this->container['obit_status']) && !in_array($this->container['obit_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'obit_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['manufacturer'] === null) {
            $invalidProperties[] = "'manufacturer' can't be null";
        }
        if ($this->container['part_number'] === null) {
            $invalidProperties[] = "'part_number' can't be null";
        }
        if ($this->container['serial_number_hash'] === null) {
            $invalidProperties[] = "'serial_number_hash' can't be null";
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
     * Gets obit_did
     *
     * @return string
     */
    public function getObitDid()
    {
        return $this->container['obit_did'];
    }

    /**
     * Sets obit_did
     *
     * @param string $obit_did OBADA decentralized identifier (max length Rohi?)
     *
     * @return $this
     */
    public function setObitDid($obit_did)
    {
        if ((mb_strlen($obit_did) > 256)) {
            throw new \InvalidArgumentException('invalid length for $obit_did when calling NewObit., must be smaller than or equal to 256.');
        }

        $this->container['obit_did'] = $obit_did;

        return $this;
    }

    /**
     * Gets usn
     *
     * @return string
     */
    public function getUsn()
    {
        return $this->container['usn'];
    }

    /**
     * Sets usn
     *
     * @param string $usn An 8-12 character “URL Shortened” obit. Create the USN by Base(58) encoding the OBIT ID. Take the first 8 characters. Check for duplicates. With 16 million OBITs there is a 40% chance of collision. If so, add 4 characters. Repeat as necessary until a unique USN is generated.
     *
     * @return $this
     */
    public function setUsn($usn)
    {
        $this->container['usn'] = $usn;

        return $this;
    }

    /**
     * Gets owner_did
     *
     * @return string
     */
    public function getOwnerDid()
    {
        return $this->container['owner_did'];
    }

    /**
     * Sets owner_did
     *
     * @param string $owner_did Owner is the person/entity that owns the obit and the physical asset it represents. Format is a DID like did:obada:owner:1234. However in the current version only test numbers will be used.
     *
     * @return $this
     */
    public function setOwnerDid($owner_did)
    {
        $this->container['owner_did'] = $owner_did;

        return $this;
    }

    /**
     * Gets obd_did
     *
     * @return string|null
     */
    public function getObdDid()
    {
        return $this->container['obd_did'];
    }

    /**
     * Sets obd_did
     *
     * @param string|null $obd_did Future use. The OBD DID is formatted like did:obada:obd:1234, which represents a utility token tracking orders and proofs.
     *
     * @return $this
     */
    public function setObdDid($obd_did)
    {
        $this->container['obd_did'] = $obd_did;

        return $this;
    }

    /**
     * Gets obit_status
     *
     * @return string|null
     */
    public function getObitStatus()
    {
        return $this->container['obit_status'];
    }

    /**
     * Sets obit_status
     *
     * @param string|null $obit_status Represent available Obit statuses:   - FUNCTIONAL   - NON_FUNCTIONAL   - DISPOSED   - STOLEN   - DISABLED_BY_OWNER
     *
     * @return $this
     */
    public function setObitStatus($obit_status)
    {
        $allowedValues = $this->getObitStatusAllowableValues();
        if (!is_null($obit_status) && !in_array($obit_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'obit_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['obit_status'] = $obit_status;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string $manufacturer Waiting more specific details from Rohi
     *
     * @return $this
     */
    public function setManufacturer($manufacturer)
    {
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets part_number
     *
     * @return string
     */
    public function getPartNumber()
    {
        return $this->container['part_number'];
    }

    /**
     * Sets part_number
     *
     * @param string $part_number Manufacturer provided. In cases where no part number is provided for the product, use model, or the most specific ID available from the manufacturer. MWCN2LL/A (an iPhone 11 Pro, Silver, 256GB, model A2160)
     *
     * @return $this
     */
    public function setPartNumber($part_number)
    {
        $this->container['part_number'] = $part_number;

        return $this;
    }

    /**
     * Gets serial_number_hash
     *
     * @return string
     */
    public function getSerialNumberHash()
    {
        return $this->container['serial_number_hash'];
    }

    /**
     * Sets serial_number_hash
     *
     * @param string $serial_number_hash Serial number hashed with sha256 hash function
     *
     * @return $this
     */
    public function setSerialNumberHash($serial_number_hash)
    {
        $this->container['serial_number_hash'] = $serial_number_hash;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object[]|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object[]|null $metadata Get description from Rohi
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets doc_links
     *
     * @return object[]|null
     */
    public function getDocLinks()
    {
        return $this->container['doc_links'];
    }

    /**
     * Sets doc_links
     *
     * @param object[]|null $doc_links To generate this link, take an SHA-256 hash of the document, and link to it as https://www.some-website.com?h1=hash-of-document. Note this does not yet adhere to the hashlink standard.
     *
     * @return $this
     */
    public function setDocLinks($doc_links)
    {
        $this->container['doc_links'] = $doc_links;

        return $this;
    }

    /**
     * Gets structured_data
     *
     * @return object[]|null
     */
    public function getStructuredData()
    {
        return $this->container['structured_data'];
    }

    /**
     * Sets structured_data
     *
     * @param object[]|null $structured_data Same as metadata but bigger. Key (string) => Value (string) (hash per line sha256(key + value))
     *
     * @return $this
     */
    public function setStructuredData($structured_data)
    {
        $this->container['structured_data'] = $structured_data;

        return $this;
    }

    /**
     * Gets modified_at
     *
     * @return \DateTime|null
     */
    public function getModifiedAt()
    {
        return $this->container['modified_at'];
    }

    /**
     * Sets modified_at
     *
     * @param \DateTime|null $modified_at modified_at
     *
     * @return $this
     */
    public function setModifiedAt($modified_at)
    {
        $this->container['modified_at'] = $modified_at;

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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


