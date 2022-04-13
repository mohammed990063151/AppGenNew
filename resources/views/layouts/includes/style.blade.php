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
<<<<<<< HEAD
margin-top: 30px;
display: flex;
    flex-direction: row;
    justify-content: center;
    flex-wrap: wrap;
=======
margin-top: -18px;
>>>>>>> 4942bf92bf88ca90d03d8c2d4d5f9b443b609305
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


<<<<<<< HEAD


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
=======
*{
    box-sizing: border-box;
}
$purple1: #0C132F;
$purple2: #824970;
$blue1: #19234D;
$blue2: #D2D4DE;
$orange1: #F3851F;
$green1: #1CCA00;
$green2: #A89949;
$green3: #163026;
$green4: #169061;
// http://co0kie.github.io/codepen/mindful/

body{
  height: 100vh;
  margin: 0;
  padding: 0;
  background-color: #211d1d;
  font-family: 'Robot', sans-serif;
}

.wrap{
  display: flex;
  height: 100vh;
  margin: 0 auto;
  max-width: 840px;
}

.container{
  width: 375px;
  height: 680px;
  margin: auto;
  border-radius: 30px;
  background-repeat: no-repeat;
}

.landscape-1{
  background-image: url('http://co0kie.github.io/codepen/mindful/landscape.jpg');
  background-size: 770px;
  background-position: -392px -88px;
  background-color: $purple1;
}

.landscape-2{
  background-image: url('http://co0kie.github.io/codepen/mindful/landscape2.jpg');
  background-size: 1050px;
  background-position: -332px -1px;
}

.top{
  margin: 110px 40px 0;
  color: white;
  > time{
    font-size: 16px;
  }
  .light &{
    color: #000;
  }
  [type="checkbox"]{
    display: none;
  }
  .switch{
    position: relative;
    width: 60px;
    border-radius: 20px;
    height: 30px;
    background-color: #fff;
    display: block;
    margin-top: 20px;
    transition: 200ms;
    &::before{
      content: '';
      position: absolute;
      background-color: $green1;
      transition: 200ms;
      width: 28px;
      height: 28px;
      border-radius: 50%;
      top: 0;
      bottom: 0;
      margin: auto;
      left: 1px;
      box-shadow: 0 1px 2px 1px rgba(0,0,0,0.17);
    }
  }
  [type="checkbox"]:checked{
    ~ .switch{
      background-color: $green1;
      &::before{
        content: '';
        background-color: #fff;
        left: 31px;
      }
    }
  }
}

.title{
  margin-bottom: 10px;
  font-weight: 400;
  font-size: 32px;
}

.notification{
  background-color: #fff;
  width: 80%;
  margin: auto;
  padding: 15px;
  border-radius: 10px;
  font-size: 13px;
  margin-top: 40px;
  display: flex;
  align-items: center;
  box-shadow: 0 2px 10px 0 $purple2;
  > p{
    margin: 0;
  }
  > p > strong{
    display: block;
    color: $orange1;
    font-weight: 400;
    margin-bottom: 5px;
  }
  > p img{
    width: 17px;
    vertical-align: bottom;
    margin-right: 3px;
  }
  > small{
    margin-left: auto;
  }
}

.heading{
  color: white;
  font-size: 22px;
  font-weight: 400;
  position: relative;
  > button{
    position: absolute;
    background-color: $green4;
    border: 0;
    padding: 10px;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    color: white;
    font-size: 27px;
    line-height: 1;
    height: 43px;
    right: -40px;
    top: -7px;
    width: 50px;
  }
}

.content{
  padding: 0 40px;
  margin-top: 130px;
}

.slides{
  display: flex;
  margin-top: 30px;
}

.article{
  display: flex;
  align-items: center;
  background-color: $blue1;
  padding: 30px 20px;
  border-radius: 10px;
  width: 100%;
  position: relative;
  &::before{
    content: '';
    position: absolute;
    right: -40px;
    height: 100%;
    width: 20px;
    background-color: $blue1;
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
  }
  > img{
    width: 30px;
    margin-right: 20px;
    &:hover{
      filter: grayscale(100%) sepia(100%);
    }
  }
  > .text > h6{
    color: white;
    font-size: 14px;
    margin: 0 0 8px;
    font-weight: 400;
  }
  > .text > p{
    color: $blue2;
    font-size: 11px;
    margin: 0;
  }
}

