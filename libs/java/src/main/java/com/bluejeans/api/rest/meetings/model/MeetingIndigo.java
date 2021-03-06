/*
 * BlueJeans Meetings REST API
 *  ## Video That Works Where You Do. <p>This site provides developers access to APIs from BlueJean's Meetings meeting service.  From here you can see and try actual API calls to manage User Accounts, Meetings, and Recordings, pull Analytical Data and Current State information.</p>    <nosdk> <hr> <div> <div class=\"key\">     <a href=\"./basics.html\" target=\"_\"><img class=\"keyimg\" src=\"./img/bjnmeeting.png\"/></a> </div> <div class=\"keybox\"> Basic instructions about What is a BlueJeans Meeting, and Getting Started Using API's, are <a href=\"./basics.html\" target=\"_blank\">available here <i class=\"glyphicon glyphicon-new-window\"></i></a>. </div> </div> <hr> <alert>2/21/2019</alert> Change response of Change layout and Endpoint API's to 204<br/> 12/03/2018 Add API for setting user profile photograph.<br/> 10/17/2018 Updated API field definitions for time variables to be 64-bit .<br/> 7/23/2018 Corrected errors in API definition file.<br/> 7/10/2018 Deprecated some Command Center API's.  Exposed API's that Summarize usage.<br/> 7/06/2018 Added API for changing ownership of recordings.<br/> 6/28/2018 Restored Create Enterprise Account, added Enterprise and User Profile Tag API's.<br/> 6/01/2018 Clarified Access Token requirements for meeting endpoint API's.<br/> 5/21/2018 Corrected return model for meeting history call.<br/> </nosdk> <hr> 
 *
 * OpenAPI spec version: 1.0.4402212019
 * Contact: glenn@bluejeans.com
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


package com.bluejeans.api.rest.meetings.model;

import java.util.Objects;
import java.util.Arrays;
import com.google.gson.TypeAdapter;
import com.google.gson.annotations.JsonAdapter;
import com.google.gson.annotations.SerializedName;
import com.google.gson.stream.JsonReader;
import com.google.gson.stream.JsonWriter;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import java.io.IOException;

/**
 * MeetingIndigo
 */

public class MeetingIndigo {
  @SerializedName("meetingId")
  private String meetingId = null;

  @SerializedName("meetingUUID")
  private String meetingUUID = null;

  @SerializedName("userName")
  private String userName = null;

  @SerializedName("email")
  private String email = null;

  @SerializedName("encryptionType")
  private Integer encryptionType = null;

  @SerializedName("title")
  private String title = null;

  @SerializedName("userFullName")
  private String userFullName = null;

  @SerializedName("phoneNumber")
  private String phoneNumber = null;

  @SerializedName("userFeatures")
  private String userFeatures = null;

  /**
   * Gets or Sets scheduledFrom
   */
  @JsonAdapter(ScheduledFromEnum.Adapter.class)
  public enum ScheduledFromEnum {
    WEB_APP("WEB_APP");

    private String value;

    ScheduledFromEnum(String value) {
      this.value = value;
    }

    public String getValue() {
      return value;
    }

    @Override
    public String toString() {
      return String.valueOf(value);
    }

    public static ScheduledFromEnum fromValue(String text) {
      for (ScheduledFromEnum b : ScheduledFromEnum.values()) {
        if (String.valueOf(b.value).equals(text)) {
          return b;
        }
      }
      return null;
    }

    public static class Adapter extends TypeAdapter<ScheduledFromEnum> {
      @Override
      public void write(final JsonWriter jsonWriter, final ScheduledFromEnum enumeration) throws IOException {
        jsonWriter.value(enumeration.getValue());
      }

      @Override
      public ScheduledFromEnum read(final JsonReader jsonReader) throws IOException {
        String value = jsonReader.nextString();
        return ScheduledFromEnum.fromValue(String.valueOf(value));
      }
    }
  }

