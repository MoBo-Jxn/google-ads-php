<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/ad_group.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V2\Resources;

class AdGroup
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\CustomParameter::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\ExplorerAutoOptimizerSetting::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\TargetingSetting::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\AdGroupAdRotationMode::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\AdGroupStatus::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\AdGroupType::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\BiddingSource::initOnce();
        \GPBMetadata\Google\Ads\GoogleAds\V2\Enums\TargetingDimension::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aea130a30676f6f676c652f6164732f676f6f676c656164732f76322f72" .
            "65736f75726365732f61645f67726f75702e70726f746f1221676f6f676c" .
            "652e6164732e676f6f676c656164732e76322e7265736f75726365731a44" .
            "676f6f676c652f6164732f676f6f676c656164732f76322f636f6d6d6f6e" .
            "2f6578706c6f7265725f6175746f5f6f7074696d697a65725f7365747469" .
            "6e672e70726f746f1a36676f6f676c652f6164732f676f6f676c65616473" .
            "2f76322f636f6d6d6f6e2f746172676574696e675f73657474696e672e70" .
            "726f746f1a3d676f6f676c652f6164732f676f6f676c656164732f76322f" .
            "656e756d732f61645f67726f75705f61645f726f746174696f6e5f6d6f64" .
            "652e70726f746f1a33676f6f676c652f6164732f676f6f676c656164732f" .
            "76322f656e756d732f61645f67726f75705f7374617475732e70726f746f" .
            "1a31676f6f676c652f6164732f676f6f676c656164732f76322f656e756d" .
            "732f61645f67726f75705f747970652e70726f746f1a32676f6f676c652f" .
            "6164732f676f6f676c656164732f76322f656e756d732f62696464696e67" .
            "5f736f757263652e70726f746f1a37676f6f676c652f6164732f676f6f67" .
            "6c656164732f76322f656e756d732f746172676574696e675f64696d656e" .
            "73696f6e2e70726f746f1a1e676f6f676c652f70726f746f6275662f7772" .
            "6170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f74" .
            "6174696f6e732e70726f746f22be0d0a07416447726f757012150a0d7265" .
            "736f757263655f6e616d6518012001280912270a02696418032001280b32" .
            "1b2e676f6f676c652e70726f746f6275662e496e74363456616c7565122a" .
            "0a046e616d6518042001280b321c2e676f6f676c652e70726f746f627566" .
            "2e537472696e6756616c7565124e0a0673746174757318052001280e323e" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76322e656e756d73" .
            "2e416447726f7570537461747573456e756d2e416447726f757053746174" .
            "757312480a0474797065180c2001280e323a2e676f6f676c652e6164732e" .
            "676f6f676c656164732e76322e656e756d732e416447726f757054797065" .
            "456e756d2e416447726f75705479706512680a1061645f726f746174696f" .
            "6e5f6d6f646518162001280e324e2e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76322e656e756d732e416447726f75704164526f74617469" .
            "6f6e4d6f6465456e756d2e416447726f75704164526f746174696f6e4d6f" .
            "646512330a0d626173655f61645f67726f757018122001280b321c2e676f" .
            "6f676c652e70726f746f6275662e537472696e6756616c7565123b0a1574" .
            "7261636b696e675f75726c5f74656d706c617465180d2001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e537472696e6756616c7565124e0a15" .
            "75726c5f637573746f6d5f706172616d657465727318062003280b322f2e" .
            "676f6f676c652e6164732e676f6f676c656164732e76322e636f6d6d6f6e" .
            "2e437573746f6d506172616d65746572122e0a0863616d706169676e180a" .
            "2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756" .
            "616c756512330a0e6370635f6269645f6d6963726f73180e2001280b321b" .
            "2e676f6f676c652e70726f746f6275662e496e74363456616c756512330a" .
            "0e63706d5f6269645f6d6963726f73180f2001280b321b2e676f6f676c65" .
            "2e70726f746f6275662e496e74363456616c756512360a11746172676574" .
            "5f6370615f6d6963726f73181b2001280b321b2e676f6f676c652e70726f" .
            "746f6275662e496e74363456616c756512330a0e6370765f6269645f6d69" .
            "63726f7318112001280b321b2e676f6f676c652e70726f746f6275662e49" .
            "6e74363456616c756512360a117461726765745f63706d5f6d6963726f73" .
            "181a2001280b321b2e676f6f676c652e70726f746f6275662e496e743634" .
            "56616c756512310a0b7461726765745f726f6173181e2001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e446f75626c6556616c7565123b0a16" .
            "70657263656e745f6370635f6269645f6d6963726f7318142001280b321b" .
            "2e676f6f676c652e70726f746f6275662e496e74363456616c756512650a" .
            "1f6578706c6f7265725f6175746f5f6f7074696d697a65725f7365747469" .
            "6e6718152001280b323c2e676f6f676c652e6164732e676f6f676c656164" .
            "732e76322e636f6d6d6f6e2e4578706c6f7265724175746f4f7074696d69" .
            "7a657253657474696e67126e0a1c646973706c61795f637573746f6d5f62" .
            "69645f64696d656e73696f6e18172001280e32482e676f6f676c652e6164" .
            "732e676f6f676c656164732e76322e656e756d732e546172676574696e67" .
            "44696d656e73696f6e456e756d2e546172676574696e6744696d656e7369" .
            "6f6e12360a1066696e616c5f75726c5f73756666697818182001280b321c" .
            "2e676f6f676c652e70726f746f6275662e537472696e6756616c7565124b" .
            "0a11746172676574696e675f73657474696e6718192001280b32302e676f" .
            "6f676c652e6164732e676f6f676c656164732e76322e636f6d6d6f6e2e54" .
            "6172676574696e6753657474696e6712400a1b6566666563746976655f74" .
            "61726765745f6370615f6d6963726f73181c2001280b321b2e676f6f676c" .
            "652e70726f746f6275662e496e74363456616c756512630a1b6566666563" .
            "746976655f7461726765745f6370615f736f75726365181d2001280e323e" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76322e656e756d73" .
            "2e42696464696e67536f75726365456e756d2e42696464696e67536f7572" .
            "6365123b0a156566666563746976655f7461726765745f726f6173181f20" .
            "01280b321c2e676f6f676c652e70726f746f6275662e446f75626c655661" .
            "6c756512640a1c6566666563746976655f7461726765745f726f61735f73" .
            "6f7572636518202001280e323e2e676f6f676c652e6164732e676f6f676c" .
            "656164732e76322e656e756d732e42696464696e67536f75726365456e75" .
            "6d2e42696464696e67536f75726365122c0a066c6162656c731821200328" .
            "0b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75" .
            "6542f9010a25636f6d2e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76322e7265736f7572636573420c416447726f757050726f746f50015a" .
            "4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f" .
            "6f676c65617069732f6164732f676f6f676c656164732f76322f7265736f" .
            "75726365733b7265736f7572636573a20203474141aa0221476f6f676c65" .
            "2e4164732e476f6f676c654164732e56322e5265736f7572636573ca0221" .
            "476f6f676c655c4164735c476f6f676c654164735c56325c5265736f7572" .
            "636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a" .
            "56323a3a5265736f7572636573620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
