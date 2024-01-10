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
            <p>Don't cry because it's over, smile because it happened.</p>
            <footer class="blockquote-footer">Dr. Seuss</footer>
          </blockquote>
        </div>
      </div>
    </div>

    <div class="col-sm-8">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">
            Dynamic Table <small>With only sorting and pagination</small>
          </h3>
        </div>
        <div class="block-content block-content-full">
          <!-- DataTables functionality is initialized with .js-dataTable-simple class in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
          <table class="table table-bordered table-striped table-vcenter js-dataTable-simple">
            <thead>
              <tr>
                <th class="text-center"></th>
                <th>Name</th>
                <th class="d-none d-sm-table-cell">Email</th>
                <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                <th class="text-center" style="width: 15%;">Profile</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center">1</td>
                <td class="fw-semibold">Justin Hunt</td>
                <td class="d-none d-sm-table-cell">customer1@example.com</td>
                <td class="d-none d-sm-table-cell">
                  <span class="badge bg-info">Business</span>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                    <i class="fa fa-user"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="text-center">2</td>
                <td class="fw-semibold">Brian Stevens</td>
                <td class="d-none d-sm-table-cell">customer2@example.com</td>
                <td class="d-none d-sm-table-cell">
                  <span class="badge bg-danger">Disabled</span>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                    <i class="fa fa-user"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="text-center">3</td>
                <td class="fw-semibold">Amanda Powell</td>
                <td class="d-none d-sm-table-cell">customer3@example.com</td>
                <td class="d-none d-sm-table-cell">
                  <span class="badge bg-info">Business</span>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                    <i class="fa fa-user"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="text-center">4</td>
                <td class="fw-semibold">Megan Fuller</td>
                <td class="d-none d-sm-table-cell">customer4@example.com</td>
                <td class="d-none d-sm-table-cell">
                  <span class="badge bg-success">VIP</span>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                    <i class="fa fa-user"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="text-center">5</td>
                <td class="fw-semibold">Judy Ford</td>
                <td class="d-none d-sm-table-cell">customer5@example.com</td>
                <td class="d-none d-sm-table-cell">
                  <span class="badge bg-warning">Trial</span>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                    <i class="fa fa-user"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="text-center">6</td>
                <td class="fw-semibold">Lori Grant</td>
                <td class="d-none d-sm-table-cell">customer6@example.com</td>
                <td class="d-none d-sm-table-cell">
                  <span class="badge bg-info">Business</span>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                    <i class="fa fa-user"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="text-center">7</td>
                <td class="fw-semibold">Jack Greene</td>
                <td class="d-none d-sm-table-cell">customer7@example.com</td>
                <td class="d-none d-sm-table-cell">
                  <span class="badge bg-success">VIP</span>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                    <i class="fa fa-user"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="text-center">8</td>
                <td class="fw-semibold">Melissa Rice</td>
                <td class="d-none d-sm-table-cell">customer8@example.com</td>
                <td class="d-none d-sm-table-cell">
                  <span class="badge bg-primary">Personal</span>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                    <i class="fa fa-user"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="text-center">9</td>
                <td class="fw-semibold">Carol Ray</td>
                <td class="d-none d-sm-table-cell">customer9@example.com</td>
                <td class="d-none d-sm-table-cell">
                  <span class="badge bg-danger">Disabled</span>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                    <i class="fa fa-user"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="text-center">10</td>
                <td class="fw-semibold">Carol Ray</td>
                <td class="d-none d-sm-table-cell">customer10@example.com</td>
                <td class="d-none d-sm-table-cell">
                  <span class="badge bg-warning">Trial</span>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                    <i class="fa fa-user"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="text-center">11</td>
                <td class="fw-semibold">Amber Harvey</td>
                <td class="d-none d-sm-table-cell">customer11@example.com</td>
                <td class="d-none d-sm-table-cell">
                  <span class="badge bg-primary">Personal</span>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                    <i class="fa fa-user"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="text-center">12</td>
                <td class="fw-semibold">Adam McCoy</td>
                <td class="d-none d-sm-table-cell">customer12@example.com</td>
                <td class="d-none d-sm-table-cell">
                  <span class="badge bg-primary">Personal</span>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                    <i class="fa fa-user"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="text-center">13</td>
                <td class="fw-semibold">Lori Moore</td>
                <td class="d-none d-sm-table-cell">customer13@example.com</td>
                <td class="d-none d-sm-table-cell">
                  <span class="badge bg-info">Business</span>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                    <i class="fa fa-user"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="text-center">14</td>
                <td class="fw-semibold">Carol White</td>
                <td class="d-none d-sm-table-cell">customer14@example.com</td>
                <td class="d-none d-sm-table-cell">
                  <span class="badge bg-warning">Trial</span>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                    <i class="fa fa-user"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="text-center">15</td>
                <td class="fw-semibold">Ryan Flores</td>
                <td class="d-none d-sm-table-cell">customer15@example.com</td>
                <td class="d-none d-sm-table-cell">
                  <span class="badge bg-warning">Trial</span>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                    <i class="fa fa-user"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="text-center">16</td>
                <td class="fw-semibold">Jose Mills</td>
                <td class="d-none d-sm-table-cell">customer16@example.com</td>
                <td class="d-none d-sm-table-cell">
                  <span class="badge bg-info">Business</span>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                    <i class="fa fa-user"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="text-center">17</td>
                <td class="fw-semibold">Carl Wells</td>
                <td class="d-none d-sm-table-cell">customer17@example.com</td>
                <td class="d-none d-sm-table-cell">
                  <span class="badge bg-warning">Trial</span>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                    <i class="fa fa-user"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="text-center">18</td>
                <td class="fw-semibold">Marie Duncan</td>
                <td class="d-none d-sm-table-cell">customer18@example.com</td>
                <td class="d-none d-sm-table-cell">
                  <span class="badge bg-success">VIP</span>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                    <i class="fa fa-user"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="text-center">19</td>
                <td class="fw-semibold">Jack Estrada</td>
                <td class="d-none d-sm-table-cell">customer19@example.com</td>
                <td class="d-none d-sm-table-cell">
                  <span class="badge bg-info">Business</span>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                    <i class="fa fa-user"></i>
                  </button>
                </td>
              </tr>
              <tr>
                <td class="text-center">20</td>
                <td class="fw-semibold">Carol Ray</td>
                <td class="d-none d-sm-table-cell">customer20@example.com</td>
                <td class="d-none d-sm-table-cell">
                  <span class="badge bg-info">Business</span>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="View Customer">
                    <i class="fa fa-user"></i>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
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