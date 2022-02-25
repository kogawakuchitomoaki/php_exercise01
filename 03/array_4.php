<?php

$favorites = [
    'sport'  => ['サッカー', '野球', 'バスケ'],
    'cooking' => ['フレンチ', 'スイーツ', '中華料理'],
    'exercise'  => ['ランニング', '懸垂', '腹筋'],
];
// <<<EOM ヒアドキュメント
// EOMと書かれた場所からEOM;と書かれた場所の内容を変数に代入｡
echo <<<EOM
私の好きなスポーツは、
{$favorites['sport'][0]}、
{$favorites['sport'][2]}、
{$favorites['sport'][1]}です｡<br>
また、{$favorites['cooking'][1]}を作ることにもハマってまして、
その他にも
{$favorites['cooking'][2]}、
{$favorites['cooking'][0]}も作ります。<br>
最近は、運動にも取り組んでいて、
{$favorites['exercise'][2]}、
{$favorites['exercise'][1]}、
{$favorites['exercise'][0]}をよくします。
EOM;
