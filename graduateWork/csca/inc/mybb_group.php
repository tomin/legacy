<?php
/**
 * MyBB 1.6
 * Copyright 2010 MyBB Group, All Rights Reserved
 *
 * Website: http://mybb.com
 * License: http://mybb.com/about/license
 *
 * $Id: mybb_group.php 5016 2010-06-12 00:24:02Z RyanGordon $
 */

function output_logo()
{
	$mybb_logo = "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";
	header("Content-type: image/gif");
	echo base64_decode($mybb_logo);
	exit;
}
?>