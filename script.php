<script type="text/javascript">
const sideNav = document.querySelector(".sidenav");
      M.Sidenav.init(sideNav, {});
   
  </script>
  <script type="text/javascript">

    const collapsible = document.querySelectorAll('.collapsible');
     M.Collapsible.init(collapsible, {});

         </script>

         <script type="text/javascript">

     document.addEventListener('DOMContentLoaded', function() {
    const materialboxed= document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialboxed, {});
  });
</script>

<script>
//scroll fire
const options = [
  {
    selector: 'row-1', offset: 50, callback: function(el){
      Materialize.fadeImage($(el));
    }
  },
  {
    selector: 'row-1', offset: 50, callback: function(el){
      Materialize.fadeImage($(el));
    }
  },
  {
    selector: 'row-1', offset: 50, callback: function(el){
      Materialize.fadeImage($(el));
    }
  }
];
Materialize.scrollFire(options);
</script>


<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function() {

    const modal = document.querySelectorAll('.modal');
    M.Modal.init(modal, {
      inDuration: 250,
      opacity: 0.8,
      onOpenStart: null,
      outDuration:250,
      startingTop:'4%',
      endingTop:'10%',
      width:'100%',
    });
  });

</script>


<script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function() {
    const dropdown = document.querySelectorAll('.dropdown-trigger');
    M.Dropdown.init(dropdown, {
        alignment: 'left',
        hover:true,
        coverTrigger: false,
        constrainWidth: false,
    });
  });
</script>

<script type="text/javascript">
     document.addEventListener('DOMContentLoaded', function() {
    const select = document.querySelectorAll('select');
    M.FormSelect.init(select, {});
  });
</script>

<script type="text/javascript">
     document.addEventListener('DOMContentLoaded', function() {
    const collapsible = document.querySelectorAll('.collapsible');
     M.Collapsible.init(collapsible, {});
  });
</script>

<script type="text/javascript">
 document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      height: 700,
      indicators: false,

    });
  });
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax, {});
  });
  </script>
<script type="text/javascript" src="js/all.min.js"> </script>
