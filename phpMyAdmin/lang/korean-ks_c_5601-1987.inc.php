<?php
/* $Id: korean-ks_c_5601-1987.inc.php,v 1.24 2002/09/20 06:44:08 mikebeck Exp $ */

/* Translated by WooSuhan <kjh@unews.co.kr> */

$charset = 'ks_c_5601-1987';
$text_dir = 'ltr';
$left_font_family = '"����", sans-serif';
$right_font_family = '"����", sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('����Ʈ', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('��', '��', 'ȭ', '��', '��', '��', '��');
$month = array('�ؿ�����', '�û���', '��������', '�ٻ���', 'Ǫ����', '������', '�߿������', 'Ÿ������', '���Ŵ�', '�ϴÿ���', '��ƴ��', '�ŵ��');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%Y�� %B %d�� %p %I:%M ';

$strAccessDenied = '������ �źεǾ����ϴ�.';
$strAction = '����';
$strAddDeleteColumn = '�ʵ� Į�� �߰�/����';
$strAddDeleteRow = 'Criteria �� �߰�/����';
$strAddNewField = '�ʵ� �߰��ϱ�';
$strAddPriv = '���� �߰��ϱ�';
$strAddPrivMessage = '�� ������ �߰��߽��ϴ�';
$strAddSearchConditions = '�˻� ���� �߰� ("where" ������ ����):';
$strAddToIndex = '%sĮ���� �ε��� �߰�';
$strAddUser = '�� ����� �߰�';
$strAddUserMessage = '�� ����ڸ� �߰��߽��ϴ�.';
$strAffectedRows = '����� ��:';
$strAfter = '%s ������';
$strAfterInsertBack = '�ǵ��ư���';
$strAfterInsertNewInsert = '�� ���ڵ�(��) �����ϱ�';
$strAlterOrderBy = '���� ������� ���̺� ����(����)';
$strAnalyzeTable = '���̺� �м�';
$strAnd = '�׸���';
$strAnIndex = '%s �� �ε����� �ɷȽ��ϴ�';
$strAnyColumn = '�ƹ� Į��';
$strAnyDatabase = '�ƹ� �����ͺ��̽�';
$strAnyHost = '�ƹ� ȣ��Ʈ';
$strAnyTable = '�ƹ� ���̺�';
$strAnyUser = '�ƹ� �����';
$strAPrimaryKey = ' %s�� �⺻(�����̸Ӹ�)Ű�� �߰��Ǿ����ϴ�';
$strAscending = '��������';
$strAtBeginningOfTable = '���̺��� ó��';
$strAtEndOfTable = '���̺��� ������';
$strAttr = '����';

$strBack = '�ڷ�';
$strBinary = '���̳ʸ�';
$strBinaryDoNotEdit = ' ���̳ʸ� - ���� ���� ';
$strBookmarkDeleted = '�ϸ�ũ�� �����߽��ϴ�.';
$strBookmarkQuery = '�ϸ�ũ�� SQL ����';
$strBookmarkThis = '�� SQL ������ �ϸ�ũ��';
$strBrowse = '����';
$strBzip = '"bz ����"';

$strCantLoadMySQL = 'MySQL Ȯ������ �ҷ��� �� �����ϴ�.<br />PHP ������ �˻��Ͻʽÿ�..';
$strCantRenameIdxToPrimary = '�ε��� �̸��� �⺻(�����̸Ӹ�)Ű�� �ٲ� �� �����ϴ�!';
$strCarriage = 'ĳ���� ����: \\r';
$strChange = '����';
$strChangePassword = '��ȣ ����';
$strCheckAll = '��� üũ';
$strCheckDbPriv = '�����ͺ��̽� ���� �˻�';
$strCheckTable = '���̺� �˻�';
$strColumn = 'Į��';
$strColumnNames = 'Į��(��) �̸�';
$strCompleteInserts = '������ INSERT�� �ۼ�';
$strConfirm = '������ �� �۾��� �Ͻðڽ��ϱ�?';
$strCopyTable = '���̺� �����ϱ� (�����ͺ��̽���<b>.</b>���̺��):';
$strCopyTableOK = '%s ���̺��� %s ���� ����Ǿ����ϴ�.';
$strCreate = ' ����� ';
$strCreateIndex = '%s Į���� �ε��� ����� ';
$strCreateIndexTopic = '�� �ε��� �����';
$strCreateNewTable = '�����ͺ��̽� %s�� ���ο� ���̺��� ����ϴ�.';

