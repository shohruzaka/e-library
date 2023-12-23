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
            </div>
        </div>

        <div class="block-content pt-1">
            <!-- Intro Category -->
            <table class="table table-striped table-borderless table-vcenter">
                <thead class="thead-light">
                    <tr>
                        <th colspan="2">Introduction</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 90px;">Hajmi</th>
                        <th class="d-none d-md-table-cell text-center" style="width: 120px;">Yuklab olishlar</th>
                        <th class="d-none d-md-table-cell" style="width: 150px;"> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" style="width: 65px;">
                            <a href=""><i class="si si-book-open fa-2x"></i></a>
                        </td>
                        <td>
                            <a class="fs-5 fw-semibold" href="be_pages_forum_topics.html">Welcome</a>
                            <!-- <div class="text-muted my-1">Introduce yourself to our community</div> -->
                            <div class="fs-sm text-muted">
                                <strong class="fw-semibold">Mualliflar:</strong> <a href="javascript:void(0)">admin</a>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="fw-semibold" href="javascript:void(0)">535</a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="fw-semibold" href="javascript:void(0)">6501</a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="btn btn-sm btn-primary" href="">
                                <i class="si si-pencil"></i> Edit
                            </a>
                            <form action="">
                                @csrf @method('METHOD')
                                <button type="submit" class="btn btn-sm btn-danger my-1" onclick="return confirm('delete')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="si si-bell fa-2x"></i>
                        </td>
                        <td>
                            <a class="fs-5 fw-semibold" href="be_pages_forum_topics.html">Announcements</a>
                            <div class="text-muted my-1">For all recent news</div>
                            <div class="fs-sm text-muted">
                                <strong class="fw-semibold">Moderators:</strong> <a href="javascript:void(0)">admin</a>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="fw-semibold" href="javascript:void(0)">382</a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="fw-semibold" href="javascript:void(0)">5670</a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="btn btn-sm btn-primary" href="">
                                <i class="si si-pencil"></i> Edit
                            </a>
                            <form action="">
                                @csrf @method('METHOD')
                                <button type="submit" class="btn btn-sm btn-danger my-1" onclick="return confirm('delete')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <i class="si si-badge fa-2x"></i>
                        </td>
                        <td>
                            <a class="fs-5 fw-semibold" href="be_pages_forum_topics.html">Terms &amp; Conditions</a>
                            <div class="text-muted my-1">Please read and comply with our forum’s rules</div>
                            <div class="fs-sm text-muted">
                                <strong class="fw-semibold">Moderators:</strong> <a href="javascript:void(0)">admin</a>
                            </div>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="fw-semibold" href="javascript:void(0)">956</a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="fw-semibold" href="javascript:void(0)">8107</a>
                        </td>
                        <td class="d-none d-md-table-cell text-center">
                            <a class="btn btn-sm btn-primary" href="">
                                <i class="si si-pencil"></i> Edit
                            </a>
                            <form action="">
                                @csrf @method('METHOD')
                                <button type="submit" class="btn btn-sm btn-danger my-1" onclick="return confirm('delete')">Delete</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- END Intro Category -->
            <!-- END Support Category -->
        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
            Footer content..
        </div>
    </div>
</div>

@endsection