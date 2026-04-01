<?php
// Route - create URLs that point to blade.php files in the Public/ folder
// Example: $route->get("/home/:variable", "home") - "/home" url, "home" file in the Public/ folder

class Route {

    public Array $get;
    public Array $post;

    /*
    * Link a GET url to a page/return whatever the callback is returning
    */
    public function get(String $url, $page) {
      if($url == "/") {
          $this->get["index"] = $page;
      } else {
          $this->get[$url] = $page;
      }
  }

    /*
    * Returns the page from a $url, also sets arguments in the $arg variable
    */
    public function from(String $url) {
        $link = $this->get;
        global $arg;

        if($url == "/") { $page = $link["index"]; }
        foreach($link as $key => $val) {
          $pattern = str_replace("/", "\/", preg_replace("/\:([A-Za-z0-9]*)/i", "([A-Za-z0-9%-]*)", $key));
          if(preg_match("/$pattern/i", $url, $args)) {
            if(empty($page)) { $page = $val; }
            preg_match_all("/\:([A-Za-z0-9]*)/i", $key, $vars);
            foreach($vars[1] as $n => $varname) {
              $var = $args[$n + 1];
              $arg->{$varname} = urldecode($var);
            }
            break;
          }
        }

        return $page;
    }

    /*
    * Returns the rendered version of a page from a $url, specify $variables that are available in the page
    */
    public function render_url(String $url, $variables) {
        global $blade;
        $page = $this->from($url);

        if(is_callable($page)) {
          return call_user_func($page, $variables);
        } else {
          return $blade->run($page, $variables);
        }
    }

    /*
    * Returns the rendered versions of a $page
    */
    public function render(String $page, Array $variables) {
      global $blade;

      return $blade->run($page, $variables);
    }

}

?>