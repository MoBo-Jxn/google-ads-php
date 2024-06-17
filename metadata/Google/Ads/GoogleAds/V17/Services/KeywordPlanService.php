<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/services/keyword_plan_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Services;

class KeywordPlanService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
2google/ads/googleads/v17/enums/month_of_year.protogoogle.ads.googleads.v17.enums"�
MonthOfYearEnum"�
MonthOfYear
UNSPECIFIED 
UNKNOWN
JANUARY
FEBRUARY	
MARCH	
APRIL
MAY
JUNE
JULY

AUGUST	
	SEPTEMBER

OCTOBER
NOVEMBER
DECEMBERB�
"com.google.ads.googleads.v17.enumsBMonthOfYearProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
+google/ads/googleads/v17/common/dates.protogoogle.ads.googleads.v17.common"W
	DateRange

start_date (	H �
end_date (	H�B
_start_dateB
	_end_date"�
YearMonthRange9
start (2*.google.ads.googleads.v17.common.YearMonth7
end (2*.google.ads.googleads.v17.common.YearMonth"e
	YearMonth
year (J
month (2;.google.ads.googleads.v17.enums.MonthOfYearEnum.MonthOfYearB�
#com.google.ads.googleads.v17.commonB
DatesProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/common;common�GAA�Google.Ads.GoogleAds.V17.Common�Google\\Ads\\GoogleAds\\V17\\Common�#Google::Ads::GoogleAds::V17::Commonbproto3
�
Cgoogle/ads/googleads/v17/enums/keyword_plan_forecast_interval.protogoogle.ads.googleads.v17.enums"�
KeywordPlanForecastIntervalEnum"l
KeywordPlanForecastInterval
UNSPECIFIED 
UNKNOWN
	NEXT_WEEK

NEXT_MONTH
NEXT_QUARTERB�
"com.google.ads.googleads.v17.enumsB KeywordPlanForecastIntervalProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
5google/ads/googleads/v17/resources/keyword_plan.proto"google.ads.googleads.v17.resourcesCgoogle/ads/googleads/v17/enums/keyword_plan_forecast_interval.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
KeywordPlanC
resource_name (	B,�A�A&
$googleads.googleapis.com/KeywordPlan
id (B�AH �
name (	H�V
forecast_period (2=.google.ads.googleads.v17.resources.KeywordPlanForecastPeriod:a�A^
$googleads.googleapis.com/KeywordPlan6customers/{customer_id}/keywordPlans/{keyword_plan_id}B
_idB
_name"�
KeywordPlanForecastPeriodt
date_interval (2[.google.ads.googleads.v17.enums.KeywordPlanForecastIntervalEnum.KeywordPlanForecastIntervalH @

date_range (2*.google.ads.googleads.v17.common.DateRangeH B

intervalB�
&com.google.ads.googleads.v17.resourcesBKeywordPlanProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v17/resources;resources�GAA�"Google.Ads.GoogleAds.V17.Resources�"Google\\Ads\\GoogleAds\\V17\\Resources�&Google::Ads::GoogleAds::V17::Resourcesbproto3
�
<google/ads/googleads/v17/services/keyword_plan_service.proto!google.ads.googleads.v17.servicesgoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
MutateKeywordPlansRequest
customer_id (	B�AP

operations (27.google.ads.googleads.v17.services.KeywordPlanOperationB�A
partial_failure (
validate_only ("�
KeywordPlanOperation/
update_mask (2.google.protobuf.FieldMaskA
create (2/.google.ads.googleads.v17.resources.KeywordPlanH A
update (2/.google.ads.googleads.v17.resources.KeywordPlanH ;
remove (	B)�A&
$googleads.googleapis.com/KeywordPlanH B
	operation"�
MutateKeywordPlansResponse1
partial_failure_error (2.google.rpc.StatusL
results (2;.google.ads.googleads.v17.services.MutateKeywordPlansResult"\\
MutateKeywordPlansResult@
resource_name (	B)�A&
$googleads.googleapis.com/KeywordPlan2�
KeywordPlanService�
MutateKeywordPlans<.google.ads.googleads.v17.services.MutateKeywordPlansRequest=.google.ads.googleads.v17.services.MutateKeywordPlansResponse"V�Acustomer_id,operations���7"2/v17/customers/{customer_id=*}/keywordPlans:mutate:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v17.servicesBKeywordPlanServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v17/services;services�GAA�!Google.Ads.GoogleAds.V17.Services�!Google\\Ads\\GoogleAds\\V17\\Services�%Google::Ads::GoogleAds::V17::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

