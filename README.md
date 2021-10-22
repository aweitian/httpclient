# 安装
> composer require aweitian/httpclient

## 示例
```php
$http_client = new \Aw\Httpclient\Curl();
$html = $http_client->get("https://baidu.com/")
->setOption(CURLOPT_TIMEOUT,30)
...
->send();
$response_headers = $http_client->headers_response

```

## 测试返回结果
```html
<html>
<head><title>302 Found</title></head>
<body bgcolor="white">
<center><h1>302 Found</h1></center>
<hr><center>bfe/1.0.8.18</center>
</body>
</html>
```


```angular2html
array(6) {
  ["Server"]=>
  string(12) "bfe/1.0.8.18"
  ["Date"]=>
  string(29) "Fri, 22 Oct 2021 23:06:44 GMT"
  ["Content-Type"]=>
  string(9) "text/html"
  ["Content-Length"]=>
  string(3) "161"
  ["Connection"]=>
  string(10) "keep-alive"
  ["Location"]=>
  string(21) "http://www.baidu.com/"
}
```