  @SerializedName("scheduledFrom")
  private ScheduledFromEnum scheduledFrom = null;

  @SerializedName("inviteeCount")
  private Integer inviteeCount = null;

  @SerializedName("personal")
  private Boolean personal = null;

  @SerializedName("muteOnEntry")
  private Boolean muteOnEntry = null;

  @SerializedName("autoRecord")
  private Boolean autoRecord = null;

  @SerializedName("enterpriseName")
  private String enterpriseName = null;

  @SerializedName("moderatorLess")
  private Boolean moderatorLess = null;

  @SerializedName("startTime")
  private Long startTime = null;

  @SerializedName("endTime")
  private Long endTime = null;

  @SerializedName("totalCallSeconds")
  private Integer totalCallSeconds = null;

  @SerializedName("createTime")
  private Long createTime = null;

  @SerializedName("endpointsCount")
  private Integer endpointsCount = null;

  @SerializedName("concurrentEndpoints")
  private Integer concurrentEndpoints = null;

  @SerializedName("liveVisibleEndpointsCount")
  private Integer liveVisibleEndpointsCount = null;

  @SerializedName("qualarooRating")
  private Integer qualarooRating = null;

  @SerializedName("qualarooCount")
  private Integer qualarooCount = null;

  @SerializedName("meetingRecording")
  private Boolean meetingRecording = null;

  @SerializedName("videoShare")
  private Boolean videoShare = null;

  @SerializedName("contentShare")
  private Boolean contentShare = null;

  @SerializedName("liveRecording")
  private Boolean liveRecording = null;

  @SerializedName("liveVideoShare")
  private Boolean liveVideoShare = null;

  @SerializedName("liveContentShare")
  private Boolean liveContentShare = null;

  @SerializedName("largeMeeting")
  private Boolean largeMeeting = null;

  @SerializedName("roiDistance")
  private Float roiDistance = null;

  @SerializedName("mpls")
  private Boolean mpls = null;

  @SerializedName("id")
  private String id = null;

  public MeetingIndigo meetingId(String meetingId) {
    this.meetingId = meetingId;
    return this;
  }

   /**
   * This is the same as the numericMeetingId found elsewhere. We should have been more consistent.
   * @return meetingId
  **/
  @ApiModelProperty(value = "This is the same as the numericMeetingId found elsewhere. We should have been more consistent.")
  public String getMeetingId() {
    return meetingId;
  }

  public void setMeetingId(String meetingId) {
    this.meetingId = meetingId;
  }

  public MeetingIndigo meetingUUID(String meetingUUID) {
    this.meetingUUID = meetingUUID;
    return this;
  }

   /**
   * The universally unique identifier (UUID) of the meeting. This value is a string which contains 6 alphanumeric segments separated by dashes.
   * @return meetingUUID
  **/
  @ApiModelProperty(value = "The universally unique identifier (UUID) of the meeting. This value is a string which contains 6 alphanumeric segments separated by dashes.")
  public String getMeetingUUID() {
    return meetingUUID;
  }

  public void setMeetingUUID(String meetingUUID) {
    this.meetingUUID = meetingUUID;
  }

  public MeetingIndigo userName(String userName) {
    this.userName = userName;
    return this;
  }

   /**
   * Get userName
   * @return userName
  **/
  @ApiModelProperty(value = "")
  public String getUserName() {
    return userName;
  }

  public void setUserName(String userName) {
    this.userName = userName;
  }

  public MeetingIndigo email(String email) {
    this.email = email;
    return this;
  }

   /**
   * Get email
   * @return email
  **/
  @ApiModelProperty(value = "")
  public String getEmail() {
    return email;
  }

  public void setEmail(String email) {
    this.email = email;
  }

  public MeetingIndigo encryptionType(Integer encryptionType) {
    this.encryptionType = encryptionType;
    return this;
  }

   /**
   * Get encryptionType
   * @return encryptionType
  **/
  @ApiModelProperty(value = "")
  public Integer getEncryptionType() {
    return encryptionType;
  }