$strData = '������';
$strDatabase = '�����ͺ��̽� ';
$strDatabaseHasBeenDropped = '�����ͺ��̽� %s �� �����߽��ϴ�.';
$strDatabases = '�����ͺ��̽� ';
$strDatabasesStats = '�����ͺ��̽� ��뷮 ���';
$strDatabaseWildcard = '�����ͺ��̽� (���ϵ�ī�幮�� ��� ����):';
$strDataOnly = '�����͸�';
$strDefault = '�⺻��';
$strDelete = '����';
$strDeleted = '������ ���� ���� �Ͽ����ϴ�.';
$strDeletedRows = '������ ��:';
$strDeleteUserMessage = '����� %s �� �����߽��ϴ�.';
$strDescending = '��������(����)';
$strDisplay = '����';
$strDisplayOrder = '��� ����:';
$strDoAQuery = '�������� ������ ����� (���ϵ�ī��: "%")';
$strDocu = '����';
$strDoYouReally = '������ ������ �����Ͻðڽ��ϱ�? ';
$strDrop = '����';
$strDropDB = '�����ͺ��̽� %s ����';
$strDropTable = '���̺� ����';
$strDumpingData = '���̺��� ���� ������';
$strDynamic = '����(���̳���)';

$strEdit = '����';
$strEditPrivileges = '���� ����';
$strEffective = '������';
$strEmpty = '����';
$strEmptyResultSet = '������� �����ϴ�. (�� �� ����.)';
$strEnd = '������';
$strEnglishPrivileges = ' ����: MySQL ���� �̸��� ����� ǥ��Ǿ�� �մϴ�. ';
$strError = '����';
$strExtendedInserts = 'Ȯ��� inserts';
$strExtra = '�߰�';

$strField = '�ʵ�';
$strFieldHasBeenDropped = '�ʵ� %s �� �����߽��ϴ�';
$strFields = '�ʵ�';
$strFieldsEmpty = ' �ʵ� ������ �����ϴ�! ';
$strFieldsEnclosedBy = '�ʵ� ���α�';
$strFieldsEscapedBy = '�ʵ� Ư������(escape) ó��';
$strFieldsTerminatedBy = '�ʵ� ������ ';
$strFlushTable = '���̺� �ݱ�("FLUSH")';
$strFunction = '�Լ�';

$strGenTime = 'ó���� �ð�';
$strGo = '����';
$strGrants = '���α���';
$strGzip = 'gz ����';

$strHasBeenAltered = '��(��) �����Ͽ����ϴ�.';
$strHasBeenCreated = '��(��) �ۼ��Ͽ����ϴ�.';
$strHome = '����������';
$strHomepageOfficial = 'phpMyAdmin ���� Ȩ';
$strHomepageSourceforge = '�ҽ����� phpMyAdmin �ٿ�ε�';
$strHost = 'ȣ��Ʈ';
$strHostEmpty = 'ȣ��Ʈ���� �����ϴ�!';

$strIfYouWish = '���̺� ��(�ݷ�)�� �����͸� �߰��� ���� �ʵ� ����Ʈ�� �޸��� ������ �ֽʽÿ�. ';
$strIgnore = 'Ignore';
$strIndex = '�ε���';
$strIndexes = '�ε���';
$strIndexHasBeenDropped = '�ε��� %s �� �����߽��ϴ�';
$strIndexName = '�ε��� �̸�:';
$strIndexType = '�ε��� ����:';
$strInsert = '�߰�';
$strInsertAsNewRow = '�� ���� �����մϴ�';
$strInsertedRows = '���Ե� ��:';
$strInsertNewRow = '�� ���� ����';
$strInsertTextfiles = '�ؽ�Ʈ������ �о ���̺� ������ ����';
$strInstructions = '����';
$strInUse = '�����';
$strInvalidName = '"%s" �� ����� �ܾ��̹Ƿ� �����ͺ��̽�, ���̺�, �ʵ�� ����� �� �����ϴ�.';

$strKeepPass = '��ȣ�� �������� ����';
$strKeyname = 'Ű �̸�';
$strKill = 'Kill';

