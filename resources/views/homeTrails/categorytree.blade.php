@foreach( $children as $subcategory)
    <ul class="nav-item nav-link">
        @if(count($subcategory->children))
            <li >{{$subcategory->title}}</li>
            <ul class="nav-item nav-link">
                @include('homeTrails.categorytree', [ 'children' => $subcategory->children])
            </ul>
            <hr>
        @else
            <li> <a href="{{route('categorybooks',['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a> </li>
        @endif
    </ul>
@endforeach
