# Math(算数)对象 #
## Math.round() ##
Math.round()函数返回一个数字四舍五入后最接近的整数值。

如果number的小数部分是.5或者更大，输入的参数被四十五到下一个绝对值更大的整数。如果number的小数部分小于.5，输入的参数被四舍五入到下一个绝对值更小的整数。

如果number的小数部分恰好等于.5输入的参数被四舍五入到下一个在正无穷方向上的整数。注意，与很多其他语言中的round()函数不同，Math.round()并不总是四舍五入到远离0的方向(尤其是在负数的小数部分恰好等于.5的情况下)。

	Math.round( 20.49); //  20
	Math.round( 20.5);  //  21
	Math.round( 42  );  //  42
	Math.round(-20.5);  // -20
	Math.round(-20.51); // -21
## random() ##
Math.random() 函数返回一个浮点,  伪随机数在范围[0，1)，也就是说，从0（包括0）往上，但是不包括1（排除1），然后您可以缩放到所需的范围。实现将初始种子选择到随机数生成算法;它不能被用户选择或重置。他不能被用户选择或重置。

	function getRandom() {
 	 return Math.random();	
	}
得到一个两数之间的随机数

下面这个例子返回了一个在指定值之间的随机数。这个值比min大（可能与min相等）, 以及比max小(但是不等于max).

	function getRandomArbitrary(min,max){
		return Math.random()*(max - min) + min;
	}
得到一个两数之间的随机整数

这个例子返回了一个在指定值之间的随机整数。这个值比min大（如果min不是整数，那么下一个整数大于min）, 以及比max小(但是不等于max).

	function getRandomInt(min,max){
		min = Math.ceil(min);  //向上取整
		max = Math.floor(max); //向下取整
		return Math.floor(Math.random()*(max-min))+min;//最大值是独占的，最小值是包容的
	}
## 函数返回一组数中的最大值 ##
Math.max() 函数返回一组数中的最大值。（将max换成min为最小值）

	Math.max([value1[,value2, ...]]) 
使用Math.max()

	Math.max(10, 20);   //  20
	Math.max(-10, -20); // -10
	Math.max(-10, 20);  //  20
使用apply方法寻找一个数值数组中的最大元素。`getMaxOfArray([1,2,3])` 等价于 `Math.max(1, 2, 3)`，但是你可以使用 getMaxOfArray ()作用于任意长度的数组上。

	function getMaxOfArray(numArray) {
    return Math.max.apply(null, numArray);
	}