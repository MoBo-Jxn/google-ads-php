<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/services/campaign_group_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Services;

class CampaignGroupService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v16/enums/response_content_type.protogoogle.ads.googleads.v16.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v16.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
:google/ads/googleads/v16/enums/campaign_group_status.protogoogle.ads.googleads.v16.enums"h
CampaignGroupStatusEnum"M
CampaignGroupStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v16.enumsBCampaignGroupStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
7google/ads/googleads/v16/resources/campaign_group.proto"google.ads.googleads.v16.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
CampaignGroupE
resource_name (	B.�A�A(
&googleads.googleapis.com/CampaignGroup
id (B�A
name (	[
status (2K.google.ads.googleads.v16.enums.CampaignGroupStatusEnum.CampaignGroupStatus:g�Ad
&googleads.googleapis.com/CampaignGroup:customers/{customer_id}/campaignGroups/{campaign_group_id}B�
&com.google.ads.googleads.v16.resourcesBCampaignGroupProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v16/resources;resources�GAA�"Google.Ads.GoogleAds.V16.Resources�"Google\\Ads\\GoogleAds\\V16\\Resources�&Google::Ads::GoogleAds::V16::Resourcesbproto3
�
>google/ads/googleads/v16/services/campaign_group_service.proto!google.ads.googleads.v16.services7google/ads/googleads/v16/resources/campaign_group.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
MutateCampaignGroupsRequest
customer_id (	B�AR

operations (29.google.ads.googleads.v16.services.CampaignGroupOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v16.enums.ResponseContentTypeEnum.ResponseContentType"�
CampaignGroupOperation/
update_mask (2.google.protobuf.FieldMaskC
create (21.google.ads.googleads.v16.resources.CampaignGroupH C
update (21.google.ads.googleads.v16.resources.CampaignGroupH =
remove (	B+�A(
&googleads.googleapis.com/CampaignGroupH B
	operation"�
MutateCampaignGroupsResponseM
results (2<.google.ads.googleads.v16.services.MutateCampaignGroupResult1
partial_failure_error (2.google.rpc.Status"�
MutateCampaignGroupResultE
resource_name (	B.�A�A(
&googleads.googleapis.com/CampaignGroupI
campaign_group (21.google.ads.googleads.v16.resources.CampaignGroup2�
CampaignGroupService�
MutateCampaignGroups>.google.ads.googleads.v16.services.MutateCampaignGroupsRequest?.google.ads.googleads.v16.services.MutateCampaignGroupsResponse"X�Acustomer_id,operations���9"4/v16/customers/{customer_id=*}/campaignGroups:mutate:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v16.servicesBCampaignGroupServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v16/services;services�GAA�!Google.Ads.GoogleAds.V16.Services�!Google\\Ads\\GoogleAds\\V16\\Services�%Google::Ads::GoogleAds::V16::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

