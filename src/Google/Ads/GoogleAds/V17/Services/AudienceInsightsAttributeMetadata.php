<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/services/audience_insights_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An audience attribute, with metadata about it, returned in response to a
 * search.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.AudienceInsightsAttributeMetadata</code>
 */
class AudienceInsightsAttributeMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The type of the attribute.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AudienceInsightsDimensionEnum.AudienceInsightsDimension dimension = 1;</code>
     */
    protected $dimension = 0;
    /**
     * The attribute itself.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.AudienceInsightsAttribute attribute = 2;</code>
     */
    protected $attribute = null;
    /**
     * The human-readable name of the attribute.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     */
    protected $display_name = '';
    /**
     * A string that supplements the display_name to identify the attribute.
     * If the dimension is TOPIC, this is a brief description of the
     * Knowledge Graph entity, such as "American singer-songwriter".
     * If the dimension is CATEGORY, this is the complete path to the category in
     * The Product & Service taxonomy, for example
     * "/Apparel/Clothing/Outerwear".
     *
     * Generated from protobuf field <code>string display_info = 5;</code>
     */
    protected $display_info = '';
    protected $dimension_metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $dimension
     *           The type of the attribute.
     *     @type \Google\Ads\GoogleAds\V17\Services\AudienceInsightsAttribute $attribute
     *           The attribute itself.
     *     @type string $display_name
     *           The human-readable name of the attribute.
     *     @type string $display_info
     *           A string that supplements the display_name to identify the attribute.
     *           If the dimension is TOPIC, this is a brief description of the
     *           Knowledge Graph entity, such as "American singer-songwriter".
     *           If the dimension is CATEGORY, this is the complete path to the category in
     *           The Product & Service taxonomy, for example
     *           "/Apparel/Clothing/Outerwear".
     *     @type \Google\Ads\GoogleAds\V17\Services\YouTubeChannelAttributeMetadata $youtube_channel_metadata
     *           Special metadata for a YouTube channel.
     *     @type \Google\Ads\GoogleAds\V17\Services\DynamicLineupAttributeMetadata $dynamic_attribute_metadata
     *           Special metadata for a YouTube Dynamic Lineup.
     *     @type \Google\Ads\GoogleAds\V17\Services\LocationAttributeMetadata $location_attribute_metadata
     *           Special metadata for a Location.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\AudienceInsightsService::initOnce();
        parent::__construct($data);
    }

    /**
     * The type of the attribute.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AudienceInsightsDimensionEnum.AudienceInsightsDimension dimension = 1;</code>
     * @return int
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * The type of the attribute.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.AudienceInsightsDimensionEnum.AudienceInsightsDimension dimension = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDimension($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\AudienceInsightsDimensionEnum\AudienceInsightsDimension::class);
        $this->dimension = $var;

        return $this;
    }

    /**
     * The attribute itself.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.AudienceInsightsAttribute attribute = 2;</code>
     * @return \Google\Ads\GoogleAds\V17\Services\AudienceInsightsAttribute|null
     */
    public function getAttribute()
    {
        return $this->attribute;
    }

    public function hasAttribute()
    {
        return isset($this->attribute);
    }

    public function clearAttribute()
    {
        unset($this->attribute);
    }

    /**
     * The attribute itself.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.AudienceInsightsAttribute attribute = 2;</code>
     * @param \Google\Ads\GoogleAds\V17\Services\AudienceInsightsAttribute $var
     * @return $this
     */
    public function setAttribute($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Services\AudienceInsightsAttribute::class);
        $this->attribute = $var;

        return $this;
    }

    /**
     * The human-readable name of the attribute.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The human-readable name of the attribute.
     *
     * Generated from protobuf field <code>string display_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * A string that supplements the display_name to identify the attribute.
     * If the dimension is TOPIC, this is a brief description of the
     * Knowledge Graph entity, such as "American singer-songwriter".
     * If the dimension is CATEGORY, this is the complete path to the category in
     * The Product & Service taxonomy, for example
     * "/Apparel/Clothing/Outerwear".
     *
     * Generated from protobuf field <code>string display_info = 5;</code>
     * @return string
     */
    public function getDisplayInfo()
    {
        return $this->display_info;
    }

    /**
     * A string that supplements the display_name to identify the attribute.
     * If the dimension is TOPIC, this is a brief description of the
     * Knowledge Graph entity, such as "American singer-songwriter".
     * If the dimension is CATEGORY, this is the complete path to the category in
     * The Product & Service taxonomy, for example
     * "/Apparel/Clothing/Outerwear".
     *
     * Generated from protobuf field <code>string display_info = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_info = $var;

        return $this;
    }

    /**
     * Special metadata for a YouTube channel.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.YouTubeChannelAttributeMetadata youtube_channel_metadata = 6;</code>
     * @return \Google\Ads\GoogleAds\V17\Services\YouTubeChannelAttributeMetadata|null
     */
    public function getYoutubeChannelMetadata()
    {
        return $this->readOneof(6);
    }

    public function hasYoutubeChannelMetadata()
    {
        return $this->hasOneof(6);
    }

    /**
     * Special metadata for a YouTube channel.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.YouTubeChannelAttributeMetadata youtube_channel_metadata = 6;</code>
     * @param \Google\Ads\GoogleAds\V17\Services\YouTubeChannelAttributeMetadata $var
     * @return $this
     */
    public function setYoutubeChannelMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Services\YouTubeChannelAttributeMetadata::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Special metadata for a YouTube Dynamic Lineup.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.DynamicLineupAttributeMetadata dynamic_attribute_metadata = 7;</code>
     * @return \Google\Ads\GoogleAds\V17\Services\DynamicLineupAttributeMetadata|null
     */
    public function getDynamicAttributeMetadata()
    {
        return $this->readOneof(7);
    }

    public function hasDynamicAttributeMetadata()
    {
        return $this->hasOneof(7);
    }

    /**
     * Special metadata for a YouTube Dynamic Lineup.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.DynamicLineupAttributeMetadata dynamic_attribute_metadata = 7;</code>
     * @param \Google\Ads\GoogleAds\V17\Services\DynamicLineupAttributeMetadata $var
     * @return $this
     */
    public function setDynamicAttributeMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Services\DynamicLineupAttributeMetadata::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Special metadata for a Location.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.LocationAttributeMetadata location_attribute_metadata = 8;</code>
     * @return \Google\Ads\GoogleAds\V17\Services\LocationAttributeMetadata|null
     */
    public function getLocationAttributeMetadata()
    {
        return $this->readOneof(8);
    }

    public function hasLocationAttributeMetadata()
    {
        return $this->hasOneof(8);
    }

    /**
     * Special metadata for a Location.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.services.LocationAttributeMetadata location_attribute_metadata = 8;</code>
     * @param \Google\Ads\GoogleAds\V17\Services\LocationAttributeMetadata $var
     * @return $this
     */
    public function setLocationAttributeMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Services\LocationAttributeMetadata::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDimensionMetadata()
    {
        return $this->whichOneof("dimension_metadata");
    }

}
