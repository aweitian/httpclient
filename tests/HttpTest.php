<?php

class HttpTest extends PHPUnit_Framework_TestCase
{

    public function testMethod()
    {
//    	$test = new \Aw\Httpclient\Curl();
//    	$ret = $test->get("http://127.0.0.1:3000/tools/method?raw")->send();
//        $this->assertEquals("GET",trim($ret));
//
//        $test = new \Aw\Httpclient\Curl();
//        $ret = $test->post("http://127.0.0.1:3000/tools/method?raw")->send();
//        $this->assertEquals("POST",trim($ret));
//
//
//        $test = new \Aw\Httpclient\Curl();
//        $ret = $test->delete("http://127.0.0.1:3000/tools/method?raw")->send();
//        $this->assertEquals("DELETE",trim($ret));
//
//        $test = new \Aw\Httpclient\Curl();
//        $ret = $test->put("http://127.0.0.1:3000/tools/method?raw")->send();
//        $this->assertEquals("PUT",trim($ret));
    }

    public function testCookie()
    {
//        $test = new \Aw\Httpclient\Curl();
//        $test->cookie = __DIR__."/cookie";
//        $test->get("http://127.0.0.1:3000/tools/sessionset")->send();
//
//        $test = new \Aw\Httpclient\Curl();
//        $test->cookie = __DIR__."/cookie";
//        $ret = $test->get("http://127.0.0.1:3000/tools/sessionecho")->send();
//        $this->assertEquals("garri",trim($ret));
    }

    public function testUa()
    {
//        $test = new \Aw\Httpclient\Curl();
//        $ret = $test->get("http://127.0.0.1:3000/tools/ua?raw")->send();
//        $this->assertEquals(\Aw\Httpclient\Curl::DEF_UA,trim($ret));
    }


    public function testHeader()
    {
//        $test = new \Aw\Httpclient\Curl();
//        $test->addHeader("xxx","17739");
//        $ret = $test->get("http://127.0.0.1:3000/tools/headers?raw")->send();
//        var_dump($ret);
    }


    public function testJson()
    {
//        $test = new \Aw\Httpclient\Curl();
//        $test->addHeader("xxx","17739");
//        $test->requestDataType = \Aw\Httpclient\Curl::REQUEST_DATA_TYPE_JSON;
//        $ret = $test->post("http://127.0.0.1:3000/tools/echojson",array(
//            "foo" => "bar"
//        ))->send();
//        var_dump($ret);
//        $this->assertTrue(strpos($ret,"bar") !== false);
    }

    public function testPost()
    {
//        $test = new \Aw\Httpclient\Curl();
//        $test->addHeader("xxx","17739");
//
//        $ret = $test->post("http://127.0.0.1:3000/tools/request?raw",array(
//            "foo" => "bar",
//            'xx' => 'yy'
//        ))->send();
//        var_dump($ret);
//        $this->assertTrue(strpos($ret,"bar") !== false);
    }

    public function testRaw()
    {
//        $test = new \Aw\Httpclient\Curl();
//        $test->addHeader("xxx","17739");
//        $test->requestDataType = \Aw\Httpclient\Curl::REQUEST_DATA_TYPE_JSON;
//        $ret = $test->post("http://127.0.0.1:3000/tools/echoRawinput?raw",'xx-yy')->send();
//        echo "should be string:xx-yy\n===============\n",$ret;
//        $test = new \Aw\Httpclient\Curl();
//        $ret = $test->post("http://127.0.0.1:3000/tools/echoRawinput?raw",'{"a":"bbb"}')->send();
//        echo "\n\nshould be string:{\"a\":\"bbb\"}\n===============\n",$ret;

    }

    public function testHeaderReturn(){
        $test = new \Aw\Httpclient\Curl();
        $ret = $test->get("https://baidu.com/")->send();
        if ($ret == false) {
            var_dump($test->errorno,$test->msg);
        } else {
            var_dump($ret,$test->headers_response);
        }
        $test = new \Aw\Httpclient\Curl();
        $ret = $test->get("https://www.zhihu.com/")->send();
        if ($ret == false) {
            var_dump($test->errorno,$test->msg);
        } else {
            var_dump($ret,$test->headers_response);
        }
    }
}

