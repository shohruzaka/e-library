@extends('admin.layouts.app')

@section('js_after')

<script src="{{ asset('js/lib/jquery.min.js') }}"></script>
<script src="{{ asset('js/plugins/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

@if(session('success'))
<script>
    Codebase.helpersOnLoad('jq-notify');
    Codebase.helpers('jq-notify', {
        align: 'right',
        from: 'top',
        type: 'info',
        icon: 'fa fa-check me-2',
        message: "{{ session('success') }}"
    });
</script>
@endif

@endsection

@section('content')
<div class="content">
    <nav class="breadcrumb push bg-body-extra-light rounded-pill px-4 py-2">
        <a class="breadcrumb-item" href="#">Aforizmlar</a>
        <span class="breadcrumb-item active">Ro'yxat</span>
    </nav>
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Aforizmlar</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option" data-bs-toggle="modal" data-bs-target="#modal-popin">
                    <i class="fa fa-plus"></i> Yangi aforizm
                </button>
            </div>
        </div>
        <div class="block-content">
            <!-- Aphorisms -->
            <table class="table table-striped table-borderless table-vcenter">
                <thead class="thead-light">
                    <tr>
                        <th class="d-none d-md-table-cell text-center" style="width: 60px;">#</th>
                        <th>Aforizm matni</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 200px;">Muallif</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 200px;">Boshqaruv</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($aphorisms as $aphorism)
                    <tr>
                        <td class="d-none d-md-table-cell text-center">
                            <div class="fw-semibold">{{$aphorism->id}}</div>
                        </td>
                        <td>
                            <span class="fw-semibold">{{$aphorism->text}}</span>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <div class="fw-semibold">{{$aphorism->author}}</div>
                        </td>
                        <td class="d-none d-md-table-cell">
                            <div class="text-center">
                                <a class="btn btn-sm btn-primary" href="{{route('aphorism.edit', $aphorism->id)}}">
                                    <i class="si si-pencil"></i> Tahrirlash
                                </a>
                                <form action="{{route('aphorism.destroy',$aphorism->id)}}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger my-1" onclick="return confirm('Rostdan ham o\'chirmoqchimisiz?')">O'chirish</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- END Aphorisms -->
            <!-- Modal -->
            <div class="modal fade" id="modal-popin" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
                <div class="modal-dialog modal-dialog-popin" role="document">
                    <div class="modal-content">
                        <div class="block block-rounded shadow-none mb-0">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Yangi aforizm qo'shish</h3>
                                <div class="block-options">
                                    <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <form action="{{route('aphorism.store')}}" method="POST">
                                @csrf
                                <div class="block-content fs-sm">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-4">
                                                <label class="form-label" for="aphorism_text">Aforizm matni</label>
                                                <textarea name="text" class="form-control" id="aphorism_text" rows="3" required></textarea>
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label" for="author">Muallif</label>
                                                <input type="text" name="author" class="form-control" id="author" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content block-content-full block-content-sm text-end border-top">
                                    <button type="submit" class="btn btn-sm btn-alt-primary" name="submit">
                                        <i class="fa fa-save opacity-50 me-1"></i> Saqlash
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
                {{ $aphorisms->links('pagination::bootstrap-4') }}
            </nav>
            <!-- END Pagination -->
        </div>
    </div>
</div>

@endsection
