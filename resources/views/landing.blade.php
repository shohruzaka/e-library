@extends('layouts.simple')

@section('content')
<!-- Hero -->
<div class="bg-image bg-image-bottom" style="background-image: url('media/photos/library.jpg');">
  <div class="bg-primary-dark-op">
    <div class="content text-center">
      <div class="pt-5 pb-3">
        <h1 class="h2 fw-bold text-white mb-2">E-Library</h1>
        <h2 class="h5 fw-medium text-white-75">Muhammad al-Xorazmiy nomidagi TATU Nurafshon filiali elektron kutubxonasi!</h2>
      </div>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-full">
  <!-- Dummy content -->
  <div class="row">
    <!-- Row #1 -->
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded text-center" href="javascript:void(0)">
        <div class="block-content ribbon ribbon-bookmark ribbon-glass ribbon-left bg-gd-dusk">
          <div class="ribbon-box">750</div>
          <p class="mt-2 mb-3">
            <i class="si si-book-open fa-2x text-white-75"></i>
          </p>
          <p class="fw-semibold text-white">Articles</p>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded text-center" href="javascript:void(0)">
        <div class="block-content bg-gd-primary">
          <p class="mt-2 mb-3">
            <i class="si si-plus fa-2x text-white-75"></i>
          </p>
          <p class="fw-semibold text-white">New Article</p>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded text-center" href="be_pages_forum_categories.html">
        <div class="block-content ribbon ribbon-bookmark ribbon-glass ribbon-left bg-gd-sea">
          <div class="ribbon-box">16</div>
          <p class="mt-2 mb-3">
            <i class="si si-bubbles fa-2x text-white-75"></i>
          </p>
          <p class="fw-semibold text-white">Comments</p>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded text-center" href="be_pages_generic_search.html">
        <div class="block-content bg-gd-lake">
          <p class="mt-2 mb-3">
            <i class="si si-magnifier fa-2x text-white-75"></i>
          </p>
          <p class="fw-semibold text-white">Search</p>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded text-center" href="be_comp_charts.html">
        <div class="block-content bg-gd-emerald">
          <p class="mt-2 mb-3">
            <i class="si si-bar-chart fa-2x text-white-75"></i>
          </p>
          <p class="fw-semibold text-white">Statistics</p>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-4 col-xl-2">
      <a class="block block-rounded text-center" href="javascript:void(0)">
        <div class="block-content bg-gd-corporate">
          <p class="mt-2 mb-3">
            <i class="si si-settings fa-2x text-white-75"></i>
          </p>
          <p class="fw-semibold text-white">Settings</p>
        </div>
      </a>
    </div>
    <!-- END Row #1 -->
  </div>

  <div class="row">

    <div class="col-sm-4">
      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">
            <i class="fa fa-fw fa-list opacity-50 me-1"></i> Categories
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
        <div class="block-header bg-flat-dark">
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
                <th class="d-none d-md-table-cell text-center" style="width: 170px;">Yuklab olishlar</th>
                <th class="d-none d-md-table-cell" style="width: 100px;"> </th>
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
                  <button type="button" class="btn btn-outline-primary">Yuklash</button>
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
                <td class="d-none d-md-table-cell">
                  <span class="fs-sm">by <a href="be_pages_generic_profile.html">Jose Wagner</a><br>on January 15, 2017</span>
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
                <td class="d-none d-md-table-cell">
                  <span class="fs-sm">by <a href="be_pages_generic_profile.html">Jose Parker</a><br>on January 21, 2017</span>
                </td>
              </tr>
            </tbody>
          </table>
          <!-- END Intro Category -->

          <!-- Web App Category -->
          <table class="table table-striped table-borderless table-vcenter">
            <thead class="thead-light">
              <tr>
                <th colspan="2">Web App</th>
                <th class="d-none d-md-table-cell text-center" style="width: 90px;">Topics</th>
                <th class="d-none d-md-table-cell text-center" style="width: 90px;">Posts</th>
                <th class="d-none d-md-table-cell" style="width: 180px;">Last Post</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center" style="width: 65px;">
                  <i class="si si-speedometer fa-2x"></i>
                </td>
                <td>
                  <a class="fs-5 fw-semibold" href="be_pages_forum_topics.html">Getting Started</a>
                  <div class="text-muted my-1">If you are a new user, here you will find everything you need</div>
                  <div class="fs-sm text-muted">
                    <strong class="fw-semibold">Moderators:</strong> <a href="javascript:void(0)">admin</a>, <a href="javascript:void(0)">geogreen</a>, <a href="javascript:void(0)">annasco</a>
                  </div>
                </td>
                <td class="d-none d-md-table-cell text-center">
                  <a class="fw-semibold" href="javascript:void(0)">279</a>
                </td>
                <td class="d-none d-md-table-cell text-center">
                  <a class="fw-semibold" href="javascript:void(0)">7066</a>
                </td>
                <td class="d-none d-md-table-cell">
                  <span class="fs-sm">by <a href="be_pages_generic_profile.html">Brian Cruz</a><br>on January 17, 2017</span>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <i class="si si-compass fa-2x"></i>
                </td>
                <td>
                  <a class="fs-5 fw-semibold" href="be_pages_forum_topics.html">Tutorials</a>
                  <div class="text-muted my-1">The best place to learn new stuff</div>
                  <div class="fs-sm text-muted">
                    <strong class="fw-semibold">Moderators:</strong> <a href="javascript:void(0)">admin</a>, <a href="javascript:void(0)">geogreen</a>, <a href="javascript:void(0)">justinhunt</a>
                  </div>
                </td>
                <td class="d-none d-md-table-cell text-center">
                  <a class="fw-semibold" href="javascript:void(0)">890</a>
                </td>
                <td class="d-none d-md-table-cell text-center">
                  <a class="fw-semibold" href="javascript:void(0)">7628</a>
                </td>
                <td class="d-none d-md-table-cell">
                  <span class="fs-sm">by <a href="be_pages_generic_profile.html">Jeffrey Shaw</a><br>on January 23, 2017</span>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <i class="si si-wrench fa-2x"></i>
                </td>
                <td>
                  <a class="fs-5 fw-semibold" href="be_pages_forum_topics.html">Plugins</a>
                  <div class="text-muted my-1">Creating or looking for an existing plugin?</div>
                  <div class="fs-sm text-muted">
                    <strong class="fw-semibold">Moderators:</strong> <a href="javascript:void(0)">admin</a>, <a href="javascript:void(0)">geogreen</a>, <a href="javascript:void(0)">barbaga</a>
                  </div>
                </td>
                <td class="d-none d-md-table-cell text-center">
                  <a class="fw-semibold" href="javascript:void(0)">474</a>
                </td>
                <td class="d-none d-md-table-cell text-center">
                  <a class="fw-semibold" href="javascript:void(0)">3072</a>
                </td>
                <td class="d-none d-md-table-cell">
                  <span class="fs-sm">by <a href="be_pages_generic_profile.html">Jose Mills</a><br>on January 22, 2017</span>
                </td>
              </tr>
              <tr class="fs-sm">
                <td></td>
                <td>
                  <span class="fw-semibold">Subforum:</span> <a class="fw-semibold" href="be_pages_forum_topics.html">Plugins <i class="fa fa-angle-right"></i> How to build</a>
                  <div class="text-muted mt-1">Looking for info about creating your own plugin?</div>
                </td>
                <td class="d-none d-md-table-cell text-center">
                  <a class="fw-semibold" href="javascript:void(0)">692</a>
                </td>
                <td class="d-none d-md-table-cell text-center">
                  <a class="fw-semibold" href="javascript:void(0)">8813</a>
                </td>
                <td class="d-none d-md-table-cell">
                  <span>by <a href="be_pages_generic_profile.html">Jack Estrada</a><br>on January 22, 2017</span>
                </td>
              </tr>
              <tr class="fs-sm">
                <td></td>
                <td>
                  <span class="fw-semibold">Subforum:</span> <a class="fw-semibold" href="be_pages_forum_topics.html">Plugins <i class="fa fa-angle-right"></i> Showcase</a>
                  <div class="text-muted mt-1">Did you create a plugin? Showcase it here</div>
                </td>
                <td class="d-none d-md-table-cell text-center">
                  <a class="fw-semibold" href="javascript:void(0)">696</a>
                </td>
                <td class="d-none d-md-table-cell text-center">
                  <a class="fw-semibold" href="javascript:void(0)">9136</a>
                </td>
                <td class="d-none d-md-table-cell">
                  <span>by <a href="be_pages_generic_profile.html">Barbara Scott</a><br>on January 22, 2017</span>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <i class="si si-settings fa-2x"></i>
                </td>
                <td>
                  <a class="fs-5 fw-semibold" href="be_pages_forum_topics.html">API</a>
                  <div class="text-muted my-1">Take advantage of our powerful API</div>
                  <div class="fs-sm text-muted">
                    <strong class="fw-semibold">Moderators:</strong> <a href="javascript:void(0)">admin</a>, <a href="javascript:void(0)">geogreen</a>, <a href="javascript:void(0)">davidfu</a>
                  </div>
                </td>
                <td class="d-none d-md-table-cell text-center">
                  <a class="fw-semibold" href="javascript:void(0)">141</a>
                </td>
                <td class="d-none d-md-table-cell text-center">
                  <a class="fw-semibold" href="javascript:void(0)">4188</a>
                </td>
                <td class="d-none d-md-table-cell">
                  <span class="fs-sm">by <a href="be_pages_generic_profile.html">Jesse Fisher</a><br>on January 17, 2017</span>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <i class="si si-chemistry fa-2x"></i>
                </td>
                <td>
                  <a class="fs-5 fw-semibold" href="be_pages_forum_topics.html">Extentions</a>
                  <div class="text-muted my-1">Extend our web application’s features</div>
                  <div class="fs-sm text-muted">
                    <strong class="fw-semibold">Moderators:</strong> <a href="javascript:void(0)">admin</a>, <a href="javascript:void(0)">geogreen</a>, <a href="javascript:void(0)">bettylee</a>
                  </div>
                </td>
                <td class="d-none d-md-table-cell text-center">
                  <a class="fw-semibold" href="javascript:void(0)">378</a>
                </td>
                <td class="d-none d-md-table-cell text-center">
                  <a class="fw-semibold" href="javascript:void(0)">7473</a>
                </td>
                <td class="d-none d-md-table-cell">
                  <span class="fs-sm">by <a href="be_pages_generic_profile.html">Barbara Scott</a><br>on January 13, 2017</span>
                </td>
              </tr>
            </tbody>
          </table>
          <!-- END Web App Category -->

          <!-- Support Category -->
          <table class="table table-striped table-borderless table-vcenter">
            <thead class="thead-light">
              <tr>
                <th colspan="2">Support</th>
                <th class="d-none d-md-table-cell text-center" style="width: 90px;">Topics</th>
                <th class="d-none d-md-table-cell text-center" style="width: 90px;">Posts</th>
                <th class="d-none d-md-table-cell" style="width: 180px;">Last Post</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center" style="width: 65px;">
                  <i class="si si-question fa-2x"></i>
                </td>
                <td>
                  <a class="fs-5 fw-semibold" href="be_pages_forum_topics.html">Questions</a>
                  <div class="text-muted my-1">Need assistance? Don’t worry, we are here to help</div>
                  <div class="fs-sm text-muted">
                    <strong class="fw-semibold">Moderators:</strong> <a href="javascript:void(0)">admin</a>, <a href="javascript:void(0)">johnex</a>
                  </div>
                </td>
                <td class="d-none d-md-table-cell text-center">
                  <a class="fw-semibold" href="javascript:void(0)">368</a>
                </td>
                <td class="d-none d-md-table-cell text-center">
                  <a class="fw-semibold" href="javascript:void(0)">6309</a>
                </td>
                <td class="d-none d-md-table-cell">
                  <span class="fs-sm">by <a href="be_pages_generic_profile.html">Sara Fields</a><br>on January 20, 2017</span>
                </td>
              </tr>
              <tr>
                <td class="text-center">
                  <i class="si si-game-controller fa-2x"></i>
                </td>
                <td>
                  <a class="fs-5 fw-semibold" href="be_pages_forum_topics.html">Playground</a>
                  <div class="text-muted my-1">Discuss with other users</div>
                  <div class="fs-sm text-muted">
                    <strong class="fw-semibold">Moderators:</strong> <a href="javascript:void(0)">admin</a>, <a href="javascript:void(0)">johnex</a>
                  </div>
                </td>
                <td class="d-none d-md-table-cell text-center">
                  <a class="fw-semibold" href="javascript:void(0)">172</a>
                </td>
                <td class="d-none d-md-table-cell text-center">
                  <a class="fw-semibold" href="javascript:void(0)">4115</a>
                </td>
                <td class="d-none d-md-table-cell">
                  <span class="fs-sm">by <a href="be_pages_generic_profile.html">Wayne Garcia</a><br>on January 24, 2017</span>
                </td>
              </tr>
            </tbody>
          </table>
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
<!-- END Hero -->
@endsection