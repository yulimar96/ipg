<footer class="footer">
    <div class="container-fluid">
        <nav class="float-left">
            <ul>
                <li>
                    <a href="https://www.creative-tim.com">
                        {{ __(config('app.name')) }}
                    </a>
                </li>
                {{-- <li>
                    <a href="https://creative-tim.com/presentation">
                        {{ __('About Us') }}
                    </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com">
                        {{ __('Blog') }}
                    </a>
                </li>
                <li>
                    <a href="https://www.creative-tim.com/license">
                        {{ __('Licenses') }}
                    </a>
                </li> --}}
            </ul>
        </nav>
        <div class="copyright float-right">
          {{ config('app.name') }}
          <span class="text-muted">{{ ' v.-' . env('APP_VERSION') }}</span>
          &copy;
          <script>
              document.write(new Date().getFullYear())
              // with <i class="material-icons"></i>
          </script>, made by
          <a href="https://github.com/Raknerdev" target="_blank">Raknerdev</a>.
        </div>
    </div>
</footer>
