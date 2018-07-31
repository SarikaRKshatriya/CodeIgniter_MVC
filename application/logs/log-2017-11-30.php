DEBUG - 2017-11-30 04:59:20 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 04:59:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 04:59:21 --> Form Params1
DEBUG - 2017-11-30 04:59:21 --> Inside setRegister1
ERROR - 2017-11-30 04:59:21 --> Query error: Unknown column 'class_id' in 'field list' - Invalid query: INSERT INTO `client` (`name`, `email`, `password`, `phone`, `address`, `class_id`, `time_id`, `days_id`) VALUES ('MARTA GALVAN', 'mgalvan@uta.edu', 'r456u7hgfddsde', '8172721542', 'UTA, OFFICE OF INTERNATIONAL EDUCATION,\r\nUTA Box 19028, 1022 UTA Blvd', '1', '1', '1')
DEBUG - 2017-11-30 05:02:37 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 05:02:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 05:02:37 --> Form Params1
ERROR - 2017-11-30 05:02:37 --> Severity: Notice --> Undefined index: class_id C:\xampp\htdocs\sarkar_pathoflight\application\models\yoga_model.php 64
ERROR - 2017-11-30 05:02:37 --> Severity: Notice --> Undefined index: time_id C:\xampp\htdocs\sarkar_pathoflight\application\models\yoga_model.php 64
ERROR - 2017-11-30 05:02:37 --> Severity: Notice --> Undefined index: days_id C:\xampp\htdocs\sarkar_pathoflight\application\models\yoga_model.php 64
ERROR - 2017-11-30 05:02:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'and timeId= and daysId=' at line 1 - Invalid query: select * from schedule where classId= and timeId= and daysId=
DEBUG - 2017-11-30 05:03:04 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 05:03:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 05:03:05 --> Form Params1
DEBUG - 2017-11-30 05:03:05 --> Inside setRegister1
ERROR - 2017-11-30 05:03:05 --> Severity: Error --> Call to a member function num_rows() on boolean C:\xampp\htdocs\sarkar_pathoflight\application\models\yoga_model.php 77
DEBUG - 2017-11-30 05:05:25 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 05:05:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 05:05:25 --> Form Params1
DEBUG - 2017-11-30 05:05:25 --> Inside setRegister1
ERROR - 2017-11-30 05:05:25 --> Severity: Notice --> Undefined variable: classData C:\xampp\htdocs\sarkar_pathoflight\application\models\yoga_model.php 82
ERROR - 2017-11-30 05:05:25 --> Severity: Error --> Call to a member function result() on null C:\xampp\htdocs\sarkar_pathoflight\application\models\yoga_model.php 82
DEBUG - 2017-11-30 05:06:00 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 05:06:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 05:06:00 --> Form Params1
DEBUG - 2017-11-30 05:06:00 --> Inside setRegister1
ERROR - 2017-11-30 05:06:00 --> Query error: Table 'yoga.$client_schedule' doesn't exist - Invalid query: INSERT INTO `$client_schedule` (`name`, `email`, `password`, `phone`, `address`, `clientid`) VALUES ('MARTA GALVAN', 'mgalvan@uta.edu', 'r456u7hgfddsde', '8172721542', 'UTA, OFFICE OF INTERNATIONAL EDUCATION,\r\nUTA Box 19028, 1022 UTA Blvd', '23')
DEBUG - 2017-11-30 05:07:34 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 05:07:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 05:07:34 --> Form Params1
DEBUG - 2017-11-30 05:07:34 --> Inside setRegister1
ERROR - 2017-11-30 05:07:34 --> Query error: Unknown column 'class_id' in 'field list' - Invalid query: INSERT INTO `client_schedule` (`class_id`, `time_id`, `days_id`, `clientid`) VALUES ('1', '1', '1', '24')
DEBUG - 2017-11-30 05:09:19 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 05:09:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 05:09:19 --> Form Params1
DEBUG - 2017-11-30 05:09:19 --> Inside setRegister1
ERROR - 2017-11-30 05:09:19 --> Query error: Unknown column 'class_id' in 'field list' - Invalid query: INSERT INTO `client_schedule` (`class_id`, `time_id`, `days_id`, `classid`, `timeid`, `daysid`, `clientid`) VALUES ('1', '1', '1', '1', '1', '1', '25')
DEBUG - 2017-11-30 05:16:30 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 05:16:30 --> Global POST, GET and COOKIE data sanitized
ERROR - 2017-11-30 05:16:30 --> Severity: Parsing Error --> syntax error, unexpected ',' C:\xampp\htdocs\sarkar_pathoflight\application\models\yoga_model.php 92
DEBUG - 2017-11-30 05:16:45 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 05:16:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 05:16:45 --> Form Params1
DEBUG - 2017-11-30 05:16:45 --> Inside setRegister1
ERROR - 2017-11-30 05:16:45 --> Severity: Notice --> Undefined variable: setClasses C:\xampp\htdocs\sarkar_pathoflight\application\views\register.php 227
ERROR - 2017-11-30 05:16:45 --> Severity: Error --> Call to a member function num_rows() on null C:\xampp\htdocs\sarkar_pathoflight\application\views\register.php 227
DEBUG - 2017-11-30 05:19:46 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 05:19:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 05:19:46 --> Form Params1
DEBUG - 2017-11-30 05:19:46 --> Inside setRegister1
ERROR - 2017-11-30 05:19:47 --> Severity: Notice --> Undefined variable: setClasses C:\xampp\htdocs\sarkar_pathoflight\application\views\register.php 227
ERROR - 2017-11-30 05:19:47 --> Severity: Error --> Call to a member function num_rows() on null C:\xampp\htdocs\sarkar_pathoflight\application\views\register.php 227
DEBUG - 2017-11-30 05:21:23 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 05:21:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 05:21:23 --> Form Params1
DEBUG - 2017-11-30 05:21:23 --> Inside setRegister1
ERROR - 2017-11-30 05:21:23 --> Severity: Notice --> Undefined variable: setClasses C:\xampp\htdocs\sarkar_pathoflight\application\views\register.php 227
ERROR - 2017-11-30 05:21:23 --> Severity: Error --> Call to a member function num_rows() on null C:\xampp\htdocs\sarkar_pathoflight\application\views\register.php 227
DEBUG - 2017-11-30 05:22:49 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 05:22:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 05:22:49 --> Form Params1
DEBUG - 2017-11-30 05:22:49 --> Inside setRegister1
DEBUG - 2017-11-30 05:22:49 --> Total execution time: 0.2588
DEBUG - 2017-11-30 05:23:25 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 05:23:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 05:23:25 --> Total execution time: 0.0503
DEBUG - 2017-11-30 05:26:43 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 05:26:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 05:26:43 --> Total execution time: 0.0536
DEBUG - 2017-11-30 05:35:44 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 05:35:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 05:35:44 --> Form Params1
DEBUG - 2017-11-30 05:35:44 --> Schdeule Not Existed!! 1
DEBUG - 2017-11-30 05:35:44 --> Schdeule Not Existed!! 1
ERROR - 2017-11-30 05:35:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\xampp\htdocs\sarkar_pathoflight\application\views\register.php 139
DEBUG - 2017-11-30 05:35:44 --> Total execution time: 0.0810
DEBUG - 2017-11-30 06:49:30 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 06:49:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 06:49:30 --> Form Params1
DEBUG - 2017-11-30 06:49:30 --> Schdeule Not Existed!! 1
DEBUG - 2017-11-30 06:49:30 --> Schdeule Not Existed!! 1
ERROR - 2017-11-30 06:49:30 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\xampp\htdocs\sarkar_pathoflight\application\views\register.php 139
DEBUG - 2017-11-30 06:49:30 --> Total execution time: 0.0542
DEBUG - 2017-11-30 06:54:48 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 06:54:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 06:54:48 --> Form Params1
DEBUG - 2017-11-30 06:54:48 --> Schdeule Not Existed!! 1
DEBUG - 2017-11-30 06:54:48 --> Schdeule Not Existed!! 1
DEBUG - 2017-11-30 06:54:48 -->  Register Controller 1
ERROR - 2017-11-30 06:54:48 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\xampp\htdocs\sarkar_pathoflight\application\views\register.php 139
DEBUG - 2017-11-30 06:54:48 --> Total execution time: 0.0507
DEBUG - 2017-11-30 06:56:38 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 06:56:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 06:56:38 --> Form Params1
DEBUG - 2017-11-30 06:56:38 --> Schdeule Not Existed!! 1
DEBUG - 2017-11-30 06:56:38 --> Schdeule Not Existed!! 1
DEBUG - 2017-11-30 06:56:38 -->  Register Controller 1
DEBUG - 2017-11-30 06:56:38 --> Total execution time: 0.0491
DEBUG - 2017-11-30 06:58:40 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 06:58:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 06:58:40 --> Form Params1
DEBUG - 2017-11-30 06:58:40 --> Schdeule Not Existed!! 1
DEBUG - 2017-11-30 06:58:40 --> Schdeule Not Existed!! 1
DEBUG - 2017-11-30 06:58:40 -->  Register Controller 1
DEBUG - 2017-11-30 06:58:40 --> Total execution time: 0.0447
DEBUG - 2017-11-30 06:59:51 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 06:59:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 06:59:51 --> Form Params1
DEBUG - 2017-11-30 06:59:51 --> Schdeule Not Existed!! 1
DEBUG - 2017-11-30 06:59:51 --> Schdeule Not Existed!! 1
DEBUG - 2017-11-30 06:59:51 -->  Register Controller 1
DEBUG - 2017-11-30 06:59:51 --> Total execution time: 0.0537
DEBUG - 2017-11-30 07:03:13 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 07:03:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 07:03:13 --> Total execution time: 0.0634
DEBUG - 2017-11-30 07:03:37 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 07:03:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 07:03:38 --> Total execution time: 0.0478
DEBUG - 2017-11-30 07:04:02 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 07:04:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 07:04:03 --> Form Params1
DEBUG - 2017-11-30 07:04:03 --> Schdeule Not Existed!! 1
DEBUG - 2017-11-30 07:04:03 --> Schdeule Not Existed!! 1
DEBUG - 2017-11-30 07:04:03 -->  Register Controller 1
DEBUG - 2017-11-30 07:04:03 --> Total execution time: 0.0526
DEBUG - 2017-11-30 07:06:37 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 07:06:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 07:06:37 --> Form Params1
DEBUG - 2017-11-30 07:06:37 --> Schdeule Not Existed!! 1
DEBUG - 2017-11-30 07:06:37 --> Schdeule Not Existed!! 1
DEBUG - 2017-11-30 07:06:37 -->  Register Controller 1
DEBUG - 2017-11-30 07:06:37 --> Total execution time: 0.0476
DEBUG - 2017-11-30 07:06:54 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 07:06:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 07:06:54 --> Total execution time: 0.0390
DEBUG - 2017-11-30 07:07:05 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 07:07:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 07:07:05 --> Form Params1
DEBUG - 2017-11-30 07:07:05 --> Schdeule Not Existed!! 1
DEBUG - 2017-11-30 07:07:05 --> Schdeule Not Existed!! 1
DEBUG - 2017-11-30 07:07:05 -->  Register Controller 1
DEBUG - 2017-11-30 07:07:05 --> Total execution time: 0.0670
DEBUG - 2017-11-30 07:10:57 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 07:10:57 --> Global POST, GET and COOKIE data sanitized
ERROR - 2017-11-30 07:10:57 --> Severity: Parsing Error --> syntax error, unexpected ';' C:\xampp\htdocs\sarkar_pathoflight\application\models\yoga_model.php 105
DEBUG - 2017-11-30 07:11:23 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 07:11:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 07:11:23 --> Form Params1
DEBUG - 2017-11-30 07:11:23 --> Schdeule Not Existed!! 4
ERROR - 2017-11-30 07:11:23 --> Severity: Notice --> Undefined variable: temp C:\xampp\htdocs\sarkar_pathoflight\application\models\yoga_model.php 114
ERROR - 2017-11-30 07:11:23 --> Severity: Error --> Cannot use object of type stdClass as array C:\xampp\htdocs\sarkar_pathoflight\application\models\yoga_model.php 115
DEBUG - 2017-11-30 07:12:16 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 07:12:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 07:12:16 --> Form Params1
DEBUG - 2017-11-30 07:12:16 --> Schdeule Not Existed!! 4
ERROR - 2017-11-30 07:12:16 --> Severity: Error --> Cannot use object of type stdClass as array C:\xampp\htdocs\sarkar_pathoflight\application\models\yoga_model.php 117
DEBUG - 2017-11-30 07:12:45 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 07:12:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 07:12:45 --> Form Params1
DEBUG - 2017-11-30 07:12:45 --> Schdeule Not Existed!! 4
DEBUG - 2017-11-30 07:12:45 -->  Register Controller 1
DEBUG - 2017-11-30 07:12:45 --> Total execution time: 0.0445
DEBUG - 2017-11-30 07:14:16 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 07:14:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 07:14:16 --> Form Params1
DEBUG - 2017-11-30 07:14:16 --> Schdeule Not Existed!! 4
DEBUG - 2017-11-30 07:14:16 -->  Register Controller 1
DEBUG - 2017-11-30 07:14:16 --> Total execution time: 0.0548
DEBUG - 2017-11-30 07:17:47 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 07:17:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 07:17:48 --> Total execution time: 0.0404
DEBUG - 2017-11-30 07:17:52 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 07:17:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 07:17:52 --> Total execution time: 0.0532
DEBUG - 2017-11-30 07:18:21 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 07:18:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 07:18:21 --> Total execution time: 0.0474
DEBUG - 2017-11-30 07:18:49 --> UTF-8 Support Enabled
DEBUG - 2017-11-30 07:18:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2017-11-30 07:18:49 --> Total execution time: 0.0438
