$(function() {

$('#menu').click(function(){
		 if($('.header-nav-list').hasClass('active')){
		    $('.header-nav-list').slideUp('300').removeClass('active');
		 }else{
		  $('.header-nav-list').slideDown('300').addClass('active');
		  }
});

$('.hide').click(function(){
	      var $this = $(this);
          var $dest = $this.closest(".blue_ribbon");	
		  $dest.siblings('.wrap').slideUp('300').removeClass('active');
		  $this.css('display','none');
		  $this.siblings('.show').css('display','block');
});

$('.show').click(function(){		 
		  var $this = $(this);
          var $dest = $this.closest(".blue_ribbon");	
		  $dest.siblings('.wrap').slideDown('300').addClass('active');
		  $this.css('display','none');
		  $this.siblings('.hide').css('display','block');
});


    $('#accept').click(function () {
        $('#submit').css('display', 'inline-block');
    });

    $('#uploadbtn').change(function(){
        $('#uploadimage').submit();
    });



    $(function () {
        // get days in month
        function daysInMonth(month, year) {

            month = parseInt(month,10)+1;
            month=month.toString();
            return new Date(year, month, 0).getDate();
        }
        //creates an array of number, a = array size, b starting num
        var numberArray = function (a, b) {
            c = [];
            for (var i = 0; i < a; i++) {
                c[i] = i + b;
            }
            return c;
        };
        //generates numeric drop down
        function createOptions(parent, options) {
            var l = options.length;
            for (var i = 0; i < l; i++) {
                var val = options[i];
                var text = options[i];
                var node = document.createElement("option");
                node.textContent = text;
                node.value = val;
                if(i===0) node.selected='selected';
                parent.appendChild(node);

            }
        }
        //generates drop down with numeric value string text
        function getOptionFromMap(parent, map) {
            for (var i = 0; i < map.length; i++) {
                var x = map[i];
                var val = x.key;
                var text = x.val;
                var node = document.createElement("option");
                node.textContent = text;
                node.value = val;
                if(i===0) node.selected='selected';
                parent.appendChild(node);
            }

        }
        var years = numberArray(20, 2000);
        var days = numberArray(31, 1);
        var months = [{
            key: 00,
            val: "January"
        }, {
            key: 01,
            val: "February"
        }, {
            key: 02,
            val: "March"
        }, {
            key: 03,
            val: "April"
        }, {
            key: 04,
            val: "May"
        }, {
            key: 05,
            val: "June"
        }, {
            key: 06,
            val: "July"
        }, {
            key: 07,
            val: "August"
        }, {
            key: 08,
            val: "September"
        }, {
            key: 09,
            val: "October"
        }, {
            key: 10,
            val: "November"
        }, {
            key: 11,
            val: "December"
        }];
        createOptions(document.getElementById('dayOne'), days);
        // createOptions(document.getElementById('dayTwo'), days);
        createOptions(document.getElementById('yearOne'), years);
        // createOptions(document.getElementById('yearTwo'), years);
        getOptionFromMap(document.getElementById('monthOne'), months);
        // getOptionFromMap(document.getElementById('monthTwo'), months);

        $(".year,.month").bind({
            change:function(){
                var dInMonth = daysInMonth($('.month',$(this).parent().parent()).val(), $('.year',$(this).parent().parent()).val());
                $('.day',$(this).parent().parent()).children().each(function(){

                    var cEle = $(this);
                    var cValue = parseInt(cEle.html(),10);
                    if(!cEle.is(':disabled') && (cValue>dInMonth)) {
                        cEle.attr({disabled:true});
                    } else if(cEle.is(':disabled') && (cValue<=dInMonth)) {
                        cEle.attr({disabled:false});
                    }
                });
            }
        });

        $('select',$('#dbOne')).bind({
            change:function(){
                var dBoxOne = $('#dbOne');
                var dtOne = getDateString(dBoxOne);
                var dOne = new Date(dtOne.y,dtOne.m,dtOne.d);
            }
        });

        function getDateString(dateBox){
            var year = $('.year',dateBox).val();
            var month = $('.month',dateBox).val();
            var day = $('.day',dateBox).val();
            var da = year+"/"+month+"/"+day;
            var d = {y:year,m:month,d:day};
            return d;

        }

        function setDate(dateBox,dateObj){
            var year = dateObj.getFullYear();
            var month = dateObj.getMonth();
            var day = dateObj.getDate();

            $('.year',dateBox).val(year);
            $('.month',dateBox).val(month);
            $('.day',dateBox).val(day);

        }
    });




    $(function () {
        // get days in month
        function daysInMonth(month, year) {

            month = parseInt(month,10)+1;
            month=month.toString();
            return new Date(year, month, 0).getDate();
        }
        //creates an array of number, a = array size, b starting num
        var numberArray = function (a, b) {
            c = [];
            for (var i = 0; i < a; i++) {
                c[i] = i + b;
            }
            return c;
        };
        //generates numeric drop down
        function createOptions(parent, options) {
            var l = options.length;
            for (var i = 0; i < l; i++) {
                var val = options[i];
                var text = options[i];
                var node = document.createElement("option");
                node.textContent = text;
                node.value = val;
                if(i===0) node.selected='selected';
                parent.appendChild(node);

            }
        }
        //generates drop down with numeric value string text
        function getOptionFromMap(parent, map) {
            for (var i = 0; i < map.length; i++) {
                var x = map[i];
                var val = x.key;
                var text = x.val;
                var node = document.createElement("option");
                node.textContent = text;
                node.value = val;
                if(i===0) node.selected='selected';
                parent.appendChild(node);
            }

        }
        var years = numberArray(20, 2000);
        var days = numberArray(31, 1);
        var months = [{
            key: 00,
            val: "January"
        }, {
            key: 01,
            val: "February"
        }, {
            key: 02,
            val: "March"
        }, {
            key: 03,
            val: "April"
        }, {
            key: 04,
            val: "May"
        }, {
            key: 05,
            val: "June"
        }, {
            key: 06,
            val: "July"
        }, {
            key: 07,
            val: "August"
        }, {
            key: 08,
            val: "September"
        }, {
            key: 09,
            val: "October"
        }, {
            key: 10,
            val: "November"
        }, {
            key: 11,
            val: "December"
        }];
        createOptions(document.getElementById('dayTwo'), days);
        // createOptions(document.getElementById('dayTwo'), days);
        createOptions(document.getElementById('yearTwo'), years);
        // createOptions(document.getElementById('yearTwo'), years);
        getOptionFromMap(document.getElementById('monthTwo'), months);
        // getOptionFromMap(document.getElementById('monthTwo'), months);

        $(".year,.month").bind({
            change:function(){
                var dInMonth = daysInMonth($('.month',$(this).parent().parent()).val(), $('.year',$(this).parent().parent()).val());
                $('.day',$(this).parent().parent()).children().each(function(){

                    var cEle = $(this);
                    var cValue = parseInt(cEle.html(),10);
                    if(!cEle.is(':disabled') && (cValue>dInMonth)) {
                        cEle.attr({disabled:true});
                    } else if(cEle.is(':disabled') && (cValue<=dInMonth)) {
                        cEle.attr({disabled:false});
                    }
                });
            }
        });

        $('select',$('#dbOne')).bind({
            change:function(){
                var dBoxOne = $('#dbOne');
                var dtOne = getDateString(dBoxOne);
                var dOne = new Date(dtOne.y,dtOne.m,dtOne.d);
            }
        });

        function getDateString(dateBox){
            var year = $('.year',dateBox).val();
            var month = $('.month',dateBox).val();
            var day = $('.day',dateBox).val();
            var da = year+"/"+month+"/"+day;
            var d = {y:year,m:month,d:day};
            return d;

        }

        function setDate(dateBox,dateObj){
            var year = dateObj.getFullYear();
            var month = dateObj.getMonth();
            var day = dateObj.getDate();

            $('.year',dateBox).val(year);
            $('.month',dateBox).val(month);
            $('.day',dateBox).val(day);

        }
    });




    $(function () {
        // get days in month
        function daysInMonth(month, year) {

            month = parseInt(month,10)+1;
            month=month.toString();
            return new Date(year, month, 0).getDate();
        }
        //creates an array of number, a = array size, b starting num
        var numberArray = function (a, b) {
            c = [];
            for (var i = 0; i < a; i++) {
                c[i] = i + b;
            }
            return c;
        };
        //generates numeric drop down
        function createOptions(parent, options) {
            var l = options.length;
            for (var i = 0; i < l; i++) {
                var val = options[i];
                var text = options[i];
                var node = document.createElement("option");
                node.textContent = text;
                node.value = val;
                if(i===0) node.selected='selected';
                parent.appendChild(node);

            }
        }
        //generates drop down with numeric value string text
        function getOptionFromMap(parent, map) {
            for (var i = 0; i < map.length; i++) {
                var x = map[i];
                var val = x.key;
                var text = x.val;
                var node = document.createElement("option");
                node.textContent = text;
                node.value = val;
                if(i===0) node.selected='selected';
                parent.appendChild(node);
            }

        }
        var years = numberArray(20, 2000);
        var days = numberArray(31, 1);
        var months = [{
            key: 00,
            val: "January"
        }, {
            key: 01,
            val: "February"
        }, {
            key: 02,
            val: "March"
        }, {
            key: 03,
            val: "April"
        }, {
            key: 04,
            val: "May"
        }, {
            key: 05,
            val: "June"
        }, {
            key: 06,
            val: "July"
        }, {
            key: 07,
            val: "August"
        }, {
            key: 08,
            val: "September"
        }, {
            key: 09,
            val: "October"
        }, {
            key: 10,
            val: "November"
        }, {
            key: 11,
            val: "December"
        }];
        createOptions(document.getElementById('dayThree'), days);
        // createOptions(document.getElementById('dayTwo'), days);
        createOptions(document.getElementById('yearThree'), years);
        // createOptions(document.getElementById('yearTwo'), years);
        getOptionFromMap(document.getElementById('monthThree'), months);
        // getOptionFromMap(document.getElementById('monthTwo'), months);

        $(".year,.month").bind({
            change:function(){
                var dInMonth = daysInMonth($('.month',$(this).parent().parent()).val(), $('.year',$(this).parent().parent()).val());
                $('.day',$(this).parent().parent()).children().each(function(){

                    var cEle = $(this);
                    var cValue = parseInt(cEle.html(),10);
                    if(!cEle.is(':disabled') && (cValue>dInMonth)) {
                        cEle.attr({disabled:true});
                    } else if(cEle.is(':disabled') && (cValue<=dInMonth)) {
                        cEle.attr({disabled:false});
                    }
                });
            }
        });

        $('select',$('#dbOne')).bind({
            change:function(){
                var dBoxOne = $('#dbOne');
                var dtOne = getDateString(dBoxOne);
                var dOne = new Date(dtOne.y,dtOne.m,dtOne.d);
            }
        });

        function getDateString(dateBox){
            var year = $('.year',dateBox).val();
            var month = $('.month',dateBox).val();
            var day = $('.day',dateBox).val();
            var da = year+"/"+month+"/"+day;
            var d = {y:year,m:month,d:day};
            return d;

        }

        function setDate(dateBox,dateObj){
            var year = dateObj.getFullYear();
            var month = dateObj.getMonth();
            var day = dateObj.getDate();

            $('.year',dateBox).val(year);
            $('.month',dateBox).val(month);
            $('.day',dateBox).val(day);

        }
    });




});