<?php
require_once('../../../private/initialize.php');

$test = $_GET['test'] ?? '';

if($test == '404'){
    error_404();
}elseif($test == '500'){
    error_500();
}elseif ($test == 'redirect'){
    redirect_to(url_for('/staff/pages/index.php'));
}
?>

<?php $page_title = 'Edit Pages'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>
    <div id="content">
        <a class="back-link" href="<?php echo url_for('/staff/pages/index.php'); ?>">&laquo; Back to List</a>
        <div class="subject new">
            <h1>Edit Subject</h1>
            <form action="" method="post">
                <dl>
                    <dt>Menu Name</dt>
                    <dd><input type="text" name="menu_name" value="" /></dd>
                </dl>
                <dl>
                    <dt>Position</dt>
                    <dd>
                        <select name="position">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </dd>
                </dl>
                <dl>
                    <dt>Visible</dt>
                    <dd>
                        <input type="hidden" name="visible" value="0" />
                        <input type="checkbox" name="visible" value="1" />
                    </dd>
                </dl>
                <div id="operations">
                    <input type="submit" value="Edit Pages" />
                </div>
            </form>
        </div>
    </div>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>