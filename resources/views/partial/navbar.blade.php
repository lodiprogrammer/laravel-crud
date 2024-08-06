<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <a class="navbar-brand" href="/">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item {{$title == 'home'?'active':''}}">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item {{$title == 'about'?'active':''}}">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item {{$title == 'blog'?'active':''}}">
          <a class="nav-link" href="/blog">Blog</a>
        </li>
      </ul>
    </div>
  </nav>

