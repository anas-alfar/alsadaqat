<?php

class m140524_061413_demo_data extends CDbMigration
{
	public function up()
	{
		$this -> execute("
SET foreign_key_checks = 0;

TRUNCATE `beneficiary`;
TRUNCATE `beneficiary_disabled`;
TRUNCATE `beneficiary_family_members`;
TRUNCATE `beneficiary_finance`;
TRUNCATE `beneficiary_home`;
TRUNCATE `beneficiary_orphan`;
TRUNCATE `beneficiary_paterfamilias`;
TRUNCATE `beneficiary_poor`;
TRUNCATE `beneficiary_relation`;
TRUNCATE `beneficiary_research_notes`;
TRUNCATE `beneficiary_student`;
TRUNCATE `beneficiary_student_class`;
TRUNCATE `beneficiary_teacher`;
TRUNCATE `beneficiary_widow`;
TRUNCATE `city`;
TRUNCATE `donator`;
TRUNCATE `event`;
TRUNCATE `event_activity`;
TRUNCATE `event_agenda`;
TRUNCATE `event_photo`;
TRUNCATE `event_type`;
TRUNCATE `mail_attachment`;
TRUNCATE `mail_inbox`;
TRUNCATE `mail_outbox`;
TRUNCATE `mail_template`;
TRUNCATE `mail_type`;
TRUNCATE `Message`;
TRUNCATE `mosque`;
TRUNCATE `mosque_agent`;
TRUNCATE `mosque_photo`;
TRUNCATE `mosque_type`;
TRUNCATE `organization`;
TRUNCATE `organization_access_level`;
TRUNCATE `organization_access_level_permission`;
TRUNCATE `organization_branch`;
TRUNCATE `organization_branch_country`;
TRUNCATE `organization_branch_country_committee`;
TRUNCATE `organization_branch_country_committee_user`;
TRUNCATE `organization_position`;
TRUNCATE `organization_type`;
TRUNCATE `organization_user`;
TRUNCATE `organization_user_access_level`;
TRUNCATE `task`;
	    	");

	    $this -> execute("
SET foreign_key_checks = 0;

INSERT INTO `beneficiary_relation` (`id`, `name`, `owner_id`, `created_at`, `updated_at`) VALUES
(45, 'أب', 1, '2014-05-24 11:26:51', NULL),
(46, 'أم', 1, '2014-05-24 11:26:51', NULL),
(47, 'أخ', 1, '2014-05-24 11:26:51', NULL),
(48, 'أخت', 1, '2014-05-24 11:26:51', NULL),
(49, 'عم', 1, '2014-05-24 11:26:51', NULL),
(50, 'عمة', 1, '2014-05-24 11:26:51', NULL),
(51, 'خال', 1, '2014-05-24 11:26:51', NULL),
(52, 'خالة', 1, '2014-05-24 11:26:51', NULL),
(53, 'جد', 1, '2014-05-24 11:26:51', NULL),
(54, 'جدة', 1, '2014-05-24 11:26:51', NULL),
(55, 'ابن عم', 1, '2014-05-24 11:26:51', NULL),
(56, 'ابن عمة', 1, '2014-05-24 11:26:51', NULL),
(57, 'ابن خال', 1, '2014-05-24 11:26:51', NULL),
(58, 'ابن خالة', 1, '2014-05-24 11:26:51', NULL),
(59, 'زوج الأب', 1, '2014-05-24 11:26:51', NULL),
(60, 'زوج الأم', 1, '2014-05-24 11:26:51', NULL),
(61, 'زوج الاخت', 1, '2014-05-24 11:26:51', NULL),
(62, 'زوجة الأخ', 1, '2014-05-24 11:26:51', NULL),
(63, 'ابن الأخ', 1, '2014-05-24 11:26:51', NULL),
(64, 'ابن الأخت', 1, '2014-05-24 11:26:51', NULL),
(65, 'بنت الأخ', 1, '2014-05-24 11:26:51', NULL),
(66, 'بنت الأخت', 1, '2014-05-24 11:26:51', NULL);


INSERT INTO `city` (`id`, `country_id`, `name`, `name_ar`, `published`, `created_at`, `updated_at`) VALUES
(1, 108, 'Amman', 'عمان', 'Yes', '2014-05-24 11:20:01', NULL),
(2, 108, 'Irbid', 'إربد', 'Yes', '2014-05-24 11:20:01', NULL),
(3, 108, 'Aqaba', 'العقبة', 'Yes', '2014-05-24 11:20:01', NULL),
(4, 108, 'Zarqa', 'الزرقاء', 'Yes', '2014-05-24 11:20:01', NULL),
(5, 108, 'Karak', 'الكرك', 'Yes', '2014-05-24 11:20:35', NULL);


INSERT INTO `event_type` (`id`, `organization_id`, `title`, `description`, `owner_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'مؤتمر', 'تجمع تحت عنوان أو موضوع محدد يُدعى إليه المتخصصون في مجال ما ويُقدّمون أبحاثاً وأوراقَ عمل تعالج قضية ما من قضايا المؤتمر', 1, '2014-05-24 10:53:57', NULL),
(2, 1, 'حلقة نقاشية', 'تتشابه الحلقة النقاشية مع  الدورة التدريبية الإعتادية، وتتميز بكثافة النقاش بين المشاركين في الدورة حول أمور محددة مسبقا، و تؤدي إلى نتائج يتفق عليها المشاركين لاحقا. و تعتبر الحلقات النقاشية من الأساليب التدريبية الفعالة و المؤثرة إيجابيا في تقبل المشاركين لما يتم طرحه من أفكار', 1, '2014-05-24 10:53:57', NULL),
(3, 1, 'ندوة', 'حلقة نقاش بين عدد من المتخصصين في موضوع محدد', 1, '2014-05-24 11:17:16', NULL),
(4, 1, 'معرض', 'بهدف عرض مواد عينية', 1, '2014-05-24 11:18:12', NULL);


INSERT INTO `mail_type` (`id`, `organization_id`, `title`, `description`, `owner_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'مراسلات داخلية', 'هذا البريد خاص بالمراسلات الداخلية للمؤسسة', 1, '2014-05-24 10:34:59', NULL),
(2, 1, 'مراسلات المحسنين', 'هذا البريد خاص بالمراسلات مع المحسنين بشكل مباشر', 1, '2014-05-24 10:34:59', NULL),
(3, 1, 'مراسلات الوكلاء', 'هذا البريد خاص بالمراسلات مع الوكلاء بشكل مباشر', 1, '2014-05-24 10:36:18', NULL);


INSERT INTO `organization` (`id`, `organization_type_id`, `name`, `description`, `created_at`, `updated_at`, `notes`, `options`) VALUES
(1, 1, 'شق تمرة', 'هذا الحساب خاص بالبحث والتطوير المتعلق بالنظام', '2014-05-24 09:31:33', NULL, '', '');


INSERT INTO `organization_access_level` (`id`, `organization_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'حساب رئيسي', 'يملك كافة الصلاحيات بدون أي استثناءات', '2014-05-24 09:28:19', NULL);


INSERT INTO `organization_access_level_permission` (`id`, `organization_access_level_id`, `controller_name`, `action_name`, `permission`, `created_at`, `updated_at`) VALUES
(1, 1, '*', '*', '*', '2014-05-24 09:29:50', NULL);


INSERT INTO `organization_branch` (`id`, `organization_id`, `name`, `description`, `website`, `phone`, `fax`, `mobile`, `country_id`, `city_id`, `adress`, `manager_id`, `work_days`, `work_hours`, `break_hours`, `geo_location`, `is_main_branch`, `owner_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'البحث والتطوير', 'هذا الحساب خاص بالبحث والتطوير المتعلق بالنظام', 'http://alsadaqat.com/', '+962797511179', '', '+962797511179', 108, 0, 'عمان', 1, '', '', '', '', 'Yes', 1, '2014-05-24 09:35:14', NULL);


INSERT INTO `organization_branch_country` (`id`, `organization_branch_id`, `country_id`, `owner_id`, `created_at`, `updated_at`) VALUES
(1, 1, 108, 1, '2014-05-24 09:36:00', NULL);


INSERT INTO `organization_branch_country_committee` (`id`, `organization_branch_country_id`, `name`, `description`, `agenda`, `annual_plan`, `owner_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'لجنة التطوير', 'خاصة بتطوير النظام', '', '', 1, '2014-05-24 09:38:06', NULL);


INSERT INTO `organization_branch_country_committee_user` (`id`, `organization_branch_country_committee_id`, `organization_user_id`, `organization_position_id`, `owner_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, '2014-05-24 09:38:40', NULL);


INSERT INTO `organization_position` (`id`, `organization_id`, `title`, `description`, `qualifications`, `responsibilities`, `owner_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'المدير العام', '', '', '', 1, '2014-05-24 09:41:46', NULL);


INSERT INTO `organization_type` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'شق تمرة', 'هذا النوع خاص بالمؤسسات التي تستعمل النظام لهدف البحث والتطوير', '2014-05-24 09:24:32', NULL),
(2, 'صندوق الزكاة', 'جميع لجان الزكاة التي تتبع لصندوق الزكاة يجب أن يتم اختيار هذا النوع عند إضافتها إلى النظام.', '2014-05-24 09:24:32', NULL),
(3, 'وزارة التنمية الإجتماعية', 'جميع الجمعيات الخيرية التي تتبع وزارة التنمية الإجتماعية يجب أن يتم اختيار هذا النوع عند إضافتها إلى النظام.', '2014-05-24 09:24:32', NULL),
(4, 'لجان المساجد', 'جميع لجان المساجد التي تعنى بأهل الحي يجب أن يتم اختيار هذا النوع عند إضافتها إلى النظام.', '2014-05-24 09:24:32', NULL),
(5, 'الهيئات العالمية', 'هذا النوع خاص بالهيئات العالمية', '2014-05-24 10:37:22', NULL);


INSERT INTO `organization_user` (`id`, `username`, `password`, `title`, `fullname`, `ssn`, `gender`, `email`, `date_of_birth`, `home_phone`, `work_phone`, `local_mobile`, `international_mobile`, `nationality_id`, `organization_id`, `organization_branch_id`, `personal_photo_path`, `passport_photo_path`, `blocked`, `last_login_date`, `last_login_ip`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'Mr.', 'أنس كامل الفار', '9801017992', 'Male', 'anas@al-far.com', '1980-03-25', '+96265065435', '+962797511179', '+962797511179', '+962797511179', 108, 1, 1, '', '', 'No', '0000-00-00 00:00:00', '127.0.0.1', '2014-05-24 09:44:59', NULL);


INSERT INTO `organization_user_access_level` (`id`, `user_id`, `organization_access_level_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2014-05-24 09:42:33', NULL);


	    	");
	}

	public function down()
	{
		echo "m140524_061413_demo_data does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}