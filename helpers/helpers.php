<?php

function get_resource_icon($filename){
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    switch($extension){
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