<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<!-- Nucleo Icons -->
<link href="{{ asset('asset/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/nucleo-icons.css') }} " rel="stylesheet" />
<link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/css/style.css') }}" rel="stylesheet" />
<!-- Font Awesome Icons -->
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


*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: sans-serif;
}
.container {
	width: 500px;
	margin: auto;
}
.chat {
	display: flex;
	flex-direction: column;
	height: 100vh;
	background: #f1f0e8;
}
.chat-header {
	display: flex;
	cursor: pointer;
}
.profile {
	width: 100%;
	background: #ccdcda;
	display: flex;
	align-items: center;
	height: 60px;
	padding: 0px 10px;
	position: relative;
}
.fa{
    color: black;
}
.right h5{
    font-size: 21px;
    display: contents;
    color: black;
}
.logoapp{
    height: 100px;
    border-radius: 0.75rem;
    display: flex;
}
.logoapp span{
    padding: 23px;
}
.profile .pp {
	width: 50px;
	display: inline-block;
	border-radius: 50%;
	margin-left: 32px;
}
.profile .arrow {
	display: inline-block;
	width: 30px;
	position: absolute;
	top: 19px;
	cursor: pointer;
}
.profile h2 {
	display: inline-block;
	line-height: 60px;
	vertical-align: bottom;
	color: #fff;
	font-size: 20px;
}
.profile span {
	color: #ccc;
	position: absolute;
	top: 42px;
	left: 100px;
	font-size: 14px;
}
.right .icon {
	display: inline-block;
	width: 25px;
	margin-left: 10px;
}
.profile .left {
	flex: 1;
}

.chat-box {
	background: url('../img/2.webp');
	background-attachment: fixed;
	padding-left: 20px;
	overflow-y: scroll;
	flex: 1;
}
.chat-box .img_chat {
	width: 280px;
}

.chat-r {
	display: flex;
}
.chat-r .sp {
	flex: 1;
}

.chat-l {
	display: flex;
}
.chat-l .sp {
	flex: 1;
}

.chat-box .mess {
	max-width: 300px;
	/* background: #F7FCF6; */
	padding: 10px;
	border-radius: 10px;
	margin: 20px 0px;
	cursor: pointer;
}
.chat-box .mess p {
	word-break: break-all;
	font-size: 18px;
    padding: auto;
}

.chat-box .mess p span{
    text-align: center;
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
}
.chat-box .mess-r {
    background: #5b9722;
}
.chat-box .emoji {
	width: 20px;
}
.chat-box .check {
	float: right;
}
.chat-box .check img {
	width: 20px;
}
.chat-box .check span {
	color: #888;
	font-size: 12px;
	font-weight: 700px;
}

*::-webkit-scrollbar {
	width: 5px;
}
*::-webkit-scrollbar-track {
	background: #f1f1f1;
}
*::-webkit-scrollbar-thumb {
	background: #aaa;
}
*::-webkit-scrollbar-thumb:hover {
	background: #555;
}

.chat-footer {
	display: flex;
	justify-content: center;
	align-items: center;
	border-radius: 60px;
	position: relative;
	cursor: pointer;
}
.chat-footer textarea {
	display: block;
	flex: 1;
	width: 100%;
	height: 50px;
	border-radius: 60px;
	margin: 5px;
	padding: 10px;
	outline: none;
	font-size: 19px;
	padding-left: 40px;
	padding-right: 90px;
	border: 2px solid #ccc;
	color: #555;
	resize: none;
}
.chat-footer .mic {
	display: block;
	width: 55px;
	height: 55px;
	margin-right: 20px;
}

.chat-footer .emo{
	display: block;
	width: 35px;
	height: 35px;
	position: absolute;
	left: 10px;
	top: 12px;
}
.chat-footer .icons {
	position: absolute;
	right: 100px;
	top: 10px;
}
.chat-footer .icons img{
    display: inline-block;
    width: 35px;
    height: 35px;
    margin-left: 5px;
}