  public void setEncryptionType(Integer encryptionType) {
    this.encryptionType = encryptionType;
  }

  public MeetingIndigo title(String title) {
    this.title = title;
    return this;
  }

   /**
   * Get title
   * @return title
  **/
  @ApiModelProperty(value = "")
  public String getTitle() {
    return title;
  }

  public void setTitle(String title) {
    this.title = title;
  }

  public MeetingIndigo userFullName(String userFullName) {
    this.userFullName = userFullName;
    return this;
  }

   /**
   * Get userFullName
   * @return userFullName
  **/
  @ApiModelProperty(value = "")
  public String getUserFullName() {
    return userFullName;
  }

  public void setUserFullName(String userFullName) {
    this.userFullName = userFullName;
  }

  public MeetingIndigo phoneNumber(String phoneNumber) {
    this.phoneNumber = phoneNumber;
    return this;
  }

   /**
   * Get phoneNumber
   * @return phoneNumber
  **/
  @ApiModelProperty(value = "")
  public String getPhoneNumber() {
    return phoneNumber;
  }

  public void setPhoneNumber(String phoneNumber) {
    this.phoneNumber = phoneNumber;
  }

  public MeetingIndigo userFeatures(String userFeatures) {
    this.userFeatures = userFeatures;
    return this;
  }

   /**
   * Get userFeatures
   * @return userFeatures
  **/
  @ApiModelProperty(value = "")
  public String getUserFeatures() {
    return userFeatures;
  }

  public void setUserFeatures(String userFeatures) {
    this.userFeatures = userFeatures;
  }

  public MeetingIndigo scheduledFrom(ScheduledFromEnum scheduledFrom) {
    this.scheduledFrom = scheduledFrom;
    return this;
  }

   /**
   * Get scheduledFrom
   * @return scheduledFrom
  **/
  @ApiModelProperty(value = "")
  public ScheduledFromEnum getScheduledFrom() {
    return scheduledFrom;
  }

  public void setScheduledFrom(ScheduledFromEnum scheduledFrom) {
    this.scheduledFrom = scheduledFrom;
  }

  public MeetingIndigo inviteeCount(Integer inviteeCount) {
    this.inviteeCount = inviteeCount;
    return this;
  }

   /**
   * Get inviteeCount
   * @return inviteeCount
  **/
  @ApiModelProperty(value = "")
  public Integer getInviteeCount() {
    return inviteeCount;
  }

  public void setInviteeCount(Integer inviteeCount) {
    this.inviteeCount = inviteeCount;
  }

  public MeetingIndigo personal(Boolean personal) {
    this.personal = personal;
    return this;
  }

   /**
   * Get personal
   * @return personal
  **/
  @ApiModelProperty(value = "")
  public Boolean isPersonal() {
    return personal;
  }

  public void setPersonal(Boolean personal) {
    this.personal = personal;
  }

  public MeetingIndigo muteOnEntry(Boolean muteOnEntry) {
    this.muteOnEntry = muteOnEntry;
    return this;
  }

   /**
   * Get muteOnEntry
   * @return muteOnEntry
  **/
  @ApiModelProperty(value = "")
  public Boolean isMuteOnEntry() {
    return muteOnEntry;
  }

  public void setMuteOnEntry(Boolean muteOnEntry) {
    this.muteOnEntry = muteOnEntry;
  }

  public MeetingIndigo autoRecord(Boolean autoRecord) {
    this.autoRecord = autoRecord;
    return this;
  }

   /**
   * Get autoRecord
   * @return autoRecord
  **/
  @ApiModelProperty(value = "")
  public Boolean isAutoRecord() {
    return autoRecord;
  }

  public void setAutoRecord(Boolean autoRecord) {
    this.autoRecord = autoRecord;
  }

  public MeetingIndigo enterpriseName(String enterpriseName) {
    this.enterpriseName = enterpriseName;
    return this;
  }