$strLength = '����';
$strLengthSet = '����/��*';
$strLimitNumRows = '�������� ���ڵ� ��';
$strLineFeed = '�ٹٲ� ����: \\n';
$strLines = '��(��)';
$strLinesTerminatedBy = '��(��) ������';
$strLocationTextfile = 'SQL �ؽ�Ʈ������ ��ġ';
$strLogin = '�α���';
$strLogout = '�α׾ƿ�';
$strLogPassword = '��ȣ:';
$strLogUsername = '����ڸ�:';

$strModifications = '������ ������ ����Ǿ����ϴ�.';
$strModify = '����';
$strModifyIndexTopic = '�ε��� ����';
$strMoveTable = '���̺� �ű�� (�����ͺ��̽���<b>.</b>���̺��):';
$strMoveTableOK = '���̺� %s �� %s �� �Ű���ϴ�.';
$strMySQLReloaded = 'MySQL�� ��õ��߽��ϴ�.';
$strMySQLSaid = 'MySQL �޽���: ';
$strMySQLServerProcess = '%pma_s2% (MySQL %pma_s1%)�� %pma_s3% �������� ���Խ��ϴ�.';
$strMySQLShowProcess = 'MySQL ���μ��� ����';
$strMySQLShowStatus = 'MySQL ��Ÿ�� ���� ����';
$strMySQLShowVars = 'MySQL �ý��� ȯ�溯�� ����';

$strName = '�̸�';
$strNext = '����';
$strNo = ' �ƴϿ� ';
$strNoDropDatabases = '"DROP DATABASE" ������ ������� �ʽ��ϴ�.';
$strNoFrames = 'phpMyAdmin �� <b>�������� �� �� �ִ�</b> ���������� �� ���Դϴ�.';
$strNoIndex = '�ε����� �������� �ʾҽ��ϴ�!';
$strNoModification = '��ȭ ����';
$strNone = 'None';
$strNoPassword = '��ȣ ����';
$strNoPrivileges = '���� ����';
$strNoQuery = 'SQL ���� ����!';
$strNoRights = '��� �����̾��? ���� ���� ���� ������ �����ϴ�!';
$strNoTablesFound = '�����ͺ��̽��� ���̺��� �����ϴ�.';
$strNotNumber = '�� ����(��ȣ)�� �ƴմϴ�!';
$strNotValidNumber = '�� �ùٸ� �� ��ȣ�� �ƴմϴ�!';
$strNoUsersFound = '����ڰ� �����ϴ�.';

$strOptimizeTable = '���̺� ����ȭ';
$strOptionalControls = 'Ư������ �б�/���� �ɼ�';
$strOptionally = '�ɼ��Դϴ�.';
$strOr = '�Ǵ�';
$strOverhead = '�δ�';

$strPassword = '��ȣ';
$strPasswordEmpty = '��ȣ�� ������ϴ�!';
$strPasswordNotSame = '��ȣ�� �������� �ʽ��ϴ�!';
$strPHPVersion = 'PHP ����';
$strPmaDocumentation = 'phpMyAdmin ����';
$strPmaUriError = 'ȯ�漳�� ���Ͽ��� <tt>$cfg[\'PmaAbsoluteUri\']</tt> �ּҸ� �����Ͻʽÿ�!';
$strPos1 = 'ó��';
$strPrevious = '����';
$strPrimary = '�⺻';
$strPrimaryKey = '�⺻(�����̸Ӹ�) Ű';
$strPrimaryKeyHasBeenDropped = '�⺻(�����̸Ӹ�)Ű�� �����߽��ϴ�';
$strPrimaryKeyName = '�⺻(�����̸Ӹ�)Ű�� �̸��� �ݵ�� PRIMARY���� �մϴ�!';
$strPrimaryKeyWarning = '("PRIMARY"�� <b>�ݵ��</b> �⺻(�����̸Ӹ�)Ű�� <b>������</b> �̸��̾�� �մϴ�!)';
$strPrintView = '�μ�� ����';
$strPrivileges = '����';
$strProperties = '�Ӽ�';

$strQBE = '��(��)���� ���� ����';
$strQBEDel = '����';
$strQBEIns = '����';
$strQueryOnDb = '�����ͺ��̽� <b>%s</b>�� SQL ����:';

