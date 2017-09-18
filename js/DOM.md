# HTML DOM #
## 什么是DOM？ ##
DOM是Document Object Model(文档对象模型)的缩，。是W3C(万维网联盟)的标准。

DOM定义了访问HTML和XML文档的标准:

"W3C文档对象模型(DOM)"是中立与平台和语言的接口，它允许程序和脚本动态地访问和更新文档的内容、结构和样式。

W3C DOM标准被分为3个不同的部分：

- 核心DOM-针对任何结构化文档的标准模型
- XML DOM - 针对 XML 文档的标准模型
- HTML DOM - 针对 HTML 文档的标准模型
## HTML DOM ##
HTML DOM 是：

- HTML 的标准对象模型
- HTML 的标准编程接口
- W3C 标准

HTML DOM 定义了所有 HTML 元素的对象和属性，以及访问它们的方法。
换言之，HTML DOM 是关于如何获取、修改、添加或删除 HTML 元素的标准。

## DOM节点 ##
HTML DOM将HTML文档视作树结构。这种结构被称为节点树：
根据W3C的HTML DOM标准，HTML文档中的所有内容都是节点：

- 整个文档是一个文档节点
- 每个HTML元素内的文本是文本节点
- 每个HTML属性是属性节点
- 注释是注释节点


		<html>
		   <head>
		 <title>DOM Tutorial</title>
		   </head>
		   <body>
		 <h1>DOM Lesson one</h1>
		 <p>Hello world!</p>
		   </body>
		 </html> 


从上面的HTML中：

- `<html>`节点没有父节点；它是根节点
- `<head>`和`<body>`的父节点是`<html>`节点
- 文本节点"Hello World!"的父节点是`<p>`节点

并且：

- `<html>`节点拥有两个子节点：`<head>`和`<body>`
- `<head>`节点拥有一个子节点：文本节点"DOM"教程
- `<title>`节点也拥有一个子节点：文本节点"DOM教程"
- `<h1>`和`<p>`节点是同胞节点，同时也是`<body>`的子节点

并且：

- `<head>`元素是`<html>`元素的首个子节点
- `<body>`元素是`<html>`元素的最后一个子节点
- `<h1>`元素是`<body>`元素的首个子节点
- `<p>`元素是`<body>`元素的最后一个子节点
## HTML DOM方法 ##
方法是我们可以在节点(HTML元素)上执行的动作。

### getElementById()方法 ###
getELemenById()方法返回带有指定ID的元素：
 
	<p id="intro">Hello World!</p>
	<p>This example demonstrates the <b>getElementById</b> method!</p>

	<script>
	x=document.getElementById("intro");
	document.write("<p>The text from the intro paragraph: " + x.innerHTML + "</p>");
	</script>
### getElementsByTagName()方法 ###
getElementsByTagName()返回带有指定标签名的所有元素。

语法：
	node.getElementsByTagName("tagname");
返回所有p元素：

	<p>Hello World!</p>
	<p>The DOM is very useful!</p>
	<p>This example demonstrates the <b>getElementsByTagName</b> method.</p>

	<script>
	x=document.getElementsByTagName("p");
	document.write("Text of first paragraph: " + [0].innerHTML);
	</script>
### 创建HTML内容: ###
	<div id="d1">
	<p id="p1">This is a paragraph.</p>
	<p id="p2">This is another paragraph.</p>
	</div>

	<script>
	var para=document.createElement("p");
	var node=document.createTextNode("This is new.");
	para.appendChild(node);//将元素作为父元素最后的子元素添加
	var element=document.getElementById("d1");
	element.appendChild(para);
	element.insertBefore(para,child);//将元素作为父元素首个子元素添加
	</script>
### 删除和替换HTML元素 ###
要删除或者替换HTML元素，必须清楚该元素的父元素

删除p元素：

	<div id="div1">
	<p id="p1">这是一个段落。</p>
	<p id="p2">这是另一个段落。</p>
	</div>
	<script>
	var parent=document.getElementById("div1");
	var child=document.getElementById("p1");
	parent.removeChild(child);
	parent.replaceChild(para,child)
	</script>
替换p元素：


	<div id="div1">
	<p id="p1">This is a paragraph.</p>
	<p id="p2">This is another paragraph.</p>
	</div>

	<script>
	var parent=document.getElementById("div1");
	var child=document.getElementById("p1");
	var para=document.createElement("p");
	var node=document.createTextNode("This is new.");
	para.appendChild(node);
	parent.replaceChild(para,child);
	</script>

使用事件更改HTML内容：

点击按钮更改p元素：

	<p id="p1">Hello world!</p>

	<script>
	function ChangeText()
	{
	document.getElementById("p1").innerHTML="New text!";
	}
	</script>
	
	<input type="button" onclick="ChangeText()" value="Change text" />

一些常用的HTML DOM方法：

方法 | 描述
---- | -----
getElementById() |	返回带有指定 ID 的元素。
getElementsByTagName() | 返回包含带有指定标签名称的所有元素的节点列表（集合/节点数组）。
getElementsByClassName() | 返回包含带有指定类名的所有元素的节点列表。
appendChild() | 把新的子节点添加到指定节点。
removeChild() | 删除子节点。
replaceChild() | 替换子节点。
insertBefore() | 在指定的子节点前面插入新的子节点。
createAttribute() | 创建属性节点。
createElement() | 创建元素节点。
createTextNode() | 创建文本节点。
getAttribute() | 返回指定的属性值。
setAttribute() | 把指定属性设置或修改为指定的值。

## HTML DOM属性 ##
属性是节点(HTML元素)的值，您能够获取或设置
### innerHTML属性 ###
innerHTML属性对于获取或替换HTML元素的内容很有用。

	<p id="intro">Hello World!</p>

	<script>
	var txt=document.getElementById("intro").innerHTML;
	document.write(txt);
	</script>
innerHTML属性可用于获取或改变任意HTML元素，包括`<html>`和`<body>`。

nodeName属性规定节点的名称。

- nodeName 是只读的
- 元素节点的 nodeName 与标签名相同
- 属性节点的 nodeName 与属性名相同
- 文本节点的 nodeName 始终是 #text
- 文档节点的 nodeName 始终是 #document


nodeValue 属性规定节点的值。

- 元素节点的 nodeValue 是 undefined 或 null
- 文本节点的 nodeValue 是文本本身
- 属性节点的 nodeValue 是属性值

nodeType属性返回节点的类型。nodeType是只读的。

比较重要的节点类型有：

元素类型 | NodeType
--- | ---
元素	 | 1
属性	 | 2
文本	 | 3
注释	 | 8
文档	 | 9

	<div id="myDIV">This is a div element.</div>

	<script>
	var x = document.getElementById("myDIV").firstChild;
	var txt = "";
	txt += "The node name: " + x.nodeName + "<br>";
	txt += "The node value: " + x.nodeValue + "<br>";
	txt += "The node type: " + x.nodeType;
	</script>
	//结果为：
	//The node name: #text
	//The node value: This is a div element.
	//The node type: 3