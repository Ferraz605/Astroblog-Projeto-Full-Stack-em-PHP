<?php 
    namespace AstroBlog\DAO;
    require_once('Conexao.php');

    use AstroBlog\DAO\Conexao;
    use DateTime;
    use Exception;
    use mysqli;

    class Cadastrar
    {
        public function CadastrarUsuario(Conexao $conexao, String $nome, String $Email, String $Senha, String $tipo, DateTime $dataCadastro,int $curtida,int $contarUsuario){
            try{
                $conn = $conexao -> conectar(); // ABRE CONEXAO
                $sql="insert into AstroBlog (codigo,nome,email,senha,tipo,dataCadastro,curtida,contarUsuario)
                values('','$nome','$Email','$Senha','$tipo','$dataCadastro','$curtida','$contarUsuario')";
                
                $resultado = mysqli_query($conn,$sql);

                if($resultado){
                    return "<br><br> Usuário Inserido com sucesso! ✔";
                }
                return "<br><br> Usuário Não Inserido ✖";
            }catch(Exception $erro){
                echo "<br><br> Impossível Cadastrar o Usuário!<br><br> $erro";
            } // FIM DO TRY E KAT
        } // FIM DA CLASSE CADATRARUSUARIO

        public function contarUsuario(Conexao $conexao){
            $conn = $conexao->conectar(); // ABRE CONEXAO
            $sql = "select count(contarUsuario) As total from Usuario";
            $resultado = mysqli_query($conn,$sql);
            $dados = mysqli_fetch_assoc($resultado);

            echo "Total de Usuários: ".$dados['total']; 
        } // FIM DE CONTAR USUARIO

        public function contarCurtida(Conexao $conexao){
            $conn = $conexao->conectar(); // ABRE CONEXAO
            $sql = "select count(curtida) As total from Usuario";
            $resultado = mysqli_query($conn,$sql);
            $dados = mysqli_fetch_assoc($resultado);//serve para extrair uma linha de resultado de uma consulta

            echo "Total de curtidas: ".$dados['total'];

        
        } // FIM DE CONTAR CURTIDA

####################################################################################
        public function cadastrarLocal(Conexao $conexao, String $nomeLocal, String $cidade, String $estado, String $pais, String $descricao){
            $conn = $conexao->conectar();
            $sql = "insert into LocalObservacao (nomeLocal, cidade, estado, pais, descricao)
                    values ('$nomeLocal','$cidade','$estado','$pais','$descricao')";

            $resultado = mysqli_query($conn, $sql);

            if (!$resultado) {
                echo "<br><br> Local não inserido! ✖ Erro: " . mysqli_error($conn);
            }

            return $resultado; // true ou false de verdade, não string
        }
####################################################################################
        public function cadastrarEquipamento(Conexao $conexao, String $nomeEquipamento, String $tipo,String $marca,String $modelo){
            try{
                $conn = $conexao -> conectar(); // ABRE CONEXAO
                $sql="insert into Equipamento (codigo,nomeEquipamento,tipo,marca,modelo)
                values('','$nomeEquipamento','$tipo','$marca','$modelo')";
                
                $resultado = mysqli_query($conn,$sql);

                if($resultado){
                    return "<br><br> Equipamento Inserido com sucesso!✔";
                }
                return "<br><br> Equipamento Não inserido! ✖";
            }catch(Exception $erro){
                echo "<br><br> Impossível Cadastrar o Equipamento!<br><br> $erro!";
            } // FIM DO TRY E KAT
        } // FIM  DO CADASTRAR EQUIPAMENTO
####################################################################################
        public function cadastrarEvento(Conexao $conexao, String $nomeEvento, String $categoria, string $dataEvento, string $descricaoEvento){
                $conn = $conexao -> conectar(); // ABRE CONEXAO
                $sql="insert into EventoAstronomico (idEventoAstronomico,nomeEvento,categoria,dataEvento,descricaoEvento)
                values('','$nomeEvento','$categoria','$dataEvento','$descricaoEvento')";
                
                $resultado = mysqli_query($conn,$sql);

                if(!$resultado){
                    echo "<br><br> Local não inserido! ✖ Erro: " . mysqli_error($conn);
                }

                return $resultado;
        } // FIM  DO CADASTRAR EVENTO
####################################################################################
        public function cadastrarObservacao(Conexao $conexao, String $titulo, String $categoria, String $objetoObservado, DateTime $dataObservacao,String $codicaoClimatica, String $descricao,
        String $imagem, int $contarObservacao,int $EventosAstronomicosId, int $EquipamentoId, int $UsuarioId,int $localId){
            try{
                $conn = $conexao -> conectar(); // ABRE CONEXAO
                $sql="insert into AstroBlog (codigo,titulo,categoria,objetoObservado,dataObservacao,condicaoClimatica,descricao,imagem,contarObservacao,EventosAstronomicosId,
                EquipamentoId,UsuarioId,localId)
                values('','$titulo','$categoria','$objetoObservado','$dataObservacao','$codicaoClimatica','$descricao'
                '$imagem',,'$contarObservacao''$EventosAstronomicosId','$EquipamentoId','$UsuarioId','$localId')";
                
                $resultado = mysqli_query($conn,$sql);

                if($resultado){
                    return "<br><br> Observação Inserida com sucesso!✔";
                }
                return "<br><br> Observação Não inserida!✖";
            }catch(Exception $erro){
                echo "<br><br> Impossível Cadastrar Observação!<br><br> $erro!";
            } // FIM DO TRY E KAT
        } // FIM  DO CADASTRAR OBSERVACOES

        public function contarObservacoes(Conexao $conexao){
            $conn = $conexao->conectar(); // ABRE CONEXAO
            $sql = "select count(contarObservacao) As total from Observacao";
            $resultado = mysqli_query($conn,$sql);
            $dados = mysqli_fetch_assoc($resultado);

            echo "Total de Observações: ".$dados['total'];
        } // FIM DE CONTAR OBSERVACOES


        
    } // FIM DA CLASSE CADASTRAR
?>