.navigationes
    {
        position: relative;
        width: 415px;
        height: 70px;
        background: #f1f0e8;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;

    }
    .navigationes ul {
        display: flex;
        width: 350px;

    }
    .navigationes  ul li {
        position: relative;
        list-style:none;
        width: 70px;
        height: 70px;
        z-index: 1;
    }

    .navigationes  ul li  a {

        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 100%;
        text-align: center;
        font-weight: 500;
    }
    .navigationes  ul li  a  .icon{
        position: relative;
        display: block;
        line-height: 75px;
        font-size: 1.5em;
        text-align: center;
        transition: 0.5s;
        color: var(--clr);
    }
    .navigationes  ul li.active  a  .icon{
        transform: translateY(-32px);
    }
    .navigationes  ul li  a .text{
        position: absolute;
        color: var(--clr);
        font-weight: 400;
        font-size: 0.75em;
        letter-spacing: 0.5em;
        transition: 0.5s;
        opacity: 0 !important ;
        transform: translateY(20px) !important;
    }

    .navigationes  ul li.active a  .text
    {
        opacity:1;
        transform: translateY(10px);
    }
    .indicator
    {
        position: absolute;
        top: -40px;
        width: 70px;
        height: 70px;
        background: #29fd53;
        border-radius: 50%;
        border: 6px  solid var(--clr);
        transition: 0.5s;

    }
    .indicator::before{
        content: '';
        position: absolute;
        top: 50%;
        left: -22px;
        width: 20px;
        height: 20px;
        background: transparent;
        border-top-right-radius: 20px;
        box-shadow: 1px -10px 0 0 var(--clr);

    }
    .indicator::after{
        content: '';
        position: absolute;
        top: 50%;
        right: -22px;
        width: 20px;
        height: 20px;
        background: transparent;
        border-top-left-radius: 20px;
        box-shadow:-1px -10px 0 0 var(--clr);

    }
    .navigationes  ul li:nth-child(1).active ~ .indicator{
        transform:  translateX(calc(70px * 0));
    }
    .navigationes  ul li:nth-child(2).active ~ .indicator{
        transform:  translateX(calc(70px * 1));
    }
    .navigationes  ul li:nth-child(3).active ~ .indicator{
        transform:  translateX(calc(70px * 2));
    }
    .navigationes  ul li:nth-child(4).active ~ .indicator{
        transform:  translateX(calc(70px * 3));
    }
    .navigationes  ul li:nth-child(5).active ~ .indicator{
        transform:  translateX(calc(70px * 4));
    }



    .mobile{
    width: 464px;
    height: 693px;
    border: solid;
}



/* card updata apps */
/* :root{
    --background-dark:#2d3548;
    --text-light: rgba(255,255,255,0.6);
    --text-lighter: rgba(255,255,255,0.9);
    --spacing-s:8px;
    --spacing-m:16px;
    --spacing-l:24px;
    --spacing-xl:32px;
    --spacing-xxl:64px;
--width-container:1200px;
}
*{
    border: 0;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.hreo-section{
    align-items: flex-start;
    background-image: linear-gradient(15deg,#49643c 0%,#78eb9a 100%);
    display: flex;
    min-height: 100%;
    justify-content: center;
  padding: var(--spacing-xxl) var(--spacing-l);
}
.card-grid{
    display: grid;
    grid-template-columns: repeat(1,1fr);
    grid-column-gap: var(--spacing-l);
    grid-row-gap:var(--spacing-l);
    max-width: var(--width-container);
    width: 100%;
}
@media(min-width:540px){
    .card-grid{
        grid-template-columns:repeat(2,1fr);
    }
}
@media(min-width:540px){
    .card-grid{
        grid-template-columns:repeat(4,1fr);
    }
}
.card_app{
    list-style: none;
    position: relative;
}
.card_app::before{
 content: '';
 display: block;
 padding-bottom: 150px;
 width:100%;
}
.card-background{
    background-size: cover;
    background-position: center;
    border-radius: var(--spacing-l);
    bottom: 0;
    filter: brightness(0.75) saturate(1.2) contrast(0.85);
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    transform-origin: center;
    transform: scale(1) translateZ(0);
    transition: filter 200ms linear,
    transform: 200ms linear;
}
.card_app:hover .card-background{
    transform: scale(1.05) translateZ(0);
}
.card-grid:hover> .card_app:not(hover) .card-background{
    filter: brightness(0.5) saturate(0) contrast(1.2) blur(20px);
}
.card_content{
    left:0;
    padding: var(--spacing-l);
    position: absolute;
    top:0;
}
.card-category{
    color: var(--text-light);
    font-size: 0.9rem;
    margin-bottom:var(--spacing-s);
    text-transform: uppercase;
}
.card_heading{
    color: var(--text-lighter);
    font-size:1.9rem;
    text-shadow: 2px 2px 20px rgba(0,0,0,0.2);
    line-height: 1.4;
    word-spacing: 100vw;
}
.app{
    height: 100%;
} */


</style>
<link id="pagestyle" href="{{ asset('../assets/css/argon-dashboard.css?v=2.0.0') }}" rel="stylesheet" />
