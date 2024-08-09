<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/common/bidding.proto

namespace Google\Ads\GoogleAds\V17\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Target frequency bidding goal details for Fixed CPM bidding strategy. Only
 * relevant if the goal of the bidding strategy is `TARGET_FREQUENCY`.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.common.FixedCpmTargetFrequencyGoalInfo</code>
 */
class FixedCpmTargetFrequencyGoalInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Target frequency count represents the number of times an advertiser wants
     * to show the ad to target a single user.
     *
     * Generated from protobuf field <code>int64 target_count = 1;</code>
     */
    protected $target_count = 0;
    /**
     * Time window expressing the period over which you want to reach
     * the specified target_count.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.FixedCpmTargetFrequencyTimeUnitEnum.FixedCpmTargetFrequencyTimeUnit time_unit = 2;</code>
     */
    protected $time_unit = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $target_count
     *           Target frequency count represents the number of times an advertiser wants
     *           to show the ad to target a single user.
     *     @type int $time_unit
     *           Time window expressing the period over which you want to reach
     *           the specified target_count.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Common\Bidding::initOnce();
        parent::__construct($data);
    }

    /**
     * Target frequency count represents the number of times an advertiser wants
     * to show the ad to target a single user.
     *
     * Generated from protobuf field <code>int64 target_count = 1;</code>
     * @return int|string
     */
    public function getTargetCount()
    {
        return $this->target_count;
    }

    /**
     * Target frequency count represents the number of times an advertiser wants
     * to show the ad to target a single user.
     *
     * Generated from protobuf field <code>int64 target_count = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTargetCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->target_count = $var;

        return $this;
    }

    /**
     * Time window expressing the period over which you want to reach
     * the specified target_count.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.FixedCpmTargetFrequencyTimeUnitEnum.FixedCpmTargetFrequencyTimeUnit time_unit = 2;</code>
     * @return int
     */
    public function getTimeUnit()
    {
        return $this->time_unit;
    }

    /**
     * Time window expressing the period over which you want to reach
     * the specified target_count.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.FixedCpmTargetFrequencyTimeUnitEnum.FixedCpmTargetFrequencyTimeUnit time_unit = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTimeUnit($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\FixedCpmTargetFrequencyTimeUnitEnum\FixedCpmTargetFrequencyTimeUnit::class);
        $this->time_unit = $var;

        return $this;
    }

}
