@extends('admin.layouts.app')

@section('js_after')

<script src="{{ asset('js/lib/jquery.min.js') }}"></script>
<script src="{{ asset('js/plugins/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

@if(session('success'))
<script>
    Codebase.helpersOnLoad('jq-notify');
    Codebase.helpers('jq-notify', {
        align: 'right', // 'right', 'left', 'center'
        from: 'top', // 'top', 'bottom'
        type: 'info', // 'info', 'success', 'warning', 'danger'
        icon: 'fa fa-check me-2', // Icon class
        message: "{{ session('success') }}"
    });
</script>
@endif

@endsection

@section('content')
<div class="content">
    <nav class="breadcrumb push bg-body-extra-light rounded-pill px-4 py-2">
        <a class="breadcrumb-item" href="be_pages_forum_categories.html">Category</a>
        <span class="breadcrumb-item active">List</span>
    </nav>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Category</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-bs-toggle="modal" data-bs-target="#modal-popin">
                    <i class="fa fa-plus"></i> New Category
                </button>
            </div>
        </div>
        <div class="block-content">
            <!-- Topics -->
            <table class="table table-striped table-borderless table-vcenter">
                <thead class="thead-light">
                    <tr>
                        <th class="d-none d-md-table-cell text-center" style="width: 100px;">#</th>
                        <th colspan="2">Nomi</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 100px;">Kitoblar</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 200px;">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cat as $cat)
                    <tr>
                        <td class="d-none d-md-table-cell text-center">
                            <div class="fw-semibold">{{$cat['id']}}</div>
                        </td>
                        <td colspan="2">
                            <a class="fw-semibold" href="be_pages_forum_discussion.html">{{$cat['cat_name']}}</a>
                        </td>

                        <td class="d-none d-md-table-cell text-center">
                            <div class="fw-semibold">115</div>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <div class="text-center">
                                <a class="btn btn-sm btn-primary" href="{{route('category.edit', $cat->id)}}">
                                    <i class="si si-pencil"></i> Edit
                                </a>
                                <form action="{{route('category.destroy',$cat->id)}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger my-1" onclick="return confirm('Rostdanmi ?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- END Topics -->
            <!-- Modal -->
            <div class="modal fade" id="modal-popin" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
                <div class="modal-dialog modal-dialog-popin" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded shadow-none mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Yangi kategoriya yaratish</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <form action="{{route('category.store')}}" method="POST">
                                @csrf
                                <div class="block-content fs-sm">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-4">
                                                <label class="form-label" for="title">Nomi</label>
                                                <input type="text" name="cat_name" class="form-control" id="title">
                                            </div>
                                            <!-- <div class="mb-4">
                                                <label class="form-label" for="description">Qisqacha tavsifi</label>
                                                <textarea class="js-maxlength form-control" id="description" name="description" maxlength="255" rows="2"></textarea>
                                                <div class="form-text text-muted fs-sm text-end"> Max 255</div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="block-content block-content-full block-content-sm text-end border-top">
                                    <button type="submit" class="btn btn-sm btn-alt-primary" name="submit">
                                        <i class="fa fa-save opacity-50 me-1"></i> Save
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal -->
            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-end me-3">
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                            <span aria-hidden="true">
                                <i class="fa fa-angle-left"></i>
                            </span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="javascript:void(0)">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="javascript:void(0)" aria-label="Next">
                            <span aria-hidden="true">
                                <i class="fa fa-angle-right"></i>
                            </span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- END Pagination -->
        </div>
    </div>
</div>

@endsection