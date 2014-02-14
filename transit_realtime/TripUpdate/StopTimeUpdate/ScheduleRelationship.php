<?php
namespace transit_realtime\TripUpdate\StopTimeUpdate;

// @@protoc_insertion_point(namespace:.transit_realtime.TripUpdate.StopTimeUpdate.ScheduleRelationship)

/**
 * Generated by the protocol buffer compiler.  DO NOT EDIT!
 * source: gtfs-realtime.proto
 *
 */
class ScheduleRelationship extends \ProtocolBuffers\Enum
{
  // @@protoc_insertion_point(traits:.transit_realtime.TripUpdate.StopTimeUpdate.ScheduleRelationship)
  
  /**
   * Trip that is running in accordance with its GTFS schedule, or is close
   * enough to the scheduled trip to be associated with it.
   */
  const SCHEDULED = 0;
  /**
   * The stop is skipped, i.e., the vehicle will not stop at this stop.
   * Arrival and departure are optional.
   */
  const SKIPPED = 1;
  /**
   * No data is given for this stop. The main intention for this value is to
   * give the predictions only for part of a trip, i.e., if the last update
   * for a trip has a NO_DATA specifier, then StopTimes for the rest of the
   * stops in the trip are considered to be unspecified as well.
   * Neither arrival nor departure should be supplied.
   */
  const NO_DATA = 2;
  
  // @@protoc_insertion_point(const_scope:.transit_realtime.TripUpdate.StopTimeUpdate.ScheduleRelationship)
  
  // @@protoc_insertion_point(class_scope:.transit_realtime.TripUpdate.StopTimeUpdate.ScheduleRelationship)
  
  /**
   * @return \ProtocolBuffers\EnumDescriptor
   */
  public static function getEnumDescriptor()
  {
    static $descriptor;
    if (!$descriptor) {
      $builder = new \ProtocolBuffers\EnumDescriptorBuilder();
      $builder->addValue(new \ProtocolBuffers\EnumValueDescriptor(array(
        "value" => self::SCHEDULED,
        "name"  => 'SCHEDULED',
      )));
      $builder->addValue(new \ProtocolBuffers\EnumValueDescriptor(array(
        "value" => self::SKIPPED,
        "name"  => 'SKIPPED',
      )));
      $builder->addValue(new \ProtocolBuffers\EnumValueDescriptor(array(
        "value" => self::NO_DATA,
        "name"  => 'NO_DATA',
      )));
      // @@protoc_insertion_point(builder_scope:.transit_realtime.TripUpdate.StopTimeUpdate.ScheduleRelationship)
      $descriptor = $builder->build();
    }
    return $descriptor;
  }
}
