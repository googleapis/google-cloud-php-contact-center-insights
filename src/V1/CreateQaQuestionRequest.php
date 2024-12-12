<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for creating a QaQuestion.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.CreateQaQuestionRequest</code>
 */
class CreateQaQuestionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource of the QaQuestion.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The QaQuestion to create.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.QaQuestion qa_question = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $qa_question = null;
    /**
     * Optional. A unique ID for the new question. This ID will become the final
     * component of the question's resource name. If no ID is specified, a
     * server-generated ID will be used.
     * This value should be 4-64 characters and must match the regular
     * expression `^[a-z0-9-]{4,64}$`. Valid characters are `[a-z][0-9]-`.
     *
     * Generated from protobuf field <code>string qa_question_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $qa_question_id = '';

    /**
     * @param string                                            $parent       Required. The parent resource of the QaQuestion. Please see
     *                                                                        {@see ContactCenterInsightsClient::qaScorecardRevisionName()} for help formatting this field.
     * @param \Google\Cloud\ContactCenterInsights\V1\QaQuestion $qaQuestion   Required. The QaQuestion to create.
     * @param string                                            $qaQuestionId Optional. A unique ID for the new question. This ID will become the final
     *                                                                        component of the question's resource name. If no ID is specified, a
     *                                                                        server-generated ID will be used.
     *
     *                                                                        This value should be 4-64 characters and must match the regular
     *                                                                        expression `^[a-z0-9-]{4,64}$`. Valid characters are `[a-z][0-9]-`.
     *
     * @return \Google\Cloud\ContactCenterInsights\V1\CreateQaQuestionRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\ContactCenterInsights\V1\QaQuestion $qaQuestion, string $qaQuestionId): self
    {
        return (new self())
            ->setParent($parent)
            ->setQaQuestion($qaQuestion)
            ->setQaQuestionId($qaQuestionId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource of the QaQuestion.
     *     @type \Google\Cloud\ContactCenterInsights\V1\QaQuestion $qa_question
     *           Required. The QaQuestion to create.
     *     @type string $qa_question_id
     *           Optional. A unique ID for the new question. This ID will become the final
     *           component of the question's resource name. If no ID is specified, a
     *           server-generated ID will be used.
     *           This value should be 4-64 characters and must match the regular
     *           expression `^[a-z0-9-]{4,64}$`. Valid characters are `[a-z][0-9]-`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource of the QaQuestion.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource of the QaQuestion.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The QaQuestion to create.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.QaQuestion qa_question = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\QaQuestion|null
     */
    public function getQaQuestion()
    {
        return $this->qa_question;
    }

    public function hasQaQuestion()
    {
        return isset($this->qa_question);
    }

    public function clearQaQuestion()
    {
        unset($this->qa_question);
    }

    /**
     * Required. The QaQuestion to create.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.QaQuestion qa_question = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\QaQuestion $var
     * @return $this
     */
    public function setQaQuestion($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\QaQuestion::class);
        $this->qa_question = $var;

        return $this;
    }

    /**
     * Optional. A unique ID for the new question. This ID will become the final
     * component of the question's resource name. If no ID is specified, a
     * server-generated ID will be used.
     * This value should be 4-64 characters and must match the regular
     * expression `^[a-z0-9-]{4,64}$`. Valid characters are `[a-z][0-9]-`.
     *
     * Generated from protobuf field <code>string qa_question_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getQaQuestionId()
    {
        return $this->qa_question_id;
    }

    /**
     * Optional. A unique ID for the new question. This ID will become the final
     * component of the question's resource name. If no ID is specified, a
     * server-generated ID will be used.
     * This value should be 4-64 characters and must match the regular
     * expression `^[a-z0-9-]{4,64}$`. Valid characters are `[a-z][0-9]-`.
     *
     * Generated from protobuf field <code>string qa_question_id = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setQaQuestionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->qa_question_id = $var;

        return $this;
    }

}
