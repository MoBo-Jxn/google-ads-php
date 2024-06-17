<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/services/asset_set_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Services;

class AssetSetService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
<google/ads/googleads/v17/enums/chain_relationship_type.protogoogle.ads.googleads.v17.enums"{
ChainRelationshipTypeEnum"^
ChainRelationshipType
UNSPECIFIED 
UNKNOWN
AUTO_DEALERS
GENERAL_RETAILERSB�
"com.google.ads.googleads.v17.enumsBChainRelationshipTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
3google/ads/googleads/v17/enums/asset_set_type.protogoogle.ads.googleads.v17.enums"�
AssetSetTypeEnum"�
AssetSetType
UNSPECIFIED 
UNKNOWN
	PAGE_FEED
DYNAMIC_EDUCATION
MERCHANT_CENTER_FEED
DYNAMIC_REAL_ESTATE
DYNAMIC_CUSTOM
DYNAMIC_HOTELS_AND_RENTALS
DYNAMIC_FLIGHTS
DYNAMIC_TRAVEL	
DYNAMIC_LOCAL

DYNAMIC_JOBS
LOCATION_SYNC+
\'BUSINESS_PROFILE_DYNAMIC_LOCATION_GROUP 
CHAIN_DYNAMIC_LOCATION_GROUP
STATIC_LOCATION_GROUP
HOTEL_PROPERTYB�
"com.google.ads.googleads.v17.enumsBAssetSetTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
5google/ads/googleads/v17/enums/asset_set_status.protogoogle.ads.googleads.v17.enums"^
AssetSetStatusEnum"H
AssetSetStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v17.enumsBAssetSetStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
<google/ads/googleads/v17/enums/location_ownership_type.protogoogle.ads.googleads.v17.enums"u
LocationOwnershipTypeEnum"X
LocationOwnershipType
UNSPECIFIED 
UNKNOWN
BUSINESS_OWNER
	AFFILIATEB�
