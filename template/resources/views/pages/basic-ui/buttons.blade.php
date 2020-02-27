@extends('layout.master')
@section('content')

<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="row">
        <div class="col-md-6">
          <div class="card-body">
            <h4 class="card-title">Normal buttons</h4>
            <p class="card-description">Use any of the available button classes to quickly create a styled button.</p>
            <div class="template-demo">
              <button type="button" class="btn btn-primary btn-fw">Primary</button>
              <button type="button" class="btn btn-secondary btn-fw">Secondary</button>
              <button type="button" class="btn btn-success btn-fw">Success</button>
              <button type="button" class="btn btn-danger btn-fw">Danger</button>
              <button type="button" class="btn btn-warning btn-fw">Warning</button>
              <button type="button" class="btn btn-info btn-fw">Info</button>
              <button type="button" class="btn btn-light btn-fw">Light</button>
              <button type="button" class="btn btn-dark btn-fw">Dark</button>
              <button type="button" class="btn btn-link btn-fw">Link</button>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <h4 class="card-title">Fab Buttons</h4>
            <p class="card-description">Use <code>class="btn-icons"</code> or <code>class="btn-icons btn-rounded"</code> for fab styled buttons</p>
            <div class="template-demo">
              <button type="button" class="btn btn-icons btn-rounded btn-light">
                <i class="mdi mdi-home-outline"></i>
              </button>
              <button type="button" class="btn btn-icons btn-rounded btn-secondary">
                <i class="mdi mdi-edge"></i>
              </button>
              <button type="button" class="btn btn-icons btn-rounded btn-success">
                <i class="mdi mdi-email"></i>
              </button>
              <button type="button" class="btn btn-icons btn-rounded btn-primary">
                <i class="mdi mdi-star"></i>
              </button>
              <button type="button" class="btn btn-icons btn-rounded btn-warning">
                <i class="mdi mdi-map-marker"></i>
              </button>
              <button type="button" class="btn btn-icons btn-rounded btn-info">
                <i class="mdi mdi-code-braces"></i>
              </button>
              <br>
              <button type="button" class="btn btn-icons btn-inverse-light">
                <i class="mdi mdi-home-outline"></i>
              </button>
              <button type="button" class="btn btn-icons btn-inverse-secondary">
                <i class="mdi mdi-edge"></i>
              </button>
              <button type="button" class="btn btn-icons btn-inverse-success">
                <i class="mdi mdi-email"></i>
              </button>
              <button type="button" class="btn btn-icons btn-inverse-primary">
                <i class="mdi mdi-star"></i>
              </button>
              <button type="button" class="btn btn-icons btn-inverse-warning">
                <i class="mdi mdi-map-marker"></i>
              </button>
              <button type="button" class="btn btn-icons btn-inverse-info">
                <i class="mdi mdi-code-braces"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card-body">
            <h4 class="card-title">Outlined buttons</h4>
            <p class="card-description">Use <code>class="btn-outline-*"</code> for outlined style</p>
            <div class="template-demo">
              <button type="button" class="btn btn-outline-primary">Primary</button>
              <button type="button" class="btn btn-outline-secondary">Secondary</button>
              <button type="button" class="btn btn-outline-success">Success</button>
              <button type="button" class="btn btn-outline-danger">Danger</button>
              <button type="button" class="btn btn-outline-warning">Warning</button>
              <button type="button" class="btn btn-outline-info">Info</button>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <h4 class="card-title">Rounded Outlines</h4>
            <p class="card-description">Use <code>class="btn-outline-* btn-rounded"</code> for rounded outlined style</p>
            <div class="template-demo">
              <button type="button" class="btn btn-icons btn-rounded btn-outline-light">
                <i class="mdi mdi-home-outline"></i>
              </button>
              <button type="button" class="btn btn-icons btn-rounded btn-outline-secondary">
                <i class="mdi mdi-edge"></i>
              </button>
              <button type="button" class="btn btn-icons btn-rounded btn-outline-success">
                <i class="mdi mdi-email"></i>
              </button>
              <button type="button" class="btn btn-icons btn-rounded btn-outline-primary">
                <i class="mdi mdi-star"></i>
              </button>
              <button type="button" class="btn btn-icons btn-rounded btn-outline-warning">
                <i class="mdi mdi-map-marker"></i>
              </button>
              <button type="button" class="btn btn-icons btn-rounded btn-outline-info">
                <i class="mdi mdi-code-braces"></i>
              </button>
              <br>
              <button type="button" class="btn btn-icons btn-rounded btn-inverse-outline-light">
                <i class="mdi mdi-home-outline"></i>
              </button>
              <button type="button" class="btn btn-icons btn-rounded btn-inverse-outline-secondary">
                <i class="mdi mdi-edge"></i>
              </button>
              <button type="button" class="btn btn-icons btn-rounded btn-inverse-outline-success">
                <i class="mdi mdi-email"></i>
              </button>
              <button type="button" class="btn btn-icons btn-rounded btn-inverse-outline-primary">
                <i class="mdi mdi-star"></i>
              </button>
              <button type="button" class="btn btn-icons btn-rounded btn-inverse-outline-warning">
                <i class="mdi mdi-map-marker"></i>
              </button>
              <button type="button" class="btn btn-icons btn-rounded btn-inverse-outline-info">
                <i class="mdi mdi-code-braces"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card-body">
            <h4 class="card-title">Inverse buttons</h4>
            <p class="card-description">Use <code>class="btn-inverse-*"</code> for inverse styling</p>
            <div class="template-demo">
              <button type="button" class="btn btn-inverse-primary btn-fw">Primary</button>
              <button type="button" class="btn btn-inverse-secondary btn-fw">Secondary</button>
              <button type="button" class="btn btn-inverse-success btn-fw">Success</button>
              <button type="button" class="btn btn-inverse-danger btn-fw">Danger</button>
              <button type="button" class="btn btn-inverse-warning btn-fw">Warning</button>
              <button type="button" class="btn btn-inverse-info btn-fw">Info</button>
              <button type="button" class="btn btn-inverse-light btn-fw">Light</button>
              <button type="button" class="btn btn-inverse-dark btn-fw">Dark</button>
              <button type="button" class="btn btn-link btn-fw">Link</button>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <h4 class="card-title">Button Sizes</h4>
            <p class="card-description">Use class <code>"btn-lg", "btn-sm"</code> for different sizing</p>
            <div class="template-demo">
              <button type="button" class="btn btn-light btn-lg">btn-lg</button>
              <button type="button" class="btn btn-light">btn-md</button>
              <button type="button" class="btn btn-light btn-sm">btn-sm</button>
              <br>
              <button type="button" class="btn btn-secondary btn-lg">btn-lg</button>
              <button type="button" class="btn btn-info">btn-md</button>
              <button type="button" class="btn btn-primary btn-sm">btn-sm</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="row">
        <div class="col-md-6">
          <div class="card-body">
            <h4 class="card-title">Rounded filled Buttons</h4>
            <p class="card-description">Use class <code>.btn-rounded</code> for rounded buttons</p>
            <div class="template-demo">
              <button type="button" class="btn btn-primary btn-rounded btn-fw">Primary</button>
              <button type="button" class="btn btn-secondary btn-rounded btn-fw">Secondary</button>
              <button type="button" class="btn btn-success btn-rounded btn-fw">Success</button>
              <button type="button" class="btn btn-danger btn-rounded btn-fw">Danger</button>
              <button type="button" class="btn btn-warning btn-rounded btn-fw">Warning</button>
              <button type="button" class="btn btn-info btn-rounded btn-fw">Info</button>
              <button type="button" class="btn btn-light btn-rounded btn-fw">Light</button>
              <button type="button" class="btn btn-dark btn-rounded btn-fw">Dark</button>
              <button type="button" class="btn btn-link btn-rounded btn-fw">Link</button>
            </div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Inverse Rounded buttons</h4>
            <p class="card-description">Use any of the available button classes to quickly create a styled button.</p>
            <div class="template-demo">
              <button type="button" class="btn btn-inverse-primary btn-rounded btn-fw">Primary</button>
              <button type="button" class="btn btn-inverse-secondary btn-rounded btn-fw">Secondary</button>
              <button type="button" class="btn btn-inverse-success btn-rounded btn-fw">Success</button>
              <button type="button" class="btn btn-inverse-danger btn-rounded btn-fw">Danger</button>
              <button type="button" class="btn btn-inverse-warning btn-rounded btn-fw">Warning</button>
              <button type="button" class="btn btn-inverse-info btn-rounded btn-fw">Info</button>
              <button type="button" class="btn btn-inverse-light btn-rounded btn-fw">Light</button>
              <button type="button" class="btn btn-inverse-dark btn-rounded btn-fw">Dark</button>
              <button type="button" class="btn btn-inverse-link btn-rounded btn-fw">Link</button>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <h4 class="card-title">Rounded Outlined</h4>
            <p class="card-description">Use class <code>.btn-rounded</code> for rounded style</p>
            <div class="template-demo">
              <button type="button" class="btn btn-outline-primary btn-rounded btn-fw">Primary</button>
              <button type="button" class="btn btn-outline-secondary btn-rounded btn-fw">Secondary</button>
              <button type="button" class="btn btn-outline-success btn-rounded btn-fw">Success</button>
              <button type="button" class="btn btn-outline-danger btn-rounded btn-fw">Danger</button>
              <button type="button" class="btn btn-outline-warning btn-rounded btn-fw">Warning</button>
              <button type="button" class="btn btn-outline-info btn-rounded btn-fw">Info</button>
              <button type="button" class="btn btn-outline-light btn-rounded btn-fw">Light</button>
              <button type="button" class="btn btn-outline-dark btn-rounded btn-fw">Dark</button>
              <button type="button" class="btn btn-outline-link btn-rounded btn-fw">Link</button>
            </div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Button Block</h4>
            <p class="card-description">Use class <code>.btn-block</code> for full width buttons</p>
            <div class="template-demo">
              <button type="button" class="btn btn-info btn-block">Block Button</button>
              <button type="button" class="btn btn-light btn-block">Block Button</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="row">
        <div class="col-md-6">
          <div class="card-body">
            <h4 class="card-title">Grouped buttons</h4>
            <p class="card-description">These are the different buttons group component</p>
            <div class="template-demo">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-outline-secondary">1</button>
                <button type="button" class="btn btn-outline-secondary">2</button>
                <button type="button" class="btn btn-outline-secondary">3</button>
              </div>
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-outline-secondary">
                  <i class="mdi mdi-heart-outline"></i>
                </button>
                <button type="button" class="btn btn-outline-secondary">
                  <i class="mdi mdi-calendar"></i>
                </button>
                <button type="button" class="btn btn-outline-secondary">
                  <i class="mdi mdi-clock"></i>
                </button>
              </div>
            </div>
            <div class="template-demo">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">1</button>
                <button type="button" class="btn btn-primary">2</button>
                <button type="button" class="btn btn-primary">3</button>
              </div>
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">
                  <i class="mdi mdi-heart-outline"></i>
                </button>
                <button type="button" class="btn btn-primary">
                  <i class="mdi mdi-calendar"></i>
                </button>
                <button type="button" class="btn btn-primary">
                  <i class="mdi mdi-clock"></i>
                </button>
              </div>
            </div>
            <div class="template-demo">
              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group" role="group" aria-label="First group">
                  <button type="button" class="btn btn-light">1</button>
                  <button type="button" class="btn btn-light">2</button>
                  <button type="button" class="btn btn-light">3</button>
                </div>
                <div class="btn-group" role="group" aria-label="Second group">
                  <button type="button" class="btn btn-light">5</button>
                  <button type="button" class="btn btn-light">6</button>
                </div>
                <div class="btn-group" role="group" aria-label="Third group">
                  <button type="button" class="btn btn-light">8</button>
                </div>
              </div>
            </div>
            <div class="template-demo">
              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group" role="group" aria-label="First group">
                  <button type="button" class="btn btn-primary">1</button>
                  <button type="button" class="btn btn-primary">2</button>
                </div>
                <div class="btn-group" role="group" aria-label="Second group">
                  <button type="button" class="btn btn-primary">5</button>
                  <button type="button" class="btn btn-primary">6</button>
                  <button type="button" class="btn btn-primary">7</button>
                </div>
                <div class="btn-group" role="group" aria-label="Third group">
                  <button type="button" class="btn btn-primary">8</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <h4 class="card-title">Icons Buttons</h4>
            <p class="card-description">Use any of the available button classes to quickly create a styled button.</p>
            <div class="template-demo">
              <button type="button" class="btn btn-light btn-fw">
                <i class="mdi mdi-heart-outline"></i>Default</button>
              <button type="button" class="btn btn-primary btn-fw">
                <i class="mdi mdi-star-outline"></i>Primary</button>
              <button type="button" class="btn btn-success btn-fw">
                <i class="mdi mdi-check"></i>Success</button>
              <button type="button" class="btn btn-secondary btn-fw">
                <i class="mdi mdi-file-document"></i>Submit</button>
              <button type="button" class="btn btn-dark btn-fw">
                <i class="mdi mdi-cloud-download"></i>Edit</button>
              <button type="button" class="btn btn-danger btn-fw">
                <i class="mdi mdi-alert-outline"></i>Warning</button>
              <button type="button" class="btn btn-info btn-fw">
                <i class="mdi mdi-upload"></i>Upload</button>
              <button type="button" class="btn btn-success btn-fw">
                <i class="mdi mdi-printer"></i>Print</button>
              <button type="button" class="btn btn-light btn-fw">
                <i class="mdi mdi-refresh"></i>Reset</button>
            </div>
          </div>
          <div class="card-body">
            <h4 class="card-title">Outline icons</h4>
            <p class="card-description">Use any of the available button classes to quickly create a styled button.</p>
            <div class="template-demo">
              <button type="button" class="btn btn-outline-primary btn-fw">
                <i class="mdi mdi-file-document"></i>Submit</button>
              <button type="button" class="btn btn-secondary btn-fw">
                <i class="mdi mdi-cloud-download"></i>Edit</button>
              <button type="button" class="btn btn-outline-danger btn-fw">
                <i class="mdi mdi-alert-outline"></i>Warning</button>
              <button type="button" class="btn btn-outline-info btn-fw">
                <i class="mdi mdi-upload"></i>Upload</button>
              <button type="button" class="btn btn-outline-success btn-fw">
                <i class="mdi mdi-printer"></i>Print</button>
              <button type="button" class="btn btn-outline-light btn-fw">
                <i class="mdi mdi-refresh"></i>Reset</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="card-body">
            <h4 class="card-title">Social Buttons</h4>
            <p class="card-description">use class <code>.social-btn</code> for social button</p>
            <div class="template-demo">
              <button type="button" class="btn social-btn btn-facebook">
                <i class="mdi mdi-facebook"></i>
              </button>
              <button type="button" class="btn social-btn btn-twitter">
                <i class="mdi mdi-twitter"></i>
              </button>
              <button type="button" class="btn social-btn btn-dribbble">
                <i class="mdi mdi-dribbble"></i>
              </button>
              <button type="button" class="btn social-btn btn-linkedin">
                <i class="mdi mdi-linkedin"></i>
              </button>
              <button type="button" class="btn social-btn btn-google">
                <i class="mdi mdi-google-plus"></i>
              </button>
              <br>
              <button type="button" class="btn social-btn btn-social-outline-facebook">
                <i class="mdi mdi-facebook"></i>
              </button>
              <button type="button" class="btn social-btn btn-social-outline-twitter">
                <i class="mdi mdi-twitter"></i>
              </button>
              <button type="button" class="btn social-btn btn-social-outline-dribbble">
                <i class="mdi mdi-dribbble"></i>
              </button>
              <button type="button" class="btn social-btn btn-social-outline-linkedin">
                <i class="mdi mdi-linkedin"></i>
              </button>
              <button type="button" class="btn social-btn btn-social-outline-google">
                <i class="mdi mdi-google-plus"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card-body">
            <h4 class="card-title">Rounded Social Buttons</h4>
            <p class="card-description">use class <code>".social-btn", ".btn-rounded"</code> for social button</p>
            <div class="template-demo">
              <button type="button" class="btn social-btn btn-rounded btn-facebook">
                <i class="mdi mdi-facebook"></i>
              </button>
              <button type="button" class="btn social-btn btn-rounded btn-twitter">
                <i class="mdi mdi-twitter"></i>
              </button>
              <button type="button" class="btn social-btn btn-rounded btn-dribbble">
                <i class="mdi mdi-dribbble"></i>
              </button>
              <button type="button" class="btn social-btn btn-rounded btn-linkedin">
                <i class="mdi mdi-linkedin"></i>
              </button>
              <button type="button" class="btn social-btn btn-rounded btn-google">
                <i class="mdi mdi-google-plus"></i>
              </button>
              <br>
              <button type="button" class="btn social-btn btn-rounded btn-social-outline-facebook">
                <i class="mdi mdi-facebook"></i>
              </button>
              <button type="button" class="btn social-btn btn-rounded btn-social-outline-twitter">
                <i class="mdi mdi-twitter"></i>
              </button>
              <button type="button" class="btn social-btn btn-rounded btn-social-outline-dribbble">
                <i class="mdi mdi-dribbble"></i>
              </button>
              <button type="button" class="btn social-btn btn-rounded btn-social-outline-linkedin">
                <i class="mdi mdi-linkedin"></i>
              </button>
              <button type="button" class="btn social-btn btn-rounded btn-social-outline-google">
                <i class="mdi mdi-google-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection