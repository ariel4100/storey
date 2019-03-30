<ul id="slide-out" class="sidenav sidenav-fixed">
    <li class="mb5" style="height: auto;text-align: center;">
        <img src="{{ asset('img/logos/logo-header.png') }}" alt="" class="responsive-img" style="height: 34px; margin: 15px auto 15px auto;">
    </li>
    <li>
        <ul class="collapsible" data-collapsible="accordion">
            @foreach ($items as $item)
                <li class="">
                    <a class="collapsible-header waves-effect">
                        {{ $item['text'] }}
                        {!! $item['icon'] !!}
                    </a>
                    <div class="collapsible-body" style="display: none; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;">
                        <ul>
                            @foreach ($item['links'] as $link)
                                <li class="{{ request()->fullUrl()==$link['to']?'active':'' }}">
                                    <a class="waves-effect" style="text-decoration: none;" href="{{ $link['to'] }}">
                                        {{ $link['text'] }}
                                        <i class="material-icons" style="color: black">keyboard_arrow_right</i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
            @endforeach
        </ul>
    </li>
</ul>
