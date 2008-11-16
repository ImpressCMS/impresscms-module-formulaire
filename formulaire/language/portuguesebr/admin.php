<?php
/**
* Formulaire - a multicategory forms with management, e-mail, stats, enquires customizeds
*
* File: language/portuguesebr/admin.php
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
* @translation	v.3.30 Frodobr - frodoxbr@gmail.com and mauricio medeiros xoopstotal@gmail.com / GibaPhp - gibaphp.xoopstotal@gmail.com - http://www.xoopstotal.com.br - continuação... 3.40
* @revision  	??????????
*/

define("_AM_SAVE","Ok"); // FrodoBr
define("_AM_COPIED","%s cópia");
define("_AM_DBUPDATED","Database atualizado com sucesso!");
define("_AM_ELE_CREATE","Criar elementos do formulário : ");
define("_AM_ELE_EDIT","Editar elementos do formulário: %s");
define("_AM_FORMU","Formulário ");
define("_AM_FORM_REQ","Resultado n° : ");
define("_AM_REQ","Resultados do módulo de formulário : ");
define("_AM_SEPAR",'{nulo}');
define("_AM_ELE_FORM","Elementos do formulário");
define("_AM_PARA_FORM","Parametros do formulário");

define("_AM_ELE_CAPTION","Título do campo");
define("_AM_ELE_CAPTION2","Título");
define("_AM_ELE_CAPTION_DESC","<br /></b>{nulo} permite que você não mostre o nome do elemento");
define("_AM_ELE_DEFAULT","Valor padrão");
define("_AM_ELE_DETAIL","Detalhe");
define("_AM_ELE_REQ","Requerido");
define("_AM_ELE_ORDER","Ordem");
define("_AM_ELE_DISPLAY","Exibir");
define("_AM_ELE_COLOR","Côr"); // FrodoBr

define("_AM_WME","Seja cuidadoso, se você adicionar ou deletar elementos, você deve apagar os envios anteriores antes que alguém faça um novo envio, se você não quiser perder informações");
define("_AM_WQCM","Seja cuidadoso, os valores padrão são as respostas 'boas' para o QCM"); // FrodoBr - não entendi QCM rs :-D
define("_AM_ELE_TEXT","Caixa de texto");
define("_AM_ELE_TEXT_DESC","{UNAME} irá exibir o nome do usuário;<br />{EMAIL} exibirá o email");
define("_AM_ELE_TAREA","Área de texto");
define("_AM_ELE_MODIF","Área de texto que não pode ser modificada");
define("_AM_ELE_SELECT","Caixa de seleção");
define("_AM_ELE_CHECK","Caixas de verificação"); // FrodoBr
define("_AM_ELE_RADIO","Botões de rádio");
define("_AM_ELE_YN","Botões de rádio para Sim/Não"); // FrodoBr
define("_AM_ELE_DATE","Data");
define("_AM_ELE_REQ_USELESS","Não é necessário para caixas de seleção, caixas de verificação ou botões de rádio");
define("_AM_ELE_SEP","Quebra de linha");
define("_AM_ELE_NOM_SEP","Nome da quebra de linha");
define("_AM_ELE_UPLOAD","Arquivo");
define("_AM_ELE_MAIL","Selecionar endereço de email");
//define("_AM_ELE_MAILU","Selecionar endereço de email único"); // FrodoBr
define("_AM_ELE_CLR","com a côr");

define("_AM_ELE_SIZE","Tamanho");
define("_AM_ELE_MAX_LENGTH","Tamanho máximo"); // FrodoBr
define("_AM_ELE_ROWS","Linhas");
define("_AM_ELE_COLS","Colunas");
define("_AM_ELE_OPT","Opções");
define("_AM_ELE_OPT_DESC","Marque as caixas de verificação para definir valores padrão"); // FrodoBr
define("_AM_ELE_OPT_DESC1","<br />Somente a primeira caixa de verificação marcada será usada se múltiplas escolhas não forem permitidas"); // FrodoBr
define("_AM_ELE_OPT_DESC2","Selecione o valor padrão marcando os botões de rádio");
define("_AM_ELE_ADD_OPT","Adiciona %s opções");
define("_AM_ELE_ADD_OPT_SUBMIT","Adiciona");
define("_AM_ELE_SELECTED","Selecionado");
define("_AM_ELE_CHECKED","Marcado");
define("_AM_ELE_MULTIPLE","Permitir múltiplas escolhas");
define("_AM_ELE_TYPE","Mostrar a quebra como");
define("_AM_ELE_GRAS","Negrito"); // "mauricio" = em francês isso é "gordo" (???) alguma sugestão? ;-) // FrodoBr - cooquei Cheio sem ter certeza, rs :-D - Giba (Coloquei negrito) lol
define("_AM_ELE_RGE","Vermelho");
define("_AM_ELE_CTRE","Centro");
define("_AM_ELE_ITALIQ","Itálico");
define("_AM_ELE_BOLD","Negrito");
define("_AM_ELE_SOUL","Sublinhado");
define("_AM_ELE_BLEU","Azul");
define("_AM_ELE_FICH",'Arquivo');
define("_AM_ELE_TAILLEFICH","Tamanho máximo do arquivo");
define("_AM_ELE_PDS","pesos");
define("_AM_ELE_TYPEMIME",'Tipos permitidos');

