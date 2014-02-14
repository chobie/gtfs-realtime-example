<?php
require "autoload.php";

use transit_realtime\FeedMessage;
use transit_realtime\FeedEntity;

$message = new FeedMessage();
$header = $message->mutableHeader();
$header->set("gtfs_realtime_version", "1.0");

$entry = new FeedEntity();
$entry->set("id", 1);
$message->appendEntity($entry);

var_dump($message);

echo $message->serializeToString();
