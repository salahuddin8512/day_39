@extends('master.front.master')

@section('body')
    <section class="notice-section py-5">
        <div class="container">
            <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card card-body">
                          <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem doloremque eveniet impedit molestias nostrum numquam omnis perferendis quibusdam repellat suscipit.</h3>
                           <hr/>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit inventore laboriosam magni voluptate. Autem delectus, deserunt distinctio doloribus in minus omnis porro possimus quaerat saepe sequi sint tempore temporibus totam.</p>
                           <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit inventore laboriosam magni voluptate. Autem delectus, deserunt distinctio doloribus in minus omnis porro possimus quaerat saepe sequi sint tempore temporibus totam.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card card-body">
                            <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem doloremque eveniet impedit molestias nostrum numquam omnis perferendis quibusdam repellat suscipit.</h3>
                            <hr/>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit inventore laboriosam magni voluptate. Autem delectus, deserunt distinctio doloribus in minus omnis porro possimus quaerat saepe sequi sint tempore temporibus totam.</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit inventore laboriosam magni voluptate. Autem delectus, deserunt distinctio doloribus in minus omnis porro possimus quaerat saepe sequi sint tempore temporibus totam.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card card-body">
                            <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem doloremque eveniet impedit molestias nostrum numquam omnis perferendis quibusdam repellat suscipit.</h3>
                            <hr/>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit inventore laboriosam magni voluptate. Autem delectus, deserunt distinctio doloribus in minus omnis porro possimus quaerat saepe sequi sint tempore temporibus totam.</p>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit inventore laboriosam magni voluptate. Autem delectus, deserunt distinctio doloribus in minus omnis porro possimus quaerat saepe sequi sint tempore temporibus totam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <section class="py-5">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <div class="card mb-3">
                      <div class="row g-0">
                          <div class="col-md-5">
                              <img src="{{asset('/img/php1.jpg')}}" class="img-fluid h-100" alt="...">
                          </div>
                          <div class="col-md-7">
                              <div class="card-body">
                                  <figure>
                                      <blockquote class="blockquote">
                                          <p>A well-known quote, contained in a blockquote element.</p>
                                      </blockquote>
                                      <figcaption class="blockquote-footer">
                                          Someone famous in <cite title="Source Title">Source Title</cite>
                                      </figcaption>
                                  </figure>
                                  <ul>
                                      <li>Course Feature One</li>
                                      <li>Course Feature Two</li>
                                      <li>Course Feature Three</li>
                                      <li>Course Feature Four</li>
                                  </ul>
                                  <p class="card-text"><small class="text-muted">Last date of admission</small></p>
                                  <a href="{{route('course-detail')}}" class="btn btn-success">Read More</a>
                                  <a href="" class="btn btn-success float-end">Apply Now</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="card mb-3">
                      <div class="row g-0">
                          <div class="col-md-5">
                              <img src="{{asset('/img/php1.jpg')}}" class="img-fluid h-100" alt="...">
                          </div>
                          <div class="col-md-7">
                              <div class="card-body">
                                  <figure>
                                      <blockquote class="blockquote">
                                          <p>A well-known quote, contained in a blockquote element.</p>
                                      </blockquote>
                                      <figcaption class="blockquote-footer">
                                          Someone famous in <cite title="Source Title">Source Title</cite>
                                      </figcaption>
                                  </figure>
                                  <ul>
                                      <li>Course Feature One</li>
                                      <li>Course Feature Two</li>
                                      <li>Course Feature Three</li>
                                      <li>Course Feature Four</li>
                                  </ul>
                                  <p class="card-text"><small class="text-muted">Last date of admission</small></p>
                                  <a href="" class="btn btn-success">Read More</a>
                                  <a href="" class="btn btn-success float-end">Apply Now</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="card mb-3">
                      <div class="row g-0">
                          <div class="col-md-5">
                              <img src="{{asset('/img/php1.jpg')}}" class="img-fluid h-100" alt="...">
                          </div>
                          <div class="col-md-7">
                              <div class="card-body">
                                  <figure>
                                      <blockquote class="blockquote">
                                          <p>A well-known quote, contained in a blockquote element.</p>
                                      </blockquote>
                                      <figcaption class="blockquote-footer">
                                          Someone famous in <cite title="Source Title">Source Title</cite>
                                      </figcaption>
                                  </figure>
                                  <ul>
                                      <li>Course Feature One</li>
                                      <li>Course Feature Two</li>
                                      <li>Course Feature Three</li>
                                      <li>Course Feature Four</li>
                                  </ul>
                                  <p class="card-text"><small class="text-muted">Last date of admission</small></p>
                                  <a href="" class="btn btn-success">Read More</a>
                                  <a href="" class="btn btn-success float-end">Apply Now</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="card mb-3">
                      <div class="row g-0">
                          <div class="col-md-5">
                              <img src="{{asset('/img/php1.jpg')}}" class="img-fluid h-100" alt="...">
                          </div>
                          <div class="col-md-7">
                              <div class="card-body">
                                  <figure>
                                      <blockquote class="blockquote">
                                          <p>A well-known quote, contained in a blockquote element.</p>
                                      </blockquote>
                                      <figcaption class="blockquote-footer">
                                          Someone famous in <cite title="Source Title">Source Title</cite>
                                      </figcaption>
                                  </figure>
                                  <ul>
                                      <li>Course Feature One</li>
                                      <li>Course Feature Two</li>
                                      <li>Course Feature Three</li>
                                      <li>Course Feature Four</li>
                                  </ul>
                                  <p class="card-text"><small class="text-muted">Last date of admission</small></p>
                                  <a href="" class="btn btn-success">Read More</a>
                                  <a href="" class="btn btn-success float-end">Apply Now</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-9">
                                <input type="text" class="form-control" placeholder="Enter your email here"/>
                            </div>
                            <div class="col-3">
                                <input type="submit" class="btn btn-success w-100" value="Subscribe Now"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </section>
@endsection
