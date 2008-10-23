<?php
// Tradução por: GibaPhp - gibaphp.xoopstotal@gmail.com - http://www.xoopstotal.com.br - continuação 3.40
// traducao v.3.30 por Frodobr - frodoxbr@gmail.com

define("_DOC_MOD_INSTALL","Instalação do Módulo"); // FrodoBr
define("_DOC_PRE_INSTALL","Pré-requisitos"); // FrodoBr
define("_DOC_NEW_INSTALL","Nova instalação");  // FrodoBr
define("_DOC_MAJ_INSTALL","Atualizando de usa versão anterior"); // FrodoBr
define("_DOC_PROC_INSTALL","Procedimento de Instalação"); // FrodoBr

define("_DOC_PRE","Para usar o módulo de formulários é necessário :
<ul>
	<li>A versão do Xoops precisa ser maior do que a 2.0.7. Se mais recente deve trabalhar melhor.</li>
	<li>Você precisará dar as devidas permissões (chmod 777) no diretório de upload do módulo.</li>
	<li>O Xoops precisa estar configurado antes para enviar os emails.</li>");

define("_DOC_INSTALL","Você não tem formulaire antigo ou você não está migrando de uma base antiga ? veja este processo :
<ul>
  <li>Baixando o módulo</li>
  <li>Verifique se você já tem o módulo do formulaire no sub-diretório do seu xoops ou local. (Se tiver, apague a pasta neste caso)</li>
  <li>Descompactar o arquivo que contém o módulo em algum local e envie o diretório formulaire para dentro da pasta modules do seu website</li>
  <li>Para instalar o módulo é só você entrar na administração de módulo e seguir a sequência normal de qualquer instalação de módulo</li>
  <li>notice : Você apenas instalou o módulo e eles ainda não estarão acessíveis pelos usuário no menu principal do módulo</li>");

define("_DOC_MAJ","Na versão 3, em virtude de diversas modificações, não está sendo possível a migração e atualização de versão anteriores.<br />
 Isto é, você irá precisar fazer a desinstalação do seu módulo de formulaire e instalar esta nova versão para trabalhar.");
define("_DOC_PROC","Após a instalação do Módulo : <ul>
<li>Ativar os blocos no setor de 'Blocos e Grupos' imediatamente após a instalação</li>
<li>Durante a instalação, um formulário de demonstração será criado, os usuários possuem permissões para utiliza-lo se estiverem visíveis no grupo determinado</li>
<li>Se você localizou esta parte, a demonstração foi instalada e poderá ser configurada para seus testes, mas se você estiver em um site externo, on-line, você poderá irá precisar modificar o acesso desta url pela área de administração</li>
<li>O form estará agora pronto e a instalação terminada</li>");

define("_DOC_MOD_CONFIG","Configuração do Módulo");
define("_DOC_PREF_CONFIG","Preferências");
define("_DOC_BLGR_CONFIG","Blocos e Grupos");

define("_DOC_PREF","Estes parâmetros serão válidos para todo este módulo, seus novos formulários, e também poderão ter seus elementos modificados em cada formulário se desejar. Nós fizemos :
<ul>
	<li>Padrão para a <b><i>Caixa de Texto</i></b> : Este é o tamanho da que a Caixa de Texto irá ter na tela</li>
	<li>Padrão máximo para o comprimento da <b><i>Caixa de Texto</i></b> : Este é o tamanho máximo do valor a ser colocado na Caixa de Texto</li>
	<li>Padrão de altura para as <b><i>Áreas de Texto</i></b> : Esta é a altura para as Áreas de Texto</li>
	<li>Padrão de colunas para as <b><i>Áreas de Texto</i></b> : Esta é a coluna da Área de Texto</li>
	<li>Padrão de tamanho para o <b><i>recebimento de arquivo</i></b> (em Kb.) : Este é o tamanho máximo do arquivo que poderá ser enviado nos e-mails</li>
	<li>Delimitador para configurar a <b><i>Caixa de verificação</i></b> e os <b><i>Botões de Rádio</i></b> : Este é um limitador para a separação entre a Caixa de verificação e os Botões de Rádio, este poderá ter espaços em branco ou quebras de linhas</li>");

define("_DOC_BLGR","Esta parte permite o gerenciamento das <b><i>permissões</i></b> dos <i><b>Grupos e Blocos</i></b> deste módulo
<ul>
	<li>A primeira parte será usada para controlar diretamente os blocos deste módulo, e não no módulo do sistema</li>
	<li>A segunda parte permite o gerenciamento dos formulários e permissões dos blocos por grupos xoops (webmasters, usuários, anônimos, etc)</li>");

define("_DOC_MOD_GESFORM","Gerenciamento de Formulários");
define("_DOC_CREAT_GESFORM","Criar um Formulário");
define("_DOC_CREAT","Antes de usar um formulário, você criar isto. Aqui temos todos os parametros :<ul>
	<li>Título do Form, com a possibilidade de ser mostrado ou não</li>
	<li>Imagem do Form, com a possibilidade de mostrar ou não</li>
	<li>Primeiro elemento para ser mostrado na sua página, título ou imagem, se eles serão mostrados</li>
	<li>Se QCM foi escolhido, este formulário será um QCM e não um form</li>
	<li>Parametros da informação que será mostrada de QCM no e-mail, se escolhido for QCM</li>
	<li>Parametros de E-Mail : </li><ul>
			<li>E-mail</li>
			<li>Grupo</li>
			<li>Enviar para a administração</li>
			<li>Receber os campos preenchidos do form</li>
			<li>Se 'Enviar como admin somente' estiver selecionada, então o formulário será enviado somente ao admin e ao remetente de e-mail quando “receber o formulário preenchido” estiver selecionado. Se não, o e-mail é enviado ao , grupo e aos remetentes se forem selecionados</li>
			</ul>
	<li>URL de retorno após o envio do form, este é o padrão : XOOPS_URL</li>
	<li>Ajuda para o form, mensagem no nome do formulário no bloco usuário</li>
	<li>Texto para o botão de envio, padrão é : Ok</li>
	<li>Elementos para o envio de e-mails</li><ul>
			<li>O nome do remetente, um link do endereço de e-mail com acesso ao perfil do usuário</li>
			<li>Endereço IP</li>
			<li>Navegador Web usado</li>
			</ul>
	<li>Texto de codificação do envio de e-mails</li>
	<li>A gravação dos formulários enviados serã também acumulados na base de dados, para consulta e exportação</li>
	<li>Número de envios por usuário, se escolhido, então o usuário pode somente preencher somente uma vez o formulário, e a seguir, também possibilitará que seja determinado um número de dias entre dois preenchimentos consecutivos, se a primeira caixa for selecionada</li>");

define("_DOC_RENOM_GESFORM","Renomear um form");
define("_DOC_RENOM","Quando um form já estiver criado, será possível renomea-lo tranquilamente.<br />
Você deverá selecionar um formulário e incluir um novo nome na caixa de texto.");

define("_DOC_SUP_GESFORM","Apagar um form");
define("_DOC_SUP","Um formulário poderá ser removido.<br /> Neste caso, o formulário será apagado do banco de dados definitivamente, mas tudo relativo a este form com seus elementos, envios, estatísticas e preferências também.<br />
Você deverá selecionar um formulário, um pedido de confirmação irá aparecer, a seguir, o formulário é apagado após a confirmação.");
 
define("_DOC_MODIF_GESFORM","Modificar os elementos dos formulários");
define("_DOC_MODIF","Para preencher um formulário, deverá conter elementos.<br /> Há dez tipos diferentes de elementos :<ul>
	<li>Caixa de Texto : simples área de texto, somente na linha</li>
	<li>Área de Texto : uma área de texto mas para poucas linhas</li>
	<li>Área de Seleção : simples texto que não poderá ser alterado, apenas informativo</li>
	<li>Caixa de Seleção : lista de escolhas que permite escolhas múltiplas, ou não nas opções</li>
	<li>Caixa de Verificação : a caixa só permite a seleção de um elemento</li>
	<li>Botões de Radio : o mesmo sistema da caixa de verificação</li>
	<li>Botões Sim/Não : 2 botões simples para o certo e errado, verdadeiro ou falso, sim e não</li>
	<li>Data : permite a escolha de uma data em um calendário pequeno</li>
	<li>Linha de separação : Permite separar o form em duas ou mais partes</li>
	<li>Enviar um Arquivo : Permite o envio de um arquivo diretamente no form</li>
	</ul>
	Cada elemento pode ser configurado.<br /> Os parâmetros podem ser diferentes para cada tipo de elemento.<br />
	Há sempre : <ul>
	<li>Nome do subtítulo</li>
	<li>Se o subtítulo for obrigatório ou não</li>
	<li>A ordem, que pode ser modificada na página que lista os elementos, usando setas pequenas, para cima ou para baixo</li>
	</ul>
	Para os outros parâmetros, dependem do tipo de elemento.<br /><br />
	Cada elemento pode ser modificado, apagado ou duplicado. É também possível escolher se o elemento deve ou não ser mostrado.<br />
	Um link permite o acesso direto ao formulário no lado do usuário.");
	
define("_DOC_PARAM_GESFORM","Modificar parametros do Form");
define("_DOC_PARAM","É possível modificar os parâmetros na criação dos formulários.<br />
Você deve selecionar um formulário, e todos os parâmetros ali indicados poderão ser modificados no geral.");

define("_DOC_STAT_GESFORM","Status do Form");
define("_DOC_STAT","O status do formulário define se o formulário está disponível ou não no lado do usuário.<br />
Ativado, é visível, desativado, ele é invisível mas não é apagado.");

define("_DOC_PERM_GESFORM","Permissões");
define("_DOC_PERM","É possível dar permissões a cada formulário, a cada grupo, Webmasters, usuários registados, Anônimos e outros que você criar.<br />
Se as permissões não forem dadas, os formulários não serão visíveis. Isso porque, imediatamente depois da criação de um formulário novo, é necessário ir à página de permissões.<br />
Uma caixa de verificação contém “todos os” links para as permissões em todos os formulários e para cada grupo.<br />
As permissões podem sempre ser modificadas a qualquer momento.");

define("_DOC_UTIL_GESFORM","Do Lado do usuário");
define("_DOC_UTIL","No lado do usuário, você irá precisar somente dar um clique no nome de um formulário no bloco.<br />
Uma mensagem da ajuda em cada link do formulário do usuário para encontrar facilmente as dicas e detalhes.<br />
Então, o formulário é mostrado, e o usuário somente precisa preencher o formulário e dar um clique no botão de envio.");

define("_DOC_MOD_CONSULT","Consutar um Form");
define("_DOC_CONS_CONSULT","Consultar");
define("_DOC_CONSULT","Quando um formulário é enviado, ele poderá ser gravado.<br /> Então, é possível consultar todos os envios para cada formulário.<br />
Você deve selecionar um formulário. Se não contiver nenhum registro, uma mensagem impede o usuário, outro, exposições de uma página uma lista de todos os sendings .
(para uma QCM, você pode ver nesta página uma boa média das respostas desta QCM.)<br />
É possível requisitar os envios pela data ou pelo usuário. Então, você tem que escolher um que melhor se ajuste a sua necessidade.<br />
Então, você pode observar campos de todo o formulário, e os valores enviados pelo usuário.<br />
para uma QCM, nós podemos ver também as boas respostas, e as respostas totalizadas.<br />
Um link para o perfil do usuário irá aparecer nesta página.<br />
Cada um envio poderá também ser apagado, e claro, também será possível apagar todos os enviso de um formulário.");
define("_DOC_FORM_CONSULT","Formulário");
define("_DOC_QCM_CONSULT","QCM");

define("_DOC_STAT_CONSULT","Estatísticas");
define("_DOC_STATI","Estatísticas só estarão disponíveis nos formulários de QCM.<br />
Nós encontramos as respostas preenchidas nos formulários de QCM nas caixas de verificação, teclas seletas, botões de rádio e botões de sim/não.<br />
Nós encontramos as porcentagens em respostas e o número total destas respostas.<br />
para uma QCM, nós podemos encontrar os resultados somente para as respostas boas e a porcentagem de sucesso.");

define("_DOC_MOD_EXPORT","Exportar Form");
define("_DOC_EXP_EXPORT","Exportar");
define("_DOC_EXPORT","Com esta opção extra, é possível observar os envios do formulário.<br />
Você deve selecionar um formulário na lista.<br />
Então, o formulário é exportado. Uma mensagem irá informar ao usuário que a operação foi realizada com sucesso.<br />
A lista dos formulários aparece com um link para o arquivo criado no formulário exportado.<br /><br />
Os envios do formulário serão exportados no formato CSV, no endereço www/uploads/form.csv.<br />
em um arquivo, sendo que os dados serão seárados por ';'.<br />
Este formato é compatível com o Excel por exemplo.");

define("_DOC_MOD_MENU","Gerenciamento do Menu");
define("_DOC_MENU_MENU","Menu");

define("_DOC_MENU","Quando um formulário novo é criado, um elemento no menu será criado também.<br />
Este menu corresponde aos elementos visíveis no lado do usuário.<br />
É possível mudar sua ordem, usando setas para cima e para baixo em cada elemento.<br />
Com um clique na URL, você pode acessar o formulário pelo lado do usuário.<br />
É possível ativar ou desativar cada elemento, para torna-lo visível ou não.<br />
Cada elemento pode ser modificado.<br />
Então, você pode modificar : <ul>
	<li>A posição do elemento</li>
	<li>O nome</li>
	<li>O posicionamento a esquerdo, ao centro ou a direita</li>
	<li>A fonte, normal or bold</li>
	<li>Acesso a URL do Form</li>
	<li>Margem do Topo</li>
	<li>Magem dos botões</li>
	<li>Status, se ativo ou inativo</li>");

define("_DOC_MOD_DIV","Outros");
define("_DOC_SERV_DIV","Informações do Servidor");
define("_DOC_ABOUT_DIV","Sobre");

define("_DOC_SERV","Esta página indica as informações do servidor.<br />
Indica a versão e o Charset de usuário no Apache que estão autorizados/liberados.<br />
Então, mostrará a versão e a sustentação da biblioteca.<br />
Então, você poderá observar um pouco da informações de configuração.");

define("_DOC_ABOUT","Nesta página, você poderá procurar as informações sobre os desenvolvedores do módulo.<br />
Há os desenvolvedores conhecidos.<br />
Então, há o status do módulo, Link para o site de suporte, mas também tem uma página para relatar um erro ou para sugerir novas funções.<br />
Então, há o disclaimer para o módulo.");

define("_DOC_MOD_RECO","Recomendações");
define("_DOC_RECO","Os vários testes que formam feitos, mostram um desempenho melhor se usado com Firefox<br />
A exposição com o Internet Explorer é a mesma exceto no bloco de usuário, a ajuda não aparece nos formulários.<br /><br />
Se você quiser fazer uma instalação nova ou uma atualização deste módulo de formulário, por favor, não esqueça de fazer uma cópia de todos os arquivos e também da sua base de dados. Testar a sua atualização antes em um clone do seu site em localhost é extremamente recomendável. É certo que a instalação de um módulo é uma operação considerada muito simples, mas há muitas dependências entre o xoops e o formulaire. Assim é necessário ter o maior cuidado com o seu Website de produção.");

define("_DOC_MENU_INSTALL","Instalação");
define("_DOC_MENU_CONFIG","Configuração");
define("_DOC_MENU_PREF","Preferências");
define("_DOC_MENU_BLGR","Blocos e Grupos");
define("_DOC_MENU_GESFORM","Gerência de Formulários");
define("_DOC_MENU_CREATFORM","Criando Formulários");
define("_DOC_MENU_RENFORM","Renomear um form");
define("_DOC_MENU_SUPFORM","Apagar um form");
define("_DOC_MENU_MODFORM","Modificar um elemento");
define("_DOC_MENU_MODPFORM","Modificar os parametros do form");
define("_DOC_MENU_STAT","Status");
define("_DOC_MENU_PERM","Permissões");
define("_DOC_MENU_USER","O lado do Usuário");
define("_DOC_MENU_CONS","Consultar");
define("_DOC_MENU_EXP","Exportar");
define("_DOC_MENU_MEN","Menu");
define("_DOC_MENU_DIV","Outros");
define("_DOC_MENU_REC","Recomendações");
define("_DOC_MENU_STATI","Estatísticas");
?>