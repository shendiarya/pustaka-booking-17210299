<!DOCTYPE html>
<html>

<head>
 <?php $this->
  load->view('web_new/main/head'); ?>
</head>

<body>
 <div id="wrapper">
  <?php $this->load->view('web_new/main/menu'); ?>
  <section>
   <h1>
    <?php echo $judul ?>
   </h1>
   <h4>Sosial Media</h4>
   <ul type="disc">
    <li>Facebook : imam2789</li>
    <li>Instagram : imam2789</li>
   </ul>
   <h4>Call Center</h4>
   <ul type="disc">
    <li>Phone : 021-7427077</li>
    <li>WA : 0898989898</li>
   </ul>
  </section>
  <?php $this->load->view('web_new/main/footer'); ?>
 </div>
</body>

</html>