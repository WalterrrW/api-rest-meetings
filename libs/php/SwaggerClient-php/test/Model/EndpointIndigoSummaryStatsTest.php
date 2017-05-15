<?php
/**
 * EndpointIndigoSummaryStatsTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BlueJeans onVideo REST API
 *
 * _Video That Works Where You Do._  This site provides developers access to API's from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data as well retrieve current state information.  With these API's  you should be able to quickly integrate **BlueJeans** video into your applications.     # Authentication All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ## Grant Types Bluejeans provides 3 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to the user. * Authorization Code Grant – Authenticate via a BlueJeans page, and receive an authorization code. Submit authorization with other tokens and receive an access code. (\"three-legged OAuth\") * Password Credentials Grant – Authenticate with a Username and password and receives an access code. (\"two-legged OAuth\"); * Client Credentials Grant – Similar to Password Grant (\"two-legged OAuth\").  ## Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – scope of APIs is limited to individual meetings. * User-level – scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users.  All endpoints in this document that require **Enterprise Admin** access will be marked as such. # Getting Started Before you start using the API's on this site, you must first have a BlueJeans account.  With your BlueJean credentials, use one of the Authentication methods to obtain an access token. - Click on the Authorize button at the top of page - Enter your access token in the field marked \"api_key\" Now the web site will automatically include your access token on all API calls you make.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * EndpointIndigoSummaryStatsTest Class Doc Comment
 *
 * @category    Class */