   /**
   * Get enterpriseName
   * @return enterpriseName
  **/
  @ApiModelProperty(value = "")
  public String getEnterpriseName() {
    return enterpriseName;
  }

  public void setEnterpriseName(String enterpriseName) {
    this.enterpriseName = enterpriseName;
  }

  public MeetingIndigo moderatorLess(Boolean moderatorLess) {
    this.moderatorLess = moderatorLess;
    return this;
  }

   /**
   * Get moderatorLess
   * @return moderatorLess
  **/
  @ApiModelProperty(value = "")
  public Boolean isModeratorLess() {
    return moderatorLess;
  }

  public void setModeratorLess(Boolean moderatorLess) {
    this.moderatorLess = moderatorLess;
  }

  public MeetingIndigo startTime(Long startTime) {
    this.startTime = startTime;
    return this;
  }

   /**
   * Get startTime
   * @return startTime
  **/
  @ApiModelProperty(value = "")
  public Long getStartTime() {
    return startTime;
  }

  public void setStartTime(Long startTime) {
    this.startTime = startTime;
  }

  public MeetingIndigo endTime(Long endTime) {
    this.endTime = endTime;
    return this;
  }

   /**
   * Get endTime
   * @return endTime
  **/
  @ApiModelProperty(value = "")
  public Long getEndTime() {
    return endTime;
  }

  public void setEndTime(Long endTime) {
    this.endTime = endTime;
  }

  public MeetingIndigo totalCallSeconds(Integer totalCallSeconds) {
    this.totalCallSeconds = totalCallSeconds;
    return this;
  }

   /**
   * Get totalCallSeconds
   * @return totalCallSeconds
  **/
  @ApiModelProperty(value = "")
  public Integer getTotalCallSeconds() {
    return totalCallSeconds;
  }

  public void setTotalCallSeconds(Integer totalCallSeconds) {
    this.totalCallSeconds = totalCallSeconds;
  }

  public MeetingIndigo createTime(Long createTime) {
    this.createTime = createTime;
    return this;
  }

   /**
   * Get createTime
   * @return createTime
  **/
  @ApiModelProperty(value = "")
  public Long getCreateTime() {
    return createTime;
  }

  public void setCreateTime(Long createTime) {
    this.createTime = createTime;
  }

  public MeetingIndigo endpointsCount(Integer endpointsCount) {
    this.endpointsCount = endpointsCount;
    return this;
  }

   /**
   * Get endpointsCount
   * @return endpointsCount
  **/
  @ApiModelProperty(value = "")
  public Integer getEndpointsCount() {
    return endpointsCount;
  }

  public void setEndpointsCount(Integer endpointsCount) {
    this.endpointsCount = endpointsCount;
  }

  public MeetingIndigo concurrentEndpoints(Integer concurrentEndpoints) {
    this.concurrentEndpoints = concurrentEndpoints;
    return this;
  }

   /**
   * Get concurrentEndpoints
   * @return concurrentEndpoints
  **/
  @ApiModelProperty(value = "")
  public Integer getConcurrentEndpoints() {
    return concurrentEndpoints;
  }

  public void setConcurrentEndpoints(Integer concurrentEndpoints) {
    this.concurrentEndpoints = concurrentEndpoints;
  }

  public MeetingIndigo liveVisibleEndpointsCount(Integer liveVisibleEndpointsCount) {
    this.liveVisibleEndpointsCount = liveVisibleEndpointsCount;
    return this;
  }

   /**
   * Get liveVisibleEndpointsCount
   * @return liveVisibleEndpointsCount
  **/
  @ApiModelProperty(value = "")
  public Integer getLiveVisibleEndpointsCount() {
    return liveVisibleEndpointsCount;
  }

  public void setLiveVisibleEndpointsCount(Integer liveVisibleEndpointsCount) {
    this.liveVisibleEndpointsCount = liveVisibleEndpointsCount;
  }

  public MeetingIndigo qualarooRating(Integer qualarooRating) {
    this.qualarooRating = qualarooRating;
    return this;
  }

