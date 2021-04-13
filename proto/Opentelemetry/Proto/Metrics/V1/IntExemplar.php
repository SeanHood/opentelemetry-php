<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opentelemetry/proto/metrics/v1/metrics.proto

namespace Opentelemetry\Proto\Metrics\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A representation of an exemplar, which is a sample input int measurement.
 * Exemplars also hold information about the environment when the measurement
 * was recorded, for example the span and trace ID of the active span when the
 * exemplar was recorded.
 *
 * Generated from protobuf message <code>opentelemetry.proto.metrics.v1.IntExemplar</code>
 */
class IntExemplar extends \Google\Protobuf\Internal\Message
{
    /**
     * The set of labels that were filtered out by the aggregator, but recorded
     * alongside the original measurement. Only labels that were filtered out
     * by the aggregator should be included
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.common.v1.StringKeyValue filtered_labels = 1;</code>
     */
    private $filtered_labels;
    /**
     * time_unix_nano is the exact time when this exemplar was recorded
     * Value is UNIX Epoch time in nanoseconds since 00:00:00 UTC on 1 January
     * 1970.
     *
     * Generated from protobuf field <code>fixed64 time_unix_nano = 2;</code>
     */
    private $time_unix_nano = 0;
    /**
     * Numerical int value of the measurement that was recorded.
     *
     * Generated from protobuf field <code>sfixed64 value = 3;</code>
     */
    private $value = 0;
    /**
     * (Optional) Span ID of the exemplar trace.
     * span_id may be missing if the measurement is not recorded inside a trace
     * or if the trace is not sampled.
     *
     * Generated from protobuf field <code>bytes span_id = 4;</code>
     */
    private $span_id = '';
    /**
     * (Optional) Trace ID of the exemplar trace.
     * trace_id may be missing if the measurement is not recorded inside a trace
     * or if the trace is not sampled.
     *
     * Generated from protobuf field <code>bytes trace_id = 5;</code>
     */
    private $trace_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Opentelemetry\Proto\Common\V1\StringKeyValue[]|\Google\Protobuf\Internal\RepeatedField $filtered_labels
     *           The set of labels that were filtered out by the aggregator, but recorded
     *           alongside the original measurement. Only labels that were filtered out
     *           by the aggregator should be included
     *     @type int|string $time_unix_nano
     *           time_unix_nano is the exact time when this exemplar was recorded
     *           Value is UNIX Epoch time in nanoseconds since 00:00:00 UTC on 1 January
     *           1970.
     *     @type int|string $value
     *           Numerical int value of the measurement that was recorded.
     *     @type string $span_id
     *           (Optional) Span ID of the exemplar trace.
     *           span_id may be missing if the measurement is not recorded inside a trace
     *           or if the trace is not sampled.
     *     @type string $trace_id
     *           (Optional) Trace ID of the exemplar trace.
     *           trace_id may be missing if the measurement is not recorded inside a trace
     *           or if the trace is not sampled.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opentelemetry\Proto\Metrics\V1\Metrics::initOnce();
        parent::__construct($data);
    }

    /**
     * The set of labels that were filtered out by the aggregator, but recorded
     * alongside the original measurement. Only labels that were filtered out
     * by the aggregator should be included
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.common.v1.StringKeyValue filtered_labels = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFilteredLabels()
    {
        return $this->filtered_labels;
    }

    /**
     * The set of labels that were filtered out by the aggregator, but recorded
     * alongside the original measurement. Only labels that were filtered out
     * by the aggregator should be included
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.common.v1.StringKeyValue filtered_labels = 1;</code>
     * @param \Opentelemetry\Proto\Common\V1\StringKeyValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFilteredLabels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Opentelemetry\Proto\Common\V1\StringKeyValue::class);
        $this->filtered_labels = $arr;

        return $this;
    }

    /**
     * time_unix_nano is the exact time when this exemplar was recorded
     * Value is UNIX Epoch time in nanoseconds since 00:00:00 UTC on 1 January
     * 1970.
     *
     * Generated from protobuf field <code>fixed64 time_unix_nano = 2;</code>
     * @return int|string
     */
    public function getTimeUnixNano()
    {
        return $this->time_unix_nano;
    }

    /**
     * time_unix_nano is the exact time when this exemplar was recorded
     * Value is UNIX Epoch time in nanoseconds since 00:00:00 UTC on 1 January
     * 1970.
     *
     * Generated from protobuf field <code>fixed64 time_unix_nano = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeUnixNano($var)
    {
        GPBUtil::checkUint64($var);
        $this->time_unix_nano = $var;

        return $this;
    }

    /**
     * Numerical int value of the measurement that was recorded.
     *
     * Generated from protobuf field <code>sfixed64 value = 3;</code>
     * @return int|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Numerical int value of the measurement that was recorded.
     *
     * Generated from protobuf field <code>sfixed64 value = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->value = $var;

        return $this;
    }

    /**
     * (Optional) Span ID of the exemplar trace.
     * span_id may be missing if the measurement is not recorded inside a trace
     * or if the trace is not sampled.
     *
     * Generated from protobuf field <code>bytes span_id = 4;</code>
     * @return string
     */
    public function getSpanId()
    {
        return $this->span_id;
    }

    /**
     * (Optional) Span ID of the exemplar trace.
     * span_id may be missing if the measurement is not recorded inside a trace
     * or if the trace is not sampled.
     *
     * Generated from protobuf field <code>bytes span_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setSpanId($var)
    {
        GPBUtil::checkString($var, False);
        $this->span_id = $var;

        return $this;
    }

    /**
     * (Optional) Trace ID of the exemplar trace.
     * trace_id may be missing if the measurement is not recorded inside a trace
     * or if the trace is not sampled.
     *
     * Generated from protobuf field <code>bytes trace_id = 5;</code>
     * @return string
     */
    public function getTraceId()
    {
        return $this->trace_id;
    }

    /**
     * (Optional) Trace ID of the exemplar trace.
     * trace_id may be missing if the measurement is not recorded inside a trace
     * or if the trace is not sampled.
     *
     * Generated from protobuf field <code>bytes trace_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTraceId($var)
    {
        GPBUtil::checkString($var, False);
        $this->trace_id = $var;

        return $this;
    }

}

