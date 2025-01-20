<?php

namespace App\Http\Controllers;

use App\Models\Sermon;
use Illuminate\Http\Request;

class SermonsController extends Controller
{
    public function index()
    {
        // Retrieve all sermon entries
        $sermons = Sermon::all();

        return view('sermons', [
            'sermons' => $sermons,
            'pageTitle' => 'Sermons & Messages'
        ]);
    }

    /**
     * This method can be invoked via a scheduled task (e.g. Laravel Scheduler) 
     * to regularly fetch the latest videos from YouTube Data API for your playlist.
     */
    public function fetchYouTubePlaylist()
    {
        $apiKey = config('services.youtube.api_key');
        $playlistId = config('services.youtube.playlist_id');

        $url = "https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&playlistId={$playlistId}&key={$apiKey}&maxResults=10";

        $response = file_get_contents($url);
        $data = json_decode($response, true);

        foreach ($data['items'] as $item) {
            $videoId = $item['snippet']['resourceId']['videoId'];
            $title   = $item['snippet']['title'];

            Sermon::updateOrCreate(
                ['youtube_video_id' => $videoId],
                ['title' => $title]
            );
        }

        return "YouTube playlist updated.";
    }
}

