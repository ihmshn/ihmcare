<style>
    label{

        color: white;
        
    }
</style>
@extends('layouts.admin')

@section('content')
@php
    use App\Models\admin\Admin;
@endphp


<div class="col-xl-12 col-md-12">
    <div class="ms-panel">
        <div class="ms-panel-header ms-panel-custome">
            <h6 class="">Patient Registration</h6>
        </div>
        <form class="needs-validation" method="post">
        <div class="ms-panel-body bg-info">

            <div class="form-row">

                <div class="col-md-12 mb-3 text-white">
                    <h4 class="text-white">Patient Information</h4>
                    <br>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationCustom002">Gender Suffix</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-id-badge"></i></span>
                        </div>
                        <select name="gender_suffix" class="form-control" value="<?= isset($_POST['gender_suffix']) ? $_POST['gender_suffix'] : ''; ?>" required>
                        <option value=""> Select Gender Suffix </option>
                        <option> Mr </option>
                        <option> Mrs </option>
                        <option> Master </option>
                        <option> Miss </option>
                        <option> Fr </option>
                        <option> Sr </option>
                        <option> Br </option>
                        <option> Rev </option>
                        </select>
                    </div>
                </div>


                <div class="col-md-4 mb-3">
                    <label for="validationCustom002">Title</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-id-card"></i></span>
                        </div>
                        <select name="title" class="form-control" value="<?= isset($_POST['title']) ? $_POST['title'] : ''; ?>" required>
                        <option value=""> Select Title </option>
                        <option> Mr </option>
                        <option> Mrs </option>
                        <option> Master </option>
                        <option> Miss </option>
                        <option> Doctor </option>
                        <option> Professor </option>
                        <option> Chief </option>
                        <option> Fr </option>
                        <option> Sr </option>
                        <option> Br </option>
                        <option> Rev </option>
                        <option> Baby </option>
                        </select>
                    </div>
                </div>


                <div class="col-md-4 mb-3">
                    <label for="validationCustom002">Enrollee</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-bookmark"></i></span>
                        </div>
                    <input type="text" class="form-control" name="enrolle_number" placeholder="Enrollee Number" value="<?= isset($_POST['enrolle_number']) ? $_POST['enrolle_number'] : ''; ?>">
                    </div>
                </div>


                <div class="col-md-4 mb-3">
                    <label for="validationCustom002">Surname</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-user"></i></span>
                        </div>
                    <input type="text" class="form-control" name="surname" placeholder="Surname" value="<?= isset($_POST['surname']) ? $_POST['surname'] : ''; ?>">
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationCustom002">First Name</label>
                    <div class="input-group">
                       <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-user"></i></span>
                        </div>
                    <input type="text" class="form-control" name="firstname" placeholder="First Name" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : ''; ?>">
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="validationCustom002">Othername</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-user"></i></span>
                        </div>
                    <input type="text" class="form-control" name="othername" placeholder="othername"  value="<?= isset($_POST['othername']) ? $_POST['othername'] : ''; ?>">
                    </div>
                </div>


                <div class="col-md-4 mb-3">
                    <label for="validationCustom002">Date of Birth</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar"></i></span>
                        </div>
                    <input type="date" class="form-control" name="date_of_birth" placeholder="date_of_birth" value="<?= isset($_POST['date_of_birth']) ? $_POST['date_of_birth'] : ''; ?>">
                    </div>
                </div>


                <div class="col-md-4 mb-3">
                    <label for="validationCustom002">Marital Status</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-user-circle"></i></span>
                        </div>
                        <select name="marital_status" class="form-control"  value="<?= isset($_POST['marital_status']) ? $_POST['marital_status'] : ''; ?>">
                        <option value=""> Select Marital Status </option>
                        <option> Single </option>
                        <option> Married </option>
                        <option> Divorced </option>
                        </select>
                    </div>
                </div>


                <div class="col-md-4 mb-3">
                    <label for="validationCustom002">Gender</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-male"></i></span>
                        </div>
                        <select name="gender" class="form-control"  value="<?= isset($_POST['gender']) ? $_POST['gender'] : ''; ?>">
                            <option value=""> Select Gender </option>
                            <option> Male </option>
                            <option> Female </option>
                        </select>
                    </div>
                </div>


                <div class="col-md-3 mb-3">
                    <label for="validationCustom002">Occupation</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-briefcase"></i></span>
                        </div>
                    <select name="occupation" class="form-control"  value="<?= isset($_POST['occupation']) ? $_POST['occupation'] : ''; ?>">
                    <option value=""> Select Occupation </option>
                    <option> Business Man </option>
                    <option> Business Woman </option>
                    <option> Teacher </option>
                    <option> IT Professional </option>
                    <option> Nurse </option>
                    <option> Driver </option>
                    <option> Doctor </option>
                    <option> Banker </option>
                    <option> Medical Technician </option>
                    <option> Business Owner </option>
                    <option> Freelancer </option>
                    <option> Entrepreneur </option>
                    <option> Student </option>
                    <option> Homemaker </option>
                    <option> Retired </option>
                    <option> Teacher </option>
                    <option> Professor </option>
                    <option> Healthcare Professional </option>
                    <option> Retail Worker </option>
                    <option> Homemaker </option>
                    <option> Construction Worker </option>
                    <option> Electrician </option>
                    <option> Plumber </option>
                    <option> Mechanic </option>
                    <option> Waiter/Waitress </option>
                    <option> Chef </option>
                    <option> Bartender </option>
                    <option> Hairdresser/Barber </option>
                    <option> Pilot </option>
                    <option> Train Operator </option>
                    <option> Government Employee </option>
                    <option> Military </option>
                    <option> Police Officer </option>
                    <option> Firefighter </option>
                    <option> Farmer </option>
                    <option> Agricultural Worker </option>
                    <option> Artist </option>
                    <option> Actor </option>
                    <option> Musician </option>
                    <option> Librarian </option>
                    </select>
                    </div>
                </div>



                <div class="col-md-3 mb-3">
                    <label for="validationCustom002">Religion</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-university"></i></span>
                        </div>
                    <select name="religion" class="form-control"  value="<?= isset($_POST['religion']) ? $_POST['religion'] : ''; ?>">
                    <option value=""> Select Religion </option>
                    <option> Christianity </option>
                    <option> Islam </option>
                    <option> Traditional </option>
                    </select>
                    </div>
                </div>



                <div class="col-md-3 mb-3">
                    <label for="validationCustom002">Email</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        </div>
                        <input type="text" class="form-control" name="email" placeholder="Email"  value="<?= isset($_POST['email']) ? $_POST['email'] : ''; ?>">
                    </div>
                </div>



                <div class="col-md-3 mb-3">
                    <label for="validationCustom002">Phone</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-phone"></i></span>
                        </div>
                    <input type="text" class="form-control" name="phone" placeholder="Phone Number" value="<?= isset($_POST['phone']) ? $_POST['phone'] : ''; ?>">
                    </div>
                </div>



                <div class="col-md-4 mb-3">
                    <label for="validationCustom002">Address</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-address-book"></i></span>
                        </div>
                    <input type="text" class="form-control" name="address" placeholder="Address" value="<?= isset($_POST['address']) ? $_POST['address'] : ''; ?>">
                    </div>
                </div>


                <div class="col-md-4 mb-3">
                    <label for="validationCustom002">State</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-globe"></i></span>
                        </div>
                    <select onchange="toggleLGA(this);" name="state" id="state" class="form-control"  value="<?= isset($_POST['state']) ? $_POST['state'] : ''; ?>">
                    <option value=""> Select State</option>
                    <option value="Abuja">Abuja</option>
                    <option value="Abia">Abia</option>
                    <option value="Adamawa">Adamawa</option>
                    <option value="Anambra">Anambra</option>
                    <option value="Akwa Ibom">Akwa Ibom</option>
                    <option value="Bauchi">Bauchi</option>
                    <option value="Bayelsa">Bayelsa</option>
                    <option value="Benue">Benue</option>
                    <option value="Borno">Borno</option>
                    <option value="Cross River">Cross River</option>
                    <option value="Delta">Delta</option>
                    <option value="Ebonyi">Ebonyi</option>
                    <option value="Edo">Edo</option>
                    <option value="Ekiti">Ekiti</option>
                    <option value="Enugu">Enugu</option>
                    <option value="Gombe">Gombe</option>
                    <option value="Imo">Imo</option>
                    <option value="Jigawa">Jigawa</option>
                    <option value="Kaduna">Kaduna</option>
                    <option value="Kano">Kano</option>
                    <option value="Katsina">Katsina</option>
                    <option value="kebbi">kebbi</option>
                    <option value="Kogi">Kogi</option>
                    <option value="Kwara">Kwara</option>
                    <option value="Lagos">Lagos</option>
                    <option value="Nassarawa">Nassarawa</option>
                    <option value="Niger">Niger</option>
                    <option value="Ogun">Ogun</option>
                    <option value="Ondo">Ondo</option>
                    <option value="Osun">Osun</option>
                    <option value="Oyo">Oyo</option>
                    <option value="Plateau">Plateau</option>
                    <option value="Rivers">Rivers</option>
                    <option value="Sokoto">Sokoto</option>
                    <option value="Taraba">Taraba</option>
                    <option value="Yobe">Yobe</option>
                    <option value="Zamfara">Zamfara</option>
                    </select>
                </div>
                </div>


                <div class="col-md-4 mb-3">
                    <label for="validationCustom002">Area</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-globe"></i></span>
                        </div>
                            <select name="place" id="lga" class="form-control select-lga"  value="<?= isset($_POST['place']) ? $_POST['place'] : ''; ?>"></select>
                        </select>
                    </div>
                </div>


                <div class="col-md-3 mb-3">
                    <label for="validationCustom002">How did you hear about us?</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-info"></i></span>
                        </div>    
                    
                        <!-- <input type="text" class="form-control" name="about_us" placeholder="How did you hear about us?"> -->
                    
                        <select name="about_us" class="form-control" id="hear_about_us" value="<?= isset($_POST['about_us']) ? $_POST['about_us'] : ''; ?>">
                            <option value="">How did you hear about us?</option>
                            <option value="Word of Mouth">Word of Mouth</option>
                            <option value="Online Search">Online Search</option>
                            <option value="Social Media">Social Media</option>
                            <option value="Advertisement">Advertisement</option>
                            <option value="Event">Event</option>
                            <option value="Other">Other</option>
                        </select>

                        


                    </div>
                </div>


                <div class="col-md-3 mb-3">
                    <label for="validationCustom002">Next of Kin Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                        </div> 
                    <input type="text" class="form-control" name="next_of_kin_name" placeholder="Next of Kin Name"  value="<?= isset($_POST['next_of_kin_name']) ? $_POST['next_of_kin_name'] : ''; ?>">
                    </div>
                </div>


                <div class="col-md-3 mb-3">
                    <label for="validationCustom002">Next of Kin Phone</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                        </div> 
                    <input type="text" class="form-control" name="next_of_kin_phone" placeholder="Next of Kin Phone" value="<?= isset($_POST['next_of_kin_phone']) ? $_POST['next_of_kin_phone'] : ''; ?>">
                    </div>
                </div>


                <div class="col-md-3 mb-3">
                    <label for="validationCustom002">Next of Kin Address</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-address-book"></i></span>
                        </div> 
                    <input type="text" class="form-control" name="next_of_kin_address" placeholder="Next of Kin Address"  value="<?= isset($_POST['next_of_kin_address']) ? $_POST['next_of_kin_address'] : ''; ?>">
                    </div>
                </div>


                <div class="col-md-12 mb-1 text-white">
                    <br>
                    <br>
                   <h4 class="text-white">Service Access</h4>
                </div>


                <div class="col-md-3 mb-3">
                    <label for="validationCustom002">Registration Type</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-plus-square"></i></span>
                        </div>
                        <select name="registration_type" class="form-control" value="<?= isset($_POST['registration_type']) ? $_POST['registration_type'] : ''; ?>">
                            <option value=""> Select Registration Type </option>
                            <?php //$data = $Fcall->selectRegistrationType('tbl_registration_type');?>
                        </select>
                    </div>
                </div>


                <div class="col-md-3 mb-3">
                    <label for="validationCustom002">Doctor's Specialty</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-bars"></i></span>
                        </div>
                        <select name="doctor_specialty" class="form-control" value="<?= isset($_POST['doctor_specialty']) ? $_POST['doctor_specialty'] : ''; ?>">
                            <option value=""> Select Specialty</option>
                            <?php //$data = $Fcall->selectSpecialty('tbl_doctors_specialty');?>
                        </select>
                    </div>
                </div>

                
                <div class="col-md-3 mb-3">
                    <label for="validationCustom002">Consulting Doctor</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                        </div>
                        <select name="consulting_doctor" class="form-control" value="<?= isset($_POST['consulting_doctor']) ? $_POST['consulting_doctor'] : ''; ?>">
                            <option value=""> Select Consulting Doctor</option>
                            <?php //$data = $Fcall->selectDoctor('doctors');?>
                        </select>
                    </div>  
                </div>


                <div class="col-md-3 mb-3">
                    <label for="validationCustom002">Patient Category</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        </div>
                        <select name="patient_category" class="form-control" value="<?= isset($_POST['patient_category']) ? $_POST['patient_category'] : ''; ?>">
                            <option value=""> Select Patient Category</option>
                            <?php //$data = $Fcall->selectPatientCategory('tbl_patient_category');?>
                        </select>
                    </div>
                </div>


                <div class="col-md-12 mb-3">
                    <button class="btn btn-secondary mt-4 float-right" name="new_patient" type="submit">Post New Patient</button>
                </div>

            </div>
            
        </div>               
   
    </form>

