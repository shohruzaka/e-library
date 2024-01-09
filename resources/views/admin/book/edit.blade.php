@extends('admin.layouts.app')

@section('content')
<div class="content">
    <h2 class="content-heading">Kitoblar</h2>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Adabiyotni tahrirlash</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>

            </div>
        </div>
        <div class="block-content ps-7">
            <form action="{{route('book.update',$book->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach 
                        </ul>
                    </div>
                    @endif
                    <div class="col-md-6">
                        <div class="mb-4">
                            <label class="form-label" for="mega-lastname">Adabiyot nomi</label>
                            <input type="text" class="form-control form-control-lg" id="mega-username" name="title" value="{{$book->title}}">
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="mega-city">Mualliflar</label>
                            <input type="text" class="form-control form-control-lg" id="mega-city" name="authors" value="{{$book->authors}}">
                        </div>

                        <div class="mb-4">
                            <label class="form-label" for="mega-skills">Kategoriya</label>
                            <select class="form-select" id="mega-skills" name="cat_id">
                                @foreach ($cat as $id => $cat_name)
                                <option value="{{$id}}" @if($id==$book->cat_id) selected @endif>{{$cat_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="row mb-4">
                            <div class="col-6">
                                <label class="form-label" for="mega-age">Chop etilgan yili:</label>
                                <input type="number" class="form-control form-control-lg" id="mega-age" name="pub_date" min="1900" max="2030" value="{{$book->pub_date}}">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label d-block">Nashr tili</label>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="Uz" name="lang" value="Uz" 
                                @if("Uz" == $book->lang) checked @endif>
                                <label class="form-check-label" for="Uz">O'zbek tili</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="Eng" name="lang" value="Eng"
                                @if('Eng' == $book->lang) checked @endif>
                                <label class="form-check-label" for="Eng">Ingliz tili</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="Rus" name="lang" value="Ru" 
                                @if('Ru' == $book->lang) checked @endif>
                                <label class="form-check-label" for="Rus">Rus tili</label>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label" for="example-file-input">Faylni biriktiring</label>
                            <input class="form-control" type="file" id="example-file-input" name="fayl">
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-file opacity-50 me-1"></i> O'zgartirish
                            </button>
                        </div>

                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection