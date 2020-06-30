<?php
/* $Id: ukrainian-utf-8.inc.php,v 1.25 2002/09/20 06:44:08 mikebeck Exp $ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('Байт', 'кБ', 'МБ', 'ГБ');

$day_of_week = array('Нд', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб');
$month = array('Січ', 'Лют', 'Бер', 'Квт', 'Трв', 'Чрв', 'Лип', 'Сер', 'Вер', 'Жов', 'Лис', 'Гру');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y р., %H:%M';

$strAccessDenied = 'Доступ заборонено';
$strAction = 'Дія';
$strAddDeleteColumn = 'Додати/забрати колонку критерію';
$strAddDeleteRow = 'Додати/забрати рядок критерію';
$strAddNewField = 'Додати нове поле';
$strAddPriv = 'Додати нові привілеї';
$strAddPrivMessage = 'Було додано новий привілей';
$strAddSearchConditions = 'Додати умови пошуку (тіло для умови "where"):';
$strAddToIndex = 'Додати до індексу&nbsp;%s&nbsp;колоноку(и)';
$strAddUser = 'Додати нового користувача';
$strAddUserMessage = 'Було додано нового користувача.';
$strAffectedRows = 'Задіяні рядки:';
$strAfter = 'Після %s';
$strAfterInsertBack = 'Повернутись';
$strAfterInsertNewInsert = 'Вставити новий запис';
$strAll = 'Все';
$strAlterOrderBy = 'Змінити порядок таблиці';
$strAnalyzeTable = 'Аналіз таблиці';
$strAnd = 'І';
$strAnIndex = 'Було додано індекс для %s';
$strAny = 'Довільний';
$strAnyColumn = 'Довільна колонка';
$strAnyDatabase = 'Довільн база даних';
$strAnyHost = 'Довільний хост';
$strAnyTable = 'Довільна таблиця';
$strAnyUser = 'Довільний користувач';
$strAPrimaryKey = 'Було додано первинний ключ до %s';
$strAscending = 'Зростаючий';
$strAtBeginningOfTable = 'На початку таблиці';
$strAtEndOfTable = 'У кінці таблиці';
$strAttr = 'Атрибути';

$strBack = 'Назад';
$strBinary = ' Двійковий ';
$strBinaryDoNotEdit = ' Двійкові дані - не редагуються ';
$strBookmarkDeleted = 'Закладку було видалено.';
$strBookmarkLabel = 'Мітка';
$strBookmarkQuery = 'Закладка на SQL-запит';
$strBookmarkThis = 'Закладка на даний SQL-запит';
$strBookmarkView = 'Лише перегляд';
$strBrowse = 'Переглянути';
$strBzip = 'запакувати в "bzip"';

$strCantLoadMySQL = 'розширення MySQL не завантажено,<br />перевірте конфігурацію PHP.';
$strCantLoadRecodeIconv = 'Не можу завантажити iconv чи recode extension необхідні для зміни charset-у, сконфігуруйте php так, щоб можна було використовувати ці extensions, або забороніть зміну charset-у у phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Неможливо перейменувати індекс в PRIMARY!';
$strCantUseRecodeIconv = 'Не можу  використати ні/або iconv, ні/або libiconv, ні/або функцію recode_string поки буде завантажено extension reports. Перевірте Вашу php конфігурацію.';
$strCardinality = 'Кількість елементів';
$strCarriage = 'Повернення каретки: \\r';
$strChange = 'Змінити';
$strChangeDisplay = 'Виберіть поля для відображення';
$strChangePassword = 'Змінити пароль';
$strCheckAll = 'Відмітити все';
$strCheckDbPriv = 'Перевірити привілеї бази даних';
$strCheckTable = 'Перевірити таблицю';
$strChoosePage = 'Прошу вибрати сторінку для редагування';
$strColComFeat = 'Показувати коментарі стовпців';
$strColumn = 'Колонка';
$strColumnNames = 'Назви колонок';
$strComments = 'Коментарі';
$strCompleteInserts = 'Повна вставка';
$strConfigFileError = 'phpMyAdmin не може прочитати конфігураційний файл <br />Це може статися у тому випадку, коли php натрапить на синтаксичну помилку (parse error) у ньому, або не може знайти самого файлу.<br />Завантажте конфігураційний файл безпосередньо за допомогою посилання поданого нижче і прочитайте отримані повідомлення про помилки (php error messages). Найчастіше десь у файлі просто бракує лапок чи двокрапки.  <br />Якщо Ви отримаєте порожню сторінку, - значить все в порядку.';
$strConfigureTableCoord = 'Прошу сконфіґурувати координати таблиці %s';
$strConfirm = 'Ви насправді хочете це зробити?';
$strCookiesRequired = 'З цього моменту Cookies повинні бути дозволені.';
$strCopyTable = 'Скопіювати таблицю в (база даних<b>.</b>таблиця):';
$strCopyTableOK = 'Таблицю %s було скопійовано в %s.';
$strCreate = 'Створити';
$strCreateIndex = 'Створити індекс на&nbsp;%s&nbsp;колонках';
$strCreateIndexTopic = 'Створити новий індекс';
$strCreateNewDatabase = 'Створити нову БД';
$strCreateNewTable = 'Створити нову таблицю в БД %s';
$strCreatePage = 'Створити нову сторінку';
$strCreatePdfFeat = 'Створити PDF-файл';
$strCriteria = 'Критерій';

$strData = 'Дані';
$strDatabase = 'БД ';
$strDatabaseHasBeenDropped = 'Базу даних %s знищено.';
$strDatabases = 'Бази Даних';
$strDatabasesStats = 'Статистика баз даних';
$strDatabaseWildcard = 'База даних (дозволено використання шаблонів):';
$strDataOnly = 'Лише дані';
$strDefault = 'По замовчуванню';
$strDelete = 'Видалити';
$strDeleted = 'Рядок видалено';
$strDeletedRows = 'Видалено наступні рядки:';
$strDeleteFailed = 'Видалення не вдалося!';
$strDeleteUserMessage = 'Видалено користувача %s.';
$strDescending = 'Спадаючий';
$strDisabled = 'недоступно';
$strDisplay = 'Показати';
$strDisplayFeat = 'Показати можливості';
$strDisplayOrder = 'Порядок перегляду:';
$strDisplayPDF = 'Показати PDF схему';
$strDoAQuery = 'Виконати "запит згідно прикладу" (символ підставновки: "%")';
$strDocu = 'Документація';
$strDoYouReally = 'Ви насправді хочете ';
$strDrop = 'Знищити';
$strDropDB = 'Знищити БД %s';
$strDropTable = 'Видалити таблицю';
$strDumpingData = 'Дамп даних таблиці';
$strDumpXRows = 'Зґенерувати дамп %s рядків починаючи з %s -го.';
$strDynamic = 'динамічний';

$strEdit = 'Редагувати';
$strEditPDFPages = 'Редагувати PDF Сторінки';
$strEditPrivileges = 'Редагування привілеїв';
$strEffective = 'Ефективність';
$strEmpty = 'Очистити';
$strEmptyResultSet = 'MySQL повернула пустий результат (тобто нуль рядків).';
$strEnabled = 'дозволено';
$strEnd = 'Кінець';
$strEnglishPrivileges = ' Зауваження: привілеї MySQL задаються по-англійськи ';
$strError = 'Помилка';
$strExport = 'Експорт';
$strExportToXML = 'Експортувати у XML формат';
$strExtendedInserts = 'Розширена вставка';
$strExtra = 'Додатково';

$strField = 'Поле';
$strFieldHasBeenDropped = 'Поле %s було видалено';
$strFields = 'Поля';
$strFieldsEmpty = ' Порожній перелік полів! ';
$strFieldsEnclosedBy = 'Поля взято в';
$strFieldsEscapedBy = 'Поля екрануються';
$strFieldsTerminatedBy = 'Поля розділені';
$strFixed = 'фіксований';
$strFlushTable = 'Очистити кеш таблиці ("FLUSH")';
$strFormat = 'Формат';
$strFormEmpty = 'Не задано значення для форми!';
$strFullText = 'Повні тексти';
$strFunction = 'Функція';

$strGenBy = 'Згенеровано';
$strGeneralRelationFeat = 'Загальні можливості';
$strGenTime = 'Час створення';
$strGo = 'Вперед';
$strGrants = 'Права';
$strGzip = 'запакувати в "gzip"';

$strHasBeenAltered = 'була змінена.';
$strHasBeenCreated = 'була створена.';
$strHaveToShow = 'Необхідно вибрати принаймі один Стовпчик для показу';
$strHome = 'На початок';
$strHomepageOfficial = 'Офіційна сторінка phpMyAdmin';
$strHomepageSourceforge = 'Завантаження phpMyAdmin з Sourceforge';
$strHost = 'Хост';
$strHostEmpty = 'Порожнє ім\'я хоста!';

$strIdxFulltext = 'ПовнТекст';
$strIfYouWish = 'Якщо Ви бажаєте завантажити лише деякі колонки таблиці, задайте розділений комами список полів.';
$strIgnore = 'Ігноруровати';
$strIndex = 'Індекс';
$strIndexes = 'Індекси';
$strIndexHasBeenDropped = 'Індекс %s було знищено';
$strIndexName = 'Назва індекса&nbsp;:';
$strIndexType = 'Тип індекса&nbsp;:';
$strInsert = 'Вставити';
$strInsertAsNewRow = 'Вставити як новий рядок';
$strInsertedRows = 'Додані рядки:';
$strInsertNewRow = 'Вставити новий рядок';
$strInsertTextfiles = 'Вставити текстові файли в таблицю';
$strInstructions = 'Інструкції';
$strInUse = 'використовується';
$strInvalidName = '"%s" - зарезервоване слово, ви не можете використовувати його для назви бази даних/таблиці/поля.';

$strKeepPass = 'Не змінювати пароль';
$strKeyname = 'Ім\'я ключа';
$strKill = 'Вбити';

$strLength = 'Довжина';
$strLengthSet = 'Довжини/Значення*';
$strLimitNumRows = 'записів на сторінці';
$strLineFeed = 'Символ кінця рядка: \\n';
$strLines = 'Рядки';
$strLinesTerminatedBy = 'Рядки розділено';
$strLinkNotFound = 'Лінк не знайдено';
$strLinksTo = 'Лінки до';
$strLocationTextfile = 'вкажіть розташування текстового файлу';
$strLogin = 'Вхід в систему';
$strLogout = 'Вийти з системи';
$strLogPassword = 'Пароль:';
$strLogUsername = 'Ім\'я користувача:';

$strMissingBracket = 'бракує дужки';
$strModifications = 'Модифікації було збережено';
$strModify = 'Змінити';
$strModifyIndexTopic = 'Змінити індекс';
$strMoveTable = 'Перенести таблицю в (база даних<b>.</b>таблиця):';
$strMoveTableOK = 'Таблицю %s було перенесено в %s.';
$strMySQLCharset = 'MySQL Charset';
$strMySQLReloaded = 'MySQL перезавантажено.';
$strMySQLSaid = 'Відповідь MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% на %pma_s2% як %pma_s3%';
$strMySQLShowProcess = 'Показати процеси';
$strMySQLShowStatus = 'Показати стан MySQL';
$strMySQLShowVars = 'Показати системні змінні MySQL';

$strName = 'Ім\'я';
$strNext = 'Дальше';
$strNo = 'Ні';
$strNoDatabases = 'БД відсутні';
$strNoDescription = 'без опису';
$strNoDropDatabases = 'Оператори "DROP DATABASE" заборонені.';
$strNoFrames = 'Для роботи phpMyAdmin потрібно браузер з підтримкою <b>фреймів</b>.';
$strNoIndex = 'Індекс не визначено!';
$strNoIndexPartsDefined = 'Не визначено частини індекса!';
$strNoModification = 'Змін немає';
$strNone = 'Немає';
$strNoPassword = 'Без паролю';
$strNoPhp = 'без PHP коду';
$strNoPrivileges = 'Без привілеїв';
$strNoQuery = 'Не задано SQL-запит!';
$strNoRights = 'Ви для цього маєте недостатньо прав!';
$strNoTablesFound = 'В БД не виявлено таблиць.';
$strNotNumber = 'Це не число!';
$strNotOK = 'не OK';
$strNotSet = 'Таблицю <b>%s</b> не знайдено або не визначено у %s';
$strNotValidNumber = ' недопустима кількість рядків!';
$strNoUsersFound = 'Не знайдено користувача.';
$strNull = 'Нуль';
$strNumSearchResultsInTable = '%s співпадіння у таблиці <i>%s</i>';
$strNumSearchResultsTotal = '<b>Разом:</b> <i>%s</i> співпадіння';

$strOftenQuotation = 'Звичайно лапки. ПО ВИБОРУ означає, що лише поля char і varchar беруться в лапки.';
$strOK = 'OK';
$strOperations = 'Операцій';
$strOptimizeTable = 'Оптимізувати таблицю';
$strOptionalControls = 'По вибору. Контролює читання та написання спеціальних символів.';
$strOptionally = 'ПО ВИБОРУ';
$strOptions = 'Параметри';
$strOr = 'або';
$strOverhead = 'Надмірні видатки';

$strPageNumber = 'Номер сторінки:';
$strPartialText = 'Часткові тексти';
$strPassword = 'Пароль';
$strPasswordEmpty = 'Порожній пароль!';
$strPasswordNotSame = 'Паролі не однакові!';
$strPdfDbSchema = 'Схема бази даних "%s" - Сторінка %s';
$strPdfInvalidPageNum = 'Не встановлено номер PDF сторінки!';
$strPdfInvalidTblName = 'Таблиці "%s" не існує!';
$strPhp = 'Створити PHP код';
$strPHPVersion = 'Версія PHP';
$strPmaDocumentation = 'Документація по phpMyAdmin';
$strPmaUriError = 'Змінна <tt>$cfg[\'PmaAbsoluteUri\']</tt> ПОВИННА бути встановалена у Вашому конфігураційному файлі!';
$strPos1 = 'Початок';
$strPrevious = 'Назад';
$strPrimary = 'Первинний';
$strPrimaryKey = 'Первинний ключ';
$strPrimaryKeyHasBeenDropped = 'Первинний ключ було знищено';
$strPrimaryKeyName = 'Ім\'я первинного ключа повинно бути PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>повинно</b> бути іменем <b>лише</b> первинного ключа!)';
$strPrintView = 'Версія для друку';
$strPrivileges = 'Привілеї';
$strProperties = 'Властивості';

$strQBE = 'Запит згідно прикладу';
$strQBEDel = 'Видалити';
$strQBEIns = 'Вставити';
$strQueryOnDb = 'SQL-запит до БД <b>%s</b>:';

$strRecords = 'Записи';
$strReferentialIntegrity = 'Перевір цілісність даних на рівні посилань:';
$strRelationView = 'Перегляд залежностей';
$strReloadFailed = 'Не вдалось перезавантажити MySQL.';
$strReloadMySQL = 'Перезавантажити MySQL';
$strRememberReload = 'Не забудьте перезавантажити сервер.';
$strRenameTable = 'Перейменувати таблицю в';
$strRenameTableOK = 'Таблицю %s було перейменовано в %s';
$strRepairTable = 'Ремонтувати таблицю';
$strReplace = 'Замінити';
$strReplaceTable = 'Замінити дані таблиці даними з файлу';
$strReset = 'Перевстановити';
$strReType = 'Підтвердження';
$strRevoke = 'Відмінити';
$strRevokeGrant = 'Відмінити надання прав';
$strRevokeGrantMessage = 'Було відмінено надання прав для %s';
$strRevokeMessage = 'Ви змінили привілеї для %s';
$strRevokePriv = 'Відмінити привілеї';
$strRowLength = 'Довжина рядка';
$strRows = 'Рядки';
$strRowsFrom = 'рядків з';
$strRowSize = ' Розмір рядка ';
$strRowsModeHorizontal = ' горизонтально ';
$strRowsModeOptions = '-го %s і дублювати заголовки через кожні %s рядків ';
$strRowsModeVertical = ' вертикально ';
$strRowsStatistic = 'Статистика рядка';
$strRunning = 'на %s';
$strRunQuery = 'Виконати запит';
$strRunSQLQuery = 'Виконати SQL запит(и) до БД %і';

$strSave = 'Зберегти';
$strScaleFactorSmall = 'Занадто малий масштаб щоб схема займала цілу сторінку';
$strSearch = 'Шукати';
$strSearchFormTitle = 'Шукати в базі даних';
$strSearchInTables = 'Всередині таблиць:';
$strSearchNeedle = 'Слова чи значення, які потрібно знайти (маска: "%"):';
$strSearchOption1 = 'принаймі одне з слів';
$strSearchOption2 = 'всі слова';
$strSearchOption3 = 'точну фразу';
$strSearchOption4 = 'регулярний вираз';
$strSearchResultsFor = 'Результати пошуку "<i>%s</i>" %s:';
$strSearchType = 'Знайти:';
$strSelect = 'Вибрати';
$strSelectADb = 'Прошу вибрати базу даних';
$strSelectAll = 'Відмітити все';
$strSelectFields = 'Вибрати поля (щонайменше одне):';
$strSelectNumRows = 'по запиту';
$strSelectTables = 'Вибрати таблиці';
$strSend = 'Відіслати';
$strServerChoice = 'Вибір сервера';
$strServerVersion = 'Версія сервера';
$strSetEnumVal = 'Для типів поля "enum" та "set", введіть значення згідно такого формату: \'a\',\'b\',\'c\'...<br />Якщо вам буде потрібно ввести зворотню косу риску ("\"") або поодинокі лапки ("\'") посеред цих значень, поставте перед ними зворотню косу риску (наприклад, \'\\\\xyz\' чи \'a\\\'b\').';
$strShow = 'Показати';
$strShowAll = 'Показати все';
$strShowColor = 'Показати колір';
$strShowCols = 'Показати колонки';
$strShowGrid = 'Показати сітку';
$strShowingRecords = 'Показано записи ';
$strShowPHPInfo = 'Показати інформацію про PHP';
$strShowTableDimension = 'Показати розміри таблиць';
$strShowTables = 'Показати таблиці';
$strShowThisQuery = ' Показати даний запит знову ';
$strSingly = '(окремо)';
$strSize = 'Розмір';
$strSort = 'Посортувати';
$strSpaceUsage = 'Простір, що використовується';
$strSplitWordsWithSpace = 'Слова розділені пробілом (" ").';
$strSQL = 'SQL';
$strSQLQuery = 'SQL-запит';
$strSQLResult = 'SQL result';
$strStatement = 'Параметр';
$strStrucCSV = 'CSV дані';
$strStrucData = 'Структуру і дані';
$strStrucDrop = 'Додати видалення таблиці';
$strStrucExcelCSV = 'CSV для даних MS Excel';
$strStrucOnly = 'Лише структуру';
$strStructPropose = 'Запропонувати структуру таблиці';
$strStructure = 'Структура';
$strSubmit = 'Виконати';
$strSuccess = 'Ваш SQL-запит було успішно виконано';
$strSum = 'Всього';

$strTable = 'таблиця ';
$strTableComments = 'Коментар до таблиці';
$strTableEmpty = 'Порожня назва таблиці!';
$strTableHasBeenDropped = 'Таблицю %s було знищено';
$strTableHasBeenEmptied = 'Таблицю %s було очищено';
$strTableHasBeenFlushed = 'Було очищено кеш таблиці %s';
$strTableMaintenance = 'Обслговування таблиці';
$strTables = '%s таблиц(і)';
$strTableStructure = 'Структура таблиці';
$strTableType = 'Тип таблиці';
$strTextAreaLength = ' Через велику довжину,<br /> це поле не може бути відредаговано ';
$strTheContent = 'Вміст файлу було імпортовано.';
$strTheContents = 'Вміст файлу заміняє вміст таблиці для рядків з ідентичними первинним або унікальними ключами.';
$strTheTerminator = 'Символ закінчення полів.';
$strTotal = 'всього';
$strType = 'Тип';

$strUncheckAll = 'Зняти усі відмітки';
$strUnique = 'Унікальне';
$strUnselectAll = 'Зняти всі відмітки';
$strUpdatePrivMessage = 'Було змінено привілеї для';
$strUpdateProfile = 'Поновити профіль:';
$strUpdateProfileMessage = 'Профіль було поновлено.';
$strUpdateQuery = 'Доповнити запит';
$strUsage = 'Використання';
$strUseBackquotes = 'Зворотні лапки в назвах таблиць і полів';
$strUser = 'Користувач';
$strUserEmpty = 'Порожнє і\'мя користувача!';
$strUserName = 'Ім\'я користувача';
$strUsers = 'Користувачі';
$strUseTables = 'Використовувати таблиці';

$strValue = 'Значення';
$strViewDump = 'Переглянути дамп (схему) таблиці';
$strViewDumpDB = 'Переглянути дамп (схему) БД';

$strWelcome = 'Ласкаво просимо до %s';
$strWithChecked = 'З відміченими:';
$strWrongUser = 'Невірний логін/пароль. Доступ не дозволено.';

$strYes = 'Так';

$strZip = 'запакувати в "zip"';
// To translate

$strAllTableSameWidth = 'display all Tables with same width?';  //to translate

$strBeginCut = 'BEGIN CUT';  //to translate
$strBeginRaw = 'BEGIN RAW';  //to translate

$strCharsetOfFile = 'Character set of the file:'; //to translate

$strEndCut = 'END CUT';  //to translate
$strEndRaw = 'END RAW';  //to translate
$strExplain = 'Explain SQL';  //to translate

$strNoExplain = 'Skip Explain SQL';  //to translate
$strNoValidateSQL = 'Skip Validate SQL';  //to translate

$strPdfNoTables = 'No tables';  //to translate

$strRelationNotWorking = 'The additional Features for working with linked Tables have been deactivated. To find out why click %shere%s.';  //to translate

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