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
    <div class="block block-themed block-rounded">

        <div class="block-header bg-info">
            <h3 class="block-title">Adabiyotlar</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
                <button type="submit" class="btn btn-alt-primary">
                    <a href="{{route('book.create')}}"><i class="fa fa-plus opacity-100 me-1"></i> Qo'shish</a>
                </button>
            </div>
        </div>

        <div class="block-content pt-1">
            <!-- Intro Category -->
            <table class="table table-striped table-borderless table-vcenter py-0">
                <thead class="thead-light">
                    <tr>
                        <th class="d-none d-md-table-cell text-center">ID</th>
                        <th colspan="2">Adabiyot nomi</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 90px;">Hajmi</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 120px;">Yuklab olishlar</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 150px;">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td class="text-center">
                            <div class="fs-sm text-muted">
                                <strong class="fw-semibold">{{$book['id']}}</strong>
                            </div>
                        </td>
                        <td colspan="2">
                            <a class="fs-5 fw-semibold" href="#">{{$book['title']}}</a>
                            <!-- <div class="text-muted my-1">Introduce yourself to our community</div> -->
                            <div class="fs-sm text-muted">
                                <strong class="fw-semibold">Mualliflar:</strong> <a href="#" class="me-3">{{$book->authors}}</a>
                                <strong class="fw-semibold">Resurs tili:</strong> <a href="#" class="me-3">{{$book->lang}}</a>
                                <strong class="fw-semibold">{{$book->pub_date}}</strong>
                            </div>

                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="fw-semibold" href="#">{{$book->filesize}} MB</a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="fw-semibold" href="#">{{$book->downloads}}</a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="btn btn-sm btn-primary" href="{{route('book.edit',[$book->id])}}">
                                <i class="si si-pencil"></i> Edit
                            </a>
                            <form action="{{route('book.destroy',[$book->id])}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger my-1" onclick="return confirm('delete')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- END Intro Category -->
            <!-- END Support Category -->
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light text-end">
                {{ $books->links() }}
        </div>
    </div>
</div>

@endsection