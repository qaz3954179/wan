<?php
    class method   extends baseclass {
        public function index() {
            $fs = fopen('/www/web/www_wanfeng365_com/debug.log', 'r') or die('读取文件失败');
            $content = '';
            if($fs) {
                while (!feof($fs)) {
                    # code...
                    $data = fread($fs, 1024 * 1024 * 2);
                    $content .=$data;
                }
                fclose($fs);
                
                echo $content;
            } else {
                echo '没有日志';
            }
        }
    }
?>