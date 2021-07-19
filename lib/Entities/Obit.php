<?php
/**
 * Obit
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Obada
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OBADA API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.0.1
 * Contact: techops@obada.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Obada\Entities;

use \ArrayAccess;
use \Obada\ObjectSerializer;

/**
 * Obit Class Doc Comment
 *
 * @category Class
 * @description OBADA record.
 * @package  Obada
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Obit implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Obit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'obitDid' => 'string',
        'usn' => 'string',
        'obitAlternateIds' => 'string[]',
        'ownerDid' => 'string',
        'obdDid' => 'string',
        'obitStatus' => 'string',
        'manufacturer' => 'string',
        'partNumber' => 'string',
        'serialNumberHash' => 'string',
        'metadata' => '\Obada\Entities\MetaDataRecord[]',
        'docLinks' => '\Obada\Entities\DocumentLink[]',
        'structuredData' => '\Obada\Entities\StructureDataRecord[]',
        'modifiedOn' => 'int',
        'rootHash' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'obitDid' => null,
        'usn' => null,
        'obitAlternateIds' => null,
        'ownerDid' => null,
        'obdDid' => null,
        'obitStatus' => null,
        'manufacturer' => null,
        'partNumber' => null,
        'serialNumberHash' => null,
        'metadata' => null,
        'docLinks' => null,
        'structuredData' => null,
        'modifiedOn' => 'int64',
        'rootHash' => null
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
        'obitDid' => 'obit_did',
        'usn' => 'usn',
        'obitAlternateIds' => 'obit_alternate_ids',
        'ownerDid' => 'owner_did',
        'obdDid' => 'obd_did',
        'obitStatus' => 'obit_status',
        'manufacturer' => 'manufacturer',
        'partNumber' => 'part_number',
        'serialNumberHash' => 'serial_number_hash',
        'metadata' => 'metadata',
        'docLinks' => 'doc_links',
        'structuredData' => 'structured_data',
        'modifiedOn' => 'modified_on',
        'rootHash' => 'root_hash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'obitDid' => 'setObitDid',
        'usn' => 'setUsn',
        'obitAlternateIds' => 'setObitAlternateIds',
        'ownerDid' => 'setOwnerDid',
        'obdDid' => 'setObdDid',
        'obitStatus' => 'setObitStatus',
        'manufacturer' => 'setManufacturer',
        'partNumber' => 'setPartNumber',
        'serialNumberHash' => 'setSerialNumberHash',
        'metadata' => 'setMetadata',
        'docLinks' => 'setDocLinks',
        'structuredData' => 'setStructuredData',
        'modifiedOn' => 'setModifiedOn',
        'rootHash' => 'setRootHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'obitDid' => 'getObitDid',
        'usn' => 'getUsn',
        'obitAlternateIds' => 'getObitAlternateIds',
        'ownerDid' => 'getOwnerDid',
        'obdDid' => 'getObdDid',
        'obitStatus' => 'getObitStatus',
        'manufacturer' => 'getManufacturer',
        'partNumber' => 'getPartNumber',
        'serialNumberHash' => 'getSerialNumberHash',
        'metadata' => 'getMetadata',
        'docLinks' => 'getDocLinks',
        'structuredData' => 'getStructuredData',
        'modifiedOn' => 'getModifiedOn',
        'rootHash' => 'getRootHash'
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
        $this->container['obitDid'] = $data['obitDid'] ?? null;
        $this->container['usn'] = $data['usn'] ?? null;
        $this->container['obitAlternateIds'] = $data['obitAlternateIds'] ?? null;
        $this->container['ownerDid'] = $data['ownerDid'] ?? null;
        $this->container['obdDid'] = $data['obdDid'] ?? null;
        $this->container['obitStatus'] = $data['obitStatus'] ?? null;
        $this->container['manufacturer'] = $data['manufacturer'] ?? null;
        $this->container['partNumber'] = $data['partNumber'] ?? null;
        $this->container['serialNumberHash'] = $data['serialNumberHash'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['docLinks'] = $data['docLinks'] ?? null;
        $this->container['structuredData'] = $data['structuredData'] ?? null;
        $this->container['modifiedOn'] = $data['modifiedOn'] ?? null;
        $this->container['rootHash'] = $data['rootHash'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ownerDid'] === null) {
            $invalidProperties[] = "'ownerDid' can't be null";
        }
        if ($this->container['manufacturer'] === null) {
            $invalidProperties[] = "'manufacturer' can't be null";
        }
        if ($this->container['partNumber'] === null) {
            $invalidProperties[] = "'partNumber' can't be null";
        }
        if ($this->container['serialNumberHash'] === null) {
            $invalidProperties[] = "'serialNumberHash' can't be null";
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
     * Gets obitDid
     *
     * @return string|null
     */
    public function getObitDid()
    {
        return $this->container['obitDid'];
    }

    /**
     * Sets obitDid
     *
     * @param string|null $obitDid OBADA decentralized identifier
     *
     * @return self
     */
    public function setObitDid($obitDid)
    {
        $this->container['obitDid'] = $obitDid;

        return $this;
    }

    /**
     * Gets usn
     *
     * @return string|null
     */
    public function getUsn()
    {
        return $this->container['usn'];
    }

    /**
     * Sets usn
     *
     * @param string|null $usn Test An 8-12 character “URL Shortened” obit. Create the USN by Base(58) encoding the OBIT ID. Take the first 8 characters. Check for duplicates. With 16 million OBITs there is a 40% chance of collision. If so, add 4 characters. Repeat as necessary until a unique USN is generated.
     *
     * @return self
     */
    public function setUsn($usn)
    {
        $this->container['usn'] = $usn;

        return $this;
    }

    /**
     * Gets obitAlternateIds
     *
     * @return string[]|null
     */
    public function getObitAlternateIds()
    {
        return $this->container['obitAlternateIds'];
    }

    /**
     * Sets obitAlternateIds
     *
     * @param string[]|null $obitAlternateIds Client generated things. First hash + last hash
     *
     * @return self
     */
    public function setObitAlternateIds($obitAlternateIds)
    {
        $this->container['obitAlternateIds'] = $obitAlternateIds;

        return $this;
    }

    /**
     * Gets ownerDid
     *
     * @return string
     */
    public function getOwnerDid()
    {
        return $this->container['ownerDid'];
    }

    /**
     * Sets ownerDid
     *
     * @param string $ownerDid Owner is the person/entity that owns the obit and the physical asset it represents. Format is a DID like did:obada:owner:1234. However in the current version only test numbers will be used.
     *
     * @return self
     */
    public function setOwnerDid($ownerDid)
    {
        $this->container['ownerDid'] = $ownerDid;

        return $this;
    }

    /**
     * Gets obdDid
     *
     * @return string|null
     */
    public function getObdDid()
    {
        return $this->container['obdDid'];
    }

    /**
     * Sets obdDid
     *
     * @param string|null $obdDid Future use. The OBD DID is formatted like did:obada:obd:1234, which represents a utility token tracking orders and proofs.
     *
     * @return self
     */
    public function setObdDid($obdDid)
    {
        $this->container['obdDid'] = $obdDid;

        return $this;
    }

    /**
     * Gets obitStatus
     *
     * @return string|null
     */
    public function getObitStatus()
    {
        return $this->container['obitStatus'];
    }

    /**
     * Sets obitStatus
     *
     * @param string|null $obitStatus Represent available Obit statuses:   - FUNCTIONAL   - NON_FUNCTIONAL   - DISPOSED   - STOLEN   - DISABLED_BY_OWNER
     *
     * @return self
     */
    public function setObitStatus($obitStatus)
    {
        $this->container['obitStatus'] = $obitStatus;

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
     * @return self
     */
    public function setManufacturer($manufacturer)
    {
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets partNumber
     *
     * @return string
     */
    public function getPartNumber()
    {
        return $this->container['partNumber'];
    }

    /**
     * Sets partNumber
     *
     * @param string $partNumber Manufacturer provided. In cases where no part number is provided for the product, use model, or the most specific ID available from the manufacturer. MWCN2LL/A (an iPhone 11 Pro, Silver, 256GB, model A2160)
     *
     * @return self
     */
    public function setPartNumber($partNumber)
    {
        $this->container['partNumber'] = $partNumber;

        return $this;
    }

    /**
     * Gets serialNumberHash
     *
     * @return string
     */
    public function getSerialNumberHash()
    {
        return $this->container['serialNumberHash'];
    }

    /**
     * Sets serialNumberHash
     *
     * @param string $serialNumberHash Serial number hashed with sha256 hash function
     *
     * @return self
     */
    public function setSerialNumberHash($serialNumberHash)
    {
        $this->container['serialNumberHash'] = $serialNumberHash;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \Obada\Entities\MetaDataRecord[]|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \Obada\Entities\MetaDataRecord[]|null $metadata Get description from Rohi
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets docLinks
     *
     * @return \Obada\Entities\DocumentLink[]|null
     */
    public function getDocLinks()
    {
        return $this->container['docLinks'];
    }

    /**
     * Sets docLinks
     *
     * @param \Obada\Entities\DocumentLink[]|null $docLinks To generate this link, take an SHA-256 hash of the document, and link to it as https://www.some-website.com?h1=hash-of-document. Note this does not yet adhere to the hashlink standard.
     *
     * @return self
     */
    public function setDocLinks($docLinks)
    {
        $this->container['docLinks'] = $docLinks;

        return $this;
    }

    /**
     * Gets structuredData
     *
     * @return \Obada\Entities\StructureDataRecord[]|null
     */
    public function getStructuredData()
    {
        return $this->container['structuredData'];
    }

    /**
     * Sets structuredData
     *
     * @param \Obada\Entities\StructureDataRecord[]|null $structuredData Same as metadata but bigger. Key (string) => Value (string) (hash per line sha256(key + value))
     *
     * @return self
     */
    public function setStructuredData($structuredData)
    {
        $this->container['structuredData'] = $structuredData;

        return $this;
    }

    /**
     * Gets modifiedOn
     *
     * @return int|null
     */
    public function getModifiedOn()
    {
        return $this->container['modifiedOn'];
    }

    /**
     * Sets modifiedOn
     *
     * @param int|null $modifiedOn UNIX timestamp
     *
     * @return self
     */
    public function setModifiedOn($modifiedOn)
    {
        $this->container['modifiedOn'] = $modifiedOn;

        return $this;
    }

    /**
     * Gets rootHash
     *
     * @return string|null
     */
    public function getRootHash()
    {
        return $this->container['rootHash'];
    }

    /**
     * Sets rootHash
     *
     * @param string|null $rootHash Hash calculated by SHA256 (previous Obit root hash + Obit data). TODO: Discuss root hash with Rohi.
     *
     * @return self
     */
    public function setRootHash($rootHash)
    {
        $this->container['rootHash'] = $rootHash;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


