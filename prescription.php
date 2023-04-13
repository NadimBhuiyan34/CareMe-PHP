<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
    integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/3.0.1/mustache.min.js"
    integrity="sha256-srhz/t0GOrmVGZryG24MVDyFDYZpvUH2+dnJ8FbpGi0=" crossorigin="anonymous"></script>
    <style>
        body {
  transition: all 0.3s ease;
}
.wrapper {
  height: 100vh;
  width: 100vw;
  display: flex;
  flex-direction: column;
  background: red;
  margin: 50px;
}
.prescription_form {
  width: 100%;
  height: 100vh;

  background: white;
}
.prescription {
  width: 720px;
  height: 960px;
  margin: 0 auto;
  border: 1px solid lightgrey;
}
.prescription tr > td {
  padding: 15px;
}
.header {
  color: #333;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.logo {
  flex: 1;
}
.logo img {
  width: 120px;
  height: 120px;
  float: left;
}
.credentials {
  flex: 1;
}
.credentials h4 {
  line-height: 1em;
  letter-spacing: 1px;
  font-weight: 700;
  margin: 0px;
  padding: 0px;
}
.credentials p {
  margin: 0 0 5px 0;
  padding: 3px 0px;
}
.credentials small {
  margin: 0;
  padding: 0;
  letter-spacing: 1px;
  padding-right: 80px;
}
.d-header {
  width: 100%;
  text-align: center;
  background: mediumseagreen;
  padding: 5px;
  color: white;
  font-weight: 800;
}
.symptoms,
.tests,
.advice {
  display: flex;
  flex-direction: column;
  flex: 1;
}

.symptoms ul,
.tests ul {
  list-style: square;
  margin: 0;
  padding-left: 10px;
  height: 100%;
}
.advice p {
  letter-spacing: 0;
  font-size: 14px;
}
.advice .adv_text {
  flex-grow: 1;
  width: 100%;
  height: 100%;
}

.desease_details {
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
}
.med_name {
  font-size: 16px;
  font-weight: bold;
  padding: 0;
}
.taking_time {
  display: flex;
  flex-direction: row;
  justify-content: flex-end;
  text-align: right;
}
.schedual {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}
.sc_time {
  margin: 0;
  padding: 0;
  float: left;
}
.sc_time span {
  font-weight: bold;
  margin-right: 1rem;
}
.sc {
  border: none;
  outline: none;
  font-size: 15px;
}

select {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: none;
  border: 0 !important;
  background: #fff;
  background-image: none;
}
select::-ms-expand {
  display: none;
}
.select {
  font-size: 15px;
  color: #335;
  position: relative;
  float: left;
  overflow: hidden;
}
select {
  font-weight: bold;
  padding: 0 0.5em;
  color: #333;
  cursor: pointer;
  outline: none;
}
.med_name {
  border: 0;
  outline: 0;
}
.period {
  font-size: 14px;
}
input[type="date"] {
  padding: 0;
  margin: 0;
  font-weight: bold;
  border: none;
}
.medicine {
  display: flex;
  flex-flow: column;
  height: 100%;
}
.med_name_action,
.med_when_action,
.med_period_action {
  display: none;
}
.med_meal_action .btn {
  margin: 2px;
}
.med_period {
  border: none;
  outline: none;
}
#add_med {
  margin: 20px 5px;
  flex-grow: 1;
}
#add_med {
  animation: shake 1.5s linear infinite;
}

@keyframes shake {
  10%, 90% {
    transform: translate3d(-1px, 0, 0);
  }
  
  20%, 80% {
    transform: translate3d(2px, 0, 0);
  }

  30%, 50%, 70% {
    transform: translate3d(-4px, 0, 0);
  }

  40%, 60% {
    transform: translate3d(4px, 0, 0);
  }
  95% {
    opacity: 0;
  }
}

