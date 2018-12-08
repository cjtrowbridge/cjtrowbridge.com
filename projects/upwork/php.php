<?php

header('Content-Type: application/rss+xml; charset=utf-8');

echo file_get_contents('https://www.upwork.com/ab/feed/jobs/rss?budget=0-99%2C100-499%2C500-999%2C1000-4999&client_hires=1-9%2C10-&contractor_tier=1%2C2&duration_v2=week%2Cmonth&q=php+mysql&sort=renew_time_int+desc&user_location_match=1&paging=0%3B10&api_params=1&securityToken=705f6dac6f40e7c3f3ded7212e4b328d93bb1cf4d5bca45c3e2704c0c1267d378b773b72d1d395cfba04d30e54db37ba70737f62426e45ded2f9e490b3a9a2d4&userUid=782395009780232192&orgUid=782395009780232194');
