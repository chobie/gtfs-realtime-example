<?php
spl_autoload_register(function($name){
  static $classmap;
  if (!$classmap) {
    $classmap = array(
      'transit_realtime\FeedMessage' => '/transit_realtime/FeedMessage.php',
      'transit_realtime\FeedHeader' => '/transit_realtime/FeedHeader.php',
      'transit_realtime\FeedHeader\Incrementality' => '/transit_realtime/FeedHeader/Incrementality.php',
      'transit_realtime\FeedEntity' => '/transit_realtime/FeedEntity.php',
      'transit_realtime\TripUpdate' => '/transit_realtime/TripUpdate.php',
      'transit_realtime\TripUpdate\StopTimeEvent' => '/transit_realtime/TripUpdate/StopTimeEvent.php',
      'transit_realtime\TripUpdate\StopTimeUpdate' => '/transit_realtime/TripUpdate/StopTimeUpdate.php',
      'transit_realtime\TripUpdate\StopTimeUpdate\ScheduleRelationship' => '/transit_realtime/TripUpdate/StopTimeUpdate/ScheduleRelationship.php',
      'transit_realtime\VehiclePosition' => '/transit_realtime/VehiclePosition.php',
      'transit_realtime\VehiclePosition\VehicleStopStatus' => '/transit_realtime/VehiclePosition/VehicleStopStatus.php',
      'transit_realtime\VehiclePosition\CongestionLevel' => '/transit_realtime/VehiclePosition/CongestionLevel.php',
      'transit_realtime\Alert' => '/transit_realtime/Alert.php',
      'transit_realtime\Alert\Cause' => '/transit_realtime/Alert/Cause.php',
      'transit_realtime\Alert\Effect' => '/transit_realtime/Alert/Effect.php',
      'transit_realtime\TimeRange' => '/transit_realtime/TimeRange.php',
      'transit_realtime\Position' => '/transit_realtime/Position.php',
      'transit_realtime\TripDescriptor' => '/transit_realtime/TripDescriptor.php',
      'transit_realtime\TripDescriptor\ScheduleRelationship' => '/transit_realtime/TripDescriptor/ScheduleRelationship.php',
      'transit_realtime\VehicleDescriptor' => '/transit_realtime/VehicleDescriptor.php',
      'transit_realtime\EntitySelector' => '/transit_realtime/EntitySelector.php',
      'transit_realtime\TranslatedString' => '/transit_realtime/TranslatedString.php',
      'transit_realtime\TranslatedString\Translation' => '/transit_realtime/TranslatedString/Translation.php',
      // @@protoc_insertion_point(autoloader_scope:classmap)
    );
  }
  if (isset($classmap[$name])) {
    require __DIR__ . DIRECTORY_SEPARATOR . $classmap[$name];
  }
});

call_user_func(function(){
  $registry = \ProtocolBuffers\ExtensionRegistry::getInstance();
  // @@protoc_insertion_point(extension_scope:registry)
});
