<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1\IngestConversationsRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration that applies to all conversations.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.IngestConversationsRequest.ConversationConfig</code>
 */
class ConversationConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * An opaque, user-specified string representing the human agent who handled
     * the conversations.
     *
     * Generated from protobuf field <code>string agent_id = 1;</code>
     */
    protected $agent_id = '';
    /**
     * Optional. Indicates which of the channels, 1 or 2, contains the agent.
     * Note that this must be set for conversations to be properly displayed and
     * analyzed.
     *
     * Generated from protobuf field <code>int32 agent_channel = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $agent_channel = 0;
    /**
     * Optional. Indicates which of the channels, 1 or 2, contains the agent.
     * Note that this must be set for conversations to be properly displayed and
     * analyzed.
     *
     * Generated from protobuf field <code>int32 customer_channel = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $customer_channel = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $agent_id
     *           An opaque, user-specified string representing the human agent who handled
     *           the conversations.
     *     @type int $agent_channel
     *           Optional. Indicates which of the channels, 1 or 2, contains the agent.
     *           Note that this must be set for conversations to be properly displayed and
     *           analyzed.
     *     @type int $customer_channel
     *           Optional. Indicates which of the channels, 1 or 2, contains the agent.
     *           Note that this must be set for conversations to be properly displayed and
     *           analyzed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * An opaque, user-specified string representing the human agent who handled
     * the conversations.
     *
     * Generated from protobuf field <code>string agent_id = 1;</code>
     * @return string
     */
    public function getAgentId()
    {
        return $this->agent_id;
    }

    /**
     * An opaque, user-specified string representing the human agent who handled
     * the conversations.
     *
     * Generated from protobuf field <code>string agent_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAgentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->agent_id = $var;

        return $this;
    }

    /**
     * Optional. Indicates which of the channels, 1 or 2, contains the agent.
     * Note that this must be set for conversations to be properly displayed and
     * analyzed.
     *
     * Generated from protobuf field <code>int32 agent_channel = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getAgentChannel()
    {
        return $this->agent_channel;
    }

    /**
     * Optional. Indicates which of the channels, 1 or 2, contains the agent.
     * Note that this must be set for conversations to be properly displayed and
     * analyzed.
     *
     * Generated from protobuf field <code>int32 agent_channel = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setAgentChannel($var)
    {
        GPBUtil::checkInt32($var);
        $this->agent_channel = $var;

        return $this;
    }

    /**
     * Optional. Indicates which of the channels, 1 or 2, contains the agent.
     * Note that this must be set for conversations to be properly displayed and
     * analyzed.
     *
     * Generated from protobuf field <code>int32 customer_channel = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getCustomerChannel()
    {
        return $this->customer_channel;
    }

    /**
     * Optional. Indicates which of the channels, 1 or 2, contains the agent.
     * Note that this must be set for conversations to be properly displayed and
     * analyzed.
     *
     * Generated from protobuf field <code>int32 customer_channel = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setCustomerChannel($var)
    {
        GPBUtil::checkInt32($var);
        $this->customer_channel = $var;

        return $this;
    }

}


