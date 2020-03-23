<?php

$status = opcache_get_status();
$config = opcache_get_configuration();

$used_memory_percentage = round(100 * (
($status['memory_usage']['used_memory'] + $status['memory_usage']['wasted_memory'])
/ $config['directives']['opcache.memory_consumption']));
echo nl2br("used_memory_percentage: " . $used_memory_percentage . "\n");

$hit_rate_percentage = round($status['opcache_statistics']['opcache_hit_rate']);
echo nl2br("hit_rate_percentage: " . $hit_rate_percentage . "\n");

$used_key_percentage = round(100 * (
$status['opcache_statistics']['num_cached_keys']
/ $status['opcache_statistics']['max_cached_keys']));
echo nl2br("used_key_percentage: " . $used_key_percentage . "\n");

$wasted_percentage = round($status['memory_usage']['current_wasted_percentage'], 2);
echo nl2br("wasted_percentage: " . $wasted_percentage . "\n");

$total_memory = $config['directives']['opcache.memory_consumption'];
echo nl2br("total_memory: " . $total_memory . "\n");

$used_memory = $status['memory_usage']['used_memory'];
echo nl2br("used_memory: " . $used_memory . "\n");

$free_memory = $status['memory_usage']['free_memory'];
echo nl2br("free_memory: " . $free_memory . "\n");

$wasted_memory = $status['memory_usage']['wasted_memory'];
echo nl2br("wasted_memory: " . $wasted_memory . "\n");

$num_cached_scripts = number_format($status['opcache_statistics']['num_cached_scripts']);
echo nl2br("num_cached_scripts: " . $num_cached_scripts . "\n");

$hits = number_format($status['opcache_statistics']['hits']);
echo nl2br("hits: " . $hits . "\n");

$misses = number_format($status['opcache_statistics']['misses']);
echo nl2br("misses: " . $misses . "\n");

$blacklist_miss = number_format($status['opcache_statistics']['blacklist_misses']);
echo nl2br("blacklist_miss: " . $blacklist_miss . "\n");

$num_cached_keys = number_format($status['opcache_statistics']['num_cached_keys']);
echo nl2br("num_cached_keys: " . $num_cached_keys . "\n");

$max_cached_keys = number_format($status['opcache_statistics']['max_cached_keys']);
echo nl2br("max_cached_keys: " . $max_cached_keys . "\n");

?>