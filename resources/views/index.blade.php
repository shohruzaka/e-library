@extends('layouts.front')

@section('css_before')
<link rel="stylesheet" href="{{asset('js/plugins/magnific-popup/magnific-popup.css')}}">
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
  <!-- Dummy content -->
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
            <p>Don't cry because it's over, smile because it happened.</p>
            <footer class="blockquote-footer">Dr. Seuss</footer>
          </blockquote>
        </div>
      </div>

      <div class="block block-rounded">
        <div class="block-content block-content-full d-flex align-items-center justify-content-between bg-primary">
          <div class="me-1">
            <p class="fs-lg fw-semibold text-white mb-0">
              Kutubxona
            </p>
            <p class="fs-sm text-uppercase fw-semibold text-white-75 mb-0">
              fotolavhalar
            </p>
          </div>
          <div class="p-3">
            <i class="far fa-image fa-2x text-white-75"></i>
          </div>
        </div>
        <div class="block-content block-content-full">
          <!-- Simple Gallery (.js-gallery class is initialized in Helpers.jqMagnific()) -->
          <!-- For more info and examples you can check out http://dimsemenov.com/plugins/magnific-popup/ -->
          <div class="row js-gallery img-fluid-100 g-sm">
            <div class="col-6 col-lg-4 animated fadeIn">
              <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{asset('media/photos/photo23.jpg')}}">
                <img class="img-fluid" src="media/photos/photo23.jpg" alt="">
              </a>
            </div>
            <div class="col-6 col-lg-4 animated fadeIn">
              <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{asset('media/photos/photo24.jpg')}}">
                <img class="img-fluid" src="media/photos/photo24.jpg" alt="">
              </a>
            </div>
            <div class="col-6 col-lg-4 animated fadeIn">
              <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{asset('media/photos/photo25.jpg')}}">
                <img class="img-fluid" src="media/photos/photo25.jpg" alt="">
              </a>
            </div>
            <div class="col-6 col-lg-4 animated fadeIn">
              <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{asset('media/photos/photo26.jpg')}}"">
                        <img class=" img-fluid" src="media/photos/photo26.jpg" alt="">
              </a>
            </div>
            <div class="col-6 col-lg-4 animated fadeIn">
              <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="assets/media/photos/photo27@2x.jpg">
                <img class="img-fluid" src="media/photos/photo27.jpg" alt="">
              </a>
            </div>
            <div class="col-6 col-lg-4 animated fadeIn">
              <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="assets/media/photos/photo28@2x.jpg">
                <img class="img-fluid" src="media/photos/photo28.jpg" alt="">
              </a>
            </div>
          </div>
          <!-- END Simple Gallery -->
        </div>
      </div>




    </div>

    <div class="col-sm-8">
      <div class="block block-themed block-rounded">
        <div class="block-header bg-gd-sea">
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
                <th class="d-none d-md-table-cell text-center">#</th>
                <th class="d-none d-md-table-cell">Nomi</th>
                <th class="d-none d-md-table-cell text-center" style="width: 90px;">Hajmi</th>
                <th class="d-none d-md-table-cell text-center" style="width: 120px;">Yuklab olishlar</th>
                <th class="d-none d-md-table-cell" style="width: 100px;"> </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($books as $book)
              <tr>
                <td class="text-center" style="width: 65px;">
                  <a href=""><i class="si si-book-open fa-2x"></i></a>
                </td>
                <td>
                  <a class="fs-5 fw-semibold" href="#">{{$book['title']}}</a>
                  <!-- <div class="text-muted my-1">Introduce yourself to our community</div> -->
                  <div class="fs-sm text-muted">
                    <strong class="fw-semibold">Mualliflar:</strong> <a href="#" class="me-3">{{$book->authors}}</a>
                    <strong class="fw-semibold">Resurs tili:</strong> <a href="#" class="me-3">{{$book->lang}}</a>
                    <strong class="fw-semibold">{{$book->pub_date}}</strong>
                  </div>
                </td>
                <td class="d-none d-md-table-cell text-center">
                  <a class="fw-semibold" href="javascript:void(0)">{{$book->filesize}}</a>
                </td>
                <td class="d-none d-md-table-cell text-center">
                  <span class="fw-semibold" href="javascript:void(0)">{{$book->downloads}}</span>
                </td>
                <td class="d-none d-md-table-cell text-center">
                  <a class="btn btn-sm btn-primary w-100" href="{{ route('download',[$book->id]) }}">
                    Yuklash
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

        </div>
        <div class="block-content block-content-full block-content-sm bg-body-light fs-sm">
         {{ $books->links() }}
        </div>
      </div>

    </div>


  </div>
  <!-- END Dummy content -->
</div>
<!-- END Hero -->
@endsection