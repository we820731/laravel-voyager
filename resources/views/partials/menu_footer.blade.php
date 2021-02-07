@foreach($items as $menu_item)
    @php
        $sub2menu = $menu_item->children;
    @endphp
    @if(isset($sub2menu) && count($sub2menu) > 0)
    <div class="col-lg-3 col-md-6 footer-link">
        <div class="widget">
            <h5 class="widget-title font-alt">{{ $menu_item->title }}</h5>
            <ul class="icon-list">
                @foreach($sub2menu as $sub2_item)
                    <li><a href="{{$sub2_item->link()}}">{{$sub2_item->title}} </a></li>
                @endforeach
            </ul>
        </div>
    </div>
    @else
        <li><a href="{{$menu_item->link()}}">{{$menu_item->title}}</a>
    @endif
@endforeach