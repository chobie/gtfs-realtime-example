<?php
namespace transit_realtime;

// @@protoc_insertion_point(namespace:.transit_realtime.TripDescriptor)

/**
 * Generated by the protocol buffer compiler.  DO NOT EDIT!
 * source: gtfs-realtime.proto
 *
 * A descriptor that identifies an instance of a GTFS trip, or all instances of
 * a trip along a route.
 * - To specify a single trip instance, the trip_id (and if necessary,
 *   start_time) is set. If route_id is also set, then it should be same as one
 *   that the given trip corresponds to.
 * - To specify all the trips along a given route, only the route_id should be
 *   set. Note that if the trip_id is not known, then stop sequence ids in
 *   TripUpdate are not sufficient, and stop_ids must be provided as well. In
 *   addition, absolute arrival/departure times must be provided.
 *
 * -*- magic methods -*-
 *
 * @method string getTripId()
 * @method void setTripId(\string $value)
 * @method string getRouteId()
 * @method void setRouteId(\string $value)
 * @method string getStartTime()
 * @method void setStartTime(\string $value)
 * @method string getStartDate()
 * @method void setStartDate(\string $value)
 * @method \transit_realtime\TripDescriptor\ScheduleRelationship getScheduleRelationship()
 * @method void setScheduleRelationship(\transit_realtime\TripDescriptor\ScheduleRelationship $value)
 */
class TripDescriptor extends \ProtocolBuffers\Message
{
  // @@protoc_insertion_point(traits:.transit_realtime.TripDescriptor)
  
  /**
   * The trip_id from the GTFS feed that this selector refers to.
   * For non frequency expanded trips, this field is enough to uniquely identify
   * the trip. For frequency expanded, start_time and start_date might also be
   * necessary.
   *
   * @var string $trip_id
   * @tag 1
   * @label optional
   * @type \ProtocolBuffers::TYPE_STRING
   **/
  protected $trip_id;
  
  /**
   * The route_id from the GTFS that this selector refers to.
   *
   * @var string $route_id
   * @tag 5
   * @label optional
   * @type \ProtocolBuffers::TYPE_STRING
   **/
  protected $route_id;
  
  /**
   * The scheduled start time of this trip instance.
   * This field should be given only if the trip is frequency-expanded in the
   * GTFS feed. The value must precisely correspond to start_time specified for
   * the route in the GTFS feed plus some multiple of headway_secs.
   * Format of the field is same as that of GTFS/frequencies.txt/start_time,
   * e.g., 11:15:35 or 25:15:35.
   *
   * @var string $start_time
   * @tag 2
   * @label optional
   * @type \ProtocolBuffers::TYPE_STRING
   **/
  protected $start_time;
  
  /**
   * The scheduled start date of this trip instance.
   * Must be provided to disambiguate trips that are so late as to collide with
   * a scheduled trip on a next day. For example, for a train that departs 8:00
   * and 20:00 every day, and is 12 hours late, there would be two distinct
   * trips on the same time.
   * This field can be provided but is not mandatory for schedules in which such
   * collisions are impossible - for example, a service running on hourly
   * schedule where a vehicle that is one hour late is not considered to be
   * related to schedule anymore.
   * In YYYYMMDD format.
   *
   * @var string $start_date
   * @tag 3
   * @label optional
   * @type \ProtocolBuffers::TYPE_STRING
   **/
  protected $start_date;
  
  /**
   * @var \transit_realtime\TripDescriptor\ScheduleRelationship $schedule_relationship
   * @tag 4
   * @label optional
   * @type \ProtocolBuffers::TYPE_ENUM
   * @see \transit_realtime\TripDescriptor\ScheduleRelationship
   **/
  protected $schedule_relationship;
  
  
  // @@protoc_insertion_point(properties_scope:.transit_realtime.TripDescriptor)

  // @@protoc_insertion_point(class_scope:.transit_realtime.TripDescriptor)

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
        "type"     => \ProtocolBuffers::TYPE_STRING,
        "name"     => "trip_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(5, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_STRING,
        "name"     => "route_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(2, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_STRING,
        "name"     => "start_time",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(3, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_STRING,
        "name"     => "start_date",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(4, new \ProtocolBuffers\FieldDescriptor(array(
        "type"     => \ProtocolBuffers::TYPE_ENUM,
        "name"     => "schedule_relationship",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => null,
      )));
      // @@protoc_insertion_point(builder_scope:.transit_realtime.TripDescriptor)

      $descriptor = $desc->build();
    }
    return $descriptor;
  }

}
