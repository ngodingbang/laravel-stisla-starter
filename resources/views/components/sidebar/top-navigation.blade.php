@push('styles')
    <style>
        span.narrow-line-height {
            line-height: 15px !important;
        }
        @media (max-width: 1024px) {
            ul.dropdown-submenu {
                position: relative;
            }
            ul.dropdown-submenu > ul.dropdown-menu {
                top: 0;
                left: 100%;
                margin-top: -6px;
                margin-left: -1px;
            }
            ul.dropdown-submenu:hover > ul.dropdown-menu {
                display: block;
            }
            ul.dropdown-submenu:hover > a:after {
                border-left-color: #fff;
            }
            ul.dropdown-submenu.pull-left {
                float: none;
            }
            ul.dropdown-submenu.pull-left > ul.dropdown-menu {
                left: -100%;
                margin-left: 10px;
            }
        }
    </style>
@endpush

<nav class="navbar navbar-secondary navbar-expand-lg">
    <div class="container">
        <ul class="navbar-nav">

        </ul>
    </div>
</nav>
