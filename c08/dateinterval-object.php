<?php
$today = new DateTime();
$event = new DateTime('2026-12-31 20:30');
$countdown = $today->diff($event);

$start = new DateTime('2026-12-01 09:00');
$end = new DateTime('2026-12-31 20:30');
?>
<?php include 'includes/header.php'; ?>

<p><b>Sale starts:</b><br>
<?= $start->format('l, jS M Y H:i') ?> </p>
<p><b>Sale end:</b>
<?= $end->format('l, jS M y') ?> <b>at</b>
<?= $end->format('H:i'); ?></p>

<?php include 'includes/footer.php'; ?>