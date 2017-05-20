<header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{!! url('/' . getLang()) !!}"><img class="logo" src="{!! url('frontend/images/logo.png') !!}" alt="logo"></a>
        </div>
        <div class="collapse navbar-collapse">
            {!! $menus !!}
            <div>
                <ul class="language_bar_chooser_menu">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li @if($localeCode==getLang())
                            class="active"
                            @endif>
                          <a hreflang="{!!$localeCode!!}" href="{!! LaravelLocalization::getLocalizedURL($localeCode) !!}">
                            <img src="{{url('frontend/images/'.$localeCode.'.png')}}">
                            </img>
                          </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</header><!--/header-->
