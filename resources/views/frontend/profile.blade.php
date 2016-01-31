
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>{{$user->first_name_en}} {{$user->last_name_en}} | Department of Microbiology Profiles</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  

  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  <link rel="stylesheet" href="{{asset('css/main_alt1.css')}}">
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <!--[if IE 7]><link rel="stylesheet" href="/profiles/styles/font-awesome/scss/font-awesome-ie7.css;jsessionid=C9E48CF6E1DA529C75EE091193940826.tc-cap-som-08"><![endif]-->
  <!--[if lte IE 8]><script src="/profiles/scripts/vendor/respond/respond.min.js;jsessionid=C9E48CF6E1DA529C75EE091193940826.tc-cap-som-08"></script><![endif]-->
  <script src="{{asset('js/modernizr.min.js')}}"></script>
</head>
<body class="profile">
  <div id="wrapper">
    <header class="navbar " id="headerContent">
      <div class="navbar-inner">
        <div class="container">
          <div class="row-fluid">
            <span id="sidebarTrigger">
              <a class="btn btn-navbar visible-phone pull-right">
                <i class="icon-reorder"></i>
              </a>
            </span>

            <a class="brand" href="#">
              <span class="my-logo">Logo |</span>
              <span class="second-logo">Profiles</span>
            </a>

            <div class="nav-sidebar hidden-phone">
              <div id="searchHeaderContent">
                <form class="navbar-search " method="get" action="/profiles/search">
                  <input class="search-query" type="text" name="q" placeholder="Search by name or topic..." autocomplete="off" />
                  <button class="icon-search" type="submit" name="search" title="Search"></button>
                </form>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </header>

    <div id="bodyContent">
      <div id="mainContent">
        <section id="mastheadContainer" class="banner profile">
          <div class="container">
            <div class="row-fluid">
              <div class="span12">
                <div class="image-holder">
                  <img src="{{asset('images/profile.png')}}" alt="Nima Aghaee Pour" data-empty-src="{{asset('images/profile.png')}}" />
                </div>
                <div class="nameAndTitle">
                  <h1>{{$user->first_name_en}} {{$user->last_name_en}}</h1>
                  <h2>{{$user->position}}<br/></h2>
                </div>
                <ul class="unstyled">
                  <li>
                    <a href="#" target="_blank" rel="nofollow">
                      <span class="icon-background">
                        <i class="icon-print"></i>
                      </span>Print Profile
                    </a>
                  </li>
                  <li>
                    <a href="#send-mail-to{{$user->email}}" rel="nofollow" data-bypass>
                      <span class="icon-background">
                        <i class="icon-envelope-alt"></i>
                      </span>Email Profile
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <section id="tabbedLayoutContainer">
          <nav class="navbar">
            <div class="navbar-inner">
              <div class="container">

                <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                <a class="btn btn-navbar" data-toggle="collapse" data-target="#tabbedLayoutContainer .nav-collapse">
                  <span class="nav-label">Profile Tabs Menu</span>
                  <i class="icon-chevron-down"></i>
                </a>

                <div class="nav-collapse collapse">
                  <ul class="nav nav-tabs tabs1">
                    <li class="active">
                      <a id="bioTabLink" href="/profiles/nima-aghaee-pour?tab=bio" class="no-trigger" rel="nofollow">Bio</a>
                    </li>
                  </ul>
                </div>

              </div>
            </div>
          </nav>

          <div class="container breakout-phone">
            <div class="tab-content">
              <div id="bio" class="card tab-pane active">
                <h2>Bio</h2>

                <div class="row-fluid">
                  <div class="span8 page-content">
                    <div id="professionalEducationContent" class="content-section">
                      <h3>Professional Education</h3>
                      <hr/>
                      <ul class="section-listing">
                        @foreach($userEducations as $aEd)
                        <li class="section-list-item">
                          <div class="description">{{$aEd->education}} ({{$aEd->year}})</div>
                        </li>
                        @endforeach
                      </ul>
                    </div>

                    <div id="stanfordAdvisorsContent" class="content-section">
                      <h3>Advisors</h3>
                      <hr/>
                      <ul class="section-listing">
                        <li class="section-list-item">
                          <div class="description"><a href="#profile/id">Advisor_First_Name Advisor_Last_Name</a>, <span>Postdoctoral Research Mentor</span></div>
                        </li>
                      </ul>
                    </div>

                  </div>
                  <div class="span4 side-bar">

                    <div id="linksContent" class="content-section links bg-icon-link">
                      <h3>Links</h3>
                      <hr/>
                      <ul class="unstyled section-listing use-link-icons">
                        <li class="external-link"><a href="#" class="Other" target="_blank" data-bypass>User Homepage</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <!-- content footer -->
  </div>

</body>
</html>