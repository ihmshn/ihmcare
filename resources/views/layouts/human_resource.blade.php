<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>IHM CARE</title>
  <!-- Iconic Fonts -->

    <!-- Include local Bootstrap CSS -->
    <link href="{{ asset('assets/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/buttons.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/iconic-fonts/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/iconic-fonts/flat-icons/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/iconic-fonts/cryptocoins/cryptocoins.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/sweetalert.min.js') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/admin.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('assets/css/morris.css') }}" rel="stylesheet"> -->
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

    <script src="{{asset('assets/js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset('assets/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{asset('assets/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{asset('assets/js/buttons.html5.min.js') }}"></script>
    <script src="{{asset('assets/js/buttons.print.min.js') }}"></script>
    <script src="{{asset('assets/js/pdfmake.min.js') }}"></script>
    <script src="{{asset('assets/js/vfs_fonts.js') }}"></script>
    <script src="{{asset('sweetalert.min.js') }}"></script>
  
  
</head>
<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
<!-- <body class="ms-body ms-primary-theme"> -->

    <div id="app">
    <!-- <div id="preloader-wrap">
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
      </div> -->

      <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
  <!-- Sidebar Navigation Left -->
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
        <a class="pl-0 ml-0 text-center" href="dashboard">
        <img src="{{ asset('assets/img/ihmcareicon.png') }}" alt="logo">
    </a>
      <!-- <a href="#" class="text-center ms-logo-img-link"> <img src="assets/img/dashboard/doctor-3.jpg" alt="logo"></a>
      <h5 class="text-center text-white mt-2">Dr.Samuel</h5>
      <h6 class="text-center text-white mb-3">Admin</h6> -->
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->

     
      <li class="menu-item">
        <a href="dashboard" style="background-color: #033DBB !important;">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas  fa-heart"></i>Staff Menu</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="addstaff">
          <span><i class="fas fa-arrow-circle-right"></i>Add New Staff </span>
        </a>
      </li>

      <li class="menu-item">
        <a href="Staffphotocapture">
          <span><i class="fas fa-arrow-circle-right"></i>Staff Photo Capture</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="Staffqualification">
          <span><i class="fas fa-arrow-circle-right"></i>Staff Qualifications</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="Staffdependant">
          <span><i class="fas fa-arrow-circle-right"></i>Staff Dependant</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="staffpromotion">
          <span><i class="fas fa-arrow-circle-right"></i>Staff Promotion</span>
        </a>
      </li>

       <li class="menu-item">
        <a href="Uploadstaffdocument">
          <span><i class="fas  fa-arrow-circle-right"></i>Upload Staff Document </span>
        </a>
      </li>


      <li class="menu-item">
        <a href="Addstaffreferees">
          <span><i class="fas  fa-arrow-circle-right"></i>Add Staff Referees</span>
        </a>
      </li>




      <li class="menu-item">
        <a href="staffnorminalroll">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas fa-arrow-circle-right"></i>Staff Norminal Roll</span>
        </a>
      </li>

       <li class="menu-item">
        <a href="Recruitment">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas  fa-arrow-circle-right"></i>Recruitment</span>
        </a>
      </li>

 <li class="menu-item">
        <a href="Sessionplaning">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas  fa-arrow-circle-right"></i>Session planing</span>
        </a>
      </li>

       <li class="menu-item">
        <a href="Payroll">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas  fa-arrow-circle-right"></i>Payroll</span>
        </a>
      </li>


       <li class="menu-item">
        <a href="Staffleave">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas  fa-arrow-circle-right"></i>Staff Leave Entitlement</span>
        </a>
      </li>


       <li class="menu-item">
        <a href="Addleave_entitle">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas  fa-arrow-circle-right"></i> Add Leave by Entitlement</span>
        </a>
      </li>



    <!--    <li class="menu-item">
        <a href="Setadvert">
         
          <span><i class="fas  fa-arrow-circle-right"></i>Set Advert</span>
        </a>
      </li>
 -->
       <li class="menu-item">
        <a href="vpr">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas  fa-arrow-circle-right"></i>Personal Request(PER)</span>
        </a>
      </li>

       <li class="menu-item">
        <a href="Employeeviewing">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas  fa-arrow-circle-right"></i>Employee Viewing</span>
        </a>
      </li>

        <li class="menu-item">
        <a href="staffconfirmation">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas  fa-arrow-circle-right"></i>Staff Confirmation</span>
        </a>
      </li>


       <li class="menu-item">
        <a href="Employmentconfirm">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas  fa-arrow-circle-right"></i>Employment confirmation</span>
        </a>
      </li>

       <li class="menu-item">
        <a href="Unconfirmedstaff">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas  fa-arrow-circle-right"></i>Unconfirmed Staffs</span>
        </a>
      </li>

       <li class="menu-item">
        <a href="Viewstaffdepartment">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas fa- fa-arrow-circle-right"></i>View Staff by Department</span>
        </a>
      </li>

       <li class="menu-item">
        <a href="Learningneedsaccessment">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas  fa-arrow-circle-right"></i>Learning Needs Accessment</span>
        </a>
      </li>

    
         <li class="menu-item">
        <a href="Viewstaffbydateofbirth">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas  fa-arrow-circle-right"></i>View Staff By Date Of Birth</span>
        </a>
      </li>
      </li>



     <!--- <li class="menu-item">
        <a href="cost_adjustment">
          <span><i class="fas  fa-arrow-circle-right"></i>Check Patient Bill</span>
        </a>
      </li>


      <li class="menu-item">
        <a href="pages/widgets.html">
          <span><i class="fas  fa-arrow-circle-right"></i>Discharged Consult</span>
        </a>
      </li>
