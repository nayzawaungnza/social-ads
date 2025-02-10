<!-- Dashboards -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Dashboards</div>
                <div class="badge bg-primary rounded-pill ms-auto">3</div>
              </a>
              <ul class="menu-sub">
                
                <li class="menu-item active">
                  <a href="app-academy-dashboard.html" class="menu-link">
                    <div data-i18n="Academy">Academy</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Activity Logs -->
            <li class="menu-item {{ $activePage == 'activitylogs' ? ' active' : '' }}">
              <a href="{{ route('activity_logs.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-activity"></i>
                <div data-i18n="Activity Logs">Activity Logs</div>
              </a>
            </li>

            <!-- Roles -->
            <li class="menu-item {{ $activePage == 'roles' || $activePage == 'roles.create' || $activePage == 'roles.edit' || $activePage == 'roles.show' ? ' active open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-user-cog"></i>
                <div data-i18n="Roles">Roles</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item {{ $activePage == 'roles' ? ' active' : '' }}">
                  <a href="{{ route('roles.index') }}" class="menu-link">
                    <div data-i18n="Roles List">Roles List</div>
                  </a>
                </li>
                <li class="menu-item {{ $activePage == 'roles.create' ? ' active' : '' }}">
                  <a href="{{ route('roles.create') }}" class="menu-link">
                    <div data-i18n="Add Role">Add Role</div>
                  </a>
                </li>
                
              </ul>
            </li>

             <!-- Admin User -->
            <li class="menu-item {{ $activePage == 'accounts' || $activePage == 'accounts.create' || $activePage == 'accounts.edit' || $activePage == 'accounts.show' ? ' active open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-users-group"></i>
                <div data-i18n="Users">Users</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item {{ $activePage == 'accounts' ? ' active' : '' }}">
                  <a href="{{ route('accounts.index') }}" class="menu-link">
                    <div data-i18n="Users List">Users List</div>
                  </a>
                </li>
                <li class="menu-item {{ $activePage == 'accounts.create' ? ' active' : '' }}">
                  <a href="{{ route('accounts.create') }}" class="menu-link">
                    <div data-i18n="Add User">Add User</div>
                  </a>
                </li>
                
              </ul>
            </li>

            <li class="menu-item {{ $activePage == 'pages' || $activePage == 'pages.create' || $activePage == 'pages.edit' || $activePage == 'pages.show' ? ' active open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-page-break"></i>
                <div data-i18n="Pages">Pages</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item {{ $activePage == 'pages' ? ' active' : '' }}">
                  <a href="{{ route('pages.index') }}" class="menu-link">
                    <div data-i18n="Pages List">Pages List</div>
                  </a>
                </li>
                <li class="menu-item {{ $activePage == 'pages.create' ? ' active' : '' }}">
                  <a href="{{ route('pages.create') }}" class="menu-link">
                    <div data-i18n="Add Page">Add Page</div>
                  </a>
                </li>
                
              </ul>
            </li>
            
            <!-- Layouts -->
            <li class="menu-item {{ $activePage == 'posts' || $activePage == 'posts.create' || $activePage == 'posts.edit' || $activePage == 'posts.show' ? ' active open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-article"></i>
                <div data-i18n="Posts">Posts</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item {{ $activePage == 'posts' ? ' active' : '' }}">
                  <a href="{{ route('posts.index') }}" class="menu-link">
                    <div data-i18n="Posts List">Posts List</div>
                  </a>
                </li>
                <li class="menu-item {{ $activePage == 'posts.create' ? ' active' : '' }}">
                  <a href="{{ route('posts.create') }}" class="menu-link">
                    <div data-i18n="Add Post">Add Post</div>
                  </a>
                </li>
                
              </ul>
            </li>

             <li class="menu-item {{ $activePage == 'post_categories' || $activePage == 'post_categories.create' || $activePage == 'post_categories.edit' || $activePage == 'post_categories.show' ? ' active' : '' }}">
              <a href="{{ route('post_categories.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-category"></i>
                <div data-i18n="Post Categories">Post Categories</div>
              </a>
            </li>

            <li class="menu-item {{ $activePage == 'services' || $activePage == 'services.create' || $activePage == 'services.edit' || $activePage == 'services.show' ? ' active open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-section"></i>
                <div data-i18n="Services">Services</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item {{ $activePage == 'services' ? ' active' : '' }}">
                  <a href="{{ route('services.index') }}" class="menu-link">
                    <div data-i18n="Services List">Services List</div>
                  </a>
                </li>
                <li class="menu-item {{ $activePage == 'services.create' ? ' active' : '' }}">
                  <a href="{{ route('services.create') }}" class="menu-link">
                    <div data-i18n="Add Service">Add Service</div>
                  </a>
                </li>

              </ul>
            </li>

            <!-- Project -->
            <li class="menu-item {{ $activePage == 'projects' || $activePage == 'projects.create' || $activePage == 'projects.edit' || $activePage == 'projects.show' ? ' active open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-brand-4chan"></i>
                <div data-i18n="Projects">Projects</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item {{ $activePage == 'projects' ? ' active' : '' }}">
                  <a href="{{ route('projects.index') }}" class="menu-link">
                    <div data-i18n="Projects List">Projects List</div>
                  </a>
                </li>
                <li class="menu-item {{ $activePage == 'projects.create' ? ' active' : '' }}">
                  <a href="{{ route('projects.create') }}" class="menu-link">
                    <div data-i18n="Add Project">Add Project</div>
                  </a>
                </li>
              </ul>
            </li> 

            <!-- Slider -->
            <li class="menu-item {{ $activePage == 'sliders' || $activePage == 'sliders.create' || $activePage == 'sliders.edit' || $activePage == 'sliders.show' ? ' active open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-slideshow"></i>
                <div data-i18n="Sliders">Sliders</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item {{ $activePage == 'sliders' ? ' active' : '' }}">
                  <a href="{{ route('sliders.index') }}" class="menu-link">
                    <div data-i18n="Sliders List">Sliders List</div>
                  </a>
                </li>
                <li class="menu-item {{ $activePage == 'sliders.create' ? ' active' : '' }}">
                  <a href="{{ route('sliders.create') }}" class="menu-link">
                    <div data-i18n="Add Slider">Add Slider</div>
                  </a>
                </li>
              </ul>
            </li> 


            <!-- Partner -->
            <li class="menu-item {{ $activePage == 'partners' || $activePage == 'partners.create' || $activePage == 'partners.edit' || $activePage == 'partners.show' ? ' active open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-users-plus"></i>
                <div data-i18n="Partners">Partners</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item {{ $activePage == 'partners' ? ' active' : '' }}">
                  <a href="{{ route('partners.index') }}" class="menu-link">
                    <div data-i18n="Partners List">Partners List</div>
                  </a>
                </li>
                <li class="menu-item {{ $activePage == 'partners.create' ? ' active' : '' }}">
                  <a href="{{ route('partners.create') }}" class="menu-link">
                    <div data-i18n="Add Partner">Add Partner</div>
                  </a>
                </li>
              </ul>
            </li> 

            <li class="menu-item {{ $activePage == 'subscribers' || $activePage == 'subscribers.create' || $activePage == 'subscribers.edit' || $activePage == 'subscribers.show' ? ' active open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-user-heart"></i>
                <div data-i18n="Subscribers">Subscribers</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item {{ $activePage == 'accounts' ? ' active' : '' }}">
                  <a href="{{ route('subscribers.index') }}" class="menu-link">
                    <div data-i18n="Subscribers List">Subscribers List</div>
                  </a>
                </li>
                <li class="menu-item {{ $activePage == 'accounts.create' ? ' active' : '' }}">
                  <a href="{{ route('subscribers.create') }}" class="menu-link">
                    <div data-i18n="Add Subscriber">Add Subscribers</div>
                  </a>
                </li>
                
              </ul>
            </li>

          {{-- Settings --}}
            <li class="menu-item {{ $activePage == 'setting' ? ' active' : '' }}">
              <a href="{{ route('config_settings.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-settings"></i>
                <div data-i18n="Config Settings">Config Settings</div>
              </a>
            </li>

            {{-- <li class="menu-item {{ $activePage == 'courses' || $activePage == 'courses.create' || $activePage == 'courses.edit' || $activePage == 'courses.show' || $activePage == 'subjects' || $activePage == 'subjects.create' || $activePage == 'subjects.edit' || $activePage == 'subjects.show' || $activePage == 'lessons' || $activePage == 'lessons.create' || $activePage == 'lessons.edit' || $activePage == 'lessons.show'  ? '  open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-book"></i>
                <div data-i18n="Courses">Courses</div>
              </a>

              

              <ul class="menu-sub">
                <li class="menu-item {{ $activePage == 'courses' ? ' active' : '' }}">
                      <a href="{{ route('courses.index') }}" class="menu-link">
                        <div data-i18n="Courses List">Courses List</div>
                      </a>
                </li>
                <li class="menu-item {{ $activePage == 'courses.create' ? ' active' : '' }}">
                      <a href="{{ route('courses.create') }}" class="menu-link">
                        <div data-i18n="Add Course">Add Course</div>
                      </a>
                </li>
                <li class="menu-item {{ $activePage == 'subjects' || $activePage == 'subjects.create' || $activePage == 'subjects.edit' || $activePage == 'subjects.show' ? ' active open' : '' }}">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Subjects">Subjects</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item {{ $activePage == 'subjects' ? ' active' : '' }}">
                      <a href="{{ route('subjects.index') }}" class="menu-link">
                        <div data-i18n="Subject List">Subject List</div>
                      </a>
                    </li>
                    <li class="menu-item {{ $activePage == 'subjects.create' ? ' active' : '' }}">
                      <a href="{{ route('subjects.create') }}" class="menu-link">
                        <div data-i18n="Add Subject">Add Subject</div>
                      </a>
                    </li>
                  </ul>
                </li>
                
                <li class="menu-item {{ $activePage == 'lessons' || $activePage == 'lessons.create' || $activePage == 'lessons.edit' || $activePage == 'lessons.show' ? ' active open' : '' }}">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <div data-i18n="Lessons">Lessons</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item {{ $activePage == 'lessons' ? ' active' : '' }}">
                      <a href="{{ route('lessons.index') }}" class="menu-link" >
                        <div data-i18n="Lessons List">Lessons List</div>
                      </a>
                    </li>
                    <li class="menu-item {{ $activePage == 'lessons.create' ? ' active' : '' }}">
                      <a href="{{ route('lessons.create') }}" class="menu-link" >
                        <div data-i18n="Add Lesson">Add Lesson</div>
                      </a>
                    </li>
                    
                  </ul>
                </li>
              </ul>
            </li> --}}

            <!-- assignments -->
            {{-- <li class="menu-item {{ $activePage == 'assignments' || $activePage == 'assignments.create' || $activePage == 'assignments.edit' || $activePage == 'assignments.show' ? ' active open' : '' }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-school"></i>
                <div data-i18n="Assignments">Assignments</div>
              </a>

              <ul class="menu-sub">
                <li class="menu-item {{ $activePage == 'assignments' ? ' active' : '' }}">
                  <a href="{{ route('assignments.index') }}" class="menu-link">
                    <div data-i18n="Assignments List">Assignments List</div>
                  </a>
                </li>
                <li class="menu-item {{ $activePage == 'assignments.create' ? ' active' : '' }}">
                  <a href="{{ route('assignments.create') }}" class="menu-link">
                    <div data-i18n="Add Assignments">Add Assignments</div>
                  </a>
                </li>
                
              </ul>
            </li> --}}

            <!-- Enrollment -->
            

            

            