</div>
</div>
</div>

@endsection



<script>
    
    // Get rid of small loading animation
    [...document.querySelectorAll(".input-location-dependant")].forEach(element =>
      element.classList.toggle("d-none")
    );
  
    // Function to set multiple attributes at once
    const setAttributes = (el, attrs) => {
      for (var key in attrs) {
        el.setAttribute(key, attrs[key]);
      }
    };
  
                const toggleLGA = target => {
                let state = target.value,                                                         // Get value of state
                    selectLGAOption = ["Select Place..."],                                            // Define this once so as not to repeat it multiple times
                    lgaList = {
                    Abia: [
                "Aba North",
                "Aba South",
                "Arochukwu",
                "Bende",
                "Ikwuano",
                "Isiala-Ngwa North",
                "Isiala-Ngwa South",
                "Isuikwato",
                "Obi Nwa",
                "Ohafia",
                "Osisioma",
                "Ngwa",
                "Ugwunagbo",
                "Ukwa East",
                "Ukwa West",
                "Umuahia North",
                "Umuahia South",
                "Umu-Neochi"
                ],
                Adamawa: [
                "Demsa",
                "Fufore",
                "Ganaye",
                "Gireri",
                "Gombi",
                "Guyuk",
                "Hong",
                "Jada",
                "Lamurde",
                "Madagali",
                "Maiha",
                "Mayo-Belwa",
                "Michika",
                "Mubi North",
                "Mubi South",
                "Numan",
                "Shelleng",
                "Song",
                "Toungo",
                "Yola North",
                "Yola South"
                ],
                Anambra: [
                "Aguata",
                "Anambra East",
                "Anambra West",
                "Anaocha",
                "Awka North",
                "Awka South",
                "Ayamelum",
                "Dunukofia",
                "Ekwusigo",
                "Idemili North",
                "Idemili south",
                "Ihiala",
                "Njikoka",
                "Nnewi North",
                "Nnewi South",
                "Ogbaru",
                "Onitsha North",
                "Onitsha South",
                "Orumba North",
                "Orumba South",
                "Oyi"
                ],
                AkwaIbom: [
                "Abak",
                "Eastern Obolo",
                "Eket",
                "Esit Eket",
                "Essien Udim",
                "Etim Ekpo",
                "Etinan",
                "Ibeno",
                "Ibesikpo Asutan",
                "Ibiono Ibom",
                "Ika",
                "Ikono",
                "Ikot Abasi",
                "Ikot Ekpene",
                "Ini",
                "Itu",
                "Mbo",
                "Mkpat Enin",
                "Nsit Atai",
                "Nsit Ibom",
                "Nsit Ubium",
                "Obot Akara",
                "Okobo",
                "Onna",
                "Oron",
                "Oruk Anam",
                "Udung Uko",
                "Ukanafun",
                "Uruan",
                "Urue-Offong/Oruko ",
                "Uyo"
                ],
                Bauchi: [
                "Alkaleri",
                "Bauchi",
                "Bogoro",
                "Damban",
                "Darazo",
                "Dass",
                "Ganjuwa",
                "Giade",
                "Itas/Gadau",
                "Jama'are",
                "Katagum",
                "Kirfi",
                "Misau",
                "Ningi",
                "Shira",
                "Tafawa-Balewa",
                "Toro",
                "Warji",
                "Zaki"
                ],
                Bayelsa: [
                "Brass",
                "Ekeremor",
                "Kolokuma/Opokuma",
                "Nembe",
                "Ogbia",
                "Sagbama",
                "Southern Jaw",
                "Yenegoa"
                ],
                Benue: [
                "Ado",
                "Agatu",
                "Apa",
                "Buruku",
                "Gboko",
                "Guma",
                "Gwer East",
                "Gwer West",
                "Katsina-Ala",
                "Konshisha",
                "Kwande",
                "Logo",
                "Makurdi",
                "Obi",
                "Ogbadibo",
                "Oju",
                "Okpokwu",
                "Ohimini",
                "Oturkpo",
                "Tarka",
                "Ukum",
                "Ushongo",
                "Vandeikya"
                ],
                Borno: [
                "Abadam",
                "Askira/Uba",
                "Bama",
                "Bayo",
                "Biu",
                "Chibok",
                "Damboa",
                "Dikwa",
                "Gubio",
                "Guzamala",
                "Gwoza",
                "Hawul",
                "Jere",
                "Kaga",
                "Kala/Balge",
                "Konduga",
                "Kukawa",
                "Kwaya Kusar",
                "Mafa",
                "Magumeri",
                "Maiduguri",
                "Marte",
                "Mobbar",
                "Monguno",
                "Ngala",
                "Nganzai",
                "Shani"
                ],
                CrossRiver: [
                "Akpabuyo",
                "Odukpani",
                "Akamkpa",
                "Biase",
                "Abi",
                "Ikom",
                "Yarkur",
                "Odubra",
                "Boki",
                "Ogoja",
                "Yala",
                "Obanliku",
                "Obudu",
                "Calabar South",
                "Etung",
                "Bekwara",
                "Bakassi",
                "Calabar Municipality"
                ],
                Delta: [
                "Oshimili",
                "Aniocha",
                "Aniocha South",
                "Ika South",
                "Ika North-East",
                "Ndokwa West",
                "Ndokwa East",
                "Isoko south",
                "Isoko North",
                "Bomadi",
                "Burutu",
                "Ughelli South",
                "Ughelli North",
                "Ethiope West",
                "Ethiope East",
                "Sapele",
                "Okpe",
                "Warri North",
                "Warri South",
                "Uvwie",
                "Udu",
                "Warri Central",
                "Ukwani",
                "Oshimili North",
                "Patani"
                ],
                Ebonyi: [
                "Afikpo South",
                "Afikpo North",
                "Onicha",
                "Ohaozara",
                "Abakaliki",
                "Ishielu",
                "lkwo",
                "Ezza",
                "Ezza South",
                "Ohaukwu",
                "Ebonyi",
                "Ivo"
                ],
                Enugu: [
                "Enugu South,",
                "Igbo-Eze South",
                "Enugu North",
                "Nkanu",
                "Udi Agwu",
                "Oji-River",
                "Ezeagu",
                "IgboEze North",
                "Isi-Uzo",
                "Nsukka",
                "Igbo-Ekiti",
                "Uzo-Uwani",
                "Enugu Eas",
                "Aninri",
                "Nkanu East",
                "Udenu."
                ],
                Edo: [
                "Esan North-East",
                "Esan Central",
                "Esan West",
                "Egor",
                "Ukpoba",
                "Central",
                "Etsako Central",
                "Igueben",
                "Oredo",
                "Ovia SouthWest",
                "Ovia South-East",
                "Orhionwon",
                "Uhunmwonde",
                "Etsako East",
                "Esan South-East"
                ],
                Ekiti: [
                "Ado",
                "Ekiti-East",
                "Ekiti-West",
                "Emure/Ise/Orun",
                "Ekiti South-West",
                "Ikare",
                "Irepodun",
                "Ijero,",
                "Ido/Osi",
                "Oye",
                "Ikole",
                "Moba",
                "Gbonyin",
                "Efon",
                "Ise/Orun",
                "Ilejemeje."
                ],
                Abuja: [
                "Abaji",
                "AMAC",
                "Bwari",
                "Gwagwalada",
                "Kuje",
                "Kwali"
                ],
                Gombe: [
                "Akko",
                "Balanga",
                "Billiri",
                "Dukku",
                "Kaltungo",
                "Kwami",
                "Shomgom",
                "Funakaye",
                "Gombe",
                "Nafada/Bajoga",
                "Yamaltu/Delta."
                ],
                Imo: [
                "Aboh-Mbaise",
                "Ahiazu-Mbaise",
                "Ehime-Mbano",
                "Ezinihitte",
                "Ideato North",
                "Ideato South",
                "Ihitte/Uboma",
                "Ikeduru",
                "Isiala Mbano",
                "Isu",
                "Mbaitoli",
                "Mbaitoli",
                "Ngor-Okpala",
                "Njaba",
                "Nwangele",
                "Nkwerre",
                "Obowo",
                "Oguta",
                "Ohaji/Egbema",
                "Okigwe",
                "Orlu",
                "Orsu",
                "Oru East",
                "Oru West",
                "Owerri-Municipal",
                "Owerri North",
                "Owerri West"
                ],
                Jigawa: [
                "Auyo",
                "Babura",
                "Birni Kudu",
                "Biriniwa",
                "Buji",
                "Dutse",
                "Gagarawa",
                "Garki",
                "Gumel",
                "Guri",
                "Gwaram",
                "Gwiwa",
                "Hadejia",
                "Jahun",
                "Kafin Hausa",
                "Kaugama Kazaure",
                "Kiri Kasamma",
                "Kiyawa",
                "Maigatari",
                "Malam Madori",
                "Miga",
                "Ringim",
                "Roni",
                "Sule-Tankarkar",
                "Taura",
                "Yankwashi"
                ],
                Kaduna: [
                "Birni-Gwari",
                "Chikun",
                "Giwa",
                "Igabi",
                "Ikara",
                "jaba",
                "Jema'a",
                "Kachia",
                "Kaduna North",
                "Kaduna South",
                "Kagarko",
                "Kajuru",
                "Kaura",
                "Kauru",
                "Kubau",
                "Kudan",
                "Lere",
                "Makarfi",
                "Sabon-Gari",
                "Sanga",
                "Soba",
                "Zango-Kataf",
                "Zaria"
                ],
                Kano: [
                "Ajingi",
                "Albasu",
                "Bagwai",
                "Bebeji",
                "Bichi",
                "Bunkure",
                "Dala",
                "Dambatta",
                "Dawakin Kudu",
                "Dawakin Tofa",
                "Doguwa",
                "Fagge",
                "Gabasawa",
                "Garko",
                "Garum",
                "Mallam",
                "Gaya",
                "Gezawa",
                "Gwale",
                "Gwarzo",
                "Kabo",
                "Kano Municipal",
                "Karaye",
                "Kibiya",
                "Kiru",
                "kumbotso",
                "Kunchi",
                "Kura",
                "Madobi",
                "Makoda",
                "Minjibir",
                "Nasarawa",
                "Rano",
                "Rimin Gado",
                "Rogo",
                "Shanono",
                "Sumaila",
                "Takali",
                "Tarauni",
                "Tofa",
                "Tsanyawa",
                "Tudun Wada",
                "Ungogo",
                "Warawa",
                "Wudil"
                ],
                Katsina: [
                "Bakori",
                "Batagarawa",
                "Batsari",
                "Baure",
                "Bindawa",
                "Charanchi",
                "Dandume",
                "Danja",
                "Dan Musa",
                "Daura",
                "Dutsi",
                "Dutsin-Ma",
                "Faskari",
                "Funtua",
                "Ingawa",
                "Jibia",
                "Kafur",
                "Kaita",
                "Kankara",
                "Kankia",
                "Katsina",
                "Kurfi",
                "Kusada",
                "Mai'Adua",
                "Malumfashi",
                "Mani",
                "Mashi",
                "Matazuu",
                "Musawa",
                "Rimi",
                "Sabuwa",
                "Safana",
                "Sandamu",
                "Zango"
                ],
                Kebbi: [
                "Aleiro",
                "Arewa-Dandi",
                "Argungu",
                "Augie",
                "Bagudo",
                "Birnin Kebbi",
                "Bunza",
                "Dandi",
                "Fakai",
                "Gwandu",
                "Jega",
                "Kalgo",
                "Koko/Besse",
                "Maiyama",
                "Ngaski",
                "Sakaba",
                "Shanga",
                "Suru",
                "Wasagu/Danko",
                "Yauri",
                "Zuru"
                ],
                Kogi: [
                "Adavi",
                "Ajaokuta",
                "Ankpa",
                "Bassa",
                "Dekina",
                "Ibaji",
                "Idah",
                "Igalamela-Odolu",
                "Ijumu",
                "Kabba/Bunu",
                "Kogi",
                "Lokoja",
                "Mopa-Muro",
                "Ofu",
                "Ogori/Mangongo",
                "Okehi",
                "Okene",
                "Olamabolo",
                "Omala",
                "Yagba East",
                "Yagba West"
                ],
                Kwara: [
                "Asa",
                "Baruten",
                "Edu",
                "Ekiti",
                "Ifelodun",
                "Ilorin East",
                "Ilorin West",
                "Irepodun",
                "Isin",
                "Kaiama",
                "Moro",
                "Offa",
                "Oke-Ero",
                "Oyun",
                "Pategi"
                ],
                Lagos: [
                "Agege",
                "Ajeromi-Ifelodun",
                "Alimosho",
                "Amuwo-Odofin",
                "Apapa",
                "Badagry",
                "Epe",
                "Eti-Osa",
                "Ibeju/Lekki",
                "Ifako-Ijaye",
                "Ikeja",
                "Ikorodu",
                "Kosofe",
                "Lagos Island",
                "Lagos Mainland",
                "Mushin",
                "Ojo",
                "Oshodi-Isolo",
                "Shomolu",
                "Surulere"
                ],
                Nasarawa: [
                "Akwanga",
                "Awe",
                "Doma",
                "Karu",
                "Keana",
                "Keffi",
                "Kokona",
                "Lafia",
                "Nasarawa",
                "Nasarawa-Eggon",
                "Obi",
                "Toto",
                "Wamba"
                ],
                Niger: [
                "Agaie",
                "Agwara",
                "Bida",
                "Borgu",
                "Bosso",
                "Chanchaga",
                "Edati",
                "Gbako",
                "Gurara",
                "Katcha",
                "Kontagora",
                "Lapai",
                "Lavun",
                "Magama",
                "Mariga",
                "Mashegu",
                "Mokwa",
                "Muya",
                "Pailoro",
                "Rafi",
                "Rijau",
                "Shiroro",
                "Suleja",
                "Tafa",
                "Wushishi"
                ],
                Ogun: [
                "Abeokuta North",
                "Abeokuta South",
                "Ado-Odo/Ota",
                "Egbado North",
                "Egbado South",
                "Ewekoro",
                "Ifo",
                "Ijebu East",
                "Ijebu North",
                "Ijebu North East",
                "Ijebu Ode",
                "Ikenne",
                "Imeko-Afon",
                "Ipokia",
                "Obafemi-Owode",
                "Ogun Waterside",
                "Odeda",
                "Odogbolu",
                "Remo North",
                "Shagamu"
                ],
                Ondo: [
                "Akoko North East",
                "Akoko North West",
                "Akoko South Akure East",
                "Akoko South West",
                "Akure North",
                "Akure South",
                "Ese-Odo",
                "Idanre",
                "Ifedore",
                "Ilaje",
                "Ile-Oluji",
                "Okeigbo",
                "Irele",
                "Odigbo",
                "Okitipupa",
                "Ondo East",
                "Ondo West",
                "Ose",
                "Owo"
                ],
                Osun: [
                "Aiyedade",
                "Aiyedire",
                "Atakumosa East",
                "Atakumosa West",
                "Boluwaduro",
                "Boripe",
                "Ede North",
                "Ede South",
                "Egbedore",
                "Ejigbo",
                "Ife Central",
                "Ife East",
                "Ife North",
                "Ife South",
                "Ifedayo",
                "Ifelodun",
                "Ila",
                "Ilesha East",
                "Ilesha West",
                "Irepodun",
                "Irewole",
                "Isokan",
                "Iwo",
                "Obokun",
                "Odo-Otin",
                "Ola-Oluwa",
                "Olorunda",
                "Oriade",
                "Orolu",
                "Osogbo"
                ],
                Oyo: [
                "Afijio",
                "Akinyele",
                "Atiba",
                "Atigbo",
                "Egbeda",
                "Ibadan Central",
                "Ibadan North",
                "Ibadan North West",
                "Ibadan South East",
                "Ibadan South West",
                "Ibarapa Central",
                "Ibarapa East",
                "Ibarapa North",
                "Ido",
                "Irepo",
                "Iseyin",
                "Itesiwaju",
                "Iwajowa",
                "Kajola",
                "Lagelu Ogbomosho North",
                "Ogbmosho South",
                "Ogo Oluwa",
                "Olorunsogo",
                "Oluyole",
                "Ona-Ara",
                "Orelope",
                "Ori Ire",
                "Oyo East",
                "Oyo West",
                "Saki East",
                "Saki West",
                "Surulere"
                ],
                Plateau: [
                "Barikin Ladi",
                "Bassa",
                "Bokkos",
                "Jos East",
                "Jos North",
                "Jos South",
                "Kanam",
                "Kanke",
                "Langtang North",
                "Langtang South",
                "Mangu",
                "Mikang",
                "Pankshin",
                "Qua'an Pan",
                "Riyom",
                "Shendam",
                "Wase"
                ],
                Rivers: [
                "Abua/Odual",
                "Ahoada East",
                "Ahoada West",
                "Akuku Toru",
                "Andoni",
                "Asari-Toru",
                "Bonny",
                "Degema",
                "Emohua",
                "Eleme",
                "Etche",
                "Gokana",
                "Ikwerre",
                "Khana",
                "Obia/Akpor",
                "Ogba/Egbema/Ndoni",
                "Ogu/Bolo",
                "Okrika",
                "Omumma",
                "Opobo/Nkoro",
                "Oyigbo",
                "Port-Harcourt",
                "Tai"
                ],
                Sokoto: [
                "Binji",
                "Bodinga",
                "Dange-shnsi",
                "Gada",
                "Goronyo",
                "Gudu",
                "Gawabawa",
                "Illela",
                "Isa",
                "Kware",
                "kebbe",
                "Rabah",
                "Sabon birni",
                "Shagari",
                "Silame",
                "Sokoto North",
                "Sokoto South",
                "Tambuwal",
                "Tqngaza",
                "Tureta",
                "Wamako",
                "Wurno",
                "Yabo"
                ],
                Taraba: [
                "Ardo-kola",
                "Bali",
                "Donga",
                "Gashaka",
                "Cassol",
                "Ibi",
                "Jalingo",
                "Karin-Lamido",
                "Kurmi",
                "Lau",
                "Sardauna",
                "Takum",
                "Ussa",
                "Wukari",
                "Yorro",
                "Zing"
                ],
                Yobe: [
                "Bade",
                "Bursari",
                "Damaturu",
                "Fika",
                "Fune",
                "Geidam",
                "Gujba",
                "Gulani",
                "Jakusko",
                "Karasuwa",
                "Karawa",
                "Machina",
                "Nangere",
                "Nguru Potiskum",
                "Tarmua",
                "Yunusari",
                "Yusufari"
                ],
                Zamfara: [
                "Anka",
                "Bakura",
                "Birnin Magaji",
                "Bukkuyum",
                "Bungudu",
                "Gummi",
                "Gusau",
                "Kaura",
                "Namoda",
                "Maradun",
                "Maru",
                "Shinkafi",
                "Talata Mafara",
                "Tsafe",
                "Zurmi"
                ]

        }[state],                                                                       // Ternary switch operator to show list of LGAs based on chosen state
        lgas = [...selectLGAOption, ...Object.values(lgaList)],                         // Join select LGA option with list of LGAs
        form = target.parentElement.parentElement.parentElement.parentElement,          // Get parent up to the forth generation just in case LGA select element is deeply nested
        lgaSelect = form.querySelector(".select-lga"),                                  // Get the LGA select element
        length = lgaSelect.options.length;                                              // Get number of options already existing in LGA select element
  
      // Clear LGS select element
      for (i = length - 1; i >= 0; i--) {
        lgaSelect.options[i] = null;
      }
  
      // Populate LGA select element
      lgas.forEach(lga => {
        let opt = document.createElement("option");                                     // Create option element
        opt.appendChild(document.createTextNode(lga));                                  // Append LGA to it
        opt.value = lga;                                                                // Set the value to LGA
  
        // Make option asking you to select unclickable
        lga.includes("elect")
          ? setAttributes(opt, { disabled: "disabled", selected: "selected" })
          : "";
  
        // Add this option element to LGA select element
        lgaSelect.appendChild(opt);
      });
    };
  
  </script>
 