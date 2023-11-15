<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="vehicule_page.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <title>Vehicule page</title>
  </head>
  <body>
    <!-- KHADRE -->
    <div class="container-fluid section_range">
      <div class="row">
        <div class="col-lg-10">
          <p class="range_titre">Range Rover Sport 2015</p>
          <!-- Carousel -->
          <div
            id="carouselExample"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExample"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExample"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExample"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="image/prado.png"
                  class="d-block w-100 img_range"
                  alt="Image 1"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="image/landrover.png"
                  class="d-block w-100 img_range"
                  alt="Image 2"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="image/ranger.png"
                  class="d-block w-100 img_range"
                  alt="Image 3"
                />
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-2 mt-5">
          <!-- Images superposées verticalement -->
          <div class="d-none d-sm-block">
            <h4 class="range_sous_titre">By Ridgeways Autos</h4>

            <img
              src="image/ranger.png"
              class="d-block w-100 mt-2 img_super"
              alt="Small Image 1"
            />
            <img
              src="image/landrover.png"
              class="d-block w-100 mt-2 img_super"
              alt="Small Image 2"
            />
            <img
              src="image/prado.png"
              class="d-block w-100 mt-2 img_super"
              alt="Small Image 3"
            />
          </div>
        </div>
      </div>

      <!-- Bouton au milieu en bas du slide -->
      <div class="row">
        <div class="col-lg-10 offset-lg-1 text-center mb-1">
          <button type="button" class="button_enquiry m-5 p-2">
            Make An Enquiry
          </button>
        </div>
      </div>
    </div>

    <!--description BACHIR-->
    <div class="container d-flex vehicle-info px-4 ">
      <div class="row gx-5">
        <div class="desc-FjQ col">
          <div class="section-header">
            <p class="overview">Overview</p>
            <p class="vehicle-description">Vehicle Description</p>
          </div>

          <p class="text_desc">
            Embrace the allure of refined ruggedness with the second-hand Range
            Rover Sport. As the proud owner of this distinguished vehicle, I can
            attest to its timeless charm and remarkable capabilities.
            <br />
            This Range Rover Sport has been meticulously cared for, ensuring
            that its performance and comfort are as impressive as the day it
            first hit the road. With a range of powerful engine options, every
            drive is a symphony of power and control, while the advanced
            suspension system guarantees a smooth ride on any terrain. <br />
            Step into its luxurious cabin and you&#39;ll be greeted by the
            inviting embrace of leather seats that have aged gracefully. The
            infotainment system, designed to seamlessly integrate with modern
            connectivity needs, keeps you in touch with the world while on your
            journeys. <br />
            While the years have added character to its exterior, the Range
            Rover Sport&#39;s bold lines and iconic design elements remain as
            captivating as ever. Its history tells a story of adventures taken
            and memories made, ready to be continued by its next owner.
          </p>
        </div>
        <div class="col specs">
          <p class="specifications">Specifications</p>
          <table class="table1">
            <tbody>
              <tr class="table_danger">
                <td>Make</td>
                <td>Range Rover</td>
              </tr>
              <tr class="table_blanc1">
                <td>Model</td>
                <td>Sport AXCSAMPLE</td>
              </tr>
              <tr class="table_danger table-primary">
                <td>Year Of Manufacture</td>
                <td>2015</td>
              </tr>
              <tr class="table_blanc1">
                <td>Condition</td>
                <td>Used</td>
              </tr>
              <tr class="table_danger table-primary">
                <td>Fuel Type</td>
                <td>Petrol</td>
              </tr>
              <tr class="table_blanc1">
                <td>Transmission Mode</td>
                <td>Automatic</td>
              </tr>
              <tr class="table_danger table-primary">
                <td>color</td>
                <td>silver</td>
              </tr>
              <tr class="table_blanc1">
                <td>Drive Mode</td>
                <td>4 Wheel Drive</td>
              </tr>
              <tr class="table_danger table-primary">
                <td>Seats</td>
                <td>8</td>
              </tr>
              <tr class="table_blanc1">
                <td>Engine Capacity</td>
                <td>4600 CC</td>
              </tr>
              <tr class="table_danger table-primary">
                <td>Horse Power</td>
                <td>318 Hp</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- =======Ousmane html vendor info ======= -->
    <section class="khoudia">
      <div class="container mt-1">
        <div class="row mb-4">
          <div class="col-sm-12">
            <div class="text-center mb-5">
              <div class="vendor vente_info">VENDOR INFO</div>
              <h2 class="vente_titre">About The Seller</h2>
            </div>
          </div>
        </div>

        <!-- ======= About div ======= -->
        <div class="row">
          <div class="col-md-6 mb-3">
            <div
              class="card vente_card d-flex align-items-center justify-content-center"
            >
              <img
                src="image/logocar.png"
                class="img-fluid"
                alt="Image de la carte"
                width="150px"
                style="margin-top: 20px"
              />

              <div class="card-body carte_body_vente">
                <h5
                  class="card-title text-center text-danger align-center titre_vente"
                >
                  <strong>Ridgeways Auto</strong>
                </h5>
                <p class="car text-center text-danger">Car Dealer</p>
                <p class="card-text texte_vente">
                  As a premier car dealership, we take immense pride in offering
                  a curated selection of top-quality vehicles that cater to a
                  wide range of preferences and needs. With a legacy of trust
                  and reliability, Ridgeways Motors is your destination for
                  finding the perfect vehicle to complement your lifestyle. Our
                  experienced team is dedicated to guiding you through a
                  seamless and enjoyable car-buying journey, ensuring that your
                  every requirement is met with utmost care. Discover a world of
                  automotive luxury and precision at Ridgeways Motors – where
                  your dream car awaits.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6" style="padding: 0px 10px 5px 100px">
            <div
              class="card"
              style="
                width: 400px;
                height: 60px;
                border: 2px solid #ddd;
                border-radius: 10px;
              "
            >
              <div
                class="card-body list-group-item list-group-item-action d-flex align-items-center justify-content-between fw-bold"
              >
                <strong class="text-danger m-3"
                  >View Seller Contact Details
                </strong>
                <i class="bi bi-chevron-compact-down"></i>
              </div>
            </div>
            <br />
            <div
              class="card"
              style="
                width: 400px;
                height: 60px;
                border: 2px solid #ddd;
                border-radius: 10px;
              "
            >
              <div
                class="card-body list-group-item list-group-item-action d-flex align-items-center justify-content-between fw-bold"
              >
                <strong class="text-danger m-3"
                  >View All Products by This Seller</strong
                >
                <i class="bi bi-arrow-right-short"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- SECTION FORUM KHOUDIA -->
  <div class="section5">
    <div class="container-fluid py-5">
      <div class="row mx-5">
        <div class="row">
          <div class="col-lg-12">
            <div class="forum">
              <p class="forum_titre text-center mb-0">Forum on this vehicle</p>
              <p class="forum_titre1 text-center mb-5 ">Join The Discussion</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-sm-12">
              <div class="card parent mb-4">
                <div class="card-body py-0 px-0 d-flex">
                  <div class="lateral"></div>
                  <div class="ms-3 message">
                    <p><a href="#"><i class="bi bi-person-fill text-dark me-3 "></i></a><small class="james">James Kirori</small></p>
                    <div class="card-title msg">Budget aside - Would you consider Range Rover Sport as best for Offroad Adventures?</div>
                    <div class=" card-text text-sm aimes d-flex">
                      <p> <a href="#"><i class="bi bi-arrow-90deg-left text-dark me-2"></i></a><small>6 replies</small></p>
                      <p> <a href="#"><i class="bi bi-hand-thumbs-up ms-5 text-dark me-2"></i></a><small>3 Upvotes</small></p>
                      <p> <a href="#"><i class="bi bi-hand-thumbs-down-fill ms-5 text-dark me-2"></a></i><small>1 Downvote</small></p>
                    </div>
                  </div>
                  <div class="vue">
                    <a href="#" class="vue1"><i class="bi bi-eye-fill eye text-dark display-6 "></i></a>
                  </div>
                </div>
              </div>
              <div class="card parent mb-4">
                <div class="card-body py-0 px-0 d-flex">
                  <div class="lateral"></div>
                  <div class="ms-3 message">
                    <p><a href="#"><i class="bi bi-person-fill text-dark me-3 "></i></a><small class="james">James Kirori</small></p>
                    <div class="card-title msg">Budget aside - Would you consider Range Rover Sport as best for Offroad Adventures?</div>
                    <div class=" card-text text-sm aimes d-flex">
                      <p> <a href="#"><i class="bi bi-arrow-90deg-left text-dark me-2"></i></a><small>6 replies</small></p>
                      <p> <a href="#"><i class="bi bi-hand-thumbs-up ms-5 text-dark me-2"></i></a><small>3 Upvotes</small></p>
                      <p> <a href="#"><i class="bi bi-hand-thumbs-down-fill ms-5 text-dark me-2"></a></i><small>1 Downvote</small></p>
                    </div>
                  </div>
                  <div class="vue">
                    <a href="#" class="vue1"><i class="bi bi-eye-fill eye text-dark display-6 "></i></a>
                  </div>
                </div>
              </div>
              <div class="card parent mb-5">
                <div class="card-body py-0 px-0 d-flex">
                  <div class="lateral"></div>
                  <div class="ms-3 message">
                    <p><a href="#"><i class="bi bi-person-fill text-dark me-3 "></i></a><small class="james">James Kirori</small></p>
                    <div class="card-title msg">Budget aside - Would you consider Range Rover Sport as best for Offroad Adventures?</div>
                    <div class=" card-text text-sm aimes d-flex">
                      <p> <a href="#"><i class="bi bi-arrow-90deg-left text-dark me-2"></i></a><small>6 replies</small></p>
                      <p> <a href="#"><i class="bi bi-hand-thumbs-up ms-5 text-dark me-2"></i></a><small>3 Upvotes</small></p>
                      <p> <a href="#"><i class="bi bi-hand-thumbs-down-fill ms-5 text-dark me-2"></a></i><small>1 Downvote</small></p>
                    </div>
                  </div>
                  <div class="vue">
                    <a href="#" class="vue1"><i class="bi bi-eye-fill eye text-dark display-6 "></i></a>
                  </div>
                </div>
              </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="card carte_comment">
              <div class="card-body">
                <form class="comment mx-3 py-2 ">
                  <div class="title_comment mb-3">Your Comment</div>
                  <div class="mb-3">
                    <input type="text" class="form-control put_comment" id="name" placeholder="Your Name">
                  </div>
                  <div class="mb-3">
                    <input type="email" class="form-control put_comment" id="email" placeholder="Your Email">
                  </div>
                  <div class="mb-3 body_comment" >
                    <input type="text" class="form-control put_comment " id="text" placeholder="Your Comment">
                  </div>
                  <button type="submit" class="btn bouton_comment text-white">Send</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
