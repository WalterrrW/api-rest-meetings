# coding: utf-8

"""
    BlueJeans Meetings REST API

     ## Video That Works Where You Do. This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you will be able to make actual API calls to manage User Accounts, Meetings, and Recordings.  Also, you can pull analytical data and current state information. With these APIs you can quickly integrate **BlueJeans** video administration into your applications.    <alert>7/23/2018 </alert>Corrected errors in API definition file.<br/> 7/10/2018 Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> <hr>  <h2 class=\"info\"> What is a BlueJeans Meeting?</h2> <img src=\"./img/bjnmeeting.png\" style=\"padding-left:20px; width:50%\">  A BlueJeans meeting is a collaboration session of 2 or more participants joining a virtual meeting-room in the cloud.   The first person to join is put into a waiting-room until other participant(s) join.  When the meeting starts, all participants will be connected over video & audio.  <u>Types of Meeting Rooms</u> There are two types of Meeting Rooms available to a registered user.  They are described as: <ul> <li>Scheduled – A room created for a specific date and time.  It is assigned a randomized and unique numeric ID by BlueJeans.</li> <li>Personal – Every user is given a personal meeting room with a customized Meeting Identifier.  People typically use their mobile phone number as their Meeting ID.</li> </ul> <u>Meeting Room Security</u> A meeting room can <i>optionally</i> be protected by a randomized access code.  THe access code ensures security of participants who join.  Also the access code can specify a Moderator role whose user(s) have additional capabilities to administer a meeting. <ul> <li>When set, participants would be required to enter the access code in order to join.</li> <li>The scheduler's profile has a user-specified moderator passcode which can be input to allow designated user(s) greater privileges to help organize meetings.</li> </ul> <hr>  <h2 id='gs' class=\"info\" onclick=\"hideit('gs')\"><span id=\"gsicon\" class=\"glyphicon glyphicon-chevron-right\"></span> Getting Started</h2> <div id=\"gsbody\" style=\"display:none\"> Before you start using BlueJeans' APIs, you must first have a BlueJeans account enabled for API Access.  Contact <a href=\"mailto:Support@BlueJeans.com)\">BlueJeans Support</a> for assistance.  <br /><br />Once you have an account, you may start writing application code to authenticate and make API calls.  *Alternatively*, you can use this developer site to test the BlueJeans' APIs and develop a level of familiarity before you write production code.  <br />  ### To Make API Calls from This Site If you want to use this developer site to try various BlueJeans' APIs, here are the steps required to authenticate and enable your Developer Session to place API calls. 1. Choose Method for Authenticating      * Click on the desired Authentication method from below.      * Click on the **Try It Out** button. 1. Make Authentication request      * Follow APIs instructions and input the API parameters.      * Click on the blue **Execute** button.      * If successful, the API returns with JSON data containing a field called **access_token**.  Copy/save this value. 1. Authorize BlueJeans Developer Session.      * Click on the green **Authorize button**.       * The site will show you a pop-up window for authorization.      * Enter your access token in the field named **api_key**      * Click on the **Authorize** button  Your current BlueJeans developer session is now authenticated and ready to place API calls.  The web site will automatically include your access token on any API calls you make. </div> <hr>  <h2 id='oauth' class=\"info\" onclick=\"hideit('oauth')\"><span id=\"oauthicon\" class=\"glyphicon glyphicon-chevron-right\"></span> About Meetings Authentication</h2>  <div id=\"oauthbody\" style=\"display:none\">  All API transactions (excluding Authentication) require an access token per **OAuth standards**.  BlueJeans provides multiple methods for obtaining an access token.  Additionally there are diffferent scopes of token access. ### Grant Types Bluejeans provides 4 different methods for users to Authenticate.  Successful authentication allows BlueJeans to grant an access token to perform API operations. * Password Credentials Grant – Authenticate with a username and password and receive an access token with user level permission. Known as two-legged OAuth. * Meeting Credentials Grant – Authenticate with a meeting ID and meeting passcode and receive an access token with meeting level permission. Known as two-legged OAuth. * Client Credentials Grant –  Authenticate with a client ID and client secret and receive an access token with enterprise level permission. Known as two-legged OAuth. * Authorization Code Grant – Authentication for your developer's application occurs through a redirection to a BlueJeans authentication page. The application receives an authorization code to be submitted, along with other tokens, to receive an access token. Known as three-legged OAuth. For more information please refer to the [OAuth specification](https://oauth.net/). ### Access & Permissions BlueJeans defines 3 levels of API access into the system.  When an access token is granted, it carries one of these 3 levels.  The scope of system functionality depends upon the token's access level. * Meeting-level – Scope of APIs is limited to individual meetings. * User-level – Scope depends on the requested permissions. * App-level – provisioned either by BlueJeans personnel, or the BlueJeans Enterprise Admin, an app, is issued a client key and secret key. These tokens then are used by the BlueJeans Authentication API to receive the token. The token's scope provides access to the entire enterprise and all of its users. All endpoints in this document that require **Enterprise Admin** access will be marked as such. </div> <hr>   # noqa: E501

    OpenAPI spec version: 1.0.4407232018
    Contact: glenn@bluejeans.com
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


import pprint
import re  # noqa: F401

import six

from BlueJeansMeetingsRestApi.models.meeting_sharing_properties import MeetingSharingProperties  # noqa: F401,E501
from BlueJeansMeetingsRestApi.models.recepient_options_comp import RecepientOptionsComp  # noqa: F401,E501


class MeetingSharing(object):
    """NOTE: This class is auto generated by the swagger code generator program.

    Do not edit the class manually.
    """

    """
    Attributes:
      swagger_types (dict): The key is attribute name
                            and the value is attribute type.
      attribute_map (dict): The key is attribute name
                            and the value is json key in definition.
    """
    swagger_types = {
        'id': 'int',
        'meeting_guid': 'str',
        'owner_id': 'int',
        'sharing_url': 'str',
        'recepient_type': 'RecepientOptionsComp',
        'properties': 'MeetingSharingProperties',
        'status': 'str',
        'downloadable': 'bool',
        'passcode': 'str',
        'validity': 'str',
        'created': 'int',
        'lastmodified': 'int'
    }

    attribute_map = {
        'id': 'id',
        'meeting_guid': 'meetingGuid',
        'owner_id': 'ownerId',
        'sharing_url': 'sharingUrl',
        'recepient_type': 'recepientType',
        'properties': 'properties',
        'status': 'status',
        'downloadable': 'downloadable',
        'passcode': 'passcode',
        'validity': 'validity',
        'created': 'created',
        'lastmodified': 'lastmodified'
    }

    def __init__(self, id=None, meeting_guid=None, owner_id=None, sharing_url=None, recepient_type=None, properties=None, status=None, downloadable=None, passcode=None, validity=None, created=None, lastmodified=None):  # noqa: E501
        """MeetingSharing - a model defined in Swagger"""  # noqa: E501

        self._id = None
        self._meeting_guid = None
        self._owner_id = None
        self._sharing_url = None
        self._recepient_type = None
        self._properties = None
        self._status = None
        self._downloadable = None
        self._passcode = None
        self._validity = None
        self._created = None
        self._lastmodified = None
        self.discriminator = None

        if id is not None:
            self.id = id
        if meeting_guid is not None:
            self.meeting_guid = meeting_guid
        if owner_id is not None:
            self.owner_id = owner_id
        if sharing_url is not None:
            self.sharing_url = sharing_url
        if recepient_type is not None:
            self.recepient_type = recepient_type
        if properties is not None:
            self.properties = properties
        if status is not None:
            self.status = status
        if downloadable is not None:
            self.downloadable = downloadable
        if passcode is not None:
            self.passcode = passcode
        if validity is not None:
            self.validity = validity
        if created is not None:
            self.created = created
        if lastmodified is not None:
            self.lastmodified = lastmodified

    @property
    def id(self):
        """Gets the id of this MeetingSharing.  # noqa: E501

        This field is the Sharing Authorization unique identifier.  # noqa: E501

        :return: The id of this MeetingSharing.  # noqa: E501
        :rtype: int
        """
        return self._id

    @id.setter
    def id(self, id):
        """Sets the id of this MeetingSharing.

        This field is the Sharing Authorization unique identifier.  # noqa: E501

        :param id: The id of this MeetingSharing.  # noqa: E501
        :type: int
        """

        self._id = id

    @property
    def meeting_guid(self):
        """Gets the meeting_guid of this MeetingSharing.  # noqa: E501

        The meetingGuid is a globally unique Id for this particular recording. It is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 6 alphanumeric segments separated by dashes.  # noqa: E501

        :return: The meeting_guid of this MeetingSharing.  # noqa: E501
        :rtype: str
        """
        return self._meeting_guid

    @meeting_guid.setter
    def meeting_guid(self, meeting_guid):
        """Sets the meeting_guid of this MeetingSharing.

        The meetingGuid is a globally unique Id for this particular recording. It is a string which contains the numeric meeting id, followed by a colon, followed by a 128-bit integer number formatted as 6 alphanumeric segments separated by dashes.  # noqa: E501

        :param meeting_guid: The meeting_guid of this MeetingSharing.  # noqa: E501
        :type: str
        """

        self._meeting_guid = meeting_guid

    @property
    def owner_id(self):
        """Gets the owner_id of this MeetingSharing.  # noqa: E501

        The ownerId field is the unique Id number of the BlueJeans account that owns the recording  # noqa: E501

        :return: The owner_id of this MeetingSharing.  # noqa: E501
        :rtype: int
        """
        return self._owner_id

    @owner_id.setter
    def owner_id(self, owner_id):
        """Sets the owner_id of this MeetingSharing.

        The ownerId field is the unique Id number of the BlueJeans account that owns the recording  # noqa: E501

        :param owner_id: The owner_id of this MeetingSharing.  # noqa: E501
        :type: int
        """

        self._owner_id = owner_id

    @property
    def sharing_url(self):
        """Gets the sharing_url of this MeetingSharing.  # noqa: E501


        :return: The sharing_url of this MeetingSharing.  # noqa: E501
        :rtype: str
        """
        return self._sharing_url

    @sharing_url.setter
    def sharing_url(self, sharing_url):
        """Sets the sharing_url of this MeetingSharing.


        :param sharing_url: The sharing_url of this MeetingSharing.  # noqa: E501
        :type: str
        """

        self._sharing_url = sharing_url

    @property
    def recepient_type(self):
        """Gets the recepient_type of this MeetingSharing.  # noqa: E501


        :return: The recepient_type of this MeetingSharing.  # noqa: E501
        :rtype: RecepientOptionsComp
        """
        return self._recepient_type

    @recepient_type.setter
    def recepient_type(self, recepient_type):
        """Sets the recepient_type of this MeetingSharing.


        :param recepient_type: The recepient_type of this MeetingSharing.  # noqa: E501
        :type: RecepientOptionsComp
        """

        self._recepient_type = recepient_type

    @property
    def properties(self):
        """Gets the properties of this MeetingSharing.  # noqa: E501


        :return: The properties of this MeetingSharing.  # noqa: E501
        :rtype: MeetingSharingProperties
        """
        return self._properties

    @properties.setter
    def properties(self, properties):
        """Sets the properties of this MeetingSharing.


        :param properties: The properties of this MeetingSharing.  # noqa: E501
        :type: MeetingSharingProperties
        """

        self._properties = properties

    @property
    def status(self):
        """Gets the status of this MeetingSharing.  # noqa: E501

        This status field indicates the state of the sharing authorization record.  # noqa: E501

        :return: The status of this MeetingSharing.  # noqa: E501
        :rtype: str
        """
        return self._status

    @status.setter
    def status(self, status):
        """Sets the status of this MeetingSharing.

        This status field indicates the state of the sharing authorization record.  # noqa: E501

        :param status: The status of this MeetingSharing.  # noqa: E501
        :type: str
        """
        allowed_values = ["ACTIVE", "DELETED"]  # noqa: E501
        if status not in allowed_values:
            raise ValueError(
                "Invalid value for `status` ({0}), must be one of {1}"  # noqa: E501
                .format(status, allowed_values)
            )

        self._status = status

    @property
    def downloadable(self):
        """Gets the downloadable of this MeetingSharing.  # noqa: E501

        The downloadable field indicates whether the recording can be downloaded  # noqa: E501

        :return: The downloadable of this MeetingSharing.  # noqa: E501
        :rtype: bool
        """
        return self._downloadable

    @downloadable.setter
    def downloadable(self, downloadable):
        """Sets the downloadable of this MeetingSharing.

        The downloadable field indicates whether the recording can be downloaded  # noqa: E501

        :param downloadable: The downloadable of this MeetingSharing.  # noqa: E501
        :type: bool
        """

        self._downloadable = downloadable

    @property
    def passcode(self):
        """Gets the passcode of this MeetingSharing.  # noqa: E501

        TBD  # noqa: E501

        :return: The passcode of this MeetingSharing.  # noqa: E501
        :rtype: str
        """
        return self._passcode

    @passcode.setter
    def passcode(self, passcode):
        """Sets the passcode of this MeetingSharing.

        TBD  # noqa: E501

        :param passcode: The passcode of this MeetingSharing.  # noqa: E501
        :type: str
        """

        self._passcode = passcode

    @property
    def validity(self):
        """Gets the validity of this MeetingSharing.  # noqa: E501

        TBD  # noqa: E501

        :return: The validity of this MeetingSharing.  # noqa: E501
        :rtype: str
        """
        return self._validity

    @validity.setter
    def validity(self, validity):
        """Sets the validity of this MeetingSharing.

        TBD  # noqa: E501

        :param validity: The validity of this MeetingSharing.  # noqa: E501
        :type: str
        """

        self._validity = validity

    @property
    def created(self):
        """Gets the created of this MeetingSharing.  # noqa: E501

        Date, since epoch time, that the recording was created (in milliseconds).  # noqa: E501

        :return: The created of this MeetingSharing.  # noqa: E501
        :rtype: int
        """
        return self._created

    @created.setter
    def created(self, created):
        """Sets the created of this MeetingSharing.

        Date, since epoch time, that the recording was created (in milliseconds).  # noqa: E501

        :param created: The created of this MeetingSharing.  # noqa: E501
        :type: int
        """

        self._created = created

    @property
    def lastmodified(self):
        """Gets the lastmodified of this MeetingSharing.  # noqa: E501

        Date, since epoch time, that the recording was last modified (in milliseconds).  # noqa: E501

        :return: The lastmodified of this MeetingSharing.  # noqa: E501
        :rtype: int
        """
        return self._lastmodified

    @lastmodified.setter
    def lastmodified(self, lastmodified):
        """Sets the lastmodified of this MeetingSharing.

        Date, since epoch time, that the recording was last modified (in milliseconds).  # noqa: E501

        :param lastmodified: The lastmodified of this MeetingSharing.  # noqa: E501
        :type: int
        """

        self._lastmodified = lastmodified

    def to_dict(self):
        """Returns the model properties as a dict"""
        result = {}

        for attr, _ in six.iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value
        if issubclass(MeetingSharing, dict):
            for key, value in self.items():
                result[key] = value

        return result

    def to_str(self):
        """Returns the string representation of the model"""
        return pprint.pformat(self.to_dict())

    def __repr__(self):
        """For `print` and `pprint`"""
        return self.to_str()

    def __eq__(self, other):
        """Returns true if both objects are equal"""
        if not isinstance(other, MeetingSharing):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        return not self == other
