<?php
/* $Id: malay-utf-8.inc.php,v 1.9 2002/09/20 06:44:08 mikebeck Exp $ */

/*
Projek Penterjemahan (l10n) phpmyadmin.net boleh diakses di laman http://shapik.johordt.com/l10n
Projek ini diusahakan oleh saya - sicksand - Mohammad Shafiq Mohd Mustapa
Ditujukan untuk sayang saya Nur Khairiyah.
Antara yang menjayakan projek ini ialah (turutan bukan keutamaan)

Asrul Munir Bin Azizan - ntahsapentah@hotmail.com
Hasbullah - exs2me@hotmail.com
sot - sid80@yahoo.com
silla - roscla@yahoo.com
bagaksasa - bagaksasa@hotmail.com
Bustamam Harun - bustamam98@yahoo.com
Hasbullah Bin Pit - sebol@ikhlas.com, Merlimau
nina - nina@hotmail.com
muslim - sayamuslim@hotmail.com
ejoe - webmaster@ejoe.net
huhu - huhu@huh.net
redkod - r3dkod@yahoo.com
*/

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Aha', 'Isn', 'Sel', 'Rab', 'Kha', 'Jum');
$month = array('Jan', 'Feb', 'Mac', 'Apr', 'Mei', 'Jun', 'Jul', 'Ogos', 'Sept', 'Okt', 'Nov', 'Dis');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';


$strAccessDenied = 'Akses dinafikan';
$strAction = 'Aksi';
$strAddDeleteColumn = 'Tambah/Padam Kolum Medan';
$strAddDeleteRow = 'Tambah/Padam Baris Kriteria';
$strAddNewField = 'Tambah medan baru';
$strAddPriv = 'Tambah privilej baru';
$strAddPrivMessage = 'Anda telah menambah privilej baru.';
$strAddSearchConditions = 'Tambah kriteria carian (badan bagi klausa "where"):';
$strAddToIndex = 'Tambah ke indeks &nbsp;%s&nbsp;kolum';
$strAddUser = 'Tambah Pengguna Baru';
$strAddUserMessage = 'Anda telah menambah pengguna baru.';
$strAffectedRows = 'Baris yang terlibat:';
$strAfter = 'Selepas %s';
$strAfterInsertBack = 'Kembali ke muka sebelumnya';
$strAfterInsertNewInsert = 'Tambah baris yang baru';
$strAll = 'Semua';
$strAllTableSameWidth = 'paparkan semua Jadual dengan kelebaran yang sama?';
$strAlterOrderBy = 'Alter table order by';
$strAnalyzeTable = 'Analyze table';
$strAnd = 'Dan';
$strAnIndex = 'Indeks telah ditambah pada %s';
$strAny = 'Sebarang';
$strAnyColumn = 'Sebarang Kolum';
$strAnyDatabase = 'Sebarang pangkalan data';
$strAnyHost = 'Sebarang hos';
$strAnyTable = 'Sebarang jadual';
$strAnyUser = 'Sebarang pengguna';
$strAPrimaryKey = 'Kekunci utama telah ditambah pada %s';
$strAscending = 'Menaik';
$strAtBeginningOfTable = 'Pada Awalan Jadual';
$strAtEndOfTable = 'Pada Akhir Jadual';
$strAttr = 'Atribut';

$strBack = 'Undur';
$strBeginCut = 'MULA SALIN';
$strBeginRaw = 'MULA MENTAH';
$strBinary = 'Binari';
$strBinaryDoNotEdit = 'Binari - jgn diubah';
$strBookmarkDeleted = 'TandaBuku telah dipadam.';
$strBookmarkLabel = 'Label';
$strBookmarkQuery = 'Tandabuku kueri-SQL';
$strBookmarkThis = 'andabuku kueri-SQL ini';
$strBookmarkView = 'Paparan sahaja';
$strBrowse = 'Lungsur';
$strBzip = 'bzipped';