.navigation{
  background-color: $blue1;
  padding: 15px 0;
  border-radius: 50px;
  margin: 40px 10px;
  display: flex;
  justify-content: space-around;
  > a > img{
    width: 26px;
    transition: 200ms;
  }
  > a:hover > img{
    filter: invert(0.6) sepia(1) hue-rotate(350deg) saturate(9);
  }
  .light &{
    background-color: $green3;
    > a:hover > img{
      filter: invert(0.6) sepia(1) hue-rotate(370deg) saturate(200);
    }
  }
}

.timeline{
  margin: 10px 0 67px;
  > .item > ul{
    list-style-type: none;
    margin: 0;
    padding: 0;
    position: relative;
  }
  ul{
    &::before{
      content: '';
      height: 22%;
      width: 1px;
      background-color: $green2;
      position: absolute;
      top: 0;
      bottom: 0;
      margin: auto;
      left: 22px;
      z-index: 0;
    }
  }
  li{
    display: flex;
    align-items: center;
    color: white;
    + li{
      margin-top: 10px;
      opacity: .5;
    }
  }
  li > img{
    width: 45px;
    background-color: $green2;
    border-radius: 50%;
    padding: 8px;
    margin-right: 11px;
  }
  li > p{
    font-size: 14px;
  }
  li > p span{
    color: rgba(255,255,255, 0.55);
  }
  li strong{
    display: block;
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 4px;
  }
  li > small{
    margin-left: auto;
  }
}