"com.google.ads.googleads.v17.enumsBLocationOwnershipTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
@google/ads/googleads/v17/enums/location_string_filter_type.protogoogle.ads.googleads.v17.enums"c
LocationStringFilterTypeEnum"C
LocationStringFilterType
UNSPECIFIED 
UNKNOWN	
EXACTB�
"com.google.ads.googleads.v17.enumsBLocationStringFilterTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
5google/ads/googleads/v17/common/asset_set_types.protogoogle.ads.googleads.v17.common<google/ads/googleads/v17/enums/location_ownership_type.proto@google/ads/googleads/v17/enums/location_string_filter_type.protogoogle/api/field_behavior.proto"�
LocationSetx
location_ownership_type (2O.google.ads.googleads.v17.enums.LocationOwnershipTypeEnum.LocationOwnershipTypeB�A�Ad
business_profile_location_set (2;.google.ads.googleads.v17.common.BusinessProfileLocationSetH G
chain_location_set (2).google.ads.googleads.v17.common.ChainSetH M
maps_location_set (20.google.ads.googleads.v17.common.MapsLocationSetH B
source"�
BusinessProfileLocationSet(
http_authorization_token (	B�A�A
email_address (	B�A�A
business_name_filter (	
label_filters (	
listing_id_filters ( 
business_account_id (	B�A"�
ChainSetr
relationship_type (2O.google.ads.googleads.v17.enums.ChainRelationshipTypeEnum.ChainRelationshipTypeB�A�AA
chains (2,.google.ads.googleads.v17.common.ChainFilterB�A"A
ChainFilter
chain_id (B�A
location_attributes (	"a
MapsLocationSetN
maps_locations (21.google.ads.googleads.v17.common.MapsLocationInfoB�A"$
MapsLocationInfo
place_id (	"�
BusinessProfileLocationGroup�
.dynamic_business_profile_location_group_filter (2J.google.ads.googleads.v17.common.DynamicBusinessProfileLocationGroupFilter"�
)DynamicBusinessProfileLocationGroupFilter
label_filters (	e
business_name_filter (2B.google.ads.googleads.v17.common.BusinessProfileBusinessNameFilterH �
listing_id_filters (B
_business_name_filter"�
!BusinessProfileBusinessNameFilter
business_name (	j
filter_type (2U.google.ads.googleads.v17.enums.LocationStringFilterTypeEnum.LocationStringFilterType"p
ChainLocationGroupZ
$dynamic_chain_location_group_filters (2,.google.ads.googleads.v17.common.ChainFilterB�
#com.google.ads.googleads.v17.commonBAssetSetTypesProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/common;common�GAA�Google.Ads.GoogleAds.V17.Common�Google\\Ads\\GoogleAds\\V17\\Common�#Google::Ads::GoogleAds::V17::Commonbproto3
�
2google/ads/googleads/v17/resources/asset_set.proto"google.ads.googleads.v17.resources5google/ads/googleads/v17/enums/asset_set_status.proto3google/ads/googleads/v17/enums/asset_set_type.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
AssetSet
id (B�A@
resource_name (	B)�A�A#
!googleads.googleapis.com/AssetSet
name (	B�AS
type (2=.google.ads.googleads.v17.enums.AssetSetTypeEnum.AssetSetTypeB�A�AV
status (2A.google.ads.googleads.v17.enums.AssetSetStatusEnum.AssetSetStatusB�A]
merchant_center_feed (2?.google.ads.googleads.v17.resources.AssetSet.MerchantCenterFeed/
"location_group_parent_asset_set_id
 (B�A`
hotel_property_data (2>.google.ads.googleads.v17.resources.AssetSet.HotelPropertyDataB�AD
location_set (2,.google.ads.googleads.v17.common.LocationSetH h
business_profile_location_group (2=.google.ads.googleads.v17.common.BusinessProfileLocationGroupH S
chain_location_group	 (23.google.ads.googleads.v17.common.ChainLocationGroupH [
MerchantCenterFeed
merchant_id (B�A

feed_label (	B�AH �B
_feed_label{
HotelPropertyData!
hotel_center_id (B�AH �
partner_name (	B�AH�B
_hotel_center_idB
_partner_name:X�AU
!googleads.googleapis.com/AssetSet0customers/{customer_id}/assetSets/{asset_set_id}B
asset_set_sourceB�
&com.google.ads.googleads.v17.resourcesBAssetSetProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v17/resources;resources�GAA�"Google.Ads.GoogleAds.V17.Resources�"Google\\Ads\\GoogleAds\\V17\\Resources�&Google::Ads::GoogleAds::V17::Resourcesbproto3
�
:google/ads/googleads/v17/enums/response_content_type.protogoogle.ads.googleads.v17.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v17.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
9google/ads/googleads/v17/services/asset_set_service.proto!google.ads.googleads.v17.services2google/ads/googleads/v17/resources/asset_set.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
MutateAssetSetsRequest
customer_id (	B�AM

operations (24.google.ads.googleads.v17.services.AssetSetOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v17.enums.ResponseContentTypeEnum.ResponseContentType"�
AssetSetOperation/
update_mask (2.google.protobuf.FieldMask>
create (2,.google.ads.googleads.v17.resources.AssetSetH >
update (2,.google.ads.googleads.v17.resources.AssetSetH 8
remove (	B&�A#
!googleads.googleapis.com/AssetSetH B
	operation"�
MutateAssetSetsResponseH
results (27.google.ads.googleads.v17.services.MutateAssetSetResult1
partial_failure_error (2.google.rpc.Status"�
MutateAssetSetResult=
resource_name (	B&�A#
!googleads.googleapis.com/AssetSet?
	asset_set (2,.google.ads.googleads.v17.resources.AssetSet2�
AssetSetService�
MutateAssetSets9.google.ads.googleads.v17.services.MutateAssetSetsRequest:.google.ads.googleads.v17.services.MutateAssetSetsResponse"S�Acustomer_id,operations���4"//v17/customers/{customer_id=*}/assetSets:mutate:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v17.servicesBAssetSetServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v17/services;services�GAA�!Google.Ads.GoogleAds.V17.Services�!Google\\Ads\\GoogleAds\\V17\\Services�%Google::Ads::GoogleAds::V17::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

