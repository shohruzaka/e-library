@extends('layouts.app')

@section('css_before')


@endsection

@section('content')
<!-- Hero -->
<div class="bg-image bg-image-bottom" style="background-image: url('media/photos/library.jpg');">
  <div class="bg-primary-dark-op">
    <div class="content text-center">
      <div class="py-5">
        <h1 class="h2 fw-bold text-white mb-2">E-Library</h1>
        <h2 class="h5 fw-medium text-white">Muhammad al-Xorazmiy nomidagi TATU Nurafshon filiali elektron kutubxonasi!</h2>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-full">

  <div class="row justify-content-center my-5">
    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-transparent" href="javascript:void(0)">
        <div class="block-content block-content-full text-end bg-image" style="background-image: url('media/photos/ilmiy.jpg');">
          <div class="py-5 text-center bg-black-50">
            <div class="fs-2 fw-bold mb-0 text-white">1020</div>
            <div class="fs-sm fw-semibold text-uppercase text-white">Badiiy adabiyotlar</div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-transparent" href="javascript:void(0)">
        <div class="block-content block-content-full text-end bg-image" style="background-image: url('media/photos/badiiy.jpg');">
          <div class="py-5 text-center bg-black-50">
            <div class="fs-2 fw-bold mb-0 text-white">52</div>
            <div class="fs-sm fw-semibold text-uppercase text-white">Ilmiy adabiyotlar</div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-transparent" href="javascript:void(0)">
        <div class="block-content block-content-full text-end bg-image" style="background-image: url('media/photos/oquv.jpg');">
          <div class="py-5 text-center bg-black-50">
            <div class="fs-2 fw-bold mb-0 text-white">522</div>
            <div class="fs-sm fw-semibold text-uppercase text-white">O'quv adabiyotlar</div>
          </div>
        </div>
      </a>
    </div>

    <div class="col-md-6 col-xl-3">
      <a class="block block-rounded block-transparent" href="javascript:void(0)">
        <div class="block-content block-content-full text-end bg-image" style="background-image: url('media/photos/maqola.jpg');">
          <div class="py-5 text-center bg-black-50">
            <div class="fs-2 fw-bold mb-0 text-white">215</div>
            <div class="fs-sm fw-semibold text-uppercase text-white">Ilmiy maqolalar</div>
          </div>
        </div>
      </a>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-4">
      <div class="block block-themed block-rounded">
        <div class="block-header bg-gd-sun">
          <h3 class="block-title">
            <i class="fa fa-fw fa-circle me-1"></i> Bo'limlar
          </h3>
        </div>
        <div class="block-content p-3">
          <ul class="nav nav-pills flex-column">
            @foreach ($cat as $cat)
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center justify-content-between" href="#">
                <span><i class="fa fa-fw fa-folder me-3"></i>{{$cat->cat_name}}</span>
                <!-- <span class="badge rounded-pill bg-black-50">59</span> -->
              </a>
            </li>
            @endforeach
          </ul>
        </div>
      </div>

      <div class="block block-themed block-rounded">
        <div class="block-header bg-pulse">
          <h3 class="block-title"><i class="fa fa fa-signature me-1"></i>Buyuklar bisotidan</h3>
        </div>
        <div class="block-content">
          <blockquote class="blockquote">
            <p>Yaxshi kitoblarni bugun oʻqing, yomon kitoblarni oʻqishga ertaga albatta vaqt topiladi..</p>
            <footer class="blockquote-footer">Isaak Barrou</footer>
          </blockquote>
        </div>
      </div>
    </div>

    <div class="col-sm-8">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">
            Adabiyotlar
          </h3>
        </div>
        <div class="block-content block-content-full">
          <!-- DataTables functionality is initialized with .js-dataTable-simple class in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
          <table class="table table-bordered table-striped table-vcenter js-dataTable-simple">
            <thead>
              <tr>
                <th class="text-center">#</th>
                <th colspan="2">Nomi</th>
                <th class="d-none d-sm-table-cell" style="width: 15%;">Bo'lim</th>
                <th class="text-center" style="width: 15%;"> </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($books as $book)
              <tr>
                <td class="text-center">{{ $book->id }}</td>
                <td colspan="2" class="fw-semibold">{{ $book->title }}</td>
                <td class="d-none d-sm-table-cell">
                  <span class="badge bg-info">{{ $book->authors }}</span>
                </td>
                <td class="text-center">
                    <a href="{{ route('download',$book->id) }}" type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="download" download>
                    <i class="fa fa-download"></i>
                    </a>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div>
      <div>
      {{ $books->links() }}
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <!-- Slider with multiple images and center mode -->
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title"><i class="fa fa-play fa-fw text-primary"></i> Galereya &amp; Fotolavhalar</h3>
        </div>
        <div class="js-slider slick-nav-black slick-nav-hover" data-dots="true" data-arrows="true" data-slides-to-show="3" data-center-mode="true" data-autoplay="true" data-autoplay-speed="1000">
          <div>
            <img class="img-fluid" src="media/photos/library1.jpg" alt="">
          </div>
          <div>
            <img class="img-fluid" src="media/photos/library2.jpg" alt="">
          </div>
          <div>
            <img class="img-fluid" src="media/photos/library3.jpg" alt="">
          </div>
          <div>
            <img class="img-fluid" src="media/photos/library4.jpg" alt="">
          </div>
          <div>
            <img class="img-fluid" src="media/photos/library5.jpg" alt="">
          </div>
        </div>
      </div>
      <!-- END Slider with multiple images and center mode -->
    </div>

    <div class="col-12">
      <h2 class="fw-bold my-4 text-center">
        Bizni <span class="text-primary">kuzating</span>
      </h2>

      <div class="d-flex flex-column flex-md-row justify-content-center gy-2">

        <a class="btn btn-outline-danger mx-3 my-2">
          <i class="fa-brands fa-instagram me-2"></i>Instagram
        </a>
        <a class="btn btn-outline-primary mx-3 my-2">
          <i class="fa-brands fa-telegram me-2"></i>Telegram
        </a>
        <a class="btn btn-outline-danger mx-3 my-2">
          <i class="fa-brands fa-youtube me-2"></i>YouTube
        </a>
        <a class="btn btn-outline-primary mx-3 my-2">
          <i class="fa-brands fa-facebook me-2"></i>Facebook
        </a>

      </div>
    </div>

  </div>

</div>
<!-- END Dummy content -->
@endsection