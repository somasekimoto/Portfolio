<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WorkController extends Controller
{
    //

    public function fetchWorks()
    {
        $allRepos = self::getAllRepos();

        $repos = $allRepos->reject(function ($repo) {
            return $repo['stargazers_count'] == 0 || $repo['private'];
        })->sortByDesc('updated_at');

        $repos = $repos->map(function ($repo) {
            $topics = self::getTopics($repo);
            return [
                'name' => $repo['name'],
                'description' => $repo['description'],
                'html_url' => $repo['html_url'],
                'topics' => $topics,
            ];
        })->values();

        return response()->json(['works' => $repos]);
    }

    private static function getAllRepos()
    {
        $response = Http::withToken(env('GITHUB_ACCESS_TOKEN'))->get(env('REPOSITORY_API_URL'));
        return collect(json_decode($response->getBody(), true));
    }

    private static function getTopics($repo)
    {
        $header = ['Accept' => 'application/vnd.github.mercy-preview+json'];
        $topics_url = $repo['url'];
        $response = Http::withHeaders($header)->withToken(env('GITHUB_ACCESS_TOKEN'))->get($topics_url . '/topics');
        return $response->json()['names'];
    }
}
