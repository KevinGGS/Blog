<?php
    require_once '../includes/funcoes.php';
    require_once '../core/conexao_mysql.php';
    require_once '../core/sql.php';
    require_once '../core/mysql.php';

    insert_teste('titulo', 'texto', 1, 2020-01-02);
    buscar_teste();
    update_teste(38, 'titulo', 'texto', 1, '2017-05-26 00:20:10');
    buscar_teste();

    function insert_teste($titulo, $texto, $usuario_id, $data_postagem) : void
    {
        $dados = ['titulo' => $titulo
                , 'texto' => $texto
                , 'usuario_id' => $usuario_id
                , 'data_postagem' => $data_postagem];
        insere('post', $dados);
    }

    function buscar_teste() : void
    {
        $post = buscar('post', ['titulo', 'texto', 'usuario_id', 'data_postagem'], [],'');
        print_r($post);
    }

    function update_teste($id, $titulo, $texto, $usuario_id, $data_postagem) : void
    {
        $dados = ['titulo' => $titulo
                , 'texto' => $texto
                , 'usuario_id' => $usuario_id
                , 'data_postagem' => $data_postagem];
        $criterio = [['id', '=', $id]];
        atualiza('post', $dados, $criterio);
    }
?>