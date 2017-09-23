## 属性 ##
Attr：属性 元素.attr();获取属性

Attr(atrr,value) 设置属性

Attr({value:"zhi",type:"zhi"})设置多个属性的方法

Attr("key","fn函数返回值") 通过函数的返回值设置属性

removeAttr(value),删除value属性。

	<body>
	<img src="a.jpg"  />
	<input type="button"  value="点击" />
	<script type="text/javascript">
		$("input").click(function (){
		//	console.log($("img").attr("src")); 获取属性
		//	$("input").attr("value","abc");  设置属性
		//	$("input").attr({value:"abc",type:"text"}); 设置多个属性
		//	$("input").attr("value",function(){return "onclick"}); 通过函数返回值设定
			$("input").removeAttr("value");
		});
	</script>
	</body>
## CSS类 ##
addClass() 增加类

removClass() 删除类

toggleClass(className): 切换类：如果没有就添加，如果有就删除

	<div class="ab">
			
	</div>
	<input type="button"  value="点击" />
	<script type="text/javascript">
		$("input").click(function (){
	//	$("div").addClass("abcd"); 添加类
	//	$("div").removeClass("ab"); 删除类
		$("div").toggleClass("ab");
		});
	</script>
## HTML代码 ##
html()：获取的是对象的html代码【innerHTML】。

html(text): 设置HTML代码的内容为text，识别标签。

	<div class="div1">
		这是div
		<p>这是段落</p>
		<a href="">这是链接</a>
	</div>
	<input type="button"  value="点击" id="d1" />
	<script type="text/javascript">
		$("input").click(function (){
		$("div").html("<b>hello word</b>");
			})；
	</script>
text():获取文本内容，用法与html()一样，不识别标签。标签会被当成文本处理。

Val(val): 获取value值(input 里面的value)，括号里val为要设置的值。

	<input type="button"  value="点击" id="d1" />
	<script type="text/javascript">
		$("input").click(function (){
			$("input").val("新的点击");
		});
	</script>
## 对象的访问 ##
length: 个数

	console.log($("div").length);	
size(): 个数

	console.log($("div").size());
each:遍历每个元素

用法：元素.each(function(){index,element})

index:索引下标,从0开始

element:元素

	<div>div1</div>
	<div>div2</div>
	<div>div3</div>
	<input type="button"  value="点击" id="d1" />
	<script type="text/javascript">
		$("input").click(function (){
			$("div").each(function (n,obj){
			//$(obj).html("这是第"+n+"个");
			  $(this).html("这是第"+n+"个");
			});
		});	
	</script>
## DOM:文档处理 ##
### 内部插入：父子级关系 ###

$(a).append($(b))把b插入到a中【a里面的后面】

	<div>这是div</div>
	<input type="button"  value="点击" id="d1" />
	<script type="text/javascript">
		$("input").click(function (){
			$("div").append($("<p>段落</p>"));
		});	
	</script>

$(b).appendTo($(a))把b插入到a中【a里面的后面】

	<div>这是div</div>
	<p>这是段落 </p>
	<input type="button"  value="点击" id="d1" />
	<script type="text/javascript">
		$("input").click(function (){
			$("p").appendTo("div");
		});	
	</script>

$(a).prepend($(b))把b插入到a中【a里面的前面】。

$(b).prependTo($(a)))把b插入到a中【a里面的前面】。

这种方式插入之后一定是父子级的关系。

### 外部插入：兄弟级关系 ###
$(a).after($(b)); 把b插入到a的后面

$(b).inertAfter(($a)); 把b插入到a的后面 

$(a).before($(b));把b插入到a的前面

$(b).insertBefore($(a)); 把b插入到a的前面

	<div>这是div</div>
	<input type="button"  value="点击" id="d1" />
	<script type="text/javascript">
		$("input").click(function (){
		//	$("div").after("<b>b标签</b>");
		//	$("<b>新的b标签</b>").insertAfter($("div"));
			$("div").before($("<p>段落</p>"));
			$("<p>新的段落</p>").insertBefore($("div"));
			
		});	
	</script>
### 包裹 ###
wrap: 包裹$(a).wrap($(b))把a用b包裹起来。(每个元素都会包裹)

