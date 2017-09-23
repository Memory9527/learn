## 事件 ##

$(document),$(body)

### 加载事件： ###
`$(document).Ready(fn)`

简写：`$(function(){});`

	<script type="text/javascript">
		/*	$(document).ready(function(){
				alert("这是加载事件");	
			});
		*/
		$(function (){
			alert("加载事件");
		});
	</script>
js: js:Window.onload=fn

JS:把页面上的DOM和资源加载完成之后执行

JQ:把页面的DOM加载完成之后就会执行

### 事件切换: ###
	
Hover(hover,out)

	<div id="div1">div1</div>
	<script type="text/javascript">
		$("div").hover(function (){
			$("div").html("鼠标悬浮上去");
		},function(){
			$("div").html("鼠标离开div");
		});
	</script>
## 常用事件 ##
$(selector).click(fn): | 点击事件，会触发fn
$(selector).dblckick(fn); | 双击事件
$(selector).focus(); | 获得焦点触发的事件
$(selector).blur(); | 失去焦点事件
$(selector).change(); | 发生改变
$(selector).mouseover; | 鼠标放上(悬浮)
$(selector).mouseout; | 鼠标离开
$(selector).mousedown; | 鼠标按下
$(selector).mouseup; | 鼠标抬起
$(selector).mousemove; | 鼠标移动

JS事件都带有on，而JQ事件都没有on

## 事件处理 ##
`bind("action",fn)`绑定事件

如果有多个事件：`bind({"action1":fn1,"action2":fn2})`;

	<div>这是div</div>
	<input type="button"  value="点击" />
	<script type="text/javascript">
	/*	$("div").bind("mouseover",function (){
			$("div").html("这是mouseover");
		});*/
		$("div").bind({"mouseover":function(){
			$("div").html("这是mouseover");
		},"mouseout":function(){
			$("div").html("这是mouseout");
		}});			
unbind("action")解除绑定,没有action则解除所有时间

	$("div").unbind();

$(selector).on("action",fn),绑定事件

$(selector).off(),解除绑定

	<input type="button"  value="点击" id="d1" />
	<input type="button"  value="解绑" id="d2" />
	<script type="text/javascript">
		$("#d1").on("click",function (){
			alert("这是on");
		});
		$("#d2").click(function (){
			$("#d1").off();
		});
	</script>
$(selector).one("action",fn)，绑定一次事件、

	<input type="button"  value="点击" />
	<script type="text/javascript">
		$("input").one("click",function (){
			alert("这是one");
		});
	</script>
$(selector).parent()，查找父元素

$(selector).find(a),在select中找a元素

	<div>
	<a href="">链接</a>
	<p>段落</p>
	</div>
	<input type="button"  value="点击" />
	<script type="text/javascript">
		$("input").click(function(){
			$("p").parent().css({background:"red"});
			$("div").find("p").css({background:"blue"});
		});
	</script>
## 动画 ##
### 显示隐藏 ###
show(time,fn),显示【在效果完成后会完成fn】

hide(time,fn)，隐藏【在效果完成后会完成fn】

toggle(显示与隐藏互相切换)。

	<div>
	</div>
	<input type="button"  value="点击Show" id="d1"/>
	<input type="button" id="d2" value="点击hide" />
	<input type="button"  value="点击toggle" id="d3"/>
	<script type="text/javascript">
		$("#d1").click(function (){
			$("div").show(3000,function (){
				alert("show完成了");
			});
		});
		$("#d2").click(function (){
			$("div").hide(6000,function (){
				alert("hide完成");
			});
		});
		$("#d3").click(function (){
			$("div").toggle();
		});
	</script>
### 上升下落 ###
slideDown(time,fn):下滑，显示

slideUp(time,fn):收起，隐藏

slideToggle:切换效果

	<div>
	</div>
	<input type="button"  value="点击slidedown" id="d1"/>
	<input type="button" id="d2" value="点击slideup" />
	<input type="button"  value="点击slidetoggle" id="d3"/>
	<script type="text/javascript">
		$("#d1").click(function (){
			$("div").slideDown(3000,function (){
				alert("slideDow完成");
			});	
		});
		$("#d2").click(function (){
			$("div").slideUp(6000,function (){
				alert("slideUp完成");
			});
		});
		$("#d3").click(function (){
			$("div").slideToggle();
		});
	</script>
### 淡入淡出 ###
fadeln:淡入
	
	$("div").fadeIn(3000,function (){
		alert("fadeIn完成");
	});
fadeOut:淡出
	
	$("div").fadeOut(6000,function (){
		alert("fadeOut完成");
	});
fadeToggle:切换效果

	$("#d3").click(function (){
		$("div").fadeToggle();
	});
fadeTo(time,(0-1),fn) 【0-1指定深淡程度】

	$("div").fadeTo("3000",0.5,function (){
		alert("ok")
	});
## 动画案例 ##

收拉菜单

	<html>
	<head>
		<meta charset="UTF-8">
		<title>jq</title>
		<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
		<style type="text/css">
			*{
				margin: 0px;
				padding: 0px;
			}
			dt{
				background: red;
				width:200px;
				height: 30px;
				line-height: 30px;
				margin: 10px 0px;
			}
			dd{
				margin-left: 10px;
			}
		</style>
	</head>
	<body>
	<dl>
		<dt>收藏夹</dt>
		<dd>桌面</dd>
		<dd>最近访问位置</dd>
	</dl>
	<dl>
		<dt>这台电脑</dt>
		<dd>视频</dd>
		<dd>文档</dd>
		<dd>图片</dd>
		<dd>音乐</dd>
		<dd>下载</dd>
	</dl>
	</body>
	<script type="text/javascript">
		$("dt").click(function (){
			$(this).parent().find("dd").slideToggle();
		});
	</script>
	</html>
=======
## 事件 ##

$(document),$(body)

### 加载事件： ###
`$(document).Ready(fn)`

简写：`$(function(){});`

	<script type="text/javascript">
		/*	$(document).ready(function(){
				alert("这是加载事件");	
			});
		*/
		$(function (){
			alert("加载事件");
		});
	</script>
js: js:Window.onload=fn

JS:把页面上的DOM和资源加载完成之后执行

JQ:把页面的DOM加载完成之后就会执行

### 事件切换: ###
	
Hover(hover,out)

	<div id="div1">div1</div>
	<script type="text/javascript">
		$("div").hover(function (){
			$("div").html("鼠标悬浮上去");
		},function(){
			$("div").html("鼠标离开div");
		});
	</script>
## 常用事件 ##
语法 | 事件
---  | ---
$(selector).click(fn): | 点击事件，会触发fn
$(selector).dblckick(fn); | 双击事件
$(selector).focus(); | 获得焦点触发的事件
$(selector).blur(); | 失去焦点事件
$(selector).change(); | 发生改变
$(selector).mouseover; | 鼠标放上(悬浮)
$(selector).mouseout; | 鼠标离开
$(selector).mousedown; | 鼠标按下
$(selector).mouseup; | 鼠标抬起
$(selector).mousemove; | 鼠标移动

JS事件都带有on，而JQ事件都没有on
