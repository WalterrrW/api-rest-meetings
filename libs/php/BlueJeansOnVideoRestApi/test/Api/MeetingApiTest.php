<?php
/**
 * MeetingApiTest
 * PHP version 5
 *
 * @category Class
 * @package  BlueJeansOnVideoRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * BlueJeans onVideo REST API
 *
 * _Video That Works Where You Do._  This site provides developers access to API's from BlueJean's onVideo meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data as well retrieve current state information.  With these API's  you should be able to quickly integrate **BlueJeans** video into your applications.     # Authentication All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ## Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – After creating a developer application, users witll authenticate via a BlueJeans page, and receive an authorization code. Submit authorization with other tokens and receive an access token. Known as three-legged OAuth. ## Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. # Getting Started Before you start using the API's on this site, you must first have a BlueJeans account.  With your BlueJean credentials, use one of the Authentication methods to obtain an access token. - Click on the Authorize button at the top of page - Enter your access token in the field marked \"api_key\" Now the web site will automatically include your access token on all API calls you make.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: brandon@bluejeans.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace BlueJeansOnVideoRestApi;

use \BlueJeansOnVideoRestApi\Configuration;
use \BlueJeansOnVideoRestApi\ApiClient;
use \BlueJeansOnVideoRestApi\ApiException;
use \BlueJeansOnVideoRestApi\ObjectSerializer;

/**
 * MeetingApiTest Class Doc Comment
 *
 * @category Class
 * @package  BlueJeansOnVideoRestApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MeetingApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
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
     * Test case for cancelMeeting
     *
     * Cancel Meeting.
     *
     */
    public function testCancelMeeting()
    {

    }

    /**
     * Test case for createMeeting
     *
     * Create Meeting.
     *
     */
    public function testCreateMeeting()
    {

    }

    /**
     * Test case for generatePairingCodeSip
     *
     * Generate Pairing Code (SIP).
     *
     */
    public function testGeneratePairingCodeSip()
    {

    }

    /**
     * Test case for generatePairingCodeWebRtc
     *
     * Generate Pairing Code (WebRTC).
     *
     */
    public function testGeneratePairingCodeWebRtc()
    {

    }

    /**
     * Test case for getEndpointLayout
     *
     * Get Endpoint Layout.
     *
     */
    public function testGetEndpointLayout()
    {

    }

    /**
     * Test case for getMeeting
     *
     * Get Meeting.
     *
     */
    public function testGetMeeting()
    {

    }

    /**
     * Test case for getMeetingEmails
     *
     * Get Meeting Email.
     *
     */
    public function testGetMeetingEmails()
    {

    }

    /**
     * Test case for getMeetingEndpoint
     *
     * Get Endpoint Information.
     *
     */
    public function testGetMeetingEndpoint()
    {

    }

    /**
     * Test case for getMeetingEndpoints
     *
     * List Meeting Endpoints.
     *
     */
    public function testGetMeetingEndpoints()
    {

    }

    /**
     * Test case for getMeetingNumbers
     *
     * Get Meeting Join Info.
     *
     */
    public function testGetMeetingNumbers()
    {

    }

    /**
     * Test case for getMeetingState
     *
     * Get Meeting State.
     *
     */
    public function testGetMeetingState()
    {

    }

    /**
     * Test case for listMeetings
     *
     * List Meetings.
     *
     */
    public function testListMeetings()
    {

    }

    /**
     * Test case for sendMeetingInvite
     *
     * Send Email Invite.
     *
     */
    public function testSendMeetingInvite()
    {

    }

    /**
     * Test case for updateEndpointLayout
     *
     * Update Endpoint Layout.
     *
     */
    public function testUpdateEndpointLayout()
    {

    }

    /**
     * Test case for updateMeeting
     *
     * Update Meeting.
     *
     */
    public function testUpdateMeeting()
    {

    }

    /**
     * Test case for updateMeetingEndpoint
     *
     * Update Endpoint Video/Audio State.
     *
     */
    public function testUpdateMeetingEndpoint()
    {

    }

    /**
     * Test case for updateMeetingEndpoints
     *
     * Update Meeting Endpoints State.
     *
     */
    public function testUpdateMeetingEndpoints()
    {

    }

    /**
     * Test case for updateMeetingState
     *
     * Update Meeting State.
     *
     */
    public function testUpdateMeetingState()
    {

    }

}