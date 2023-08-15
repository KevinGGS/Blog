<?php
    require_once '../includes/funcoes.php';
    require_once '../core/conexao_mysql.php';
    require_once '../core/sql.php';
    require_once '../core/mysql.php';

    insert_teste(10, 'muito bunito', 1, 1);
    buscar_teste();
    update_teste(10, 5, 'sla', 2, 2);
    buscar_teste();

    function insert_teste($nota, $comentario, $usuario_id, $post_id) : void
    {
        $dados = ['nota' => $nota
                , 'comentario' => $comentario
                , 'usuario_id' => $usuario_id
                , 'post_id' => $post_id];
        insere('avaliacao', $dados);
    }

    function buscar_teste() : void
    {
        $avaliacao = buscar('avaliacao', ['nota', 'comentario', 'usuario_id', 'post_id'], [],'');
        print_r($avaliacao);
    }

    function update_teste($id, $nota, $comentario, $usuario_id, $post_id) : void
    {
        $dados = ['nota' => $nota
                , 'comentario' => $comentario
                , 'usuario_id' => $usuario_id
                , 'post_id' => $post_id];
        $criterio = [['id', '=', $id]];
        atualiza('avaliacao', $dados, $criterio);
    }
?>