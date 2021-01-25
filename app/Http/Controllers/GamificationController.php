<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Auth;
class GamificationController extends Controller
{
    public function getLeaderboard(){

        $response = Http::post('http://api.tenenet.net/getLeaderboard?token=333eb0526f782a6de74735d9f97cb50c&id=alpha_ranking');
        $leaderboardLength = sizeof($response['message']['data']) < 10 ? sizeof($response['message']['data']) : 10;
        $playerScoreList = array();
        $playerNameList = array();
        for($i = 0 ; $i < $leaderboardLength ; $i++){
            $playerInfo = Http::post('http://api.tenenet.net/getPlayer?token=333eb0526f782a6de74735d9f97cb50c&alias='.$response['message']['data'][$i]['alias']);
            //Push the badge point
            array_push($playerNameList, $response['message']['data'][$i]['alias']);
            array_push($playerScoreList, $playerInfo['message']['score'][1]['value']); 
        }
        return view('gamification/ranking_dashboard', ['nameList' => $playerNameList, 'scoreList' => $playerScoreList]);
    }
    public function rewardInfo(){
        $user = Auth::user();
        $playerInfo = Http::post('http://api.tenenet.net/getPlayer?token=333eb0526f782a6de74735d9f97cb50c&alias='.$user->name);
        $rewardScore =  $playerInfo['message']['score'][2]['value'];
        return view('gamification/reward', ["user" => $user, "rewardPoint" => $rewardScore]);
    }
}
