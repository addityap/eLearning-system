@include('layout.header')
<body>
  <div id="app">
    <div class="main-wrapper">
        @include('layout.navbar')
      @include('layout.sidebar')
      @yield('konten')
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2021 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
          <a href="">Customize By eLearning System</a>
        </div>
        {{-- <div class="footer-right">
          2.3.0
        </div> --}}
      </footer>
    </div>
  </div>
  {{-- Javascript --}}
@include('layout.javascript')