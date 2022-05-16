<h6 class="font-weight-bolder text-white mb-0">{{$head}}</h6>
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
   @foreach ($links as $key =>  $link)
   @if ($key + 1 == count($links))
   <li class="breadcrumb-item text-sm text-white active font-weight-bold" aria-current="page">{{$link["text"]}}</li>
   @continue 
   @endif
   <li class="breadcrumb-item text-sm {{ $key != 0 ? ' text-white active' : '' }}" aria-current="page" ><a class="opacity-5 text-white" href="{{$link["url"]}}">{{$link["text"]}} </a></li>
   @endforeach
    
  </ol>
  
