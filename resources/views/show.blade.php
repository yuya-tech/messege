@extends('layouts.app')

@section('content')

h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $message->id }}</td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $message->content }}</td>
        </tr>
    </table>

<!-- ここにページ毎のコンテンツを書く -->

@endsection