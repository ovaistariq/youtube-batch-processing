<?php

require_once('yt_batch_processing.class.php');

$yt_batch_processing = new YT_Batch_Processing();

$video_urls = array (
	'http://www.youtube.com/watch?v=cE88ZYstEHc',
	'http://www.youtube.com/watch?v=DpAuSrIfGvM&feature=fvw',
	'http://www.youtube.com/watch?v=pRpeEdMmmQ0',
	'http://www.youtube.com/watch?v=2FM4UPrAjnc'
);

$entires = $yt_batch_processing->query_by_video_url($video_urls);

print '<pre>' . print_r($entires, true) . '</pre>';