@extends('welcome')

@section('content')
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>List books</h1>
        </div>
        <div class="col-md-12">
            <table class="td-midell table table-striped table-hover">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Постер</td>
                    <td>Название</td>
                    <td>Автор</td>
                    <td>Год издания</td>
                    <td>Категория</td>
                    <td>Количество страниц</td>
                    <td>Описание</td>
                    <td>Количество книг</td>
                    <td>Редактировать</td>
                    <td>Удалить</td>
                </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>{{$book->id}}</td>
                            <td> <img src="/img/GenericBookCover.jpg" width="80px"></td>
                            <td>{{$book->name}}</td>
                            <td>{{$book->author}}</td>
                            <td>{{$book->year}}</td>
                            <td>
                                @foreach($book->category as $category)
                                    {{$category->name}}
                                @endforeach
                            </td>
                            <td>{{$book->number_of_pages}}</td>
                            <td>{{$book->description}}</td>
                            <td>{{$book->quantity}}</td>
                            <td>
                                <a class="btn btn-default" href="{{route('list.edit', $book)}}"><i class="fa fa-edit"></i></a>
                            </td>
                            <td>
                                <form onsubmit="if(confirm('Удалить?')){ return true} else {return false}" action="{{route('list.destroy', $book)}}" method="post">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn"><i class="fa fa-trash"></i></button>
                                    {{ csrf_field() }}
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @unless(count($books))
                        <tr class="text-center">
                            <td colspan="11">Не добавлена ни одна книга</td>
                        </tr>
                    @endunless
                </tbody>
            </table>
            <div class="text-center">
                {{ $books -> links() }}
            </div>
            <div class="text-center">
                <a class="btn btn-primary" href="{{route('list.create')}}">Добавить книгу</a>
            </div>
        </div>
        <div class="padd-mass col-md-12 text-center">
            @if (session()->has('messageSuccess'))
                <div class="alert alert-success">
                    <strong>{{ session()->get('messageSuccess') }}</strong>
                </div>
            @elseif (session()->has('messageWarning'))
                <div class="alert alert-danger">
                    <strong>{{ session()->get('messageWarning') }}</strong>
                </div>
            @endif
        </div>
    </div>
@endsection