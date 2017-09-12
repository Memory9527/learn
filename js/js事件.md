# JavaScript事件 #
HTML事件是发生在HTML元素上的事情。

当在HTML页面使用JavaScript时，JavaScript可以触发这些事件。
## HTML事件 ##
HTML事件可以是浏览器行为，也可以是用户行为。
以下是HTML事件的实例：

- HTML 页面完成加载
- HTML input字段改变时
- HTML 按钮被点击

通常，当事件发生时，你可以做些事情。

在事件触发是JavaScript可以执行一些代码。

HTML元素中可以添加事件属性，使用JavaScript代码来添加HTML元素。

JavaScript代码修改id="demo"元素的内容示例：
	<body>
	<button onclick="getElementById('demo').innerHTML=Date()">现在的时间是?</button>
	<p id="demo"></p>
	</body>
## 常见的HTML事件 ##
一些常见的HTML事件列表:

事件 | 描述
---- | ----
onchange | HTML元素改变
onclick | 用户点击HTML元素
onmouseover | 用户在一个HTML元素上移动鼠标
onmouseout | 用从一个HTML元素上移开鼠标
onkeydown | 用户按下键盘按键
onload | 浏览器已完成页面的加载

## JavaScript可以做什么 ##
事件可以用处理表单验证，用户输入，用户行为及浏览器动作：

- 页面加载时触发事件
- 页面关闭时触发事件
- 用户点击按钮执行动作
- 验证用户输入内容的合法性，等等

- 可以使用多种方法来执行JavaScript事件代码
- HTML事件属性可以调用JavaScript函数
- 你可以为HTML元素指定自己的事件处理程序
- 你可以阻止事件的发生，等等

