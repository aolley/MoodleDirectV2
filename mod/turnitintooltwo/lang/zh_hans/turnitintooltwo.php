<?php
// Version: 2014012405
// Date: 2014-07-25
// Language: zh_hans

$string['addsubmission'] = '添加提交物件';
$string['allowlate'] = '在截止日期後允许提交物件';
$string['allsubmissions'] = '提交收件匣';
$string['anon'] = '匿名';
$string['anonenabled'] = '开启匿名标示';
$string['anytype'] = '任何提交物件类型';
$string['assigngeterror'] = '无法取得 turnitintooltwo 数据';
$string['ced'] = '课程结束日期';
$string['classcreationerror'] = 'Turnitin 课程建立过程失败';
$string['classupdateerror'] = '无法更新 Turnitin 课程数据';
$string['configureerror'] = '在课程内使用此模组之前，您必须先完全变更它的设定。请联系您的 Moodle 管理员。';
$string['connecttest'] = '测试 Turnitin 连接 ';
$string['connecttestcommerror'] = '无法连线至 Turnitin。请再次检查您的 API URL 设置。';
$string['connecttesterror'] = '连线至 Turnitin 时有误。错误回覆讯息如下：<br />';
$string['connecttestsuccess'] = 'Moodle 已成功地连线至 Turnitin';
$string['copyrightagreement'] = '一旦勾选此框格，我确认我的提交物件是我自己的作品。我接受所有可能因提交此物件而造成的侵权之责任。';
$string['coursegeterror'] = '无法获得课程数据';
$string['courseiderror'] = '课程代号错误';
$string['deleteconfirm'] = '您确定您想要删除此提交物件吗？\n\n 此动作是无法还原的。';
$string['deletesubmission'] = '删除提交物件';
$string['downloadsubmission'] = '下载提交物件';
$string['dtdue'] = '截止日期';
$string['dtpost'] = '公布日期';
$string['dtstart'] = '开始日期';
$string['excludebiblio'] = '排除参考书目';
$string['excludepercent'] = '百分比';
$string['excludequoted'] = '排除引用资料';
$string['excludequoted_help'] = '此设定允许指导教师在产生原创性报告时选择排除引文内的内文使其不被检查相符处。此设定可以在各个原创性报告内撤销。';
$string['excludevalue'] = '排除较小的相符处';
$string['excludevalue_help'] = '此设定允许指导教师在产生原创性报告时选择排除长度不够长的相符处（由指导教师设定）使其不被考虑。此设定可以在各个原创性报告内撤销。';
$string['excludewords'] = '字';
$string['filetosubmit'] = '欲提交的文档';
$string['filetosubmit_help'] = '当提交文档至一个作业部分，浏览您的电脑以寻找您要使用此格式上传的文档';
$string['fileupload'] = '文档上传';
$string['genduedate'] = '在截止日期当天产生报告 （在截止日期前允许重新提交）';
$string['genimmediately1'] = '即刻产生报告（不允许重新提交）';
$string['genimmediately2'] = '即刻产生报告（在截止日期前允许重新提交';
$string['institutionalrepository'] = '机构存库（适用时）';
$string['institutionalchecksettings'] = '与<br />机构存库对證';
$string['institutionalcheck'] = '与机构存库对證';
$string['internetcheck'] = '与网络比较';
$string['internetcheck_help'] = '当为文稿处理原创性报告时与 Turnitin 网络储存库比较。如果这没有被选择的话，相似处指数百分比可能下降。';
$string['journalcheck'] = '与杂志、<br />期刊与刊物比较';
$string['journalcheck_help'] = '当为文稿处理原创性报告时与 Turnitin 杂誌、期刊与刊物储存库比较。如果这没有被选择的话，相似处指数百分比可能下降。';
$string['maxfilesize'] = '最高文档大小';
$string['maxfilesize_help'] = '此设定决定用户提交至每个作业部分的物件之最高文档大小。您可以设置的最高值数值被课程设定内所设的数值支配，而此数值被限制为 20Mb，也就是上传至 Turnitin 的物件的最高值。';
$string['maxlength'] = ' {$a->field} 的最大的长度为 {$a->length} 字符';
$string['maxmarks'] = '最高分数';
$string['pluginname'] = 'Turnitin 作业 2';
$string['modulename'] = $string['pluginname'];
$string['modulenameplural'] = 'Turnitin 作业';
$string['moduleversion'] = '版本';
$string['mysubmissions'] = '我的提交物件';
$string['nolimit'] = '无限制';
$string['nonmoodlestudents'] = '非 Moodle 学生';
$string['nonmoodleuser'] = '非 Moodle 用户';
$string['norepository'] = '无存库';
$string['nosubmissions'] = '尚未提交物件';
$string['notavailableyet'] = '不可使用';
$string['numberofparts'] = '部分数量';
$string['numberofparts_help'] = '允许建立有多部分的作业，每个用户可以提交作平至每一部分。';
$string['objectid'] = '文稿代码';
$string['overallgrade'] = '总体分数';
$string['overallgrade_help'] = '总体分数决定总体作业所允许的成绩上限。作业的每一部分将会被分配到一部分的成绩，然后按照比例总和以计算总体分数。';
$string['partdberror'] = '输入第 {$a} 部分至数据库时有误<br />';
$string['partdeleteerror'] = '无法删除作业部分{$a}数据';
$string['partdeletewarning'] = '您尝试删除的作业部分包含着提交物件。若您删除此作业部分，您将会丧失这些提交部分。n\n\ 您确定要继续？';
$string['partposterror'] = '截止日期必须在公布日期前。<br />';
$string['partnameerror'] = '部分名称不可为空白。<br />';
$string['partdueerror'] = '截止日期必须在公布日期前。<br />';
$string['pending'] = '未决的';
$string['permissiondeniederror'] = '您尚未获得正确的许可以完成所请求的动作';
$string['portfolio'] = '组合夹';
$string['proxypassword'] = 'Proxy 密码';
$string['proxypassword_desc'] = '<b>[可选]</b><br />若您的 proxy 需要验证，请在此输入密码';
$string['proxyport'] = 'Proxy 槽';
$string['proxyport_desc'] = '<b>[可选]</b><br />若您的服务器使用 Proxy 來连结网络，请在此输入 proxy 槽。';
$string['proxyurl'] = 'Proxy URL';
$string['proxyurl_desc'] = '<b>[可选]</b><br />若您的服务器使用 Proxy 來连结网络，请在此输入 proxy 网址。';
$string['proxyuser'] = 'Proxy 用户名称';
$string['proxyuser_desc'] = '<b>[可选]</b><br />若您的 proxy 需要验证，请在此输入用户名称。';
$string['reportgenspeed'] = '产生报告速度';
$string['resubmission'] = '重新提交';
$string['resubmissiongradewarn'] = '在截止日期前皆可以重新提交。若文稿被重新提交，任何成绩都将会被删除。您想要继续吗？';
$string['resubmit'] = '重新提交';
$string['reveal'] = '显示';
$string['revealerror'] = '若要显示学生姓名，您必须要有正当的理由';
$string['revealreason'] = '显示学生姓名的理由';
$string['saveusage'] = '储存数据转储';
$string['selectoption'] = '选择选项';
$string['showusage'] = '显示数据转储';
$string['spapercheck'] = '跟已储存的学生文稿做比较';
$string['spapercheck_help'] = '当为文稿处理原创性报告时与 Turnitin 学生文稿储存库比较。如果这没有被选择的话，相似处指数百分比可能下降。';
$string['standardrepository'] = '标准存库';
$string['student'] = '学生';
$string['studentreports'] = '显示原创性报告给学生';
$string['studentreports_help'] = '允许您显示 Turnitin 原创性报告给学生用户。 若设定为“确定”，Turnitin 制作的原创性报告将可被学生检视。 ';
$string['studentstatus'] = '已提交 {$a->modified} (文稿代码: {$a->objectid}';
$string['submissiondeleteerror'] = '无法删除提交物件';
$string['submissionfileerror'] = '您必须附加文档才能提交';
$string['submissionfiletypeerror'] = '不允许此文档类型。允许的类型为 ({$a})';
$string['submissiongeterror'] = '无法获得提交数据';
$string['submissiongrade'] = '成绩';
$string['submissionpart'] = '提交部分';
$string['submissionpart_help'] = '选择此文稿提交至的 Turnitin 作业部分';
$string['submissions'] = '提交物件';
$string['submissiontexterror'] = '为此提交物件，您必须包含文字';
$string['submissiontitle'] = '提交标题';
$string['submissiontitle_help'] = '请为您提交的作品输入标题';
$string['submissiontitleerror'] = '您必须为此提交物件添加标题';
$string['submissiontype'] = '提交物件类型';
$string['submissiontype_help'] = '<p>显示您被允许提交至 Turnitin 的提交物件类型。选项包括：</p>';
$string['submissionupdateerror'] = '无法更新提交数据';
$string['submissionuploadsuccess'] = '您的提交物件已成功上传至 Turnitin。';
$string['submitpaper'] = '提交文稿';
$string['submitpapersto'] = '储存学生文稿';
$string['submitpapersto_help'] = '此设定提供指导教师旋转是否将文稿储存在 Turnitin 学生文稿储存库的能力。提交文稿至学生文稿储存库的好处是提交至作业的学生文稿将会更您目前和之前的课程内的提交物件做比较。若您选择，“无储存库”，您的学生文稿将不会被储存在 Turnitin 学生文稿储存库内。';
$string['submitted'] = '更改';
$string['submittoturnitin'] = '提交至 Turnitin';
$string['textsubmission'] = '文字提交';
$string['texttosubmit'] = '欲提交的文字';
$string['texttosubmit_help'] = '在此栏框内剪贴您提交物件的文字内容';
$string['title'] = '标题';
$string['turnitinaccountid'] = 'Turnitin 帐户代号';
$string['turnitinaccountid_desc'] = '<b>[要求]</b><br />输入您的 Turnitin 主要帐户的代码';
$string['turnitinanon'] = '匿名标示';
$string['turnitinanon_help'] = '只要把此项目设定为“确定”，您就可以在您的 Turnitin 作业上使用匿名标示。 一旦在作业上开启匿名标示， 就无法关闭该功能。 ';
$string['turnitinapiurl'] = 'Turnitin API URL';
$string['turnitinapiurl_desc'] = '<b>[要求]</b><br />输入 Turnitin API URL<br /><i>(例如： https://api.turnitin.com)<br />(例如： https://submit.ac.uk)';
$string['turnitindeleteconfirm'] = '删除文稿将会使它们从提交清单和收件匣中移除，但不会完全地从\n Turnitin 数据库移除。\n\n您确定您要刪除此提交物件吗？一旦做此动作将无法还原。 ';
$string['turnitindeletionerror'] = 'Turnitin 提交刪除失败。电脑上的 Moodle 副本已被移除，但在 Turnitin 內的提交物件无法被刪除。 ';
$string['turnitinenrolstudents'] = '为所有学生注册';
$string['turnitinloading'] = '一致化数据';
$string['turnitinpart'] = '第 {$a} 部分';
$string['turnitinrefreshsubmissions'] = '更新提交物件';
$string['turnitinsecretkey'] = 'Turnitin 共用键';
$string['turnitinsecretkey_desc'] = '<b>[要求]</b><br />输入您的 Turnitin 共用键 <br /><i>(由您的 Turnitin 管理员设定)</i> ';
$string['turnitintooltwo'] = 'Turnitin 工具';
$string['turnitintooltwo:admin'] = '管理 Turnitin 工具';
$string['turnitintooltwo:grade'] = '评估 Turnitin 工具作业';
$string['turnitintooltwo:submit'] = '提交至 Turnitin 工具作业';
$string['turnitintooltwo:view'] = '检视 Turnitin 工具作业';
$string['turnitintooltwoagreement'] = '否认声明/同意书';
$string['turnitintooltwoagreement_default'] = '一旦勾选此栏框，我确认此提交物件是我的创作，我亦接受所有可能因提交此物件而产生的侵权之责任。';
$string['turnitintooltwointro'] = '总结';
$string['turnitintooltwoname'] = '复制 Turnitin 作业 <i>(建立副本, 新 Turnitin 课程) ';
$string['turnitintooltworesetdata1'] = '取代 Turnitin 作业 <i>(取代作业部分, 重新使用 Turnitin 课程) ';
$string['turnitintooltworesetdata2'] = '让 Turnitin 作业保持原狀 ';
$string['turnitintooltworesetinfo'] = '为在此课程的 Turnitin 作业选择以下的一个选项 ';
$string['turnitintooltwoupdateerror'] = '无法更新 turnitintooltwo 数据';
$string['turnitintooltwoagreement_desc'] = '<b>[非必须的]</b><br />输入一个提交的同意确认声明。<br />(<b>注意:</b> 若同意完全是空白的，学生在提交时就无需有同意确认)';
$string['turnitintooltwodeleteerror'] = '无法删除 turnitintooltwo 数据';
$string['turnitintooltwogeterror'] = '无法获得 turnitintooltwo 数据';
$string['turnitinuseanon'] = '使用匿名标示';
$string['turnitinuseanon_desc'] = '选择是否在为提交物件评分时允许匿名标示。<br /><i>(唯有在帐户设定匿名标示的用户才可使用此功能) ';
$string['turnitinusegrademark'] = '使用 GradeMark';
$string['turnitinusegrademark_help'] = '使用此设置以选择是否使用 Turnitin GradeMark 或Moodle 來为提交物件评分';
$string['turnitinusegrademark_desc'] = '选择是否使用 Turnitin GradeMark 或Moodle 來为提交物件评分。<br /><i>(唯有在帐户设定 GradeMark 的用戶才可使用此功能) ';
$string['turnitinuserepository'] = '开启机关存库';
$string['turnitinuserepository_desc'] = '选择是否在 Turnitin 作业內使用机关存库。<br /><i>(唯有机关存庫的用戶才可使用此功能)<br /><i>';
$string['turnitintutorsremove'] = '您确定您要从 Turnitin 内的课程中移除此辅导教师吗？';
$string['turnitinuserepository_help'] = '用此设置以在作业设定视窗内开启机关存库。';
$string['tutorstatus'] = '{$a->submitted}/{$a->total} 学生提交物件, {$a->graded} 提交{$a->gplural} 已评分 ';
$string['type'] = '提交物件类型';
$string['types'] = '提交物件类型';
$string['types_help'] = '<p>提交物件可以有两种不同的形式。複製和粘贴或档案上传。</p>';
$string['unlinkusers'] = '解除用户链接';
$string['usercreationerror'] = 'Turnitin 用户建立失败';
$string['userdeleteerror'] = '无法删除用户数据';
$string['usergeterror'] = '无法获得用户数据';
$string['userstounlink'] = '结束链接的用户';
$string['userupdateerror'] = '无法更新用户数据';
$string['viewreport'] = '检视报告';
$string['wrongaccountid'] = '链接您的 Turnitin 课程时有误。您设置的帐户为帐户 {$a->current}。 此课程源自于帐户 {$a->backupid}。您仅可以复原从同一个 Turnitin 帐户的。';
$string['copyassigndata'] = '复制 Turnitin 作业数据';
$string['replaceassigndata'] = '取代 Turnitin 作业数据';
$string['downloadexport'] = '外传';
$string['downloadorigzip'] = '压缩档（原始格式）';
$string['downloadpdfzip'] = '压缩档（PDF）';
$string['downloadgradexls'] = '分数外传（XLS）';
$string['turnitintutors'] = 'Turnitin 辅导教师';
$string['turnitintutorsadd'] = '添加 Turnitin 辅导教师';
$string['turnitintutorsallenrolled'] = '所有的辅导教师已注册在 Turnitin ';
$string['turnitintutors_desc'] = '一下选择的辅导教师已注册至此 Turnitin 课程为辅导教师。已注册的辅导教师可以登录至 Turnitin 网站以进入此课程。';
$string['duplicatesfound'] = 'Moodle Direct 作业藉由 Turnitin API 连至同一个 Turnitin 作业时就会发生重复。这往往会造成问题，其中最常见的是，提交至其中一个收件匣的物件会出现在另一个收件匣。欲处理这类问题，您应该删除重复作业或重新设定有重复作业出现的课程。<br /><br />我们找到以下的重复:';
$string['erater'] = '开启 e-rater 文法检查';
$string['erater_handbook'] = 'ETS&copy 手册';
$string['erater_dictionary'] = 'e-rater 字典';
$string['erater_categories'] = 'e-rater 类型';
$string['erater_spelling'] = '拼字';
$string['erater_grammar'] = '文法';
$string['erater_usage'] = '用法';
$string['erater_mechanics'] = '技巧';
$string['erater_style'] = '风格';
$string['erater_handbook_advanced'] = '进阶';
$string['erater_handbook_highschool'] = '高中';
$string['erater_handbook_middleschool'] = '中学';
$string['erater_handbook_elementary'] = '小学';
$string['erater_handbook_learners'] = '英文学习者';
$string['erater_dictionary_enus'] = '美式英文字典';
$string['erater_dictionary_engb'] = '英式英文字典';
$string['erater_dictionary_en'] = '美式及英式英文字典';
$string['turnitinuseerater'] = '开启 ETS&copy;';
$string['turnitinuseerater_desc'] = '选择是否开启 ETS&copy; 文法检查。<br /><i>(唯有在ETS&copy; e-rater 在您的Turnitin帐户开启的情况下才能开启此选项)</i>';
$string['student_read'] = '学生检视文稿于：';
$string['student_notread'] = '学生尚未检视此文稿。';
$string['relinkusers'] = '重新链接用户';
$string['unlinkrelinkusers'] = '解除链接/重新链接 Turnitin 用户';
$string['usersunlinkrelink'] = '解除链接/重新链接之用户';
$string['turnitinid'] = 'Turnitin 代码';
$string['turnitinsubmissionid'] = '预设设置';
$string['defaults_desc'] = '以下的设置将是用在新的 Moodle Direct Turnitin 作业 2 的实例上的预设设置';
$string['upgradeavailable'] = '有新的更新程式';
$string['coursemodidincorrect'] = '课程单元代码不正确';
$string['coursemisconfigured'] = '课程安装错误';
$string['coursemodincorrect'] = '课程单元不正确';
$string['no'] = '非';
$string['yes'] = '是';
$string['migrationassignmentcreated'] = '迁移作业已建立 - 代码: {$a}';
$string['migrationassignmentpartcreated'] = '迁移作业部分已建立 - 代码: {$a}';
$string['migrationassignmentcreationerror'] = '无法建立迁移作业 - 课程: {$a}';
$string['migrationassignmenterror1'] = '无法添加新课程单元至课程 {$a}';
$string['migrationassignmenterror2'] = '无法添加新课程单元至该组 - 课程 {$a}';
$string['migrationassignmenterror3'] = '无法为迁移作业建立活动 - 课程 {$a}';
$string['migrationcoursecreateerror'] = '课程 {$a} 无法在 Moodle 上建立';
$string['migrationcoursecreatederror'] = '课程 {$a} 被重新建立，但在储存链接时有误';
$string['migrationcoursecreated'] = 'Turnitin 内的课程在 Moodle 上重新建立';
$string['migrationcoursegeterror'] = '无法取得 Turnitin 内的任何课程';
$string['migrationassignmentgeterror'] = '无法取得 Turnitin 内的任何作业';
$string['getassignmenterror'] = '无法迁移 Turnitin 内的任何作业';
$string['checkupdateavailableerror'] = '无法为 Moodle Direct 查询版本更新';
$string['maxmarkserror'] = '最高分数必须在 0 和 100 之间';
$string['nosubmissiondataavailable'] = '无其它提交物件数据';
$string['nointegration'] = '无整合';
$string['testingconnection'] = '测试连接至 Turnitin ';
$string['integration'] = '整合';
$string['id'] = '代码';
$string['course'] = '课程';
$string['selectcoursecategory'] = '选择课程类型';
$string['module'] = '单元';
$string['source'] = '来源';
$string['similarity'] = '相似度';
$string['turnitinula'] = '在提交物件之前，您必须接受最新的 Turnitin 用户同意书。请点选这里以检视并接受该同意书。';
$string['moodlelinked'] = '与 Moodle 链接';
$string['coursegettiierror'] = '无法从 Turnitin 获取课程数据';
$string['savecourseenddateerror'] = '在尝试在 Turnitin 内储存新的课程结束日期时有误';
$string['savecourseenddate'] = '储存新的课程结束日期';
$string['newcourseenddate'] = '新的课程结束日期';
$string['newenddatedesc'] = '为以下的课程选择新的结束日期，然後之後它会在 Turnitin 内更新。';
$string['close'] = '关闭';
$string['errors'] = '有误';
$string['setinstructordefaults'] = '设定这些值为作业预设值';
$string['setinstructordefaults_help'] = '这些设定将会被用在任何您新建立的 Moodle Direct Turnitin 作业上。它们将取代您的系统管理员制定的预设值并将仅为您专用。 ';
$string['messagesinbox'] = 'Turnitin 信息收件匣';
$string['downloadgrademarkzip'] = '下载选择的 Grademark 档案';
$string['downloadorigfileszip'] = '下载原始档案';
$string['uploadingsubtoturnitin'] = '上传您的提交物件至 Turnitin';
$string['emptycreatedfile'] = '您所尝试提交的文档为空白或讹误';
$string['studentdataprivacy'] = '学生数据隐私设定';
$string['studentdataprivacy_desc'] = '以下设定可以调整以确保学生&#39; 的个人数据不会藉由 API 传送至 Turnitin。 ';
$string['enablepseudo'] = '开启学生隐私';
$string['enablepseudo_desc'] = '若选择此选项，学生电子邮件地址将被转变为拟似 Turnitin IP 的判定。.<br /><i>(<b>注意:</b> 若任何 Moodle 用户资料已经与 Turnitin 同步，此选项不能更改)</i>';
$string['pseudofirstname'] = '学生的假名';
$string['pseudofirstname_desc'] = '<b>[选择性的]</b><br />学生名字在 Turnitin 文件检视器内显示';
$string['pseudolastname'] = '学生的假姓';
$string['pseudolastname_desc'] = '学生的姓在Turnitin 文件检视器内显示';
$string['psuedolastnamegen'] = '自动产生姓氏';
$string['psuedolastnamegen_desc'] = '若设置为‘是’和热假姓设为用户简介档案内的一栏，那麽该栏被自动的独特识别代号填空。';
$string['pseudoemailsalt'] = '拟似加密盐';
$string['pseudoemailsalt_desc'] = '<b>[选择性的]</b><br />一个选择性的盐以添增产生的假的学生电子邮件地址的複杂性。<br />(<b>注意:</b> 盐应该维持不变以保持一致的假的电子邮件地址)';
$string['pseudoemaildomain'] = '假的电子邮件网域';
$string['pseudoemaildomain_desc'] = '<b>[选择性的]</b><br />一个选择性的假的电子邮件地址的网域。(若空白的话，将预设为 @tiimoodle.com)';
$string['pseudoemailaddress'] = '假的电子邮件地址';
$string['instructor'] = '指导教师';
$string['files'] = '文档';
$string['filedeleteconfirm'] = '您确定您要删除此文档吗？此动作将不能取消。';
$string['filebrowser'] = 'Moodle Direct 文档检视器';
$string['deletable'] = '可删除的';
$string['inactive'] = '未开启';
$string['created'] = '已建立';
$string['filename'] = '文档名称';
$string['user'] = '用户';
$string['sprevious'] = '前';
$string['snext'] = '次';
$string['semptytable'] = '未搜寻到任何结果';
$string['ssearch'] = '搜寻';
$string['sprocessing'] = '上传来自 Turnitin 的数据中...';
$string['szerorecords'] = '无法显示任何记录。';
$string['unlinkedusers'] = '未连接用户';
$string['modulename_help'] = '建立一个 Turnitin Moodle Direct 作业，以连接 Moodle 内的活动至 Turnitin 上的作业。一旦连接，活动允许指导教师使用在 Turnitin 文件检视器内有的评估工具来评估并提供反馈给学生的作品。';
$string['transmatch'] = '已翻译相符功能';
$string['transmatch_desc'] = '决定是否已翻译相符功能将会在作业设置视窗内成为可用的设置。<br /><i>(仅有当已翻译相符功能在您的 Turnitin 账户内开启後才能开启此选项)</i>';
$string['turnitintooltwo:addinstance'] = '添加 Turnitin 工具活动';
$string['copyrightagreementerror'] = '在提交前，请勾选空格以标明您接受同意书。';
$string['updatepart'] = '更新部分';
$string['grademark'] = 'GradeMark';
$string['launchgrademark'] = 'GradeMark';
$string['submissiondeleted'] = '提交物件已删除';
$string['tutoradded'] = '辅导教师已添加至 Turnitin 内的课程';
$string['tutoraddingerror'] = '添加辅导教师至 Turnitin 内的课程时出现问题';
$string['tutorremoved'] = '辅导教师已从 Turnitin 内的课程中移除';
$string['tutorremovingerror'] = '移除辅导教师至 Turnitin 内的课程时出现问题';
$string['noturnitinassignemnts'] = '尚无 Turnitin 作业';
$string['notutors'] = '尚无辅导教师加入 Turnitin 内的此课程';
$string['settings'] = '设定';
$string['faultcode'] = '错误代号';
$string['line'] = '列';
$string['message'] = '信息';
$string['code'] = '代号';
$string['userfinderror'] = '尝试在 Turnitin 内找寻用户时有误';
$string['userjoinerror'] = '尝试在 Turnitin 内添加用户至课程时有误';
$string['userremoveerror'] = '尝试在 Turnitin 内移除用户时有误';
$string['membercheckerror'] = '尝试检查註册在此课程内的用户时有误';
$string['tiiusergeterror'] = '尝试从 Turnitin 内获取用户细节时有误';
$string['createassignmenterror'] = '尝试在 Turnitin 内建立作业时有误';
$string['editassignmenterror'] = '尝试在 Turnitin 内编辑作业时有误';
$string['deleteassignmenterror'] = '尝试在 Turnitin 内删除作业时有误';
$string['createsubmissionerror'] = '尝试在 Turnitin 内建立提交物件时有误';
$string['updatesubmissionerror'] = '尝试重新提交您的提交物件至 Turnitin 时有误';
$string['tiisubmissiongeterror'] = '尝试从 Turnitin 内获取提交物件时有误';
$string['tiisubmissionsgeterror'] = '尝试从 Turnitin 内获取此作业的提交物件时有误';
$string['enrolling'] = '註册学生至 Turnitin';
$string['tiiassignmentgeterror'] = '尝试从 Turnitin 内获取作业时有误';
$string['turnitinstudents'] = 'Turnitin 学生';
$string['turnitinstudentsremove'] = '您确定您想要从 Turnitin 内的课程中移除此学生吗？';
$string['studentremoved'] = '学生已从 Turnitin 内的课程中移除';
$string['studentremovingerror'] = '从 Turnitin 内的课程中移除学生时出现问题';
$string['turnitinstudents_desc'] = '以下被选择的用户已註册至此 Turnitin 课程。註册学生可藉由登录 Turnitin 网页授权进入此课程。';
$string['coursebrowser'] = 'Turnitin 课程迁移';
$string['coursebrowserdesc'] = '您可以搜查 Turnitin 内的课程以在 Moodle 上重新建立以下的课程';
$string['courseexistsmoodle'] = '此课程目前在 Moodle 内显示为：';
$string['coursetitle'] = '课程标题';
$string['coursetitleerror'] = '您必须提供课程标题以供搜查';
$string['createmoodlecourses'] = '重新建立课程';
$string['createmoodleassignments'] = '重新建立选择课程的所有作业在 Moodle 内吗？';
$string['recreatemulticlasses'] = '您所选择的课程目前被重新建立中。根据您所选择的课程数，这有可能会花几分钟。';
$string['recreatemulticlassescomplete'] = '课程重新建立目前已完成。{$a->total} 分之 {$a->completed} 已成功地建立。';
$string['createcourse'] = '建立新的 Moodle 课程';
$string['linkcourse'] = '链接课程至现存的 Moodle 课程';
$string['selectcourse'] = '选择 Moodle 课程';
$string['defaultcoursetiititle'] = 'Turnitin 内的课程';
$string['or'] = '或';
$string['downloadassignment'] = '下载作业至 Moodle';
$string['assignmenttitle'] = '新作业标题';
$string['defaultassignmenttiititle'] = 'Turnitin 内的作业';
$string['revealdesc'] = '请在下方留下显示学生姓名的原因。';
$string['noreason'] = '没有特定的原因';
$string['unanonymiseerror'] = '当尝试显示学生姓名时出现错误';
$string['digitalreceipt'] = '电子回条';
$string['viewdigitalreceipt'] = '检视电子回条';
$string['noscript'] = 'Turnitin 需要 Javascript 但是您的浏览器并未开启它。请在您的浏览器内开启 Javascript 以使您能利用 Turnitin 的所有功能。';
$string['noscriptsummary'] = 'Turnitin 需要 Javascript 但是您的浏览器并未开启它。若未开启的话，您将无法进入 Turnitin。';
$string['noscriptula'] = '(因为您没有开启 javascript，在接受 Turnitin 用户同意书後，您将需要在提交物件时手动更新此页面)';
$string['showsummary'] = '显示作业摘要';
$string['hidesummary'] = '隐藏作业摘要';
$string['marksavailable'] = '标示可使用';
$string['deletepart'] = '删除部分';
$string['partdeleted'] = '作业部分已被删除';
$string['turnitin'] = 'Turnitin';
$string['coursebrowserassignmentdesc'] = '在下列的表格，您可以选择最多 5 个作业以在 Moodle内建立複製 Turnitin 作业的部分。';
$string['turnitinoroptions'] = '原创性报告选项';
$string['turnitingmoptions'] = 'Grademark 选项';
$string['attachrubric'] = '依附评分表至此作业';
$string['norubric'] = '无评分表';
$string['otherrubric'] = '使用属於其他指导教师的评分表';
$string['attachrubricnote'] = '注意：学生将可以在提交前检视依附的评分表和它们的内容。';
$string['changerubricwarning'] = '变更或分离评分表将从此作业内的文稿中移除所有现存评分表计分，包括之前标示的计分卡。之前评分过的文稿之总体成绩将保留。';
$string['launchrubricmanager'] = '开动评分表管理工具';
$string['launchrubricview'] = '检视标示用的评分表';
$string['launchrubricviewshort'] = '标示评分表';
$string['launchquickmarkmanager'] = '开动 Quickmark 管理工具';
$string['launchpeermarkmanager'] = '开动 Peermark 管理工具';
$string['launchpeermarkreviews'] = '开动 Peermark 评鑑';
$string['peermark'] = 'PeerMark ';
$string['peermarkassignments'] = 'PeerMark 作业';
$string['showpeermark'] = '显示 PeerMark 作业';
$string['hidepeermark'] = '隐藏 PeerMark 作业';
$string['noofreviewsrequired'] = '必要评鑑总数';
$string['showpeermarkinstructions'] = '显示 PeerMark 指示';
$string['hidepeermarkinstructions'] = '隐藏 PeerMark 指示';
$string['turnitinenablepeermark'] = '开启 PeerMark 作业';
$string['turnitinenablepeermark_desc'] = '选择是否允许建立 Peermark 作业。<br/><i>(唯为他们的帐户安装 Peermark 的用户才有此选项)</i>';
$string['nonenrolledstudent'] = '非註册学生';
$string['startdatenotyearago'] = '开始日期不能过於 1年前';
$string['searchcourses'] = '搜寻课程';
$string['errorsdesc'] = '尝试上传以下文档至 Turnitin 时出现问题。';
$string['tiiexplain'] = 'Turnitin 为商务产品。您必须付订购费才能使用此服务。欲获得更多资讯，请看 <a href=&#34;http://docs.moodle.org/en/Turnitin_administration&#34;>http://docs.moodle.org/en/Turnitin_administration</a>';
$string['useturnitin'] = '开启 Turnitin';
$string['turnitinconfig'] = 'Turnitin 剽窃 Plugin 安装';
$string['studentdisclosuredefault'] = '所有被上传的文档将被提交至剽窃侦查服务 Turnitin.com';
$string['studentdisclosure'] = '学生透露';
$string['studentdisclosure_help'] = '此内文将会显示在文档上传页面给所有学生。';
$string['settingsinserterror'] = '当尝试插入设置至数据库时有误';
$string['settingsupdateerror'] = '尝试更新数据库设置时有误';
$string['config'] = '安装';
$string['configupdated'] = '安装更新';
$string['turnitindefaults'] = 'Turnitin 剽窃 Plugin 预设设定';
$string['turnitinpluginsettings'] = 'Turnitin 剽窃 Plugin 设定';
$string['defaultsdesc'] = '以下设置为在活动单元内开启 Turnitin时的预设组 ';
$string['compareinstitution'] = '比较提交文档和在此机构内提交的文稿';
$string['defaultinserterror'] = '尝试插入预设设置值於数据库时有误';
$string['defaultupdateerror'] = '尝试更新数据库内预设设置时有误';
$string['defaultupdated'] = 'Turnitin 预设值更新';
$string['pp_createsubmissionerror'] = '剽窃 plugin 在建立提交物件时有误';
$string['pp_updatesubmissionerror'] = '剽窃 plugin 在更新提交物件时有误';
$string['pp_submission_error'] = '您的提交物件有误';
$string['pp_configuredesc'] = '您必须在turnitintooltwo单元内安装此单元。请点选 <a href=&#34;{$a}/admin/settings.php?section=modsettingturnitintooltwo&#34;>here</a> 以安装此 plugin';
$string['coursestomigrate'] = '您在 Turnitiin 内有 {$a} 课程可以迁移';
$string['migrationheader'] = 'Turnitin 课程迁移';
$string['gradingtemplate'] = '评分模板';
$string['allownonor'] = '允许任何档案类型的提交物件？';
$string['allownonor_help'] = '此设定将允许提交任何档案类型。若此选项设为“是”，在可行的前提下，提交物件将会被检查其原创性，提交物件将可被下载而 GradeMark 反馈工具将可被使用。';
$string['submitnothing'] = '在无提交物件的前提下为此学生开启评分功能';
$string['submitnothingwarning'] = '为尚未提交档案的学生点选在灰笔将建立一个评分模板，允许您给学生 GradeMark 的作业反馈。评分模板取代提交物件并将阻止学生提交至不允许提交物件的作业。.<br><br> 您确定您要在无提交物件的前提下评分吗？ ';
$string['draftsubmit'] = '档案将提交至 Turnitin 内的何处？';
$string['submitondraft'] = '在上传时提交文档';
$string['submitonfinal'] = '当学生傳寄至标示时提交档案';
$string['turnitindiagnostic'] = '开启诊断模式';
$string['turnitindiagnostic_desc'] = '<b>[警告]</b><br />开启诊断模式来追踪 Turnitin API 的问题。';
$string['autorefreshgrades'] = '自动更新成绩/分数';
$string['autorefreshgrades_help'] = '按预设设定，在每次启用 Turnitin 后，Moodle 整合 plug in 将尝试自动拉下在 Turnitin 内所做的变更。 您可以使用此选项以关闭该功能，但若要维持这两个系统间的一致性，您将需要时常地从 Moodle 内手动更新成绩和原创性分数。';
$string['yesgrades'] = '确定，自动更新原创性分数与成绩';
$string['nogrades'] = '否，我将以手动方式更新原创性分数及成绩';
$string['submissionagreementerror'] = '您必须同意做此提交';
$string['noxmlwriterlibrary'] = '欲使用此插入程式，您将需要在您的伺服器上安装 PHP XMLWriter 延伸软件。';
$string['checkupgrade'] = '检查可用的升级';
$string['checkingupgrade'] = '检查可用的升级中';
$string['usinglatest'] = '您在使用最新的版本！';
$string['useturnitin_mod'] = '爲 {a} 开啓 Turnitin';
