# HTML框架 #
通过使用框架，你可以在同一个浏览器窗口显示不止一个页面。

iframe语法：

	<iframe src="URL"></iframe>
该URL指向不同的网页。

## Iframe-设置高度与宽度 ##
height和width属性用来定义iframe标签的高度与宽度。

属性默认以像素为单位，但是你可以指定其按比例显示(如：“80%”)。

一些旧的浏览器不支持iframe，如果浏览器不支持iframes则不会显示
	
	<iframe src="/html/iframe_A.html" width="200" height="200">
	</iframe>

## Iframe-移除边框 ##
frameborder属性用于定义iframe表示是否显示边框。设置属性为"0"移除iframe的边框:

	<iframe src="/html/iframe_A.html" frameborder="0">
	</iframe>
## 使用iframe来显示目录链接页面 ##
iframe可以显示一个目标链接的页面。
目标链接的属性必须使用iframe的属性。

	<iframe src="iframe_a.html" name="iframe_b">
	</iframe>
	<p>
		<a href="iframe_b.html" target="iframe_b">iframe_b</a>
	</p>
因为`<a>`标签的target属性是名为iframe_b的iframe框架，所以在点击链接时页面会显示在框架内。