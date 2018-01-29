<?php
/**
 * Created by PhpStorm.
 * User: zhangyg
 * Date: 17-12-22
 * Time: 下午5:20
 */

header("Content-type: text/html; charset=utf-8");

//利用PHP目录和文件函数遍历用户给出目录的所有的文件和文件夹，修改文件名称
function fRename($dirname){
    if(!is_dir($dirname)){
        echo "{$dirname}不是一个有效的目录！";
        exit();
    }
    $handle = opendir($dirname);

    while(($fn = readdir($handle))!==false){

        if($fn!='.'&&$fn!='..'){

            $curDir = $dirname.'/'.$fn;
            if(is_dir($curDir)){
                fRename($curDir);
            }else{
                echo "<br>将名为：".$fn."\n\r";
                $path = pathinfo($curDir);
               // var_dump($path);exit;
                //改成你自己想要的新名字
                $newname = $path['dirname'].'/'.$path['filename'].'.html';
                echo "替换成:".$newname."\r\n";
                rename($curDir,$newname);

            }
        }
    }
}
$dir = __DIR__."/../application/index/view";
//给出一个目录名称可以是相对路径，也可以是绝对路径
fRename($dir);
exit();