<div class="row">
  <div class="col-lg-4 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-aqua">
      <div class="inner">
        <h3><?php echo $jml_peserta; ?></h3>
        <p>Data Peserta</p>
      </div>
      <div class="icon">
        <i class="fa fa-group"></i>
      </div>
      <a href="./?page=data_peserta" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div><!-- ./col -->
  <div class="col-lg-4 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-green">
      <div class="inner">
        <h3><?php //echo mysql_num_rows($data_pembelian); ?>0</h3>
        <p>Data Lulus</p>
      </div>
      <div class="icon">
        <i class="fa fa-check-circle-o"></i>
      </div>
      <a href="./?page=data_pembelian" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div><!-- ./col -->
  <div class="col-lg-4 col-xs-6">
    <!-- small box -->
    <div class="small-box bg-yellow">
      <div class="inner">
        <h3><?php //echo mysql_num_rows($data_teknisi); ?>0</h3>
        <p>Data Tidak Lulus</p>
      </div>
      <div class="icon">
        <i class="fa fa-times-circle-o"></i>
      </div>
      <a href="./?page=data_teknisi" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div><!-- ./col -->
  
</div><!-- /.row -->

<div class="row">
  <div class="col-md-6">
    <!-- Bar chart -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <i class="fa fa-bar-chart-o"></i>

        <h3 class="box-title">Bar Chart</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <div id="bar-chart" style="height: 300px;"></div>
      </div>
      <!-- /.box-body-->
    </div>
  </div>
  <script src="<? echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dist/js/jquery.flot.categories.js"></script>
  <script type="text/javascript">
  /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [['January', 10], ['February', 8], ['March', 4], ['April', 13], ['May', 17], ['June', 9]],
      color: '#3c8dbc'
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
          align   : 'center'
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })
    /* END BAR CHART */
    </script>