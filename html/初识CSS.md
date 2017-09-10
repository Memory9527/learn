# CSS入门 #
## 什么是CSS ##
- CSS指层叠样式表(Cascading Style Sheets)
- 样式定义如何显示HTML元素
- 样式通常存储在样式表中
- 把样式添加到HTML4.0中，是为了解决内容与表现分离的问题
- 外部样式表可以极大提高工作效率
- 外部样式表通常存储在CSS文件中
- 多个样式定义可层叠为一
- 可以使用W3C验证工具验证CSS([http://jigsaw.w3.org/css-validator](http://jigsaw.w3.org/css-validator))

CSS规则由两个主要的部分构成：选择器，以及一条或多条声明：

选择器通常是您需要改变样式的HTML元素。

每条声明由一个属性和一个值组成。

属性(property)是您希望设置的样式属性(style attribute)。每个属性有一个值。属性和值被冒号分开。

CSS声明总是以分号(;)结束，声明组以大括号({})括起来:
	
	p{color:red;text-align:center;}
## CSS Id 和 Class选择器 ##
如果你要在HTML元素中设置CSS样式，你需要在元素中设置"id"和"class"选择器。

### id选择器 ###
id选择器可以为标有特定id的HTML元素指定特定的样式。

HTML元素以id属性来设置id选择器，CSS中id选择器以"#"来定义。

以下的样式规则应用于元素属性id="para1"：
	
	<html>
	<head>
	<style>
	#para1
	{
	text-align:center;
	color:red;
	} 
	</style>
	</head>

	<body>
	<p id="para1">Hello World!!!</p>
	<p>This paragraph is not affected by the style.</p>
	</body>
	</html>
ID属性不要以数字开头，数字开头的ID在Mozilla/FIrefox浏览器中不起作用。

### class选择器 ###
class选择器用于描述一组元素的样式，class选择器有别于id选择器，class可以在多个元素中使用。

class选择器在HTML中以class属性表示，在CSS中，类选择器以一个点"."号显示：

示例：

	<html>
	<head>
	<meta charset="utf-8">  
	<style>
	.center
	{
		text-align:center;
	}
	</style>
	</head>

	<body>
	<h1 class="center">标题居中</h1>
	<p class="center">段落居中。</p> 
	</body>
	</html>
类名的第一个字符不能使用数字！它无法再Mozilla或Firefox中起作用。

## 如何插入样式表 ##
插入样式表的方法有三种：

- 外部样式表
- 内部样式表
- 内联样式

### 外部样式 ###
当样式需要应用于黑多页面时，外部样式表僵尸理想的选择。在使用外部样式表的情况下，你可以通过改变一个文件来改变整个站点的外观。每个页面使用标签链接到样式表。标签在(文档的)头部

	<head>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
	</head>
外部样式表可以在任何文本编辑器中进行编辑。文件不能包含任何的html标签。样式应该以.css扩展名进行保存。
### 内部样式表 ###
当单个文档需要特殊的样式时，就应该使用内部样式表。你可以使用`<style>`标签在文档头部定义内部样式表。
	
	<head>
		<style>
			hr{color:sienna;}
			p{margin-left:20px; }
			body{background-image:url("images/back40.gif");}
		</style>
	</head>
### 内联样式 ###
由于要将表现和内容混杂在一起，内联样式会损失掉样式表的许多优势。

要使用内联样式，你需要在相关的标签内使用样式(style)属性。Style属性可以包含任何CSS属性。本例展示如何改变段落的颜色和左外边距：
	
	<p style="color:sienna;margin-left:20px">这是一个段落.</p>

## 样式的层叠 ##
当一个HTML元素被不止一个样式定义时，会根据下面的规则层叠于一个新的虚拟样式表中，其中数字4拥有最高的优先级。

1. 浏览器缺省设置(默认设置)
2. 外部样式表
3. 内部样式表(位于head标签内)
4. 内联样式(在HTML元素内部)
## CSS Backgrounds(背景) ##
### 背景颜色 ###
background-color属性定义了元素的背景颜色。

页面的背景颜色使用在body的选择器中：

	body{background-color:#b0c4de;}
CSS中，颜色值通常以以下方式定义：

- 十六进制 -如："#ff0000"
- RGB - 如： "rgb(255,0,0)"
- 颜色名称 - 如："red"
### 背景图像 ###
background-image属性描述了元素的背景图像。

默认情况下图像进行平铺重复显示，以覆盖整个元素实体。

页面背景图片设置实例：
	
	body {background-image:url('paper.gif');}
### 背景图像的平铺 ###
默认情况下背景图像将会向垂直和水平方向重复。

使用background-repeat可以更改这个设置

示例：只有垂直方向重复background-image：

	body
	{
	background-image:url('paper.gif');
	background-repeat:repeat-y;	
	}

background-repeat属性值：

- repeat 背景图像将向垂直和水平方向重复。这是默认的。
- repeat-x 只有水平位置会重复背景图像
- repeat-y 只有垂直位置会重复背景图像
- no-repeat 图像不会重复
- inherit 继承父元素的设置

### 背景图像起始位置 ###
可以使用background-position 属性设置背景图像的起始位置：

注意对于这个工作在Firefox和Opera，background-attachment必须设置为"fixed(固定)",如：

	body
	{
		background-image:url('img_tree.png');
		background-repeat:no-repeat;
		background-position:right top;
	}
语法

	background-position: horizontal vertical
水平是

	percentage | length | left | center | right 
垂直是

	percentage | length | top | center | bottom 
如果仅指定一个关键字，其他值将会是"center"，也可以使用百分比和像素进行定位：
	
	background-position: 20% 30%;
	background-position: 50px 100px;

### CSS background-attachment 属性 ###
background-attachment设置背景图像是否固定或者随着页面的其余部分滚动。
	
	background-attachment:fixed;
属性值：

- scroll 背景图片随页面的其余部分滚动。这是默认
- fixed 背景图像是固定的
- inherit 从父类继承。
- lcoal 背景图片随滚动元素滚动。
### 简写属性 ###
背景颜色的简写属性为"background":

	body {background:
			background-color 
			background-image 
			background-repeat 
			background-attachment 
			background-position;
	}

 