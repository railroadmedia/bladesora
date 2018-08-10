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

if(!function_exists('seconds_to_time')){
    function seconds_to_time($seconds) {
        $start = new \DateTime('@0');
        $end = new \DateTime("@$seconds");

        if($seconds >= 3600){
            return $start->diff($end)->format('%H:%I:%S');
        }

        return $start->diff($end)->format('%I:%S');
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
            ->tz($timezoneString ?? auth()->user()->fetch('fields.timezone', 'America/Los_Angeles'));
    }
}

if(!function_exists('mapDifficulty')){
    function mapDifficulty($difficulty){
        if($difficulty <= 3){
            return 'beginner';
        }
        else if($difficulty > 3 && $difficulty <= 6){
            return 'intermediate';
        }
        else if($difficulty > 6){
            return 'advanced';
        }

        // Some content has difficulty already parsed as a word, if its undefined,
        // Just default it to 'all'
        return $difficulty || 'all';
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

if(!function_exists('get_resource_icon')){

    function get_resource_icon($filename){
        $extension = pathinfo($filename, PATHINFO_EXTENSION);

        switch($extension){
            case 'png':
                return 'fa-file-text';
            case 'pdf':
                return 'fa-file-pdf';
            case 'zip':
                return 'fa-file-archive';
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
