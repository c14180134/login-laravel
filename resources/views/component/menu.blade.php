<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="https://bulma.io">
        <img class="inverted" src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
      </a>
  
      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="/user" >
          Home
        </a>
  
        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
            More
          </a>
  
          <div class="navbar-dropdown">
            <a class="navbar-item">
              About
            </a>
            <a class="navbar-item">
              Jobs
            </a>
            <a class="navbar-item">
              Contact
            </a>
            <hr class="navbar-divider">
            <a class="navbar-item">
              Report an issue
            </a>
          </div>
        </div>
      </div>
  
      <div class="navbar-end">
        @if (request()->route()->getName() !== 'password.change')
          @if (Auth::check())
              <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                  <span>Welcome, {{ Auth::user()->name }}</span>
                </a>
        
                <div class="navbar-dropdown">
                  <a href="{{ route('password.change') }}" class="navbar-item">
                    Change Password
                  </a>
                </div>
              </div>
          @endif
        @endif
        <div class="navbar-item">
          <button class="button is-light" id="logout-button">
            <span class="icon">
              <i class="fas fa-sign-out-alt"></i>
            </span>
            <a href="/sesi/logout">
                Log Out
            </a>
          </button>
        </div>
      </div>
    </div>
  </nav>