   /**
   * Get qualarooRating
   * @return qualarooRating
  **/
  @ApiModelProperty(value = "")
  public Integer getQualarooRating() {
    return qualarooRating;
  }

  public void setQualarooRating(Integer qualarooRating) {
    this.qualarooRating = qualarooRating;
  }

  public MeetingIndigo qualarooCount(Integer qualarooCount) {
    this.qualarooCount = qualarooCount;
    return this;
  }

   /**
   * Get qualarooCount
   * @return qualarooCount
  **/
  @ApiModelProperty(value = "")
  public Integer getQualarooCount() {
    return qualarooCount;
  }

  public void setQualarooCount(Integer qualarooCount) {
    this.qualarooCount = qualarooCount;
  }

  public MeetingIndigo meetingRecording(Boolean meetingRecording) {
    this.meetingRecording = meetingRecording;
    return this;
  }

   /**
   * Get meetingRecording
   * @return meetingRecording
  **/
  @ApiModelProperty(value = "")
  public Boolean isMeetingRecording() {
    return meetingRecording;
  }

  public void setMeetingRecording(Boolean meetingRecording) {
    this.meetingRecording = meetingRecording;
  }

  public MeetingIndigo videoShare(Boolean videoShare) {
    this.videoShare = videoShare;
    return this;
  }

   /**
   * Get videoShare
   * @return videoShare
  **/
  @ApiModelProperty(value = "")
  public Boolean isVideoShare() {
    return videoShare;
  }

  public void setVideoShare(Boolean videoShare) {
    this.videoShare = videoShare;
  }

  public MeetingIndigo contentShare(Boolean contentShare) {
    this.contentShare = contentShare;
    return this;
  }

   /**
   * Get contentShare
   * @return contentShare
  **/
  @ApiModelProperty(value = "")
  public Boolean isContentShare() {
    return contentShare;
  }

  public void setContentShare(Boolean contentShare) {
    this.contentShare = contentShare;
  }

  public MeetingIndigo liveRecording(Boolean liveRecording) {
    this.liveRecording = liveRecording;
    return this;
  }

   /**
   * Get liveRecording
   * @return liveRecording
  **/
  @ApiModelProperty(value = "")
  public Boolean isLiveRecording() {
    return liveRecording;
  }

  public void setLiveRecording(Boolean liveRecording) {
    this.liveRecording = liveRecording;
  }

  public MeetingIndigo liveVideoShare(Boolean liveVideoShare) {
    this.liveVideoShare = liveVideoShare;
    return this;
  }

   /**
   * Get liveVideoShare
   * @return liveVideoShare
  **/
  @ApiModelProperty(value = "")
  public Boolean isLiveVideoShare() {
    return liveVideoShare;
  }

  public void setLiveVideoShare(Boolean liveVideoShare) {
    this.liveVideoShare = liveVideoShare;
  }

  public MeetingIndigo liveContentShare(Boolean liveContentShare) {
    this.liveContentShare = liveContentShare;
    return this;
  }

   /**
   * Get liveContentShare
   * @return liveContentShare
  **/
  @ApiModelProperty(value = "")
  public Boolean isLiveContentShare() {
    return liveContentShare;
  }

  public void setLiveContentShare(Boolean liveContentShare) {
    this.liveContentShare = liveContentShare;
  }

  public MeetingIndigo largeMeeting(Boolean largeMeeting) {
    this.largeMeeting = largeMeeting;
    return this;
  }

   /**
   * Get largeMeeting
   * @return largeMeeting
  **/
  @ApiModelProperty(value = "")
  public Boolean isLargeMeeting() {
    return largeMeeting;
  }

  public void setLargeMeeting(Boolean largeMeeting) {
    this.largeMeeting = largeMeeting;
  }

  public MeetingIndigo roiDistance(Float roiDistance) {
    this.roiDistance = roiDistance;
    return this;
  }

