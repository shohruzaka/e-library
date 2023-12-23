@extends('admin.layouts.app')

@section('content')
<div class="content">
    <form action="" method="POST">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Tahrirlash</h3>
                <div class="block-options">
                    <button type="submit" class="btn btn-sm btn-alt-primary">
                        <i class="fa fa-save opacity-50 me-1"></i> Save
                    </button>
                </div>
            </div>
            <div class="block-content">
                <div class="mb-4">
                    <label class="form-label" for="ecom-product-meta-title">Title</label>
                    <input type="text" class="js-maxlength form-control" id="title" name="cat_name" maxlength="55" value="{{$cat->cat_name}}">
                    <div class="form-text text-muted fs-sm text-end">Max 55 </div>
                </div>
                <div class="mb-4">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="js-maxlength form-control" id="description" name="description" maxlength="115" rows="2">Dark Souls III is an action role-playing video game developed by FromSoftware.</textarea>
                    <div class="form-text text-muted fs-sm text-end"> Max 115</div>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection