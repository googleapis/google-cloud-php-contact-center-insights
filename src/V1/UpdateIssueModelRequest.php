<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to update an issue model.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.UpdateIssueModelRequest</code>
 */
class UpdateIssueModelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The new values for the issue model.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.IssueModel issue_model = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $issue_model = null;
    /**
     * The list of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * @param \Google\Cloud\ContactCenterInsights\V1\IssueModel $issueModel Required. The new values for the issue model.
     * @param \Google\Protobuf\FieldMask                        $updateMask The list of fields to be updated.
     *
     * @return \Google\Cloud\ContactCenterInsights\V1\UpdateIssueModelRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\ContactCenterInsights\V1\IssueModel $issueModel, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setIssueModel($issueModel)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ContactCenterInsights\V1\IssueModel $issue_model
     *           Required. The new values for the issue model.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The list of fields to be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The new values for the issue model.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.IssueModel issue_model = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\IssueModel|null
     */
    public function getIssueModel()
    {
        return $this->issue_model;
    }

    public function hasIssueModel()
    {
        return isset($this->issue_model);
    }

    public function clearIssueModel()
    {
        unset($this->issue_model);
    }

    /**
     * Required. The new values for the issue model.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.IssueModel issue_model = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\IssueModel $var
     * @return $this
     */
    public function setIssueModel($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\IssueModel::class);
        $this->issue_model = $var;

        return $this;
    }

    /**
     * The list of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The list of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

