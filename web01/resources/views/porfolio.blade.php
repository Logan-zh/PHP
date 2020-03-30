
    @extends('top')

    @section('title','My site')

    @section('container')

    @forelse($introduction as $in)

    <div class="aside">
        @if($in->img == "NULL")
        <img src="https://fakeimg.pl/100x100">
        @else
        <img src="{{asset('img').'/'.$in->img}}" >
        @endif
    </div>
    <div class="main">
        {{$in->content}}
    </div>

    <div class="item-box">

    @empty
    <div class="aside">
        <img src="https://fakeimg.pl/100x100">
    </div>
    <div class="main">
        Introdution
    </div>

    <div class="item-box">
    @endforelse

    @if($porfolio->count())

    @foreach($porfolio as $p)
    
    <div class="item">
        <a href="{{asset('site').'/'.$p->site}}">
        <div class="item-image"><img src="{{asset('img')."/".$p->img}}"></div>
        <div class="item-operating-area">
            <div class="item-title">{{$p->name}}</div>
            <div class="item-content">{{$p->content}}</div>
        </div>
        </a>
    </div>

    @endforeach
    @else
        echo "nothing"
    @endif
    </div>

@endsection