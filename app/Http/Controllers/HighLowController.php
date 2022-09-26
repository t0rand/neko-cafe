<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HighLowController extends Controller
{
    public function index() {
        $dealersNumber = random_int(1, 12);
        // セッションに保存
        session(['dealersNumber' => $dealersNumber]);

        return view('high-low.index', ['dealersNumber' => $dealersNumber]);
    }

    public function result(Request $request) {
        // ディーラーの数字(セッションに保存されたもの)を取得
        $dealersNumber = session('dealersNumber');

        // プレイヤーの数字を1~12の中からランダムに取得
        $playersNumber = random_int(1, 12);
        // プレーヤーの数字がディーラーのものより大きいか判定(大きい場合にtrue)
        $isHigh = $playersNumber > $dealersNumber;
        // 予想が当たったかの判定
        $isCorrect = ($isHigh && $request->get('guess') === 'high') || (!$isHigh && $request->get('guess') === 'low');
        return view('high-low.result', [
            'dealersNumber' => $dealersNumber,
            'playersNumber' => $playersNumber,
            'isCorrect' => $isCorrect,
        ]);
    }
}
