@extends('layouts.app')
​
@section('content')
​
<!-- タスク登録用パネル… -->
<div class="panel-body2">
    <!-- バリデーションエラーの表示 -->
    @include('common.errors')

    <!-- 新タスクフォーム -->
    <form action="{{ route('koushin') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- タスク名 -->
        <div class="form-group">

            <input type="hidden" name="id" value="{{ $member->id }}">
            <h1 for="task-name" class="taitoru">会員編集　会員ID:{{ $member->id }}</h1>
            ​
            <div class="col-sm-6">
                <input type="text" name="name" id="member-name" class="form-control" placeholder='名前' value="{{ $member->name }}">
            </div>
            <div class="col-sm-6">
                <input type="text" name="phone" id="member-phone" class="form-control" placeholder='電話番号' value="{{ $member->phone }}">
            </div>
            <div class="col-sm-6">
                <input type="text" name="email" id="member-email" class="form-control" placeholder='メールアドレス' value="{{ $member->email }}">
            </div>

            <div>
                <!-- タスク追加ボタン -->
                <input type="submit" value="編集" class="btn-g">
            </div>



        </div>
        ​
        @csrf

    </form>
    <div>
        <!-- 削除ボタン -->
        <form action="{{ route('delete') }}" method="POST" >
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <input type="hidden" name="id" value="{{ $member->id }}" class="btn-g">
            <button type="submit" id="delete-member-{{ $member->id }}" class="btn-g">
                削除
            </button>
            @csrf
        </form>

    </div>


</div>