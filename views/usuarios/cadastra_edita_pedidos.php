<?php if (isset($_GET['novo'])) { ?>

    <div class="pedidos">
    <div class="cont-header">
        <label for="">Novo Pedido</label>
    </div>
    <div class="cont-section">
        <div>
            <form action="../modules/mdlNovoPedido.php" method="post">              
            <div class="frm-dds-usr">
                <table>
                    <tbody>
                        <tr>
                            <td class="identificador" id="req">Descrição</td>
                            <td class="dados-user"><input type="text" name="txtEstado" autocomplete="off" required></td>
                        </tr>
                        <tr>
                            <td class="identificador" id="req">Arquivo PDF</td>
                            <td class="dados-user"><input type="file" name="txtEstado" autocomplete="off" required></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="salvar"><input type="submit" value="Cadastrar"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </form>
            <a href="?pedidos" id="btn-voltar">Voltar</a>
        </div>
    </div>
</div>

<?php } elseif (isset($_GET['editar'])) {?>
    
    <!-- Dados vindo do banco  -->
    <div class="pedidos">
        <div class="cont-header">
            <label for="">Editar Pedido</label>
        </div>
        <div class="cont-section">
            <div>
                <form action="../modules/mdlEditarPedido.php" method="post">              
                <div class="frm-dds-usr">
                    <table>
                        <tbody>
                            <tr>
                                <td class="identificador" id="req">Descrição</td>
                                <td class="dados-user"><input type="text" name="txtEstado" autocomplete="off" required></td>
                            </tr>
                            <tr>
                                <td class="identificador" id="req">Arquivo PDF</td>
                                <td class="dados-user"><input type="file" name="txtEstado" autocomplete="off" required></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="salvar"><input type="submit" value="Salvar"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </form>
                <a href="?pedidos" id="btn-voltar">Voltar</a>
            </div>
        </div>
    </div>

<?php } else { header('location: ../views/painel_usuario.php?pedidos'); }?>