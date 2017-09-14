# JavaScript Window #
## 浏览器对象 ##
浏览器对象模型(BOM)使JavaScript有能力与浏览器"对话"。

浏览器对象模型(Browser Object Model(BOM))尚无正式标准。

由于现代浏览器已经(几乎)实现了JavaScript交互性方面的相同方法和属性，因此常被认为是BOM的方法和属性。

## Window对象 ##
所有浏览器都支持window对象。它表示浏览器窗口。

所有 JavaScript 全局对象、函数以及变量均自动成为 window 对象的成员。

全局变量是 window 对象的属性

全局函数是 window 对象的方法。

甚至HTML DOM的document也是window对象的属性之一：

	window.document.getElementById("header");
于此相同:
	
	document.getElementById("header");
## Window尺寸 ##
有三种方法能够确定浏览器窗口的尺寸(浏览器的视口，不包括工具栏和滚动条)。

对于Internet Explorer、Chrome、Firefox、Opera以及Safari:

- window.innerHeight-浏览器窗口的内部高度
- window.innerWidth-浏览器窗口的内部宽度

对于Internet Explorer8、7、6、5:

- document.documentElement.clientHeight
- document.documentElement.clientWidth

或者

- document.body.clientHeight
- document.body.clientWidth

使用的JavaScirpt方案（涵盖所有浏览器）

	<script>
	var w=window.innerWidth
	|| document.documentElement.clientWidth
	|| document.body.clientWidth;
	var h=window.innerHeight
	|| document.documentElement.clientHeight
	|| document.body.clientHeight;
	document.write("浏览器宽度：" + w +",浏览器高度：" + h);
	</script>
## 其他Window方法 ##
一些其他方法:

- window.open()-打开新窗口
- window.close()-关闭当前窗口
- window.moveTo()-移动当前窗口
- window.resizeTo()-调整当前窗口

## Window Screen ##
window.screen对象包含有关用户屏幕的信息。

window.screen对象在编写时可以不使用window这个前缀。

一些属性:

- screen.availWidth-可用的屏幕宽度
- screen.availHeight-可用的屏幕高度

screen.availWidth属性返回访问者屏幕的宽度，以像素计，减去界面特性，比如窗口任务栏。

	document.write("Available width: " + screen.availWidth);
window.availHeight属性返回访问者屏幕的高度，以像素计，减去界面特性，比如窗口任务栏。

	document.write("Available Height: " + screen.availHeight);

## JavaScript Window Location ##
window.location对象用于获得当前页面的地址(URL)，并把浏览器重定向到新的页面。

