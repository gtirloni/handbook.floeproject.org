<?php
/** Min Dong Chinese (Mìng-dĕ̤ng-ngṳ̄)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Xqt
 * @author Yejianfei
 */

$datePreferences = array(
	'default',
	'ISO 8601',
);
$defaultDateFormat = 'cdo';
$dateFormats = array(
	'cdo time' => 'H:i',
	'cdo date' => 'Y "nièng" n "nguŏk" j "hô̤" (l)',
	'cdo both' => 'Y "nièng" n "nguŏk" j "hô̤" (D) H:i',
);

$messages = array(
# User preference toggles
'tog-underline'              => '下劃綫鏈接',
'tog-justify'                => '調蜀調幾段',
'tog-hideminor'              => '藏起最近改變其過要修改',
'tog-hidepatrolled'          => '藏起最近改變其巡邏修改',
'tog-numberheadings'         => '自動編號其標題',
'tog-editondblclick'         => '雙擊就修改頁面',
'tog-rememberpassword'       => '共我其躒底記錄記敆茲萆瀏覽器𡅏（最長$1{{PLURAL:$1|日}}）',
'tog-watchcreations'         => '加添我開其頁面共我上傳其文件遘我其監視單',
'tog-watchdefault'           => '添加我編輯其頁面共文件遘我其監視單',
'tog-watchmoves'             => '添加我移動其頁面共文件遘我其監視單',
'tog-watchdeletion'          => '添加我刪掉其頁面共文件遘我其監視單',
'tog-minordefault'           => '默認共所有其編輯都當作過要修改',
'tog-previewontop'           => '敆編輯框以前顯示預覽',
'tog-previewonfirst'         => '敆頭蜀回編輯時候看預覽',
'tog-nocache'                => '無讓瀏覽器頁面緩存',
'tog-enotifwatchlistpages'   => '我其監視單有變時候，發電子郵件乞我',
'tog-enotifusertalkpages'    => '我其討論頁有變時候，發電子郵件乞我',
'tog-enotifminoredits'       => '即使是過要編輯，也著發電子郵件乞我',
'tog-shownumberswatching'    => '顯示監視用戶其數量',
'tog-oldsig'                 => '存在其簽名',
'tog-fancysig'               => '共簽名當成維基文本（無自動鏈接）',
'tog-showjumplinks'          => '允許「跳遘」可訪問其鏈接',
'tog-uselivepreview'         => '使即時預覽（敆𡅏實驗）',
'tog-forceeditsummary'       => '提醒我行遘蜀萆空白其編輯總結',
'tog-watchlisthideown'       => '趁監視單𡅏藏起我其修改',
'tog-watchlisthidebots'      => '藏起監視單其機器人其修改',
'tog-watchlisthideminor'     => '藏起監視單其過要修改',
'tog-watchlisthideliu'       => '共已經躒底其用戶其編輯趁監視單𡅏藏起咯',
'tog-watchlisthideanons'     => '共匿名其用戶其編輯趁監視單𡅏藏起咯',
'tog-watchlisthidepatrolled' => '共巡查其編輯趁監視單𡅏藏起咯',
'tog-ccmeonemails'           => '共我發乞其他用戶其電子郵件其備份發乞我。',
'tog-diffonly'               => '伓使敆下底其顯示𣍐蜀様其地方顯示頁面內容',
'tog-showhiddencats'         => '㪗藏類別',
'tog-norollbackdiff'         => '敆回滾其時候，無叕𣍐蜀様其地方',

'underline-always'  => '直頭',
'underline-never'   => '頭𡅏無',
'underline-default' => '皮膚或者瀏覽器默認其',

# Font style option in Special:Preferences
'editfont-style'     => '編輯框其字體其樣式',
'editfont-default'   => '瀏覽器默認',
'editfont-monospace' => '蜀様寬其字體',
'editfont-sansserif' => '無襯線其字體',
'editfont-serif'     => '有襯線其字體',

# Dates
'sunday'        => '禮拜',
'monday'        => '拜一',
'tuesday'       => '拜二',
'wednesday'     => '拜三',
'thursday'      => '拜四',
'friday'        => '拜五',
'saturday'      => '拜六',
'sun'           => '禮拜',
'mon'           => '拜一',
'tue'           => '拜二',
'wed'           => '拜三',
'thu'           => '拜四',
'fri'           => '拜五',
'sat'           => '拜六',
'january'       => '一月',
'february'      => '二月',
'march'         => '三月',
'april'         => '四月',
'may_long'      => '五月',
'june'          => '六月',
'july'          => '七月',
'august'        => '八月',
'september'     => '九月',
'october'       => '十月',
'november'      => '十一月',
'december'      => '十二月',
'january-gen'   => '一月',
'february-gen'  => '二月',
'march-gen'     => '三月',
'april-gen'     => '四月',
'may-gen'       => '五月',
'june-gen'      => '六月',
'july-gen'      => '七月',
'august-gen'    => '八月',
'september-gen' => '九月',
'october-gen'   => '十月',
'november-gen'  => '十一月',
'december-gen'  => '十二月',
'jan'           => '一月',
'feb'           => '二月',
'mar'           => '三月',
'apr'           => '四月',
'may'           => '五月',
'jun'           => '六月',
'jul'           => '七月',
'aug'           => '八月',
'sep'           => '九月',
'oct'           => '十月',
'nov'           => '十一月',
'dec'           => '十二月',

# Categories related messages
'pagecategories'                 => '{{PLURAL:$1}}類別',
'category_header'                => '「$1」類別下底其頁面',
'subcategories'                  => '子類別',
'category-media-header'          => '「$1」類別下底其媒體',
'category-empty'                 => "''茲類別下底現在無文章也無媒體。''",
'hidden-categories'              => '{{PLURAL:$1}}乞藏起其類別',
'hidden-category-category'       => '已經藏起其類別',
'category-subcat-count-limited'  => '茲蜀萆類別下底有子類別{{PLURAL:$1}}',
'category-article-count'         => '{{PLURAL:$2|茲蜀萆類別儷有下底蜀頁。|共總有$2頁，下底其茲$1頁敆茲蜀萆類別𡅏。}}',
'category-article-count-limited' => '下底$1頁敆茲蜀萆類別𡅏{{PLURAL:$1}}',
'category-file-count'            => '茲蜀萆類別共總有$2萆文件，下底茲$1萆文件都敆茲蜀萆類別𡅏。',
'category-file-count-limited'    => '下底其茲$1萆文件都敆茲蜀萆類別𡅏。{{PLURAL:$1}}',
'listingcontinuesabbrev'         => '（繼續前斗）',
'index-category'                 => '索引其頁面',
'noindex-category'               => '未索引其頁面',
'broken-file-category'           => '獃其文件鏈接其頁面',

'about'         => '關於',
'article'       => '文章',
'newwindow'     => '（敆新窗口打開）',
'cancel'        => '取消',
'moredotdotdot' => '更価...',
'mypage'        => '頁面',
'mytalk'        => '我其討論',
'anontalk'      => '茲隻IP其討論頁',
'navigation'    => '引導',
'and'           => '&#32;and',

# Cologne Blue skin
'qbfind'         => '討',
'qbbrowse'       => '覷蜀覷',
'qbedit'         => '修改',
'qbpageoptions'  => '茲蜀頁',
'qbmyoptions'    => '我其頁面',
'qbspecialpages' => '特殊頁',
'faq'            => '經稠碰著其問題',
'faqpage'        => 'Project:經稠碰著其問題',

# Vector skin
'vector-action-addsection'       => '加話題',
'vector-action-delete'           => '刪掉咯',
'vector-action-move'             => '移動',
'vector-action-protect'          => '保護',
'vector-action-undelete'         => '取消刪除',
'vector-action-unprotect'        => '改變保護',
'vector-simplesearch-preference' => '允許簡化其搜索欄（儷有矢量皮膚才有）',
'vector-view-create'             => '創建',
'vector-view-edit'               => '修改',
'vector-view-history'            => '看歷史',
'vector-view-view'               => '讀',
'vector-view-viewsource'         => '看源代碼',
'actions'                        => '動作',
'namespaces'                     => '命名空間',
'variants'                       => '變體',

'errorpagetitle'    => '鄭咯',
'returnto'          => '轉去$1。',
'tagline'           => '來源：{{SITENAME}}',
'help'              => '幫助',
'search'            => '尋討',
'searchbutton'      => '尋討',
'go'                => '去',
'searcharticle'     => '去',
'history'           => '頁面歷史',
'history_short'     => '歷史',
'updatedmarker'     => '趁我最後蜀回訪問開始更新',
'printableversion'  => '會拍印其版本',
'permalink'         => '永久鏈接',
'print'             => '拍印',
'view'              => '覷蜀覷',
'edit'              => '修改',
'create'            => '創建',
'editthispage'      => '修改茲頁',
'create-this-page'  => '創建茲蜀頁',
'delete'            => '刪除',
'deletethispage'    => '刪除茲頁',
'undelete_short'    => '恢復$1回修改{{PLURAL:$1}}',
'viewdeleted_short' => '覷蜀覷$1回刪掉其修改{{PLURAL:$1}}',
'protect'           => '保護',
'protect_change'    => '改變',
'protectthispage'   => '保護茲蜀頁',
'unprotect'         => '改變保護其狀態',
'unprotectthispage' => '改變茲蜀頁其保護狀態',
'newpage'           => '新頁',
'talkpage'          => '討論茲頁',
'talkpagelinktext'  => '討論',
'specialpage'       => '特殊頁',
'personaltools'     => '個人其家私',
'postcomment'       => '新其蜀段',
'articlepage'       => '覷蜀覷內容頁面',
'talk'              => '討論',
'views'             => '覷蜀覷',
'toolbox'           => '家私',
'userpage'          => '覷蜀覷用戶頁面',
'projectpage'       => '看工程頁',
'imagepage'         => '覷蜀覷文件頁面',
'mediawikipage'     => '看消息頁',
'templatepage'      => '看模板頁',
'viewhelppage'      => '看幫助頁',
'categorypage'      => '看分類頁',
'viewtalkpage'      => '看討論',
'otherlanguages'    => '其它其語言',
'redirectedfrom'    => '（由$1重定向過來）',
'redirectpagesub'   => '重定向頁',
'lastmodifiedat'    => '茲頁面是著$2, $1時候修改其。',
'viewcount'         => '茲蜀頁已經乞訪問$1回了。{{PLURAL:$1}}',
'protectedpage'     => '保護頁',
'jumpto'            => '跳遘：',
'jumptonavigation'  => '引導：',
'jumptosearch'      => '尋討',
'view-pool-error'   => '對不住，服務器茲蜀萆時候已弳過載了。
過価用戶敆𡅏覷茲蜀頁。
起動等仂久再來覷茲蜀頁。

$1',
'pool-timeout'      => '等待鎖定其時間遘了',
'pool-queuefull'    => '隊列池已經滿了',
'pool-errorunknown' => '𣍐八什乇鄭咯',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => '關於{{SITENAME}}',
'aboutpage'            => 'Project:關於',
'copyright'            => '內容敆$1下底會使獲得。',
'copyrightpage'        => '{{ns:project}}:版權',
'currentevents'        => '大樹下',
'currentevents-url'    => 'Project:大樹下',
'disclaimers'          => '無負責聲明',
'disclaimerpage'       => 'Project:無負責聲明',
'edithelp'             => '修改保護',
'edithelppage'         => 'Help:Siŭ-gāi',
'helppage'             => 'Help:目錄',
'mainpage'             => '頭頁',
'mainpage-description' => '頭頁',
'policy-url'           => 'Project:政策',
'portal'               => '廳中',
'portal-url'           => 'Project:社區門戶',
'privacy'              => '隱私政策',
'privacypage'          => 'Project:隱私政策',

'badaccess'        => '權限錯誤',
'badaccess-group0' => '汝𣍐使做汝要求其茲蜀萆動作。',
'badaccess-groups' => '汝要求其動作著$2底裏用戶才會做其：$1{{PLURAL:$1}}',

'versionrequired'     => '需要版本$1其媒體維基',
'versionrequiredtext' => '需要媒體維基其版本$1來使茲蜀頁。
覷[[Special:Version|版本頁面]]。',

'ok'                      => '好',
'retrievedfrom'           => '趁「$1」退過來',
'youhavenewmessages'      => '汝有$1（$2）。',
'newmessageslink'         => '新信息',
'newmessagesdifflink'     => '最後其改變',
'youhavenewmessagesmulti' => '汝有趁$1來其新信息',
'editsection'             => '修改',
'editold'                 => '修改',
'viewsourceold'           => '看源代碼',
'editlink'                => '修改',
'viewsourcelink'          => '看源代碼',
'editsectionhint'         => '修改段：$1',
'toc'                     => '目錄',
'showtoc'                 => '顯示',
'hidetoc'                 => '藏起',
'collapsible-collapse'    => '崩潰',
'collapsible-expand'      => '擴展',
'thisisdeleted'           => '卜看或者恢復$1？',
'viewdeleted'             => '看$1？',
'restorelink'             => '$1萆乞刪掉其修改{{PLURAL:$1}}',
'feedlinks'               => '訂閱：',
'feed-invalid'            => '無乇使其下標填充類型',
'feed-unavailable'        => '𣍐使聚合訂閱',
'site-rss-feed'           => '$1 RSS 訂閱',
'site-atom-feed'          => '$1原子訂閱',
'page-rss-feed'           => '「$1」RSS訂閱',
'page-atom-feed'          => '「$1」原子訂閱',
'red-link-title'          => '$1（頁面無敆𡅏）',
'sort-descending'         => '降序排序',
'sort-ascending'          => '升序排序',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => '頁面',
'nstab-user'      => '用戶頁',
'nstab-media'     => '媒體頁',
'nstab-special'   => '特殊頁面',
'nstab-project'   => '工程頁',
'nstab-image'     => '文件',
'nstab-mediawiki' => '消息',
'nstab-template'  => '模板',
'nstab-help'      => '幫助頁',
'nstab-category'  => '類別',

# Main script and global functions
'nosuchaction'      => '無茲蜀種行動',
'nosuchactiontext'  => '茲蜀種URL指定其行動是𣍐合法其。',
'nosuchspecialpage' => '無總款其特殊頁',
'nospecialpagetext' => '<strong>汝請求蜀萆𣍐合法其特殊頁面。</strong>

合法其特殊頁面清單會使敆[[Special:SpecialPages|{{int:特殊頁面}}]]頁面討著',

# General errors
'error'                => '鄭咯',
'databaseerror'        => '數據庫有鄭',
'dberrortext'          => '蜀萆數據庫查詢其語法錯誤發生咯。
茲可能代表茲軟件其蜀萆漏洞。
最後嘗試其數據庫查詢是：
<blockquote><code>$1</code></blockquote>
趁函數「<code>$2</code>」來其。
數據庫返回錯誤「<samp>$3: $4</samp>」。',
'dberrortextcl'        => '蜀萆數據庫查詢語法錯誤發生咯。
最後蜀回嘗試其數據庫查詢是：
「$1」
趁函數「$2」來其。
數據庫返回錯誤「$3: $4」',
'laggedslavemode'      => "'''警告：'''頁面可能無最近其更新。",
'readonly'             => '數據庫乞鎖起咯',
'readonlytext'         => 'Só-gé̤ṳ-kó cī-buàng ké̤ṳk nè̤ng sō̤ kī lāu, mâ̤-sāi siā sĭng dèu-mĕ̤k hĕ̤k có̤ siŭ-gāi, ô kō̤-nèng sê ôi-lāu nĭk-siòng mì-hô, cĭ-hâiu cêu â̤ ciáng-siòng.

Sō̤ kī só-gé̤ṳ-kó gì guāng-lī-uòng cūng-kuāng gāi-sék: $1',
'missingarticle-diff'  => '（比並：$1、$2）',
'internalerror'        => '內部錯誤',
'internalerror_info'   => '內部錯誤：$1',
'fileappenderror'      => '𣍐使加添「$1」遘「$2」。',
'filecopyerror'        => '𣍐使趁「$1」𡅏複製文件遘「$2」。',
'filerenameerror'      => '𣍐使共「$1」其名字改去「$2」。',
'filedeleteerror'      => '𣍐使刪掉文件「$1」。',
'directorycreateerror' => '𣍐使刪掉目錄「$1」。',
'filenotfound'         => '討𣍐著文件「$1」。',
'fileexistserror'      => '無辦法寫遘文件「$1」：文件已經存在。',
'unexpected'           => '伓是卜挃其值：「$1」＝「$2」。',
'formerror'            => '賺：𣍐使提交表單。',
'cannotdelete'         => '無能耐刪掉頁面或者文件「$1」。
可能茲已經共別儂刪掉咯了。',
'cannotdelete-title'   => '無辦法刪掉頁面「$1」',
'badtitle'             => '獃其標題',
'perfcached'           => '下底其數據乞緩存固加可能伓是最新其。{{PLURAL:$1|$1條結果}}會敆緩存臺中討著。',
'perfcachedts'         => '下底其數據已經緩存過了，最後更新遘$1。{{PLURAL:$4|$4條結果}}會敆緩存臺中討著。',
'querypage-no-updates' => '茲蜀頁其更新乞禁止了。
數據嚽塊現刻時𣍐更新了。',
'wrong_wfQuery_params' => '敆wfQuery()其鄭其參數<br />
函數：$1<br />
查詢：$2',
'viewsource'           => '看源代碼',
'viewsource-title'     => '覷蜀覷$1其源代碼',
'actionthrottled'      => '行動乞取消咯',
'protectedpagetext'    => '茲頁已經乞保護起咯，𣍐使修改或者其它行動。',
'viewsourcetext'       => '汝會使看共複製茲蜀頁其源代碼：',
'viewyourtext'         => "汝會使覷蜀覷或者複製茲頁'''汝其修改'''其源代碼：",
'editinginterface'     => "'''警告：'''汝敆𡅏修改其頁面廮𡅏提供茲蜀萆軟件其界面文本。
茲蜀頁其改變會影響遘其它用戶其用戶界面其顯示。
如果蔔想修改維基其翻譯，起動遘媒體維基本地化計劃[//translatewiki.net/wiki/Main_Page?setlang=en translatewiki.net]。",
'sqlhidden'            => '（SQL查詢藏起咯）',
'namespaceprotected'   => "汝𣍐使修改敆'''$1'''命名空間其頁面。",
'customcssprotected'   => '汝𣍐使修改茲蜀萆CSS頁面，因為伊有別蜀隻用戶其設定。',
'customjsprotected'    => '汝𣍐使修改茲蜀萆JavaScript頁面，因為伊有別蜀隻用戶其設定。',
'ns-specialprotected'  => '𣍐使修改特殊頁面。',
'titleprotected'       => "茲蜀萆標題共[[User:$1|$1]]保護其咯。
原因是「''$2''」。",

# Virus scanner
'virus-badscanner'     => "獃其配置：𣍐八其病毒掃描器：''$1''",
'virus-scanfailed'     => '掃描失敗（代碼$1）',
'virus-unknownscanner' => '𣍐八其反病毒：',

# Login and logout pages
'logouttext'                 => "'''汝現在躒出了。'''

汝會使使無名方式繼續覷{{SITENAME}}，或者汝會使蜀様或者𣍐蜀様其用戶[[Special:UserLogin|再躒底其]]。
注意有其頁面可能繼續顯示真像汝應經躒底其了，除開汝清理汝其瀏覽器緩存。",
'welcomecreation'            => '== 歡飲光臨，$1！ ==

汝其賬戶已經開好了。仱伓嗵𣍐記修改汝其它[[Special:Preferences|{{SITENAME}}設定]]。',
'yourname'                   => '用戶名：',
'yourpassword'               => '密碼：',
'yourpasswordagain'          => '重新拍囇密碼：',
'remembermypassword'         => '共我敆茲蜀萆瀏覽器其躒底記錄記定幾日（最価$1日）{{PLURAL:$1}}',
'securelogin-stick-https'    => '躒底以後保持HTTPS連接',
'yourdomainname'             => '汝其域名：',
'externaldberror'            => '可能是驗證數據庫鄭咯，或者是汝𣍐使升級汝其外部賬戶。',
'login'                      => '躒底',
'nav-login-createaccount'    => '躒底/開賬戶',
'loginprompt'                => '汝著清除cookies才會底{{SITENAME}}。',
'userlogin'                  => '躒底/開賬戶',
'userloginnocreate'          => '躒底',
'logout'                     => '躒出',
'userlogout'                 => '躒出',
'notloggedin'                => '未躒底',
'nologin'                    => '汝無賬戶？$1',
'nologinlink'                => '開蜀隻賬戶',
'createaccount'              => '開賬戶',
'gotaccount'                 => "已經有賬戶了？'''$1'''。",
'gotaccountlink'             => '躒底',
'userlogin-resetlink'        => '躒底其資料𣍐記咯？',
'createaccountreason'        => '原因：',
'badretype'                  => '汝輸底其密碼𣍐蜀様。',
'userexists'                 => '用戶名已經乞別人使去了。
起動另外再起蜀萆名字。',
'loginerror'                 => '躒底有鄭',
'createaccounterror'         => '無能獃開賬戶：$1',
'noname'                     => '汝未指定蜀萆合法其用戶名。',
'loginsuccesstitle'          => '躒底成功',
'loginsuccess'               => "'''汝現在已經「$1」其成功躒底{{SITENAME}}了。'''",
'nosuchuser'                 => '無總款其用戶名「$1」。
用户名是大小写敏感其。
检查汝其拼写，或者覷蜀覷[[Special:UserLogin/signup|開新賬戶]]。',
'nosuchusershort'            => '無總款其用戶名「$1」。
檢查汝其拼寫。',
'nouserspecified'            => '汝著指定蜀萆用戶名。',
'login-userblocked'          => '茲隻用戶已經乞封鎖去了。躒底是𣍐允許其。',
'wrongpassword'              => '密碼鄭咯。
起動再查蜀下。',
'wrongpasswordempty'         => '未輸入密碼。
請再查蜀下。',
'passwordtooshort'           => '密碼著設最少{{PLURAL:$1|$1萆字符}}。',
'password-name-match'        => '汝其密碼硬著共汝其用戶名𣍐蜀様才會使其。',
'password-login-forbidden'   => '茲蜀萆用戶名共密碼應經乞禁止去了。',
'mailmypassword'             => '共新密碼發遘電子郵件',
'passwordremindertitle'      => '{{SITENAME}}其新其臨時密碼',
'passwordsent'               => '新密碼已經寄遘「$1」註冊其電子郵件地址了。
收遘後，請再躒底蜀頭部。',
'mailerror'                  => '發電子郵件有賺：$1',
'acct_creation_throttle_hit' => '使汝其IP訪問茲蜀萆維基百科訪問者其已經敆最後蜀日創建{{PLURAL:$1|$1萆賬戶}}去了。茲蜀段時間最価若允許創建茲滿価萆賬戶。故此講使茲蜀萆IP訪問其儂敆現刻時𣍐使再開賬戶了。',
'emailauthenticated'         => '汝其電子郵件地址已經敆$2$3驗證過了。',
'emailconfirmlink'           => '確認汝其電子郵件地址',
'accountcreated'             => '賬戶創建了',
'accountcreatedtext'         => '[[{{ns:User}}:$1|$1]]([[{{ns:User talk}}:$1|talk]])用戶已經創建。',
'createaccount-title'        => '{{SITENAME}}其開賬戶',
'login-abort-generic'        => '汝其躒底𣍐成功——放棄去了',
'loginlanguagelabel'         => '語言：$1',

# Email sending
'php-mail-error-unknown' => 'PHP其mail()函數，𣍐八什乇賺去。',

# Change password dialog
'resetpass'                 => '密碼已經乞修改去了',
'resetpass_header'          => '改變賬戶其密碼',
'oldpassword'               => '舊密碼：',
'newpassword'               => '新密碼：',
'retypenew'                 => '確認密碼：',
'resetpass_submit'          => '設置密碼再躒底',
'resetpass_forbidden'       => '密碼改𣍐來',
'resetpass-no-info'         => '汝著躒底乍會使直接看茲蜀頁。',
'resetpass-submit-loggedin' => '修改密碼',
'resetpass-submit-cancel'   => '取消',
'resetpass-temp-password'   => '臨時密碼：',

# Special:PasswordReset
'passwordreset'                   => '重置密碼',
'passwordreset-legend'            => '重置密碼',
'passwordreset-username'          => '用戶名：',
'passwordreset-domain'            => '域名：',
'passwordreset-email'             => '電子郵件地址：',
'passwordreset-emailsent'         => '蜀萆密碼重置其電子郵件已經發出去了。',
'passwordreset-emailsent-capture' => '蜀萆密碼重置其電子郵件已經發出去了，顯示敆下底。',

# Special:ChangeEmail
'changeemail'          => '修改電子郵件地址',
'changeemail-header'   => '修改賬戶電子郵件地址',
'changeemail-oldemail' => '現刻時其電子郵件地址：',
'changeemail-newemail' => '新其電子郵件地址：',
'changeemail-none'     => '（無）',
'changeemail-submit'   => '修改電子郵件地址',
'changeemail-cancel'   => '取消',

# Edit page toolbar
'bold_sample'     => '粗體文字',
'bold_tip'        => '粗體文字',
'italic_sample'   => '敧其文字',
'italic_tip'      => '敧其文字',
'link_sample'     => '鏈接標題',
'link_tip'        => '內部鏈接',
'extlink_sample'  => 'http://www.example.com 鏈接標題',
'extlink_tip'     => '外部鏈接（記𡅏http:// 開頭）',
'headline_sample' => '標題文字',
'headline_tip'    => '第二等標題',
'nowiki_sample'   => '敆嚽塊插入無格式其文本',
'nowiki_tip'      => '無察維基格式',
'image_tip'       => '嵌底其文件',
'media_sample'    => 'Liê.ogg',
'media_tip'       => '文件鏈接',
'sig_tip'         => '汝其帶時間戳其簽名',
'hr_tip'          => '水平線（廮𡅏保護使其）',

# Edit pages
'summary'                    => '總結：',
'subject'                    => '主題/標題：',
'minoredit'                  => '過要修改',
'watchthis'                  => '監視茲頁',
'savearticle'                => '保存茲頁',
'preview'                    => '預覽',
'showpreview'                => '顯示預覽',
'showdiff'                   => '看改變其部分',
'anoneditwarning'            => "'''警告：'''汝未躒底。
汝起IP地址會乞記錄敆茲頁面修改歷史底裏。",
'missingcommenttext'         => '起動敆下底輸底蜀條評論。',
'summary-preview'            => '總結預覽：',
'blockedtitle'               => '用戶乞封鎖了',
'blockednoreason'            => '無掏出原因',
'whitelistedittext'          => '汝必須$1乍會使修改頁面。',
'loginreqtitle'              => '需要躒底',
'loginreqlink'               => '躒底',
'loginreqpagetext'           => '著$1才會使看其它頁面。',
'accmailtitle'               => '密碼寄出了',
'accmailtext'                => "共[[User talk:$1|$1]]用戶其臨時產生其密碼已經發$2了。

茲蜀萆新其賬戶其密碼會使敆用戶躒底以後著''[[Special:ChangePassword|改密碼]]''頁面𡅏改變。",
'newarticle'                 => '（新）',
'newarticletext'             => '汝已經跟鏈接跟遘無存在其頁面了。
卜想創建頁面，敆下底其框框𡅏拍字（覷蜀覷[[{{MediaWiki:Helppage}}|幫助頁面]]有無更更価其幫助）。
如果汝是無注意來遘茲蜀萆頁面，篤囇汝其瀏覽器上其「返回」按鈕。',
'anontalkpagetext'           => "''茲是未躒底其用戶討論頁面。''
故此儂家著使數字IP來確定伊。
總款其IP地址會乞雅価用戶共享。
如果蜀隻未躒底其用戶見覺無關係其評論指向汝，起動[[Special:UserLogin/signup|開賬戶]]或者[[Special:UserLogin|躒底]]來避免以後共其它未躒底其用戶混蜀堆。",
'noarticletext'              => '現在敆茲蜀頁𡅏無文字。汝會使敆其它其頁面𡅏[[Special:Search/{{PAGENAME}}|討蜀討茲蜀萆標題]]，<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} 討相關其記錄]，或者[{{fullurl:{{FULLPAGENAME}}|action=edit}}編輯茲蜀頁]</span>。',
'clearyourcache'             => "'''注意：'''保存以後，汝可能固著刷新汝其瀏覽器緩存來看遘變化。
* '''火狐/Safari：'''擪下''Shift''篤蜀篤''重新載入''，或者擪蜀擪''Ctrl+F5''或者''Ctrl+R'' （''⌘-R''敆Mac懸頂）
* '''Google Chrome：'''擪''Ctrl+Shift+R''（敆Mac𡅏使''⌘-Shift-R''）
* '''Internet Explorer：'''擪''Ctrl''其時候篤蜀篤''刷新''，或者擪''Ctrl+F5''
* '''Opera：'''敆''工具→首選項''𡅏清除緩存",
'previewnote'                => "'''記定茲若是蜀萆預覽。'''
汝其改變固𡅏未保存！",
'editing'                    => '修改 $1',
'editingsection'             => '修改$1（段）',
'editingcomment'             => '修改$1（新其蜀部分）',
'editconflict'               => '修改對衝：$1',
'explainconflict'            => "敆汝開始修改茲蜀頁之前，已經有其他人改變茲蜀頁去了。懸頂文本區域包括原底存在其頁面文本。汝其改變敆下底文本區域顯示。汝必須合併汝其改變遘已經存在其文本。敆汝擪「{{int:savearticle}}」以後，'''囇有'''敆懸頂文本區域其文本會保存。",
'yourtext'                   => '汝其文字',
'editingold'                 => "'''警告：汝現在𡅏修改已經過時其版本。'''
如果汝保存伊，趁茲以後其任何改變都變無了。",
'yourdiff'                   => '差別',
'readonlywarning'            => "'''警告：數據庫已經乞鎖定來保養去了，故此汝現刻時𣍐使保存汝其編輯。'''
汝可能希望複製再粘貼汝其文字遘蜀萆文本文件𡅏，再共伊保存起咯。

鎖定伊其管理員給出茲蜀萆解釋：$1",
'protectedpagewarning'       => "''警告：茲蜀頁已經乞保護起去了，故此囇有管理員權力其用戶乍會使修改伊。'''
最新其日誌已經敆下底提供來做參考：",
'semiprotectedpagewarning'   => "'''注意：''' 茲蜀頁已經乞保護起去了，故此囇有註冊其用戶乍會使修改伊。
最新其日誌已經敆下底提供來做參考：",
'templatesused'              => '{{PLURAL:$1}}茲頁底裏使其模板：',
'templatesusedpreview'       => '茲萆預覽使其{{PLURAL:$1|模板}}：',
'templatesusedsection'       => '茲蜀段使其{{PLURAL:$1|模板}}：',
'template-protected'         => '（保護）',
'template-semiprotected'     => '（半保護）',
'recreate-moveddeleted-warn' => "'''注意：汝重新創建其茲蜀頁面以前已經乞刪掉了。'''

汝著考慮蜀下到底是伓是合適繼續去編輯茲蜀頁。茲蜀頁其刪除記錄共移動記錄都敆嚽塊共汝看：",

# "Undo" feature
'undo-summary' => '取消[[Special:Contributions/$2|$2]]（[[User talk:$2|Tō̤-lâung]]）其$1修改',

# Account creation failure
'cantcreateaccounttitle' => '無能獃開賬戶',

# History pages
'viewpagelogs'           => '看茲頁其歷史',
'nohistory'              => '茲頁無修改歷史。',
'currentrev'             => '最新版本',
'revisionasof'           => '$1其版本',
'previousrevision'       => '←加舊其版本',
'nextrevision'           => '加新其版本→',
'currentrevisionlink'    => '最新版本',
'cur'                    => '仱',
'next'                   => '下',
'last'                   => '前',
'page_first'             => '頭',
'page_last'              => '尾',
'histlegend'             => "差別揀選：選擇卜比並其版本，再擪「回車」('''Enter''')或者擪底底其'''比並揀選版本'''。<br />
說明：（伶）=共第一新其版本比並，（前）=共前蜀版本比並，~=過要修改。",
'history-fieldset-title' => '瀏覽歷史',
'history-show-deleted'   => '囇刪掉去',
'histfirst'              => '最早',
'histlast'               => '最遲',
'historysize'            => '（{{PLURAL:$1|$1字節}}）',

# Revision feed
'history-feed-title'       => '修改歷史',
'history-feed-description' => '維基百科敆茲頁其修改歷史',

# Revision deletion
'rev-delundel' => '㪗/藏',

# Merge log
'revertmerge' => '伓使合併',

# Diffs
'history-title'            => '「$1」其修改歷史',
'difference'               => '（版本之間其差別）',
'difference-multipage'     => '（臺中𣍐蜀様其地方）',
'lineno'                   => '第$1行：',
'compareselectedversions'  => '比並揀選版本',
'showhideselectedversions' => '顯/藏揀選其調整',
'editundo'                 => '取消',
'diff-multi'               => '{{PLURAL:$1}}（臺中有$2寫其$1萆版本無顯示）',

# Search results
'searchresults'                  => '討結果',
'searchresults-title'            => '尋討「$1」其結果',
'searchresulttext'               => '更更価關於討{{SITENAME}}其內容，覷蜀覷[[{{MediaWiki:Helppage}}|{{int:help}}]]。',
'searchsubtitle'                 => "汝是討'''[[:$1]]'''（[[Special:Prefixindex/$1|所有「$1」開始其頁面]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|所有鏈遘「$1」其頁面]]）",
'searchsubtitleinvalid'          => "汝討'''$1'''",
'prevn'                          => '前{{PLURAL:$1}}$1萆',
'nextn'                          => '後{{PLURAL:$1}}$1萆',
'shown-title'                    => '每頁顯示$1{{PLURAL:$1|萆結果}}',
'viewprevnext'                   => '看（$1 {{int:pipe-separator}} $2）（$3）。',
'searchhelp-url'                 => 'Help:目錄',
'searchprofile-articles'         => '內容頁',
'searchprofile-images'           => '多媒體',
'searchprofile-everything'       => '所有乇',
'searchprofile-advanced'         => '高級',
'searchprofile-articles-tooltip' => '敆$1𡅏尋討',
'searchprofile-project-tooltip'  => '敆$1𡅏尋討',
'searchprofile-images-tooltip'   => '尋討文件',
'search-result-size'             => '$1 ({{PLURAL:$2|$2萆單詞}})',
'search-redirect'                => '（重定向 $1）',
'search-suggest'                 => '汝其意思是伓是：$1',
'searchrelated'                  => '相關其',
'searchall'                      => '全部',
'showingresults'                 => "顯示趁#<b>$2</b>開始其{{PLURAL:$1|'''$1'''萆結果}}。",
'showingresultsnum'              => "顯示趁#<b>$2</b>開始其{{PLURAL:$3|'''$3'''萆結果}}。",

# Preferences page
'preferences'               => '設定',
'mypreferences'             => '我其設定',
'prefs-edits'               => '修改數量：',
'prefsnologin'              => '未躒底其',
'changepassword'            => '改變密碼',
'prefs-skin'                => '皮膚',
'datedefault'               => '無設定',
'prefs-datetime'            => '日期共時間',
'prefs-personal'            => '用戶資料',
'prefs-rc'                  => '這般其改變',
'prefs-watchlist'           => '監視單',
'prefs-misc'                => '其它',
'saveprefs'                 => '保存',
'resetprefs'                => '清除未保存其改變',
'searchresultshead'         => '尋討',
'resultsperpage'            => '每頁訪問量：',
'recentchangescount'        => '這般改變其條目：',
'savedprefs'                => '汝其設定已經乞保存了。',
'timezonelegend'            => '時區：',
'localtime'                 => '當地時間：',
'timezoneuseserverdefault'  => '使維基默認（$1）',
'timezoneuseoffset'         => '其它（點出時差）',
'timezoneoffset'            => '時差',
'servertime'                => '服務器時間：',
'guesstimezone'             => '填充敆瀏覽器𡅏',
'timezoneregion-africa'     => '非洲',
'timezoneregion-america'    => '美洲',
'timezoneregion-antarctica' => '南極洲',
'timezoneregion-arctic'     => '北極',
'timezoneregion-asia'       => '亞洲',
'timezoneregion-atlantic'   => '大西洋',
'timezoneregion-australia'  => '澳洲',
'timezoneregion-europe'     => '歐洲',
'timezoneregion-indian'     => '印度洋',
'timezoneregion-pacific'    => '太平洋',
'allowemail'                => '會肯別儂發電子郵件乞汝',
'prefs-searchoptions'       => '尋討',
'prefs-namespaces'          => '命名空間',
'prefs-files'               => '文件',
'youremail'                 => '電子郵件：',
'username'                  => '用戶名：',
'uid'                       => '用戶ID：',
'prefs-registration'        => '開賬戶時間',
'yourrealname'              => '真實姓名：',
'yourlanguage'              => '語言：',
'yournick'                  => '新其簽名：',
'email'                     => '電子郵件',
'prefs-help-email'          => '電子郵件地址是愛寫就寫其，但是如果汝𣍐記密碼咯，密碼重置其時候需要茲。',

# User rights
'editusergroup' => '修改用戶組',

# Groups
'group'            => '組：',
'group-bot'        => '機器人',
'group-sysop'      => '管理員',
'group-bureaucrat' => '官僚',

'group-bot-member'        => '機器人',
'group-sysop-member'      => '管理員',
'group-bureaucrat-member' => '官僚組',
'group-suppress-member'   => '巡查員',

'grouppage-autoconfirmed' => '{{ns:project}}:自動確認用戶',
'grouppage-bot'           => '{{ns:project}}:機器人',
'grouppage-sysop'         => '{{ns:project}}:管理員',
'grouppage-bureaucrat'    => '{{ns:project}}:官僚組',
'grouppage-suppress'      => '{{ns:project}}:巡查員',

# Associated actions - in the sentence "You do not have permission to X"
'action-edit' => '修改茲蜀頁',

# Recent changes
'recentchanges'               => '這般其改變',
'recentchangestext'           => '敆茲頁跟蹤對維基其最近其改變。',
'recentchanges-label-newpage' => '茲蜀萆修改創建新其蜀頁',
'recentchanges-label-minor'   => '茲是蜀萆過要修改',
'recentchanges-label-bot'     => '茲蜀萆修改是機器人做其',
'rcnote'                      => "下底是{{PLURAL:$1|是 '''1'''改變|最後'''$1'''萆改變}}敆最後'''$2'''日，就像$4 $5。",
'rclistfrom'                  => '顯示由$1開始其新其改變',
'rcshowhideminor'             => '$1過要修改',
'rcshowhidebots'              => '$1機器人',
'rcshowhideliu'               => '$1躒底用戶',
'rcshowhideanons'             => '$1無名用戶',
'rcshowhidemine'              => '$1我其修改',
'rclinks'                     => '顯示$2日以內產生其$1回改變<br />$3',
'diff'                        => '差',
'hist'                        => '史',
'hide'                        => '藏起',
'show'                        => '顯示',
'minoreditletter'             => '~',
'newpageletter'               => '!',
'boteditletter'               => '^',
'rc-enhanced-hide'            => '藏起細節',

# Recent changes linked
'recentchangeslinked'         => '相關其改變',
'recentchangeslinked-feed'    => '相關其改變',
'recentchangeslinked-toolbox' => '相關其改變',
'recentchangeslinked-page'    => '頁面名：',

# Upload
'upload'              => '上傳文件',
'uploadbtn'           => '上傳文件',
'reuploaddesc'        => '取消上傳，轉去上傳頁面',
'uploadnologin'       => '未躒底',
'uploadnologintext'   => 'Sĕng [[Special:UserLogin|láuk-diē]] ciáh â̤-sāi siông-duòng ùng-giông.',
'uploaderror'         => '上傳有鄭',
'uploadlog'           => '上傳日誌',
'uploadlogpage'       => '上傳日誌',
'uploadlogpagetext'   => '下底是最近上傳其文件。
卜挃更更好看其列表，看蜀看[[Special:NewFiles|新文件其列表]]。',
'filename'            => '文件名',
'filedesc'            => '總結',
'fileuploadsummary'   => '總結：',
'filesource'          => '來源：',
'uploadedfiles'       => '上傳文件',
'ignorewarning'       => '無視警告保存文件',
'ignorewarnings'      => '無視警告',
'fileexists'          => '名字蜀樣其文件已經存在去了。如果汝𣍐確定汝是伓是卜想刪掉伊，起動檢查蜀下<strong>[[:$1]]</strong>。
[[$1|thumb]]',
'uploadwarning'       => '上傳警告',
'savefile'            => '保存文件',
'uploadedimage'       => '已經上傳其「[[$1]]」',
'uploadvirus'         => '茲文件有病毒！
細底：$1',
'sourcefilename'      => '源文件名：',
'destfilename'        => '目標文件名：',
'watchthisupload'     => '監視茲文件',
'upload-success-subj' => '成功上傳',

'license'        => '版權聲明：',
'license-header' => '版權說明',

# Special:ListFiles
'imgfile'        => '文件',
'listfiles'      => '文件單單',
'listfiles_date' => '日期',
'listfiles_name' => '名',
'listfiles_user' => '用戶',
'listfiles_size' => '尺寸',

# File description page
'file-anchor-link'          => '文件',
'filehist'                  => '文件歷史',
'filehist-current'          => '現刻時',
'filehist-datetime'         => '日期/時間',
'filehist-user'             => '用戶',
'filehist-dimensions'       => '維度',
'filehist-comment'          => '評論',
'imagelinks'                => '文件使用方法',
'linkstoimage'              => '下底{{PLURAL:$1|$1頁鏈接}}遘茲文件：',
'nolinkstoimage'            => '無鏈接遘茲蜀萆文件其頁面。',
'uploadnewversion-linktext' => '上傳蜀萆新版本其茲萆文件。',

# MIME search
'download' => '下載',

# Unwatched pages
'unwatchedpages' => '無監視其頁面',

# List redirects
'listredirects' => '重定向其單單',

# Unused templates
'unusedtemplateswlh' => '其它鏈接',

# Random page
'randompage' => '隨便罔看',

# Random redirect
'randomredirect' => '隨便重定向',

# Statistics
'statistics'              => '統計',
'statistics-header-users' => '用戶統計',

'disambiguationspage' => 'Template:歧義',

'brokenredirects-edit'   => '改',
'brokenredirects-delete' => '刪',

'withoutinterwiki'         => '無跨語言其鏈接',
'withoutinterwiki-summary' => '下底其頁面無鏈接遘其它語言其版本。',

'fewestrevisions' => '修改最少其頁面',

# Miscellaneous special pages
'nbytes'               => '$1{{PLURAL:$1}}字節',
'nlinks'               => '$1隻{{PLURAL:$1|鏈接}}',
'nmembers'             => '$1隻成員{{PLURAL:$1}}',
'wantedcategories'     => '卜挃其類別',
'wantedpages'          => '卜挃其頁',
'mostlinked'           => '鏈接第一価其頁',
'mostlinkedcategories' => '鏈接第一価其類別',
'mostcategories'       => '有第一価類別其頁面',
'mostimages'           => '鏈接第一価其文件',
'mostrevisions'        => '最近修改其頁面',
'shortpages'           => '短頁',
'longpages'            => '長頁',
'protectedpages'       => '保護頁',
'listusers'            => '用戶單',
'newpages'             => '新頁',
'newpages-username'    => '用戶名：',
'ancientpages'         => '最舊其頁面',
'move'                 => '移動',
'movethispage'         => '移動茲頁',

# Book sources
'booksources'               => '書源',
'booksources-search-legend' => '尋討書源',
'booksources-go'            => '去',
'booksources-text'          => '下底是鏈接遘其它賣新書共舊書其站點其單單，固加可能有更多關於汝敆𡅏看其茲本書其信息：',

# Special:Log
'specialloguserlabel'  => '表演者：',
'speciallogtitlelabel' => '目標（稱呼或者用戶）：',
'log'                  => '日誌',
'alllogstext'          => '所有會使趁{{SITENAME}}獲得其日誌其都合併顯示。
汝會使使揀選日誌類型、用戶名（大小寫敏感），或者受影響其頁面（大小寫敏感）其方法來縮小視角。',
'logempty'             => '日誌底裏討要𣍐著項目',

# Special:AllPages
'allpages'          => '所有頁面',
'alphaindexline'    => '$1遘$2',
'nextpage'          => '下蜀頁（$1）',
'prevpage'          => '前蜀頁（$1）',
'allpagesfrom'      => '使下底其乇開始顯示頁：',
'allarticles'       => '所有文章',
'allinnamespace'    => '所有頁面（$1命名空間）',
'allnotinnamespace' => '所有頁面（無著$1其命名空間）',
'allpagesprev'      => '前蜀頁',
'allpagesnext'      => '下蜀頁',
'allpagessubmit'    => '去',
'allpagesprefix'    => '按頭部顯示頁面：',
'allpagesbadtitle'  => '給出其頁面其標題是𣍐合法其，或者有蜀萆跨語言或跨維基其前綴。伊可能包括蜀萆或者価萆𣍐使廮標題底裏其字符。',

# Special:Categories
'categories' => '類別',

# Special:DeletedContributions
'deletedcontributions'       => '乞刪掉其用戶貢獻',
'deletedcontributions-title' => '乞刪掉其用戶貢獻',

# Special:LinkSearch
'linksearch-ok'   => '尋討',
'linksearch-line' => '$1是趁$2𡅏鏈接過其',

# Special:Log/newusers
'newuserlogpage' => '開賬戶日誌',

# Email user
'emailuser'       => '寄電子郵件乞茲隻用戶',
'emailpage'       => '寄電子郵件乞用戶',
'defemailsubject' => '{{SITENAME}}趁用戶「$1」𡅏底批',
'noemailtitle'    => '無電子郵件地址',
'emailfrom'       => '趁：',
'emailto'         => '遘：',
'emailsubject'    => '主題：',
'emailmessage'    => '消息：',
'emailsend'       => '寄',
'emailccme'       => '共我其消息其副本寄我一份電子郵件。',
'emailsent'       => '電子郵件發出了',
'emailsenttext'   => '汝其電子郵件消息已經寄出了。',

# Watchlist
'watchlist'         => '我其監視單',
'mywatchlist'       => '我其監視單',
'nowatchlist'       => '汝其監視單𡅏無項目。',
'watchnologin'      => '未躒底',
'addedwatchtext'    => '頁面「[[:$1]]」已經加遘汝其[[Special:Watchlist|監視單]]。以後敆茲蜀頁其改變共伊關聯其討論頁都會列敆嚽塊。',
'removewatch'       => '趁汝其監視單臺中移去',
'removedwatchtext'  => '頁面「[[:$1]]」已經趁[[Special:Watchlist|汝其監視單]]移去了。',
'watch'             => '監視',
'watchthispage'     => '監視茲頁',
'unwatch'           => '伓使監視',
'unwatchthispage'   => '停止監視',
'watchnochange'     => '汝其監視頁面全部都無儂定動。',
'watchlist-details' => '{{PLURAL:$1}}$1頁敆汝其監視單𡅏，無算討論頁。',
'wlshowlast'        => '顯示最$1點鐘$2日$3',
'watchlist-options' => '監視單選項',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => '監視...',

'enotif_newpagetext' => '茲是新頁。',

# Delete
'deletepage'        => '刪頁',
'confirm'           => '確認',
'excontent'         => '乇是：「$1」',
'excontentauthor'   => '乇是：「$1」（並且作者囇有「[[Special:Contributions/$2|$2]]」）',
'exbeforeblank'     => '空白以前其乇是：「$1」',
'historywarning'    => "'''警告：'''汝卜想刪掉其頁面有蜀段大概$1隻{{PLURAL:$1|版本}}其它歷史：",
'confirmdeletetext' => '汝準備全隻頁面共文章連伊敆蜀塊其歷史全部刪掉。
請汝確認：汝當真卜想總款做，汝瞭解總款做其後果，並且汝總款做事符合[[{{MediaWiki:Policy-url}}]]其。',
'actioncomplete'    => '行動成功',
'actionfailed'      => '操作失敗',
'deletedtext'       => '「$1」已經乞刪掉去了。
最近其刪除記錄看$2。',
'dellogpage'        => '刪頁日誌',
'dellogpagetext'    => '下底是最近刪掉其單單。',
'deletionlog'       => '刪除日誌',
'deletecomment'     => '原因：',

# Rollback
'rollback'       => '在修改轉去',
'rollback_short' => '轉',
'rollbacklink'   => '轉',
'rollbackfailed' => '轉𣍐去',
'cantrollback'   => '𣍐使恢復修改；最後其貢獻者是茲蜀頁其唯一其作者。',
'alreadyrolled'  => '𣍐使回滾最後蜀回[[User:$2|$2]] ([[User talk:$2|討論]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]])其[[:$1]]編輯；
有其他儂已經編輯過了或者茲蜀頁已經乞回滾過了。

最後蜀回茲蜀頁其修改是[[User:$3|$3]] ([[User talk:$3|討論]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]])改其。',
'editcomment'    => "修改評論是：「''$1''」。",
'revertpage'     => '[[Special:Contributions/$2|$2]] ([[User talk:$2|Talk]])所做其修改轉去[[User:$1|$1]]其前蜀萆版本',

# Protect
'protectlogpage'              => '保護日誌',
'protect-title'               => '改變「$1」其保護等級',
'prot_1movedto2'              => '[[$1]]移遘[[$2]]',
'protect-legend'              => '確認保護',
'protectcomment'              => '原因：',
'protect-level-autoconfirmed' => '囇允許自動確認用戶',
'protect-level-sysop'         => '囇允許管理員',
'protect-expiry-options'      => '1點鐘:1 hour,1 日:1 day,1禮拜:1 week,2禮拜:2 weeks,1間月日:1 month,3間月日:3 months,6間月日:6 months,1年:1 year,永遠:infinite',
'restriction-type'            => '權限：',
'restriction-level'           => '框定其等級：',
'minimum-size'                => '最嫩尺寸：',
'maximum-size'                => '最大尺寸：',
'pagesize'                    => '（字節）',

# Restrictions (nouns)
'restriction-edit' => '修改',
'restriction-move' => '移動',

# Restriction levels
'restriction-level-sysop'         => '全保護',
'restriction-level-autoconfirmed' => '半保護',
'restriction-level-all'           => '所有等級',

# Undelete
'undeletepage'           => '看共恢復刪掉其頁面',
'viewdeletedpage'        => '看刪掉其頁',
'undeleteextrahelp'      => "卜想恢復茲蜀頁其全部歷史，伓使揀選任何複選框，再單擊'''''{{int:undeletebtn}}'''''。
卜想選擇性恢復，勾選汝卜想恢復其修訂版本其複選款，再單擊'''''{{int:undeletebtn}}'''''。",
'undeletehistory'        => 'If you restore the page, all revisions will be restored to the history.
If a new page with the same name has been created since the deletion, the restored revisions will appear in the prior history.',
'undeletebtn'            => '恢復',
'undeletelink'           => '看/恢復',
'undeleteviewlink'       => '看',
'undeletereset'          => '重新寫',
'undeletecomment'        => '原因：',
'undelete-search-submit' => '尋討',

# Namespace form on various pages
'namespace'      => '命名空間：',
'invert'         => '反選',
'blanknamespace' => '（主要）',

# Contributions
'contributions'       => '用戶貢獻',
'contributions-title' => '用戶對$1其貢獻',
'mycontris'           => '我其貢獻',
'uctop'               => '（當前）',
'month'               => '趁月（共更早）：',
'year'                => '趁年（共更早）：',

'sp-contributions-newbies'     => '囇顯示新開賬戶其貢獻',
'sp-contributions-newbies-sub' => '才來其',
'sp-contributions-blocklog'    => '封鎖日誌',
'sp-contributions-deleted'     => '開除來其用戶貢獻',
'sp-contributions-uploads'     => '上傳',
'sp-contributions-logs'        => '日誌',
'sp-contributions-talk'        => '討論',
'sp-contributions-search'      => '尋討貢獻',
'sp-contributions-username'    => 'IP地址或者用戶名：',
'sp-contributions-submit'      => '尋討',

# What links here
'whatlinkshere'            => '什乇鏈遘嚽塊',
'whatlinkshere-title'      => '鏈接遘$1其頁面',
'whatlinkshere-page'       => '頁面：',
'linkshere'                => "下底其頁面鏈接遘'''[[:$1]]'''：",
'nolinkshere'              => "無頁鏈接遘'''[[:$1]]'''。",
'isredirect'               => '重定向頁面',
'isimage'                  => '文件鏈接',
'whatlinkshere-prev'       => '{{PLURAL:$1|前|前$1}}',
'whatlinkshere-next'       => '{{PLURAL:$1|下|下$1}}',
'whatlinkshere-links'      => '← 鏈接',
'whatlinkshere-hideredirs' => '$1重定向',
'whatlinkshere-hidelinks'  => '$1鏈接',
'whatlinkshere-hideimages' => '$1 文件鏈接',
'whatlinkshere-filters'    => '過濾器',

# Block/unblock
'blockip'                  => '封鎖用戶',
'blockiptext'              => '使下底其表單來封鎖趁指定IP地址或者用戶名其寫入訪問。茲囇使廮𡅏防止破壞，固加著符合[[{{MediaWiki:Policy-url}}|政策]]。敆下底填底指定其原因（比如講：引用乞破壞其頁面）。',
'ipadressorusername'       => 'IP地址或者用戶名：',
'ipbexpiry'                => '過期：',
'ipbreason'                => '原因：',
'ipbreasonotherlist'       => '其它原因',
'ipbreason-dropdown'       => '*普通封鎖原因
** 加添假其信息
** 塗掉頁面內容
** 發佈不實信息
** 亂寫文字
** 做獃/騷擾
** 亂開賬戶
** 亂起用戶名',
'ipbcreateaccount'         => '封鎖開賬戶',
'ipbemailban'              => '防止用戶寄電子郵件',
'ipbenableautoblock'       => '自動封鎖茲用戶其IP地址',
'ipbsubmit'                => '封鎖茲用戶',
'ipbother'                 => '其它時間',
'ipboptions'               => '2 點鐘:2 hours,1 日:1 day,3 日:3 days,1 禮拜:1 week,2 禮拜:2 weeks,1 月日:1 month,3 月日:3 months,6 月日:6 months,1 年:1 year,永遠:infinite',
'ipbotheroption'           => '其它',
'ipbotherreason'           => '其它原因：',
'blockipsuccesssub'        => '封鎖成功',
'blockipsuccesstext'       => '[[Special:Contributions/$1|$1]]已經乞封鎖.<br />
覷蜀覷[[Special:BlockList|封鎖單]]來瀏覽封鎖。',
'ipb-edit-dropdown'        => '修改封鎖原因',
'ipb-unblock-addr'         => '開封$1',
'ipb-unblock'              => '開封鎖蜀隻用戶或者IP地址',
'ipb-blocklist'            => '看封鎖單單',
'unblockip'                => '開放用戶',
'ipusubmit'                => '開放茲地址',
'unblocked'                => '[[User:$1|$1]]已經乞開放了。',
'ipblocklist'              => '乞封鎖其用戶',
'ipblocklist-legend'       => '討蜀隻乞封鎖其用戶',
'ipblocklist-submit'       => '尋討',
'infiniteblock'            => '永遠',
'anononlyblock'            => '囇無名用戶',
'createaccountblock'       => '防止開賬戶',
'ipblocklist-empty'        => '茲張封鎖單單是空其。',
'blocklink'                => '封鎖',
'unblocklink'              => '開封',
'change-blocklink'         => '修改封鎖情況',
'contribslink'             => '貢獻',
'blocklogpage'             => '封鎖日誌',
'blocklogentry'            => '封鎖[[$1]]，遘$2時候過時，$3',
'block-log-flags-anononly' => '囇無名用戶',
'block-log-flags-nocreate' => '防止開賬戶',
'ipb_expiry_invalid'       => '過期時間無效。',
'ipb_already_blocked'      => '「$1」已經乞封鎖了',

# Developer tools
'lockconfirm'       => '正式，我卜想鎖定數據庫。',
'lockbtn'           => '鎖定數據庫',
'unlockbtn'         => '開數據庫',
'lockdbsuccesssub'  => '數據庫鎖定好了',
'databasenotlocked' => '茲數據庫無鎖。',

# Move page
'move-page-legend'        => '移動頁面',
'movepagetext'            => "使下底其表單來重新共茲蜀頁起蜀萆名字，移動伊所有其歷史遘伊其新名字。
舊其標題會變成新其標題其重定向頁。
汝會使自動更新重定向許蜀點遘原底其標題。
如果伊結果伓是總款咯，許汝著檢查[[Special:DoubleRedirects|雙重重定向]]或者[[Special:BrokenRedirects|獃其重定向]]。
汝著為鏈接會使繼續鏈遘伊應該跳轉其地方負責任。

注意如果許塊已經有蜀頁去了，噲頁面就'''𣍐'''移過了，除開許囇是蜀萆重定向固加無舊底其修改歷史。
茲其意思就是講如果汝名字起賺了，汝會使共茲蜀萆頁面重新起伊原底其名字，但是𣍐使覆蓋已經存在其頁面。

'''警告！'''
茲可能會對一般頁面造成過大其固加無辦法預見遘其改變；
起動汝著敆做之前會意總款做其後果。",
'movepagetalktext'        => "相關其討論頁會自動共伊移遘'''無挃'''：
* 汝其新其用戶名已經有蜀頁有內容其討論頁，或者
* 汝取消下底其框框。

若總款，汝會使自家移動或者是合併頁面。",
'movearticle'             => '移動頁面',
'movenologin'             => '未躒底',
'movenologintext'         => '著[[Special:UserLogin|躒底]]才會使移動頁面。',
'newtitle'                => '遘新題目：',
'move-watch'              => '監視茲頁',
'movepagebtn'             => '移動頁面',
'pagemovedsub'            => '移動成功',
'talkexists'              => "'''茲蜀頁自家已經成功乞移開去了，但是討論頁𣍐使移開，因為已經有蜀萆敆新其標題。請手動共伊合併起了。'''",
'movedto'                 => '移遘',
'movetalk'                => '移動相關討論頁',
'movelogpage'             => '移動日誌',
'movelogpagetext'         => '下底是乞移動過其頁其單單。',
'movereason'              => '原因：',
'delete_and_move'         => '刪掉並且移動',
'delete_and_move_confirm' => '正式，刪掉茲蜀頁',

# Namespace 8 related
'allmessages'               => '系統消息',
'allmessagesname'           => '名',
'allmessagesdefault'        => '默認其消息文字',
'allmessagescurrent'        => '現時其文字',
'allmessagestext'           => '茲是敆媒體維基命名空間底裏系統消息其蜀萆單單。
如果汝卜想貢獻通用其媒體維基本地化服務，請訪問[https://www.mediawiki.org/wiki/Localisation 媒體維基本地化]共[//translatewiki.net translatewiki.net]。',
'allmessagesnotsupportedDB' => "茲蜀頁𣍐使其，因為'''\$wgUseDatabaseMessages'''已經乞禁止去了。",

# Thumbnails
'thumbnail-more' => '放大',

# Tooltip help for the actions
'tooltip-pt-userpage'            => '汝其用戶頁',
'tooltip-pt-mytalk'              => '汝其討論頁',
'tooltip-pt-preferences'         => '汝其設定',
'tooltip-pt-login'               => '希望汝躒底其；當然，無逼汝總款做。',
'tooltip-pt-logout'              => '躒出',
'tooltip-ca-talk'                => '茲蜀頁其討論',
'tooltip-ca-edit'                => '汝會使修改茲蜀頁。起動敆保存以前使預覽按鈕',
'tooltip-ca-addsection'          => '開始蜀萆新其部分',
'tooltip-ca-viewsource'          => '茲蜀頁乞保護起去。
汝會使看伊其源代碼。',
'tooltip-ca-protect'             => '保護茲蜀頁',
'tooltip-ca-delete'              => '刪掉茲蜀頁',
'tooltip-ca-move'                => '移動茲蜀頁',
'tooltip-ca-watch'               => '共茲蜀頁加遘汝其監視單',
'tooltip-ca-unwatch'             => '共茲頁趁監視單𡅏移開去',
'tooltip-search'                 => '尋討 {{SITENAME}} [alt-f]',
'tooltip-search-fulltext'        => '敆茲幾頁𡅏尋討茲文字',
'tooltip-p-logo'                 => '覷蜀覷頭頁',
'tooltip-n-mainpage'             => '覷蜀覷頭頁',
'tooltip-n-mainpage-description' => '覷蜀覷頭頁',
'tooltip-n-recentchanges'        => '維基百科最近其改變其單單',
'tooltip-n-randompage'           => '隨便罔看',
'tooltip-t-whatlinkshere'        => '鏈遘嚽塊其所有維基頁面其單單',
'tooltip-t-contributions'        => '茲蜀用戶其貢獻單單',
'tooltip-t-emailuser'            => '共茲蜀隻用戶發電子郵件',
'tooltip-t-upload'               => '上傳文件',
'tooltip-t-specialpages'         => '特殊頁其單單',
'tooltip-t-print'                => '茲蜀頁其會拍印其版本',
'tooltip-ca-nstab-main'          => '看蜀看內容頁',
'tooltip-ca-nstab-user'          => '覷蜀覷用戶頁',
'tooltip-ca-nstab-special'       => '茲是蜀萆特殊頁，汝𣍐使修改茲蜀頁。',
'tooltip-ca-nstab-project'       => '看工程頁',
'tooltip-ca-nstab-image'         => '看文件頁',
'tooltip-ca-nstab-template'      => '覷蜀覷模板',
'tooltip-minoredit'              => '共茲標記成過要修改',
'tooltip-save'                   => '保存汝其改變 [alt-s]',
'tooltip-preview'                => '預覽汝其改變，起動敆汝保存以前使茲。',
'tooltip-watch'                  => '共茲蜀頁加遘汝其監視單[alt-w]',

# Attribution
'anonymous'        => '{{SITENAME}}其無名{{PLURAL:$1|用戶}}',
'lastmodifiedatby' => '茲頁最後是$3著$1$2改變其。',

# Image deletion
'deletedrevision' => '刪掉舊其版本$1',

# Browsing diffs
'previousdiff' => '← 舊其修改',
'nextdiff'     => '新其修改 →',

# Media information
'file-nohires' => '無更高決斷',

# Special:NewFiles
'showhidebots' => '（$1機器人）',
'ilsubmit'     => '尋討',
'bydate'       => '按日期',

# Metadata
'metadata' => '元數據',

'exif-componentsconfiguration-0' => '無存在',

'exif-meteringmode-0' => '𣍐八',

'exif-lightsource-0' => '𣍐八',

'exif-subjectdistancerange-0' => '𣍐八',

# External editor support
'edit-externally'      => '使外程序來編輯茲文件',
'edit-externally-help' => '（參考[https://www.mediawiki.org/wiki/Manual:External_editors setup instructions]來瞭解更価信息）',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => '所有',
'namespacesall' => '所有',
'monthsall'     => '囫圇年',

# Email address confirmation
'confirmemail'           => '確定電子郵件地址',
'confirmemail_invalid'   => '確認碼無效。
可能已經過期了。',
'confirmemail_needlogin' => '汝著$1來確定汝其電子郵件地址。',
'confirmemail_loggedin'  => '汝其電子郵件地址現在已經確定去了。',
'confirmemail_error'     => '保存汝其確認其時候發現有鄭了。',
'confirmemail_body'      => '有人（可能是汝）敆IP地址$1𡅏已經使茲蜀萆電子郵件地址來註冊蜀萆賬戶「$2」去了。

卜想確認茲蜀萆賬戶當真是汝其，固加敆{{SITENAME}}激活電子郵件特點，許敆汝其瀏覽器𡅏拍開茲蜀萆鏈接：

$3

如果汝*無*註冊茲賬戶，單擊茲蜀萆鏈接來取消電子郵件確認：

$5

茲蜀萆確認代碼會敆$4時候過期。',

# Delete conflict
'deletedwhileediting' => "'''警告：'''茲蜀頁已經敆汝編輯以前刪掉去了！",
'recreate'            => '重新開',

# action=purge
'confirm_purge_button' => '好',

# Multipage image navigation
'imgmultipageprev' => '← 前蜀頁',
'imgmultipagenext' => '下蜀頁 →',
'imgmultigo'       => '去！',

# Table pager
'ascending_abbrev'         => '升',
'descending_abbrev'        => '降',
'table_pager_next'         => '下蜀頁',
'table_pager_prev'         => '前蜀頁',
'table_pager_first'        => '頭頁',
'table_pager_last'         => '尾頁',
'table_pager_limit'        => '每頁顯示$1項目',
'table_pager_limit_submit' => '去',
'table_pager_empty'        => '無結果',

# Auto-summaries
'autosumm-blank'   => '都來空其頁',
'autoredircomment' => '重定向頁面遘[[$1]]',
'autosumm-new'     => '新其頁面「$1」',

# Live preview
'livepreview-loading' => '載入...',
'livepreview-ready'   => '載入…好了！',

# Watchlist editor
'watchlistedit-raw-title'   => '修改原始監視單',
'watchlistedit-raw-legend'  => '修改原始監視單',
'watchlistedit-raw-titles'  => '題目：',
'watchlistedit-raw-submit'  => '更新監視單',
'watchlistedit-raw-removed' => '{{PLURAL:$1|$1萆題目}}已經刪掉了：',

# Watchlist editing tools
'watchlisttools-view' => '看相關改變',
'watchlisttools-edit' => '看共修改監視單',
'watchlisttools-raw'  => '修改原始監視單',

# Special:FilePath
'filepath-page' => '文件：',

# Special:SpecialPages
'specialpages' => '特殊頁',

);
