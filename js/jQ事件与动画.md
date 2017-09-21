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