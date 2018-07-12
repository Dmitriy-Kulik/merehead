@extends('welcome')

@section('content')
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Edit book</h1>
        </div>
        <div class="col-md-12">
{{--            <form  action="{{route('list.update', $book)}}" method="post">--}}
            <form  action="{{route('list.update', 1)}}" method="post">
                <input type="hidden" name="_method" value="put">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name"></label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$book->name or ""}}">
                </div>
                {{--<div class="form-group">--}}
                {{--<label for="img"></label>--}}
                {{--<input type="file" class="form-control-file" name="img" id="img">--}}
                {{--</div>--}}
                <div class="form-group">
                    <label for="author"></label>
                    <input type="text" class="form-control" name="author" id="author" value="{{$book->author or ""}}">
                </div>
                <div class="form-group">
                    <label for="year"></label>
                    <input type="text" class="form-control" name="year" id="year" value="{{$book->year or ""}}">
                </div>
                <div class="form-group">
                    <label for="category"></label>
                    <select class="form-control" name="categories" id="categories">
                        {{--<option value="null">Жанр</option>--}}
                        @foreach($categories as $category)
                            <option value="{{$book->categories or ""}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="number_of_pages"></label>
                    <input type="text" class="form-control" name="number_of_pages" id="number_of_pages" value="{{$book->number_of_pages or ""}}">
                </div>
                <div class="form-group">
                    <label for="description"></label>
                    <textarea class="form-control" name="description" id="description" rows="3" value="{{$book->description or ""}}"></textarea>
                </div>
                <div class="form-group">
                    <label for="quantity"></label>
                    <input type="text" class="form-control"name="quantity" id="quantity" value="{{$book->quantity or ""}}">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary mb-2">Send</button>
                </div>
            </form>
        </div>
    </div>
@endsection