<?php $page_name = "grid"; ?>
<?php include('temps/header.php'); ?>

<!-- Subhead
================================================== -->
<header class="jumbotron-app subhead" id="overview">
  <div class="container">
    <div class="span12">
      <h1>Scaffolding</h1>
      <p class="lead">Bootdation is built on responsive 12-column grids, layouts, and components.</p>
    </div>
  </div>
</header>

  <div class="container">
        <!-- Grid system
        ================================================== -->
        <section id="gridSystem">
          <div class="page-header">
            <h1>Default grid system</h1>
          </div>
          <div class="bs-docs-grid">
            <div class="row show-grid">
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
            </div>
            <div class="row show-grid">
              <div class="span2">2</div>
              <div class="span3">3</div>
              <div class="span4">4</div>
              <div class="span3">3</div>
            </div>
            <div class="row show-grid">
              <div class="span6">6</div>
              <div class="span6">6</div>
            </div>
            <div class="row show-grid">
              <div class="span12">12</div>
            </div>
          </div>

          <h2>Nesting columns</h2>
          <div class="row show-grid">
            <div class="span12">
              Level 1 column
              <div class="row show-grid">
                <div class="span9">
                  Level 2
                </div>
                <div class="span3">
                  Level 2
                </div>
              </div>
            </div>
          </div>
        </section>



        <!-- Fluid grid system
        ================================================== -->
        <section id="fluidGridSystem">
          <div class="page-header">
            <h1>Fluid grid system</h1>
          </div>
          <div class="bs-docs-grid">
            <div class="row show-grid">
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
            </div>
            <div class="row show-grid">
              <div class="span4">4</div>
              <div class="span4">4</div>
              <div class="span4">4</div>
            </div>
            <div class="row show-grid">
              <div class="span4">4</div>
              <div class="span8">8</div>
            </div>
            <div class="row show-grid">
              <div class="span6">6</div>
              <div class="span6">6</div>
            </div>
            <div class="row show-grid">
              <div class="span12">12</div>
            </div>
          </div>

         

          <h2>Fluid offsetting</h2>
          <div class="bs-docs-grid">
            <div class="row show-grid">
              <div class="span4">4</div>
              <div class="span4 offset4">4 offset 4</div>
            </div><!-- /row -->
            <div class="row show-grid">
              <div class="span3 offset3">3 offset 3</div>
              <div class="span3 offset3">3 offset 3</div>
            </div><!-- /row -->
            <div class="row show-grid">
              <div class="span6 offset6">6 offset 6</div>
            </div><!-- /row -->
          </div>

          <h2>Fluid nesting</h2>
          <div class="row show-grid">
            <div class="span12">
              Fluid 12
              <div class="row show-grid">
                <div class="span6">
                  Fluid 6
                </div>
                <div class="span6">
                  Fluid 6
                </div>
              </div>
            </div>
          </div>
        </section>

  </div>
<?php include('temps/footer.php'); ?>
