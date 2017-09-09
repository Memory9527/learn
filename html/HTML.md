
# 开始了解HTML #
##什么是HTML ##

HTML是用来描述网页的一种语言。

- HTML指的是超文本标记语言：Hyper Text Markup Language
- HTML不是一种编程语言，而是一种标记语言
- 标记语言是一套标记标签（markup tag）
- HTML使用标记标签来描述网页
- HTML文档包含了HTML标签及文本内容
- HTML文档也叫做web页面
## HTML标签 ##
HTML标记标签通常被称为HTML标签（HTML tag）。

* HTML标签是由*尖括号*包围的关键词，比如<html>
* HTML标签通常是承兑出现的，比如<b>和</b>
* 标签对中的第一个标签是开始标签，第二个标签是结束标签
* 开始和结束标签也被称为开放标签和闭合标签

    <标签>内容< /标签>
##  HTML实例  ##

    <!DOCTYPE html>
<!DOCTYPE>声明有助于浏览器中正确显示网页。
网络上有很多不同的文件，如果能够正确声明HTML的版本，浏览器就能正确显示网页内容.

	<html>告诉浏览器HTML从这里开始
	<head><!--页面“头”开始-->
		<meta charset="utf-8" />	
		<!--meta标记告诉浏览器关于一个web页面的额外信息，charset属性规定HTML文档的字符编码-->
		<title>Head First Lounge</title><!--给页面一个标题-->
	</head><!--头部结束-->
	<body><!--主体开始-->
		<h1>Welcome to the Head First Lounge</h1><!--1级标题-->
		<img src="drinks.gif"  /><!--这里放置图片drinks.gif-->
		<p><!--开始一个段落-->
			Join us any evening for refreshing elixirs,
			conversation an maybe a game or 
			two fo <em>Dance Dance Revolution</em>.<!--强调Dance。。。-->
			Wireless access is always provided;
			BYOWS (Bring your own web server).
		</p><!--段落结束-->
		<h2>Directions</h2><!--2级标题-->
		<p>
			You'll find us right in the center of
			downtown Webville. Come join us!
		</p>
	</body><!--主体结束-->
    </html><!--HTML结束-->

# 认识样式元素 #
在HTML头部中添加一个`<style>`元素

	<head>
		<meta charset="utf-8" />	
		<title>Head First Lounge</title>
		<style type="text/css">
	
		</style>
	</head>

`<style>`标记的type属性用来告诉浏览器所使用样式的种类。指定为CSS类

CSS是级联样式表（Cascading Style Sheet）的缩写，用于描述如何表现内容。

样式的使用：在style中添加

	<style type="text/css">
	body{
			background-color: #d2b48c;
			margin-left: 20%;
			margin-right: 20%;
			border:1px dotted gray;
			padding:10px 10px 10px 10px;
			font-family:sans-serif;
		}	
	</style>

`background-color:$d2b48c` 指定背景颜色为土黄色。

`margin-left:20%;`和`margin-right:20%;`左右边界设置为每边占页面的20%。

`border:1px dotted gray;`指定主体周围的边框线为点式且颜色为灰色。

`padding:10px 10px 10px 10px;` 在页面主体周围创建某种填充
`font-family:sans-serif;`指定文本使用的字体



使用`<q>`元素创建简短的引用

	<body>
		<p>
			You never know when you'll need a good quote,how
			about <q>To be or not to be </q>, or
		    <q>Wherever you go there you are 
		</p>
	</body>
注意：不同浏览器对`<q>`元素的显示也不同，解决这个问题的唯一凡是就是使用CSS添加视觉效果。

使用`<blockquote>`来创建长引用。
	
	<blockquote>
		Passing you can't see,
		May get you,
		A glimpse,
		Of eternity.
	</blockquote>
`<q>`元素与`<blockquote>`的区别：

- 通常引用一段或者更多文字的时候使用`<blockquote>`而希望在文字中夹杂一点引用的话就用`<q>`。
- `<blockquote>`是块(block)元素，而`<q>`元素是内联(inline)元素。
- 块元素前后都有换行符，而内联元素总是在网页中随着文字流出现在"行内"。

使用`<br />`元素来换行，`<br />`是一个空元素。没有HTML内容的元素称为空元素。

编写合法HTML网页的原则

- 一定要以<doctype>开头。每个页面都要从一个doctype开始。这样才能让浏览器和验证工具顺利开展工作。任何时候都要使用<!DOCTYPE HTML>，除非你确定写HTML4.01或者XHTML。
- `<html>`元素必须是Web页面的最顶层元素或根元素。所以，在doctype后面，由`<html>`标记开始你的页面，`</html>`标记结束页面，页面中的所有其他内容都嵌套在这个元素中。
- 要使用`<head>`和`<body>`编写更好的HTML。
- 在`<head>`中指定正确的字符编码。在`<head>`中包含一个`<meta charset="utf-8">`标记。 
- 一定要在`<head>`元素中包含一个`<title>`元素。这是雷打不动的原则。
- 嵌套某些元素时要当心。不要把`<a>`元素嵌在另一个`<a>`元素中，因为这样会让访问者很迷惑。不允许在`<img>`等void元素中嵌套其他内联元素。
- 检查属性，有些元素属性是必要的，有些则是可选的。如果`<img>`元素没有src属性，就没有意义。
- 可以使用W3C验证工具确保你的HTML合法，而且元素和属性符合标准。
