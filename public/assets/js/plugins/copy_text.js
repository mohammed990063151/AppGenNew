// alert( $("edite_name").text());

const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");

let formStepsNum = 0;

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum++;
    updateFormSteps();
    updateProgressbar();
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--;
    updateFormSteps();
    updateProgressbar();
  });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("form-step-active") &&
      formStep.classList.remove("form-step-active");
  });

  formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress-step-active");
    } else {
      progressStep.classList.remove("progress-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progress-step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}



const card = document.querySelector(".card__inner");

card.addEventListener("click", function (e) {
  card.classList.toggle('is-flipped');
});

$(function () {
    "use strict";
    $("#AppName").on("keyup", function () {
        // console.log(e);
        //    alert( $("name"));

        $(".project-category").text($(this).val());
        // alert( $("edite_name").text());
    });

    ("use strict");
    $("#Logo").on("change", function (e) {
        var src = URL.createObjectURL(e.target.files[0]);
        console.log();
        //URL.createObjectURL(file)

        //    alert( $("name"));

        $("#Logos").attr("src", src);
    });
});

const list = document.querySelectorAll(".list");
function activelink() {
    //  remove(...tokens:string[]);
    list.forEach((item) =>
        //   void
        item.classList.remove("active")
    );
    this.classList.add("active");
}
list.forEach((item) => item.addEventListener("click", activelink));

$(function () {
    "use strict";
    $("#name").on("keyup", function () {
        //    alert( $("name"));

        $(".project-category").text($(this).val());
        // alert( $("edite_name").text());
    });
});

const one = document.querySelector(".one");
const two = document.querySelector(".two");
const three = document.querySelector(".three");
const four = document.querySelector(".four");
const five = document.querySelector(".five");

one.onclick = function () {
    one.classList.add("active");
    two.classList.remove("active");
    three.classList.remove("active");
    four.classList.remove("active");
    five.classList.remove("active");
};

two.onclick = function () {
    one.classList.add("active");
    two.classList.add("active");
    three.classList.remove("active");
    four.classList.remove("active");
    five.classList.remove("active");
};
three.onclick = function () {
    one.classList.add("active");
    two.classList.add("active");
    three.classList.add("active");
    four.classList.remove("active");
    five.classList.remove("active");
};
four.onclick = function () {
    one.classList.add("active");
    two.classList.add("active");
    three.classList.add("active");
    four.classList.add("active");
    five.classList.remove("active");
};
five.onclick = function () {
    one.classList.add("active");
    two.classList.add("active");
    three.classList.add("active");
    four.classList.add("active");
    five.classList.add("active");
};

function setname() {
    document
        .getElementById("frame")
        .contentWindow.document.querySelector("body > flt-glass-pane")
        .shadowRoot.querySelector(
            "flt-scene-host > flt-scene > flt-transform > flt-offset > flt-offset > flt-offset > flt-clip > flt-clip-interior > flt-offset:nth-child(1) > flt-clip > flt-clip-interior > flt-offset > flt-clip > flt-clip-interior > flt-picture > flt-canvas > p:nth-child(3) > span"
        ).innerHTML = document.getElementById("ahmed").value;
}

// document
//     .getElementById("frame")
//     .contentWindow.document.querySelector("body > flt-glass-pane")
//     .shadowRoot.querySelector(
//         "flt-scene-host > flt-scene > flt-transform > flt-offset > flt-offset > flt-offset > flt-clip > flt-clip-interior > flt-offset:nth-child(1) > flt-clip > flt-clip-interior > flt-offset > flt-clip > flt-clip-interior > flt-picture > flt-canvas > p:nth-child(3) > span"
//     ).innerHTML = document.getElementById("ahmed").value;