   /**
   * Get roiDistance
   * @return roiDistance
  **/
  @ApiModelProperty(value = "")
  public Float getRoiDistance() {
    return roiDistance;
  }

  public void setRoiDistance(Float roiDistance) {
    this.roiDistance = roiDistance;
  }

  public MeetingIndigo mpls(Boolean mpls) {
    this.mpls = mpls;
    return this;
  }

   /**
   * Get mpls
   * @return mpls
  **/
  @ApiModelProperty(value = "")
  public Boolean isMpls() {
    return mpls;
  }

  public void setMpls(Boolean mpls) {
    this.mpls = mpls;
  }

  public MeetingIndigo id(String id) {
    this.id = id;
    return this;
  }

   /**
   * Same as the meetingUUID property in this object.
   * @return id
  **/
  @ApiModelProperty(value = "Same as the meetingUUID property in this object.")
  public String getId() {
    return id;
  }

  public void setId(String id) {
    this.id = id;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    MeetingIndigo meetingIndigo = (MeetingIndigo) o;
    return Objects.equals(this.meetingId, meetingIndigo.meetingId) &&
        Objects.equals(this.meetingUUID, meetingIndigo.meetingUUID) &&
        Objects.equals(this.userName, meetingIndigo.userName) &&
        Objects.equals(this.email, meetingIndigo.email) &&
        Objects.equals(this.encryptionType, meetingIndigo.encryptionType) &&
        Objects.equals(this.title, meetingIndigo.title) &&
        Objects.equals(this.userFullName, meetingIndigo.userFullName) &&
        Objects.equals(this.phoneNumber, meetingIndigo.phoneNumber) &&
        Objects.equals(this.userFeatures, meetingIndigo.userFeatures) &&
        Objects.equals(this.scheduledFrom, meetingIndigo.scheduledFrom) &&
        Objects.equals(this.inviteeCount, meetingIndigo.inviteeCount) &&
        Objects.equals(this.personal, meetingIndigo.personal) &&
        Objects.equals(this.muteOnEntry, meetingIndigo.muteOnEntry) &&
        Objects.equals(this.autoRecord, meetingIndigo.autoRecord) &&
        Objects.equals(this.enterpriseName, meetingIndigo.enterpriseName) &&
        Objects.equals(this.moderatorLess, meetingIndigo.moderatorLess) &&
        Objects.equals(this.startTime, meetingIndigo.startTime) &&
        Objects.equals(this.endTime, meetingIndigo.endTime) &&
        Objects.equals(this.totalCallSeconds, meetingIndigo.totalCallSeconds) &&
        Objects.equals(this.createTime, meetingIndigo.createTime) &&
        Objects.equals(this.endpointsCount, meetingIndigo.endpointsCount) &&
        Objects.equals(this.concurrentEndpoints, meetingIndigo.concurrentEndpoints) &&
        Objects.equals(this.liveVisibleEndpointsCount, meetingIndigo.liveVisibleEndpointsCount) &&
        Objects.equals(this.qualarooRating, meetingIndigo.qualarooRating) &&
        Objects.equals(this.qualarooCount, meetingIndigo.qualarooCount) &&
        Objects.equals(this.meetingRecording, meetingIndigo.meetingRecording) &&
        Objects.equals(this.videoShare, meetingIndigo.videoShare) &&
        Objects.equals(this.contentShare, meetingIndigo.contentShare) &&
        Objects.equals(this.liveRecording, meetingIndigo.liveRecording) &&
        Objects.equals(this.liveVideoShare, meetingIndigo.liveVideoShare) &&
        Objects.equals(this.liveContentShare, meetingIndigo.liveContentShare) &&
        Objects.equals(this.largeMeeting, meetingIndigo.largeMeeting) &&
        Objects.equals(this.roiDistance, meetingIndigo.roiDistance) &&
        Objects.equals(this.mpls, meetingIndigo.mpls) &&
        Objects.equals(this.id, meetingIndigo.id);
  }

