# HTML5标记 #
- HTML5为HTML增加了很多新元素。
- `<section>`、`<article>`、`<aside>`、`<nav>`、`<header>`、和`<footer>`都是建立页面结构的新元素，与使用`<div>`相比，它们可以提供更多含义。
- `<section>`用于对相关的内容分组。
- `<article>`用于类似博客帖子、论坛帖子和新闻报道等独立的内容。
- `<aside>`用于表示不作为页面主内容的次要内容，如插图和边栏。
- `<nav>`用于组织网站导航链接。
- `<header>`将标题、logo和署名等通常放在页面或区块最上方的内容组织在一起。
- `<footer>`将诸如文档信息、法律措辞和版权说明等通常放在页面或区块最下方的内容组织在一起。
- `<time>`也是HTML5中的一个新元素。这个元素用来标记时间和日期。
- `<div>`任然用于建立结构。它通常将元素组织在一起来指定样式，或者有些内容可能不适合放在HTML5中那些与结构相关的新元素中，这些内容就可以使用`<div>`创建结构。
- 较早的浏览器不支持新的HTML5元素，所以一定要知道主要用户使用那些浏览器访问你的Web页面，除非能确保新元素对你的用户适用，否则不要贸然使用这些新元素。

## 使用video元素添加视频 ##
	<video controls autoplay width="512" height="288"
		   src="video/tweetsip.mp4" poster="img/poster.png">
	</video>
- `<video>`是一个新的HTML元素，用于页面增加视频。
- 视频编码是用来创建视频文件的编码。常用的编码包括h.262、Vp8和Theora。
- 视频容器文件包含视频、音频和元数据。流行的容器格式包括MP4、OGG和WebM。
- 要提供多个视频源文件，确保你的用户可以在他们的浏览器中观看你的视频文件。
- 如果有controls属性，播放器会提供一些控件，可以控制视频和音频的播放。
- 如果有autoplay属性，一旦页面加载视频就会开始播放。
- controls和autoplay属性是"布尔属性"没有值。
- src指定视频的源位置。
- poster属性可以提供一个可选的海报图像，视频未播放时就会显示这个图像。
- 还可以设置preload属性用于精细的控制视频如何加载，来实现优化。大多数情况下，浏览器会根据是否设置autoplay以及用户的带宽来选择加载多少视频。可以覆盖这种设置，将preload设置为"none"(在用户真正"播放"视频之前不下载视频)，也可以设置为"metadata"(下载视频元数据，但不下载视频内容)，或者可以设置为"auto",让浏览器来做决定。
- 还可以添加一个布尔属性loop，如果有loop属性，视频结束播放之后会自动重新开始播放视频。

使用<source>元素可以提供一组视频，每个视频分别有自己的格式，可以让浏览器选择它支持的第一种格式。如下：

	<video controls autoplay width="512" height="288">
		<source src="video/tweetsip.mp4">
		<source src="video/tweetsip.webm">
		<source src="video/tweetsip.ogv">
		<p>Sorry, your browser doesn't support the video element</p>
	</video>

浏览器具体确定是否可以播放一个文件之前，还需要做一些侦查工作。可以为浏览器提供更多帮助，给出有关视频文件的MIME类型和编解码器(可选)的更多信息：

	<source src="video/teweetsip.ogv" 
			type='video/ogg';codecs="theora, voribis">
type是一个视频文件的MIME类型。指定容器格式。codecs参数指定使用哪个编解码器对视频和音频来创建编码的视频文件。theora是视频编解码器，vorbis是音频解码器。

注意：codecs参数的双引号，这说明type属性两边需要使用单引号。

浏览器不知道如何播放HTML5视频时，可以插入Flash视频，让它作为HTML5视频的一个退路。

	<video poster="videro.jpg" controls>
		<source src="video.mp4">
		<source src="video.webm">
		<source src="video.ogv">
		<object>...</object>	
	</video>