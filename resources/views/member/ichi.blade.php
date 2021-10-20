@extends('layouts.app')

@section('content')

<div class="touroku">
<a href="/member">>>登録</a>
</div>
@if (count($members) > 0)
 <div class="panelkun">
    
    
    

    <div class="">
        <table class="table" border="1" >

          <tr>
              <th class="table-text">名前</th><th class="table-text">電話番号</th><th class="table-text">メールアドレス</th>
          </tr>


            <!-- テーブル本体 -->
            <tbody>
                @foreach ($members as $member)
                <tr>
                    <!-- タスク名 -->
                    <td class="table-text">
                        <div>{{ $member->name }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $member->phone }}</div>
                    </td>

                    <td class="table-text">
                        <div>{{ $member->email }}</div>
                    </td>

                    <td class="table-text">
                        <div><a href="/member/hensyu?id={{ $member->id }}"> >>編集 </a></div>
                    </td>



                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection