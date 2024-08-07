<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Agent Assist Smart Compose suggestion data.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.SmartComposeSuggestionData</code>
 */
class SmartComposeSuggestionData extends \Google\Protobuf\Internal\Message
{
    /**
     * The content of the suggestion.
     *
     * Generated from protobuf field <code>string suggestion = 1;</code>
     */
    protected $suggestion = '';
    /**
     * The system's confidence score that this suggestion is a good match for this
     * conversation, ranging from 0.0 (completely uncertain) to 1.0 (completely
     * certain).
     *
     * Generated from protobuf field <code>double confidence_score = 2;</code>
     */
    protected $confidence_score = 0.0;
    /**
     * Map that contains metadata about the Smart Compose suggestion and the
     * document from which it originates.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 3;</code>
     */
    private $metadata;
    /**
     * The name of the answer record.
     * Format:
     * projects/{project}/locations/{location}/answerRecords/{answer_record}
     *
     * Generated from protobuf field <code>string query_record = 4;</code>
     */
    protected $query_record = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $suggestion
     *           The content of the suggestion.
     *     @type float $confidence_score
     *           The system's confidence score that this suggestion is a good match for this
     *           conversation, ranging from 0.0 (completely uncertain) to 1.0 (completely
     *           certain).
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *           Map that contains metadata about the Smart Compose suggestion and the
     *           document from which it originates.
     *     @type string $query_record
     *           The name of the answer record.
     *           Format:
     *           projects/{project}/locations/{location}/answerRecords/{answer_record}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The content of the suggestion.
     *
     * Generated from protobuf field <code>string suggestion = 1;</code>
     * @return string
     */
    public function getSuggestion()
    {
        return $this->suggestion;
    }

    /**
     * The content of the suggestion.
     *
     * Generated from protobuf field <code>string suggestion = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSuggestion($var)
    {
        GPBUtil::checkString($var, True);
        $this->suggestion = $var;

        return $this;
    }

    /**
     * The system's confidence score that this suggestion is a good match for this
     * conversation, ranging from 0.0 (completely uncertain) to 1.0 (completely
     * certain).
     *
     * Generated from protobuf field <code>double confidence_score = 2;</code>
     * @return float
     */
    public function getConfidenceScore()
    {
        return $this->confidence_score;
    }

    /**
     * The system's confidence score that this suggestion is a good match for this
     * conversation, ranging from 0.0 (completely uncertain) to 1.0 (completely
     * certain).
     *
     * Generated from protobuf field <code>double confidence_score = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidenceScore($var)
    {
        GPBUtil::checkDouble($var);
        $this->confidence_score = $var;

        return $this;
    }

    /**
     * Map that contains metadata about the Smart Compose suggestion and the
     * document from which it originates.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Map that contains metadata about the Smart Compose suggestion and the
     * document from which it originates.
     *
     * Generated from protobuf field <code>map<string, string> metadata = 3;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

    /**
     * The name of the answer record.
     * Format:
     * projects/{project}/locations/{location}/answerRecords/{answer_record}
     *
     * Generated from protobuf field <code>string query_record = 4;</code>
     * @return string
     */
    public function getQueryRecord()
    {
        return $this->query_record;
    }

    /**
     * The name of the answer record.
     * Format:
     * projects/{project}/locations/{location}/answerRecords/{answer_record}
     *
     * Generated from protobuf field <code>string query_record = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setQueryRecord($var)
    {
        GPBUtil::checkString($var, True);
        $this->query_record = $var;

        return $this;
    }

}

