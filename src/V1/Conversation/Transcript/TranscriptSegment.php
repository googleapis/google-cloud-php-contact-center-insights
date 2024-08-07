<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/resources.proto

namespace Google\Cloud\ContactCenterInsights\V1\Conversation\Transcript;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A segment of a full transcript.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.Conversation.Transcript.TranscriptSegment</code>
 */
class TranscriptSegment extends \Google\Protobuf\Internal\Message
{
    /**
     * The time that the message occurred, if provided.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp message_time = 6;</code>
     */
    protected $message_time = null;
    /**
     * The text of this segment.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     */
    protected $text = '';
    /**
     * A confidence estimate between 0.0 and 1.0 of the fidelity of this
     * segment. A default value of 0.0 indicates that the value is unset.
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     */
    protected $confidence = 0.0;
    /**
     * A list of the word-specific information for each word in the segment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.Conversation.Transcript.TranscriptSegment.WordInfo words = 3;</code>
     */
    private $words;
    /**
     * The language code of this segment as a
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag.
     * Example: "en-US".
     *
     * Generated from protobuf field <code>string language_code = 4;</code>
     */
    protected $language_code = '';
    /**
     * For conversations derived from multi-channel audio, this is the channel
     * number corresponding to the audio from that channel. For
     * audioChannelCount = N, its output values can range from '1' to 'N'. A
     * channel tag of 0 indicates that the audio is mono.
     *
     * Generated from protobuf field <code>int32 channel_tag = 5;</code>
     */
    protected $channel_tag = 0;
    /**
     * The participant of this segment.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ConversationParticipant segment_participant = 9;</code>
     */
    protected $segment_participant = null;
    /**
     * CCAI metadata relating to the current transcript segment.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Conversation.Transcript.TranscriptSegment.DialogflowSegmentMetadata dialogflow_segment_metadata = 10;</code>
     */
    protected $dialogflow_segment_metadata = null;
    /**
     * The sentiment for this transcript segment.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.SentimentData sentiment = 11;</code>
     */
    protected $sentiment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $message_time
     *           The time that the message occurred, if provided.
     *     @type string $text
     *           The text of this segment.
     *     @type float $confidence
     *           A confidence estimate between 0.0 and 1.0 of the fidelity of this
     *           segment. A default value of 0.0 indicates that the value is unset.
     *     @type array<\Google\Cloud\ContactCenterInsights\V1\Conversation\Transcript\TranscriptSegment\WordInfo>|\Google\Protobuf\Internal\RepeatedField $words
     *           A list of the word-specific information for each word in the segment.
     *     @type string $language_code
     *           The language code of this segment as a
     *           [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag.
     *           Example: "en-US".
     *     @type int $channel_tag
     *           For conversations derived from multi-channel audio, this is the channel
     *           number corresponding to the audio from that channel. For
     *           audioChannelCount = N, its output values can range from '1' to 'N'. A
     *           channel tag of 0 indicates that the audio is mono.
     *     @type \Google\Cloud\ContactCenterInsights\V1\ConversationParticipant $segment_participant
     *           The participant of this segment.
     *     @type \Google\Cloud\ContactCenterInsights\V1\Conversation\Transcript\TranscriptSegment\DialogflowSegmentMetadata $dialogflow_segment_metadata
     *           CCAI metadata relating to the current transcript segment.
     *     @type \Google\Cloud\ContactCenterInsights\V1\SentimentData $sentiment
     *           The sentiment for this transcript segment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * The time that the message occurred, if provided.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp message_time = 6;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getMessageTime()
    {
        return $this->message_time;
    }

    public function hasMessageTime()
    {
        return isset($this->message_time);
    }

    public function clearMessageTime()
    {
        unset($this->message_time);
    }

    /**
     * The time that the message occurred, if provided.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp message_time = 6;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setMessageTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->message_time = $var;

        return $this;
    }

    /**
     * The text of this segment.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * The text of this segment.
     *
     * Generated from protobuf field <code>string text = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

    /**
     * A confidence estimate between 0.0 and 1.0 of the fidelity of this
     * segment. A default value of 0.0 indicates that the value is unset.
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * A confidence estimate between 0.0 and 1.0 of the fidelity of this
     * segment. A default value of 0.0 indicates that the value is unset.
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

    /**
     * A list of the word-specific information for each word in the segment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.Conversation.Transcript.TranscriptSegment.WordInfo words = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * A list of the word-specific information for each word in the segment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.contactcenterinsights.v1.Conversation.Transcript.TranscriptSegment.WordInfo words = 3;</code>
     * @param array<\Google\Cloud\ContactCenterInsights\V1\Conversation\Transcript\TranscriptSegment\WordInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWords($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ContactCenterInsights\V1\Conversation\Transcript\TranscriptSegment\WordInfo::class);
        $this->words = $arr;

        return $this;
    }

    /**
     * The language code of this segment as a
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag.
     * Example: "en-US".
     *
     * Generated from protobuf field <code>string language_code = 4;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * The language code of this segment as a
     * [BCP-47](https://www.rfc-editor.org/rfc/bcp/bcp47.txt) language tag.
     * Example: "en-US".
     *
     * Generated from protobuf field <code>string language_code = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * For conversations derived from multi-channel audio, this is the channel
     * number corresponding to the audio from that channel. For
     * audioChannelCount = N, its output values can range from '1' to 'N'. A
     * channel tag of 0 indicates that the audio is mono.
     *
     * Generated from protobuf field <code>int32 channel_tag = 5;</code>
     * @return int
     */
    public function getChannelTag()
    {
        return $this->channel_tag;
    }

    /**
     * For conversations derived from multi-channel audio, this is the channel
     * number corresponding to the audio from that channel. For
     * audioChannelCount = N, its output values can range from '1' to 'N'. A
     * channel tag of 0 indicates that the audio is mono.
     *
     * Generated from protobuf field <code>int32 channel_tag = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setChannelTag($var)
    {
        GPBUtil::checkInt32($var);
        $this->channel_tag = $var;

        return $this;
    }

    /**
     * The participant of this segment.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ConversationParticipant segment_participant = 9;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\ConversationParticipant|null
     */
    public function getSegmentParticipant()
    {
        return $this->segment_participant;
    }

    public function hasSegmentParticipant()
    {
        return isset($this->segment_participant);
    }

    public function clearSegmentParticipant()
    {
        unset($this->segment_participant);
    }

    /**
     * The participant of this segment.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ConversationParticipant segment_participant = 9;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\ConversationParticipant $var
     * @return $this
     */
    public function setSegmentParticipant($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\ConversationParticipant::class);
        $this->segment_participant = $var;

        return $this;
    }

