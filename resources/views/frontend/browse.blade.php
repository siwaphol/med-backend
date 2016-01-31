
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <title>Browse Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/main_alt1.css')}}">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="/profiles/styles/font-awesome/scss/font-awesome-ie7.css;jsessionid=C9E48CF6E1DA529C75EE091193940826.tc-cap-som-08"><![endif]-->
    <!--[if lte IE 8]><script src="/profiles/scripts/vendor/respond/respond.min.js;jsessionid=C9E48CF6E1DA529C75EE091193940826.tc-cap-som-08"></script><![endif]-->
    <script src="{{asset('js/modernizr.min.js')}}"></script>
  </head>
  <body class="browse">
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
          <section class="banner">
  <div class="container">
    <div class="row-fluid"></div>
  </div>
</section>
<div class="container breakout-phone">
  <div class="row-fluid">
    <section class="card span8">
         <div id="browseListContent">
          <h1><span class="loading">Department of Microbiology</span></h1>
<hr/>

{{--<profiles list="{{json_encode($profiles)}}"></profiles>--}}
<profiles></profiles>

        </div>
    </section>
    <aside id="filterContent" class="span4 hidden-phone">
          <h1>Show Only</h1>
  <hr/>
<div id="filterItems" class="accordian">
    <div class="filter-group accordion-group">
  <h2 class="accordion-heading">
    <a class="accordian-toggle" href="{{url('/browse')}}">All Profiles</a>
  </h2>
  <div class="accordian-body">
    <ul class="unstyled accordian-inner affiliation">
        <li class=" ">
            <a href="/profiles/browse?affiliations=capFaculty">
              Faculty and Teaching Staff
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?affiliations=capStaff">
              Staff
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?affiliations=capPostdoc">
              Postdocs
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?affiliations=capMdStudent,capMsStudent,capPhdStudent">
              Graduate Students
            </a>
        </li>
    </ul>
  </div>
</div>
    <div class="filter-group accordion-group">
  <h2 class="accordion-heading">
    <a class="accordian-toggle" href="/profiles/browse">Last Name</a>
  </h2>
  <div class="accordian-body">
    <ul class="unstyled accordian-inner lastInitial">
        <li class=" ">
            <a href="/profiles/browse?name=a">
              A
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=b">
              B
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=c">
              C
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=d">
              D
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=e">
              E
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=f">
              F
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=g">
              G
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=h">
              H
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=i">
              I
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=j">
              J
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=k">
              K
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=l">
              L
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=m">
              M
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=n">
              N
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=o">
              O
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=p">
              P
            </a>
        </li>
        <li class=" ">
          <a href="/profiles/browse?name=q">
           Q
          </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=r">
              R
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=s">
              S
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=t">
              T
            </a>
        </li>
        <li class=" ">
          <a href="/profiles/browse?name=U">
            U
          </a>   
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=v">
              V
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=w">
              W
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=x">X</a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=y">
              Y
            </a>
        </li>
        <li class=" ">
            <a href="/profiles/browse?name=z">
              Z
            </a>
        </li>
    </ul>
  </div>
</div>
</div>
    </aside>
  </div>
</div>
  
        </div>
      </div>
      <!-- content footer -->
    </div>

    <template id="profile-template">
      <h2 class="subhead">Showing @{{from}}-@{{to}} of @{{total}} Results</h2>
      <ul class="unstyled list-items">
        <li v-for="profile in list">
          <div class="mini-profile media">
            <a href="#">
              <img class="pull-left" src="" alt="" data-empty-src="{{asset('images/profile.png')}}" />
            </a>
            <div class="media-body">
              <a href="profile/@{{profile.id}}" class="media-heading">
                <h4>@{{profile.first_name_en}} @{{profile.last_name_en}}</h4>
                <h5>@{{profile.position}}</h5>
              </a>
              <p class="hidden-phone" data-toggle="collapsePartial" data-lines="4">
              <strong class="title">@{{profile.body}}</strong>
              </p>
            </div>
          </div>
        </li>
      </ul>

      <div id="pagination">
        <div class="btn-toolbar btn-block">
          <div class="btn-group ">
            <a class="btn btn-small btn-first-page" @click="firstPageClick">
              <span class="hidden-phone">First</span>
              <span class="hidden-desktop hidden-tablet icon-double-angle-left"></span>
            </a>
          </div>
          <div class="btn-group">
            <a class="btn btn-small btn-previous-page"  @click="prevClick"><i class="icon-chevron-left"></i></a>
            <a class="btn btn-small btn-page-jumper" @click="preventDef" rel="popover">@{{currentPage}}/@{{totalPage}}</a>
            <a class="btn btn-small btn-next-page " @click="nextClick"><i class="icon-chevron-right"></i></a>
          </div>
          <div class="btn-group">
            <a class="btn btn-small btn-last-page " @click="lastPageClick">
              <span class="hidden-phone">Last</span>
              <span class="hidden-desktop hidden-tablet icon-double-angle-right"></span>
            </a>
          </div>
          <div class="btn-group dropup">
