<?php
$start = new DateTime();
$start-> setDate(2026, 06, 11);
$start-> setTime(17, 30);
$end   = clone $start;
$end  -> modify('+1 month 1 week 1 day 2 hours 15 min');
?>
<?php include 'includes/header.php'; ?> 

<p><b>Sale starts:</b>
<?= $start-> format('g:i a - D , M j Y'); ?></p>
<p><b>Sale ends:</b>
<?= $end-> format('g:i a - D , M j Y'); ?> <b>at</b>


<?php include 'includes/footer.php'; ?>