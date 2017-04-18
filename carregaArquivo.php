<?php

/*
 * Criado em 13-04-2017.
 * Por Marlon Ferreira
 * email: robemarlon@gmail.com.
 */
define('DIR', realpath(dirname(__FILE__)));
//verifica a permissão da pasta em que o programa irá salvar a imagem
if(!is_writable(DIR.'/img'))
{
    array_push($msg, array('permissaoPasta' => 'A altere a permissão da pasta IMG para 777!'));
    exit;
}
$num = 1;
$msg = array();
//array_push($msg, array('sucesso' => 'Mensagem enviada com sucesso!'));
//array_push($msg, array('sucesso' => 'Mensagem enviada com sucesso!'));
//
//echo json_encode($msg);
//exit;
if (!empty($_FILES['arquivos'])) {
    foreach ($_FILES['arquivos']["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $nome = $_FILES['arquivos']["name"][$key];
            $tmp = $_FILES['arquivos']["tmp_name"][$key];
            //verifica se a imagem é jpeg, se quiser pode colocar image/png image/gif entre outros tipos.
            if ($_FILES['arquivos']["type"][$key] === 'image/jpeg') {
                //depois de verificar o tipo, separamos o nome da imagem com a função pathinfo 
                //(essa função é importante e com certeza irá precisar dela um dia) 
                $tipoImg = pathinfo($nome);
//            time para que a imagem não se repita, cada upload pegamos a hora em timestamp
                $time = time();
//            aqui juntamos tudo, com a extensão da imagem e a hora juntamente com o numero da imagem ($num++)
                $nome = $time . '-' . 'IMG' . $num++ . '.' . $tipoImg['extension'];
                    move_uploaded_file($tmp, DIR . '/img/' . $nome);
                array_push($msg, array('sucesso' => 'A imagem ' . $_FILES['arquivos']["name"][$key] . ' foi enviada com sucesso!'));
            } else {
                array_push($msg, array('permissaoError' => 'A imagem: ' . $_FILES['arquivos']["name"][$key] . '.' . ' não é permitido!'));
            }
        } else {
            array_push($msg, array('errorImg' => 'Algo deu errado ao carregar as imagens!'));
        }
    }
}
if (!empty($msg)) {
    echo json_encode($msg);
}