$strCantLoadMySQL = 'tidak dapat memuat sambungan MySQL,<br />sila semak konfigurasi PHP.';
$strCantLoadRecodeIconv = 'Tidak dapat memuat iconv atau kodsemula sambungan yang diperlukan untuk menukar set aksara, konfigur php utk membolehkan penggunaan sambungan ini atau abaikan pengubahan set aksara di phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Tidak boleh menukar indekx ke PRIMARY!';
$strCantUseRecodeIconv = 'Tidak boleh menggunakan fungsi iconv mahupun libiconv mahupun recode_string apabila sambungan lapuran dimuat. Periksa konfigurasi php anda.';
$strCardinality = 'Kardinaliti';
$strCarriage = 'DiBaris baru : \\r';
$strChange = 'Ubah';
$strChangeDisplay = 'Pilih Medan untuk dipapar';
$strChangePassword = 'Ubah Katalaluan';
$strCharsetOfFile = 'Fail bagi set Aksara:';
$strCheckAll = 'Tanda Semua';
$strCheckDbPriv = 'Periksa Keutamaan Pengkalan Data';
$strCheckTable = 'Periksa Jadual';
$strChoosePage = 'Sila Pilih Laman untuk diubah';
$strColComFeat = 'Memaparkan Komen Kolum';
$strColumn = 'Kolum';
$strColumnNames = 'Nama Kolum';
$strComments = 'Komen';
$strCompleteInserts = 'Kemasukkan Selesai';
$strConfigFileError = 'phpMyAdmin tidak dapat membaca fail konfigurasi!<br \\>Ini mungkin terjadi apabila ada kesalahan dalam php ataupun php tidak jumpa fail tersebut.<br />Sila panggil fail konfigurasi menggunakan pautan dibawah dan baca kesalahan php yang diterima. Dalam kebanyakan kes quote atau semicolon tertinggal.<br />Jika kamu terima laman kosong, semuanya berjalan lancar.';
$strConfigureTableCoord = 'Sila konfigurasikan kordinat bagi jadual %s';
$strConfirm = 'Anda pasti mahu lakukan?';
$strCookiesRequired = 'Cecikut mestilah dihidupkan ketika ini.';
$strCopyTable = 'Salin jadual ke (pangkalandata<b>.</b>jadual):';
$strCopyTableOK = 'Jadual %s telah disalin ke %s.';
$strCreate = 'Cipta';
$strCreateIndex = 'Cipta indeks pada &nbsp;%s&nbsp;';
$strCreateIndexTopic = 'Cipta indeks baru';
$strCreateNewDatabase = 'Cipta pangkalan data baru';
$strCreateNewTable = 'Cipta jadual baru pada pangkalan data %s';
$strCreatePage = 'Cipta Halaman baru';
$strCreatePdfFeat = 'Ciptaan bagi PDF';
$strCriteria = 'Kriteria';

$strData = 'Data';
$strDatabase = 'Pangkalan Data ';
$strDatabaseHasBeenDropped = 'angkalan data %s telah digugurkan.';
$strDatabases = 'pangkalan data';
$strDatabasesStats = 'Statistik pangkalan data';
$strDatabaseWildcard = 'Pangkalan data (wildcard diizinkan):';
$strDataOnly = 'Data sahaja';
$strDefault = 'Asal';
$strDelete = 'Padam';
$strDeleted = 'Baris telah dipadam';
$strDeletedRows = 'Baris dipadam:';
$strDeleteFailed = 'Pemadaman gagal!';
$strDeleteUserMessage = 'Anda telah memadam pengguna %s.';
$strDescending = 'Menurun';
$strDisabled = 'Tidak Membenarkan';
$strDisplay = 'Papar';
$strDisplayFeat = 'Paparkan Ciri-ciri';
$strDisplayOrder = 'Turutan paparan:';
$strDisplayPDF = 'Papar Skema PDF';
$strDoAQuery = 'Lakukan "kueri melalui contoh" (wilidcard: "%")';
$strDocu = 'Dokumentasi';
$strDoYouReally = 'Adakah anda ingin ';
$strDrop = 'Gugur';
$strDropDB = 'Gugurkan pangkalan data %s';
$strDropTable = 'Gugurkan jadual';
$strDumpingData = 'Melonggok data bagi jadual';
$strDumpXRows = 'Longgok %s baris bermula pada rekod # %s.';
$strDynamic = 'dinamik';

$strEdit = 'Ubah';
$strEditPDFPages = 'Ubah Halaman PDF';
$strEditPrivileges = 'Ubah Privilej';
$strEffective = 'Berkesan';
$strEmpty = 'Kosong';
$strEmptyResultSet = 'MySQL memulangkan set hasil kosong (i.e. sifar baris)';
$strEnabled = 'Membenarkan';
$strEnd = 'Tamat';
$strEndCut = 'TAMAT SALIN';
$strEndRaw = 'TAMAT MENTAH';
$strEnglishPrivileges = ' Nota: Nama privilej MySQL adalah dinyatakan dalam B.Inggeris ';
$strExplain = 'Terangkan Kod SQL';
$strError = 'Ralat';
$strExport = 'Eksport';
$strExportToXML = 'Eksport ke format XML';
$strExtendedInserts = 'Penyelitan Lanjutan';
$strExtra = 'Ekstra';

$strField = 'Medan';
$strFieldHasBeenDropped = 'Medan %s telah digugurkan';
$strFields = 'Medan';
$strFieldsEmpty = ' Bilangan medan adalah kosong! ';
$strFieldsEnclosedBy = 'Medan disertai oleh';
$strFieldsEscapedBy = 'Medan dilarikan oleh';
$strFieldsTerminatedBy = 'Medan dihapuskan oleh';
$strFixed = 'tetap';
$strFlushTable = 'Buang jadual ("FLUSH")';
$strFormat = 'Format';
$strFormEmpty = 'Kehilangan nilai pada borang! !';
$strFullText = 'Teks Penuh';
$strFunction = 'Fungsi';

$strGenBy = 'Dijana oleh';
$strGeneralRelationFeat = 'Ciri-ciri hubungan am';
$strGenTime = 'Masa dijana';
$strGo = 'Pergi';
$strGrants = 'Kabulkan';
$strGzip = '"digzip"';

$strHasBeenAltered = 'telah diubahsuai.';
$strHasBeenCreated = 'telah dicipta.';
$strHaveToShow = 'Anda mesti pilih sekurang-kurangnya satu Kolum untuk dipapar';
$strHome = 'Rumah';
$strHomepageOfficial = 'Laman Rasmi phpMyAdmin';
$strHomepageSourceforge = 'Laman Muaturun phpMyAdmin Sourceforge';
$strHost = 'Hos';
$strHostEmpty = 'Nama hos adalah kosong!';

$strIdxFulltext = 'Tekspenuh';
$strIfYouWish = 'Jika anda ingin hanya memuat sesetengah kolum jadual, nyatakan senarai medan dipisahi koma.';
$strIgnore = 'Abai';
$strIndex = 'Indeks';
$strIndexes = 'Indeks';
$strIndexHasBeenDropped = 'Indeks %s telah digugurkan';
$strIndexName = 'Nama indeks&nbsp;:';
$strIndexType = 'Jenis indeks&nbsp;:';
$strInsecureMySQL = 'Fail Konfigurasi anda mengandungi pelengkapan (root tidak berkata laluan) yang bersesuaian dengan privilej akaun MySQL. Pelayan MySQL anda dilaksanakan dengan pelengkapan asas, ianya terdedah kepada pencerobohan, dan anda hendaklah membetulkan lubang keselamatan ini.';
$strInsert = 'Selit';
$strInsertAsNewRow = 'Selitkan baris baru';
$strInsertedRows = 'Baris diselit:';
$strInsertNewRow = 'Selitkan baris baru';
$strInsertTextfiles = 'Selit data dari fail teks ke jadual';
$strInstructions = 'Arahan';
$strInUse = 'sedang digunakan';
$strInvalidName = '"%s" adalah kata pencam, anda tidak boleh menggunakan ia sebagai pangkalan data/jadual/medan .';

$strKeepPass = 'Jangan tukar katalaluan';
$strKeyname = 'Nama Kekunci';
$strKill = 'Bunuh';

$strLength = 'Panjang';
$strLengthSet = 'Panjang/Nilai*';
$strLimitNumRows = 'Bilangan baris per halaman';
$strLineFeed = 'Suapanbaris: \\n';
$strLines = 'Baris';
$strLinesTerminatedBy = 'Baris ditamatkan oleh';
$strLinkNotFound = 'Pautan tidak dijumpai';
$strLinksTo = 'Pautan ke';
$strLocationTextfile = 'Lokasi bagi fail teks';
$strLogin = 'Logmasuk';
$strLogout = 'Log keluar';
$strLogPassword = 'Katalaluan:';
$strLogUsername = 'Namapengguna:';

$strMissingBracket = 'Kehilangan Kurungan \'(\' atau \')\'';
$strModifications = 'Pengubahsuaian telah disimpan';
$strModify = 'Ubahsuai';
$strModifyIndexTopic = 'Ubahsuai indeks';
$strMoveTable = 'Pindahkan jadual ke (pangkalandata<b>.</b>jadual):';
$strMoveTableOK = 'Jadual %s telah dipindahkan ke %s.';
$strMySQLCharset = 'Set Aksara MySQL';
$strMySQLReloaded = 'MySQL tekah diulangmuat.';
$strMySQLSaid = 'MySQL berkata: ';
$strMySQLServerProcess = 'MySQL  %pma_s1% dilaksana pada %pma_s2% sebagai %pma_s3%';
$strMySQLShowProcess = 'Papar proses';
$strMySQLShowStatus = 'Papar maklumat masalaksana MySQL';
$strMySQLShowVars = 'Papar pembolehubah sistem MySQL';

