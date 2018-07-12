@extends('welcome')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 text-center">
            <h1>Add book</h1>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 offset-lg-4">
        <form  action="{{route('list.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name"></label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Название книги">
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('author') }}</strong>
                    </span>
                @endif
            </div>
            {{--<div class="form-group">--}}
                {{--<label for="img"></label>--}}
                {{--<input type="file" class="form-control-file" name="img" id="img">--}}
            {{--</div>--}}
            <div class="form-group">
                <label for="author"></label>
                <input type="text" class="form-control" name="author" id="author" placeholder="Автор">
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('author') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="year"></label>
                <input type="text" class="form-control" name="year" id="year" placeholder="Год издания">
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('year') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="category"></label>
                <select class="form-control" name="categories" id="categories">
                    {{--<option value="null">Жанр</option>--}}
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="number_of_pages"></label>
                <input type="text" class="form-control" name="number_of_pages" id="number_of_pages" placeholder="Количество страниц">
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('number_of_pages') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="description"></label>
                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Описание"></textarea>
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="quantity"></label>
                <input type="text" class="form-control"name="quantity" id="quantity" placeholder="Количество книг">
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('quantity') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group text-center">
                <a href="{{route('list.index')}}" class="btn btn-warning mb-2">Cancel</a>
                <button type="submit" class="btn btn-primary mb-2">Send</button>
            </div>
        </form>
        </div>

        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 ">
            @if ($errors->any())
                <div class="nopadding">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection