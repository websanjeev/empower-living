<?php include 'header.php'; ?>
<!-- ================================== -->
<section class="section-row pt-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2>Make a Referral</h2>
      <p>Provide an NDIS referral form online to allow for efficient referrals for patients with disabilities.</p>
    </div>
    <div class="referral-wrapper mb-4">
      <h4>Details of person requiring NDIS Support</h4>
      <div class="mb-4">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <input type="text" class="form-control form-control-lg" placeholder="First name" aria-label="First name">
          </div>
          <div class="col-sm-12 col-md-6">
            <input type="text" class="form-control form-control-lg" placeholder="last name" aria-label="last name">
          </div>
        </div>
      </div>
      <div class="mb-4">
        <p>Identifies as</p>
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div class="form-check mb-3">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
              <label class="form-check-label" for="flexRadioDefault1">Male</label>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
              <label class="form-check-label" for="flexRadioDefault2">Female</label>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
              <label class="form-check-label" for="flexRadioDefault3">Non-binary/ Gender Fluid</label>
            </div>
            <div class="form-radio-wrapp">
              <input class="form-check-input me-2" type="radio" name="radioNoLabel" id="radioNoLabel4" value="" aria-label="...">
              <input type="text" class="form-control form-control-lg" placeholder="Other" aria-label="Other">
            </div>
          </div>
          <div class="col-sm-12 col-md-6">
            <div class="form-check mb-3">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
              <label class="form-check-label" for="flexRadioDefault5">Different Identity</label>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
              <label class="form-check-label" for="flexRadioDefault6">Aboriginal</label>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
              <label class="form-check-label" for="flexRadioDefault7">Torres Strait Islander</label>
            </div>
            <div class="form-check mb-3">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
              <label class="form-check-label" for="flexRadioDefault7"> Aboriginal & Torres Strait Islander</label>
            </div>
          </div>
        </div>
      </div>
      <div class="mb-4">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <input type="text" class="form-control form-control-lg" placeholder="Phone" aria-label="Phone">
          </div>
          <div class="col-sm-12 col-md-6">
            <input type="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email">
          </div>
        </div>
      </div>
      <p>Birth Date</p>
      <div class="mb-4">
        <div class="row">
          <div class="year-month-day-wrapp">
            <select class="form-select form-select-lg mb-3" aria-label="">
              <option selected>Year</option>
              <option value="1">2021</option>
              <option value="2">2022</option>
              <option value="3">2023</option>
            </select>
            <select class="form-select form-select-lg mb-3" aria-label="">
              <option selected>Month</option>
              <option value="1">Jan</option>
              <option value="2">Feb</option>
              <option value="3">March</option>
            </select>
            <select class="form-select form-select-lg mb-3" aria-label="">
              <option selected>Day</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>
        </div>
      </div>
      <div class="mb-4">
        <div class="mb-3">
          <input class="form-control form-control-lg" type="text" placeholder="Residential Address (Street, Suburb and State)" aria-label="">
        </div>
        <div class="mb-3">
          <input class="form-control form-control-lg" type="text" placeholder="NDIS Plan Number (eg: 56785434)" aria-label="">
        </div>
        <div class="mb-3">
          <textarea class="form-control" placeholder="Information you wish to share about the participant" rows="3"></textarea>
        </div>
        <div class="mb-3">
          <textarea class="form-control" placeholder="Disability (if known)" rows="3"></textarea>
        </div>
      </div>
      <div class="mb-4">
        <p>What support is required from Empower living? (Including any preference of staff/ gender/ age)</p>
        <textarea class="form-control" placeholder="Write here..." rows="3"></textarea>
      </div>
      <div class="mb-4">
        <p>Guardians or Plan Nominee (if applicable)</p>
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <input type="text" class="form-control form-control-lg mb-3" placeholder="First name" aria-label="First name">
          </div>
          <div class="col-sm-12 col-md-6">
            <input type="text" class="form-control form-control-lg mb-3" placeholder="last name" aria-label="last name">
          </div>
          <div class="col-sm-12 col-md-6">
            <input type="text" class="form-control form-control-lg mb-3" placeholder="Phone" aria-label="Phone">
          </div>
          <div class="col-sm-12 col-md-6">
            <input type="text" class="form-control form-control-lg mb-3" placeholder="email" aria-label="email">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <input type="text" class="form-control form-control-lg" placeholder="Next of Kin" aria-label="Next of Kin">
          </div>
        </div>
      </div>
      <div>
        <p>Do you want to attach any documents? (NDIS plan/ support plan, behavioral plan etc.)</p>
        <div class="form-check mb-3">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault9">
          <label class="form-check-label" for="flexRadioDefault9">
            Yes
          </label>
        </div>
        <div class="form-check mb-3">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault10" checked>
          <label class="form-check-label" for="flexRadioDefault10">
            No
          </label>
        </div>
        <button class="btn btn-outline-secondary btn-block" role="button">
          <span class="material-icons me-1">upload</span> Upload Document
        </button>
      </div>
    </div>
    <div class="referral-wrapper mb-5">
      <h4>Person making the referral</h4>
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <input type="text" class="form-control form-control-lg mb-3" placeholder="First name" aria-label="First name">
        </div>
        <div class="col-sm-12 col-md-6">
          <input type="text" class="form-control form-control-lg mb-3" placeholder="last name" aria-label="last name">
        </div>
        <div class="col-sm-12 col-md-6">
          <input type="text" class="form-control form-control-lg mb-3" placeholder="Phone" aria-label="Phone">
        </div>
        <div class="col-sm-12 col-md-6">
          <input type="text" class="form-control form-control-lg mb-3" placeholder="email" aria-label="email">
        </div>
      </div>
      <p>Relationship with participant</p>
      <select class="form-select form-select-lg" aria-label="">
        <option selected="">Choose</option>
        <option value="1">2021</option>
        <option value="2">2022</option>
        <option value="3">2023</option>
      </select>
    </div>
    <div class="text-center mb-5">
      <button class="btn btn-primary" role="button">Send the Referral</button>
    </div>

    <hr>
  </div>
</section>
<!-- ================================== -->
<?php include 'footer.php'; ?>