$strName = 'Nama';
$strNext = 'Berikut';
$strNo = 'Tidak';
$strNoDatabases = 'Tiada pangkalan data';
$strNoDescription = 'tiada keterangan';
$strNoDropDatabases = 'keterangan "DROP DATABASE" di tidak aktifkan .';
$strNoFrames = 'phpMyAdmin lebih mesra dengan pelayar web <b>menyokong-kerangka</b> seperti mozilla.';
$strNoIndex = 'Tiada indeks ditafrifkan!';
$strNoIndexPartsDefined = 'Tiada bahagian indeks ditakrifkan!';
$strNoModification = 'Tiada perubahan';
$strNone = 'Tiada';
$strNoPassword = 'Tiada Katalaluan';
$strNoPhp = 'Tanpa Kod PHP';
$strNoPrivileges = 'Tiada Privilej';
$strNoQuery = 'Tiada kueri SQL!';
$strNoRights = 'Anda tidak mempunyai hak mencukupi untuk berada disini sekarang!';
$strNoTablesFound = 'Tiada jadual dijumpai pada pangkalan data.';
$strNotNumber = 'Ini adalah bukan nombor!!';
$strNotOK = 'tidak OK';
$strNotSet = 'Jadual <b>%s</b> tidak dijumpai atau ditetapkan pada %s';
$strNotValidNumber = ' adalah bukan baris yang sah!';
$strNoUsersFound = 'Tiada pengguna dijumpai.';
$strNoValidateSQL = 'Melangkau Pengesahan SQL';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s padanan di dalam jadual <i>%s</i>';
$strNumSearchResultsTotal = '<b>Jumlah</b>: <i>%s</i> padanan';

$strOftenQuotation = 'Selalu tanda semakan. OPTIONALLY bermaksud hanya medan char dan varchar disertakan oleh "disertakan oleh"-aksara.';
$strOK = 'OK';
$strOperations = 'Operasi';
$strOptimizeTable = 'Optimakan jadual';
$strOptionalControls = 'Opsional. Kawal bagaimana menulis dan membaca aksara istimewa.';
$strOptionally = 'Opsional';
$strOptions = 'Pilihan';
$strOr = 'Atau';
$strOverhead = 'Melebihi';

$strPageNumber = 'Muka Surat:';
$strPartialText = 'Sebahagian Teks';
$strPassword = 'Katalaluan';
$strPasswordEmpty = 'Katalaluan adalah kosong!';
$strPasswordNotSame = 'Katalaluan tidak sama!';
$strPdfDbSchema = 'Skema bagi pangkalan data "%s" database - Laman %s';
$strPdfInvalidPageNum = 'bilangan halaman PDF tak tertakrif!';
$strPdfInvalidTblName = 'Jadual "%s" tidak wujud!';
$strPdfNoTables = 'Tiada Jadual';
$strPhp = 'Cipta Kod PHP';
$strPHPVersion = 'Versi PHP';
$strPmaDocumentation = 'Dokumentasi phpMyAdmin';
$strPmaUriError = '<tt>$cfg[PmaAbsoluteUri]</tt> MESTI disetkan di dalam fail konfigurasi.';
$strPos1 = 'Mula';
$strPrevious = 'Terdahulu';
$strPrimary = 'Utama';
$strPrimaryKey = 'Kekunci utama';
$strPrimaryKeyHasBeenDropped = 'Kekunci utama telah digugurkan';
$strPrimaryKeyName = 'Nama kekunci utama mestilah... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>mesti</b> nama dan <b>semesti</b> dari kekunci utama!)';
$strPrintView = 'Paparan Cetak';
$strPrivileges = 'Privilej';
$strProperties = 'Ciri-ciri';

$strQBE = 'Kueri';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryOnDb = 'SQL- kueri pada pangkalan data <b>%s</b>:';

$strRecords = 'Rekod';
$strReferentialIntegrity = 'Semak integriti rujukan:';
$strRelationNotWorking = 'Ciri-ciri tambahan ini adalah untuk bekerja dengan pautan jadual yang telah tidak diaktifkan. Untuk mengetahuinya klik %shere%s.';
$strRelationView = 'Paparan Hubungan';
$strReloadFailed = 'Pengulangmuatan MySQL gagal.';
$strReloadMySQL = 'Ulangmuat MySQL';
$strRememberReload = 'Ingat untuk ulatmuat ke pelayan.';
$strRenameTable = 'Tukarnama jadual ke';
$strRenameTableOK = 'Jadual %s telah ditukarnama ke %s';
$strRepairTable = 'Baiki jadual';
$strReplace = 'Ganti';
$strReplaceTable = 'Ganti data jadual dengan fail';
$strReset = 'Ulangtetap';
$strReType = 'Ulang-taip';
$strRevoke = 'TarikBalik';
$strRevokeGrant = 'TarikBalik Keistimewaan';
$strRevokeGrantMessage = 'You have revoked the Grant privilege for %s';
$strRevokeMessage = 'Anda telah menarikbalik privilej Keistimewaan untuk %s';
$strRevokePriv = 'Anda telah menarikbalik privilej untuk %s';
$strRowLength = 'Panjang baris';
$strRows = 'Baris';
$strRowsFrom = 'baris bermula dari rekod #';
$strRowSize = ' Saiz baris ';
$strRowsModeHorizontal = 'mengufuk';
$strRowsModeOptions = 'pada mod %s dan ulang pengepala selepas %s sel';
$strRowsModeVertical = 'menegak';
$strRowsStatistic = 'Statistik Baris';
$strRunning = 'dilaksana pada %s';
$strRunQuery = 'Hantar Kueri';
$strRunSQLQuery = 'Laksana kueri SQL pada pangkalan data %s';

$strSave = 'Simpan';
$strScaleFactorSmall = 'Faktor skala adalah terlalu kecil supaya muat dengan skema dalam satu halaman';
$strSearch = 'Cari';
$strSearchFormTitle = 'Cari di pangkalan data';
$strSearchInTables = 'Di dalam jadual:';
$strSearchNeedle = 'Perkataan atau nilai untuk dicari (wildcard:  "%"):';
$strSearchOption1 = 'sekurang-kurangnya satu perkataan';
$strSearchOption2 = 'semua perkataan';
$strSearchOption3 = 'Frasa tepat';
$strSearchOption4 = 'sebagai penyataan regular (regexp)';
$strSearchResultsFor = 'Hasil carian bagi "<i>%s</i>" %s:';
$strSearchType = 'Cari:';
$strSelect = 'Pilih';
$strSelectADb = 'Sila pilih pangkalan data';
$strSelectAll = 'Sila pilih pangkalan data';
$strSelectFields = 'Pilih medan (sekurang-kurangnya satu):';
$strSelectNumRows = 'pada kueri';
$strSelectTables = 'Pilih Jadual';
$strSend = 'Simpan sebagai fail';
$strServerChoice = 'Pilihan Pelayan';
$strServerVersion = 'Versi Pelayan';
$strSetEnumVal = 'Jika jenis medan ialah "enum" atau "set", sila masukkan nilai menggunakan format: \'a\',\'b\',\'c\'...<br />Jika Anda ingin menggunakan backslash ("\") atau single quote ("\'") didalam nilai tersebut, backslashes kan ia (cth \'\\\\xyz\' or \'a\\\'b\').';
$strShow = 'Papar';
$strShowAll = 'Papar semua';
$strShowColor = 'Papar warna';
$strShowCols = 'Papar kolum';
$strShowGrid = 'Papar grid';
$strShowingRecords = 'Papar baris';
$strShowPHPInfo = 'Papar maklumat PHP';
$strShowTableDimension = 'Papar dimensi jadual';
$strShowTables = 'Papar jadual';
$strShowThisQuery = ' Papar kueri ini di sini lagi ';
$strSingly = '(persatu)';
$strSize = 'Saiz';
$strNoExplain = 'Skip Explain SQL';
$strSort = 'Isih';
$strSpaceUsage = 'Penggunaan ruang';
$strSplitWordsWithSpace = 'Perkataan dipisahkan oleh aksara ruang (" ").';
$strSQL = 'SQL';
$strSQLParserBugMessage = 'Ada kemungkinan anda akan berjumpa dengan pepijat di penghuraian SQL. Sila semak kueri anda dengan teliti, dan periksa tanda quote adalah betul dan tidak tersalah letak. Antara kegagalan lain mungkin disebabkan fail yang dimuatnaik bersama binari oleh anda berada diluar kawasan quote. Anda juga boleh mencuba kueri MySQL anda di antaramuka aturan baris (cli). Dibawah adalah kesalah Pelayan MySql , jika ada, ianya membantu anda menganalisis masalah. Jika masih terdapat pemasalahan atau masalah penghuraian dimana antaramuka aturan baris berjaya, sila kurangkan kemasukan kueri SQL kepada satu kueri yang bermasalah, dan lapurkan pepijat desertai oleh seruas data dan SALIN keratan rentas dibawah:';
$strSQLParserUserError = 'Ada kemungkin kueri SQL anda salah. Dibawah adalah kesalah Pelayan MySql , jika ada, ianya membantu anda menganalisis masalah';
$strSQLQuery = 'kueri-SQL';
$strSQLResult = 'Hasil SQL';
$strSQPBugInvalidIdentifer = 'Pengenalan TidakSah';
$strSQPBugUnclosedQuote = 'Tanda quote tidak disertakan';
$strSQPBugUnknownPunctuation = 'TandaBaca tidak dikenali';
$strStatement = 'Penyataan';
$strStrucCSV = 'data CSV';
$strStrucData = 'Struktur dan data';
$strStrucDrop = 'Tambah \'drop table\'';
$strStrucExcelCSV = 'CSV untuk sata MS Excel';
$strStrucOnly = 'Struktur sahaja';
$strStructPropose = 'Cadangkan struktur jadual';
$strStructure = 'Struktur';
$strSubmit = 'Hantar';
$strSuccess = 'Kueri-SQL anda telah dilaksanakan dengan jaya';
$strSum = 'Jumlah';

