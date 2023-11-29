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
                            <p class="fw-semibold text-white">Kategoriya</p>
                        </div>
                    </a>
                </div>

                <div class="col-6">
                    <a class="block block-rounded text-center" href="javascript:void(0)">
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

            <form action="{{route('category.store')}}" method="POST">
                @csrf
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Yangi kategoriya qo'shish</h3>
                        <div class="block-options">
                            <button type="submit" class="btn btn-sm btn-primary" name="submit">
                                <i class="fa fa-check opacity-50 me-1"></i> Saqlash
                            </button>
                            <button type="reset" class="btn btn-sm btn-secondary">Tozalash</button>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="row justify-content-center py-sm-3 py-md-5">
                            <div class="col-sm-10 col-md-10">
                                <div class="mb-4">
                                    <label class="form-label" for="block-form5-username">Kategoriya nomi:</label>
                                    <input type="text" class="form-control form-control-alt" id="block-form5-username" name="cat_name" placeholder="kategoriya nomini to'liq holda kiriting">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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