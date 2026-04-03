<?php


/*
* Need to send a HTTP Request to a URL, this is your class!
* Example:
* Http::get("https://api.genius.com/search?q=Murder in my mind")
*     ->headers(["Authorization" => "Bearer ..."])
*     ->followLocation()
*     ->ignoreErrors()
*     ->send();
*/
class Http {

    public static function get($url) {
        return new HttpHelper($url, "GET");
    }

    public static function post($url) {
        return new HttpHelper($url, "POST");
    }

    public static function put($url) {
        return new HttpHelper($url, "PUT");
    }

    public static function patch($url) {
        return new HttpHelper($url, "PATCH");
    }

    public static function delete($url) {
        return new HttpHelper($url, "DELETE");
    }

    public static function head($url) {
        return new HttpHelper($url, "HEAD");
    }

}

class HttpHelper {

    public String $url;
    public String $method;
    public String $proxy;
    public Array  $headers;
    public String $content;
    public Bool   $follow_location;
    public Int    $max_redirects;
    public Float  $timeout;
    public Bool   $ignore_errors;
    public        $result;

    public function __construct(String $url, String $method) {
        $this->url             = $url;
        $this->method          = $method;
        $this->proxy           = "";
        $this->headers         = array();
        $this->content         = "";
        $this->follow_location = true;
        $this->max_redirects   = 20;
        $this->timeout         = 60.0;
        $this->ignore_errors   = false;
    }

    public function proxy(String $proxy) {
        $this->proxy = $proxy;
        return $this;
    }

    public function headers(Array $headers) {
        $this->headers = array_merge($this->headers, $headers);
        return $this;
    }

    public function content(String $content) {
        $this->content = $content;
        return $this;
    }

    public function followLocation(Bool $follow_location = true) {
        $this->follow_location = $follow_location;
        return $this;
    }

    public function maxRedirects(Int $max_redirects) {
        $this->max_redirects = $max_redirects;
        return $this;
    }

    public function timeout(Float $timeout) {
        $this->timeout = $timeout;
        return $this;
    }

    public function ignoreErrors(Bool $ignore_errors = true) {
        $this->ignore_errors = $ignore_errors;
        return $this;
    }

    public function send() {
        $response = new HttpHelperResponse($this);
        return $response->body();
    }
    public function response() {
        $response = new HttpHelperResponse($this);
        return $response;
    }
    public function res() {
        $response = new HttpHelperResponse($this);
        return $response;
    }
    
}

class HttpHelperResponse {

    public HttpHelper $helper;
    public function __construct(HttpHelper $helper) {
        $this->helper = $helper;
    }

    private function create_context() {
        $headers = "";
        foreach($this->helper->headers as $k => $v) {
            $headers .= "$k: $v\r\n";
        }
        
        $context = array("http" => array());
        $context["http"]["method"] = $this->helper->method;
        if(!empty($this->helper->proxy)) {
            $context["http"]["proxy"] = $this->helper->proxy;
        }
        if(!empty($headers)) {
            $context["http"]["header"] = $headers;
        }
        if(!empty($this->helper->content)) {
            $context["http"]["content"] = $this->helper->content;
        }
        if(!empty($this->helper->proxy)) {
            $context["http"]["proxy"] = $this->helper->proxy;
        }
        $context["http"]["follow_location"] = (int) $this->helper->follow_location;
        $context["http"]["max_redirects"]   = $this->helper->max_redirects;
        $context["http"]["timeout"]         = $this->helper->timeout;
        $context["http"]["ignore_errors"]   = $this->helper->ignore_errors;
        $context = stream_context_create($context);
        return $context;
    }

    public function body() {
        return file_get_contents($this->helper->url, false, $this->create_context());
    }
    public function headers() {
        return get_headers($this->helper->url, true, $this->create_context());
    }

}
?>
