<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/resources/account_budget.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Resources;

class AccountBudget
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
�
8google/ads/googleads/v16/enums/spending_limit_type.protogoogle.ads.googleads.v16.enums"X
SpendingLimitTypeEnum"?
SpendingLimitType
UNSPECIFIED 
UNKNOWN
INFINITEB�
"com.google.ads.googleads.v16.enumsBSpendingLimitTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
:google/ads/googleads/v16/enums/account_budget_status.protogoogle.ads.googleads.v16.enums"x
AccountBudgetStatusEnum"]
AccountBudgetStatus
UNSPECIFIED 
UNKNOWN
PENDING
APPROVED
	CANCELLEDB�
"com.google.ads.googleads.v16.enumsBAccountBudgetStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
.google/ads/googleads/v16/enums/time_type.protogoogle.ads.googleads.v16.enums"N
TimeTypeEnum">
TimeType
UNSPECIFIED 
UNKNOWN
NOW
FOREVERB�
"com.google.ads.googleads.v16.enumsBTimeTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
Agoogle/ads/googleads/v16/enums/account_budget_proposal_type.protogoogle.ads.googleads.v16.enums"�
AccountBudgetProposalTypeEnum"f
AccountBudgetProposalType
UNSPECIFIED 
UNKNOWN

CREATE

UPDATE
END

REMOVEB�
"com.google.ads.googleads.v16.enumsBAccountBudgetProposalTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
7google/ads/googleads/v16/resources/account_budget.proto"google.ads.googleads.v16.resources:google/ads/googleads/v16/enums/account_budget_status.proto8google/ads/googleads/v16/enums/spending_limit_type.proto.google/ads/googleads/v16/enums/time_type.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
AccountBudgetE
resource_name (	B.�A�A(
&googleads.googleapis.com/AccountBudget
id (B�AH�I
billing_setup (	B-�A�A\'
%googleads.googleapis.com/BillingSetupH�`
status (2K.google.ads.googleads.v16.enums.AccountBudgetStatusEnum.AccountBudgetStatusB�A
name (	B�AH�*
proposed_start_date_time (	B�AH�*
approved_start_date_time (	B�AH	�%
total_adjustments_micros! (B�A!
amount_served_micros" (B�A\'
purchase_order_number# (	B�AH
�
notes$ (	B�AH�m
pending_proposal (2N.google.ads.googleads.v16.resources.AccountBudget.PendingAccountBudgetProposalB�A%
proposed_end_date_time (	B�AH \\
proposed_end_time_type	 (25.google.ads.googleads.v16.enums.TimeTypeEnum.TimeTypeB�AH %
approved_end_date_time (	B�AH\\
approved_end_time_type (25.google.ads.googleads.v16.enums.TimeTypeEnum.TimeTypeB�AH-
proposed_spending_limit_micros (B�AHt
proposed_spending_limit_type (2G.google.ads.googleads.v16.enums.SpendingLimitTypeEnum.SpendingLimitTypeB�AH-
approved_spending_limit_micros (B�AHt
approved_spending_limit_type (2G.google.ads.googleads.v16.enums.SpendingLimitTypeEnum.SpendingLimitTypeB�AH-
adjusted_spending_limit_micros  (B�AHt
adjusted_spending_limit_type (2G.google.ads.googleads.v16.enums.SpendingLimitTypeEnum.SpendingLimitTypeB�AH�
PendingAccountBudgetProposal\\
account_budget_proposal (	B6�A�A0
.googleads.googleapis.com/AccountBudgetProposalH�s
proposal_type (2W.google.ads.googleads.v16.enums.AccountBudgetProposalTypeEnum.AccountBudgetProposalTypeB�A
name (	B�AH�!
start_date_time (	B�AH�\'
purchase_order_number (	B�AH�
notes (	B�AH�$
creation_date_time (	B�AH�
end_date_time (	B�AH S
end_time_type (25.google.ads.googleads.v16.enums.TimeTypeEnum.TimeTypeB�AH $
spending_limit_micros (B�AHk
spending_limit_type (2G.google.ads.googleads.v16.enums.SpendingLimitTypeEnum.SpendingLimitTypeB�AHB

end_timeB
spending_limitB
_account_budget_proposalB
_nameB
_start_date_timeB
_purchase_order_numberB
_notesB
_creation_date_time:g�Ad
&googleads.googleapis.com/AccountBudget:customers/{customer_id}/accountBudgets/{account_budget_id}B
proposed_end_timeB
approved_end_timeB
proposed_spending_limitB
approved_spending_limitB
adjusted_spending_limitB
_idB
_billing_setupB
_nameB
_proposed_start_date_timeB
_approved_start_date_timeB
_purchase_order_numberB
_notesB�
&com.google.ads.googleads.v16.resourcesBAccountBudgetProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v16/resources;resources�GAA�"Google.Ads.GoogleAds.V16.Resources�"Google\\Ads\\GoogleAds\\V16\\Resources�&Google::Ads::GoogleAds::V16::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

