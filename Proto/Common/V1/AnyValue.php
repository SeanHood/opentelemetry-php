<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opentelemetry/proto/common/v1/common.proto

namespace Opentelemetry\Proto\Common\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AnyValue is used to represent any type of attribute value. AnyValue may contain a
 * primitive value such as a string or integer or it may contain an arbitrary nested
 * object containing arrays, key-value lists and primitives.
 *
 * Generated from protobuf message <code>opentelemetry.proto.common.v1.AnyValue</code>
 */
class AnyValue extends \Google\Protobuf\Internal\Message
{
    protected $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $string_value
     *     @type bool $bool_value
     *     @type int|string $int_value
     *     @type float $double_value
     *     @type \Opentelemetry\Proto\Common\V1\ArrayValue $array_value
     *     @type \Opentelemetry\Proto\Common\V1\KeyValueList $kvlist_value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opentelemetry\Proto\Common\V1\Common::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string string_value = 1;</code>
     * @return string
     */
    public function getStringValue()
    {
        return $this->readOneof(1);
    }

    public function hasStringValue()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>string string_value = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool bool_value = 2;</code>
     * @return bool
     */
    public function getBoolValue()
    {
        return $this->readOneof(2);
    }

    public function hasBoolValue()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>bool bool_value = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setBoolValue($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 int_value = 3;</code>
     * @return int|string
     */
    public function getIntValue()
    {
        return $this->readOneof(3);
    }

    public function hasIntValue()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>int64 int_value = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIntValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>double double_value = 4;</code>
     * @return float
     */
    public function getDoubleValue()
    {
        return $this->readOneof(4);
    }

    public function hasDoubleValue()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>double double_value = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.opentelemetry.proto.common.v1.ArrayValue array_value = 5;</code>
     * @return \Opentelemetry\Proto\Common\V1\ArrayValue
     */
    public function getArrayValue()
    {
        return $this->readOneof(5);
    }

    public function hasArrayValue()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.opentelemetry.proto.common.v1.ArrayValue array_value = 5;</code>
     * @param \Opentelemetry\Proto\Common\V1\ArrayValue $var
     * @return $this
     */
    public function setArrayValue($var)
    {
        GPBUtil::checkMessage($var, \Opentelemetry\Proto\Common\V1\ArrayValue::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.opentelemetry.proto.common.v1.KeyValueList kvlist_value = 6;</code>
     * @return \Opentelemetry\Proto\Common\V1\KeyValueList
     */
    public function getKvlistValue()
    {
        return $this->readOneof(6);
    }

    public function hasKvlistValue()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.opentelemetry.proto.common.v1.KeyValueList kvlist_value = 6;</code>
     * @param \Opentelemetry\Proto\Common\V1\KeyValueList $var
     * @return $this
     */
    public function setKvlistValue($var)
    {
        GPBUtil::checkMessage($var, \Opentelemetry\Proto\Common\V1\KeyValueList::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->whichOneof("value");
    }

}