define("_AM_ELE_SELECT_NONE","Nenhum elemento selecionado.");
define("_AM_ELE_CONFIRM_DELETE","Você tem certeza de que deseja apagar este elemento?");

define("_AM_TITLE","Administração do menu");
define("_AM_ID","ID");
define("_AM_POS","Posição");
define("_AM_POS_SHORT","Pos.");
define("_AM_INDENT","indentar à esquerda");
define("_AM_INDENT_SHORT","Ind.");
define("_AM_ITEMNAME","Nome");
define("_AM_ITEMURL","URL");
define("_AM_STATUS","Status");
define("_AM_ACTION","Ação");
define("_AM_ACTIVE","ativo");
define("_AM_INACTIVE","inativo");
define("_AM_BOLD","negrito");
define("_AM_NORMAL","normal");
define("_AM_MARGINBOTTOM","Margem inferior");
define("_AM_MARGIN_BOTTOMSHORT","mrg. inf.");
define("_AM_MARGINTOP","Margem superior");
define("_AM_MARGIN_TOPSHORT","mrg. sup");
define("_AM_EDIT","Editar");
define("_AM_DELETE","Apagar");
define("_AM_ADDMENUITEM","Adicionar item ao menu");
define("_AM_CHANGEMENUITEM","Modificar/apagar item do menu");
define("_AM_SITENAMET","Nome do site:");
define("_AM_URLT","URL:");
define("_AM_FONT","Fonte:");
define("_AM_STATUST","Status:");
define("_AM_MEMBERSONLY","Usuários autorizados");
define("_AM_MEMBERSONLY_SHORT","Reg.<br>apenas");
define("_AM_MEMBERS","membros apenas");
define("_AM_ALL","todos os usuários");
define("_AM_ADD","Adicionar");
define("_AM_EDITMENUITEM","Editar item do menu");
define("_AM_DELETEMENUITEM","Apagar item do menu");
define("_AM_SAVECHANG","Salvar mudanças");
define("_AM_WANTDEL","Você realmente deseja apagar este ítem do menu?");
define("_AM_YES","Sim");
define("_AM_NO","Não");
define("_AM_FORMULAIREMENUSTYLE","Estilo MyMenu");
define("_AM_MAINMENUSTYLE","Estilo MainMenu");
define("_AM_SUBMITBY"," enviado por ");

define("_AM_VERSION","3.4.0");
define("_AM_REORD","Nova ordem");
define("_AM_SEE_FORM","Ir para o formulário");
define("_AM_SEE_FORM_TEXT","Preencher o formulário como se fosse o usuário");  // FrodoBr
define("_AM_DELETE_FORM","Tem certeza de que de deseja apagar este formulário?");

define("_AM_CHANGE_STATUS","Mudar o status do formulário");
define("_AM_CHANGE_STATUS_TEXT","Ativa ou desativa Formulário");  // FrodoBr
define("_AM_CHANGE_STATUS_ACTIVE","Permitir ativar um formulário");
define("_AM_CHANGE_STATUS_DESACTIVE","Permitir desativar um formulário");
define("_AM_EDIT_MENU","Mudar os parametros");
define("_AM_EDIT_MENU_TEXT","Modificar Parâmetros deste Formulário");

define("_AM_EXPORT","Exportar"); 
define("_AM_EXPORT_TEXT","Exportar para csv");  // FrodoBr

define("_AM_CREATE","Criar");
define("_AM_CREATE_TEXT","Criar um formulário");
define("_AM_CLONE","Clonar"); // FrodoBr
define("_AM_CLONE_TEXT","Clonar o formulário com o menu"); // FrodoBr
define("_AM_CSV","Exportar");
define("_AM_CSV_TEXT","Exportar um formulário para CSV");
define("_AM_MODPERM","Permissões");
define("_AM_MODPERM_TEXT","Modificar as permissões do formulário");
define("_AM_REN","Renomear");
define("_AM_REN_TEXT","Renomear o formulário");
define("_AM_SUP","Apagar");
define("_AM_SUP_TEXT","Seja cuidadoso, este formulário será removido");
define("_AM_MODIF","Modificar");
define("_AM_MODIF_TEXT"," Modifica o formulário"); // FrodoBr
define("_AM_LISTE","Lista de envios");
define("_AM_LISTE_TEXT","Lista de todos os envios do formulário");
define("_AM_DEST","Parametros do formulário");
define("_AM_DEST_TEXT","Modificar os parametros do formulario");
define("_AM_CONSULT","Consultar");

