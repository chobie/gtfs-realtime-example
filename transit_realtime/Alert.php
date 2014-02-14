<?php
namespace transit_realtime;

// @@protoc_insertion_point(namespace:.transit_realtime.Alert)

/**
 * Generated by the protocol buffer compiler.  DO NOT EDIT!
 * source: gtfs-realtime.proto
 *
 * An alert, indicating some sort of incident in the public transit network.
 *
 * -*- magic methods -*-
 *
 * @method array getActivePeriod()
 * @method void appendActivePeriod(\transit_realtime\TimeRange $value)
 * @method array getInformedEntity()
 * @method void appendInformedEntity(\transit_realtime\EntitySelector $value)
 * @method \transit_realtime\Alert\Cause getCause()
 * @method void setCause(\transit_realtime\Alert\Cause $value)
 * @method \transit_realtime\Alert\Effect getEffect()
 * @method void setEffect(\transit_realtime\Alert\Effect $value)
 * @method \transit_realtime\TranslatedString getUrl()
 * @method void setUrl(\transit_realtime\TranslatedString $value)
 * @method \transit_realtime\TranslatedString getHeaderText()
 * @method void setHeaderText(\transit_realtime\TranslatedString $value)
 * @method \transit_realtime\TranslatedString getDescriptionText()
 * @method void setDescriptionText(\transit_realtime\TranslatedString $value)
 */
class Alert extends \ProtocolBuffers\Message
{
  // @@protoc_insertion_point(traits:.transit_realtime.Alert)
  
  /**
   * Time when the alert should be shown to the user. If missing, the
   * alert will be shown as long as it appears in the feed.
   * If multiple ranges are given, the alert will be shown during all of them.
   *
   * @var array $active_period
   * @tag 1
   * @label optional
   * @type \ProtocolBuffers::TYPE_MESSAGE
   * @see \transit_realtime\TimeRange
   **/
  protected $active_period;
  
  /**
   * Entities whose users we should notify of this alert.
   *
   * @var array $informed_entity
   * @tag 5
   * @label optional
   * @type \ProtocolBuffers::TYPE_MESSAGE
   * @see \transit_realtime\EntitySelector
   **/
  protected $informed_entity;
  
  /**
   * @var \transit_realtime\Alert\Cause $cause
   * @tag 6
   * @label optional
   * @type \ProtocolBuffers::TYPE_ENUM
   * @see \transit_realtime\Alert\Cause
   **/
  protected $cause;
  
  /**
   * @var \transit_realtime\Alert\Effect $effect
   * @tag 7
   * @label optional
   * @type \ProtocolBuffers::TYPE_ENUM
   * @see \transit_realtime\Alert\Effect
   **/
  protected $effect;
  
  /**
   * The URL which provides additional information about the alert.
   *
   * @var \transit_realtime\TranslatedString $url
   * @tag 8
   * @label optional
   * @type \ProtocolBuffers::TYPE_MESSAGE
   **/
  protected $url;
  
  /**
   * Alert header. Contains a short summary of the alert text as plain-text.
   *
   * @var \transit_realtime\TranslatedString $header_text
   * @tag 10
   * @label optional
   * @type \ProtocolBuffers::TYPE_MESSAGE
   **/
  protected $header_text;
  
  /**
   * Full description for the alert as plain-text. The information in the
   * description should add to the information of the header.
   *
   * @var \transit_realtime\TranslatedString $description_text
   * @tag 11
   * @label optional
   * @type \ProtocolBuffers::TYPE_MESSAGE
   **/
  protected $description_text;
  
  
  // @@protoc_insertion_point(properties_scope:.transit_realtime.Alert)

  // @@protoc_insertion_point(class_scope:.transit_realtime.Alert)

  /**
   * get descriptor for protocol buffers
   * 
   * @return \ProtocolBuffersDescriptor
   */
  public static function getDescriptor()
  {
    static $descriptor;
    
    if (!isset($descriptor)) {
      $desc = new \ProtocolBuffers\DescriptorBuilder();
      $desc->addField(1, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "active_period",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message" => '\transit_realtime\TimeRange',
      )));
      $desc->addField(5, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "informed_entity",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message" => '\transit_realtime\EntitySelector',
      )));
      $desc->addField(6, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_ENUM,
        "name"     => "cause",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => \transit_realtime\Alert\Cause::UNKNOWN_CAUSE,
      )));
      $desc->addField(7, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_ENUM,
        "name"     => "effect",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => \transit_realtime\Alert\Effect::UNKNOWN_EFFECT,
      )));
      $desc->addField(8, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "url",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => null,
        "message" => '\transit_realtime\TranslatedString',
      )));
      $desc->addField(10, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "header_text",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => null,
        "message" => '\transit_realtime\TranslatedString',
      )));
      $desc->addField(11, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "description_text",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => null,
        "message" => '\transit_realtime\TranslatedString',
      )));
      // @@protoc_insertion_point(builder_scope:.transit_realtime.Alert)

      $descriptor = $desc->build();
    }
    return $descriptor;
  }

}
