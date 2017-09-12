# JavaScript类型转换 #
## JavaScript数据类型 ##
在JavaScript中有5中不同的数据类型：

- string
- number
- boolean
- object
- function

3中对象类型：

- Object
- Date
- Array

2个不包含任何值得数据类型：

- null
- undefined

## typeof操作符 ##
可以使用typeof操作符来查看JavaScript变量的数据类型。

	typeof "John"                 // 返回 string 
	typeof 3.14                   // 返回 number
	typeof NaN                    // 返回 number
	typeof false                  // 返回 boolean
	typeof [1,2,3,4]              // 返回 object
	typeof {name:'John', age:34}  // 返回 object
	typeof new Date()             // 返回 object
	typeof function () {}         // 返回 function
	typeof myCar                  // 返回 undefined (if myCar is not declared)
	typeof null                   // 返回 object
注意：

- NaN的数据类型是number
- 数组(Array)的数据类型是object
- 日期(Date)的数据类型为object
- null的数据类型是object
- 未定义变量的数据类型为undefined

如果对象是JavaScript Array或JavaScript Date，我们就无法通过typeof来判断他们的类型，因为都是返回Objiect。

## constructor属性 ##
constructor属性返回所有JavaScript变量的构造函数。

	"John".constructor                 // 返回函数 String()  { [native code] }
	(3.14).constructor                 // 返回函数 Number()  { [native code] }
	false.constructor                  // 返回函数 Boolean() { [native code] }
	[1,2,3,4].constructor              // 返回函数 Array()   { [native code] }
	{name:'John', age:34}.constructor  // 返回函数 Object()  { [native code] }
	new Date().constructor             // 返回函数 Date()    { [native code] }
	function () {}.constructor         // 返回函数 Function(){ [native code] }
也可以使用constructor属性来查看对象是否为数组（包含字符串"Array"):
	
	function isArray(myArray) {
    return myArray.constructor.toString().indexOf("Array") > -1;
	}

还可以使用constructor属性来查看对象是否为日期(包含字符串"Date"):

	function isDate(myDate) {
    return myDate.constructor.toString().indexOf("Date") > -1;
	}
##JavaScript类型转换##
JavaScript变量可以转换为新变量或其他数据类型：

- 通过使用JavaScript函数
- 通过JavaScript自身自动转换

全局方法String()可以将数字转换为字符串,该方法可以用于任何类型的数字，字母，变量，表达式:

	String(x)         // 将变量 x 转换为字符串并返回
	String(123)       // 将数字 123 转换为字符串并返回
	String(100 + 23)  // 将数字表达式转换为字符串并返回
Number方法toString()也是同样的效果

	x.toString()
	(123).toString()
	(100+23).toSting()
将字符串转换为数字
全局方法Number()可以将字符串转换为数字。

	Number("3.14")    // 返回 3.14
	Number(" ")       // 返回 0 
	Number("")        // 返回 0
	Number("99 88")   // 返回 NaN
自动转换为字符串

当你尝试输出一个对象或一个变量是JavaScript会自动调用变量的toString()方法：

	document.getElementById("demo").innerHTML = myVar;
	// if myVar = {name:"Fjohn"}  // toString 转换为 "[object Object]"
	// if myVar = [1,2,3,4]       // toString 转换为 "1,2,3,4"
	// if myVar = new Date()      // toString 转换为 "Fri Jul 18 2014 09:08:55 GMT+0200"
数字和布尔值也经常互相转换：

	// if myVar = 123             // toString 转换为 "123"
	// if myVar = true            // toString 转换为 "true"
	// if myVar = false           // toString 转换为 "false"