$strRecords = '���ڵ��';
$strReferentialIntegrity = 'referential integrity �˻�:';
$strReloadFailed = 'MySQL ��õ��� �����Ͽ����ϴ�.';
$strReloadMySQL = 'MySQL ��õ�';
$strRememberReload = '������ ��õ��ϴ� ���� ����������.';
$strRenameTable = '���̺� �̸� �����ϱ�';
$strRenameTableOK = '���̺� %s��(��) %s(��)�� �����Ͽ����ϴ�.';
$strRepairTable = '���̺� ����';
$strReplace = '��ġ(Replace)';
$strReplaceTable = '���Ϸ� ���̺� ��ġ�ϱ�';
$strReset = '����Ʈ';
$strReType = '���Է�';
$strRevoke = '����';
$strRevokeGrant = '���� ����';
$strRevokeGrantMessage = '%s�� ���� ������ �����߽��ϴ�.';
$strRevokeMessage = '%s�� ������ �����߽��ϴ�.';
$strRevokePriv = '���� ����';
$strRowLength = '�� ����';
$strRows = '��';
$strRowsFrom = '��. ����(��)��ġ';
$strRowSize = ' Row size ';
$strRowsModeHorizontal = '����(����)';
$strRowsModeOptions = ' %s ���� (%s ĭ�� ������ ��� �ݺ�)';
$strRowsModeVertical = '����(����)';
$strRowsStatistic = '�� ���';
$strRunning = '�Դϴ�. (%s)';
$strRunQuery = '���� ����';
$strRunSQLQuery = '�����ͺ��̽� %s�� SQL ������ ����';

$strSave = '����';
$strSelect = '����';
$strSelectADb = '�����ͺ��̽��� �����ϼ���';
$strSelectAll = '��� ����';
$strSelectFields = '�ʵ� ���� (�ϳ� �̻�):';
$strSelectNumRows = '����(in query)';
$strSend = '���Ϸ� ����';
$strServerChoice = '���� ����';
$strServerVersion = '���� ����';
$strSetEnumVal = '�ʵ� ������ "enum"�̳� "set"�̸�, ������ ���� �������� ���� �Է��Ͻʽÿ�: \'a\',\'b\',\'c\'...<br />�� ���� ��������("\")�� ��������ǥ("\'")�� �־�� �Ѵٸ�, �������ø� ����Ͻʽÿ�. (��: \'\\\\xyz\' �Ǵ� \'a\\\'b\').';
$strShow = '����';
$strShowAll = '��� ����';
$strShowCols = 'Į��(��) ����';
$strShowingRecords = '���ڵ�(��) ����';
$strShowPHPInfo = 'PHP ���� ����';
$strShowTables = '���̺� ����';
$strShowThisQuery = ' �� ������ �ٽ� ������ ';
$strSingly = '(singly)';
$strSize = 'ũ��';
$strSpaceUsage = '���� ��뷮';
$strSQLQuery = 'SQL ����';
$strStatement = '��';
$strStrucCSV = 'CSV ������';
$strStrucData = '������ ������';
$strStrucDrop = '\'DROP TABLE\'�� �߰�';
$strStrucExcelCSV = 'MS���� CSV ������';
$strStrucOnly = '������';
$strSubmit = 'Ȯ��';
$strSuccess = 'SQL ������ �ٸ��� ����Ǿ����ϴ�.';
$strSum = '��';

$strTable = '���̺� ';
$strTableComments = '���̺� ����';
$strTableEmpty = '���̺���� �����ϴ�!';
$strTableHasBeenDropped = '���̺� %s �� �����߽��ϴ�.';
$strTableHasBeenEmptied = '���̺� %s �� ������ϴ�';
$strTableHasBeenFlushed = '���̺� %s �� �ݾҽ��ϴ�(flushed)';
$strTableMaintenance = '���̺� ��������';
$strTables = '���̺� %s ��';
$strTableStructure = '���̺� ����';
$strTableType = '���̺� ����';
$strTextAreaLength = ' �ʵ��� ���� ������,<br />�� �ʵ带 ������ �� �����ϴ� ';
$strTheContent = '���� ������ �����Ͽ����ϴ�.';
$strTheContents = '���� ������ ������ ���̺��� �����̸Ӹ� Ȥ�� ������ Ű�� ��ġ�ϴ� ���� ��ġ(����)��Ű�ڽ��ϴ�.';
$strTheTerminator = '�ʵ� ���� ��ȣ.';
$strTotal = '�հ�';
$strType = '����';

