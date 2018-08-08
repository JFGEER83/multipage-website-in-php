<?php
$handle = new upload($_FILES['image_field']);
if ($handle->uploaded) {
  $handle->image_convert = 'jpg', 'jpeg', 'png', 'gif';
  $handle->process('/home/user/files/');
  if ($handle->processed) {
    echo 'image resized';
    $handle->clean();
  } else {
    echo 'error : ' . $handle->error;
  }
}
?>