- location.href属性返回当前页面的URL。
- location.hostname返回web主机的域名。
- location.pathname返回当前页面的路径和文件名。
- location.port返回web主机的端口(80或443)
- location.protocol返回所使用的web协议(http://或https://)

使用location.assign()方法加载新的文档

	<html>
	<head>
	<script>
	function newDoc()
 	 {
 	 window.location.assign("http://www.w3cschool.cn")
  	}
	</script>
	</head>
	<body>

	<input type="button" value="Load new document" 	onclick="newDoc()">

	</body>
	</html>

## Window History ##
window History对象在编写时可不使用window这个前缀。为了保护用户隐私，对JavaScript访问该对象的方法做出了限制。
一些方法：

- history.back()-在浏览器点击后退按钮相同

		//在页面上创建一个后退按钮:
		<html>
		<head>
		<script>
		function goBack()
		  {
		  window.history.back()
		  }
		</script>
		</head>
		<body>

		<input type="button" value="Back" onclick="goBack()">

		</body>
		</html>	

- history.forward()-与在浏览器中点击按钮向前相同

		//在页面上创建一个向前的按钮:
		<html>
		<head>
		<script>
		function goForward()
		  {
		  window.history.forward()
		  }
		</script>
		</head>
		<body>

		<input type="button" value="Forward" onclick="goForward()">

		</body>
		</html>
## window.navigatro ##
window.navigator对象包含有关访问者浏览器的信息。

window.navigator对象在编写时可不使用window这个前缀。

	<div id="example"></div>
	<script>
	txt = "<p>浏览器代号: " + navigator.appCodeName + "</p>";
	txt+= "<p>浏览器名称: " + navigator.appName + "</p>";
	txt+= "<p>浏览器版本: " + navigator.appVersion + "</p>";
	txt+= "<p>启用Cookies: " + navigator.cookieEnabled + "</p>";
	txt+= "<p>硬件平台: " + navigator.platform + "</p>";
	txt+= "<p>用户代理: " + navigator.userAgent + "</p>";
	txt+= "<p>用户代理语言: " + navigator.systemLanguage + "</p>";
	document.getElementById("example").innerHTML=txt;
	</script>
来自navigator对象的信息具有误导性，不应该用于检测浏览器版本，这是因为:

- navigator数据可被浏览器使用者更改
- 一些浏览器对测试站点会识别错误
- 浏览器无法报告晚于浏览器发布的新操作系统

浏览器检测

由于navigator可误导浏览器检测，使用对象检测可用来嗅探不同的浏览器。

由于不同的浏览器支持不同的对象，您可以使用对象来检测浏览器。例如，由于只有Opera支持属性"window.opera",可以据此识别出Oprea。
例子：if(window.opera){...some action...}

## JavaScript弹窗 ##
可以在JavaScript中创建三种消息框：警告框、确认框、提示框。

### 警告框 ###
警告框经常用于确保用户可以得到某些信息。

当警告框出现后，用户需要点击确定按钮才能继续进行操作。

	window.alert("sometext");
window.alert()方法可以不带上window对象，直接使用alert()方法。

	<script type="text/javascript">
		function myFunction(){
			alert("你好，我是一个警告框！");
		}
	</script>
	<input type="button"  onclick="myFunction()" value="显示警告框"/>
### 确认框 ###
确认框通常用于验证是否接受用户操作。

当确认卡弹出时,用户可以点击"确认"或者"取消"来确定用户操作。

当你点击"确认"，确认框返回true,如果点击"取消"，确认框返回false。

window.confirm()方法可以不带上window对象，直接使用confirm()方法。

	<script type="text/javascript">
			function myFunction() {
				var x;
				var r=confirm("按下按钮！");
				if(r==true){
					x="你按下了\"确认\"按钮!";
				}else{
					x="你按下了\"取消\"按钮！";
				}
				document.getElementById("demo").innerHTML=x;
				
			}
	</script>
	<input type="button" value="点击" onclick="myFunction()" />
	<p id="demo"></p>
### 提示框 ###
提示框经常用于提示用户在进入页面前输入某个值。

当提示框出现后，用户需要输入某个值，然后点击确认或取消按钮才能继续操纵。

如果用户点击确认，那么返回值为输入的值，如果用户点击取消，那么返回值为null。

语法

	window.prompt("sometext","defaultvalue");
window.prompt()方法可以不带上window对象,直接使用prompt()方法。

	<script type="text/javascript">
		function myFunction(){
		var x;
		var person=prompt("请输入你的名字","hello world");
		if(person!=null&&person!=""){
				
		x="你好" + person + "! 今天感觉如何？";

		document.getElementById("demo").innerHTML=x;
					
				}
			}
		</script>
	<input type="button" value="点击" onclick="myFunction()" />
	<p id="demo"></p>
弹窗使用反斜杠 + "n"(\\n)来设置换行

	<script type="text/javascript">
		function myFunction(){
			alert("Hello \nHow are you?");
			}
	</script>
	<input type="button" value="点击" onclick="myFunction()" />
	<p id="demo"></p>
## JavaScript计时事件 ##
通过使用JavaScript，我们有能力做在一个设定的时间间隔之后来执行代码，而不是在函数调用后立即执行。我们称之为计时事件。

在JavaScript中使用计时事件是很容易的，两个关键方法是:

- seInterval()-间隔指定的毫秒数不停地执行指定的代码。
- setTimeout()-暂时指定的毫秒数后执行指定的代码

setInterval()和setTimeout()是HTML DOm Window对象的两个方法。

### setInterval()方法 ###
setInterval()间隔指定的毫秒数不停地执行指定的代码

语法

	window.setInterval("javascript function",milliseconds);
window.setInterval()方法可以不使用window前缀，直接使用函数setInterval()。

第二个参数间隔的毫秒数

使用setInterval()方法设置每秒钟执行一次代码，就是和手表一样。

	<p id="demo"></p>
		<script>
		var myVar=setInterval(function(){mytime()},1000);
			function mytime(){
			var d=new Date();
			var t=d.toLocaleString();
		document.getElementById("demo").innerHTML=t;
			}
		</script>
### clearInterval()方法 ###
clearInterval()方法用于停止setInterval()方法执行的函数代码。

语法:

	window.clearInterval(intervalVariable)
window.clearInterval()方法可以不使用window前缀，直接使用函数clearInterval()。

要使用clearInterval()方法，在创建计时方法时你必须使用全局变量：

	myVar=setInterval("javascript function",milliseconds);
然后可以使用clearInterval()方法来停止执行。

	<p id="demo"></p>
	<input type="button"  value="停止时钟" onclick="myStopFunction()"/>
	<script>
		var myVar=setInterval(function(){mytime()},1000);
		function mytime(){
			var d=new Date();
			var t=d.toLocaleString();
			document.getElementById("demo").innerHTML=t;
		}
		function myStopFunction(){
			clearInterval(myVar);
		}
	</script>	
### setTimeout()方法 ###
语法

	window.setTimeout("javascript 函数"，毫秒数);
setTimeout()方法会返回某个值。在上面的语句中，值被存储在名为t的变量中。假如你希望取消这个setTimeout()，你可以使用这个变量名来指定它。

setTimeout()的第一个参数是含有JavaScript语句的字符串。这个语句可能诸如`"alert('5 seconds!')"`,或者对函数的调用，诸如`"alertMsg()"`。

第二个参数指示从当前期多少毫秒后执行第一个参数。

等待3秒，然后弹出"hello"

	<button onclick="myFunction()">点我</button>
	<script>
	function myFunction(){
	setTimeout(function(){alert("Hello")},3000);
	}
	</script>
### clearTimeout() ###
clearTimeout()方法用于停止执行setTimeou()方法的函数代码。

语法

	window.clearTimeout(timeoutVariable)
window.clearTimeout()方法可以不使用window前缀。

要使用clearTimeout()方法，你必须在创建超时方法中(setTimeout)使用全局变量：

	myVar=setTimeout("javascript function",milliseconds)；
实例：

	<p>点击第一个按钮等待3秒后出现"Hello"弹框。</p>
	<p>点击第二个按钮来阻止第一个函数运行。（你必须在3秒之前点击它）。</p>
	<button onclick="myFunction()">点我</button>
	<button onclick="myStopFunction()">停止弹框</button>
	<script>
	var myVar;
	function myFunction(){
	myVar=setTimeout(function(){alert("Hello")},3000);
	}
	function myStopFunction(){
		clearTimeout(myVar);
	}
	</script>
