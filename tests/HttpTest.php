<?php

class HttpTest extends PHPUnit_Framework_TestCase
{

    public function testMethod()
    {
    	$test = new \Aw\Httpclient\Curl();
    	$ret = $test->get("http://tiananwei.com/tool/method")->send();
        $this->assertEquals("GET",trim($ret));

        $test = new \Aw\Httpclient\Curl();
        $ret = $test->post("http://tiananwei.com/tool/method")->send();
        $this->assertEquals("POST",trim($ret));


        $test = new \Aw\Httpclient\Curl();
        $ret = $test->delete("http://tiananwei.com/tool/method")->send();
        $this->assertEquals("DELETE",trim($ret));

        $test = new \Aw\Httpclient\Curl();
        $ret = $test->put("http://tiananwei.com/tool/method")->send();
        $this->assertEquals("PUT",trim($ret));
    }

    public function testCookie()
    {
        $test = new \Aw\Httpclient\Curl();
        $test->cookie = __DIR__."/cookie";
        $test->get("http://tiananwei.com/tool/sessionset")->send();

        $test = new \Aw\Httpclient\Curl();
        $test->cookie = __DIR__."/cookie";
        $ret = $test->get("http://tiananwei.com/tool/sessionecho")->send();
        $this->assertEquals("garri",trim($ret));
    }

    public function testUa()
    {
        $test = new \Aw\Httpclient\Curl();
        $ret = $test->get("http://tiananwei.com/tool/ua")->send();
        $this->assertEquals(\Aw\Httpclient\Curl::DEF_UA,trim($ret));
    }


    public function testHeader()
    {
        $test = new \Aw\Httpclient\Curl();
        $test->addHeader("xxx","17739");
        $ret = $test->get("http://tiananwei.com/tool/headers")->send();
        var_dump($ret);
    }


    public function testJson()
    {
        $test = new \Aw\Httpclient\Curl();
        $test->addHeader("xxx","17739");
        $test->requestDataType = \Aw\Httpclient\Curl::REQUEST_DATA_TYPE_JSON;
        $ret = $test->post("http://tiananwei.com/tool/echojson",array(
            "foo" => "bar"
        ))->send();
        var_dump($ret);
        $this->assertTrue(strpos($ret,"bar") !== false);
    }

    public function testPost()
    {
        $test = new \Aw\Httpclient\Curl();
        $test->addHeader("xxx","17739");

        $ret = $test->post("http://tiananwei.com/tool/echoPost",array(
            "foo" => "bar",
            'xx' => 'yy'
        ))->send();
        var_dump($ret);
        $this->assertTrue(strpos($ret,"bar") !== false);
    }

    public function testRaw()
    {
        $test = new \Aw\Httpclient\Curl();
        $test->addHeader("xxx","17739");
        $test->requestDataType = \Aw\Httpclient\Curl::REQUEST_DATA_TYPE_JSON;
        $ret = $test->post("http://tiananwei.com/tool/echoRawinput",'xx-yy')->send();
        echo "should be string:xx-yy\n===============\n",$ret;
        $test = new \Aw\Httpclient\Curl();
        $ret = $test->post("http://tiananwei.com/tool/echoRawinput",'{"a":"bbb"}')->send();
        echo "\n\nshould be string:{\"a\":\"bbb\"}\n===============\n",$ret;

    }
}