#add_symptoms {
  margin: 20px 5px;
  flex-grow: 1;
  opacity: 1;
}
.symp_action,
.test_action,
.adv_action {
  display: none;
}
.med_footer {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
hr {
  margin: 10px 0px;
}
.med:hover hr {
  border-top: 3px #111 solid;
}
.med_period_action {
  float: right;
}
span.date {
  color: #333399;
  float: right;
  clear: both;
}
.del_action {
  width: 100%;
  text-align: right;
}
.delete {
  width: 50px;
  opacity: 0;
  display: none;
}
.med:hover .delete {
  display: inline;
  opacity: 1;
}
.folded {
  visibility: hidden;
}
.button_group {
    position: fixed;
    right: 120px;
    bottom: 100px;
}
#snacking, #snacked {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snacking.show, #snacked.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
    </style>
</head>
<body>

<div class="wrapper">
    <div class="prescription_form">
        <table class="prescription" data-prescription_id="<?php echo $presc->prescription_id; ?>" border="1">
            <tbody>
                <tr height="15%">
                    <td colspan="2">
                        <div class="header">
                            <div class="logo">
                                <img
                                    src="https://seeklogo.com/images/H/hospital-clinic-plus-logo-7916383C7A-seeklogo.com.png" />
                            </div>
                            <div class="credentials">
                                <h4>Doctor Name</h4>
                                <p>Chamber Name</p>
                                <small>Adress</small>
                                <br />
                                <small>Mb. 0XXXXXXXXX</small>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width="40%">
                        <div class="desease_details">
                            <div class="symptoms">
                                <h4 class="d-header">Symptoms</h4>
                                <ul class="symp" data-toggle="tooltip" data-placement="bottom" title="Click to edit."
                                    contenteditable="true">
                                </ul>
                                <div class="symp_action">
                                    <button id="symp_save" data-prescription_id="<?php echo $presc->prescription_id; ?>" class="btn btn-sm btn-success save">Save</button>
                                    <button class="btn btn-sm btn-danger cancel-btn">Cancel</button>
                                </div>
                            </div>
                            <div class="tests">
                                <h4 class="d-header">Tests</h4>
                                <ul class="tst" data-toggle="tooltip" data-placement="bottom" title="Click to edit."
                                    contenteditable="true">
                                </ul>
                                <div class="test_action">
                                    <button id="test_save" data-prescription_id="<?php echo $presc->prescription_id; ?>" class="btn btn-sm btn-success save">Save</button>
                                    <button class="btn btn-sm btn-danger cancel-btn">Cancel</button>
                                </div>
                            </div>
                            <div class="advice">
                                <h4 class="d-header">Advice</h4>
                                <p class="adv_text" style="outline: 0;" data-toggle="tooltip"
                                    data-placement="bottom" title="Click to edit." contenteditable="true">
                                </p>
                                <div class="adv_action">
                                    <button id="adv_save" data-prescription_id="<?php echo $presc->prescription_id; ?>" class="btn btn-sm btn-success save">Save</button>
                                    <button class="btn btn-sm btn-danger cancel-btn">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td width="60%" valign="top">
                        <span style="font-size: 3em;">R<sub>x</sub></span>
                        <hr />
                        <div class="medicine">
                            <section class="med_list">
                            </section>
                            <div id="add_med" data-toggle="tooltip" data-placement="right"
                                title="Click anywhere on the blank space to add more.">Click to add...</div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="button_group">
            <button class="issue_prescription btn btn-success">Issue</button>
            <!-- <button class="pdf_prescription btn btn-danger">PDF</button> -->
        </div>
        <div id="snacking">Saving...</div>
        <div id="snacked">Saved!</div>
    </div>
</div>

<script id="new_medicine" type="text/template">
    <div class="med">
        &#9899; <input class="med_name" data-med_id="{{med_id}}" data-toggle="tooltip"
            title="Click to edit..." placeholder="Enter medicine name"/>
        <div class="med_name_action">
            <button data-med_id="{{med_id}}" class="btn btn-sm btn-success save">Save</button>
            <button class="btn btn-sm btn-danger cancel-btn">Cancel</button>
        </div>
        <div class="schedual">
            <div class="sc_time folded">
                <select class="sc" data-med_id="{{med_id}}">
                  <option value="1+1+1" selected>1+1+1</option>
                  <option value="1+0+1">1+0+1</option>
                  <option value="0+1+1">1+1+1</option>
                  <option value="1+0+0">1+1+1</option>
                  <option value="0+0+1">1+1+1</option>
                  <option value="1+1+1+1">1+1+1+1</option>
                </select>
                <div class="med_when_action">
                    <button data-med_id="{{med_id}}"
                        class="btn btn-sm btn-success save">&check;</button>
                </div>
            </div>
            <div class="taking_time select folded">
                <select class="meal" data-med_id="{{med_id}}">
                    <option value="1" selected>After Meal</option>
                    <option value="2">Before Meal</option>
                    <option value="3">Take any time</option>
                </select>
                <div class="med_meal_action">
                    <button data-med_id="{{med_id}}"
                        class="btn btn-sm btn-success save">&check;</button>
                </div>
            </div>
        </div>
        <div class="med_footer">
            <div class="period folded">
                Take for <input class="med_period" type="text" data-med_id="{{med_id}}"
                    placeholder="? days/weeks..." />
                <div class="med_period_action">
                    <button data-med_id="{{med_id}}"
                        class="btn btn-sm btn-success save">&check;</button>
                </div>
                <span class="date"></span>
            </div>
            <div class="del_action">
                <button data-med_id="{{med_id}}" class="btn btn-sm btn-danger delete"><i class="fa fa-trash"
                        aria-hidden="true"></i></button>
            </div>
        </div>
        <hr />
    </div>
</script>


<script>
    $(document).ready(function() {
	Date.prototype.calcDate = function(days) {
		let date = new Date(this.valueOf());
		date.setDate(date.getDate() + days);
		return `(Untill ${date.getUTCDate()}-${date.getUTCMonth() +
			1}-${date.getUTCFullYear()})`;
	};
  let timeout;
	function snackSaving() {
		let snack = document.getElementById("snacking");
		snack.className = "show";
    timeout = setTimeout(() => {
      alert('ERR: Conection timeout.')
    }, 8000);
	}
	function snackSaved() {
    clearTimeout(timeout);
		let snack = document.getElementById("snacking");
		snack.className = snack.className.replace("show", "");
		let snacked = document.getElementById("snacked");
		snacked.className = "show";
		setTimeout(function() {
			snacked.className = snacked.className.replace("show", "");
		}, 1500);
	}
	$("[data-toggle=tooltip]").tooltip("show");
	setTimeout(function() {
		$("[data-toggle=tooltip]").tooltip("hide");
	}, 5000); //hide tooltips after 5sec
	$(document).keyup(function() {
		$("[data-toggle=tooltip]").tooltip("hide");
	}); //hide tooltip while typing
	$(document).on("focusin keypress", ".med_name", function(e) {
		let x = $(this).siblings("div.med_name_action");
		if (e.type == "focusin") {
			x.css("display", "block");
		}
		if (e.type == "keypress") {
			if (e.keyCode == 13) x.children("button.save").click();
		}
	});

	$(document).on("click", ".cancel-btn", function() {
		$(this)
			.parent()
			.css("display", "none"); //hides save/cancel btn
	});
	$(document).on("click", ".med_name_action button.save", function() {
		$(this)
			.parent()
			.css("display", "none");
		$(".sc_time").removeClass("folded");
	});
	$(".med_name").keypress(function(e) {
		if (e.which == 13) {
			$("#symp_save").click();
		}
	});

	$(document).on("mousedown", ".sc", function(e) {
		let x = $(this).siblings("div.med_when_action");
		x.css("display", "block");
	});
	$(document).on("click", ".med_when_action button.save", function() {
		$(this)
			.parent()
			.css("display", "none");
		$(".select").removeClass("folded");
	});
	$("select.sc").change(function() {
		let x = $(this).siblings("div.med_when_action");
		x.css("display", "none");
	});

	$(document).on("mousedown", ".meal", function() {
		let x = $(this).siblings("div.med_meal_action");
		x.css("display", "block");
	});
	$(document).on("click", ".med_meal_action button.save", function() {
		$(this)
			.parent()
			.css("display", "none");
		$(".period").removeClass("folded");
	});

	$(document).on("focusin keypress", ".med_period", function(e) {
		let x = $(this).siblings("div.med_period_action");
		if (e.type == "focusin") {
			x.css("display", "block");
		}
		if (e.type == "keypress") {
			if (e.keyCode == 13) x.children("button.save").click();
		}
	});
	$(document).on("click", ".med_period_action button.save", function() {
		$(this)
			.parent()
			.css("display", "none");
	});
	$(document).on("keyup", ".med_period", function() {
		let period = $(this).val();
		let num = +period.match(/\d+/g)[0];
		let type = period.match(/\b(\w)/g)[1];
		let days = null;
		if (type == "d") days = num;
		else if (type == "w") days = num * 7;
		else if (type == "m") days = num * 30;
		else if (type == "y") days = num * 365;
		let span = $(this).siblings("span.date");
		if (days) {
			let date = new Date().calcDate(days);
			span.html(date);
		} else {
			span.html("(Invalid time period)");
		}
	});

	$(".sc").keyup(function(e) {
		if (isNaN(e.key)) return;
		let el = $(this);
		el = el
			.val()
			.split("-")
			.join("");
		let finalVal = el.match(/.{1,1}/g).join("-");
		$(this).val(finalVal);
	});
	function initLi(e) {
		let txt = e.target.innerHTML;
		if (!txt.includes("<li>")) {
			let el = "<li></li>";
			$(this).append(el);
		}
	}
	$(".symptoms ul").focusin(initLi);
	$(".symptoms ul").keyup(function(e) {
		let fl = $(this)
			.children()
			.first();
		let el = `<li>${e.target.textContent}</li>`;
		if (fl.text().length < 1) {
			$(this).html("");
			$(this).append(el);
		}
	});
	$("#symp_save").click(function() {
		$(".symp_action").css("display", "none");
	});

	$(".tests ul").focusin(initLi);
	$(".tests ul").keyup(function() {
		let fl = $(this)
			.children()
			.first();
		let el = "<li></li>";
		if (fl.text().length < 1) {
			$(this).html("");
			$(this).append(el);
		}
	});
	$("#test_save").click(function() {
		$(".test_action").css("display", "none");
	});

	$(".symptoms ul").focusin(function() {
		$(".symp_action").css("display", "block");
	});

	$(".tests ul").focusin(function() {
		$(".test_action").css("display", "block");
	});

	$(".advice p").focusin(function() {
		$(".adv_action").css("display", "block");
	});

	$("#adv_save").click(function() {
		$(".adv_action").css("display", "none");
	});
	
	$(document).on("click", ".delete", function() {
		let parent = $(this).closest(".med");
		parent.remove();
	});
	
	let med_id = 1;
	$("#add_med").click(function() {
		med_id++;
		let sourceTemplate = $("#new_medicine").html();
		Mustache.parse(sourceTemplate);
		let sourceHTML = Mustache.render(sourceTemplate, { med_id });
		let medicine = $(".med_list");
		medicine.append(sourceHTML);
	})
});
</script>
</body>
</html>