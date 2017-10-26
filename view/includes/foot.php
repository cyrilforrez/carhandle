<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="js/vendor/modernizr-2.8.3.min.js"></script>
<script src="js/materialize.min.js"></script>

<script type="text/javascript">
  $( document ).ready(function(){
     $(".button-collapse").sideNav();
  })
  $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
    $('#modal1').modal('open');
    $('#modal1').modal('close');

  });
</script>
</body>

</html>
