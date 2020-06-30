<?php
/* $Id: galician-utf-8.inc.php,v 1.31 2002/09/23 16:34:01 lem9 Exp $ */

/**
 * Translated by Xosé Calvo <xosecalvo at terra.es>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';

$strAPrimaryKey = 'Adicionouse unha chave primaria a %s';
$strAccessDenied = 'Acceso Negado';
$strAction = 'Acción';
$strAddDeleteColumn = 'Adicionar/Eliminar columnas de campo';
$strAddDeleteRow = 'Adicionar/Eliminar filas de criterios';
$strAddNewField = 'Adicionar un novo campo';
$strAddPriv = 'Adicionar un novo privilexio';
$strAddPrivMessage = 'Privilexio adicionado.';
$strAddSearchConditions = 'Condición da pesquisa (ou sexa, o complemento da cláusula "WHERE"):';
$strAddToIndex = 'Adicionar ao índice &nbsp;%s&nbsp;coluna(s)';
$strAddUser = 'Adicionar un novo usuario';
$strAddUserMessage = 'Usuario adicionado.';
$strAffectedRows = 'Filas que van ser afectadas:';
$strAfter = 'Despois de %s';
$strAfterInsertBack = 'Voltar';
$strAfterInsertNewInsert = 'Inserir un novo rexistro';
$strAll = 'Todos';
$strAllTableSameWidth = 'mostrar todas as tabelas co mesmo ancho?';
$strAlterOrderBy = 'Ordenar a tabela por';
$strAnIndex = 'Adicionouse un índice a %s';
$strAnalyzeTable = 'Analizar a tabela';
$strAnd = 'E';
$strAny = 'Calquer';
$strAnyColumn = 'Calquer columna';
$strAnyDatabase = 'Calquer banco de datos';
$strAnyHost = 'Calquer servidor';
$strAnyTable = 'Calquer tabela';
$strAnyUser = 'Calquer usuario';
$strAscending = 'Ascendente';
$strAtBeginningOfTable = 'No comezo da tabela';
$strAtEndOfTable = 'Ao final da tabela';
$strAttr = 'Atributos';

$strBack = 'Voltar';
$strBeginCut = 'COMEZA O RECORTE';
$strBeginRaw = 'COMEZA O TEXTO SIMPLE ("RAW")';
$strBinary = ' Binario ';
$strBinaryDoNotEdit= ' Binario - non editar ';
$strBookmarkDeleted = 'Eliminouse o marcador.';
$strBookmarkLabel = 'Nome';
$strBookmarkQuery = 'A procura de SQL foi gardada';
$strBookmarkThis = 'Gardar esta procura de SQL';
$strBookmarkView = 'Só visualizar';
$strBrowse = 'Visualizar';
$strBzip = 'comprimido no formato "bzipped"';

$strCantLoadMySQL = 'Non foi posible carregar a extensión do MySQL;<br>comprobe, por favor, a configuración do PHP.';
$strCantLoadRecodeIconv = 'Non se puido carregar iconv ou precísase da extensión recode para a conversión do charset. Configure o php para que se poidan usar estas extensións ou indique que non se use a conversión de charset en phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Non se pode facer que este índice sexa PRIMARIO!';
$strCantUseRecodeIconv = 'Non se puido usar nen iconv nen libiconv nen a función recode_stringf mentres haxa extensións por carregar. Comprobe a súa configuración do php.';
$strCardinality = 'Cardinalidade';
$strCarriage = 'Carácter de retorno: \\r';
$strChange = 'Mudar';
$strChangeDisplay = 'Escolla o campo que se há de mostrar';
$strChangePassword = 'Trocar o contrasinal';
$strCharsetOfFile = 'Conxunto de caracteres do ficheiro:';
$strCheckAll = 'Marcá-los todos';
$strCheckDbPriv = 'Verificar os privilexios do banco de datos';
$strCheckTable = 'Verificar a tabela';
$strChoosePage = 'Escolla unha páxina para modificar';
$strColComFeat = 'Mostrando os comentarios das columnas';
$strColumn = 'Columna';
$strColumnNames = 'Nomes das Columnas';
$strComments = 'Comentarios';
$strCompleteInserts = 'Insercións completas';
$strConfigFileError = 'phpMyAdmin non puido ler o seu ficheiro de configuración<br/>Isto podería deberse a que php atopou un erro nel ou a que php non puido atopar o ficheiro.<br/>Invoque o ficheiro de configuración directamente mediante o vínculo que hai máis abaixo e lea a mensaxe de erro de php que receba. Na maioría dos casos simplesmente faltan unha aspa ou un ponto e vírcula <br/>Se recebe unha páxina en branco é que todo está ben.';
$strConfigureTableCoord = 'Configure as coordenadas da tabela %s';
$strConfirm = 'Está seguro/a?';
$strCookiesRequired = 'A partir de aqui debe permitir cookies.';
$strCopyTable = 'Copiar a tabela a (base_de_datos<b>.</b>tabela):';
$strCopyTableOK = 'Tabela \$table copiada para \$new_name.';
$strCreate = 'Crear';
$strCreateIndex = 'Crear un índice en&nbsp;%s&nbsp;colunas';
$strCreateIndexTopic = 'Crear un novo índice';
$strCreateNewDatabase = 'Crear un novo banco de datos';
$strCreateNewTable = 'Crear unha tabela nova na base de datos %s';
$strCreatePage = 'Crear unha páxina nova';
$strCreatePdfFeat = 'Creación de PDFs';
$strCriteria = 'Criterio';

$strData = 'Datos';
$strDataOnly = 'Só os datos';
$strDatabase = 'Banco de Datos ';
$strDatabaseHasBeenDropped = 'A base de datos %s foi eliminada.';
$strDatabaseWildcard = 'Base de datos (permítese usar os comodíns):';
$strDatabases = 'Bancos de Datos';
$strDatabasesStats = 'Estatísticas dos bancos de datos';
$strDefault = 'Padrón';
$strDelete = 'Eliminar';
$strDeleteFailed = 'Non foi posible eliminar!';
$strDeleteUserMessage = 'Acaba de eliminar o usuario %s.';
$strDeleted = 'Rexistro eliminado';
$strDeletedRows = 'Filas borradas:';
$strDescending = 'Descendente';
$strDisabled = 'Desactivado';
$strDisplay = 'Mostrar';
$strDisplayFeat = 'Mostrar as características';
$strDisplayOrder = 'Mostrar en orde:';
$strDisplayPDF = 'Mostrar o esquema PDF';
$strDoAQuery = 'Faga unha "procura por exemplo" (o comodín é "%")';
$strDoYouReally = 'Seguro? ';
$strDocu = 'Documentación';
$strDrop = 'Eliminar';
$strDropDB = 'Elimina o banco de datos %s';
$strDropTable = 'Eliminar a tabela';
$strDumpXRows = 'Pór %s filas a partir da fila %s.';
$strDumpingData = 'Extraindo datos da tabela';
$strDynamic = 'dinámico';

$strEdit = 'Modificar';
$strEditPDFPages = 'Editar as páxinas PDF';
$strEditPrivileges = 'Modificar privilexios';
$strEffective = 'Efectivo';
$strEmpty = 'Borrar';
$strEmptyResultSet = 'MySQL retornou um conxunto vacío (ex. cero rexistros).';
$strEnabled = 'Activado';
$strEnd = 'Fin';
$strEndCut = 'FIN DO RECORTE';
$strEndRaw = 'FIN DO TEXTO SIMPLE ("RAW")';
$strEnglishPrivileges = ' Nota: os nomes de privilexios do MySQL están en inglés';
$strError = 'Erro';
$strExplain = 'Explicar SQL';
$strExport = 'Exportar';
$strExportToXML = 'Exportar no formato XML';
$strExtendedInserts = 'Insercións extendidas';
$strExtra = 'Extra';

$strField = 'Campo';
$strFieldHasBeenDropped = 'Eliminouse o campo %s';
$strFields = 'Campos';
$strFieldsEmpty = ' O reconto de campos di que non hai nengún! ';
$strFieldsEnclosedBy = 'Os campos delimítanse con';
$strFieldsEscapedBy = 'Os campos escápanse con';
$strFieldsTerminatedBy = 'Os campos rematan por';
$strFixed = 'fixo';
$strFlushTable = 'Fechar a tabela ("FLUSH")';
$strFormEmpty = 'Falta un valor no formulario!';
$strFormat = 'Formato';
$strFullText = 'Textos completos';
$strFunction = 'Funcións';

$strGenBy = 'Xerado por';
$strGenTime = 'Xerado en';
$strGeneralRelationFeat = 'Características xerais das relacións';
$strGo = 'Executar';
$strGrants = 'Conceder';
$strGzip = 'comprimido no formato "gzipped"';

$strHasBeenAltered = 'foi alterado.';
$strHasBeenCreated = 'foi creado.';
$strHaveToShow = 'Ten que escoller polo menos unha columna para mostrar';
$strHome = 'Comezo ("Home")';
$strHomepageOfficial = 'Páxina Oficial do phpMyAdmin';
$strHomepageSourceforge = 'Páxina do phpMyAdmin en Sourceforge';
$strHost = 'Servidor';
$strHostEmpty = 'O nome do servidor está vacío!';

$strIdxFulltext = 'Texto completo';
$strIfYouWish = 'Para carregar só algunhas columnas da tabela, faga unha lista separada por vírgulas.';
$strIgnore = 'Ignorar';
$strInUse = 'en uso';
$strIndex = 'Índice';
$strIndexHasBeenDropped = 'Eliminouse o índice %s';
$strIndexName = 'Nome do índice&nbsp;:';
$strIndexType = 'Tipo de índice&nbsp;:';
$strIndexes = 'Índices';
$strInsecureMySQL = 'O seu ficheiro de configuración contén axustes (en concreto, o usuário root non ten contrasinal) que corresponden coa conta con todos os privilexios que MySQL fai por omisión. O seu servidor de MySQL está a rodar con esta configuración, está aberto a intrusións e habería que mirar de solucionar este problema de seguranza.';
$strInsert = 'Inserir';
$strInsertAsNewRow = 'Inserir unha nova columna';
$strInsertNewRow = 'Inserir un novo rexistro';
$strInsertTextfiles = 'Inserir un arquivo de texto na tabela';
$strInsertedRows = 'Filas inseridas:';
$strInstructions = 'Instruccións';
$strInvalidName = '"%s" i unha palabra reservada. Non se pode utilizar como nome dun banco de datos, dunha tabela ou dun campo.';

$strKeepPass = 'Non mude o contrasinal';
$strKeyname = 'Nome chave';
$strKill = 'Matar (kill)';

$strLength = 'Tamaño';
$strLengthSet = 'Tamaño/Definir*';
$strLimitNumRows = 'Número de rexistros por páxina';
$strLineFeed = 'Carácter de alimentación de liña: \\n';
$strLines = 'Liñas';
$strLinesTerminatedBy = 'As liñas rematan por';
$strLinkNotFound = 'Non se atopou o vínculo';
$strLinksTo = 'Vincúlase con';
$strLocationTextfile = 'Localización do arquivo de texto';
$strLogPassword = 'Contrasinal:';
$strLogUsername = 'Nome de usuario:';
$strLogin = 'Entrada (login)';
$strLogout = 'Sair';

$strMissingBracket = 'Falta un paréntese';
$strModifications = 'As modificacións foron gardadas';
$strModify = 'Modificar';
$strModifyIndexTopic = 'Modificar un índice';
$strMoveTable = 'Mover a tabela a (base_de_datos<b>.</b>tabela):';
$strMoveTableOK = 'Moveuse a tabela %s para %s.';
$strMySQLCharset = 'Código de caracteres (Charset) MySQL';
$strMySQLReloaded = 'MySQL reiniciado.';
$strMySQLSaid = 'Mensaxes do MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% a rodar no servidor %pma_s2% como %pma_s3%';
$strMySQLShowProcess = 'Mostrar os procesos';
$strMySQLShowStatus = 'Mostrar información de tempo de execución do MySQL';
$strMySQLShowVars = 'Mostrar as variables de sistema do MySQL';

$strName = 'Nome';
$strNext = 'Seguinte';
$strNo = 'Non';
$strNoDatabases = 'Non hai nengún banco de datos';
$strNoDescription = 'sen descrición';
$strNoDropDatabases = 'Os comandos "Eliminar banco de datos" non están permitidos.';
$strNoExplain = 'Saltar a explicacion de SQL';
$strNoFrames = 'phpMyAdmin usa-se mellor cun navegador que <b>acepte molduras</b>.';
$strNoIndex = 'Non se definiu un índice';
$strNoIndexPartsDefined = 'Non se definiron partes do índice';
$strNoModification = 'Sen cambios';
$strNoPassword = 'Sen Contrasinal';
$strNoPhp = 'sen código PHP';
$strNoPrivileges = 'Sen Privilexios';
$strNoQuery = 'Non hai procura SQL!';
$strNoRights = 'Non ten direitos suficientes para estar aquí agora!';
$strNoTablesFound = 'Non se achou nengunha tabela no banco de datos';
$strNoUsersFound = 'Non se achou nengun(s) usuario(s).';
$strNoValidateSQL = 'Saltarse a validacion de';
$strNone = 'Nengun';
$strNotNumber = 'Non é un número!';
$strNotOK = 'non conforme';
$strNotSet = 'Non se atopou a tabela <b>%s</b>ou non se indicou en %s';
$strNotValidNumber = ' non é un número válido para unha fila!';
$strNull = 'Nulo';
$strNumSearchResultsInTable = '%s ocorrencias(s) dentro da tabela <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> ocorrencia(s)';

$strOK = 'Conforme';
$strOftenQuotation = 'Xeralmente son aspas. OPCIONAL significa que só os campos de caracteres son delimitados por caracteres "delimitadores"';
$strOperations = 'Operacións';
$strOptimizeTable = 'Optimizar a tabela';
$strOptionalControls = 'Opcional. Controla como se han de ler e escreber os caracteres especiais.';
$strOptionally = 'OPCIONAL';
$strOptions = 'Opcións';
$strOr = 'ou';
$strOverhead = 'De máis (Overhead)';

$strPHPVersion = 'Versión do PHP';
$strPageNumber = 'Número de páxina:';
$strPartialText = 'Textos parciais';
$strPassword = 'Contrasinal';
$strPasswordEmpty = 'O contrasinal está vacío!';
$strPasswordNotSame = 'Os contrasinais non son os mesmos!';
$strPdfDbSchema = 'Esquema da base de datos "%s" - Páxina %s';
$strPdfInvalidPageNum = 'O número de páxina PDF non está definido';
$strPdfInvalidTblName = 'Non existe a tabela "%s".';
$strPdfNoTables = 'Sen tabelas';
$strPhp = 'Crear código PHP';
$strPmaDocumentation = 'Documentación do phpMyAdmin';
$strPmaUriError = 'A directiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> DEBE estar asignada no seu ficheiro de configuración.';
$strPos1 = 'Inicio';
$strPrevious = 'Anterior';
$strPrimary = 'Primaria';
$strPrimaryKey = 'Chave primaria';
$strPrimaryKeyHasBeenDropped = 'Eliminouse a chave primaria';
$strPrimaryKeyName = 'O nome da chave primaria debe ser... PRIMARIA';
$strPrimaryKeyWarning = '("PRIMARIA" <b>debe</b> ser o nome de e <b>só de</b> unha chave primaria)';
$strPrintView = 'Visualización previa da impresión';
$strPrivileges = 'Privilexios';
$strProperties = 'Propiedades';
$strPutColNames = 'Pór os nomes dos campos na primeira fileira';

$strQBE = 'Procurar pondo un exemplo ("QBE")';
$strQBEDel = 'Eliminar';
$strQBEIns = 'Inserir';
$strQueryOnDb = 'Procura tipo SQL no banco de datos <b>%s</b>:';

$strReType = 'Reescreber';
$strRecords = 'Rexistros';
$strReferentialIntegrity = 'Comprobar a integridade das referencias:';
$strRelationNotWorking = 'Desactivouse a funcionalidade adicional para o traballo con tabelas vinculadas. Para saber o por que, faga click%saqu&iacute;%s.';
$strRelationView = 'Vista das relacións';
$strReloadFailed = 'A reinicialización do MySQL fallou.';
$strReloadMySQL = 'Reinicializar o MySQL';
$strRememberReload = 'Lembre-se recarregar o servidor.';
$strRenameTable = 'Renomear a tabela para';
$strRenameTableOK = 'Tabela \$table renomeada para \$new_name';
$strRepairTable = 'Reparar a tabela';
$strReplace = 'Substituir';
$strReplaceTable = 'Substituir os datos da tabela polos do ficheiro';
$strReset = 'Reiniciar';
$strRevoke = 'Revogar';
$strRevokeGrant = 'Revogar privilexio de conceder';
$strRevokeGrantMessage = 'Retirou-lle o privilexio de Permitir a %s';
$strRevokeMessage = 'Retirou-lle os privilexios a %s';
$strRevokePriv = 'Revogar privilexios';
$strRowLength = 'Lonxitude da fila';
$strRowSize= ' Tamaño da fila ';
$strRows = 'Filas';
$strRowsFrom = 'filas, a comezar da';
$strRowsModeHorizontal= 'horizontal';
$strRowsModeOptions= 'en modo %s e repetir os cabezallos de cada %s celas';
$strRowsModeVertical= 'vertical';
$strRowsStatistic = 'Estatistícas da Fila';
$strRunQuery = 'Enviar esta procura';
$strRunSQLQuery = 'Efectuar unha procura SQL na base de datos %s';
$strRunning = 'a rodar no servidor %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Cabe a posibilidade de que atopase un erro no procesador de SQL. Examine a súa pesquisa con atención e comprobe que as aspas son correctas e que teñen o seu par. Outras causas posibles póden-se deber a que tentase enviar un ficheiro con binario fora dunha área de texto entre aspas. Tamén pode tentar facer a súa pesquisa na liña de comandos de MySQL. A mensaxe de erro que lle envía o servidor de MySQL e que aparece máis abaixo (de habela) tamén o pode axudar a diagnosticar o problema. Se persisten os erros ou se o procesador falla cando mesmo a liña de comandos vai ben,reduza o texto da pesquisa à parte concreta que produce o erro e envíe unha mensaxe de erro co texto da sección RECORTE que aparece a continuación:';
$strSQLParserUserError = 'Parece que houbo un problema na súa pesquisa en SQL. Se máis abaixo aparece unha mensaxe de erro do servidor de MySQL, isto pode axudar a diagnosticar o problema';
$strSQLQuery = 'comando SQL';
$strSQLResult = 'Resultado SQL';
$strSQPBugInvalidIdentifer = 'O identificador non é válido';
$strSQPBugUnclosedQuote = 'Falta pór a aspa final';
$strSQPBugUnknownPunctuation = 'Hai unha secuencia de puntuación que resulta descoñecida';
$strSave = 'Gardar';
$strScaleFactorSmall = 'O factor de reducción é demasiado pequeno para que o esquema caiba nunha única páxina';
$strSearch = 'Procurar';
$strSearchFormTitle = 'Procurar na base de datos';
$strSearchInTables = 'Dentro da(s) tabela(s):';
$strSearchNeedle = 'Palabras(s) ou valore(s) a procurar (o comodín é: "%"):';
$strSearchOption1 = 'polo menos unha das palabras';
$strSearchOption2 = 'todas as palabras';
$strSearchOption3 = 'a frase exacta';
$strSearchOption4 = 'como expresión regular';
$strSearchResultsFor = 'Procurar os resultados para "<i>%s</i>" %s:';
$strSearchType = 'Atopar:';
$strSelect = 'Procurar';
$strSelectADb = 'Seleccione unha base de dados';
$strSelectAll = 'Seleccionar todo';
$strSelectFields = 'Seleccione os campos (mínimo 1)';
$strSelectNumRows = 'a procurar';
$strSelectTables = 'Seleccionar tabelas';
$strSend = 'Enviar <I>(gravar nun ficheiro)</I><br>';
$strServer = 'Servidor %s';
$strServerChoice = 'Escolla de Servidor';
$strServerVersion = 'Versión do servidor';
$strSetEnumVal = 'Se o tipo de campo é "enum" ou "set", introduza os valores usando este formato: \'a\',\'b\',\'c\'...<br />Se precisar pór unha barra invertida (" \ ") ou aspas simples (" \' ") entre estes valores, preceda a barra e as aspas de barras invertidas (por exemplo \'\\\\xyz\' ou \'a\\\'b\').';
$strShow = 'Mostrar';
$strShowAll = 'Ver todos os rexistros';
$strShowColor = 'Mostrar a cor';
$strShowCols = 'Mostrar as columnas';
$strShowGrid = 'Mostrar a grella';
$strShowPHPInfo = 'Mostrar información sobre o PHP';
$strShowTableDimension = 'Mostrar a dimensión das tabelas';
$strShowTables = 'Mostrar as tabelas';
$strShowThisQuery = ' Mostrar esta procura aquí outra vez ';
$strShowingRecords = 'Mostrando rexistros ';
$strSingly = 'a refacer logo de insercións e destrucións (shingly)';
$strSize = 'Tamaño';
$strSort = 'Ordenar';
$strSpaceUsage = 'Uso do espazo';
$strSplitWordsWithSpace = 'As palabras divídense cun carácter de espazo (" ").';
$strStatement = 'Informacións';
$strStrucCSV = 'Datos CSV';
$strStrucData = 'Estructura e datos';
$strStrucDrop = 'Adicionar \'Eliminar tabela anterior se existe\'';
$strStrucExcelCSV = 'CSV (para datos de Ms Excel)';
$strStrucOnly = 'Só a estructura';
$strStructPropose = 'Propor unha estructura para a tabela';
$strStructure = 'Estructura';
$strSubmit = 'Submeter';
$strSuccess = 'O seu comando de SQL executou-se com éxito';
$strSum = 'Suma';

$strTable = 'tabela ';
$strTableComments = 'Comentarios da tabela';
$strTableEmpty = 'O nome da tabela está vacío!';
$strTableHasBeenDropped = 'Eliminouse a tabela %s';
$strTableHasBeenEmptied = 'Vaciouse a tabela %s';
$strTableHasBeenFlushed = 'Fechouse a tabela %s';
$strTableMaintenance = 'Tabela de manutención';
$strTableStructure = 'Estructura da tabela';
$strTableType = 'Tipo da tabela';
$strTables = '%s tabela(s)';
$strTextAreaLength = ' Por causa da sua lonxitude,<br> este campo pode non ser editable ';
$strTheContent = 'O conteúdo do seu arquivo foi inserido';
$strTheContents = 'O conteúdo do arquivo substituíu o conteúdo da tabela que tiña a mesma chave primaria ou única';
$strTheTerminator = 'O carácter que separa os campos.';
$strTotal = 'total';
$strType = 'Tipo';

$strUncheckAll = 'Quitar-lles as marcas a todos';
$strUnique = 'Único';
$strUnselectAll = 'Non seleccionar nada';
$strUpdatePrivMessage = 'Acaba de actualizar os privilexios de %s.';
$strUpdateProfile = 'Actualizar o perfil:';
$strUpdateProfileMessage = 'Actualizouse o perfil.';
$strUpdateQuery = 'Actualizar a procura';
$strUsage = 'Uso';
$strUseBackquotes = 'Protexer os nomes das tabelas e dos campos con&nbsp;" ` "';
$strUseTables = 'Usar as tabelas';
$strUser = 'Usuario';
$strUserEmpty = 'O nome do usuario está vacío!';
$strUserName = 'Nome do usuario';
$strUsers = 'Usuarios';

$strValidateSQL = 'Validar SQL';
$strValidatorError = 'Non foi posible iniciar o comprobador de SQL. Comprobe que ten instaladas todas as extensións de php tal e como se descrebe na %sdocumentación%s.';
$strValue = 'Valor';
$strViewDump = 'Ver o esquema do volcado da tabela';
$strViewDumpDB = 'Ver o esquema do volcado do banco de datos';

$strWebServerUploadDirectory = 'directorio de subida (upload) do servidor web';
$strWebServerUploadDirectoryError = 'Non se pode acceder ao directorio que designou para as subidas (upload)';
$strWelcome = 'Benvida/o a %s';
$strWithChecked = 'Todos os marcados';
$strWrongUser = 'Usuario ou contrasinal errado. Acceso negado.';

$strYes = 'Si';

$strZip = 'comprimido no formato "zipped"';
// To translate

$strImportDocSQL = 'Import docSQL Files';  //to translate

?>