$strUncheckAll = '��� üũ����';
$strUnique = '������';
$strUnselectAll = '��� ���þ���';
$strUpdatePrivMessage = '%s �� ������ ������Ʈ�߽��ϴ�.';
$strUpdateProfile = '�������� ������Ʈ:';
$strUpdateProfileMessage = '���������� ������Ʈ�߽��ϴ�.';
$strUpdateQuery = '���� ������Ʈ';
$strUsage = '����(��)';
$strUseBackquotes = '���̺�, �ʵ�� ������(`) ���';
$strUser = '�����';
$strUserEmpty = '����ڸ��� �����ϴ�!';
$strUserName = '����ڸ�';
$strUsers = '����ڵ�';
$strUseTables = 'Use Tables';

$strValue = '��';
$strViewDump = '���̺��� ����(��Ű��) ������ ����';
$strViewDumpDB = '�����ͺ��̽��� ����(��Ű��) ������ ����';

$strWelcome = '%s�� ���̽��ϴ�';
$strWithChecked = '������ ����:';
$strWrongUser = '����ڸ�/��ȣ�� Ʋ�Ƚ��ϴ�. ������ �źεǾ����ϴ�.';

$strYes = ' �� ';

$strZip = 'zip ����';
// To translate

$strAll = 'All'; // To translate
$strAllTableSameWidth = 'display all Tables with same width?';  //to translate
$strAny = 'Any'; // To translate

$strBeginCut = 'BEGIN CUT';  //to translate
$strBeginRaw = 'BEGIN RAW';  //to translate
$strBookmarkLabel = 'Label'; // To translate
$strBookmarkView = 'View only'; // To translate

$strCantLoadRecodeIconv = 'Can not load iconv or recode extension needed for charset conversion, configure php to allow using these extensions or disable charset conversion in phpMyAdmin.';  //to translate
$strCantUseRecodeIconv = 'Can not use iconv nor libiconv nor recode_string function while extension reports to be loaded. Check your php configuration.';  //to translate
$strCardinality = 'Cardinality'; // To translate
$strChangeDisplay = 'Choose Field to display';  //to translate
$strCharsetOfFile = 'Character set of the file:'; //to translate
$strChoosePage = 'Please choose a Page to edit';  //to translate
$strColComFeat = 'Displaying Column Comments';  //to translate
$strComments = 'Comments';  //to translate
$strConfigFileError = 'phpMyAdmin was unable to read your configuration file!<br />This might happen if php finds a parse error in it or php cannot find the file.<br />Please call the configuration file directly using the link below and read the php error message(s) that you recieve. In most cases a quote or a semicolon is missing somewhere.<br />If you recieve a blank page, everything is fine.'; //to translate
$strConfigureTableCoord = 'Please configure the coordinates for table %s';  //to translate
$strCookiesRequired = '��Ű ����� �����ؾ� �մϴ� past this point.'; // To translate
$strCreateNewDatabase = 'Create new database'; // To translate
$strCreatePage = 'Create a new Page';  //to translate
$strCreatePdfFeat = 'Creation of PDFs';  //to translate
$strCriteria = 'Criteria'; // To translate

$strDeleteFailed = 'Deleted Failed!'; // To translate
$strDisabled = 'Disabled';  //to translate
$strDisplayFeat = 'Display Features';  //to translate
$strDisplayPDF = 'Display PDF schema';  //to translate
$strDumpXRows = 'Dump %s rows starting at row %s.'; //to translate

$strEditPDFPages = 'Edit PDF Pages';  //to translate
$strEnabled = 'Enabled';  //to translate
$strEndCut = 'END CUT';  //to translate
$strEndRaw = 'END RAW';  //to translate
$strExplain = 'Explain SQL';  //to translate
$strExport = 'Export';  //to translate
$strExportToXML = 'Export to XML format'; //to translate

$strFixed = 'fixed'; // To translate
$strFormat = 'Format'; // To translate
$strFormEmpty = 'Missing value in the form !'; // To translate
$strFullText = 'Full Texts'; // To translate

$strGenBy = 'Generated by'; //to translate
$strGeneralRelationFeat = 'General relation features';  //to translate

