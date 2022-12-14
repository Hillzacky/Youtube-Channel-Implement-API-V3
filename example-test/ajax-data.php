<?php

require('YT-Channel.php');

$YT_Channel = new YTChannel('AIzaSyBNoChqTQDPvpi2bC5GllQJIkSZvWCgIu4');

if (isset($_POST['yt_data'])) {
    switch ($_POST['yt_data']) {
        case 'channel_info' :
            $array = $YT_Channel->channel_info($_POST['yt_value']);
            echo $YT_Channel->dumb_array($YT_Channel->channel_info($_POST['yt_value']));
            break;

        case 'channel_statistics' :
            echo $YT_Channel->dumb_array($YT_Channel->channel_statistics($_POST['yt_value']));
            break;

        case 'channel_playlists' :
            echo $YT_Channel->dumb_array($YT_Channel->channel_playlists($_POST['yt_value']));
            break;

        case 'channel_videos' :
            echo $YT_Channel->dumb_array($YT_Channel->channel_videos($_POST['yt_value']));
            break;

        case 'channel_search' :
            echo $YT_Channel->dumb_array($YT_Channel->channel_search('UCJr72fY4cTaNZv7WPbvjaSw', $_POST['yt_value']));
            break;

        case 'channel_popular' :
            echo $YT_Channel->dumb_array($YT_Channel->channel_popular($_POST['yt_value']));
            break;

        case 'playlist_videos' :
            echo $YT_Channel->dumb_array($YT_Channel->playlist_videos($_POST['yt_value']));
            break;

        case 'related_videos' :
            echo $YT_Channel->dumb_array($YT_Channel->related_video($_POST['yt_value']));
            break;

        case 'video_comments' :
            echo $YT_Channel->dumb_array($YT_Channel->video_comments($_POST['yt_value']));
            break;

        case 'video_info' :
            echo $YT_Channel->dumb_array($YT_Channel->video_info($_POST['yt_value']));
            break;

        case 'channel_id_url' :
            echo $YT_Channel->dumb_array($YT_Channel->channelID_byUsername($_POST['yt_value']));
            break;

        case 'playlist_id_url' :
            echo $YT_Channel->dumb_array($YT_Channel->playlistID_byUrl($_POST['yt_value']));
            break;

        case 'video_id_url' :
            echo $YT_Channel->dumb_array($YT_Channel->videoID_byUrl($_POST['yt_value']));
            break;

        case 'public_search' :
            echo $YT_Channel->dumb_array($YT_Channel->public_search($_POST['yt_value']));
            break;
        case 'iframe_player' :
            echo $YT_Channel->iframe_video_player($_POST['yt_value']);
            break;
    }
}