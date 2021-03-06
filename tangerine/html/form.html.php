<?php
/**
 * @package     Mautic Forms
 * @copyright   2016 Mautic Contributors. All rights reserved.
 * @author      Agência Orangeweb
 * @link        http://www.orangeweb.com.br
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

$view->extend(":$template:base.html.php");
?>

<?php if (!empty($message)): ?>
    <div class="well text-center">
        <h2><?php echo $message; ?></h2>
    </div>
<?php endif; ?>

<div class="form-container">
    <?php if (!empty($header)): ?>
        <h4><?php echo ($header); ?></h4>
    <?php endif; ?>
    <?php echo $content; ?>
</div>
