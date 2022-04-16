<script src="{{ asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{ asset("assets/js/core/bootstrap.min.js")}}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset("assets/js/plugins/smooth-scrollbar.min.js")}}"></script>
<script src="{{asset("assets/js/jquery-3.6.0.min.js")}}"></script>
<script src="{{asset("assets/js/plugins/copy_text.js")}}"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
 <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<script>
    // $(function(){
    //     alert('sd');
    // });
    var win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
  var options = {
    damping: '0.5'
  }
  Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset("assets/js/argon-dashboard.min.js?v=2.0.0")}}" ></script>
<!-- jqure -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<script>
    const list = document.querySelectorAll('.list');
    function activelink(){
       //  remove(...tokens:string[]);
        list.forEach((item) =>
       //   void
        item.classList.remove('active'));
        this.classList.add('active');

    }
    list.forEach((item)=>
    item.addEventListener('click',activelink));
    </script>


<script>
  var ctx1 = document.getElementById("chart-line").getContext("2d");

  var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

  gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
  gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
  gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
  new Chart(ctx1, {
    type: "line",
    data: {
      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [{
        label: "Mobile apps",
        tension: 0.4,
        borderWidth: 0,
        pointRadius: 0,
        borderColor: "#5e72e4",
        backgroundColor: gradientStroke1,
        borderWidth: 3,
        fill: true,
        data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
        maxBarThickness: 6

      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            padding: 10,
            color: '#fbfbfb',
            font: {
              size: 11,
              family: "Open Sans",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#ccc',
            padding: 20,
            font: {
              size: 11,
              family: "Open Sans",
              style: 'normal',
              lineHeight: 2
            },
          }
        },
      },
    },
  });

</script>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
{{-- card --}}
<script>

var app = new Vue({
  el: '#app',
  data: {
    posts: [
      { id: 1, flip: false, avatar: 'http://loremflickr.com/g/64/64/men', image: 'http://loremflickr.com/g/320/240/paris', name: chance.name(), ssn: chance.ssn() },
      { id: 2, flip: false, avatar: 'http://loremflickr.com/g/64/64/boys', image: 'http://loremflickr.com/g/320/240/amsterdam', name: chance.name(), ssn: chance.ssn() },
      { id: 3, flip: false, avatar: 'http://loremflickr.com/g/64/64/women', image: 'http://loremflickr.com/g/320/240/london', name: chance.name(), ssn: chance.ssn() },
      { id: 4, flip: false, avatar: 'http://loremflickr.com/g/64/64/girl', image: 'http://loremflickr.com/g/320/240/newyork', name: chance.name(), ssn: chance.ssn() }
    ]
  },
  methods: {
    letsFlip: function(item){
      this.posts.filter(function(v,k){
        return v.id != item.id;
      }).forEach(function(v,k){
        v.flip = false;
      })
      window.setTimeout(function(v,k){
        item.flip = !item.flip;
      }, 100)
    },
    viewCard: function(){
      window.alert('view card!')
    }
  }
})




</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



<script>
    let toggle = document.querySelector('.toggle');
    let menu = document.querySelector(".menu");
    toggle.onclick = function (){
         menu.classList.toggle('active');
    }
    </script>

