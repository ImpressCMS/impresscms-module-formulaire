<?php
/**
* Formulaire - a multicategory forms with management, e-mail, stats, enquires customizeds
*
* File: language/portuguesebr/helpdoc.php
*
* @copyright		http://www.xoops.org/ The XOOPS Project
* @copyright		XOOPS_copyrights.txt
* @copyright		http://www.impresscms.org/ The ImpressCMS Project
* @license		           http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* ----------------------------------------------------------------------------------------------------------
* @package		Formulaire 
* @since			3.30
* @author		Philou
* @version		$Id$
* ----------------------------------------------------------------------------------------------------------
* @translation	Frodobr - frodoxbr@gmail.com  / GibaPhp
* @revision  	??????????
*/


define("_DOC_MOD_INSTALL","Instala��o do M�dulo"); // FrodoBr
define("_DOC_PRE_INSTALL","Pr�-requisitos"); // FrodoBr
define("_DOC_NEW_INSTALL","Nova instala��o");  // FrodoBr
define("_DOC_MAJ_INSTALL","Atualizando de usa vers�o anterior"); // FrodoBr
define("_DOC_PROC_INSTALL","Procedimento de Instala��o"); // FrodoBr

define("_DOC_PRE","Para usar o m�dulo de formul�rios � necess�rio :
<ul>
	<li>A vers�o do Xoops precisa ser maior do que a 2.0.7. Se mais recente deve trabalhar melhor.</li>
	<li>Voc� precisar� dar as devidas permiss�es (chmod 777) no diret�rio de upload do m�dulo.</li>
	<li>O Xoops precisa estar configurado antes para enviar os emails.</li>");

define("_DOC_INSTALL","Voc� n�o tem formulaire antigo ou voc� n�o est� migrando de uma base antiga ? veja este processo :
<ul>
  <li>Baixando o m�dulo</li>
  <li>Verifique se voc� j� tem o m�dulo do formulaire no sub-diret�rio do seu xoops ou local. (Se tiver, apague a pasta neste caso)</li>
  <li>Descompactar o arquivo que cont�m o m�dulo em algum local e envie o diret�rio formulaire para dentro da pasta modules do seu website</li>
  <li>Para instalar o m�dulo � s� voc� entrar na administra��o de m�dulo e seguir a sequ�ncia normal de qualquer instala��o de m�dulo</li>
  <li>notice : Voc� apenas instalou o m�dulo e eles ainda n�o estar�o acess�veis pelos usu�rio no menu principal do m�dulo</li>");

define("_DOC_MAJ","Na vers�o 3, em virtude de diversas modifica��es, n�o est� sendo poss�vel a migra��o e atualiza��o de vers�o anteriores.<br />
 Isto �, voc� ir� precisar fazer a desinstala��o do seu m�dulo de formulaire e instalar esta nova vers�o para trabalhar.");
define("_DOC_PROC","Ap�s a instala��o do M�dulo : <ul>
<li>Ativar os blocos no setor de 'Blocos e Grupos' imediatamente ap�s a instala��o</li>
<li>Durante a instala��o, um formul�rio de demonstra��o ser� criado, os usu�rios possuem permiss�es para utiliza-lo se estiverem vis�veis no grupo determinado</li>
<li>Se voc� localizou esta parte, a demonstra��o foi instalada e poder� ser configurada para seus testes, mas se voc� estiver em um site externo, on-line, voc� poder� ir� precisar modificar o acesso desta url pela �rea de administra��o</li>
<li>O form estar� agora pronto e a instala��o terminada</li>");

define("_DOC_MOD_CONFIG","Configura��o do M�dulo");
define("_DOC_PREF_CONFIG","Prefer�ncias");
define("_DOC_BLGR_CONFIG","Blocos e Grupos");

define("_DOC_PREF","Estes par�metros ser�o v�lidos para todo este m�dulo, seus novos formul�rios, e tamb�m poder�o ter seus elementos modificados em cada formul�rio se desejar. N�s fizemos :
<ul>
	<li>Padr�o para a <b><i>Caixa de Texto</i></b> : Este � o tamanho da que a Caixa de Texto ir� ter na tela</li>
	<li>Padr�o m�ximo para o comprimento da <b><i>Caixa de Texto</i></b> : Este � o tamanho m�ximo do valor a ser colocado na Caixa de Texto</li>
	<li>Padr�o de altura para as <b><i>�reas de Texto</i></b> : Esta � a altura para as �reas de Texto</li>
	<li>Padr�o de colunas para as <b><i>�reas de Texto</i></b> : Esta � a coluna da �rea de Texto</li>
	<li>Padr�o de tamanho para o <b><i>recebimento de arquivo</i></b> (em Kb.) : Este � o tamanho m�ximo do arquivo que poder� ser enviado nos e-mails</li>
	<li>Delimitador para configurar a <b><i>Caixa de verifica��o</i></b> e os <b><i>Bot�es de R�dio</i></b> : Este � um limitador para a separa��o entre a Caixa de verifica��o e os Bot�es de R�dio, este poder� ter espa�os em branco ou quebras de linhas</li>");

define("_DOC_BLGR","Esta parte permite o gerenciamento das <b><i>permiss�es</i></b> dos <i><b>Grupos e Blocos</i></b> deste m�dulo
<ul>
	<li>A primeira parte ser� usada para controlar diretamente os blocos deste m�dulo, e n�o no m�dulo do sistema</li>
	<li>A segunda parte permite o gerenciamento dos formul�rios e permiss�es dos blocos por grupos xoops (webmasters, usu�rios, an�nimos, etc)</li>");

define("_DOC_MOD_GESFORM","Gerenciamento de Formul�rios");
define("_DOC_CREAT_GESFORM","Criar um Formul�rio");
define("_DOC_CREAT","Antes de usar um formul�rio, voc� criar isto. Aqui temos todos os parametros :<ul>
	<li>T�tulo do Form, com a possibilidade de ser mostrado ou n�o</li>
	<li>Imagem do Form, com a possibilidade de mostrar ou n�o</li>
	<li>Primeiro elemento para ser mostrado na sua p�gina, t�tulo ou imagem, se eles ser�o mostrados</li>
	<li>Se QCM foi escolhido, este formul�rio ser� um QCM e n�o um form</li>
	<li>Parametros da informa��o que ser� mostrada de QCM no e-mail, se escolhido for QCM</li>
	<li>Parametros de E-Mail : </li><ul>
			<li>E-mail</li>
			<li>Grupo</li>
			<li>Enviar para a administra��o</li>
			<li>Receber os campos preenchidos do form</li>
			<li>Se 'Enviar como admin somente' estiver selecionada, ent�o o formul�rio ser� enviado somente ao admin e ao remetente de e-mail quando �receber o formul�rio preenchido� estiver selecionado. Se n�o, o e-mail � enviado ao , grupo e aos remetentes se forem selecionados</li>
			</ul>
	<li>URL de retorno ap�s o envio do form, este � o padr�o : XOOPS_URL</li>
	<li>Ajuda para o form, mensagem no nome do formul�rio no bloco usu�rio</li>
	<li>Texto para o bot�o de envio, padr�o � : Ok</li>
	<li>Elementos para o envio de e-mails</li><ul>
			<li>O nome do remetente, um link do endere�o de e-mail com acesso ao perfil do usu�rio</li>
			<li>Endere�o IP</li>
			<li>Navegador Web usado</li>
			</ul>
	<li>Texto de codifica��o do envio de e-mails</li>
	<li>A grava��o dos formul�rios enviados ser� tamb�m acumulados na base de dados, para consulta e exporta��o</li>
	<li>N�mero de envios por usu�rio, se escolhido, ent�o o usu�rio pode somente preencher somente uma vez o formul�rio, e a seguir, tamb�m possibilitar� que seja determinado um n�mero de dias entre dois preenchimentos consecutivos, se a primeira caixa for selecionada</li>");

define("_DOC_RENOM_GESFORM","Renomear um form");
define("_DOC_RENOM","Quando um form j� estiver criado, ser� poss�vel renomea-lo tranquilamente.<br />
Voc� dever� selecionar um formul�rio e incluir um novo nome na caixa de texto.");

define("_DOC_SUP_GESFORM","Apagar um form");
define("_DOC_SUP","Um formul�rio poder� ser removido.<br /> Neste caso, o formul�rio ser� apagado do banco de dados definitivamente, mas tudo relativo a este form com seus elementos, envios, estat�sticas e prefer�ncias tamb�m.<br />
Voc� dever� selecionar um formul�rio, um pedido de confirma��o ir� aparecer, a seguir, o formul�rio � apagado ap�s a confirma��o.");
 
define("_DOC_MODIF_GESFORM","Modificar os elementos dos formul�rios");
define("_DOC_MODIF","Para preencher um formul�rio, dever� conter elementos.<br /> H� dez tipos diferentes de elementos :<ul>
	<li>Caixa de Texto : simples �rea de texto, somente na linha</li>
	<li>�rea de Texto : uma �rea de texto mas para poucas linhas</li>
	<li>�rea de Sele��o : simples texto que n�o poder� ser alterado, apenas informativo</li>
	<li>Caixa de Sele��o : lista de escolhas que permite escolhas m�ltiplas, ou n�o nas op��es</li>
	<li>Caixa de Verifica��o : a caixa s� permite a sele��o de um elemento</li>
	<li>Bot�es de Radio : o mesmo sistema da caixa de verifica��o</li>
	<li>Bot�es Sim/N�o : 2 bot�es simples para o certo e errado, verdadeiro ou falso, sim e n�o</li>
	<li>Data : permite a escolha de uma data em um calend�rio pequeno</li>
	<li>Linha de separa��o : Permite separar o form em duas ou mais partes</li>
	<li>Enviar um Arquivo : Permite o envio de um arquivo diretamente no form</li>
	</ul>
	Cada elemento pode ser configurado.<br /> Os par�metros podem ser diferentes para cada tipo de elemento.<br />
	H� sempre : <ul>
	<li>Nome do subt�tulo</li>
	<li>Se o subt�tulo for obrigat�rio ou n�o</li>
	<li>A ordem, que pode ser modificada na p�gina que lista os elementos, usando setas pequenas, para cima ou para baixo</li>
	</ul>
	Para os outros par�metros, dependem do tipo de elemento.<br /><br />
	Cada elemento pode ser modificado, apagado ou duplicado. � tamb�m poss�vel escolher se o elemento deve ou n�o ser mostrado.<br />
	Um link permite o acesso direto ao formul�rio no lado do usu�rio.");
	
define("_DOC_PARAM_GESFORM","Modificar parametros do Form");
define("_DOC_PARAM","� poss�vel modificar os par�metros na cria��o dos formul�rios.<br />
Voc� deve selecionar um formul�rio, e todos os par�metros ali indicados poder�o ser modificados no geral.");

define("_DOC_STAT_GESFORM","Status do Form");
define("_DOC_STAT","O status do formul�rio define se o formul�rio est� dispon�vel ou n�o no lado do usu�rio.<br />
Ativado, � vis�vel, desativado, ele � invis�vel mas n�o � apagado.");

define("_DOC_PERM_GESFORM","Permiss�es");
define("_DOC_PERM","� poss�vel dar permiss�es a cada formul�rio, a cada grupo, Webmasters, usu�rios registados, An�nimos e outros que voc� criar.<br />
Se as permiss�es n�o forem dadas, os formul�rios n�o ser�o vis�veis. Isso porque, imediatamente depois da cria��o de um formul�rio novo, � necess�rio ir � p�gina de permiss�es.<br />
Uma caixa de verifica��o cont�m �todos os� links para as permiss�es em todos os formul�rios e para cada grupo.<br />
As permiss�es podem sempre ser modificadas a qualquer momento.");

define("_DOC_UTIL_GESFORM","Do Lado do usu�rio");
define("_DOC_UTIL","No lado do usu�rio, voc� ir� precisar somente dar um clique no nome de um formul�rio no bloco.<br />
Uma mensagem da ajuda em cada link do formul�rio do usu�rio para encontrar facilmente as dicas e detalhes.<br />
Ent�o, o formul�rio � mostrado, e o usu�rio somente precisa preencher o formul�rio e dar um clique no bot�o de envio.");

define("_DOC_MOD_CONSULT","Consutar um Form");
define("_DOC_CONS_CONSULT","Consultar");
define("_DOC_CONSULT","Quando um formul�rio � enviado, ele poder� ser gravado.<br /> Ent�o, � poss�vel consultar todos os envios para cada formul�rio.<br />
Voc� deve selecionar um formul�rio. Se n�o contiver nenhum registro, uma mensagem impede o usu�rio, outro, exposi��es de uma p�gina uma lista de todos os sendings .
(para uma QCM, voc� pode ver nesta p�gina uma boa m�dia das respostas desta QCM.)<br />
� poss�vel requisitar os envios pela data ou pelo usu�rio. Ent�o, voc� tem que escolher um que melhor se ajuste a sua necessidade.<br />
Ent�o, voc� pode observar campos de todo o formul�rio, e os valores enviados pelo usu�rio.<br />
para uma QCM, n�s podemos ver tamb�m as boas respostas, e as respostas totalizadas.<br />
Um link para o perfil do usu�rio ir� aparecer nesta p�gina.<br />
Cada um envio poder� tamb�m ser apagado, e claro, tamb�m ser� poss�vel apagar todos os enviso de um formul�rio.");
define("_DOC_FORM_CONSULT","Formul�rio");
define("_DOC_QCM_CONSULT","QCM");

define("_DOC_STAT_CONSULT","Estat�sticas");
define("_DOC_STATI","Estat�sticas s� estar�o dispon�veis nos formul�rios de QCM.<br />
N�s encontramos as respostas preenchidas nos formul�rios de QCM nas caixas de verifica��o, teclas seletas, bot�es de r�dio e bot�es de sim/n�o.<br />
N�s encontramos as porcentagens em respostas e o n�mero total destas respostas.<br />
para uma QCM, n�s podemos encontrar os resultados somente para as respostas boas e a porcentagem de sucesso.");

define("_DOC_MOD_EXPORT","Exportar Form");
define("_DOC_EXP_EXPORT","Exportar");
define("_DOC_EXPORT","Com esta op��o extra, � poss�vel observar os envios do formul�rio.<br />
Voc� deve selecionar um formul�rio na lista.<br />
Ent�o, o formul�rio � exportado. Uma mensagem ir� informar ao usu�rio que a opera��o foi realizada com sucesso.<br />
A lista dos formul�rios aparece com um link para o arquivo criado no formul�rio exportado.<br /><br />
Os envios do formul�rio ser�o exportados no formato CSV, no endere�o www/uploads/form.csv.<br />
em um arquivo, sendo que os dados ser�o se�rados por ';'.<br />
Este formato � compat�vel com o Excel por exemplo.");

define("_DOC_MOD_MENU","Gerenciamento do Menu");
define("_DOC_MENU_MENU","Menu");

define("_DOC_MENU","Quando um formul�rio novo � criado, um elemento no menu ser� criado tamb�m.<br />
Este menu corresponde aos elementos vis�veis no lado do usu�rio.<br />
� poss�vel mudar sua ordem, usando setas para cima e para baixo em cada elemento.<br />
Com um clique na URL, voc� pode acessar o formul�rio pelo lado do usu�rio.<br />
� poss�vel ativar ou desativar cada elemento, para torna-lo vis�vel ou n�o.<br />
Cada elemento pode ser modificado.<br />
Ent�o, voc� pode modificar : <ul>
	<li>A posi��o do elemento</li>
	<li>O nome</li>
	<li>O posicionamento a esquerdo, ao centro ou a direita</li>
	<li>A fonte, normal or bold</li>
	<li>Acesso a URL do Form</li>
	<li>Margem do Topo</li>
	<li>Magem dos bot�es</li>
	<li>Status, se ativo ou inativo</li>");

define("_DOC_MOD_DIV","Outros");
define("_DOC_SERV_DIV","Informa��es do Servidor");
define("_DOC_ABOUT_DIV","Sobre");

define("_DOC_SERV","Esta p�gina indica as informa��es do servidor.<br />
Indica a vers�o e o Charset de usu�rio no Apache que est�o autorizados/liberados.<br />
Ent�o, mostrar� a vers�o e a sustenta��o da biblioteca.<br />
Ent�o, voc� poder� observar um pouco da informa��es de configura��o.");

define("_DOC_ABOUT","Nesta p�gina, voc� poder� procurar as informa��es sobre os desenvolvedores do m�dulo.<br />
H� os desenvolvedores conhecidos.<br />
Ent�o, h� o status do m�dulo, Link para o site de suporte, mas tamb�m tem uma p�gina para relatar um erro ou para sugerir novas fun��es.<br />
Ent�o, h� o disclaimer para o m�dulo.");

define("_DOC_MOD_RECO","Recomenda��es");
define("_DOC_RECO","Os v�rios testes que formam feitos, mostram um desempenho melhor se usado com Firefox<br />
A exposi��o com o Internet Explorer � a mesma exceto no bloco de usu�rio, a ajuda n�o aparece nos formul�rios.<br /><br />
Se voc� quiser fazer uma instala��o nova ou uma atualiza��o deste m�dulo de formul�rio, por favor, n�o esque�a de fazer uma c�pia de todos os arquivos e tamb�m da sua base de dados. Testar a sua atualiza��o antes em um clone do seu site em localhost � extremamente recomend�vel. � certo que a instala��o de um m�dulo � uma opera��o considerada muito simples, mas h� muitas depend�ncias entre o xoops e o formulaire. Assim � necess�rio ter o maior cuidado com o seu Website de produ��o.");

define("_DOC_MENU_INSTALL","Instala��o");
define("_DOC_MENU_CONFIG","Configura��o");
define("_DOC_MENU_PREF","Prefer�ncias");
define("_DOC_MENU_BLGR","Blocos e Grupos");
define("_DOC_MENU_GESFORM","Ger�ncia de Formul�rios");
define("_DOC_MENU_CREATFORM","Criando Formul�rios");
define("_DOC_MENU_RENFORM","Renomear um form");
define("_DOC_MENU_SUPFORM","Apagar um form");
define("_DOC_MENU_MODFORM","Modificar um elemento");
define("_DOC_MENU_MODPFORM","Modificar os parametros do form");
define("_DOC_MENU_STAT","Status");
define("_DOC_MENU_PERM","Permiss�es");
define("_DOC_MENU_USER","O lado do Usu�rio");
define("_DOC_MENU_CONS","Consultar");
define("_DOC_MENU_EXP","Exportar");
define("_DOC_MENU_MEN","Menu");
define("_DOC_MENU_DIV","Outros");
define("_DOC_MENU_REC","Recomenda��es");
define("_DOC_MENU_STATI","Estat�sticas");
?>