--->

  <li class="menu-item">
        <a href="dashboard" style="background-color: #033DBB !important;">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas  fa-heart"></i>Hr Admin Menu</span>
        </a>
      </li>

          <li class="menu-item">
        <a href="addtitle">
          <span><i class="fas  fa-arrow-circle-right"></i>Add Staff title</span>
        </a>
      </li>

         <li class="menu-item">
        <a href="AddStaffCategory">
          <span><i class="fas  fa-arrow-circle-right"></i>Add Staff Category</span>
        </a>
      </li>

   <li class="menu-item">
        <a href="Viewstaffbydateofemploy">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas  fa-arrow-circle-right"></i>View Staff By Date Of Employment</span>
        </a>

         <li class="menu-item">
        <a href="StaffDesignation">
          <span><i class="fas  fa-arrow-circle-right"></i>Staff Designation</span>
        </a>
      </li>

   <li class="menu-item">
        <a href="StaffGradeLevel">
          <span><i class="fas  fa-arrow-circle-right"></i>Staff Grade Level</span>
        </a>
      </li>


   <li class="menu-item">
        <a href="Staff_finacial">
          <span><i class="fas  fa-arrow-circle-right"></i>Staff Financial Info</span>
        </a>
      </li>

      <li class="menu-item">
        <a href="Staffsuspension">
          <span><i class="fas  fa-arrow-circle-right"></i>Staff Suspension</span>
        </a>
      </li>


    
   <li class="menu-item">
        <a href="AddGroup">
          <span><i class="fas  fa-arrow-circle-right"></i>Add Group</span>
        </a>
      </li>
    <li class="menu-item">
        <a href="Addleavetype">
          <span><i class="fas  fa-arrow-circle-right"></i>Add Leave Type</span>
        </a>
      </li>
         <li class="menu-item">
        <a href="Addholiday">
          <span><i class="fas  fa-arrow-circle-right"></i>Add Public Holiday</span>
        </a>
      </li>
           <li class="menu-item">
        <a href="publicholiday">
          <span><i class="fas  fa-arrow-circle-right"></i>View Public holiday</span>
        </a>
      </li>
      
        <li class="menu-item">
        <a href="Dismissedstaff">
          <span><i class="fas  fa-arrow-circle-right"></i>Dismissed Staff</span>
        </a>
      </li>

         <li class="menu-item">
        <a href="Add_doctor">
          <span><i class="fas  fa-arrow-circle-right"></i>Add Doctor</span>
        </a>
      </li>

        <li class="menu-item">
        <a href="dashboard" style="background-color: #033DBB !important;">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas  fa-heart"></i>Request Menu</span>
        </a>
</li>
         <li class="menu-item">
        <a href="Item_requisition">
          <span><i class="fas  fa-arrow-circle-right"></i>Item Requisition</span>
        </a>
      </li>

       <li class="menu-item">
        <a href="Expense_request">
          <span><i class="fas  fa-arrow-circle-right"></i>Expense Request</span>
        </a>
      </li>

       <li class="menu-item">
        <a href="Expense_review">
          <span><i class="fas  fa-arrow-circle-right"></i>Expense Review</span>
        </a>
      </li>

       

       <li class="menu-item">
        <a href="pages/widgets.html">
          <span><i class="fas  fa-arrow-circle-right"></i>Confirmation Aporasal</span>
        </a>
      </li>

            <li class="menu-item">
        <a href="dashboard" style="background-color: #033DBB !important;">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</

            span> -->
          <span><i class="fas  fa-heart"></i>Administration Menu</span>
        </a>
</li>

     
<!--            <li class="menu-item">
        <a href="page\widgets.html">
          <span><i class="fas  fa-arrow-circle-right"></i>Mail Settings</span>
        </a>
</li> -->
           <li class="menu-item">
        <a href="payrollsetup">
          <span><i class="fas  fa-arrow-circle-right"></i>Payroll Setup</span>
        </a>
</li>

           <li class="menu-item">
        <a href="payrollprep">
          <span><i class="fas  fa-arrow-circle-right"></i>Payroll Prep</span>
        </a>
</li>

           <li class="menu-item">
        <a href="payroll_review">
          <span><i class="fas  fa-arrow-circle-right"></i>Payroll review</span>
        </a>
</li>

           <li class="menu-item">
        <a href="">
          <span><i class="fas  fa-arrow-circle-right"></i>PaySlip Generate</span>
        </a>
