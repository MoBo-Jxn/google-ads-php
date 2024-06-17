<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/services/campaign_feed_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Services;

class CampaignFeedService
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
�
Cgoogle/ads/googleads/v16/enums/matching_function_context_type.protogoogle.ads.googleads.v16.enums"�
MatchingFunctionContextTypeEnum"t
MatchingFunctionContextType
UNSPECIFIED 
UNKNOWN
FEED_ITEM_ID
DEVICE_NAME
FEED_ITEM_SET_IDB�
"com.google.ads.googleads.v16.enumsB MatchingFunctionContextTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
?google/ads/googleads/v16/enums/matching_function_operator.protogoogle.ads.googleads.v16.enums"�
MatchingFunctionOperatorEnum"u
MatchingFunctionOperator
UNSPECIFIED 
UNKNOWN
IN
IDENTITY

EQUALS
AND
CONTAINS_ANYB�
"com.google.ads.googleads.v16.enumsBMatchingFunctionOperatorProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
5google/ads/googleads/v16/enums/placeholder_type.protogoogle.ads.googleads.v16.enums"�
PlaceholderTypeEnum"�
PlaceholderType
UNSPECIFIED 
UNKNOWN
SITELINK
CALL
APP
LOCATION
AFFILIATE_LOCATION
CALLOUT
STRUCTURED_SNIPPET
MESSAGE		
PRICE

	PROMOTION
AD_CUSTOMIZER
DYNAMIC_EDUCATION
DYNAMIC_FLIGHT
DYNAMIC_CUSTOM
DYNAMIC_HOTEL
DYNAMIC_REAL_ESTATE
DYNAMIC_TRAVEL
DYNAMIC_LOCAL
DYNAMIC_JOB	
IMAGEB�
"com.google.ads.googleads.v16.enumsBPlaceholderTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
5google/ads/googleads/v16/enums/feed_link_status.protogoogle.ads.googleads.v16.enums"^
FeedLinkStatusEnum"H
FeedLinkStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v16.enumsBFeedLinkStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
:google/ads/googleads/v16/enums/response_content_type.protogoogle.ads.googleads.v16.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v16.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
7google/ads/googleads/v16/common/matching_function.protogoogle.ads.googleads.v16.common?google/ads/googleads/v16/enums/matching_function_operator.proto"�
MatchingFunction
function_string (	H �g
operator (2U.google.ads.googleads.v16.enums.MatchingFunctionOperatorEnum.MatchingFunctionOperator?
left_operands (2(.google.ads.googleads.v16.common.Operand@
right_operands (2(.google.ads.googleads.v16.common.OperandB
_function_string"�
OperandT
constant_operand (28.google.ads.googleads.v16.common.Operand.ConstantOperandH _
feed_attribute_operand (2=.google.ads.googleads.v16.common.Operand.FeedAttributeOperandH T
function_operand (28.google.ads.googleads.v16.common.Operand.FunctionOperandH a
request_context_operand (2>.google.ads.googleads.v16.common.Operand.RequestContextOperandH �
ConstantOperand
string_value (	H 

long_value (H 
boolean_value (H 
double_value (H B
constant_operand_valuen
FeedAttributeOperand
feed_id (H �
feed_attribute_id (H�B

_feed_idB
_feed_attribute_id_
FunctionOperandL
matching_function (21.google.ads.googleads.v16.common.MatchingFunction�
RequestContextOperandq
context_type (2[.google.ads.googleads.v16.enums.MatchingFunctionContextTypeEnum.MatchingFunctionContextTypeB
function_argument_operandB�
#com.google.ads.googleads.v16.commonBMatchingFunctionProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v16/common;common�GAA�Google.Ads.GoogleAds.V16.Common�Google\\Ads\\GoogleAds\\V16\\Common�#Google::Ads::GoogleAds::V16::Commonbproto3
�
6google/ads/googleads/v16/resources/campaign_feed.proto"google.ads.googleads.v16.resources5google/ads/googleads/v16/enums/feed_link_status.proto5google/ads/googleads/v16/enums/placeholder_type.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
CampaignFeedD
resource_name (	B-�A�A\'
%googleads.googleapis.com/CampaignFeed8
feed (	B%�A�A
googleads.googleapis.com/FeedH �@
campaign (	B)�A�A#
!googleads.googleapis.com/CampaignH�^
placeholder_types (2C.google.ads.googleads.v16.enums.PlaceholderTypeEnum.PlaceholderTypeL
matching_function (21.google.ads.googleads.v16.common.MatchingFunctionV
status (2A.google.ads.googleads.v16.enums.FeedLinkStatusEnum.FeedLinkStatusB�A:i�Af
%googleads.googleapis.com/CampaignFeed=customers/{customer_id}/campaignFeeds/{campaign_id}~{feed_id}B
_feedB
	_campaignB�
&com.google.ads.googleads.v16.resourcesBCampaignFeedProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v16/resources;resources�GAA�"Google.Ads.GoogleAds.V16.Resources�"Google\\Ads\\GoogleAds\\V16\\Resources�&Google::Ads::GoogleAds::V16::Resourcesbproto3
�
=google/ads/googleads/v16/services/campaign_feed_service.proto!google.ads.googleads.v16.services6google/ads/googleads/v16/resources/campaign_feed.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
MutateCampaignFeedsRequest
customer_id (	B�AQ

operations (28.google.ads.googleads.v16.services.CampaignFeedOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v16.enums.ResponseContentTypeEnum.ResponseContentType"�
CampaignFeedOperation/
update_mask (2.google.protobuf.FieldMaskB
create (20.google.ads.googleads.v16.resources.CampaignFeedH B
update (20.google.ads.googleads.v16.resources.CampaignFeedH <
remove (	B*�A\'
%googleads.googleapis.com/CampaignFeedH B
	operation"�
MutateCampaignFeedsResponse1
partial_failure_error (2.google.rpc.StatusL
results (2;.google.ads.googleads.v16.services.MutateCampaignFeedResult"�
MutateCampaignFeedResultA
resource_name (	B*�A\'
%googleads.googleapis.com/CampaignFeedG
campaign_feed (20.google.ads.googleads.v16.resources.CampaignFeed2�
CampaignFeedService�
MutateCampaignFeeds=.google.ads.googleads.v16.services.MutateCampaignFeedsRequest>.google.ads.googleads.v16.services.MutateCampaignFeedsResponse"W�Acustomer_id,operations���8"3/v16/customers/{customer_id=*}/campaignFeeds:mutate:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v16.servicesBCampaignFeedServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v16/services;services�GAA�!Google.Ads.GoogleAds.V16.Services�!Google\\Ads\\GoogleAds\\V16\\Services�%Google::Ads::GoogleAds::V16::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

