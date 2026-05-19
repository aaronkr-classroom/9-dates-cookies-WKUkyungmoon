<?php
$start      = strtotime('next year');
$end        = mktime(0, 0, 0, 2, 1, 2021);
$start_date = date('D, J M \'y', $start); // Sat, 1 Jan '21
$end_date   = date('l, d F, Y', $end); // Sunday, February 01, 2021
?>
<?php include 'includes/header.php'; ?>

  <p><b>Sale starts:</b> <?= $start_date ?></p>
  <p><b>Sale ends:</b> <?= $end_date ?></p>

<?php include 'includes/footer.php'; ?>