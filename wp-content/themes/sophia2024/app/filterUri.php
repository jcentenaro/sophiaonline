<?php

namespace App;

class filterUri {
    static function init() {
        new filterUri(
            'http://carolinaa8.sg-host.com/',
            'https://www.sophiaonline.com.ar/'
        );
    }

    private $to;
    private $from;

    public function __construct($to, $from)
    {
        $this->to = $to;
        $this->from = $from;

        add_filter('wp_get_attachment_url', [$this, 'wp_get_attachment_url'], 999, 2);
        add_filter('the_content', [$this, 'the_content'], 999, 1);
        add_filter('wp_calculate_image_srcset', [$this, 'wp_calculate_image_srcset'], 999, 4);
    }

    public function wp_get_attachment_url($url, $post_ID) {
        if(is_admin()) return $url;
        $time = time();
        $key ='xxxxxxxxxxx'.$time.'xxxxxxxxxx';
        $url = str_replace($this->to, $key, $url);
        $url = str_replace('///', '/', $url);
        $url = str_replace('//', '/', $url);
        $url = str_replace($key, $this->from, $url);

        return $url;
    }

    public function the_content($content) {
        if(is_admin()) return $content;
        $content = str_replace('src="'.$this->to, 'src="'.$this->from, $content);
        return $content;
    }

    public function wp_calculate_image_srcset($sources, $size_array, $image_src, $attachment_id) {
        foreach($sources as &$source) 
        {
            if(!file_exists($source['url'])) 
            {
                $source['url'] = str_replace($this->to, $this->from, $source['url']);
            }
        }
        return $sources;        
    }


}



filterUri::init();
