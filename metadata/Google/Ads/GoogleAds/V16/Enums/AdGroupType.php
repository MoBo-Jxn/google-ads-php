<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/enums/ad_group_type.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Enums;

class AdGroupType
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
2google/ads/googleads/v16/enums/ad_group_type.protogoogle.ads.googleads.v16.enums"�
AdGroupTypeEnum"�
AdGroupType
UNSPECIFIED 
UNKNOWN
SEARCH_STANDARD
DISPLAY_STANDARD
SHOPPING_PRODUCT_ADS
	HOTEL_ADS
SHOPPING_SMART_ADS
VIDEO_BUMPER
VIDEO_TRUE_VIEW_IN_STREAM	
VIDEO_TRUE_VIEW_IN_DISPLAY
!
VIDEO_NON_SKIPPABLE_IN_STREAM
VIDEO_OUTSTREAM
SEARCH_DYNAMIC_ADS#
SHOPPING_COMPARISON_LISTING_ADS
PROMOTED_HOTEL_ADS
VIDEO_RESPONSIVE
VIDEO_EFFICIENT_REACH
SMART_CAMPAIGN_ADS

TRAVEL_ADSB�
"com.google.ads.googleads.v16.enumsBAdGroupTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

