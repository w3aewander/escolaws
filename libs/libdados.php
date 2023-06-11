<?php
/**
 * Alimentação de dados para o sistema
 * 
 */
// dados para o módulo disciplinas

/**
 * Retorna dados lidos de um arquivo CSV
 * 
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * @param $path string caminho do arquivo
 * @return array de dados..
 * @version 0.1-alpha
 */
function retornaDados($path)
{

$dados = [];

//abrir o arquivo no modo leitura 
$fp = fopen($path, 'r');

//laço de repetição
//enquanto não for o final do arquivo...
while (!feof($fp)){

  //se se o conteudo da linha não estiver vazio.. 
  if ( $csv = fgetcsv($fp, filesize($path),";", '"')) {
      array_push( $dados, $csv);
  }

}

//fecha o recurso do arquivo
fclose($fp);

return $dados;

}

  
/**
 * Função para excluir dados do arquivo
 * @param $param mixed parâmetro para exclusão - pode ser código, matrícula, etc.
 * @param $path string o caminho do arquivo de dados
 * @version 0.1-alpha
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 * 
 */
function excluirDados($param="0", $path="")
{

    //caminho do arquivo
    //$path = __DIR__ .'/alunos.csv';
    
    //caminho do arquivo temporário
    $arqtemp = "./temp.txt";

    //abra o arquivo auxiliar
    $faux = fopen($arqtemp, 'a');

       //abrir o arquivo de dados
        $fp = fopen($path, 'r+');

       
        //enquanto não for o final do arquivo
        while (!feof($fp)){
            //pegue a linha do arquivo em cada iteração
            $linha =  fgets($fp);

            //verifica se a linha tem a matricula.
            if ( $param !== explode(';', $linha)[0]){
                //se encontrar a matrícula ignore-a
                //grave a linha
                fwrite($faux, $linha);
                
            }
        } 
     
        //feche o arquivo de dados
        fclose($fp);

    //feche o arquivo auxiliar
    fclose($faux);

    //abra o arquivo auxiliar para leitura
    $faux = fopen($arqtemp, 'r');

    //exclui o arquivo de dados atual
    unlink($path);

    //abra o arquivo de dados para acrescentar dados
    $fp = fopen($path, 'a');

    //enquanto não for o final do arquivo auxiliar
    while ( !feof($faux)){
          $linha = fgets($faux);
          fwrite($fp, $linha); 
    }
    

    //fecha o arquivo de dados
    fclose($fp);

    //fechar o arquivo auxiliar
    fclose($faux);

    //exclua o arquivo auxiliar
    unlink($arqtemp);
}    

/**
 * Alterar dados de cursos
 * @param $param mixed parâmetro para a função
 * @param $path string o caminho do arquivo de dados
 * @param $dados mixed os dados para serem substrituidos
 * @version 0.1-alpha
 * @author Wanderlei Silva do Carmo <wander.silva@gmail.com>
 */
function alterarDados($param="0", $path="", $dados="")
{

    //caminho do arquivo
    //$path = __DIR__ .'/cursos.csv';

    
    //caminho do arquivo temporário
    $arqtemp = "./temp.txt";

    //abra o arquivo auxiliar
    $faux = fopen($arqtemp, 'a');

       //abrir o arquivo de dados
        $fp = fopen($path, 'r+');

       
        //enquanto não for o final do arquivo
        while (!feof($fp)){
            //pegue a linha do arquivo em cada iteração
            $linha =  fgets($fp);

            //verifica se a linha tem a matricula.
            if ( $param === explode(';', $linha)[0]){
                //se encontrar o código então atribua o conteúdo da linha o dado informado
                $linha = $dados;
            }
            
            //grave a linha
            fwrite($faux, $linha);
        } 
     
        //feche o arquivo de dados
        fclose($fp);

    //feche o arquivo auxiliar
    fclose($faux);

    //abra o arquivo auxiliar para leitura
    $faux = fopen($arqtemp, 'r');

    //exclui o arquivo de dados atual
    unlink($path);

    //abra o arquivo de dados para acrescentar dados
    $fp = fopen($path, 'a');

    //enquanto não for o final do arquivo auxiliar
    while ( !feof($faux)){
          $linha = fgets($faux);
          fwrite($fp, $linha); 
    }
    

    //fecha o arquivo de dados
    fclose($fp);

    //fechar o arquivo auxiliar
    fclose($faux);

    //exclua o arquivo auxiliar
    unlink($arqtemp);
}  

function pesquisar($param, $path)
{
    //caminho do arquivo
    //$path = __DIR__ .'/alunos.csv';
    
    //caminho do arquivo temporário
    $arqtemp = "./temp.txt";

    //abra o arquivo auxiliar
    $faux = fopen($arqtemp, 'a');

        //abrir o arquivo de dados
        $fp = fopen($path, 'r+');

        
        //enquanto não for o final do arquivo
        while (!feof($fp)){
            //pegue a linha do arquivo em cada iteração
            $linha =  fgets($fp);

            //verifica se a linha tem a matricula.
            if ( $param !== explode(';', $linha)[0]){
                //se encontrar a matrícula ignore-a
                //grave a linha
                fwrite($faux, $linha);
                
            }
        } 
        
        //feche o arquivo de dados
        fclose($fp);

    //feche o arquivo auxiliar
    fclose($faux);

    //abra o arquivo auxiliar para leitura
    $faux = fopen($arqtemp, 'r');

    //exclui o arquivo de dados atual
    unlink($path);

    //abra o arquivo de dados para acrescentar dados
    $fp = fopen($path, 'a');

    //enquanto não for o final do arquivo auxiliar
    while ( !feof($faux)){
            $linha = fgets($faux);
            fwrite($fp, $linha); 
    }
    

    //fecha o arquivo de dados
    fclose($fp);

    //fechar o arquivo auxiliar
    fclose($faux);

    //exclua o arquivo auxiliar
    unlink($arqtemp);
}

 /**
  * Mostra o nome do curso
  * @param $id int O ID do curso
  * @return $nome String O nome do curso.
  */
  function mostrarCurso($id){

    include __DIR__ . "/../../libs/conexao.php";

    $sql = 'select * from curso where id = ?';
    $stm = mysqli_prepare($conn, $sql);
    $stm->bind_param('i',$id);
    $stm->execute();
    $result = $stm->get_result();
    $curso = $result->fetch_assoc();
    $conn->close();

    return $curso['nome'];
 }