define("_AM_SAVE_AS","Salvar alvo como");
define("_AM_SAVE_AS_TEXT","Clique com o botão direito e salve o alvo do link");

define("_AM_SUP_ONE","Apagar este envio");
define("_AM_SUP_ALL","Apagar todos os envios para este formulário");
define("_AM_STATIS","Estatísticas");
define("_AM_STAT_TEXT","Mostras as estatísticas para botões de sim/não, radio buttons e checkboxes");

define("_AM_STATISTICS","Estatísticas do formulário : ");
define("_AM_PRINT","Imprimir as estatísticas");

define("_AM_TITPERM","Permissões de acesso para os formulários");
define("_AM_CATPERM","Permissões das categorias"); 

define("_AM_ED","Editar este elemento");
define("_AM_ED_TEXT","Modificar os parametros deste elemento");
define("_AM_CLO","Duplicar este elemento");
define("_AM_CLO_TEXT","Fazer uma cópia deste elemento");
define("_AM_SUPE","Apagar este elemento");
define("_AM_SUPE_TEXT","Apagar este elemento do Formulário"); // FrodoBr

define("_AM_INDEX","Indice");
define("_AM_FORMS","Modificar");
define("_AM_PREF","Preferências");
define("_AM_MENU","Menu");
define("_AM_ABOUT","Sobre");
define("_AM_HELP","Ajuda");
define("_AM_SERV","Info do servidor");
define("_AM_USER_SIDE","Visão do usuário");
define("_AM_MODADMIN","Admin");
define("_AM_BLOCKSANDGROUPS","Blocos e grupos");

define("_AM_BLOCKS","Gerenciamento de blocos");
define("_AM_BLOCKSTXT","Este módulo tem os seguintes blocos, que você pode configurar por aqui ou pela administração do sistema.");
define("_AM_POSITION","Posição");
define("_AM_GROUPS","Gerenciamento de grupos");
define("_AM_GROUPSINFO","Configure as permissões de cada grupo para o módulo e os blocos");

define("_AM_BY","Por");

define("_AM_MENUMODIFY","Modificar elementos do menu"); // FrodoBr
define("_AM_MENUADD","Adicionar elemento"); // FrodoBr
define("_AM_MENUEDIT","Modificar elemento"); // FrodoBr

define("_AM_NOFORM","Nenhum formulário existente");

define('_MI_SF_AUTHOR_INFO', "Desenvolvedores"); // FrodoBr
define('_MI_SF_DEVELOPER_LEAD', "Principais"); // FrodoBr
define('_MI_SF_DEVELOPER_CONTRIBUTOR', "Colaborador(es)");
define('_MI_SF_DEVELOPER_WEBSITE', "Website");
define('_MI_SF_DEVELOPER_EMAIL', "Email");
define('_MI_SF_DEVELOPER_CREDITS', "Agradecimentos especiais");
define('_MI_SF_DEMO_SITE', "Frxoops Demo Site");
define('_MI_SF_MODULE_INFO', "Informações sobre o desenvolvimento de módulos"); // FrodoBr
define('_MI_SF_MODULE_STATUS', "Status");
define('_MI_SF_MODULE_RELEASE_DATE', "Data de lançamento");
define('_MI_SF_MODULE_DEMO', "Demo Site");
define('_MI_SF_MODULE_SUPPORT', "Site oficial de Suporte"); // FrodoBr
define('_MI_SF_MODULE_BUG', "Avise-nos se encontrar algum erro neste módulo"); // FrodoBr
define('_MI_SF_MODULE_FEATURE', "Sugerir um novo recurso para este módulo"); // FrodoBr
define('_MI_SF_MODULE_DISCLAIMER', "Disclaimer");
define('_MI_SF_AUTHOR_WORD', "Palavra do autor");
define('_MI_SF_VERSION_HISTORY', "Histórico das versões");

define('_AM_SUBMIT_BUG', "Enviar uma notificação de bug / erro"); // FrodoBr
define('_AM_SUGGEST', "Solicitar um novo recurso"); // FrodoBr

define("_AM_NBANSWER","Número de respostas corretas");
define("_AM_AVG","Média : ");
define("_AM_PERCR","Porcentagem de sucesso : ");

define("_AM_MEG","Recomendações");

define('_AM_WARNMAIL','Seja cuidadoso, o formato do campo deve ser "nome - email@email.com"');

?>