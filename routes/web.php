<?php

use Illuminate\Support\Facades\Route;
use Livewire\volt\volt;

Route::get('/', function () {
    return view('welcome');
});

// 一覧ページのルーティング
volt::route('/memos', 'memos.index')->name('memos.index');
// コンポーネントはseil artisan make:volt index
// ブラウザへの表示は/memosの部分となる

// 新規作成ページ 3番目に作成している。下のルーティングでパラメーターが入っているので2番目に書いている。
volt::route('/memos/create', 'memos.create')->name('memos.create');

// 詳細ページのルーティング作業1 次にコンポーネント作成
volt::route('/memos/{memo}', 'memos.show')->name('memos.show');
// コンポーネントは sail artisan make:volt memos/show としている。
// ブラウザへの表示は/memos番号となる。この番号は象さんマークの番号且つ内容はメモシーダーphpからから持ってきている。
