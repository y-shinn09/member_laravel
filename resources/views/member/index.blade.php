@extends('layouts.app')

@section('content')




<!-- タスク登録用パネル… -->
<div class="panel-body">
    <!-- バリデーションエラーの表示 -->
    @include('common.errors')



    <!-- 新タスクフォーム -->
    <form action="{{ route('touroku') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- タスク名 -->
        <div class="form-group">
            <h1 for="task-name" class="taitoru">会員登録</h1>

            <div class="col-sm-6">
                <input type="text" name="name" id="member-name" class="form-control" placeholder='名前'>
            </div>
            <div class="col-sm-6">
                <input type="text" name="phone" id="member-phone" class="form-control" placeholder='電話番号'>
            </div>
            <div class="col-sm-6">
                <input type="text" name="email" id="member-email" class="form-control" placeholder='メールアドレス'>
            </div>
            <!-- タスク追加ボタン -->
            <input type="submit" value="登録" class="btn-g" >
        </div>
            @csrf
    </form>
</div>

