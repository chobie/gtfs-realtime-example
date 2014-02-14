<?php
namespace transit_realtime\FeedHeader;

// @@protoc_insertion_point(namespace:.transit_realtime.FeedHeader.Incrementality)

/**
 * Generated by the protocol buffer compiler.  DO NOT EDIT!
 * source: gtfs-realtime.proto
 *
 */
class Incrementality extends \ProtocolBuffers\Enum
{
  // @@protoc_insertion_point(traits:.transit_realtime.FeedHeader.Incrementality)
  
  const FULL_DATASET = 0;
  const DIFFERENTIAL = 1;
  
  // @@protoc_insertion_point(const_scope:.transit_realtime.FeedHeader.Incrementality)
  
  // @@protoc_insertion_point(class_scope:.transit_realtime.FeedHeader.Incrementality)
  
  /**
   * @return \ProtocolBuffers\EnumDescriptor
   */
  public static function getEnumDescriptor()
  {
    static $descriptor;
    if (!$descriptor) {
      $builder = new \ProtocolBuffers\EnumDescriptorBuilder();
      $builder->addValue(new \ProtocolBuffers\EnumValueDescriptor(array(
        "value" => self::FULL_DATASET,
        "name"  => 'FULL_DATASET',
      )));
      $builder->addValue(new \ProtocolBuffers\EnumValueDescriptor(array(
        "value" => self::DIFFERENTIAL,
        "name"  => 'DIFFERENTIAL',
      )));
      // @@protoc_insertion_point(builder_scope:.transit_realtime.FeedHeader.Incrementality)
      $descriptor = $builder->build();
    }
    return $descriptor;
  }
}