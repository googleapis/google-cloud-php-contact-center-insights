<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1\QueryMetricsResponse\Slice;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A data point contains the metric values mapped to an interval.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.QueryMetricsResponse.Slice.DataPoint</code>
 */
class DataPoint extends \Google\Protobuf\Internal\Message
{
    /**
     * The interval that this data point represents.
     * * If this is the total data point, the interval is
     * [starting create time, ending create time) from the request.
     * * If this a data point from the time series, the interval is
     * [time, time + time granularity from the request).
     *
     * Generated from protobuf field <code>.google.type.Interval interval = 1;</code>
     */
    protected $interval = null;
    protected $measure;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ContactCenterInsights\V1\QueryMetricsResponse\Slice\DataPoint\ConversationMeasure $conversation_measure
     *           The measure related to conversations.
     *     @type \Google\Type\Interval $interval
     *           The interval that this data point represents.
     *           * If this is the total data point, the interval is
     *           [starting create time, ending create time) from the request.
     *           * If this a data point from the time series, the interval is
     *           [time, time + time granularity from the request).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * The measure related to conversations.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.QueryMetricsResponse.Slice.DataPoint.ConversationMeasure conversation_measure = 2;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\QueryMetricsResponse\Slice\DataPoint\ConversationMeasure|null
     */
    public function getConversationMeasure()
    {
        return $this->readOneof(2);
    }

    public function hasConversationMeasure()
    {
        return $this->hasOneof(2);
    }

    /**
     * The measure related to conversations.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.QueryMetricsResponse.Slice.DataPoint.ConversationMeasure conversation_measure = 2;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\QueryMetricsResponse\Slice\DataPoint\ConversationMeasure $var
     * @return $this
     */
    public function setConversationMeasure($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\QueryMetricsResponse\Slice\DataPoint\ConversationMeasure::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * The interval that this data point represents.
     * * If this is the total data point, the interval is
     * [starting create time, ending create time) from the request.
     * * If this a data point from the time series, the interval is
     * [time, time + time granularity from the request).
     *
     * Generated from protobuf field <code>.google.type.Interval interval = 1;</code>
     * @return \Google\Type\Interval|null
     */
    public function getInterval()
    {
        return $this->interval;
    }

    public function hasInterval()
    {
        return isset($this->interval);
    }

    public function clearInterval()
    {
        unset($this->interval);
    }

    /**
     * The interval that this data point represents.
     * * If this is the total data point, the interval is
     * [starting create time, ending create time) from the request.
     * * If this a data point from the time series, the interval is
     * [time, time + time granularity from the request).
     *
     * Generated from protobuf field <code>.google.type.Interval interval = 1;</code>
     * @param \Google\Type\Interval $var
     * @return $this
     */
    public function setInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Interval::class);
        $this->interval = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getMeasure()
    {
        return $this->whichOneof("measure");
    }

}

