@extends('layouts.backend')

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
<!-- Page Content -->

<div class="content content-full">
  <!-- Dummy content -->
  <div class="row">
    <div class="col-sm-4">

      <div class="row">
        <!-- Row #1 -->
        <div class="col-6">
          <a class="block block-rounded text-center" href="{{route('category.create')}}">
            <div class="block-content bg-gd-dusk">
              <p class="mt-2 mb-3">
                <i class="si si-plus fa-2x text-white-75"></i>
              </p>
              <p class="fw-semibold text-white">Kategoriya</p>
            </div>
          </a>
        </div>

        <div class="col-6">
          <a class="block block-rounded text-center" href="{{route('books.create')}}">
            <div class="block-content bg-gd-primary">
              <p class="mt-2 mb-3">
                <i class="si si-plus fa-2x text-white-75"></i>
              </p>
              <p class="fw-semibold text-white">Yangi kitob</p>
            </div>
          </a>
        </div>
        <!-- END Row #1 -->
      </div>

      <div class="block block-themed block-rounded">
        <div class="block-header bg-primary">
          <h3 class="block-title">Kategoriylar <small>main</small></h3>
          <div class="block-options">
            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modal-popin"><i class="fa fa-plus"></i> Add</button>
          </div>
        </div>
        <div class="block-content">
          <table class="table table-bordered table-vcenter">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px;">#</th>
                <th>Nomi</th>
                <th class="d-none d-sm-table-cell text-center" style="width: 15%;">Kitob soni</th>
                <th class="text-center" style="width: 100px;">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($cat as $cat)
              <tr>
                <th class="text-center" scope="row">1</th>
                <td><a href=""> {{$cat->cat_name}} </a></td>
                <td class="d-none d-sm-table-cell text-center">
                  15
                </td>
                <td class="text-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Edit">
                      <i class="fa fa-pencil-alt"></i>
                    </button>
                    <form method='post' action="{{ route('category.destroy', $cat->id)}}">
                      @csrf
                      <button type="submit" onclick="return confirm('Ishonchingiz komilmi?')" class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Delete">
                        <i class="fa fa-times"></i>
                      </button>

                    </form>
                  </div>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
      <!-- Modal Pop-In -->
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
              <div class="block-content fs-sm">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="mb-4">

                      <form action="{{route('category.store')}}" method="POST">
                        @csrf
                        <div class="input-group">
                          <input type="text" name="cat_name" class="form-control" id="example-group3-input2" name="example-group3-input2" placeholder="Kategoriya nomi...">
                          <button type="submit" class="btn btn-secondary">Qo'shish</button>
                        </div>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
              <div class="block-content block-content-full block-content-sm text-end border-top">
                <button type="button" class="btn btn-alt-danger" data-bs-dismiss="modal">
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Modal Pop-In -->


    </div>

    <div class="col-sm-8">
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

    <div class="col-12">
      <div class="block block-rounded">
        <div class="block-content">
          <p class="text-center py-7">...</p>
        </div>
      </div>
    </div>

  </div>
  <!-- END Dummy content -->
</div>

<div class="content">
  <div class="row">
    <div class="col-md-12 col-xl-12">
      <div class="block block-themed block-rounded">
        <div class="block-header bg-flat-light">
          <h3 class="block-title">Blockquotes</h3>
        </div>
        <div class="block-content">
          <blockquote class="blockquote">
            <p>Don't cry because it's over, smile because it happened.</p>
            <footer class="blockquote-footer">Dr. Seuss</footer>
          </blockquote>
          <blockquote class="blockquote text-end">
            <p>Be yourself; everyone else is already taken.</p>
            <footer class="blockquote-footer">Oscar Wilde</footer>
          </blockquote>
        </div>
      </div>
    </div>

  </div>
</div>



<!-- END Page Content -->
@endsection