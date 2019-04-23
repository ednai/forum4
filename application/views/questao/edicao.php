<?=form_open('questao-atualizar')?>
    <input type="hidden" name="Id" value="<?=$questao['Id']?>">
    <table>
        <tr>
            <td>Título</td>
            <td><input type="text" name="titulo" value="<?=$questao['titulo']?>"/></td>
        </tr>
        
    </table>
    <input type="submit" value="Atualizar"/>
<?=form_close()?>
<?=anchor('questao','Voltar')?>