$strHaveToShow = 'You have to choose at least one Column to display';  //to translate

$strIdxFulltext = 'Fulltext'; // To translate

$strLinkNotFound = 'Link not found';  //to translate
$strLinksTo = 'Links to';  //to translate

$strMissingBracket = 'Missing Bracket';  //to translate
$strMySQLCharset = 'MySQL Charset';  //to translate

$strNoDatabases = 'No databases'; // To translate
$strNoDescription = 'no Description';  //to translate
$strNoExplain = 'Skip Explain SQL';  //to translate
$strNoIndexPartsDefined = 'No index parts defined!'; // To translate
$strNoPhp = 'without PHP Code';  //to translate
$strNotOK = 'not OK';  //to translate
$strNotSet = '<b>%s</b> table not found or not set in %s';  //to translate
$strNoValidateSQL = 'Skip Validate SQL';  //to translate
$strNull = 'Null'; // To translate
$strNumSearchResultsInTable = '%s match(es) inside table <i>%s</i>';//to translate
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> match(es)';//to translate

$strOftenQuotation = 'Often quotation marks. �ɼ�(OPTIONALLY)�� char �� varchar �ʵ尡 "enclosed by"-character�� �����ٴ� ���� ���մϴ�.';  // To translate
$strOK = 'OK';  //to translate
$strOperations = 'Operations';  //to translate
$strOptions = 'Options';  //to translate

$strPageNumber = 'Page number:';  //to translate
$strPartialText = 'Partial Texts'; // To translate
$strPdfDbSchema = 'Schema of the the "%s" database - Page %s';  //to translate
$strPdfInvalidPageNum = 'Undefined PDF page number!';  //to translate
$strPdfInvalidTblName = 'The "%s" table does not exist!';  //to translate
$strPdfNoTables = 'No tables';  //to translate
$strPhp = 'Create PHP Code';  //to translate

$strRelationNotWorking = 'The additional Features for working with linked Tables have been deactivated. To find out why click %shere%s.';  //to translate
$strRelationView = 'Relation view';  //to translate

$strScaleFactorSmall = 'The scale factor is too small to fit the schema on one page';  //to translate
$strSearch = 'Search';//to translate
$strSearchFormTitle = 'Search in database';//to translate
$strSearchInTables = 'Inside table(s):';//to translate
$strSearchNeedle = 'Word(s) or value(s) to search for (wildcard: "%"):';//to translate
$strSearchOption1 = 'at least one of the words';//to translate
$strSearchOption2 = 'all words';//to translate
$strSearchOption3 = 'the exact phrase';//to translate
$strSearchOption4 = 'as regular expression';//to translate
$strSearchResultsFor = 'Search results for "<i>%s</i>" %s:';//to translate
$strSearchType = 'Find:';//to translate
$strSelectTables = 'Select Tables';  //to translate
$strShowColor = 'Show color';  //to translate
$strShowGrid = 'Show grid';  //to translate
$strShowTableDimension = 'Show dimension of tables';  //to translate
$strSort = 'Sort'; // To translate
$strSplitWordsWithSpace = 'Words are seperated by a space character (" ").';//to translate
$strSQL = 'SQL'; //to translate
$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';  //to translate
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';  //to translate
$strSQLResult = 'SQL result'; //to translate
$strSQPBugInvalidIdentifer = 'Invalid Identifer';  //to translate
$strSQPBugUnclosedQuote = 'Unclosed quote';  //to translate
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';  //to translate
$strStructPropose = 'Propose table structure';  //to translate
$strStructure = 'Structure';  //to translate

$strValidateSQL = 'Validate SQL';  //to translate

$strInsecureMySQL = 'Your configuration file contains settings (root with no password) that correspond to the default MySQL privileged account. Your MySQL server is running with this default, is open to intrusion, and you really should fix this security hole.';  //to translate
$strWebServerUploadDirectory = 'web-server upload directory';  //to translate
$strWebServerUploadDirectoryError = 'The directory you set for upload work cannot be reached';  //to translate
$strValidatorError = 'The SQL validator could not be initialized. Please check if you have installed the necessary php extensions as described in the %sdocumentation%s.'; //to translate
$strServer = 'Server %s';  //to translate
$strPutColNames = 'Put fields names at first row';  //to translate
$strImportDocSQL = 'Import docSQL Files';  //to translate
?>