unrap:取消包裹$(a).unwrap($(b))

	<div>div1</div>
	<div>div2</div>
	<div>div3</div>
	<input type="button"  value="包裹" id="d1" />
	<input type="button"  value="取消包裹" id="d2" />
	<script type="text/javascript">
		$("#d1").click(function (){
			$("div").wrap('<div></div>');
		});	
		$("#d2").click(function (){
			$("div").unwrap('<div></div>');
		});	
	</script>
wrapAll：把所有的包裹起来(所有元素都会被一个包裹)

	$("div").wrapAll("<div></div>");
wrapInner:内部包裹

div1，div2，div3里的内容分别会被p元素包裹(div1里的a标签也会被包裹到p中)

	<div>div1<a href="">aaa</a></div>
	<div>div2</div>
	<div>div3</div>
	<input type="button"  value="点击" id="d1" />
	<script type="text/javascript">
		$("#d1").click(function (){
			$("div").wrapInner("<p></p>");
		});	
	</script>
### 替换 ###
$(b).replaceWith($(b));把a用b替换

$(b).replaceAll($(a));用b替换a

	<div>div1<a href="">aaa</a></div>
	<div>div2</div>
	<div>div3</div>
	<input type="button"  value="点击" id="d1" />
	<script type="text/javascript">
		$("#d1").click(function (){
			//$("div").replaceWith("<p>aaa</p>");
			$("<p>bbb</p>").replaceAll($("div"));
		});	
	</script>
### 删除 ###

empty:删除内容标签还在

remove：删除标签

	<div id="div1">div1</div>
	<div id="div2">div2</div>
	<div>div3</div>
	<input type="button"  value="点击" id="d1" />
	<script type="text/javascript">
		$("#d1").click(function (){
			$("#div1").empty();
			$("#div2").remove();
		});	
	</script>
### 复制 ###
clone:复制出一个一模一样的元素

	<div id="div1">div1</div>
	<div id="div2">div2</div>
	<div>div3</div>
	<p class="ab">这是段落</p>
	<input type="button"  value="点击" id="d1" />
	<script type="text/javascript">
		$("#d1").click(function (){
			$("p").clone().appendTo($("#div2"));
		});	
## 属性 ##
Attr：属性 元素.attr();获取属性

Attr(atrr,value) 设置属性

Attr({value:"zhi",type:"zhi"})设置多个属性的方法

Attr("key","fn函数返回值") 通过函数的返回值设置属性

removeAttr(value),删除value属性。

	<body>
	<img src="a.jpg"  />
	<input type="button"  value="点击" />
	<script type="text/javascript">
		$("input").click(function (){
		//	console.log($("img").attr("src")); 获取属性
		//	$("input").attr("value","abc");  设置属性
		//	$("input").attr({value:"abc",type:"text"}); 设置多个属性
		//	$("input").attr("value",function(){return "onclick"}); 通过函数返回值设定
			$("input").removeAttr("value");
		});
	</script>
	</body>
## CSS类 ##
addClass() 增加类

removClass() 删除类

toggleClass(className): 切换类：如果没有就添加，如果有就删除

	<div class="ab">
			
	</div>
	<input type="button"  value="点击" />
	<script type="text/javascript">
		$("input").click(function (){
	//	$("div").addClass("abcd"); 添加类
	//	$("div").removeClass("ab"); 删除类
		$("div").toggleClass("ab");
		});
	</script>
## HTML代码 ##
html()：获取的是对象的html代码【innerHTML】。

html(text): 设置HTML代码的内容为text，识别标签。

	<div class="div1">
		这是div
		<p>这是段落</p>
		<a href="">这是链接</a>
	</div>
	<input type="button"  value="点击" id="d1" />
	<script type="text/javascript">
		$("input").click(function (){
		$("div").html("<b>hello word</b>");
			})；
	</script>
text():获取文本内容，用法与html()一样，不识别标签。标签会被当成文本处理。

Val(val): 获取value值(input 里面的value)，括号里val为要设置的值。

	<input type="button"  value="点击" id="d1" />
	<script type="text/javascript">
		$("input").click(function (){
			$("input").val("新的点击");
		});
	</script>
## 对象的访问 ##
length: 个数

	console.log($("div").length);	
size(): 个数

	console.log($("div").size());
each:遍历每个元素

