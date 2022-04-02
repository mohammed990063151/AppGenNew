<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<!-- Nucleo Icons -->
<link href="{{asset("asset/vendor/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">
<link href="{{asset("assets/css/nucleo-icons.css") }} " rel="stylesheet" />
<link href="{{asset("assets/css/nucleo-svg.css")}}"  rel="stylesheet" />
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link href="{{asset("assets/css/nucleo-svg.css") }}"  rel="stylesheet" />
<!-- CSS Files -->
<link id="pagestyle" href="{{ asset("../assets/css/argon-dashboard.css?v=2.0.0") }}" rel="stylesheet" />
<style>
    .projects{
        /* background-color: #000016; */
    }
    .projects .content{
margin-top: 30px;
    }
    .project-card{
        background-color: #f8f9fa;
    border: 1px solid #e6e6e6;
    min-height: 0em;
    width: 13em;
    overflow: hidden;
    border-radius: 50px;
    margin: 10px;
        transition: 0.7s ease;
    }
    .project-card:hover {
        transform:scale(1.1);
    }
    .project-card:hover  .project-image {
        opacity: 0.9;
    }
    .project-image img{
        width: 100%;
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


</style>
