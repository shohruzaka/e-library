@extends('layouts.backend')

@section('content')
<!-- Page Content -->

<div class="content content-full">
  <!-- Dummy content -->
  <div class="row">
    <div class="col-sm-4">

      <div class="row">
        <!-- Row #1 -->
        <div class="col-6">
          <a class="block block-rounded text-center" href="javascript:void(0)">
            <div class="block-content bg-gd-dusk">
              <p class="mt-2 mb-3">
                <i class="si si-plus fa-2x text-white-75"></i>
              </p>
              <p class="fw-semibold text-white">Yangi kategoriya</p>
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
        <div class="block-header bg-info">
          <h3 class="block-title">
            <i class="fa fa-fw fa-list opacity-50 me-1"></i> Kategoriyalar
          </h3>
        </div>
        <div class="block-content p-3">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                <span><i class="fa fa-fw fa-star opacity-50 me-1"></i> News</span>
                <span class="badge rounded-pill bg-black-50">59</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                <span><i class="fa fa-fw fa-magic opacity-50 me-1"></i> Special Offers</span>
                <span class="badge rounded-pill bg-black-50">40</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                <span><i class="fa fa-fw fa-briefcase opacity-50 me-1"></i> Products</span>
                <span class="badge rounded-pill bg-black-50">95</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                <span><i class="fa fa-fw fa-pencil-alt opacity-50 me-1"></i> Tutorials</span>
                <span class="badge rounded-pill bg-black-50">25</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                <span><i class="fa fa-fw fa-book opacity-50 me-1"></i> Guides</span>
                <span class="badge rounded-pill bg-black-50">49</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0)">
                <span><i class="far fa-fw fa-newspaper opacity-50 me-1"></i> Updates</span>
                <span class="badge rounded-pill bg-black-50">78</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
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