.border-radius-xl {
    border-radius: 0.75rem;
}
.icon-lg {
    width: 64px;
    height: 64px;
}
.icon-shape {
    width: 48px;
    height: 48px;
    background-position: center;
    border-radius: 0.5rem;
}
.bg-gradient-dark {
    background-image: linear-gradient(195deg, #42424a 0%, #191919 100%);
}
.shadow-dark {
    box-shadow: 0 4px 20px 0 rgb(0 0 0 / 14%), 0 7px 10px -5px rgb(64 64 64 / 40%) !important;
}
.text-center {
    text-align: center !important;
}
.mt-n4 {
    margin-top: -1.5rem !important;
}
.position-absolute {
    position: absolute !important;
}
.icon {
    fill: currentColor;
    stroke: none;
}
.icon-lg {
    height: 1.6em;
    width: 1.6em;
}
.icon {
    display: inline-block;
    color: #111111;
    height: 1em;
    width: 1em;

}


>>>>>>> 4942bf92bf88ca90d03d8c2d4d5f9b443b609305




<<<<<<< HEAD
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
=======


*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
@font-face {
    font-family: pop;
    src: url(./Fonts/Poppins-Medium.ttf);
}

.main{
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: pop;
    flex-direction: column;
}
.head{
    text-align: center;
}
.head_1{
    font-size: 30px;
    font-weight: 600;
    color: #333;
}
.head_1 span{
    color: #ff4732;
}
.head_2{
    font-size: 16px;
    font-weight: 600;
    color: #333;
    margin-top: 3px;
}
ul{
    display: flex;
    margin-top: 80px;
}
ul li{
    list-style: none;
    display: flex;
    flex-direction: column;
    align-items: center;
}
ul li .icon{
    font-size: 35px;
    color: #ff4732;
    margin: 0 60px;
}
ul li .text{
    font-size: 14px;
    font-weight: 600;
    color: #ff4732;
}

/* Progress Div Css  */

ul li .progress{
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: rgba(68, 68, 68, 0.781);
    margin: 14px 0;
    display: grid;
    place-items: center;
    color: #fff;
    position: relative;
    cursor: pointer;
}
.progress::after{
    content: " ";
    position: absolute;
    width: 125px;
    height: 5px;
    background-color: rgba(68, 68, 68, 0.781);
    right: 30px;
}
.one::after{
    width: 0;
    height: 0;
}
ul li .progress .uil{
    display: none;
}
ul li .progress p{
    font-size: 13px;
}

/* Active Css  */

ul li .active{
    background-color: #ff4732;
    display: grid;
    place-items: center;
}
li .active::after{
    background-color: #ff4732;
}
ul li .active p{
    display: none;
}
ul li .active .uil{
    font-size: 20px;
    display: flex;
}

/* Responsive Css  */

@media (max-width: 980px) {
    ul{
        flex-direction: column;
    }
    ul li{
        flex-direction: row;
    }
    ul li .progress{
        margin: 0 30px;
    }
    .progress::after{
        width: 5px;
        height: 55px;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        z-index: -1;
    }
    .one::after{
        height: 0;
    }
    ul li .icon{
        margin: 15px 0;
    }
}

@media (max-width:600px) {
    .head .head_1{
        font-size: 24px;
    }
    .head .head_2{
        font-size: 16px;
    }
}




* {
    margin: 0;
    padding:0;
    box-sizing: border-box;
    font-family: 'Poppins' , sans-serif;

    }

    :root{
        --clr:#fff;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: var(--clr);
    }
    .navigations
    {
        position: relative;
        width: 357px;
        height: 70px;
        background: rgb(230, 226, 226);
>>>>>>> 4942bf92bf88ca90d03d8c2d4d5f9b443b609305
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
<<<<<<< HEAD

    }
    .navigationes ul {
=======
        margin: -4px -4px;

    }
    .navigations ul {
>>>>>>> 4942bf92bf88ca90d03d8c2d4d5f9b443b609305
        display: flex;
        width: 350px;

    }
<<<<<<< HEAD
    .navigationes  ul li {
=======
    .navigations  ul li {
>>>>>>> 4942bf92bf88ca90d03d8c2d4d5f9b443b609305
        position: relative;
        list-style:none;
        width: 70px;
        height: 70px;
        z-index: 1;
    }

<<<<<<< HEAD
    .navigationes  ul li  a {
=======
    .navigations  ul li  a {
>>>>>>> 4942bf92bf88ca90d03d8c2d4d5f9b443b609305

        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 100%;
        text-align: center;
        font-weight: 500;
    }
<<<<<<< HEAD
    .navigationes  ul li  a  .icon{
=======
    .navigations  ul li  a  .icon{
>>>>>>> 4942bf92bf88ca90d03d8c2d4d5f9b443b609305
        position: relative;
        display: block;
        line-height: 75px;
        font-size: 1.5em;
        text-align: center;
        transition: 0.5s;
<<<<<<< HEAD
        color: var(--clr);
    }
    .navigationes  ul li.active  a  .icon{
        transform: translateY(-32px);
    }
    .navigationes  ul li  a .text{
        position: absolute;
        color: var(--clr);
=======
        /* --clr:#fff;/ */
        color: black;
    }
    .navigations  ul li.active  a  .icon{
        transform: translateY(-32px);
    }
    .navigations  ul li  a .text{
        position: absolute;
        color: black;
>>>>>>> 4942bf92bf88ca90d03d8c2d4d5f9b443b609305
        font-weight: 400;
        font-size: 0.75em;
        letter-spacing: 0.5em;
        transition: 0.5s;
<<<<<<< HEAD
        opacity: 0 !important ;
        transform: translateY(20px) !important;
    }

    .navigationes  ul li.active a  .text
    {
        opacity:1;
        transform: translateY(10px);
=======
        opacity: 0.1 !important ;
        transform: translateY(20.1px) !important;
    }

    .navigations  ul li.active a .text
    {
        opacity:1.1 !important;
        transform: translateY(10px) !important;
>>>>>>> 4942bf92bf88ca90d03d8c2d4d5f9b443b609305
    }
    .indicator
    {
        position: absolute;
        top: -40px;
        width: 70px;
        height: 70px;
        background: #29fd53;
        border-radius: 50%;
<<<<<<< HEAD
        border: 6px  solid var(--clr);
=======
        border: 6px  solid #f1f0e8;
>>>>>>> 4942bf92bf88ca90d03d8c2d4d5f9b443b609305
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
<<<<<<< HEAD
        box-shadow: 1px -10px 0 0 var(--clr);
=======
        box-shadow: 1px -10px 0 0 #f1f0e8;
>>>>>>> 4942bf92bf88ca90d03d8c2d4d5f9b443b609305

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
<<<<<<< HEAD
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

=======
        box-shadow:-1px -10px 0 0 #f1f0e8;

    }
    .navigations  ul li:nth-child(1).active ~ .indicator{
        transform:  translateX(calc(70px * 0));
    }
    .navigations  ul li:nth-child(2).active ~ .indicator{
        transform:  translateX(calc(70px * 1));
    }
    .navigations  ul li:nth-child(3).active ~ .indicator{
        transform:  translateX(calc(70px * 2));
    }
    .navigations  ul li:nth-child(4).active ~ .indicator{
        transform:  translateX(calc(70px * 3));
    }
    .navigations  ul li:nth-child(5).active ~ .indicator{
        transform:  translateX(calc(70px * 4));
    }

>>>>>>> 4942bf92bf88ca90d03d8c2d4d5f9b443b609305
</style>
<link id="pagestyle" href="{{ asset('../assets/css/argon-dashboard.css?v=2.0.0') }}" rel="stylesheet" />
