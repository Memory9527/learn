# JavaScript Date(日期)对象 #
日期对象用于处理日期和时间。

使用Date()方法获得当日的日期。

	<script>
	var d=new Date();
	document.write(d);
	</script>
使用getFullYear()方法获取年份。
	
	<p id="demo">点击按钮获取今年的年份。</p>
	<button onclick="myFunction()">点我</button>
	<script>
	function myFunction(){
	var d = new Date();
	var x = document.getElementById("demo");
	x.innerHTML=d.getFullYear();
	}
	</script>
getTime()返回从1970年1月1日至今的毫秒数。

	var d = new Date();
	document.write(d.getTime());
使用setFullYear()设置具体的日期。
	
	var d = new Date();
	document.write(d.setFullYear(2020,10,3));
注：JavaScript月数是从0至11。10是11月。

使用toUTCString()将当日的日期(根据UTC)转换为字符串。

	var d = new Date();
	document.write(d.toUTCString());
使用getDay()和数组来显示星期，而不仅仅是数字

	var d = new Date();
	var weekday=new Array(7);
	weekday[0]="Sunday";
	weekday[1]="Monday";
	weekday[2]="Tuesday";
	weekday[3]="Wednesday";
	weekday[4]="Thursday";
	weekday[5]="Friday";
	weekday[6]="Saturday";
	document.write(weekday[d.getDay()]);
如何在网页上显示一个钟表:

	<script>
	function startTime(){
	var today=new Date();
	var h=today.getHours();
	var m=today.getMinutes();
	var s=today.getSeconds();// 在小于10的数字钱前加一个‘0’
	m=checkTime(m);
	s=checkTime(s);
	document.getElementById('txt').innerHTML=h+":"+m+":"+s;
	t=setTimeout(function(){startTime()},1000);
	//设定延时1秒钟运行函数。
	}
	function checkTime(i){
	if (i<10){
		i="0" + i;
	}
	return i;
	}
	</script>
	</head>
	<body onload="startTime()">
	<div id="txt"></div>
	</body>
	</html>

两个日期对象的比较。下面的代码将当前日期与2100年1月14日做了比较:

	 var x=new Date();
	 x.setFullYear(2100,0,14);
	var today = new Date();
	 if (x>today)
   	{
   	alert("Today is before 14th January 2100");
   	}
 	else
   	{
   	alert("Today is after 14th January 2100");
   	}