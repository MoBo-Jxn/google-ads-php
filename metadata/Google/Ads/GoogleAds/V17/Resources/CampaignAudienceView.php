<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/resources/campaign_audience_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Resources;

class CampaignAudienceView
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
?google/ads/googleads/v17/resources/campaign_audience_view.proto"google.ads.googleads.v17.resourcesgoogle/api/resource.proto"�
CampaignAudienceViewL
resource_name (	B5�A�A/
-googleads.googleapis.com/CampaignAudienceView:~�A{
-googleads.googleapis.com/CampaignAudienceViewJcustomers/{customer_id}/campaignAudienceViews/{campaign_id}~{criterion_id}B�
&com.google.ads.googleads.v17.resourcesBCampaignAudienceViewProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v17/resources;resources�GAA�"Google.Ads.GoogleAds.V17.Resources�"Google\\Ads\\GoogleAds\\V17\\Resources�&Google::Ads::GoogleAds::V17::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

