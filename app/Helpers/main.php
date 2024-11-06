<?php
if (! function_exists('generateDayAsTime')) {
    function generateDayAsTime()
    {
        $times = [];

        for ($hour = 0; $hour < 24; $hour++) {
            $formattedHourAM = $hour == 0 ? 12 : ($hour <= 12 ? $hour : $hour - 12);
            $periodAM = $hour < 12 ? "AM" : "PM";

            $times[] = sprintf("%02d:00 %s", $formattedHourAM, $periodAM);
            $times[] = sprintf("%02d:30 %s", $formattedHourAM, $periodAM);
        }

        return $times;
    }
}