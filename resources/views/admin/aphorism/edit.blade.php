@extends('admin.layouts.app')

@section('content')
<div class="content">
    <form action="{{ route('aphorism.update', $aphorism->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Aforizmni tahrirlash</h3>
                <div class="block-options">
                    <button type="submit" class="btn btn-sm btn-alt-primary">
                        <i class="fa fa-save opacity-50 me-1"></i> Saqlash
                    </button>
                </div>
            </div>
            <div class="block-content">
                <div class="mb-4">
                    <label class="form-label" for="aphorism-text">Aforizm matni</label>
                    <textarea class="js-maxlength form-control" id="aphorism-text" name="text" maxlength="255" rows="3">{{ old('text', $aphorism->text) }}</textarea>
                    <div class="form-text text-muted fs-sm text-end">Maksimal 255 belgidan iborat</div>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="author">Muallif</label>
                    <input type="text" class="form-control" id="author" name="author" maxlength="100" value="{{ old('author', $aphorism->author) }}">
                    <div class="form-text text-muted fs-sm text-end">Maksimal 100 belgi</div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
