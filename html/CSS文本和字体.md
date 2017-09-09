# CSS字体 #
## 字体系列 ##
font-family属性设置文本的字体系列。

font-family属性应该设置几个字体名称作为一种"后备"机制，如果浏览器不支持第一种字体，他将尝试下一种字体。

注意：如果字体系列的名称超过一个字，它必须用引号，如Font Family："宋体"。

多个字体系列使用一个逗号分隔指明：

	body{
		font-family： Verdana，Geneva，Arial，sans-serif;
	}
## 字体大小 ##
用font-size属性控制字体大小。

- 使用像素(px)指定字体大小，用像素指定字体大小时，就是在告诉浏览器字母高度是多少像素。
 
    	body{
    		font-size: 14px; 
    	}
- 使用%指定大小，用像素指定大小时，会明确指出字体具体有多大，与之不同，用一个百分数指定字体大小时，会向相对于父元素字体大小的百分比：
		
		body{
			font-size:14px;
		}
		h1{
			font-size:150%;
		}
这里按像素指定了body的字体大小，并把一级标题的大小指定为150%。

- 使用em指定字体大小，类似于百分数，这也是一个相对度量单位。使用em是，不是指定一个百分数。而是要指定一个比例因子。可以这样使用em：`font-size:1.2em`
假设你使用这种度量来指定`<h2>`标题的大小。`<h2>`标题的大小将是父元素字体大小的1.2倍，在这里就是1.2乘以14px，大约17.px
	
		body {
			font-size:14px;
		}
- 还有一种指定字体大小的方法：关键字。可以把一个字体大小指定为xx-samll，x-samll，samll，medium，large，x-large或xx-large，浏览器会把这些关键字转换为像素值，它会使用浏览器中定义的默认值来完成这个转换。每个大小约是前一个的20%，大多数浏览器中，small的大小约12像素。
		
		body{
			font-size:small;
		}
## 字体粗细 ##
font-weight属性允许你控制文本的粗细。你应该知道，粗体文本是看起来比正常文本更深，而且往往要"胖"一点。可以将元素的font-weight属性设置为bold，使用粗体文本。

	font-weigth：blod；
也可以反过来。如果一个元素默认地设置为bold，或者从父元素继承粗体，可以去掉粗体样式：
	
	font-weight:normal;
还有两个相对font-weight属性：bolder和lighter。使用这两个属性值是，会相对于所继承的值使文本样式稍粗一些或者稍细一些。

还可以把font-weight属性设置为100到900之间的一个数（1oo的倍数），这个特性未得到字体和浏览器的广泛支持，所以通常并不使用。
## 字体的风格 ##
在CSS中可以使用font-style属性为文本增加字体风格，如增加斜体字：
	
	font-style：italic；
还可以使用normal默认标准字体样式和oblique倾斜字体样式设置字体

## Web字体 ##
用`@font-face`规则来为页面增加一种特殊的字体，常见的字体格式：

- TrueType字体:.ttf
- OpenType字体：.otf
- Embedded OpenType字体:.eot
- SVG字体:.svg
- WEb开放字体格式:.woff

把你想要的字体文件放到Web上，这样用户的浏览器就可以访问这些字体了。也可以利用网上的很多在线字体服务，这些服务会为你托管这些文件例如：wicedlysmart.com。

在CSS中增加@font-face属性：

	@font-face{
		font-family:"Emblema One"
		src url("http://wickedlysmart.com/hfhtmlcss/chapter/journal/EmblemaOne-Regular.woff")
	}
@font-face规则告诉浏览器:要加载由src URL指定的字体文件。浏览器会尝试加载每一个src文件，直到找到它能支持的一个文件。

使用@font-face规则在浏览器中加载完字体后就可以使用这个字体了。
	
	h1{
		font-family:"Emblema One",sans-serif
	}

## font属性的简写 ##
可以把font属性包装成一个属性：

	font: font-style font-variant font-weight font-size/line-height
		font-family
font-size之前的属性都是可选的，可以指定这些属性的任意组合，不过必须出现在font-size属性前面。

line-height属性是可选的。如果你想指定一个行高，只需要在font-size属性后面加一个/，然后指定你想要的行高。

font-family名之间要使用逗号分隔。
# CSS文本 #
## 文本的对齐方式 ##
用test-align来设置文本的对齐方式：

	h1{text-align:center}
	h2{text-align:left}/*默认对齐方式*/
	h3{text-align:right}
	h4{text-align: justify}/*两端对齐*/
##文本修饰##
用text-decoration属性规定添加到文本的修饰

	h1{text-decoration:overline;}/*定义文本上的一条线*/
	h2{text-decoration:line-through;}/*定义穿过文本的线*/
	h3{text-decoration:underline;}/*定义文本下的一条线*/
	h4{text-decoration:blink}/*定义闪烁的文本*/
	h5{text-decoration:none}/*默认定义标准的文本*/
## 文本缩进 ##
使用text-indent设置段落的缩进如：

	p{
		text-indent:50px;
	}
## 文本转换 ##
使用text-transform属性控制文本的大小写。

	h1 {text-transform:uppercase;} /*定义仅有大写字母*/
	h2 {text-transform:capitalize;}/*每个单词以大写字母开头*/
	p {text-transform:lowercase;}/*仅有小写字母*/
## 文本方向 ##
direction属性设置文字方向
	
	div{
	direction:rtl;/**文本从右到左/
	}
## 文字阴影 ##
 text-shadow属性应用于阴影文本。

	h1{test-shadow:2px 2px #FF0000;}
text-shadow属性链接一个或多个的阴影文本。属性是阴影，指定的每2或3个长度值和一个可选的颜色值用逗号分隔开来。已失失效的长度为0.

- h-shadow 必需。水平阴影的位置。允许负值。
- v-shadow 必需。垂直阴影的位置。允许负值。
- blur 	   可选。模糊的距离。
- color    可选。阴影的颜色。

## 行高 ##
line-height属性允许你指定文本中各行之间的垂直间距量。可以按像素指定行高，也可以使用em或百分值相对于字体大小来指定。
	
	body{
	line-height: 1.5em;
	}