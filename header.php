      <!-- HEADER START -->
      <header
        class="site-header header-style-1 nav-wide mobile-sider-drawer-menu"
      >
        <div class="sticky-header main-bar-wraper">
          <div class="main-bar bg-white p-t10">
            <div class="container">
              <div class="logo-header">
                <div class="logo-header-inner logo-header-one">
                  <a href="index.php">
                    <img
                      src="rkprojectimgs/logo-1-removebg.png"
                      width="150"
                      height="49"
                      alt=""
                    />
                  </a>
                </div>
              </div>
              <!-- NAV Toggle Button -->
              <button
                id="mobile-side-drawer"
                data-target=".header-nav"
                data-toggle="collapse"
                type="button"
                class="navbar-toggler collapsed"
              >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar icon-bar-first"></span>
                <span class="icon-bar icon-bar-two"></span>
                <span class="icon-bar icon-bar-three"></span>
              </button>

              <!-- MAIN Vav -->
              <div class="header-nav navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li>
                    <a href="index.php">Home</a>
                  </li>
                  <li><a href="work-grid.php">Projects</a></li>
                  <li>
                    <a href="about-1.php">About us</a>
                  </li>
                  <li>
                    <a href="contact-1.php">Contact us</a>
                  </li>
                </ul>
              </div>
              <!-- ETRA Nav -->
              <div class="extra-nav">
                <div class="extra-cell">
                  <a href="#search" class="site-search-btn"
                    ><i class="fa fa-search"></i
                  ></a>
                </div>
              </div>
              <!-- SITE Search -->
              <div id="search">
                <span class="close"></span>
                <form
                  role="search"
                  id="searchform"
                  action="/search"
                  method="get"
                  class="radius-xl"
                >
                  <div class="input-group">
                    <input
                      value=""
                      name="q"
                      type="search"
                      placeholder="Type to search"
                    />
                    <span class="input-group-btn"
                      ><button type="button" class="search-btn">
                        <i class="fa fa-search"></i></button
                    ></span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- HEADER END -->