    /**
     * CCAI metadata relating to the current transcript segment.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Conversation.Transcript.TranscriptSegment.DialogflowSegmentMetadata dialogflow_segment_metadata = 10;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\Conversation\Transcript\TranscriptSegment\DialogflowSegmentMetadata|null
     */
    public function getDialogflowSegmentMetadata()
    {
        return $this->dialogflow_segment_metadata;
    }

    public function hasDialogflowSegmentMetadata()
    {
        return isset($this->dialogflow_segment_metadata);
    }

    public function clearDialogflowSegmentMetadata()
    {
        unset($this->dialogflow_segment_metadata);
    }

    /**
     * CCAI metadata relating to the current transcript segment.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.Conversation.Transcript.TranscriptSegment.DialogflowSegmentMetadata dialogflow_segment_metadata = 10;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\Conversation\Transcript\TranscriptSegment\DialogflowSegmentMetadata $var
     * @return $this
     */
    public function setDialogflowSegmentMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\Conversation\Transcript\TranscriptSegment\DialogflowSegmentMetadata::class);
        $this->dialogflow_segment_metadata = $var;

        return $this;
    }

    /**
     * The sentiment for this transcript segment.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.SentimentData sentiment = 11;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\SentimentData|null
     */
    public function getSentiment()
    {
        return $this->sentiment;
    }

    public function hasSentiment()
    {
        return isset($this->sentiment);
    }

    public function clearSentiment()
    {
        unset($this->sentiment);
    }

    /**
     * The sentiment for this transcript segment.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.SentimentData sentiment = 11;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\SentimentData $var
     * @return $this
     */
    public function setSentiment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\SentimentData::class);
        $this->sentiment = $var;

        return $this;
    }

}


