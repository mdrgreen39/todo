extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/category.css') }}" />
@endsection

@section('content')
<div class="todo__alert">
    @if (session('message'))
    <div class="todo__alert--success">
        {{ session('message') }}
    </div>
    @endif
    @if ($errors->any())
    <div class="todo__alert--danger">
        <ul>
            @foreach ($errors->any() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
<div class="category-content">
    <form class="create-form" action="">
        @csrf
        <div class="create-form__item">
            <input class="create-form__item-input" type="text">
        </div>
        <div class="create-form__button">
            <button class="create-form__button-submit">作成</button>
        </div>
    </form>
    <div class="category-table">
        <table class="category-table__inner">
            <tr class="category-table__row">
                <th class="category-table__header">Category</th>
            </tr>
            @foreach ($categries as $category)
            <tr class="category-table__row">
                <td class="category-table__item">
                    <form class="update-form" action="" method="">
                        @csrf
                        <div class="update-form__item">
                            <input class="update-form__item-input" type="text" name="content" value="{{ $todo['content'] }}" />
                        </div>
                        <div class="update-form__button">
                            <button class="update-form__button-submit" type="submit">更新</button>
                        </div>
                    </form>
                </td>
                <td class="category-table__item">
                    <form class="delete-form" action="">
                        @csrf
                        <div class="delete-form__button">
                            <button class="delete-form__button-submit" type="submit">削除</button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection