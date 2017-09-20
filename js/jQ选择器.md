# jQuery 选择器 #
## jQuery 选择器 ##
jQuery 选择器允许您对 HTML 元素组或单个元素进行操作。

jQuery 选择器基于元素的 id、类、类型、属性、属性值等"查找"（或选择）HTML 元素。它基于已经存在的 CSS 选择器，除此之外，它还有一些自定义的选择器。

jQuery 中所有选择器都以美元符号开头：$()。
### 元素选择器 ###
jQuery 元素选择器基于元素名选取元素。

在页面中选取所有 <p> 元素:

	$("p")
### #id 选择器 ###
jQuery #id 选择器通过 HTML 元素的 id 属性选取指定的元素。

页面中元素的 id 应该是唯一的，所以您要在页面中选取唯一的元素需要通过 #id 选择器。

通过 id 选取元素语法如下：

	$("#test")
### .class选择器 ###
jQuery 类选择器可以通过指定的 class 查找元素。

语法如下：

	$(".test")
使用：

	<html>
	<head>
		<meta charset="UTF-8">
		<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
	</head>
	<body>
		<div id="div1" class="d1">
			abcdefghijl
		</div>
		<input type="button" value="点击" />
		<script type="text/javascript">
		$("input").click(function (){
			// $("#div1").css({background:"blue"});id选择器
			// $("div").css({background:"red"});元素选择器
			// $(".d1").css({background:"yellow"});类选择器
			$("div,p,a").css({background:"pink"});
			}); //联合选择器
		</script>
	</body>
	< /html>
## 层级选择器 ##

ancestor descendant:表示选取ancestor里面所有的descendant元素

parent>child:选择parent元素的子元素

select+: 获取后面的兄弟元素，下一个。

select~: 获取后面的兄弟元素，下所有个。

	<div>
		<ul>
			<li id="d1">a</li>
			<li>b</li>
			<li>c</li>
			<li>d</li>
			<li>e</li>
			<li>f</li>
		</ul>
		<p>
			p标签
			<a href="">p标签里面的a</a>
		</p>
		<a href="">a链接</a>
	</div>
	<input type="button" value="点击" />
	<script type="text/javascript">
		$("input").click(function (){
			//$("div a").css({background:"blue"});后代选择器
			//$("div>a").css({background:"red"});父子选择器
			//$("#d1+").css({background:"yellow"});兄弟选择器+
			//$("#d1~").css({background:"red"});兄弟选择器~
		});
	</script>
内容选择器

：Contains('test') 匹配含有test内容的元素

：empty 匹配内容为空的元素

：has(selecter) 匹配包含有selecter的选择器

:parent 选择作为父元素的元素

	<body>
		<div id="d1"></div>
		<div id="d2">这是div2</div>
		<div id="d3"></div>
		<div id="d4"><p>段落</p>这是div4</div>
		<input type="button" value="点击" />
		<script type="text/javascript">
			$("input").click(function (){
				//$("div:contains('这是div2')").css({background:"blue"});
				//console.log($("div:empty"));
				//$("div:has(p)").css({background:"red"});
				$("div:parent").css({background:"yellow"});
			});
		</script>
	</body>