  @Override
  public int hashCode() {
    return Objects.hash(meetingId, meetingUUID, userName, email, encryptionType, title, userFullName, phoneNumber, userFeatures, scheduledFrom, inviteeCount, personal, muteOnEntry, autoRecord, enterpriseName, moderatorLess, startTime, endTime, totalCallSeconds, createTime, endpointsCount, concurrentEndpoints, liveVisibleEndpointsCount, qualarooRating, qualarooCount, meetingRecording, videoShare, contentShare, liveRecording, liveVideoShare, liveContentShare, largeMeeting, roiDistance, mpls, id);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class MeetingIndigo {\n");
    
    sb.append("    meetingId: ").append(toIndentedString(meetingId)).append("\n");
    sb.append("    meetingUUID: ").append(toIndentedString(meetingUUID)).append("\n");
    sb.append("    userName: ").append(toIndentedString(userName)).append("\n");
    sb.append("    email: ").append(toIndentedString(email)).append("\n");
    sb.append("    encryptionType: ").append(toIndentedString(encryptionType)).append("\n");
    sb.append("    title: ").append(toIndentedString(title)).append("\n");
    sb.append("    userFullName: ").append(toIndentedString(userFullName)).append("\n");
    sb.append("    phoneNumber: ").append(toIndentedString(phoneNumber)).append("\n");
    sb.append("    userFeatures: ").append(toIndentedString(userFeatures)).append("\n");
    sb.append("    scheduledFrom: ").append(toIndentedString(scheduledFrom)).append("\n");
    sb.append("    inviteeCount: ").append(toIndentedString(inviteeCount)).append("\n");
    sb.append("    personal: ").append(toIndentedString(personal)).append("\n");
    sb.append("    muteOnEntry: ").append(toIndentedString(muteOnEntry)).append("\n");
    sb.append("    autoRecord: ").append(toIndentedString(autoRecord)).append("\n");
    sb.append("    enterpriseName: ").append(toIndentedString(enterpriseName)).append("\n");
    sb.append("    moderatorLess: ").append(toIndentedString(moderatorLess)).append("\n");
    sb.append("    startTime: ").append(toIndentedString(startTime)).append("\n");
    sb.append("    endTime: ").append(toIndentedString(endTime)).append("\n");
    sb.append("    totalCallSeconds: ").append(toIndentedString(totalCallSeconds)).append("\n");
    sb.append("    createTime: ").append(toIndentedString(createTime)).append("\n");
    sb.append("    endpointsCount: ").append(toIndentedString(endpointsCount)).append("\n");
    sb.append("    concurrentEndpoints: ").append(toIndentedString(concurrentEndpoints)).append("\n");
    sb.append("    liveVisibleEndpointsCount: ").append(toIndentedString(liveVisibleEndpointsCount)).append("\n");
    sb.append("    qualarooRating: ").append(toIndentedString(qualarooRating)).append("\n");
    sb.append("    qualarooCount: ").append(toIndentedString(qualarooCount)).append("\n");
    sb.append("    meetingRecording: ").append(toIndentedString(meetingRecording)).append("\n");
    sb.append("    videoShare: ").append(toIndentedString(videoShare)).append("\n");
    sb.append("    contentShare: ").append(toIndentedString(contentShare)).append("\n");
    sb.append("    liveRecording: ").append(toIndentedString(liveRecording)).append("\n");
    sb.append("    liveVideoShare: ").append(toIndentedString(liveVideoShare)).append("\n");
    sb.append("    liveContentShare: ").append(toIndentedString(liveContentShare)).append("\n");
    sb.append("    largeMeeting: ").append(toIndentedString(largeMeeting)).append("\n");
    sb.append("    roiDistance: ").append(toIndentedString(roiDistance)).append("\n");
    sb.append("    mpls: ").append(toIndentedString(mpls)).append("\n");
    sb.append("    id: ").append(toIndentedString(id)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(java.lang.Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }

}

