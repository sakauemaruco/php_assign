@extends('layouts.default')

@section('title', 'GETフォーム')
@section('content')
    <form action="/query-strings" method="get"></form>
    <label>キーワード：<input type="text" name="keyword"></label>
    <button type=submit>送信</button>
    <P style="font-size:50px; line-height:50px; padding: 0px; margin:0px;">aaaaa</P>
@endsection