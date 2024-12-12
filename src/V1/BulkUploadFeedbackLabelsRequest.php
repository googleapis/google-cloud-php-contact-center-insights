<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for bulk uploading feedback labels.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.BulkUploadFeedbackLabelsRequest</code>
 */
class BulkUploadFeedbackLabelsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource for new feedback labels.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. If set, upload will not happen and the labels will be validated.
     * If not set, then default behavior will be to upload the labels after
     * validation is complete.
     *
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $validate_only = false;
    protected $source;

    /**
     * @param string $parent Required. The parent resource for new feedback labels. Please see
     *                       {@see ContactCenterInsightsClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\ContactCenterInsights\V1\BulkUploadFeedbackLabelsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ContactCenterInsights\V1\BulkUploadFeedbackLabelsRequest\GcsSource $gcs_source
     *           A cloud storage bucket source.
     *     @type string $parent
     *           Required. The parent resource for new feedback labels.
     *     @type bool $validate_only
     *           Optional. If set, upload will not happen and the labels will be validated.
     *           If not set, then default behavior will be to upload the labels after
     *           validation is complete.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * A cloud storage bucket source.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.BulkUploadFeedbackLabelsRequest.GcsSource gcs_source = 2;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\BulkUploadFeedbackLabelsRequest\GcsSource|null
     */
    public function getGcsSource()
    {
        return $this->readOneof(2);
    }

    public function hasGcsSource()
    {
        return $this->hasOneof(2);
    }

    /**
     * A cloud storage bucket source.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.BulkUploadFeedbackLabelsRequest.GcsSource gcs_source = 2;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\BulkUploadFeedbackLabelsRequest\GcsSource $var
     * @return $this
     */
    public function setGcsSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\BulkUploadFeedbackLabelsRequest\GcsSource::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Required. The parent resource for new feedback labels.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource for new feedback labels.
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
     * Optional. If set, upload will not happen and the labels will be validated.
     * If not set, then default behavior will be to upload the labels after
     * validation is complete.
     *
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. If set, upload will not happen and the labels will be validated.
     * If not set, then default behavior will be to upload the labels after
     * validation is complete.
     *
     * Generated from protobuf field <code>bool validate_only = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}
