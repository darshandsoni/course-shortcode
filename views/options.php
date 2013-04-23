<script type="text/javascript">var __namespace = '<?php echo $namespace; ?>';</script>
<div class="wrap">

    <h2><?php echo $page_title; ?></h2>

<style>  .progress-label {float: left;text-shadow: 1px 1px 0 #fff;}</style>

<div>
<p>This is a preamble giving instructions on how to use this page and how the data helps with the process???</p>
</div>

   <div id="progressbar" style="display:none;height:20px;margin-top:5px;width:303px;">
     <div class="progress-label" style="margin:45%;margin-top:1px;font-weight:normal;">
     </div>
   </div>

<div id="getinst">
<select id="department" onkeypress="handleEnter(this.value, event);"  class="chzn-select" data-placeholder="Choose a Department Course Code..." style="width:350px;" tabindex="1">
<option value=""></option>
<option value='ADHE'>ADHE - Adult and Higher Education</option> <option value='AFST'>AFST - African Studies</option><option value='AGEC'>AGEC - Agricultural Economics</option><option value='AGRO'>AGRO - Agroecology</option><option value='AGSC'>AGSC - Agricultural Sciences</option><option value='ANAE'>ANAE - Anesthesia</option><option value='ANAT'>ANAT - Anatomy</option><option value='ANSC'>ANSC - Animal Science</option><option value='ANTH'>ANTH - Anthropology</option><option value='APBI'>APBI - Applied Biology</option><option value='APSC'>APSC - Applied Science</option><option value='ARBC'>ARBC - Arabic Studies</option><option value='ARC'>ARC - Alternative Routes to Computing</option><option value='ARCH'>ARCH - Architecture</option><option value='ARST'>ARST - Archival Studies</option><option value='ARTH'>ARTH - Art History</option><option value='ARTS'>ARTS - Arts One Program</option><option value='ASIA'>ASIA - Asian Studies</option><option value='ASIC'>ASIC - Arts and Science Interdisciplinary Courses</option><option value='ASLA'>ASLA - Asian Languages</option><option value='ASTR'>ASTR - Astronomy</option><option value='ASTU'>ASTU - Arts Studies</option><option value='ATSC'>ATSC - Atmospheric Science</option><option value='AUDI'>AUDI - Audiology and Speech Sciences</option><option value='BA'>BA - Business Administration: Core</option><option value='BAAC'>BAAC - Business Administration: Accounting</option><option value='BABS'>BABS - Business Administration: Business Statistics</option><option value='BAEN'>BAEN - Business Administration: Entrepreneurship</option><option value='BAFI'>BAFI - Business Administration: Finance</option><option value='BAHC'>BAHC - Business Administration: Health Care</option><option value='BAHR'>BAHR - Business Administration: Human Resources Management</option><option value='BAIM'>BAIM - Business Administration: International Management</option><option value='BAIT'>BAIT - Business Administration: Business Technology Management</option><option value='BALA'>BALA - Business Administration: Law</option><option value='BAMA'>BAMA - Business Administration: Marketing</option><option value='BAMS'>BAMS - Business Administration: Management Science</option><option value='BAPA'>BAPA - Business Administration: Policy Analysis</option><option value='BASC'>BASC - Business Administration: Supply Chain</option><option value='BASD'>BASD - Business Administration: Sustainable Development</option><option value='BASM'>BASM - Business Administration: Strategic Management</option><option value='BATL'>BATL - Business Administration: Transportation and Logistics</option><option value='BATM'>BATM - Business Administration: Technology Management</option><option value='BAUL'>BAUL - Business Administration: Urban Land Economics</option><option value='BIOC'>BIOC - Biochemistry</option><option value='BIOF'>BIOF - Bioinformatics</option><option value='BIOL'>BIOL - Biology</option><option value='BIOT'>BIOT - Biotechnology</option><option value='BMEG'>BMEG - Biomedical Engineering</option><option value='BOTA'>BOTA - Botany</option><option value='BRDG'>BRDG - Bridge Program</option><option value='BUSI'>BUSI - Business</option><option value='CAPS'>CAPS - Cellular, Anatomical and Physiological Sciences</option><option value='CCFI'>CCFI - Centre for Cross-Faculty Inquiry</option><option value='CCST'>CCST - Critical and Curatorial Studies</option><option value='CDST'>CDST - Canadian Studies</option><option value='CEEN'>CEEN - Clean Energy Engineering</option><option value='CELL'>CELL - Cell and Developmental Biology</option><option value='CENS'>CENS - Central, Eastern and Northern European Studies</option><option value='CHBE'>CHBE - Chemical and Biological Engineering</option><option value='CHEM'>CHEM - Chemistry</option><option value='CHIL'>CHIL - Children's Literature</option><option value='CHIN'>CHIN - Chinese</option><option value='CICS'>CICS - Computing Information and Cognitive Systems</option><option value='CIVL'>CIVL - Civil Engineering</option><option value='CLST'>CLST - Classical Studies</option><option value='CNPS'>CNPS - Counselling Psychology</option><option value='CNRS'>CNRS - Classical, Near Eastern and Religious Studies</option><option value='COGS'>COGS - Cognitive Systems Program</option><option value='COHR'>COHR - Commerce Human Resources</option><option value='COMM'>COMM - Commerce</option><option value='CONS'>CONS - Natural Resources Conservation</option><option value='CPSC'>CPSC - Computer Science</option><option value='CRWR'>CRWR - Creative Writing</option><option value='CSIS'>CSIS - Critical Studies in Sexuality</option><option value='CSPW'>CSPW - Coordinated Science Program Workshop</option><option value='DENT'>DENT - Dentistry</option><option value='DERM'>DERM - Clinical Dermatology</option><option value='DHYG'>DHYG - Dental Hygiene</option><option value='DMED'>DMED - Digital Media</option><option value='DPAS'>DPAS - Doctor/Dentist, Patient and Society</option><option value='ECED'>ECED - Early Childhood Education</option><option value='ECON'>ECON - Economics</option><option value='EDCP'>EDCP - Curriculum and Pedagogy</option><option value='EDST'>EDST - Educational Studies</option><option value='EDUC'>EDUC - Education</option><option value='EECE'>EECE - Electrical and Computer Engineering</option><option value='ELI'>ELI - English Language Institute</option><option value='EMBA'>EMBA - Executive M.B.A.</option><option value='EMER'>EMER - Emergency Medicine</option><option value='ENDS'>ENDS - Environmental Design</option><option value='ENGL'>ENGL - English</option><option value='ENPH'>ENPH - Engineering Physics</option><option value='ENPP'>ENPP - Engineering and Public Policy</option><option value='ENVR'>ENVR - Environmental Science</option><option value='EOSC'>EOSC - Earth, Ocean and Atmospheric Sciences</option><option value='EPSE'>EPSE - Educational Psychology and Special Education</option><option value='ETEC'>ETEC - Educational Technology</option><option value='EXCH'>EXCH - Exchange Programs</option><option value='EXGR'>EXGR - Exchange Graduate Research</option><option value='FACT'>FACT - Faculty of Arts Commuter Transition Program</option><option value='FEBC'>FEBC - Forest Engineering British Columbia</option><option value='FIPR'>FIPR - Film Production</option><option value='FISH'>FISH - Fisheries Research</option><option value='FIST'>FIST - Film Studies</option><option value='FMED'>FMED - Foundations of Medicine</option><option value='FMPR'>FMPR - Family Practice</option><option value='FMST'>FMST - Family Studies</option><option value='FNH'>FNH - Food, Nutrition and Health</option><option value='FNLG'>FNLG - First Nations Languages</option><option value='FNSP'>FNSP - First Nations Studies Program</option><option value='FOOD'>FOOD - Food Science</option><option value='FOPR'>FOPR - Forest Operations</option><option value='FRE'>FRE - Food and Resource Economics</option><option value='FREN'>FREN - French</option><option value='FRSI'>FRSI - Forestry Silviculture Institute</option><option value='FRST'>FRST - Forestry</option><option value='GENE'>GENE - Genetics</option><option value='GEOB'>GEOB - Geographical Biogeosciences</option><option value='GEOG'>GEOG - Geography</option><option value='GERM'>GERM - German</option><option value='GREK'>GREK - Greek</option><option value='GRS'>GRS - Global Resource Systems</option><option value='GRSJ'>GRSJ - Gender, Race, Sexuality and Social Justice</option><option value='GSAT'>GSAT - Genome Science and Technology</option><option value='HEBR'>HEBR - Hebrew</option><option value='HESO'>HESO - Health and Society</option><option value='HINU'>HINU - Hindi-Urdu</option><option value='HIST'>HIST - History</option><option value='HMEC'>HMEC - Home Economics</option><option value='HUNU'>HUNU - Human Nutrition</option><option value='HXAH'>HXAH - Herstmonceux Art History</option><option value='HXCM'>HXCM - Herstmonceux International Business Strategy</option><option value='HXCS'>HXCS - Herstmonceux Computer Science</option><option value='HXDR'>HXDR - Herstmonceux Drama</option><option value='HXEC'>HXEC - Herstmonceux Economics</option><option value='HXEN'>HXEN - Herstmonceux English</option><option value='HXFL'>HXFL - Herstmonceux Film</option><option value='HXFR'>HXFR - Herstmonceux French</option><option value='HXGM'>HXGM - Herstmonceux German</option><option value='HXGY'>HXGY - Herstmonceux Geography</option><option value='HXHI'>HXHI - Herstmonceux History</option><option value='HXID'>HXID - Herstmonceux Interdisciplinary Studies</option><option value='HXIS'>HXIS - Herstmonceux International Studies</option><option value='HXMA'>HXMA - Herstmonceux Mathematics</option><option value='HXMU'>HXMU - Herstmonceux Music</option><option value='HXPC'>HXPC - Herstmonceux Psychology</option><option value='HXPH'>HXPH - Herstmonceux Physics</option><option value='HXPS'>HXPS - Herstmonceux Political Studies</option><option value='HXPY'>HXPY - Herstmonceux Philosophy</option><option value='HXRE'>HXRE - Herstmonceux Religious Studies</option><option value='HXSP'>HXSP - Herstmonceux Spanish</option><option value='HXWM'>HXWM - Herstmonceux Women's Studies</option><option value='HXWR'>HXWR - Herstmonceux Writing</option><option value='IAR'>IAR - Institute of Asian Research</option><option value='IEST'>IEST - European Studies</option><option value='IGEN'>IGEN - Integrated Engineering</option><option value='IHHS'>IHHS - Interprofessional Health and Human Service</option><option value='INDE'>INDE - Interdepartmental Medicine</option><option value='INDO'>INDO - Indonesian</option><option value='INDS'>INDS - Interdisciplinary Studies</option><option value='INSU'>INSU - International Space University</option><option value='ISCI'>ISCI - Integrated Sciences</option><option value='ITAL'>ITAL - Italian</option><option value='ITST'>ITST - Italian Studies</option><option value='JAPN'>JAPN - Japanese</option><option value='JRNL'>JRNL - Journalism</option><option value='KIN'>KIN - Kinesiology</option><option value='KORN'>KORN - Korean</option><option value='LARC'>LARC - Landscape Architecture</option><option value='LASO'>LASO - Law and Society</option><option value='LAST'>LAST - Latin American Studies</option><option value='LATN'>LATN - Latin</option><option value='LAW'>LAW - Law</option><option value='LFS'>LFS - Land & Food Systems</option><option value='LIBE'>LIBE - Teacher Librarianship</option><option value='LIBR'>LIBR - Library and Information Studies</option><option value='LING'>LING - Linguistics</option><option value='LLED'>LLED - Language and Literacy Education</option><option value='MATH'>MATH - Mathematics</option><option value='MDVL'>MDVL - Medieval Studies</option><option value='MECH'>MECH - Mechanical Engineering</option><option value='MEDG'>MEDG - Medical Genetics</option><option value='MEDI'>MEDI - Medicine</option><option value='MICB'>MICB - Microbiology</option><option value='MIDW'>MIDW - Midwifery</option><option value='MINE'>MINE - Mining Engineering</option><option value='MRNE'>MRNE - Marine Science</option><option value='MTRL'>MTRL - Materials Engineering</option><option value='MUSC'>MUSC - Music</option><option value='NEST'>NEST - Near Eastern Studies</option><option value='NEUR'>NEUR - Neurosurgery</option><option value='NRSC'>NRSC - Neuroscience</option><option value='NURS'>NURS - Nursing</option><option value='OBMS'>OBMS - Oral Biological Medical Sciences</option><option value='OBST'>OBST - Obstetrics and Gynaecology</option><option value='OHS'>OHS - Oral Health Sciences</option><option value='ONCO'>ONCO - Oncology</option><option value='OPTH'>OPTH - Ophthalmology</option><option value='ORNT'>ORNT - Orientation to Medical School</option><option value='ORPA'>ORPA - Orthopaedics</option><option value='PAED'>PAED - Paediatrics</option><option value='PATH'>PATH - Pathology</option><option value='PCTH'>PCTH - Pharmacology and Therapeutics</option><option value='PERS'>PERS - Persian</option><option value='PHAR'>PHAR - Pharmaceutical Sciences</option><option value='PHIL'>PHIL - Philosophy</option><option value='PHTH'>PHTH - Physical Therapy</option><option value='PHYL'>PHYL - Cellular and Physiological Sciences</option><option value='PHYS'>PHYS - Physics</option><option value='PLAN'>PLAN - Community and Regional Planning</option><option value='PLAS *'>PLAS * - Plastic Surgery</option><option value='PLNT'>PLNT - Plant Science</option><option value='POLI'>POLI - Political Science</option><option value='POLS'>POLS - Polish</option><option value='PORT'>PORT - Portuguese</option><option value='PRIN'>PRIN - Principles of Human Biology</option><option value='PSYC'>PSYC - Psychology</option><option value='PSYT'>PSYT - Psychiatry</option><option value='PUNJ'>PUNJ - Punjabi</option><option value='RADI'>RADI - Radiology</option><option value='RELG'>RELG - Religious Studies</option><option value='RGLA'>RGLA - Religion, Literature and The Arts</option><option value='RHSC'>RHSC - Rehabilitation Sciences</option><option value='RMES'>RMES - Resource Management and Environmental Studies</option><option value='RMST'>RMST - Romance Studies</option><option value='RSOT'>RSOT - Occupational Therapy</option><option value='RUSS'>RUSS - Russian</option><option value='SANS'>SANS - Sanskrit</option><option value='SCAN'>SCAN - Scandinavian</option><option value='SCIE'>SCIE - Science</option><option value='SEAL'>SEAL - Southeast Asian Languages</option><option value='SLAV'>SLAV - Slavic Studies</option><option value='SOAL'>SOAL - South Asian Languages</option><option value='SOCI'>SOCI - Sociology</option><option value='SOIL'>SOIL - Soil Science</option><option value='SOWK'>SOWK - Social Work</option><option value='SPAN'>SPAN - Spanish</option><option value='SPHA'>SPHA - School of Population & Public Health</option><option value='SPPH'>SPPH - School of Population & Public Health</option><option value='STAT'>STAT - Statistics</option><option value='STS'>STS - Science and Technology Studies</option><option value='SURG'>SURG - Surgery</option><option value='THTR'>THTR - Theatre</option><option value='TIBT'>TIBT - Tibetan Languages</option><option value='TRSC'>TRSC - Transition School</option><option value='UKRN'>UKRN - Ukrainian</option><option value='URO'>URO - Undergraduate Research Opportunities</option><option value='UROL *'>UROL * - Urological Surgery</option><option value='URST'>URST - Urban Studies</option><option value='VGRD'>VGRD - Visiting Graduate Student</option><option value='VISA'>VISA - Visual Arts</option><option value='VRHC'>VRHC - Vocational Rehabilitation Counselling</option><option value='VURS'>VURS - Visiting Undergraduate Research Students</option><option value='WMST'>WMST - Women's and Gender Studies</option><option value='WOOD'>WOOD - Wood Products Processing</option><option value='WRIT'>WRIT - University Writing Centre Courses</option>
</select>
   
     <?php 
      if( isset( $_GET['message'] ) ){
       if( $_GET['message'] == 1  )
        echo '<div id="message" class="updated below-h2"><p>Options successfully updated!</p></div>';
       if( $_GET['message'] == 2  )
        echo '<div id="message" class="error below-h2"><p>Not Updated - Size limit Exceeded</p></div>';
       }
      ?> 




<!--<span>Department Code (4 chars): <input id="department1" onkeypress="handleEnter(this.value, event);" style="display:inline-block;width:auto;text-transform:uppercase;margin-top:10px;margin-right:4px;" type="text" department="firstname" maxlength="4" size="4"></span>-->
<div class="btn-group" style="display:inline-block;">
   <button class="button-primary" style="border-radius:4px;margin-right:4px;" onclick="param = document.getElementById('department').value.toUpperCase();getDepartmentData(param)">Get Instructors</button>
   <button id="clearBtn" class="button-primary" style="border-radius:4px;margin-right:4px;" >Clear</button>
   <button id="revertBtn" class="button-primary" style="border-radius:4px;margin-right:4px;" >Revert</button>
   <button id="saveBtn" class="button-primary" style="display:none;border-radius:4px;margin-right:4px;" >Save Changes</button>
</div>
<div class='instructor-list'><div id='status'></div><ul><?php echo $this->get_option( 'option_2',true );?></ul></div>
</div>
        
    <form class="settings-form" id="settings-form" action="" method="post" id="<?php echo $namespace; ?>-form">
        <?php wp_nonce_field( $namespace . "-update-options" ); ?>
        
         <p>
            <label><input type="hidden" id="instructordata" type="text" name="data[option_2]" value="<?php echo $this->get_option( 'option_2',false ); ?>" /></label> 
        </p>
        
        <!--<p class="isubmit">
            <input type="submit" name="Submit" class="button-primary" value="<?php _e( "Save Changes", $namespace ) ?>" />-->
        </p>
    </form>
</div>

<div id="revert" style="display:none;"><?php echo $this->get_option( 'option_2',true );?></div>