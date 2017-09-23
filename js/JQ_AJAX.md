# jQuery AJAX #
AJAX是与服务器交换数据的技术，它在不重载全部页面的情况下，实行了对部分网页的更新。
## jQuery load()方法 ##
load() 方法从服务器加载数据，并把返回的数据放入被选元素中。

语法：

$(selector).load(URL,data,callback);

必需的URL参数规定希望加载的URL。

可选的data参数规定与请求一同发送的查询字符串键/值对集合。

可选的callback参数是load()方法完成后所执行的函数名称。

示将test.html的内容替换到div中

	<body>
	<div>这是div</div>
	<input type="button" value="点击获取AJAX内容" />
	</body>
	<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
	<body>
		<div>这是div</div>
		<input type="button" value="点击获取AJAX内容" />
	</body>
	<script type="text/javascript">
		$("input").click(function (){
			$("div").load("test.html");
		//可以把jQuery选择器添加到URL参数。
		//  $("div").load("text.html p")
		});
	</script>
test.html内容为：

    <h1>jQuery AjAX</h1>
    <p>这是新的段落</p>
可选的callback参数规定当load()方法完成后所要允许的回调函数。回调函数可以设置不同的参数：

- reponseTxt-包含调用成功时的结果内容
- statusTXT-包含调用的状态
- xhr-包含XMLHttpRequest对象

		<body>
		<div>这是div</div>
		<input type="button" value="点击获取AJAX内容" />
		</body>
		<script type="text/javascript">
		$("input").click(function (){
			$("div").load("test.html",function (responseTxt,statusTxt,xhr){
				if(statusTxt=="success")
					alert("外部内容加载成功！");
				if(statusTxt=="error")
					alert("Error:"+xhr.status+":"+xhr.statusText);
				
			});
		});
		</script>
## get()和post()方法 ##
jQuery get() 和 post() 方法用于通过 HTTP GET 或 POST 请求从服务器请求数据。

- GET - 从指定的资源请求数据
- POST - 向指定的资源提交要处理的数据

GET 基本上用于从服务器获得（取回）数据。注释：GET 方法可能返回缓存数据。

POST 也可用于从服务器获取数据。不过，POST 方法不会缓存数据，并且常用于连同请求一起发送数据。

$.get()方法通过HTTP GET请求从服务器上请求数据。

语法:

	$.get(URL,callback);
必需的URL参数规定希望请求的URL。

可选的callback参数是请求成功后执行的函数名。

例：

	$(document).ready(function(){
	$("button").click(function(){
		$.get("/statics/demosource/demo_test.php",function(data,status){
			alert("数据: " + data + "\n状态: " + status);
		});
	});
	});
	</script>
	</head>
	<body>

	<button>发送一个 HTTP GET 请求并获取返回结果</button>

	</body>
$.get() 的第一个参数是希望请求的 URL（"demo_test.php"）

第二个参数是回调函数。第一个回调参数存有被请求页面的内容，第二个回调参数存有请求的状态。

php文件：

 	<?php
	 echo "This is some text from an external PHP file.";
	 ?>
$.post() 方法通过 HTTP POST 请求从服务器上请求数据。

语法：

	$.post(URL,data,callback);
必需的 URL 参数规定您希望请求的 URL。

可选的 data 参数规定连同请求发送的数据。

可选的 callback 参数是请求成功后所执行的函数名。

下面的例子使用 $.post() 连同请求一起发送数据：

	<script>
	$(document).ready(function(){
	  $("button").click(function(){
    $.post("/statics/demosource/demo_test_post.php",
    {
      name:"W3Cschool",
      url:"http://www.w3cschool.cn"
    },
    function(data,status){
      alert("数据: " + data + "状态: " + status);
    });
	  });
	});
	</script>
	</head>
	<body>

	<button>发送一个 HTTP POST 请求页面并获取返回内容</button>

	</body> 
php文件为

	<?php
	$name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
	$city = isset($_POST['city']) ? htmlspecialchars($_POST['city']) : '';
	 echo 'Dear ' . $name;
	 echo 'Hope you live well in ' . $city;
	 ?>