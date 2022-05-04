@foreach($children as $subcategory)
    <li class="dropdown">
        @if(count($subcategory->$children))
            <a  href="#" style="text-decoration-color: black">{{$subcategory->title}}</a>
            <ul class="dropdown-menu">
                @if(count($row->children))
                    @include('homeTrails.categorytree',['children'=>$subcategory->children])

                @else
                    <li><a href="{{route('categorybooks',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a> </li>
                @endif
            </ul>
    </li>
@endforeach
