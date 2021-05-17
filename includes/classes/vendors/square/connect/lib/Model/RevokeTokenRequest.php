<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * RevokeTokenRequest Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class RevokeTokenRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'client_id' => 'string',
        'access_token' => 'string',
        'merchant_id' => 'string',
        'revoke_only_access_token' => 'bool'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'client_id' => 'client_id',
        'access_token' => 'access_token',
        'merchant_id' => 'merchant_id',
        'revoke_only_access_token' => 'revoke_only_access_token'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'client_id' => 'setClientId',
        'access_token' => 'setAccessToken',
        'merchant_id' => 'setMerchantId',
        'revoke_only_access_token' => 'setRevokeOnlyAccessToken'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'client_id' => 'getClientId',
        'access_token' => 'getAccessToken',
        'merchant_id' => 'getMerchantId',
        'revoke_only_access_token' => 'getRevokeOnlyAccessToken'
    );
  
    /**
      * $client_id The Square issued ID for your application, available from the [application dashboard](https://connect.squareup.com/apps).
      * @var string
      */
    protected $client_id;
    /**
      * $access_token The access token of the merchant whose token you want to revoke. Do not provide a value for merchant_id if you provide this parameter.
      * @var string
      */
    protected $access_token;
    /**
      * $merchant_id The ID of the merchant whose token you want to revoke. Do not provide a value for access_token if you provide this parameter.
      * @var string
      */
    protected $merchant_id;
    /**
      * $revoke_only_access_token If `true`, terminate the given single access token, but do not terminate the entire authorization. Default: `false`
      * @var bool
      */
    protected $revoke_only_access_token;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["client_id"])) {
              $this->client_id = $data["client_id"];
            } else {
              $this->client_id = null;
            }
            if (isset($data["access_token"])) {
              $this->access_token = $data["access_token"];
            } else {
              $this->access_token = null;
            }
            if (isset($data["merchant_id"])) {
              $this->merchant_id = $data["merchant_id"];
            } else {
              $this->merchant_id = null;
            }
            if (isset($data["revoke_only_access_token"])) {
              $this->revoke_only_access_token = $data["revoke_only_access_token"];
            } else {
              $this->revoke_only_access_token = null;
            }
        }
    }
    /**
     * Gets client_id
     * @return string
     */
    public function getClientId()
    {
        return $this->client_id;
    }
  
    /**
     * Sets client_id
     * @param string $client_id The Square issued ID for your application, available from the [application dashboard](https://connect.squareup.com/apps).
     * @return $this
     */
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;
        return $this;
    }
    /**
     * Gets access_token
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }
  
    /**
     * Sets access_token
     * @param string $access_token The access token of the merchant whose token you want to revoke. Do not provide a value for merchant_id if you provide this parameter.
     * @return $this
     */
    public function setAccessToken($access_token)
    {
        $this->access_token = $access_token;
        return $this;
    }
    /**
     * Gets merchant_id
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchant_id;
    }
  
    /**
     * Sets merchant_id
     * @param string $merchant_id The ID of the merchant whose token you want to revoke. Do not provide a value for access_token if you provide this parameter.
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->merchant_id = $merchant_id;
        return $this;
    }
    /**
     * Gets revoke_only_access_token
     * @return bool
     */
    public function getRevokeOnlyAccessToken()
    {
        return $this->revoke_only_access_token;
    }
  
    /**
     * Sets revoke_only_access_token
     * @param bool $revoke_only_access_token If `true`, terminate the given single access token, but do not terminate the entire authorization. Default: `false`
     * @return $this
     */
    public function setRevokeOnlyAccessToken($revoke_only_access_token)
    {
        $this->revoke_only_access_token = $revoke_only_access_token;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
