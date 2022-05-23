<div class="card" style="padding:inherit;" >
    <div class="card-body " style="padding:inherit;">
        <div class="d-flex justify-content-between" >
            <div class="icon m-3" style=""><i class="bi bi-menu-down  "></i></div>
            
            <div class="m-2">
                  <span class="">{{Auth::user()->name}}</span>
                  <img src="https://cdn-icons-png.flaticon.com/512/147/147142.png" style="height: 30px;width: 30px;"  alt="">
                
                </div>
                </div>
        </div>
    </div>

</div>



{{-- <i class="flag-icon flag-icon-gb"></i> --}}
<li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link"
    id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true"
    aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span
        class="selected-language"></span></a>
<div class="dropdown-menu" aria-labelledby="dropdown-flag">
    <a class="dropdown-item" href="https://faster.themsc.net/locale/en"><i
            class="flag-icon flag-icon-gb"></i> English</a>
    <a class="dropdown-item" href="https://faster.themsc.net/locale/ar"><i
            class="flag-icon flag-icon-sa"></i> العربيه</a>

</div>
</li>