用法：元素.each(function(){index,element})

index:索引下标,从0开始

element:元素

	<div>div1</div>
	<div>div2</div>
	<div>div3</div>
	<input type="button"  value="点击" id="d1" />
	<script type="text/javascript">
		$("input").click(function (){
			$("div").each(function (n,obj){
			//$(obj).html("这是第"+n+"个");
			  $(this).html("这是第"+n+"个");
			});
		});	
	</script>
## DOM:文档处理 ##
### 内部插入：父子级关系 ###

$(a).append($(b))把b插入到a中【a里面的后面】

	<div>这是div</div>
	<input type="button"  value="点击" id="d1" />
	<script type="text/javascript">
		$("input").click(function (){
			$("div").append($("<p>段落</p>"));
		});	
	</script>

$(b).appendTo($(a))把b插入到a中【a里面的后面】

	<div>这是div</div>
	<p>这是段落 </p>
	<input type="button"  value="点击" id="d1" />
	<script type="text/javascript">
		$("input").click(function (){
			$("p").appendTo("div");
		});	
	</script>

$(a).prepend($(b))把b插入到a中【a里面的前面】。

$(b).prependTo($(a)))把b插入到a中【a里面的前面】。

这种方式插入之后一定是父子级的关系。

### 外部插入：兄弟级关系 ###
$(a).after($(b)); 把b插入到a的后面

$(b).inertAfter(($a)); 把b插入到a的后面 

$(a).before($(b));把b插入到a的前面

$(b).insertBefore($(a)); 把b插入到a的前面

	<div>这是div</div>
	<input type="button"  value="点击" id="d1" />
	<script type="text/javascript">
		$("input").click(function (){
		//	$("div").after("<b>b标签</b>");
		//	$("<b>新的b标签</b>").insertAfter($("div"));
			$("div").before($("<p>段落</p>"));
			$("<p>新的段落</p>").insertBefore($("div"));
			
		});	
	</script>
### 包裹 ###
wrap: 包裹$(a).wrap($(b))把a用b包裹起来。(每个元素都会包裹)

unrap:取消包裹$(a).unwrap($(b))

	<div>div1</div>
	<div>div2</div>
	<div>div3</div>
	<input type="button"  value="包裹" id="d1" />
	<input type="button"  value="取消包裹" id="d2" />
	<script type="text/javascript">
		$("#d1").click(function (){
			$("div").wrap('<div></div>');
		});	
		$("#d2").click(function (){
			$("div").unwrap('<div></div>');
		});	
	</script>
wrapAll：把所有的包裹起来(所有元素都会被一个包裹)

	$("div").wrapAll("<div></div>");
wrapInner:内部包裹

div1，div2，div3里的内容分别会被p元素包裹(div1里的a标签也会被包裹到p中)

	<div>div1<a href="">aaa</a></div>
	<div>div2</div>
	<div>div3</div>
	<input type="button"  value="点击" id="d1" />
	<script type="text/javascript">
		$("#d1").click(function (){
			$("div").wrapInner("<p></p>");
		});	
	</script>
### 替换 ###
$(b).replaceWith($(b));把a用b替换

$(b).replaceAll($(a));用b替换a

	<div>div1<a href="">aaa</a></div>
	<div>div2</div>
	<div>div3</div>
	<input type="button"  value="点击" id="d1" />
	<script type="text/javascript">
		$("#d1").click(function (){
			//$("div").replaceWith("<p>aaa</p>");
			$("<p>bbb</p>").replaceAll($("div"));
		});	
	</script>
### 删除 ###

empty:删除内容标签还在

remove：删除标签

	<div id="div1">div1</div>
	<div id="div2">div2</div>
	<div>div3</div>
	<input type="button"  value="点击" id="d1" />
	<script type="text/javascript">
		$("#d1").click(function (){
			$("#div1").empty();
			$("#div2").remove();
		});	
	</script>
### 复制 ###
clone:复制出一个一模一样的元素

	<div id="div1">div1</div>
	<div id="div2">div2</div>
	<div>div3</div>
	<p class="ab">这是段落</p>
	<input type="button"  value="点击" id="d1" />
	<script type="text/javascript">
		$("#d1").click(function (){
			$("p").clone().appendTo($("#div2"));
		});	
	</script>