$strTable = 'jadual ';
$strTableComments = 'Komen jadual';
$strTableEmpty = 'Nama jadual  adalah kosong';
$strTableHasBeenDropped = 'Jadual %s telah digugurkan';
$strTableHasBeenEmptied = 'Jadual %s telah dikosongkan';
$strTableHasBeenFlushed = 'Jadual %s telah dibuangkan';
$strTableMaintenance = 'Penyenggaraan Jadual';
$strTables = '%s jadual';
$strTableStructure = 'Struktur jadual bagi jadual';
$strTableType = 'Jenis Jadual';
$strTextAreaLength = ' Kerana kepanjangannya, <br />medan ini tidak boleh diedit ';
$strTheContent = 'Kandungan fail anda telah diselit.';
$strTheContents = 'Kandungan fail telah digantikan dengan kandungan dari pilihan jadual untuk baris dengan persamaan kekunci utama ataupun kekunci unik.';
$strTheTerminator = 'Pemisah bagi medan.';
$strTotal = 'jumlah';
$strType = 'Jenis';

$strUncheckAll = 'Nyahtanda Semua';
$strUnique = 'Unik';
$strUnselectAll = 'Nyahpilih Semua';
$strUpdatePrivMessage = 'Anda telah mengemaskini privilej bagi %s.';
$strUpdateProfile = 'Kemaskini profil:';
$strUpdateProfileMessage = 'Profil telah dikemaskini.';
$strUpdateQuery = 'Kemaskini Kueri';
$strUsage = 'Penggunaan';
$strUseBackquotes = 'Sertakan nama jadual dan medan dengan backquotes';
$strUser = 'Pengguna';
$strUserEmpty = 'Kata Pengenalan kosong!';
$strUserName = 'Kata Pengenalan';
$strUsers = 'Pengguna-Pengguna';
$strUseTables = 'Guna Jadual';

$strValidateSQL = 'Mengesahkan SQL';
$strValue = 'Nilai';
$strViewDump = 'Lihat longgokan (skema) pangkalan data';
$strViewDumpDB = 'View dump (schema) of database';

$strWebServerUploadDirectory = 'direktori muatnaik pelayan-web';
$strWelcome = 'Selamat Datang ke %s';
$strWithChecked = 'Dengan pilihan:';
$strWrongUser = 'Salah kata pengenalan/kata laluan. Akses dilarang.';

$strYes = 'Ya';

$strZip = '"zipped"';

$strWebServerUploadDirectoryError = 'Direktori muatnaik yang telah ditetapkan tidak dapat dicapai';
$strValidatorError = 'Pengesahan SQL tidak dapat disahkan. Sila semak sama ada anda telah memasang sambungan php seperti yang tercatitit di %sdocumentation%s.'; 
$strServer = 'Pelayan %s'; 
$strPutColNames = 'Letakkan medan di baris pertama';
$strImportDocSQL = 'Import docSQL Files';  //to translate
?>
