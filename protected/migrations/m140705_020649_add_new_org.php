<?php

class m140705_020649_add_new_org extends CDbMigration
{
	public function up()
	{
		
	    $this -> execute("
SET foreign_key_checks = 0;

INSERT INTO `organization` (`id`, `organization_type_id`, `name`, `description`, `created_at`, `updated_at`, `notes`, `options`) VALUES
(2, 1, 'الهيئة العالمية للإعجاز العلمي في القرآن والسنة ', 'الهيئة العالمية للإعجاز العلمي في القرآن والسنة', '2014-05-24 09:31:33', NULL, '', '');


INSERT INTO `organization_access_level` (`id`, `organization_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, 2, 'حساب رئيسي', 'يملك كافة الصلاحيات بدون أي استثناءات', '2014-05-24 09:28:19', NULL);


INSERT INTO `organization_access_level_permission` (`id`, `organization_access_level_id`, `controller_name`, `action_name`, `permission`, `created_at`, `updated_at`) VALUES
(2, 2, '*', '*', '*', '2014-05-24 09:29:50', NULL);


INSERT INTO `organization_branch` (`id`, `organization_id`, `name`, `description`, `website`, `phone`, `fax`, `mobile`, `country_id`, `city_id`, `adress`, `manager_id`, `work_days`, `work_hours`, `break_hours`, `geo_location`, `is_main_branch`, `owner_id`, `created_at`, `updated_at`) VALUES
(2, 2, 'البحث والتطوير', 'هذا الحساب خاص بالبحث والتطوير المتعلق بالنظام', 'http://alsadaqat.com/', '+962797511179', '', '+962797511179', 108, 0, 'عمان', 1, '', '', '', '', 'Yes', 1, '2014-05-24 09:35:14', NULL);


INSERT INTO `organization_branch_country` (`id`, `organization_branch_id`, `country_id`, `owner_id`, `created_at`, `updated_at`) VALUES
(2, 2, 108, 1, '2014-05-24 09:36:00', NULL);


INSERT INTO `organization_branch_country_committee` (`id`, `organization_branch_country_id`, `name`, `description`, `agenda`, `annual_plan`, `owner_id`, `created_at`, `updated_at`) VALUES
(2, 2, 'لجنة التطوير', 'خاصة بتطوير النظام', '', '', 1, '2014-05-24 09:38:06', NULL);


INSERT INTO `organization_branch_country_committee_user` (`id`, `organization_branch_country_committee_id`, `organization_user_id`, `organization_position_id`, `owner_id`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 2, 1, '2014-05-24 09:38:40', NULL);


INSERT INTO `organization_position` (`id`, `organization_id`, `title`, `description`, `qualifications`, `responsibilities`, `owner_id`, `created_at`, `updated_at`) VALUES
(2, 2, 'المدير العام', '', '', '', 1, '2014-05-24 09:41:46', NULL);

INSERT INTO `organization_user` (`id`, `username`, `password`, `title`, `fullname`, `ssn`, `gender`, `email`, `date_of_birth`, `home_phone`, `work_phone`, `local_mobile`, `international_mobile`, `nationality_id`, `organization_id`, `organization_branch_id`, `personal_photo_path`, `passport_photo_path`, `blocked`, `last_login_date`, `last_login_ip`, `created_at`, `updated_at`) VALUES
(2, 'saad', 'saad', 'Mr.', 'Saad Jamous', '123456789', 'Male', 'almukhles@gmail.com', '1985-01-01', '+96265555555', '+96265555555', '+96265555555', '+96265555555', 108, 2, 2, '', '', 'No', '0000-00-00 00:00:00', '127.0.0.1', '2014-05-24 09:44:59', NULL);


INSERT INTO `organization_user_access_level` (`id`, `user_id`, `organization_access_level_id`, `created_at`, `updated_at`) VALUES
(2, 2, 2, '2014-05-24 09:42:33', NULL);


	    	");
	}

	public function down()
	{
		echo "m140705_020649_add_new_org does not support migration down.\n";
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