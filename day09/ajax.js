// 这个函数的主要作用 就是将一个对象 解析为字符串 要求字符串的格式为 key=value&key=value
// username='张三'&age=18
function toString(obj) {
    // 如果有形参并且形参的类型是对象 
    if (obj && typeof obj == 'object') {
        // 使用for...in语句遍历对象 
        var str = ''; // 定义一个空字符串
        for (var key in obj) {
            str += key + '=' + obj[key] + '&';
        }
        // 将该字符串的最后一个&符号去除 字符串对象.substr(开始下标,长度);
        str = str.substr(0, str.length - 1);
        return str;
    }
}


// toString({username:'张三',age:18});
// 可以发送异步请求 
// 参数是一个对象
// 如果异步对象有参数 要求这个参数是一个对象的格式  {key:value,key:value}
function ajax(options) {
    var type = options.type.toLowerCase() || 'get'; // 请求的方式
    var url = options.url; // 请求的url地址 
    var data = toString(options.data) || ""; // 接收到传递过来的数据 
    // 服务器端返回的数据基本上都是json格式的字符串
    var dataType = options.dataType || 'json';
    var success = options.success; // 接收到对象属性的值 
    // console.log(typeof success)
    // 参数在哪里 根据请求的方式  如果请求的方式是get 我们把它拼接到url地址的后面 
    // 如果是post 将数据放在请求体里面 
    if (type == 'get') {
        url = url + '?' + data;
    }

    // get请求 有参数 是将参数拼接在url的后面  url?key=value&key=value

    // 创建异步对象 
    var xhr = new XMLHttpRequest();
    // 设置请求行 
    xhr.open(type, url);

    // 再来判断 
    if (type == 'post') {
        // 请求头 
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        // 设置请求体 
        xhr.send(data)
    } else {
        // 请求体
        xhr.send(null);
    }

    // 接收服务器响应回来的数据 
    // 第一步：需要监听事件  
    xhr.onreadystatechange = function(){
         // 第二步：判断服务器响应回来的状态码 并且 readyState == 4 
        if(xhr.status == 200 && xhr.readyState == 4){
            // 异步对象响应回来的数据大致有三种  普通字符串 json字符串 xml 
            if(dataType == 'string'){
                // 服务器响应回来的数字 就是普通字符串 
                var data = xhr.responseText;
            }else if(dataType == 'json'){
                // 有可能解析为数组 有可能解析为对象
                var data = JSON.parse(xhr.responseText);
            }else if(dataType == 'xml'){
                var data = xhr.responseXML;
            }
			
			// 回调函数  就是将处理好的结果 交给 这个函数来处理 
			success && success(data);
        }
    }
   
    // 第三步：才可以接收到服务器响应回来的数据 


}

// 调用函数时 传递的参数是一个对象  

// ajax({
//     type: 'POST', // 请求的方式
//     url: './server/nav-json.php',
//     data: { username: 'zs', age: 18 }
// });
