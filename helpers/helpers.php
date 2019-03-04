<?php

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
        if(is_array($difficulty)){
            return 'Levels ' . $difficulty[0] . '-' . $difficulty[count($difficulty) - 1];
        }
        else {
            if($difficulty <= 3){
                return 'beginner';
            }
            else if($difficulty > 3 && $difficulty <= 6){
                return 'intermediate';
            }
            else if($difficulty > 6){
                return 'advanced';
            }
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

if (!function_exists('map_experience_rank')) {
    function map_experience_rank($xp)
    {
        switch ($xp) {
            case $xp < 250:
                return 'Casual';
            case $xp >= 250 && $xp < 1000:
                return 'Enthusiast I';
            case $xp >= 1000 && $xp < 2500:
                return 'Enthusiast II';
            case $xp >= 2500 && $xp < 5000:
                return 'Pro I';
            case $xp >= 5000 && $xp < 10000:
                return 'Pro II';
            case $xp >= 10000 && $xp < 20000:
                return 'Pro III';
            case $xp >= 20000 && $xp < 50000:
                return 'Master I';
            case $xp >= 50000 && $xp < 100000:
                return 'Master II';
            case $xp >= 100000 && $xp < 250000:
                return 'Master III';
            case $xp >= 250000 && $xp < 500000:
                return 'Drumeo Legend';
            case $xp >= 500000 && $xp < 1000000:
                return 'Legends: Star';
            case $xp >= 1000000 && $xp < 1500000:
                return 'Legends: Erskine';
            case $xp >= 1500000 && $xp < 2000000:
                return 'Legends: Cobham';
            case $xp >= 2000000 && $xp < 2500000:
                return 'Legends: Garibaldi';
            case $xp >= 2500000 && $xp < 3000000:
                return 'Legends: Peart';
            case $xp >= 3000000 && $xp < 4000000:
                return 'Legends: Bonham';
            case $xp >= 4000000 && $xp < 5000000:
                return 'Legends: Colaiuta';
            case $xp >= 5000000 && $xp < 7500000:
                return 'Legends: Gadd';
            case $xp >= 75000000 && $xp < 10000000:
                return 'Legends: Porcaro';
            case $xp >= 10000000:
                return 'Legends: Rich';
            default:
                return 'Drumeo Member';
        }
    }
}

if (!function_exists('parse_xp_value')) {
    function parse_xp_value($xp){
        if($xp >= 1000 && $xp < 100000){
            return round($xp / 1000, 1) . 'K';
        }
        else if($xp >= 100000 && $xp < 1000000){
            return round($xp / 1000, 0) . 'K';
        }
        else if($xp >= 1000000){
            return round($xp / 1000000, 1) . 'M';
        }

        return $xp;
    }
}

if (!function_exists('parse_content_duration')) {
    function parse_content_duration($duration){
        $minutes = round($duration / 60, 0);

        if($minutes < 60){
            return [
                "key" => 'Minutes',
                "value" => $minutes
            ];
        }
        else if($minutes >= 60 && $minutes <= 90){
            return [
                "key" => "Hour",
                "value" => 1
            ];
        }
        else {
            return [
                "key" => "Hours",
                "value" => round($minutes / 60, 0)
            ];
        }
    }
}


if(!function_exists('possessivize')){
    function possessivize($string) {
        return $string . '\'' . ($string[strlen($string) - 1] !== 's' ? 's' : '');
    }
}


if(!function_exists('parse_lesson_type_readable')){
    function parse_lesson_type_readable($type, $plural = false){
        switch ($type) {
            case 'course-part':
                $parsedType = 'Courses';
                break;
            case 'song-part':
                $parsedType = 'Songs';
                break;
            case 'play-along-part':
                $parsedType = 'Play-Alongs';
                break;
            case 'recording':
                $parsedType = 'Archives';
                break;
            case 'unit-part':
                $parsedType = 'Learning Paths';
                break;
            case 'chord-and-scale':
                $parsedType = 'Chords & Scales';
                break;
            case 'semester-pack':
                $parsedType =  'Pack';
                break;
            case 'semester-pack-lesson':
                $parsedType = 'Pack';
                break;
            case 'student-review':
                $parsedType = 'Student Reviews';
                break;
            default:
                $parsedType = $type;
                break;
        }

        if($plural){
            return $parsedType[strlen($parsedType)-1] == 's' ? $parsedType : ($parsedType . 's');
        }

        return $parsedType;
    }
}

if(!function_exists('parse_lesson_type_for_db')){
    function parse_lesson_type_for_db($type){
        switch ($type) {
            case 'recording':
                return 'archive';
            case 'chord-and-scale':
                return 'chords-and-scales';
            case 'semester-pack':
                return 'pack';
            case 'student-review':
                return 'student-reviews';
            default:
                return $type;
        }
    }
}