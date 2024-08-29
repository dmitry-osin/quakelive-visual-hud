<?
// try {
//   $db = mysqli_connect("127.0.0.1", "root", "root") or die("Database error!");
//   $db->select_db('visualhud');
// } catch (Exception $e) {
//   # do nothing. We still should be able to download config.
//   printf($e);
// }

// function initialize_counter() {
//   $directory = "../../_temp/";
//   $count = count(glob("" . $directory . "*.zip"));
  
//   $query = "INSERT INTO downloads_count (`name`, `count`) VALUES ('downloads' , $count) ON DUPLICATE KEY UPDATE `count` =  $count";
//   $db->query($query) or die("Query error!");
//   if ($db->affected_rows > 0 ) { return true; }
//   return false;
// }

// function increment_downloads_counter() {
//   $query = "INSERT INTO downloads_count (`name`, `count`) VALUES ('downloads' , 1) ON DUPLICATE KEY UPDATE `count` = `count` + 1";
//   $db->query($query) or die("Query error!");
//   if ($db->affected_rows > 0 ) { return true; }
//   return false;
// }

// function get_downloads_counter() {
//   $query = "SELECT `count` FROM downloads_count WHERE `name` = 'downloads'";
//   $resource = $db->query($query) or die("Query error!");
//   $result = mysqli_query($resource, $db);
//   return $result['count'];
//   return false;
// }
?>
