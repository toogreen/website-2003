<?php
/* $Id: russian-windows-1251.inc.php,v 1.26 2002/09/20 06:44:08 mikebeck Exp $ */

/**
 * Translated by Gosha Sakovich <gt2 at users.sourceforge.net>
 *               Artyom Rabzonov <tyomych at gmx.net>
 */

$charset = 'windows-1251';
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('����', '��', '��', '��');

$day_of_week = array('��', '��', '��', '��', '��', '��', '��');
$month = array('���', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���', '���');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y �., %H:%M';

$strAccessDenied = '� ������� ��������';
$strAction = '��������';
$strAddDeleteColumn = '��������/������� ������� ��������';
$strAddDeleteRow = '��������/������� ��� ��������';
$strAddNewField = '�������� ����� ����';
$strAddPriv = '�������� ����� ����������';
$strAddPrivMessage = '���� ��������� ����� ����������';
$strAddSearchConditions = '�������� ������� ������ (���� ��� ������� "where"):';
$strAddToIndex = '�������� � �������&nbsp;%s&nbsp;��������(�)';
$strAddUser = '�������� ������ ������������';
$strAddUserMessage = '���� �������� ����� ������������.';
$strAffectedRows = '���������� ����:';
$strAfter = '����� %s';
$strAfterInsertBack = '�������';
$strAfterInsertNewInsert = '�������� ����� ������';
$strAll = '���';
$strAllTableSameWidth = '�������� ��� ������� � ����� �������?';
$strAlterOrderBy = '�������� ������� �������';
$strAnalyzeTable = '������ �������';
$strAnd = '�';
$strAnIndex = '��� �������� ������ ��� %s';
$strAny = '�����';
$strAnyColumn = '����� �������';
$strAnyDatabase = '����� ���� ������';
$strAnyHost = '����� ����';
$strAnyTable = '����� �������';
$strAnyUser = '����� ������������';
$strAPrimaryKey = '��� �������� ��������� ���� � %s';
$strAscending = '�� �����������';
$strAtBeginningOfTable = '� ������ �������';
$strAtEndOfTable = '� ����� �������';
$strAttr = '��������';

$strBack = '�����';
$strBinary = ' �������� ';
$strBinaryDoNotEdit = ' �������� ������ - �� ������������� ';
$strBookmarkDeleted = '�������� ���� �������.';
$strBookmarkLabel = '�����';
$strBookmarkQuery = '�������� �� SQL-������';
$strBookmarkThis = '�������� �� ������ SQL-������';
$strBookmarkView = '������ ��������';
$strBrowse = '�����';
$strBzip = '������������ � bzip';

$strCantLoadMySQL = '���������� MySQL �� ����������,<br />��������� ������������ PHP.';
$strCantLoadRecodeIconv = '�� ���� ��������� iconv ��� recode, ����������� ��� ��������������� ��������. ��������� php-������������ � ��������� �� ������������� ��� ��������� ��������������� �������� � phpMyAdmin.';
$strCantRenameIdxToPrimary = '������������� ������������� ������ � PRIMARY!';
$strCantUseRecodeIconv = '�� ���� ������������ iconv �������: �� libiconv, �� recode_string, ���� �� ����� ��������� extension reports. ��������� php-������������.';
$strCardinality = '���������� ���������';
$strCarriage = '������� �������: \\r';
$strChange = '��������';
$strChangeDisplay = '�������� ���� ��� �����������';
$strChangePassword = '�������� ������';
$strCheckAll = '�������� ���';
$strCheckDbPriv = '��������� ���������� ��';
$strCheckTable = '��������� �������';
$strChoosePage = '�������� �������� ��� ��������������';
$strColComFeat = '�������� ����������� ��������';
$strColumn = '�������';
$strColumnNames = '�������� �������';
$strComments = '�����������';
$strCompleteInserts = '������ �������';
$strConfigFileError = 'phpMyAdmin �� ����� ��������� ������ �� ����������������� �����!  <br />��������� ������� - �������������� ������.<br />�������� ���� ���� (config.inc.php) ��������������� �� ��������. ���� ����� ��������� �� ������� - ��������� ��. ���� ������ �������� - ��� � �������';
$strConfigureTableCoord = '�������� ���������� ������� %s';
$strConfirm = '�� ������������� ������ ������� ���?';
$strCookiesRequired = 'Cookies ������ ���� �������� ����� ����� �����.';
$strCopyTable = '����������� ������� � (���� ������<b>.</b>�������):';
$strCopyTableOK = '������� %s ���� ����������� � %s.';
$strCreate = '�������';
$strCreateIndex = '������� ������ ��&nbsp;%s&nbsp;��������';
$strCreateIndexTopic = '������� ����� ������';
$strCreateNewDatabase = '������� ����� ��';
$strCreateNewTable = '������� ����� ������� � �� %s';
$strCreatePage = '������� ����� ��������';
$strCreatePdfFeat = '�������� PDF-�����';
$strCriteria = '��������';

$strData = '������';
$strDatabase = '�� ';
$strDatabaseHasBeenDropped = '���� ������ %s ���� �������.';
$strDatabases = '���� ������';
$strDatabasesStats = '���������� ��� ������';
$strDatabaseWildcard = '���� ������ (�������� �������������  ��������):';
$strDataOnly = '������ ������';
$strDefault = '�� ���������';
$strDelete = '�������';
$strDeleted = '��� ��� ������';
$strDeletedRows = '��������� ���� ���� �������:';
$strDeleteFailed = '��������� ��������!';
$strDeleteUserMessage = '��� ������ ������������ %s.';
$strDescending = '�� ��������';
$strDisabled = '����������';
$strDisplay = '��������';
$strDisplayFeat = '�������� �������������� �����������';
$strDisplayOrder = '������� ���������:';
$strDisplayPDF = '�������� PDF-�����';
$strDoAQuery = '��������� "������ �� �������" (������ ������������: "%")';
$strDocu = '������������';
$strDoYouReally = '�� ������������� ������� ';
$strDrop = '����������';
$strDropDB = '���������� �� %s';
$strDropTable = '������� �������';
$strDumpingData = '���� ������ �������';
$strDumpXRows = '���� %s �������, ������� � %s.';
$strDynamic = '������������';

$strEdit = '������';
$strEditPDFPages = '�������� PDF-��������';
$strEditPrivileges = '�������������� ����������';
$strEffective = '�������������';
$strEmpty = '��������';
$strEmptyResultSet = 'MySQL ������� ������ ��������� (�.�. ���� �����).';
$strEnabled = '��������';
$strEnd = '�����';
$strEnglishPrivileges = ' ����������: ���������� MySQL �������� �� ��������� ';
$strError = '������';
$strExport = '�������';
$strExportToXML = '������� � XML-������';
$strExtendedInserts = '����������� �������';
$strExtra = '�������������';

$strField = '����';
$strFieldHasBeenDropped = '���� %s ���� �������';
$strFields = '����';
$strFieldsEmpty = ' ������ ������� �����! ';
$strFieldsEnclosedBy = '���� ��������� �';
$strFieldsEscapedBy = '���� ������������';
$strFieldsTerminatedBy = '���� ���������';
$strFixed = '�������������';
$strFlushTable = '�������� ��� ������� ("FLUSH")';
$strFormat = '������';
$strFormEmpty = '��������� �������� ��� �����!';
$strFullText = '������ ������';
$strFunction = '�������';

$strGenBy = '���������';
$strGeneralRelationFeat = '�������� ����������� ������';
$strGenTime = '����� ��������';
$strGo = '�����';
$strGrants = '�����';
$strGzip = '������������ � gzip';

$strHasBeenAltered = '���� ��������.';
$strHasBeenCreated = '���� �������.';
$strHaveToShow = '�� ������ ������� �� ����� ����� ������� ��� �����������';
$strHome = '� ������';
$strHomepageOfficial = '����������� �������� phpMyAdmin';
$strHomepageSourceforge = '�������� phpMyAdmin �� Sourceforge';
$strHost = '����';
$strHostEmpty = '������ ��� �����!';

$strIdxFulltext = '���������';
$strIfYouWish = '���� �� ������� ��������� ������ ��������� ������� �������, ������� ����������� �������� ������ �����.';
$strIgnore = '������������';
$strIndex = '������';
$strIndexes = '�������';
$strIndexHasBeenDropped = '������ %s ��� ������';
$strIndexName = '��� �������&nbsp;:';
$strIndexType = '��� �������&nbsp;:';
$strInsert = '��������';
$strInsertAsNewRow = '�������� ����� ���';
$strInsertedRows = '���������� ����:';
$strInsertNewRow = '�������� ����� ���';
$strInsertTextfiles = '�������� ��������� ����� � �������';
$strInstructions = '����������';
$strInUse = '������������';
$strInvalidName = '"%s" - �������� ����������������� ������, �� �� ������ ������������ ��� � �������� ����� ���� ������/�������/����.';

$strKeepPass = '�� ������ ������';
$strKeyname = '��� �����';
$strKill = '�����';

$strLength = '������';
$strLengthSet = '�����/��������*';
$strLimitNumRows = '������� �� ��������';
$strLineFeed = '������ ��������� �����: \\n';
$strLines = '�����';
$strLinesTerminatedBy = '������ ���������';
$strLinkNotFound = '����� �� �������';
$strLinksTo = '����� �';
$strLocationTextfile = '����������������� ���������� �����';
$strLogin = '���� � �������';
$strLogout = '����� �� �������';
$strLogPassword = '������:';
$strLogUsername = '������������:';

$strMissingBracket = '��������� ������';
$strModifications = '����������� ���� ���������';
$strModify = '��������';
$strModifyIndexTopic = '�������� ������';
$strMoveTable = '����������� ������� � (���� ������<b>.</b>�������):';
$strMoveTableOK = '������� %s ���� ���������� � %s.';
$strMySQLCharset = 'MySQL-���������';
$strMySQLReloaded = 'MySQL �������������.';
$strMySQLSaid = '����� MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% �� %pma_s2% ��� %pma_s3%';
$strMySQLShowProcess = '�������� ��������';
$strMySQLShowStatus = '�������� ��������� MySQL';
$strMySQLShowVars = '�������� ��������� ���������� MySQL';

$strName = '���';
$strNext = '�����';
$strNo = '���';
$strNoDatabases = '�� �����������';
$strNoDescription = '��� ��������';
$strNoDropDatabases = '������� "������� ��" ���������.';
$strNoFrames = '��� ������ phpMyAdmin ����� ������� � ���������� <b>�������</b>.';
$strNoIndex = '������ �� ���������!';
$strNoIndexPartsDefined = '����� ������� �� ����������!';
$strNoModification = '��� ���������';
$strNone = '���';
$strNoPassword = '��� ������';
$strNoPhp = '��� PHP-����';
$strNoPrivileges = '��� ����������';
$strNoQuery = '��� SQL-�������!';
$strNoRights = '�� �� ������ ���������� ���� ��� �����!';
$strNoTablesFound = '� �� �� ���������� ������.';
$strNotNumber = '��� �� �����!';
$strNotOK = '�� ������';
$strNotSet = '������� <b>%s</b> �� �������';
$strNotValidNumber = ' ������������ ���������� �����!';
$strNoUsersFound = '�� ������ ������������.';
$strNull = '����';
$strNumSearchResultsInTable = '%s ������(��) � ������� <i>%s</i>';
$strNumSearchResultsTotal = '<b>�����:</b> <i>%s</i> ������(��)';

$strOftenQuotation = '������ �������. "�� ������" ��������, ��� ������ ���� char � varchar ����������� � �������.';
$strOK = '������';
$strOperations = '��������';
$strOptimizeTable = '�������������� �������';
$strOptionalControls = '�� ������. ������������ ��� ������ ��� ������ ����������� �������.';
$strOptionally = '�� ������';
$strOptions = '�����';
$strOr = '���';
$strOverhead = '��������� �������';

$strPageNumber = '����� ��������:';
$strPartialText = '��������� ������';
$strPassword = '������';
$strPasswordEmpty = '������ ������!';
$strPasswordNotSame = '������ �� ���������!';
$strPdfDbSchema = '��������� ���� "%s" - �������� %s';
$strPdfInvalidPageNum = '�������������� ����� PDF-��������!';
$strPdfInvalidTblName = '������� "%s" �� ����������!';
$strPdfNoTables = '��� ������';
$strPhp = '������� PHP-���';
$strPHPVersion = '������ PHP';
$strPmaDocumentation = '������������ �� phpMyAdmin';
$strPmaUriError = '��������� <tt>$cfg[\'PmaAbsoluteUri\']</tt> ������ ���� ����������� � ����� ���������������� �����!';
$strPos1 = '������';
$strPrevious = '�����';
$strPrimary = '���������';
$strPrimaryKey = '��������� ����';
$strPrimaryKeyHasBeenDropped = '��������� ���� ��� ������';
$strPrimaryKeyName = '��� ���������� ����� ������ ���� PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>������</b> ���� ��������� <b>������</b> ���������� �����!)';
$strPrintView = '������ ��� ������';
$strPrivileges = '����������';
$strProperties = '��������';

$strQBE = '������&nbsp;��&nbsp;�������';
$strQBEDel = '�������';
$strQBEIns = '��������';
$strQueryOnDb = 'SQL-������ �� <b>%s</b>:';

$strRecords = '������';
$strReferentialIntegrity = '��������� ����������� ������:';
$strRelationNotWorking = '�������������� ����������� ��� ������ �� ���������� ��������� ����������. ��� ����������� ������� ������� %s����%s.';
$strRelationView = '��������� ���';
$strReloadFailed = '�� ������� ������������� MySQL.';
$strReloadMySQL = '������������� MySQL';
$strRememberReload = '�� �������� ������������� ������.';
$strRenameTable = '������������� ������� �';
$strRenameTableOK = '������� %s ���� ������������� � %s';
$strRepairTable = '�������� �������';
$strReplace = '���������';
$strReplaceTable = '��������� ������ ������� ������� �� �����';
$strReset = '��������������';
$strReType = '�������������';
$strRevoke = '��������';
$strRevokeGrant = '�������� �������������� ����';
$strRevokeGrantMessage = '���� �������� �������������� ���� ��� %s';
$strRevokeMessage = '�� �������� ���������� ��� %s';
$strRevokePriv = '�������� ����������';
$strRowLength = '����� ����';
$strRows = '����';
$strRowsFrom = '����� ��';
$strRowSize = ' ������ ���� ';
$strRowsModeHorizontal = '��������������';
$strRowsModeOptions = '� %s ������, ��������� ����� ������ %s �����';
$strRowsModeVertical = '������������';
$strRowsStatistic = '���������� ����';
$strRunning = '�� %s';
$strRunQuery = '��������� ������';
$strRunSQLQuery = '��������� SQL ������(�) �� �� %�';

$strSave = '���������';
$strScaleFactorSmall = '������� ������� ������������ ����������� ���� ������� �� �������������';
$strSearch = '������';
$strSearchFormTitle = '������ � ���� ������';
$strSearchInTables = '� �������(��):';
$strSearchNeedle = '�����(�) ��� ��������(�) ��������� (������� "%") �:';
$strSearchOption1 = '���� ���� �����';
$strSearchOption2 = '��� �����';
$strSearchOption3 = '������ ������������';
$strSearchOption4 = '���������� ���������';
$strSearchResultsFor = '������ � "<i>%s</i>" %s:';
$strSearchType = '������:';
$strSelect = '�������';
$strSelectADb = '�������� ��';
$strSelectAll = '�������� ���';
$strSelectFields = '������� ���� (������� ����):';
$strSelectNumRows = '�� �������';
$strSelectTables = '�������� �������(�)';
$strSend = '�������';
$strServerChoice = '����� �������';
$strServerVersion = '������ �������';
$strSetEnumVal = '��� ����� ���� "enum" � "set", ������� �������� �� ����� �������: \'a\',\'b\',\'c\'...<br />���� ��� ������������ ������ �������� ����� ����� ("\"") ��� ��������� ������� ("\'") ����� ���� ��������, ��������� ����� ���� �������� ����� ����� (��������, \'\\\\xyz\' ��� \'a\\\'b\').';
$strShow = '��������';
$strShowAll = '�������� ���';
$strShowColor = '�������� ����';
$strShowCols = '�������� �������';
$strShowGrid = '�������� �����';
$strShowingRecords = '���������� ������ ';
$strShowPHPInfo = '�������� ���������� � PHP';
$strShowTableDimension = '�������� ����������� �������';
$strShowTables = '�������� �������';
$strShowThisQuery = ' �������� ������ ������ ����� ';
$strSingly = '(��������)';
$strSize = '������';
$strSort = '�������������';
$strSpaceUsage = '������������ ������������';
$strSplitWordsWithSpace = '�����, ����������� �������� (" ").';
$strSQL = 'SQL';
$strSQLQuery = 'SQL-������';
$strSQLResult = 'SQL-���������';
$strStatement = '���������';
$strStrucCSV = 'CSV ������';
$strStrucData = '��������� � ������';
$strStrucDrop = '�������� �������� �������';
$strStrucExcelCSV = 'CSV ��� ������ Ms Excel';
$strStrucOnly = '������ ���������';
$strStructPropose = '������������ ��������� �������';
$strStructure = '���������';
$strSubmit = '���������';
$strSuccess = '��� SQL-������ ��� ������� ��������';
$strSum = '�����';

$strTable = '������� ';
$strTableComments = '����������� � �������';
$strTableEmpty = '������ �������� �������!';
$strTableHasBeenDropped = '������� %s ���� �������';
$strTableHasBeenEmptied = '������� %s ���� �������';
$strTableHasBeenFlushed = '��� ������� ��� ������� %s';
$strTableMaintenance = '������������ �������';
$strTables = '%s ������(�)';
$strTableStructure = '��������� �������';
$strTableType = '��� �������';
$strTextAreaLength = ' ��-�� ������� �����,<br /> ��� ���� �� ����� ���� ���������������� ';
$strTheContent = '���������� ����� ���� �������������.';
$strTheContents = '���������� ����� �������� ���������� ������� ��� ����� � ����������� ���������� ��� ����������� �������.';
$strTheTerminator = '������ ��������� �����.';
$strTotal = '�����';
$strType = '���';

$strUncheckAll = '����� ������� �� ����';
$strUnique = '����������';
$strUnselectAll = '����� ������� �� ����';
$strUpdatePrivMessage = '���� �������� ���������� ���';
$strUpdateProfile = '�������� �������:';
$strUpdateProfileMessage = '������� ��� ��������.';
$strUpdateQuery = '��������� ������';
$strUsage = '�������������';
$strUseBackquotes = '�������� ������� � ��������� ������ � �����';
$strUser = '������������';
$strUserEmpty = '������ ��� ������������!';
$strUserName = '��� ������������';
$strUsers = '������������';
$strUseTables = '������������ �������';

$strValue = '��������';
$strViewDump = '����������� ���� �������';
$strViewDumpDB = '����������� ���� ��';

$strWelcome = '����� ���������� � %s';
$strWithChecked = '� �����������:';
$strWrongUser = '��������� �����/������. � ������� ��������.';

$strYes = '��';

$strZip = '������������ � zip';

$strBeginCut = 'BEGIN CUT';  //to translate
$strBeginRaw = 'BEGIN RAW';  //to translate

$strCharsetOfFile = 'Character set of the file:'; //to translate

$strEndCut = 'END CUT';  //to translate
$strEndRaw = 'END RAW';  //to translate
$strExplain = 'Explain SQL';  //to translate

$strNoExplain = 'Skip Explain SQL';  //to translate
$strNoValidateSQL = 'Skip Validate SQL';  //to translate

$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';  //to translate
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';  //to translate
$strSQPBugInvalidIdentifer = 'Invalid Identifer';  //to translate
$strSQPBugUnclosedQuote = 'Unclosed quote';  //to translate
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';  //to translate

$strValidateSQL = 'Validate SQL';  //to translate

$strInsecureMySQL = 'Your configuration file contains settings (root with no password) that correspond to the default MySQL privileged account. Your MySQL server is running with this default, is open to intrusion, and you really should fix this security hole.';  //to translate
$strWebServerUploadDirectory = 'web-server upload directory';  //to translate
$strWebServerUploadDirectoryError = 'The directory you set for upload work cannot be reached';  //to translate
$strValidatorError = 'The SQL validator could not be initialized. Please check if you have installed the necessary php extensions as described in the %sdocumentation%s.'; //to translate
$strServer = 'Server %s';  //to translate
$strPutColNames = 'Put fields names at first row';  //to translate
$strImportDocSQL = 'Import docSQL Files';  //to translate
?>
