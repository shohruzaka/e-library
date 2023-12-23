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
    <div class="row">
        <!-- Row #3 -->
        <div class="col-md-4">
            <div class="block block-bordered block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-3 text-center">
                        <div class="mb-3">
                            <i class="si si-earphones fa-3x text-success"></i>
                        </div>
                        <div class="fs-4 fw-semibold">4.8k Kitoblar</div>
                        <div class="text-muted">Your library is growing!</div>
                        <div class="pt-3">
                            <a class="btn btn-alt-success" href="javascript:void(0)">
                                <i class="fa fa-shopping-bag opacity-50 me-1"></i> Get more
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block block-bordered block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-3 text-center">
                        <div class="mb-3">
                            <i class="si si-diamond fa-3x text-warning"></i>
                        </div>
                        <div class="fs-4 fw-semibold">7580 Foydalanuvchilar</div>
                        <div class="text-muted">Nice, you are doing great!</div>
                        <div class="pt-3">
                            <a class="btn btn-alt-warning" href="javascript:void(0)">
                                <i class="fa fa-check opacity-50 me-1"></i> Redeem them now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block block-bordered block-rounded">
                <div class="block-content block-content-full">
                    <div class="py-3 text-center">
                        <div class="mb-3">
                            <i class="si si-grid fa-3x text-info"></i>
                        </div>
                        <div class="fs-4 fw-semibold">2 Buyurtmalar</div>
                        <div class="text-muted">Currently active.</div>
                        <div class="pt-3">
                            <a class="btn btn-alt-info" href="javascript:void(0)">
                                <i class="fa fa-plus opacity-50 me-1"></i> Add More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Row #3 -->
    </div>
</div>

@endsection