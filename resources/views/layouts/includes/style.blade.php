<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<!-- Nucleo Icons -->
<link href="{{ asset('asset/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/nucleo-icons.css') }} " rel="stylesheet" />
<link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />


<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
<!-- CSS Files -->
<link id="pagestyle" href="{{ asset("../assets/css/argon-dashboard.css?v=2.0.0") }}" rel="stylesheet" />
<style>
#logoname{
    text-align: -webkit-center;
}

    .projects{
        /* background-color: #000016; */
    }
    .projects .content{
margin-top: 30px;
display: flex;
    flex-direction: row;
    justify-content: center;
    flex-wrap: wrap;
    }
    .project-card{
        background-color: #fff;
    border: 1px solid #fff;
    min-height: 0em;
    width: 13em;
    overflow: hidden;
    /* border-radius: 50px;
    margin: 11px; */
        transition: 0.7s ease;
    }
    .project-image{
        text-align: center;
    }
    .project-card:hover {
        transform:scale(1.1);
    }
    .project-card:hover  .project-image {
        opacity: 0.9;
    }
    .project-image img{
        width: 100%;
        text-align: center;
    width: 100%;
    max-width: 100px;
    min-height: 90px;
    }
    .project-info{
        padding:1em;
    }
    .project-category{
        font-size:15px;
        color: #000;
        text-align: center;

    }
    .project-title{
        display: flex;
        justify-content:space-between;
        /* text-transform: uppercase; */
        font-weight:800;
        margin-top: 10px;
    }
    .more-details{
        text-decoration: none;
        color:#3a6cf4;
    }
    .more-details:hover{
        color:#601cfc;
    }
    .more-add{
        text-decoration: none;
        color:#08931d;
    }
    .more-add:hover{
        color:#2c8904;
    }

    .mt-3 {
    margin-top: 1rem !important;
    text-align: -webkit-center;
}
.save{
    text-align: center;
}




/* card */

.cards{
display: flex;
}



.card-img-top{
    width: 200px;
    height: 150px;
}
.icon{
    color:#3a6cf4;
    font-size: 8em;
    text-align: center;
}



/* menue icons */




.menu{
    position: relative;
    width: 200px;
    height: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.menu li{
    position: absolute;
    list-style: none;
    left: 0;
    transform-origin: 100px;
    transition: 0.5s;
    transition-delay: calc(0.1s * var(--i));
    transform: rotate(0deg) translateX(80px);
}

.menu li a{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 40px;
    height: 40px;
    background: #fff;
    border-radius: 50%;
}

.menu.active li{
    transform: rotate(calc(360deg/8 * var(--i)));
}

.toggle{
    position: absolute;
    width: 60px;
    height: 60px;
    background: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
    border-radius: 50%;
    cursor: pointer;
    box-shadow: 0 0 4px rgba(0,0,0,0.15);
    font-size: 2em;
    transition: transform 1.25s;
}

.menu.active .toggle{
    transform: rotate(315deg);
}





</style>
<link id="pagestyle" href="{{ asset('../assets/css/argon-dashboard.css?v=2.0.0') }}" rel="stylesheet" />
