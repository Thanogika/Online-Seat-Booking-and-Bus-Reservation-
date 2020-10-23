<?php
// Include pagination library file
include_once 'Pagination.class.php';

// Include database configuration file
require_once 'dbConfig.php';

// Set some useful configuration
$baseURL = 'http://example.com/php_pagination/index.php';
$limit = 5;

// Paging limit & offset
$offset = !empty($_GET['page'])?(($_GET['page']-1)*$limit):0;

// Count of all records
$query   = $db->query("SELECT COUNT(*) as rowNum FROM posts");
$result  = $query->fetch_assoc();
$rowCount= $result['rowNum'];

// Initialize pagination class
$pagConfig = array(
    'baseURL' => $baseURL,
    'totalRows'=>$rowCount,
    'perPage'=>$limit
);
$pagination =  new Pagination($pagConfig);

// Fetch records based on the offset and limit
$query = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT $offset,$limit");

if($query->num_rows > 0){
?>
    <!-- Display posts list -->
    <div class="post-list">
    <?php while($row = $query->fetch_assoc()){ ?>
        <div class="list-item">
            <a href="javascript:void(0);"><?php echo $row["title"]; ?></a>
        </div>
    <?php } ?>
    </div>
    
    <!-- Display pagination links -->
    <?php echo $pagination->createLinks(); ?>
<?php } ?>