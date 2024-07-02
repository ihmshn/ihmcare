<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>IHM CARE</title>
  <!-- Iconic Fonts -->

    <!-- Include local Bootstrap CSS -->
    <link href="<?php echo e(asset('assets/css/dataTables.bootstrap5.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/buttons.dataTables.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendors/iconic-fonts/font-awesome/css/all.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendors/iconic-fonts/flat-icons/flaticon.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendors/iconic-fonts/cryptocoins/cryptocoins.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/jquery-ui.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/slick.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/morris.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/css/sweetalert.min.js')); ?>" rel="stylesheet">
    <!-- <link href="<?php echo e(asset('assets/css/morris.css')); ?>" rel="stylesheet"> -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
  
  
</head>

<body class="ms-body ms-primary-theme">

    <div id="app">
    <div id="preloader-wrap">
         <div class="spinner spinner-8">
            <div class="ms-circle1 ms-child"></div>
            <div class="ms-circle2 ms-child"></div>
            <div class="ms-circle3 ms-child"></div>
            <div class="ms-circle4 ms-child"></div>
            <div class="ms-circle5 ms-child"></div>
            <div class="ms-circle6 ms-child"></div>
            <div class="ms-circle7 ms-child"></div>
            <div class="ms-circle8 ms-child"></div>
            <div class="ms-circle9 ms-child"></div>
            <div class="ms-circle10 ms-child"></div>
            <div class="ms-circle11 ms-child"></div>
            <div class="ms-circle12 ms-child"></div>
         </div>
      </div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    
  <script>
  $( function() {
    $( ".datepicker" ).datepicker();
  } ); 
  </script>
<script>
    function exportToExcel(tableId) {
        const table = document.getElementById(tableId);
        const rows = table.getElementsByTagName('tr');
        const csv = [];

        for (let i = 0; i < rows.length; i++) {
            const row = [];
            const cols = rows[i].querySelectorAll('td, th');

            for (let j = 0; j < cols.length; j++) {
                row.push(cols[j].innerText);
            }

            csv.push(row.join(','));
        }

        const blob = new Blob([csv.join('\n')], { type: 'text/csv' });
        const url = window.URL.createObjectURL(blob);

        const a = document.createElement('a');
        a.href = url;
        a.download = 'table_data.csv';
        a.click();

        window.URL.revokeObjectURL(url);
    }
</script>


<script>

   function exportToPDF() {
      const doc = new jsPDF();
      doc.autoTable({ html: '#example' });
      doc.save('table_data.pdf');
  }
</script>


<script>
    function printTable() {
        const table = document.getElementById('example');
        const printWindow = window.open('', '', 'width=600,height=600');
        printWindow.document.open();
        printWindow.document.write('<html><head><title>Print Table</title></head><body>');
        printWindow.document.write('<table>' + table.innerHTML + '</table>');
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
        // printWindow.close();
    }
</script>


<script>
    function copyTable() {
        const table = document.getElementById('example');
        const range = document.createRange();
        range.selectNode(table);
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(range);
        document.execCommand('copy');
        window.getSelection().removeAllRanges();
        // alert('Table copied to clipboard!');
        Swal.fire({
        title: "Success!",
        text: "Table copied to clipboard!.",
        icon: "success",
        confirmButtonText: "OK"
         });
        }

</script>

<script>
  // JavaScript to toggle the 'active' class on menu items based on the current URL
  document.addEventListener("DOMContentLoaded", function () {
    var currentUrl = window.location.href;

    var menuItems = document.querySelectorAll(".accordion .menu-item");

    menuItems.forEach(function (menuItem) {
      var link = menuItem.querySelector("a");
      if (link.href === currentUrl) {
        menuItem.classList.add("active");
      }
    });
  });
</script>



<script>
  $(document).ready(function() {
    $('#example').DataTable({
      lengthMenu: [25, 50, 100, 200],  // Set page length options
      pageLength: 100,
      dom: 'Bfrtip',
      buttons: [
        'copy',
        'excel',
        'csv',
        'pdf',
        'print',
        'pageLength',
        'colvis',
        'colReorder',
      ]
    });
  });
</script>

    <script src="<?php echo e(('assets/js/jquery-3.7.0.min.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/dataTables.bootstrap5.min.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(('sweetalert.min.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/perfect-scrollbar.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/d3.v3.min.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/topojson.v1.min.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/datamaps.all.min.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/slick.min.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/moment.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/jquery.webticker.min.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/Chart.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/index-chart.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/sweet-alerts.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/jquery.steps.min.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/form-wizard.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/calendar.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/framework.js')); ?>"></script>
    <script src="<?php echo e(('assets/js/settings.js')); ?>"></script>
    
</body>
</html>
<?php /**PATH C:\Users\IHEANACHO PC\imhcare\resources\views/layouts/app.blade.php ENDPATH**/ ?>