</li>
                   <li class="menu-item">
        <a href="editstaff">
          <span><i class="fas  fa-arrow-circle-right"></i>Edit Staff Record</span>
        </a>
</li>

          <!-- <li class="menu-item">
        <a href="manageconfirmstaff">
          <span><i class="fas  fa-arrow-circle-right"></i>Manage Confirm Staff</span>
        </a>
</li>-->

           <li class="menu-item">
        <a href="staffbirthday">
          <span><i class="fas  fa-arrow-circle-right"></i>Staff Birthday list</span>
        </a>
</li>


<!--            <li class="menu-item">
        <a href="transfer">
          <span><i class="fas  fa-arrow-circle-right"></i>Staff Transfer</span>
        </a>
</li>
 -->
  
  <!-- <li class="menu-item">
        <a href="stafflist">
          <span><i class="fas  fa-arrow-circle-right"></i>Staff Listing</span>
        </a>
</li>-->

   <li class="menu-item">
        <a href="Employeeviewing">
          <span><i class="fas  fa-arrow-circle-right"></i>List Employee</span>
        </a>
</li>

   <li class="menu-item">
        <a href="Dismissedstaff">
          <span><i class="fas  fa-arrow-circle-right"></i>List of Dismissed Staff</span>
        </a>
</li>
   <li class="menu-item">
        <a href="staffleaveallowance">
          <span><i class="fas  fa-arrow-circle-right"></i>Staff Leave Allowance</span>
        </a>
</li>


    <!--        <li class="menu-item">
        <a href="managequery">
          <span><i class="fas  fa-arrow-circle-right"></i>Manage Query</span>
        </a>
</li> -->

           <li class="menu-item">
        <a href="managesuspension">
          <span><i class="fas  fa-arrow-circle-right"></i>Manage Suspension</span>
        </a>
</li>

           <li class="menu-item">
        <a href="managepromotion">
          <span><i class="fas  fa-arrow-circle-right"></i>Manage Promotion</span>
        </a>
</li>

           <li class="menu-item">
        <a href="managebank">
          <span><i class="fas  fa-arrow-circle-right"></i>Manage Bank</span>
        </a>
</li>


 <!--            <li class="menu-item">
        <a href="dashboard" style="background-color: #033DBB !important;">
         
          <span><i class="fas  fa-heart"></i>NOTIFICATION</span>
        </a>
</li>


     <li class="menu-item">
        <a href="pages/widgets.html">
          <span><i class="fas  fa-arrow-circle-right"></i>Send Upgrade Notice</span>
        </a>
</li> -->


            <li class="menu-item">
        <a href="dashboard" style="background-color: #033DBB !important;">
          <!-- <span><i class="material-icons fs-16">widgets</i>Widgets</span> -->
          <span><i class="fas  fa-heart"></i>Report Menu</span>
        </a>
</li>


       <li class="menu-item">
        <a href="dashboard">
          <span><i class="fas  fa-arrow-circle-right"></i>Leave Dashboard</span>
        </a>
      </li>


    </ul>
  </aside>


  <main class="body-content">
    <!-- Navigation Bar -->
    <nav class="navbar ms-navbar">
      <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
      </div>
      <div class="logo-sn logo-sm ms-d-block-sm">
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index.php"><img src="../ihmcareicon.png" alt="logo"> </a>
        
      </div>

    <!--   <div class=" ms-d-block-sm">
        <h5>good</h5>
      </div> -->

      <ul class="mt-4 text-white" style="margin-left:-100px !important;"><li class="font-weight-bold"><h5 class=" text-white"> Human Resource (IHM SPECIALIST HOSPITAL)</h5></li></ul>
      <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">

        <li class="ms-nav-item ms-nav-user dropdown">
          <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
            <!-- <img class="ms-user-img ms-img-round float-right" src="assets/img/dashboard/doctor-3.jpg" alt="people"> </a> -->
            <button class="btn btn-success btn-sm" >Logged User - <?php //echo $_SESSION['name']; ?></button>
          <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome, <?php //echo $_SESSION['username']; ?></span></h6>
            </li>
          
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="pages/prebuilt-pages/lock-screen.html"> <span><i class="flaticon-security mr-2"></i> Lock</span> </a>
            </li>
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="logout"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span> </a>
            </li>
          </ul>
        </li>
      </ul>
      <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
      </div>
    </nav>

    <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
            @yield('content')
    </div>

  </main>

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

    
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/d3.v3.min.js') }}"></script>
    <script src="{{ asset('assets/js/topojson.v1.min.js') }}"></script>
    <script src="{{ asset('assets/js/datamaps.all.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.webticker.min.js') }}"></script>
    <script src="{{ asset('assets/js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/index-chart.js') }}"></script>
    <script src="{{ asset('assets/js/sweet-alerts.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-wizard.js') }}"></script>
    <script src="{{ asset('assets/js/calendar.js') }}"></script>
    <script src="{{ asset('assets/js/framework.js') }}"></script>
    <script src="{{ asset('assets/js/settings.js') }}"></script>
    
</body>
</html>