// * @description EndpointIndigoSummaryStats
/**
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EndpointIndigoSummaryStatsTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {

    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {

    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {

    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {

    }

    /**
     * Test "EndpointIndigoSummaryStats"
     */
    public function testEndpointIndigoSummaryStats()
    {

    }

    /**
     * Test attribute "audio_recv_codec"
     */
    public function testPropertyAudioRecvCodec()
    {

    }

    /**
     * Test attribute "audio_send_codec"
     */
    public function testPropertyAudioSendCodec()
    {

    }

    /**
     * Test attribute "content_recv"
     */
    public function testPropertyContentRecv()
    {

    }

    /**
     * Test attribute "content_send"
     */
    public function testPropertyContentSend()
    {

    }

    /**
     * Test attribute "talk_detected"
     */
    public function testPropertyTalkDetected()
    {

    }

    /**
     * Test attribute "session_relay"
     */
    public function testPropertySessionRelay()
    {

    }

    /**
     * Test attribute "session_in_relay"
     */
    public function testPropertySessionInRelay()
    {

    }

    /**
     * Test attribute "session_out_relay"
     */
    public function testPropertySessionOutRelay()
    {

    }

    /**
     * Test attribute "audio_rtp_relay"
     */
    public function testPropertyAudioRtpRelay()
    {

    }

    /**
     * Test attribute "call_rate"
     */
    public function testPropertyCallRate()
    {

    }

    /**
     * Test attribute "cumul_loss_percent_ai"
     */
    public function testPropertyCumulLossPercentAi()
    {

    }

    /**
     * Test attribute "cumul_loss_percent_ao"
     */
    public function testPropertyCumulLossPercentAo()
    {

    }

    /**
     * Test attribute "cumul_loss_percent_vi"
     */
    public function testPropertyCumulLossPercentVi()
    {

    }

    /**
     * Test attribute "cumul_loss_percent_vo"
     */
    public function testPropertyCumulLossPercentVo()
    {

    }

    /**
     * Test attribute "cumul_loss_percent_vic"
     */
    public function testPropertyCumulLossPercentVic()
    {

    }

    /**
     * Test attribute "cumul_loss_percent_voc"
     */
    public function testPropertyCumulLossPercentVoc()
    {

    }

    /**
     * Test attribute "cumul_loss_ai"
     */
    public function testPropertyCumulLossAi()
    {

    }

    /**
     * Test attribute "cumul_loss_ao"
     */
    public function testPropertyCumulLossAo()
    {

    }

    /**
     * Test attribute "cumul_loss_vi"
     */
    public function testPropertyCumulLossVi()
    {

    }

    /**
     * Test attribute "cumul_loss_vo"
     */
    public function testPropertyCumulLossVo()
    {

    }

    /**
     * Test attribute "cumul_loss_vic"
     */
    public function testPropertyCumulLossVic()
    {

    }

    /**
     * Test attribute "cumul_loss_voc"
     */
    public function testPropertyCumulLossVoc()
    {

    }

    /**
     * Test attribute "discontinuity_count"
     */
    public function testPropertyDiscontinuityCount()
    {

    }

    /**
     * Test attribute "dropped_packets_ai"
     */
    public function testPropertyDroppedPacketsAi()
    {

    }

    /**
     * Test attribute "dropped_packets_vi"
     */
    public function testPropertyDroppedPacketsVi()
    {

    }

    /**
     * Test attribute "dropped_packets_vic"
     */
    public function testPropertyDroppedPacketsVic()
    {

    }

    /**
     * Test attribute "mix_under_runs_ai"
     */
    public function testPropertyMixUnderRunsAi()
    {

    }

    /**
     * Test attribute "network_avg_loss_ai"
     */
    public function testPropertyNetworkAvgLossAi()
    {

    }

    /**
     * Test attribute "network_avg_loss_ao"
     */
    public function testPropertyNetworkAvgLossAo()
    {

    }

    /**
     * Test attribute "network_avg_loss_vi"
     */
    public function testPropertyNetworkAvgLossVi()
    {

    }

    /**
     * Test attribute "network_avg_loss_vo"
     */
    public function testPropertyNetworkAvgLossVo()
    {

    }

    /**
     * Test attribute "network_cumul_loss_ai"
     */
    public function testPropertyNetworkCumulLossAi()
    {

    }

    /**
     * Test attribute "network_cumul_loss_ao"
     */
    public function testPropertyNetworkCumulLossAo()
    {

    }

    /**
     * Test attribute "network_cumul_loss_vi"
     */
    public function testPropertyNetworkCumulLossVi()
    {

    }

    /**
     * Test attribute "network_cumul_loss_vo"
     */
    public function testPropertyNetworkCumulLossVo()
    {

    }

    /**
     * Test attribute "network_loss_ai"
     */
    public function testPropertyNetworkLossAi()
    {

    }

    /**
     * Test attribute "network_loss_ao"
     */
    public function testPropertyNetworkLossAo()
    {

    }

    /**
     * Test attribute "network_loss_vi"
     */
    public function testPropertyNetworkLossVi()
    {

    }

    /**
     * Test attribute "network_loss_vo"
     */
    public function testPropertyNetworkLossVo()
    {

    }

    /**
     * Test attribute "call_quality_min"
     */
    public function testPropertyCallQualityMin()
    {

    }

    /**
     * Test attribute "call_quality_max"
     */
    public function testPropertyCallQualityMax()
    {

    }

    /**
     * Test attribute "call_quality_avg"
     */
    public function testPropertyCallQualityAvg()
    {

    }

    /**
     * Test attribute "fps_min_vi"
     */
    public function testPropertyFpsMinVi()
    {

    }

    /**
     * Test attribute "fps_min_vo"
     */
    public function testPropertyFpsMinVo()
    {

    }

    /**
     * Test attribute "fps_min_vic"
     */
    public function testPropertyFpsMinVic()
    {

    }

    /**
     * Test attribute "fps_min_voc"
     */
    public function testPropertyFpsMinVoc()
    {

    }

    /**
     * Test attribute "fps_max_vi"
     */
    public function testPropertyFpsMaxVi()
    {

    }

    /**
     * Test attribute "fps_max_vo"
     */
    public function testPropertyFpsMaxVo()
    {

    }

    /**
     * Test attribute "fps_max_vic"
     */
    public function testPropertyFpsMaxVic()
    {

    }

    /**
     * Test attribute "fps_max_voc"
     */
    public function testPropertyFpsMaxVoc()
    {

    }

    /**
     * Test attribute "fps_avg_vi"
     */
    public function testPropertyFpsAvgVi()
    {

    }

    /**
     * Test attribute "fps_avg_vo"
     */
    public function testPropertyFpsAvgVo()
    {

    }

    /**
     * Test attribute "fps_avg_vic"
     */
    public function testPropertyFpsAvgVic()
    {

    }

    /**
     * Test attribute "fps_avg_voc"
     */
    public function testPropertyFpsAvgVoc()
    {

    }

    /**
     * Test attribute "bitrate_min_ai"
     */
    public function testPropertyBitrateMinAi()
    {

    }

    /**
     * Test attribute "bitrate_min_ao"
     */
    public function testPropertyBitrateMinAo()
    {

    }

    /**
     * Test attribute "bitrate_min_vi"
     */
    public function testPropertyBitrateMinVi()
    {

    }

    /**
     * Test attribute "bitrate_min_vo"
     */
    public function testPropertyBitrateMinVo()
    {

    }

    /**
     * Test attribute "bitrate_min_vic"
     */
    public function testPropertyBitrateMinVic()
    {

    }

    /**
     * Test attribute "bitrate_min_voc"
     */
    public function testPropertyBitrateMinVoc()
    {

    }

    /**
     * Test attribute "bitrate_max_ai"
     */
    public function testPropertyBitrateMaxAi()
    {

    }

    /**
     * Test attribute "bitrate_max_ao"
     */
    public function testPropertyBitrateMaxAo()
    {

    }

    /**
     * Test attribute "bitrate_max_vi"
     */
    public function testPropertyBitrateMaxVi()
    {

    }

    /**
     * Test attribute "bitrate_max_vo"
     */
    public function testPropertyBitrateMaxVo()
    {

    }

    /**
     * Test attribute "bitrate_max_vic"
     */
    public function testPropertyBitrateMaxVic()
    {

    }

    /**
     * Test attribute "bitrate_max_voc"
     */
    public function testPropertyBitrateMaxVoc()
    {

    }

    /**
     * Test attribute "bitrate_avg_ai"
     */
    public function testPropertyBitrateAvgAi()
    {

    }

    /**
     * Test attribute "bitrate_avg_ao"
     */
    public function testPropertyBitrateAvgAo()
    {

    }

    /**
     * Test attribute "bitrate_avg_vi"
     */
    public function testPropertyBitrateAvgVi()
    {

    }

    /**
     * Test attribute "bitrate_avg_vo"
     */
    public function testPropertyBitrateAvgVo()
    {

    }

    /**
     * Test attribute "bitrate_avg_vic"
     */
    public function testPropertyBitrateAvgVic()
    {

    }

    /**
     * Test attribute "bitrate_avg_voc"
     */
    public function testPropertyBitrateAvgVoc()
    {

    }

    /**
     * Test attribute "jitter_min_ai"
     */
    public function testPropertyJitterMinAi()
    {

    }

    /**
     * Test attribute "jitter_min_ao"
     */
    public function testPropertyJitterMinAo()
    {

    }

    /**
     * Test attribute "jitter_min_vi"
     */
    public function testPropertyJitterMinVi()
    {

    }

    /**
     * Test attribute "jitter_min_vo"
     */
    public function testPropertyJitterMinVo()
    {

    }

    /**
     * Test attribute "jitter_min_vic"
     */
    public function testPropertyJitterMinVic()
    {

    }

    /**
     * Test attribute "jitter_min_voc"
     */
    public function testPropertyJitterMinVoc()
    {

    }

    /**
     * Test attribute "jitter_max_ai"
     */
    public function testPropertyJitterMaxAi()
    {

    }

    /**
     * Test attribute "jitter_max_ao"
     */
    public function testPropertyJitterMaxAo()
    {

    }

    /**
     * Test attribute "jitter_max_vi"
     */
    public function testPropertyJitterMaxVi()
    {

    }

    /**
     * Test attribute "jitter_max_vo"
     */
    public function testPropertyJitterMaxVo()
    {

    }

    /**
     * Test attribute "jitter_max_vic"
     */
    public function testPropertyJitterMaxVic()
    {

    }

    /**
     * Test attribute "jitter_max_voc"
     */
    public function testPropertyJitterMaxVoc()
    {

    }

    /**
     * Test attribute "jitter_avg_ai"
     */
    public function testPropertyJitterAvgAi()
    {

    }

    /**
     * Test attribute "jitter_avg_ao"
     */
    public function testPropertyJitterAvgAo()
    {

    }

    /**
     * Test attribute "jitter_avg_vi"
     */
    public function testPropertyJitterAvgVi()
    {

    }

    /**
     * Test attribute "jitter_avg_vo"
     */
    public function testPropertyJitterAvgVo()
    {

    }

    /**
     * Test attribute "jitter_avg_vic"
     */
    public function testPropertyJitterAvgVic()
    {

    }

    /**
     * Test attribute "jitter_avg_voc"
     */
    public function testPropertyJitterAvgVoc()
    {

    }

    /**
     * Test attribute "max_jitter_min_ai"
     */
    public function testPropertyMaxJitterMinAi()
    {

    }

    /**
     * Test attribute "max_jitter_min_vi"
     */
    public function testPropertyMaxJitterMinVi()
    {

    }

    /**
     * Test attribute "max_jitter_min_vic"
     */
    public function testPropertyMaxJitterMinVic()
    {

    }

    /**
     * Test attribute "max_jitter_max_ai"
     */
    public function testPropertyMaxJitterMaxAi()
    {

    }

    /**
     * Test attribute "max_jitter_max_vi"
     */
    public function testPropertyMaxJitterMaxVi()
    {

    }

    /**
     * Test attribute "max_jitter_max_vic"
     */
    public function testPropertyMaxJitterMaxVic()
    {

    }

    /**
     * Test attribute "max_jitter_avg_ai"
     */
    public function testPropertyMaxJitterAvgAi()
    {

    }

    /**
     * Test attribute "max_jitter_avg_vi"
     */
    public function testPropertyMaxJitterAvgVi()
    {

    }

    /**
     * Test attribute "max_jitter_avg_vic"
     */
    public function testPropertyMaxJitterAvgVic()
    {

    }

    /**
     * Test attribute "video_recv_height_min"
     */
    public function testPropertyVideoRecvHeightMin()
    {

    }

    /**
     * Test attribute "video_recv_height_max"
     */
    public function testPropertyVideoRecvHeightMax()
    {

    }

    /**
     * Test attribute "video_recv_width_min"
     */
    public function testPropertyVideoRecvWidthMin()
    {

    }

    /**
     * Test attribute "video_recv_width_max"
     */
    public function testPropertyVideoRecvWidthMax()
    {

    }

    /**
     * Test attribute "video_send_height_min"
     */
    public function testPropertyVideoSendHeightMin()
    {

    }

    /**
     * Test attribute "video_send_height_max"
     */
    public function testPropertyVideoSendHeightMax()
    {

    }

    /**
     * Test attribute "video_send_width_min"
     */
    public function testPropertyVideoSendWidthMin()
    {

    }

    /**
     * Test attribute "video_send_width_max"
     */
    public function testPropertyVideoSendWidthMax()
    {

    }

    /**
     * Test attribute "content_recv_height_min"
     */
    public function testPropertyContentRecvHeightMin()
    {

    }

    /**
     * Test attribute "content_recv_height_max"
     */
    public function testPropertyContentRecvHeightMax()
    {

    }

    /**
     * Test attribute "content_recv_width_min"
     */
    public function testPropertyContentRecvWidthMin()
    {

    }

    /**
     * Test attribute "content_recv_width_max"
     */
    public function testPropertyContentRecvWidthMax()
    {

    }

    /**
     * Test attribute "content_send_height_min"
     */
    public function testPropertyContentSendHeightMin()
    {

    }

    /**
     * Test attribute "content_send_height_max"
     */
    public function testPropertyContentSendHeightMax()
    {

    }

    /**
     * Test attribute "content_send_width_min"
     */
    public function testPropertyContentSendWidthMin()
    {

    }

    /**
     * Test attribute "content_send_width_max"
     */
    public function testPropertyContentSendWidthMax()
    {

    }

    /**
     * Test attribute "round_trip_delay_min"
     */
    public function testPropertyRoundTripDelayMin()
    {

    }

    /**
     * Test attribute "round_trip_delay_max"
     */
    public function testPropertyRoundTripDelayMax()
    {

    }

    /**
     * Test attribute "round_trip_delay_avg"
     */
    public function testPropertyRoundTripDelayAvg()
    {

    }

    /**
     * Test attribute "rfactor_min"
     */
    public function testPropertyRfactorMin()
    {

    }

    /**
     * Test attribute "rfactor_max"
     */
    public function testPropertyRfactorMax()
    {

    }

    /**
     * Test attribute "rfactor_avg"
     */
    public function testPropertyRfactorAvg()
    {

    }

    /**
     * Test attribute "process_cpu_load_min"
     */
    public function testPropertyProcessCpuLoadMin()
    {

    }

    /**
     * Test attribute "process_cpu_load_max"
     */
    public function testPropertyProcessCpuLoadMax()
    {

    }

    /**
     * Test attribute "process_cpu_load_avg"
     */
    public function testPropertyProcessCpuLoadAvg()
    {

    }

    /**
     * Test attribute "system_cpu_load_min"
     */
    public function testPropertySystemCpuLoadMin()
    {

    }

    /**
     * Test attribute "system_cpu_load_max"
     */
    public function testPropertySystemCpuLoadMax()
    {

    }

    /**
     * Test attribute "system_cpu_load_avg"
     */
    public function testPropertySystemCpuLoadAvg()
    {

    }

    /**
     * Test attribute "wifi_recv_strength_min"
     */
    public function testPropertyWifiRecvStrengthMin()
    {

    }

    /**
     * Test attribute "wifi_recv_strength_max"
     */
    public function testPropertyWifiRecvStrengthMax()
    {

    }

    /**
     * Test attribute "wifi_recv_strength_avg"
     */
    public function testPropertyWifiRecvStrengthAvg()
    {

    }

    /**
     * Test attribute "key_frame_rate_avg_vi"
     */
    public function testPropertyKeyFrameRateAvgVi()
    {

    }

    /**
     * Test attribute "key_frame_rate_avg_vo"
     */
    public function testPropertyKeyFrameRateAvgVo()
    {

    }

    /**
     * Test attribute "key_frame_rate_avg_vic"
     */
    public function testPropertyKeyFrameRateAvgVic()
    {

    }

    /**
     * Test attribute "key_frame_rate_avg_voc"
     */
    public function testPropertyKeyFrameRateAvgVoc()
    {

    }

    /**
     * Test attribute "key_frame_rate_min_vi"
     */
    public function testPropertyKeyFrameRateMinVi()
    {

    }

    /**
     * Test attribute "key_frame_rate_min_vo"
     */
    public function testPropertyKeyFrameRateMinVo()
    {

    }

    /**
     * Test attribute "key_frame_rate_min_vic"
     */
    public function testPropertyKeyFrameRateMinVic()
    {

    }

    /**
     * Test attribute "key_frame_rate_min_voc"
     */
    public function testPropertyKeyFrameRateMinVoc()
    {

    }

    /**
     * Test attribute "key_frame_rate_max_vi"
     */
    public function testPropertyKeyFrameRateMaxVi()
    {

    }

    /**
     * Test attribute "key_frame_rate_max_vo"
     */
    public function testPropertyKeyFrameRateMaxVo()
    {

    }

    /**
     * Test attribute "key_frame_rate_max_vic"
     */
    public function testPropertyKeyFrameRateMaxVic()
    {

    }

    /**
     * Test attribute "key_frame_rate_max_voc"
     */
    public function testPropertyKeyFrameRateMaxVoc()
    {

    }

    /**
     * Test attribute "round_trip_delay_avg_vo"
     */
    public function testPropertyRoundTripDelayAvgVo()
    {

    }

    /**
     * Test attribute "round_trip_delay_avg_voc"
     */
    public function testPropertyRoundTripDelayAvgVoc()
    {

    }

    /**
     * Test attribute "round_trip_delay_avg_ao"
     */
    public function testPropertyRoundTripDelayAvgAo()
    {

    }

}