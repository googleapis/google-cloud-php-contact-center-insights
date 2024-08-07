<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response of listing conversations.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.ListConversationsResponse</code>
 */
class ListConversationsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The conversations that match the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.Conversation conversations = 1;</code>
     */
    private $conversations;
    /**
     * A token which can be sent as `page_token` to retrieve the next page. If
     * this field is set, it means there is another page available. If it is not
     * set, it means no other pages are available.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\ContactCenterInsights\V1\Conversation>|\Google\Protobuf\Internal\RepeatedField $conversations
     *           The conversations that match the request.
     *     @type string $next_page_token
     *           A token which can be sent as `page_token` to retrieve the next page. If
     *           this field is set, it means there is another page available. If it is not
     *           set, it means no other pages are available.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * The conversations that match the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.Conversation conversations = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConversations()
    {
        return $this->conversations;
    }

    /**
     * The conversations that match the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.Conversation conversations = 1;</code>
     * @param array<\Google\Cloud\ContactCenterInsights\V1\Conversation>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConversations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ContactCenterInsights\V1\Conversation::class);
        $this->conversations = $arr;

        return $this;
    }

    /**
     * A token which can be sent as `page_token` to retrieve the next page. If
     * this field is set, it means there is another page available. If it is not
     * set, it means no other pages are available.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token which can be sent as `page_token` to retrieve the next page. If
     * this field is set, it means there is another page available. If it is not
     * set, it means no other pages are available.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

