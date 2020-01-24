
<div class="dados">
    <div class="cont-header">
        <label for="">Configurações gerais da conta</label>
    </div>
    <div class="cont-section">
        <details open>
            <summary>Dados pessoais</summary>
            <div>
                <form action="../modules/mdlEditarUsuario.php?dados" method="post">
                    <div class="frm-dds-usr">
                    <table>
                        <tbody>
                            <tr>
                                <td class="identificador" id="req">Nome</td>
                                <td class="dados-user"><input type="text" name="txtNome" autocomplete="off" required></td>
                            </tr>
                            <tr>
                                <td class="identificador" id="req">Nascimento</td>
                                <td class="dados-user"><input type="text" name="txtNascimento" data-mask="00/00/0000" autocomplete="off" required></td>
                            </tr>
                            <tr>
                                <td class="identificador" id="req">CPF</td>
                                <td class="dados-user"><input type="text" name="txtCpf" id="cpf" autocomplete="off" required></td>
                            </tr>
                            <tr>
                                <td class="identificador">Tel. Contato</td>
                                <td class="dados-user"><input type="text" name="txtTelefone" data-mask="(99) 99999-9999"></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="salvar"><input type="submit" value="Salvar"></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </form>
            </div> 
        </details>
        
        <details>
            <summary>Localização</summary>
                <div>
                <form action="../modules/mdlEditarUsuario.php?localizacao" method="post">
                    <div class="frm-dds-usr">
                    <table>
                        <tbody>
                            <tr>
                                <td class="identificador">Estado</td>
                                <td class="dados-user"><input type="text" name="txtEstado" autocomplete="off"></td>
                            </tr>
                            <tr>
                                <td class="identificador">Cidade</td>
                                <td class="dados-user"><input type="text" name="txtCidade" autocomplete="off"></td>
                            </tr>
                            <tr>
                                <td class="identificador">CEP</td>
                                <td class="dados-user"><input type="text" name="txtCep" autocomplete="off"></td>
                            </tr>
                            <tr>
                                <td class="identificador">Rua</td>
                                <td class="dados-user"><input type="text" name="txtRua"></td>
                            </tr>
                            <tr>
                                <td class="identificador">Número</td>
                                <td class="dados-user"><input type="text" name="txtNumero"></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="salvar"><input type="submit" value="Salvar"></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </form>
                </div>
        </details>

        <details>
            <summary>E-mail</summary>
                <div>
                <form action="../modules/mdlEditarUsuario.php?email" method="post">
                    <div class="frm-dds-usr">
                    <table>
                        <tbody>
                            <tr>
                                <td class="identificador" id="req">E-mail</td>
                                <td class="dados-user"><input type="email" name="txtEstado" autocomplete="off" required></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="salvar"><input type="submit" value="Salvar"></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </form>
                </div>
        </details>

        <details>
            <summary>Senha</summary>
                <div>
                <form action="../modules/mdlEditarUsuario.php?senha" method="post">
                    <div class="frm-dds-usr">
                    <table>
                        <tbody>
                            <tr>
                                <td class="identificador" id="req">Senha atual</td>
                                <td class="dados-user"><input type="password" name="txtEstado" autocomplete="off" required></td>
                            </tr>
                            <tr>
                                <td class="identificador" id="req">Nova senha</td>
                                <td class="dados-user"><input type="password" name="txtEstado" autocomplete="off" required></td>
                            </tr>
                            <tr>
                                <td class="identificador" id="req">Confirmar senha</td>
                                <td class="dados-user"><input type="password" name="txtEstado" autocomplete="off" required></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="salvar"><input type="submit" value="Salvar"></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </form>
                </div>
        </details>
   </div>
</div>