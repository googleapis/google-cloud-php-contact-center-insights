<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/contactcenterinsights/v1/contact_center_insights.proto

namespace Google\Cloud\ContactCenterInsights\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request to export insights.
 *
 * Generated from protobuf message <code>google.cloud.contactcenterinsights.v1.ExportInsightsDataRequest</code>
 */
class ExportInsightsDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource to export data from.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * A filter to reduce results to a specific subset. Useful for exporting
     * conversations with specific properties.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     */
    protected $filter = '';
    /**
     * A fully qualified KMS key name for BigQuery tables protected by CMEK.
     * Format:
     * projects/{project}/locations/{location}/keyRings/{keyring}/cryptoKeys/{key}/cryptoKeyVersions/{version}
     *
     * Generated from protobuf field <code>string kms_key = 4;</code>
     */
    protected $kms_key = '';
    /**
     * Options for what to do if the destination table already exists.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ExportInsightsDataRequest.WriteDisposition write_disposition = 5;</code>
     */
    protected $write_disposition = 0;
    protected $destination;

    /**
     * @param string $parent Required. The parent resource to export data from. Please see
     *                       {@see ContactCenterInsightsClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\ContactCenterInsights\V1\ExportInsightsDataRequest
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
     *     @type \Google\Cloud\ContactCenterInsights\V1\ExportInsightsDataRequest\BigQueryDestination $big_query_destination
     *           Specified if sink is a BigQuery table.
     *     @type string $parent
     *           Required. The parent resource to export data from.
     *     @type string $filter
     *           A filter to reduce results to a specific subset. Useful for exporting
     *           conversations with specific properties.
     *     @type string $kms_key
     *           A fully qualified KMS key name for BigQuery tables protected by CMEK.
     *           Format:
     *           projects/{project}/locations/{location}/keyRings/{keyring}/cryptoKeys/{key}/cryptoKeyVersions/{version}
     *     @type int $write_disposition
     *           Options for what to do if the destination table already exists.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Contactcenterinsights\V1\ContactCenterInsights::initOnce();
        parent::__construct($data);
    }

    /**
     * Specified if sink is a BigQuery table.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ExportInsightsDataRequest.BigQueryDestination big_query_destination = 2;</code>
     * @return \Google\Cloud\ContactCenterInsights\V1\ExportInsightsDataRequest\BigQueryDestination|null
     */
    public function getBigQueryDestination()
    {
        return $this->readOneof(2);
    }

    public function hasBigQueryDestination()
    {
        return $this->hasOneof(2);
    }

    /**
     * Specified if sink is a BigQuery table.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ExportInsightsDataRequest.BigQueryDestination big_query_destination = 2;</code>
     * @param \Google\Cloud\ContactCenterInsights\V1\ExportInsightsDataRequest\BigQueryDestination $var
     * @return $this
     */
    public function setBigQueryDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ContactCenterInsights\V1\ExportInsightsDataRequest\BigQueryDestination::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Required. The parent resource to export data from.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource to export data from.
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
     * A filter to reduce results to a specific subset. Useful for exporting
     * conversations with specific properties.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * A filter to reduce results to a specific subset. Useful for exporting
     * conversations with specific properties.
     *
     * Generated from protobuf field <code>string filter = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * A fully qualified KMS key name for BigQuery tables protected by CMEK.
     * Format:
     * projects/{project}/locations/{location}/keyRings/{keyring}/cryptoKeys/{key}/cryptoKeyVersions/{version}
     *
     * Generated from protobuf field <code>string kms_key = 4;</code>
     * @return string
     */
    public function getKmsKey()
    {
        return $this->kms_key;
    }

    /**
     * A fully qualified KMS key name for BigQuery tables protected by CMEK.
     * Format:
     * projects/{project}/locations/{location}/keyRings/{keyring}/cryptoKeys/{key}/cryptoKeyVersions/{version}
     *
     * Generated from protobuf field <code>string kms_key = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key = $var;

        return $this;
    }

    /**
     * Options for what to do if the destination table already exists.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ExportInsightsDataRequest.WriteDisposition write_disposition = 5;</code>
     * @return int
     */
    public function getWriteDisposition()
    {
        return $this->write_disposition;
    }

    /**
     * Options for what to do if the destination table already exists.
     *
     * Generated from protobuf field <code>.google.cloud.contactcenterinsights.v1.ExportInsightsDataRequest.WriteDisposition write_disposition = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setWriteDisposition($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ContactCenterInsights\V1\ExportInsightsDataRequest\WriteDisposition::class);
        $this->write_disposition = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->whichOneof("destination");
    }

}

