<?php

use function Livewire\Volt\{state};
use App\Models\Memo;

// ルートバインディング
state(['memo' => fn(Memo $memo) => $memo]);

$edit = function () {
    return redirect()->route('memos.edit', $this->memo);
};

?>

<div>
    <a href="{{ route('memos.index') }}">戻る</a>
    <h1>{{ $memo->title }}</h1>
    <p>{!! nl2br(e($memo->body)) !!}</p>
    <a href="{{route('memos.edit', $memo)}}">編集する</a>
</div>
