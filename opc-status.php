<?php

$status = opcache_get_status();
$config = opcache_get_configuration();

$used_memory_percentage = round(100 * (
($status['memory_usage']['used_memory'] + $status['memory_usage']['wasted_memory'])
/ $config['directives']['opcache.memory_consumption']));

$hit_rate_percentage = round($status['opcache_statistics']['opcache_hit_rate']);

$used_key_percentage = round(100 * (
$status['opcache_statistics']['num_cached_keys']
/ $status['opcache_statistics']['max_cached_keys']));

$wasted_percentage = round($status['memory_usage']['current_wasted_percentage'], 2);

$total_memory = $config['directives']['opcache.memory_consumption'];

$used_memory = $status['memory_usage']['used_memory'];

$free_memory = $status['memory_usage']['free_memory'];

$wasted_memory = $status['memory_usage']['wasted_memory'];

$num_cached_scripts = number_format($status['opcache_statistics']['num_cached_scripts']);

$hits = number_format($status['opcache_statistics']['hits']);

$misses = number_format($status['opcache_statistics']['misses']);

$blacklist_miss = number_format($status['opcache_statistics']['blacklist_misses']);

$num_cached_keys = number_format($status['opcache_statistics']['num_cached_keys']);

$max_cached_keys = number_format($status['opcache_statistics']['max_cached_keys']);

echo "used_memory_percentage=" . $used_memory_percentage .
    ";hit_rate_percentage=" . $hit_rate_percentage .
    ";used_key_percentage=" . $used_key_percentage .
    ";wasted_percentage=" . $wasted_percentage .
    ";total_memory=" . $total_memory .
    ";used_memory=" . $used_memory .
    ";free_memory=" . $free_memory .
    ";wasted_memory=" . $wasted_memory .
    ";num_cached_scripts=" . $num_cached_scripts .
    ";hits=" . $hits .
    ";misses=" . $misses .
    ";blacklist_miss=" . $blacklist_miss .
    ";num_cached_keys=" . $num_cached_keys .
    ";max_cached_keys=" . $max_cached_keys
   ;

?>