<!--             <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-phone"><strong v-text="currentShow"></strong> Results / Page</span>
              <span class="hidden-desktop hidden-tablet"><strong v-text="currentShow"></strong> / Page</span>
              <span class="icon-caret-down"></span>
            </button> -->
<!--             <ul class="dropdown-menu">
              <li><a href="#this-should-trigger-10-per-page">10</a></li>
              <li><a href="#this-should-trigger-20-per-page">20</a></li>
              <li><a href="#this-should-trigger-50-per-page">50</a></li>
              <li><a href="#this-should-trigger-100-per-page">100</a></li>
            </ul> -->
            <select @change="perPageChange" id="per-page-select">
              <option value="10">10 Results / Page</option>
              <option value="20">20 Results / Page</option>
              <option value="50">50 Results / Page</option>
              <option value="100">100 Results / Page</option>
            </select>
          </div>
        </div>
      </div>
    </template>

  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/vue.js')}}"></script>
  <script src="{{asset('js/vue-resource.js')}}"></script>

  <script>
  var profileCom = Vue.component('profiles', {
    template: '#profile-template',

    data: function () {
      return {
        list: [],
        totalPage: 0,
        currentPage: 1,
        perPage: 10,
        from: 0,
        to: 0,
        total: 0,
        prevClick: function (e) {
          if(this.currentPage <= 1){
            e.preventDefault();
            console.log('prevClick first if', this.currentPage);
          }else{
            this.currentPage -= 1;
            this.pageReCreate();
          }
        }.bind(this),
        nextClick: function (e) {
          if(this.currentPage >= this.totalPage){
            e.preventDefault();
            console.log('nextClick if current: ', this.currentPage, ' total:', this.totalPage);
          }else{
            this.currentPage += 1;
            this.pageReCreate();
          }
        }.bind(this),
        firstPageClick: function (e) {
          if(this.currentPage <= 1){
            e.preventDefault();
            console.log('firstpageClick first if', this.currentPage);
          }else{
            this.currentPage = 1;
            this.pageReCreate();
          }
        }.bind(this),
        lastPageClick: function (e) {
          if(this.currentPage >= this.totalPage){
            e.preventDefault();
            console.log('lastPageClick if current: ', this.currentPage, ' total:', this.totalPage);
          }else{
            this.currentPage = this.totalPage;
            this.pageReCreate();
          }
        }.bind(this),
        preventDef: function (e) {
          e.preventDefault();
        },
        perPageChange: function (e) {
          var p_val = 10;
          $( "#per-page-select option:selected" ).each(function() {
            p_val = parseInt($(this).val());
          });
          this.perPage = p_val;
          this.pageReCreate();
        }.bind(this),
        pageReCreate: function () {
          $.getJSON('{{url('api/profile')}}', {page: this.currentPage, per_page: this.perPage}, function (profiles) {
            this.list = profiles.data;
            this.totalPage = profiles.last_page;
            this.currentPage = profiles.current_page;
            this.from = profiles.from;
            this.to = profiles.to;
            this.total = profiles.total;
          }.bind(this));
        }
      };
    },

    created: function  () {
      $.getJSON('{{url('api/profile')}}', {page: this.currentPage, per_page: this.perPage}, function (profiles) {
        this.list = profiles.data;
        this.totalPage = profiles.last_page;
        this.currentPage = profiles.current_page;
        this.from = profiles.from;
        this.to = profiles.to;
        this.total = profiles.total;
      }.bind(this))
      .fail(function (data) {
        this.pageReCreate();
      }.bind(this));
    },

    computed: {
      currentShow: function () {
        return this.list.length;
      }
    }
  });

  var vm = new Vue({
    el: 'body'
  });

  </script>
  </body>
</html>