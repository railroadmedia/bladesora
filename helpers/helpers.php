<?php

if (!function_exists('get_resource_icon')) {
    function get_resource_icon($filename)
    {
        $extension = pathinfo($filename, PATHINFO_EXTENSION);

        switch ($extension) {
            case 'png':
                return 'fa-file-image';
            case 'pdf':
                return 'fa-file-pdf';
            case 'zip':
                return 'fa-file-zip';
            case 'mp3':
                return 'fa-file-audio';
            case 'wav':
                return 'fa-file-audio';
            case 'mp4':
                return 'fa-file-video';
            default:
                return 'fa-cloud-download';
        }
    }
}

if (!function_exists('get_user_time')) {
    /**
     * @param $timeString
     * @param null $timezoneString
     * @return \Carbon\Carbon
     */
    function get_user_time($timeString, $timezoneString = null)
    {
        return \Carbon\Carbon::parse($timeString)
            ->tz($timezoneString ?? auth()->user()->fetch('timezone', 'America/Los_Angeles'));
    }
}

if (!function_exists('now')) {
    /**
     * @return \Carbon\Carbon
     */
    function now()
    {
        return \Carbon\Carbon::now();
    }
}