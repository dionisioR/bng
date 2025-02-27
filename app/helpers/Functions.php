<?php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

//============================================================
function check_session(){
    // check if there is an active session
    return isset($_SESSION['user']);
}

//============================================================
function logger($mensagem = '', $level = 'info')
{
    // criar o canal de log
    $log = new Logger('registo_logs');
    $log->pushHandler(new StreamHandler(LOGS_PATH));

    // adicionar registo de logs condicionado pelo level
    switch ($level) {
        case 'info':
            $log->info($mensagem);
            break;
        case 'notice':
            $log->notice($mensagem);
            break;
        case 'warning':
            $log->warning($mensagem);
            break;
        case 'error':
            $log->error($mensagem);
            break;
        case 'critical':
            $log->critical($mensagem);
            break;
        case 'alert':
            $log->alert($mensagem);
            break;
        case 'emergency':
            $log->emergency($mensagem);
            break;
        
        default:
            $log->info($mensagem);
            break;
    }
}


//============================================================
function printData($data, $die = true)
{
    echo "<pre>";
    if (is_array($data) || is_object($data)) {
        print_r($data);
    } else {
        echo $data;
    }

    if ($die) {
        die("<br>FIM<br>");
    }
}
